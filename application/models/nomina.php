<?php

class Nomina extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('controlperiodo');
	}

	/*
	Función que verifica si la nómina ya fue registrada en el sistema,
	regresa un boolean
	true: ya se registro
	false: no se ha registrado
	*/
	function isWeekRegistered($week)
	{
		$periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$query = $this->db->query("SELECT ifnull(status,0) as status FROM nomina WHERE week = ".$week." AND periodo_id = ".$periodo_id);
		log_message('info', '###### model::nomina::isWeekRegistered: '.$this->db->last_query());
		if ($query->num_rows() > 0)
			return true;
		return false;
	}

	function registrarPrestamos($week)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$status = '';
		$sql_prestamo = "
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = ".$current_periodo_id."
				AND (status =1)
				AND week <= ".$week."
		";
		$prestamos = $this->db->query($sql_prestamo);
		log_message('info', '###### model::nomina::registrarPrestamos: '.$this->db->last_query());
		if ($prestamos->num_rows() > 0)
		{
			foreach ($prestamos->result() as $row)
			{
				$total = $row->monto_pago + $row->monto_abonado;
				$monto_deposito = ($total <= $row->monto_total) ? $row->monto_pago : $row->monto_total - $row->monto_abonado;
				$prestamos_registro = array(
					'monto' => $monto_deposito,
					'week' => $week,
					'year' => $row->year,
					'status' => $row->status,
					'prestamo_id' => $row->id
				);
				$this->db->insert('prestamo_registro', $prestamos_registro);					
				log_message('info', '###### model::nomina::registrarPrestamos: '.$this->db->last_query());

				$sql_pr = "
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = ".$row->id."
					AND status <> 0";
				$query = $this->db->query($sql_pr);
				log_message('info', '###### model::nomina::registrarPrestamos: '.$this->db->last_query());
				$result = $query->result();
				if(sizeof($result)){
					$pr = $result[0];
					if(round($pr->total_registro) == round($row->monto_total)){
						$data = array(
			               'monto_abonado' => $pr->total_registro,
			               'status' => 3,
			               'week_end' => $week
			            );
					}
					else{
						$data = array(
			               'monto_abonado' => $pr->total_registro
			            );
					}
					$this->db->where('id', $row->id);
					$this->db->update('prestamo', $data); 
					log_message('info', '###### model::nomina::registrarPrestamos: '.$this->db->last_query());
				}
			}
		}
	}

	/*
	Guarda el registro de los ahorros, al momento de guardar nómina.
	Esta función alimenta la tabla:ahorro_registro
	*/
	function registrarAhorro($week)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$sql_ahorro = "
		SELECT monto, year, status, id
			FROM ahorro
			WHERE (status =1)
				AND periodo_id = ".$current_periodo_id."
			";
		$ahorros = $this->db->query($sql_ahorro); 
		if ($ahorros->num_rows() > 0)
		{
			foreach ($ahorros->result() as $row)
			{
				$ahorro_registro = array(
					'monto' => $row->monto,
					'week' => $week,
					'year' => $row->year,
					'status' => $row->status,
					'ahorro_id' => $row->id
				);
				$this->db->insert('ahorro_registro',$ahorro_registro);
			}
		}
	}

	/*
	Una vez que la nomina es guardada, se va revisar los estados de los exentos
	para volver activar el prestamo o ahorro. Para esto se va a comparar la suma
	de cuando empezo el periodo exento mas su fecha de comienzo y debera ser 
	mayor o igual a la semana en que se esta validando para realizar el cambio.
	*/
	function revisar_excentos($week, $periodo_id)
	{
		if(!empty($week))
		{
			/* parte para ahorrs */
			$sql = "
				SELECT 
					e.id as exento_id,
					e.val as duracion,
					ifnull(e.week_start, 0) as comienzo,
					a.id as ahorro_id
				FROM excento e
				INNER JOIN ahorro a
				ON e.ahorro_id=a.id
				WHERE e.status=1
					AND e.tipo=0
					AND a.periodo_id=".$periodo_id."
					AND e.val!=0
					AND a.status=2
					";
			$query = $this->db->query($sql); 	
			if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{
					$tmp = $row->duracion + $row->comienzo;
					$flag = $tmp <= $week ? 1:0;
					if( $flag )
					{
						$values = array('status'=>1);
						$this->db->where('id', $row->ahorro_id);
						$this->db->update('ahorro', $values); 

						log_message('info', '###### model::nomina::revisar_excentos: '.$this->db->last_query());

						$values = array('status'=>0);
						$this->db->where('id', $row->exento_id);
						$this->db->update('excento', $values);
						log_message('info', '###### model::nomina::revisar_excentos: '.$this->db->last_query());
					}
				}
			}

			/* parte para prestamos */
			$sql = "
				SELECT 
					e.id as exento_id,
					e.val as duracion,
					ifnull(e.week_start, 0) as comienzo,
					p.id as prestamo_id
				FROM excento e
				INNER JOIN prestamo p
				ON e.prestamo_id=p.id
				WHERE e.status=1
					AND e.tipo=1
					AND p.periodo_id=".$periodo_id."
					AND e.val!=0
					AND p.status=2
					";
			$query = $this->db->query($sql); 	
			if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{
					$tmp = $row->duracion + $row->comienzo;
					$flag = $tmp <= $week ? 1:0;
					if( $flag )
					{
						$values = array('status'=>1);
						$this->db->where('id', $row->prestamo_id);
						$this->db->update('prestamo', $values); 

						log_message('info', '###### model::nomina::revisar_excentos: '.$this->db->last_query());

						$values = array('status'=>0);
						$this->db->where('id', $row->exento_id);
						$this->db->update('excento', $values);
						log_message('info', '###### model::nomina::revisar_excentos: '.$this->db->last_query());
					}
				}
			}
		}
	}

	/*
	Función principal, pues se encarga de guardar en la BD el registro de la nómina, registro
	de préstamos y registro de ahorros.
	Esta fn es ejecutada a través de reportes::registrarNomina, puede ser llamado a través de JS
	*/

	function registrarNomina($week)
	{
		$registrado = false;

		if(!$this->isWeekRegistered($week))
		{
			$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
			$this->registrarAhorro($week);
			$this->registrarPrestamos($week);
			$nomina_registro = array(
						'week' => $week,
						'status' => 1,
						'periodo_id' => $current_periodo_id
					);
			if($this->db->insert('nomina',$nomina_registro)){
				$registrado = true;
				$this->revisar_excentos($week, $current_periodo_id);
			}
		}

		return $registrado;
	}

	/*
	Únicamente muestra la información de la nómina que se guardaría al presionar en
	"guardar nómina", este botón aparece solo cuando la nómina no está validada.
	La información mostrada involucra el monto de descuento por concepto de ahorro y préstamos.
	El monto de ahorro y préstamo son con base al registo

	NOTA: La fn se ayuda de crear 2 tablas temporales, poblaras, seleccionar su información y
	finalmente a esta información darle el formato de tabla, finalmente se borran las tablas
	temporales. Esto se puedo optimizar al optar por otro método.

	Parámetros:
	$week = Recibe el número de semana
	$week_is_registered = Boolean que determina si ya está registrada la semana

	Regresa:
	El HTML de la tabla que muestra el desglose
	*/
	function executeNomina($week, $week_is_registered)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		if($week_is_registered)
			$str_is_registered = '1';
		else
			$str_is_registered = '0';
		$filters = $_POST;
		$response = $clas = $prestamo = $pagination = $sql = $msg = '';
		$i = $no = 1;
		$emp_per_page = 10000;
		$i = 1;
		$descontar = $ahorro = 0;
		$page = 1;
		if(!empty($filters['page'])) $page = $filters['page'];
		$keepOrderby = 0;
		$sql = "
		SELECT DISTINCT (
			u.no_emp
			)
			FROM user u
			LEFT JOIN ahorro a on a.user_id = u.id
			LEFT JOIN prestamo p on p.user_id = u.id
			where u.status = 1 
			AND (
				p.periodo_id = ".$current_periodo_id."
				AND p.status = 1
			)
			OR(
				a.periodo_id = ".$current_periodo_id."
				AND a.status = 1
			)";
		
		$query = $this->db->query($sql);
		$no_empleados = $query->num_rows;
		$no_pages = ceil($no_empleados / $emp_per_page);
		$from = $emp_per_page * ($page - 1);
		
if($this->isWeekRegistered($week)){

			$this->db->query("CREATE TEMPORARY TABLE ahorro_temp(
				no_emp VARCHAR(10) 
				 , name VARCHAR(90)
				, total FLOAT
				);"
			);
			$this->db->query("CREATE TEMPORARY TABLE prestamo_temp(
				no_emp VARCHAR(10) 
				, name VARCHAR(90)
				, prestamos VARCHAR(50)
				, total FLOAT
				);"
			);
			$this->db->query("INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =".$week."
				AND p.periodo_id = ".$current_periodo_id."
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### models::nomina::executeNomina: '.$this->db->last_query());
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0 AND week <= $week
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =".$week."
				AND a.periodo_id = ".$current_periodo_id."
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### models::nomina::executeNomina: '.$this->db->last_query());
			$sql = "SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT ".$from.",".$emp_per_page.";";
			
		} else{

			$this->db->query("CREATE TEMPORARY TABLE ahorro_temp(
				no_emp VARCHAR(10) 
				 , name VARCHAR(90)
				, total FLOAT
				);"
			);
			$this->db->query("CREATE TEMPORARY TABLE prestamo_temp(
				no_emp VARCHAR(10) 
				, name VARCHAR(90)
				, prestamos VARCHAR(50)
				, total FLOAT
				);"
			);
			$this->db->query("INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = ".$current_periodo_id." AND p.status = 1 AND p.week <= ".$week."
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### models::nomina::executeNomina: '.$this->db->last_query());
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id AND week <= $week
				AND a.periodo_id =".$current_periodo_id." AND a.status = 1
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### models::nomina::executeNomina: '.$this->db->last_query());
			$sql = "SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT ".$from.",".$emp_per_page.";";
		}
		$query = $this->db->query($sql);
		log_message('info', '##### models::nomina::executeNomina: '.$this->db->last_query());
		$this->db->query("DROP TABLE prestamo_temp;");
		$this->db->query("DROP TABLE ahorro_temp;");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				
				$class = ($i++ % 2 == 0) ? 'odd' : '';
				$response .= "
				<tr class=\"".$class."\">
				<td>".$row->no_emp."</td>
				<td>".$row->name."</td>
				<td class=\"money\">$".number_format(round($row->ahorro,2), 2, '.',' ')."</td>
				<td >".$row->prestamos."</td>
				<td>$".number_format(round($row->total,2), 2, '.', ' ')."</td>
				</tr>
				";
			}
			if(!empty($response))
			{
			if($no_empleados > $emp_per_page)
			{
				for($i=1; $i <= $no_pages; $i++)
				{
					$pagination .= ($i == $page) ?
					"<a href=\"?page=$i\" onclick=\"getReporteNominas($i,$week,$str_is_registered); return false\"><span>[".$i."]</span></a>-":
					"<a href=\"?page=$i\" onclick=\"getReporteNominas($i,$week,$str_is_registered); return false\" >".$i."</a>-";
				}
				if(!empty($pagination)){
					$pagination = substr($pagination, 0, strrpos($pagination, '-'));
					$pagination = "<div class=\"pagination\">$pagination</div>";
				}
			}

				if($week_is_registered)
					$msg =  "La semana ya ha sido registrada.";
				else{
					//$flag = $this->controlperiodo->is_nomina_validada($current_periodo_id, $week);
					//if($flag)
						$msg =  "
							<button type=\"button\" 
								value=\"guardar\" 
								onclick=\"registrarNomina(".$week.");\">
									Guardar N&oacute;mina
							</button> ";/*
					else
						$msg =  "Para guardar la n&oacute;mina es necesario validarla primero.";
					*/
				}

				$response =
				"<br /><br />
				<input id=\"table_search\" type=\"text\" name=\"table_search\"> [presionar enter] 
	
				<table class=\"report_table\" id=\"table_sort\"report_table tablesorter\">
				<tr>
				<th class=\"column_report_id_employee\"><span># Empleado</span></th>
				<th class=\"column_report_employee_name\"><span>Nombre</span></th>
				<th class=\"column_report_savings\"><span>Ahorro</span></th>
				<th class=\"column_report_loans\"><span>Pr&eacute;stamos</span></th>
				<th class=\"column_report_total_loans\"><span>Monto a descontar</span></th>
				</tr>
				$response
				</table>
				$pagination
				";
			}
		}
		return $msg.$response;
	}//executeNomina



	function get_users_from_periodo($periodo_id)
	{
		$sql = "SELECT 
					u.id, 
					u.no_emp,
					u.name
				FROM user u
				LEFT JOIN ahorro a 
					ON a.user_id = u.id and a.periodo_id=".$periodo_id."				
				LEFT JOIN prestamo p 				
					ON p.user_id = u.id and p.periodo_id=".$periodo_id."				
				group by u.id
				order by u.no_emp
				";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function get_user_ahorro($user_id, $periodo_id, $week='')
	{
		$current_week = !empty($week) ? $week:date('W');
		$sql = "SELECT 
					* 
				FROM ahorro
				WHERE periodo_id = ".$periodo_id."
					AND user_id = ".$user_id."
					AND (status in (1, 2) OR (status = 3 AND week_end=$current_week))
					AND week <= $week
				";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function get_user_prestamos($user_id, $periodo_id, $week='')
	{
		$current_week = !empty($week) ? $week:date('W');
		$start_week = !empty($week) ? $week:date('W');
		$sql = "SELECT 
					* 
				FROM prestamo p
				WHERE periodo_id = ".$periodo_id."
					AND user_id = ".$user_id."
					AND (status in (1, 2) OR (status = 3 AND week_end=$current_week))
					AND p.week <= ".$week."
				";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function get_nomina_data($periodo_id, $week='')
	{
		$data = array();
		$response = "";
		$users = $this->get_users_from_periodo($periodo_id);
		$i = 0;
		foreach($users as $row):
			$ahorro = $this->get_user_ahorro($row->id, $periodo_id, $week);
			$prestamos = $this->get_user_prestamos($row->id, $periodo_id, $week);
			$data[$i]['user_data'] = $row;
			$data[$i]['ahorro'] = $ahorro;
			$data[$i]['prestamos'] = $prestamos;
			$i++;
		endforeach;
		return $data;
	}

	/***************************** NEW FUNCTION ****************************/

	function get_html_nomina_excel($week)
	{
		$periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$data = $this->get_nomina_data($periodo_id, $week);
		$response = '';
		$total_ahorro = 0;
		$total_prestamos = 0;
		$gran_total = 0;
		foreach ($data as $row):
			if( !array_key_exists('monto', $row['ahorro']) && !(is_array($row['prestamos']) && sizeof($row['prestamos'])))
				continue;
			$semana = '';
			$response .= $row['user_data']->no_emp."\t".$row['user_data']->name;
			if(array_key_exists('monto', $row['ahorro']) && $row['ahorro']->status==1):
				$response .= "\t".$row['ahorro']->monto;
				$total_ahorro += $row['ahorro']->monto;
			elseif(array_key_exists('monto', $row['ahorro']) && $row['ahorro']->status==2):
				$response .= "\tEXENTO";
			elseif(array_key_exists('monto', $row['ahorro']) && $row['ahorro']->status==3):
				$response .= "\tBAJA";
			else:
				$response .= "\t0";
			endif;
			
			if( is_array($row['prestamos']) && sizeof($row['prestamos']) ):
				$i = 0;
				foreach($row['prestamos'] as $cell):
					if($cell->week == $week):
						$semana = $cell->plazo;
					endif;
					if($cell->status == 1):
						$response .= "\t".$cell->monto_pago;
						$total_prestamos += $cell->monto_pago;
					elseif($cell->status == 2):
						$response .= "\tEXENTO";
					elseif($cell->status == 3):
						$response .= "\tBAJA";
					else:
						$response .= "\t0";
					endif;
					$i++;
				endforeach;
				while($i<4):
					$response .= "\t0";
					$i++;
				endwhile;
			else:
				$response .= "\t0\t0\t0\t0";
			endif;
			$response .= "\t".$semana."\n";
		endforeach;
		$gran_total = $total_ahorro + $total_prestamos;
		$response .= "\t\tTotal Ahorro:\t".$total_ahorro."\n";
		$response .= "\t\tTotal Prestamos:\t".$total_prestamos."\n";
		$response .= "\t\tGran Total:\t".$gran_total."\n";
		return $response;
	}

	function executeNomina_2($week, $week_is_registered)
	{		
		$periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$data = $this->get_nomina_data($periodo_id, $week);
		$response = '';
		$total_ahorro = 0;
		$total_prestamos = 0;
		$gran_total = 0;
		foreach ($data as $row):
			//print_r($row);
			if( !array_key_exists('monto', $row['ahorro']) && !(is_array($row['prestamos']) && sizeof($row['prestamos'])))
				continue;
			$semana = '';
			$response .= "<tr><td>".$row['user_data']->no_emp."</td><td>".$row['user_data']->name."</td>";
			if(array_key_exists('monto', $row['ahorro']) && $row['ahorro']->status == 1):
				$response .= "<td>".$row['ahorro']->monto."</td>";
				$total_ahorro += array_key_exists('monto', $row['ahorro']) ? $row['ahorro']->monto: 0;
			elseif(array_key_exists('monto', $row['ahorro']) && $row['ahorro']->status == 2):
				$response .=  "<td>EXENTO</td>";
			elseif(array_key_exists('monto', $row['ahorro']) && $row['ahorro']->status==3):
				$response .=  "<td>BAJA</td>";
			else:
				$response .=  "<td>-</td>";
			endif;
			//$response .= array_key_exists('monto', $row['ahorro']) ? "<td>".$row['ahorro']->monto."</td>":
				
			
			if( is_array($row['prestamos']) && sizeof($row['prestamos']) ):
				$i = 0;
				foreach($row['prestamos'] as $cell):
					if($cell->week == $week):
						$semana = $cell->plazo;
					endif;
					if($cell->status==1):
						$response .= "<td>".$cell->monto_pago."</td>";
						$total_prestamos += $cell->monto_pago;
					elseif($cell->status==2):
					 	$response .= "<td>EXENTO</td>";
					elseif($cell->status==3):
					 	$response .= "<td>BAJA</td>";
					else:
					 	$response .= "<td>-</td>";
					endif;
					$i++;
				endforeach;
				while($i<4):
					$response .= "<td>0</td>";
					$i++;
				endwhile;
			else:
				$response .= "<td>0</td><td>0</td><td>0</td><td>0</td>";
			endif;
			$response .= empty($semana) ? "<td>-</td></tr>" : "<td>".$semana."</td></tr>";
		endforeach;
		$response =
					"
					<input type=\"text\" name=\"table_search\" id=\"table_search\" /> [presionar enter]
					<table class=\"report_table tablesorter\" id=\"table_sort\">
						<thead> 
							<tr>
								<th class=\"column_report_id_employee\"><span># Emp</span></th>
								<th class=\"column_report_employee_name\"><span>Nombre</span></th>
								<th class=\"column_report_savings\"><span>Ahorro</span></th>
								<th class=\"column_report_loans\">Pr&eacute;stamo 1</th>
								<th class=\"column_report_loans\">Pr&eacute;stamo 2</th>
								<th class=\"column_report_loans\">Pr&eacute;stamo 3</th>
								<th class=\"column_report_loans\">Pr&eacute;stamo 4</th>
								<th class=\"column_report_total_loans\"><span>Semanas</span></th>
							</tr>
						</thead> 
						<tbody>
							".$response."
						</tbody> 
						</table>
					<table>
						<tr>
							<td colspan=\"1\"><b>Total Ahorro</b></td>
							<td colspan=\"6\">$ ".number_format(round($total_ahorro,2), 2, '.', ' ')."</td>
						</tr>
						<tr>
							<td colspan=\"1\"><b>Total préstamos</b></td>
							<td colspan=\"6\">$ ".number_format(round($total_prestamos,2), 2, '.', ' ')."</td>
						</tr>
						<tr>
							<td colspan=\"1\"><b>Gran total</b></td>
							<td colspan=\"6\">$ ".number_format(round(($total_ahorro+$total_prestamos),2), 2, '.', ' ')."<td>
						</tr>
					</table>
					";
		return $response;
	}//executeNomina
	
	function get_nomina_excel($week, $week_is_registered)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$str_is_registered = ($week_is_registered) ? '1' : '0';	
		$filters = $_POST;
		$response = $clas = $prestamo = $pagination = $sql = $msg = '';
		$i = $no = 1;
		$emp_per_page = 10;
		$i = 1;
		$descontar = $ahorro = 0;
		$page = 1;
		if(!empty($filters['page'])) $page = $filters['page'];
		$keepOrderby = 0;
		$sql = "
			SELECT DISTINCT (
				u.no_emp
				)
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				LEFT JOIN prestamo p ON p.user_id = u.id
				WHERE u.status = 1 
					AND (
						p.periodo_id = ".$current_periodo_id."
						AND p.status = 1
					)
					OR(
						a.periodo_id = ".$current_periodo_id."
						AND a.status = 1
					)
		";
		$query = $this->db->query($sql);
		log_message('info', '##### models::nomina::executeNomina_2: '.$this->db->last_query());
		$no_empleados = $query->num_rows;
		$no_pages = ceil($no_empleados / $emp_per_page);
		$from = $emp_per_page * ($page - 1);
		

		$this->db->query("CREATE TEMPORARY TABLE ahorro_temp(
				no_emp VARCHAR(10) 
				 , name VARCHAR(90)
				, total FLOAT
				);"
			);
		log_message('info', '##### models::nomina::executeNomina_2: '.$this->db->last_query());

		$this->db->query("CREATE TEMPORARY TABLE prestamo_temp(
				no_emp VARCHAR(10) 
				,name VARCHAR(90)
				,prestamos VARCHAR(50)
				,total FLOAT
				,prestamo_plazo INTEGER
				);"
			);
		log_message('info', '##### models::nomina::executeNomina_2: '.$this->db->last_query());

		if($week_is_registered)
		{	
			$this->db->query("INSERT INTO prestamo_temp
				SELECT 
					u.no_emp AS No_Emp, 
					u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total,
					IFNULL((
                		SELECT p2.plazo 
                		FROM prestamo p2 
                		WHERE p2.user_id=u.id 
                			AND p2.`periodo_id`=".$current_periodo_id."
                			AND p2.status=1 
                		ORDER BY p2.id DESC 
                		LIMIT 1), '') AS prestamo_plazo
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =".$week."
				AND p.periodo_id = ".$current_periodo_id."
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### models::nomina::executeNomina_2: '.$this->db->last_query());
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =".$week."
				AND a.periodo_id = ".$current_periodo_id."
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### models::nomina::executeNomina_2: '.$this->db->last_query());			
		}
		else
		{
			$this->db->query("INSERT INTO prestamo_temp
				SELECT 
					u.no_emp AS No_Emp, 
					u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total,
                	IFNULL((
                		SELECT p2.plazo 
                		FROM prestamo p2 
                		WHERE p2.user_id=u.id 
                			AND p2.`periodo_id`=".$current_periodo_id."
                			AND p2.status=1 
                		ORDER BY p2.id DESC 
                		LIMIT 1), '') AS prestamo_plazo
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = ".$current_periodo_id." AND p.status = 1
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### || models::nomina::executeNomina_2: '.$this->db->last_query());
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =".$current_periodo_id." AND a.status = 1
				GROUP BY u.no_emp;"
			);
			log_message('info', '##### models::nomina::executeNomina_2: '.$this->db->last_query());
		}
		$sql = "SELECT 
					ahorro_temp.no_emp as no_emp, 
					ahorro_temp.name as name,
					ahorro_temp.total as ahorro, 
					prestamo_temp.prestamos as prestamos,
					prestamo_temp.prestamo_plazo as prestamo_plazo,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM ahorro_temp
				JOIN prestamo_temp 
					ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				";
				//LIMIT ".$from.",".$emp_per_page.";";
		log_message('info', '##### models::nomina::executeNomina_2: '.$this->db->last_query());

		$query = $this->db->query($sql);
		$this->db->query("DROP TABLE prestamo_temp;");
		$this->db->query("DROP TABLE ahorro_temp;");

		$total_ahorro = 0;
		$total_prestamos = 0;
		if ($query->num_rows() > 0)
		{
			$row_ind = 0;
			foreach ($query->result() as $row)
			{
				$tmp = explode(',', $row->prestamos);
				$arr_prestamos = array();
				if(is_array($tmp))
				{
					foreach($tmp as $item)
						$arr_prestamos[] = $item;
				}
				for($i=sizeof($arr_prestamos); $i<3; $i++)
					$arr_prestamos[] = 0;

				$class = $row_ind % 2 ? 'even' : 'odd';
				$row_ind++;
				$total_ahorro += $row->ahorro;
				$total_prestamos += $row->total;
				$response .= "
				<tr class=\"".$class."\">
					<td>".$row->no_emp."</td>
					<td>".$row->name."</td>
					<td class=\"money\">$".number_format(round($row->ahorro,2), 2, '.',' ')."</td>
					<td>".$arr_prestamos[0]."</td>
					<td>".$arr_prestamos[1]."</td>
					<td>".$arr_prestamos[2]."</td>
					<td>".$row->prestamo_plazo."</td>
				</tr>
				";
				//<!--<td>$".number_format(round($row->total,2), 2, '.', ' ')."</td>-->
			}
			if(!empty($response))
			{				
				$response =
					"					
					<table>
						<thead> 
							<tr>
								<th class=\"column_report_id_employee\"><span># Emp</span></th>
								<th class=\"column_report_employee_name\"><span>Nombre</span></th>
								<th class=\"column_report_savings\"><span>Ahorro</span></th>
								<th class=\"column_report_loans\"><span>Pr&eacute;stamo 1</span></th>
								<th class=\"column_report_loans\"><span>Pr&eacute;stamo 2</span></th>
								<th class=\"column_report_loans\"><span>Pr&eacute;stamo 3</span></th>
								<th class=\"column_report_total_loans\"><span>Semanas</span></th>
							</tr>
						</thead> 
						<tbody>
							$response
						</tbody> 
						</table>
					$pagination
					<table>
						<tr>
							<td><b>Total Ahorro</b></td>
							<td>$ ".number_format(round($total_ahorro,2), 2, '.', ' ')."</td>
						</tr>
						<tr>
							<td><b>Total pr&eacute;stamos</b></td>
							<td>$ ".number_format(round($total_prestamos,2), 2, '.', ' ')."</td>
						</tr>
						<tr>
							<td><b>Gran total</b></td>
							<td>$ ".number_format(round(($total_ahorro+$total_prestamos),2), 2, '.', ' ')."<td>
						</tr>
					</table>
					";
			}
		}
		return $response;
	}//executeNomina


	function executeNominaExcel($week)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$this->load->library('PHPExcel');
		$objPHPExcel = new PHPExcel();
		$rowNumber = 1;
		$headings = array('No Emp','Nombre','Ahorro','Prestamos','Total');
		$objPHPExcel->getActiveSheet()->fromArray(array($headings),NULL,'A'.$rowNumber);

		$rowNumber += 1;
		if($this->isWeekRegistered($week)){
			$this->db->query("CREATE TEMPORARY TABLE ahorro_temp(
				no_emp VARCHAR(10) 
				 , name VARCHAR(90)
				, total FLOAT
				);"
			);
			$this->db->query("CREATE TEMPORARY TABLE prestamo_temp(
				no_emp VARCHAR(10) 
				, name VARCHAR(90)
				, prestamos VARCHAR(50)
				, total FLOAT
				);"
			);
			$this->db->query("INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ','),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =".$week."
				AND p.periodo_id = ".$current_periodo_id."
				GROUP BY u.no_emp;"
			);
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =".$week."
				AND a.periodo_id = ".$current_periodo_id."
				GROUP BY u.id;"
			);
			$sql = "SELECT    ahorro_temp.no_emp as No_Emp, ahorro_temp.name as Nombre,
				ahorro_temp.total as Ahorro, prestamo_temp.prestamos as Prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as Total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp;";
			
		} else{
			$this->db->query("CREATE TEMPORARY TABLE ahorro_temp(
				no_emp VARCHAR(10) 
				 , name VARCHAR(90)
				, total FLOAT
				);"
			);
			$this->db->query("CREATE TEMPORARY TABLE prestamo_temp(
				no_emp VARCHAR(10) 
				, name VARCHAR(90)
				, prestamos VARCHAR(50)
				, total FLOAT
				);"
			);
			$this->db->query("INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ','),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = ".$current_periodo_id." AND p.status = 1
				GROUP BY u.no_emp;"
			);
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =".$current_periodo_id." AND a.status = 1
				GROUP BY u.id;"
			);
			$sql = "SELECT ahorro_temp.no_emp as No_Emp, ahorro_temp.name as Nombre,
				ahorro_temp.total as Ahorro, prestamo_temp.prestamos as Prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as Total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp;";
		}
		$query = $this->db->query($sql);
		$this->db->query("DROP TABLE prestamo_temp;");
		$this->db->query("DROP TABLE ahorro_temp;");

		$max_columns = 0;
		if ($query->num_rows() > 0)
		{
			
			foreach ($query->result() as $row)
			{
				$col = 'A';
				foreach ($row as $cell)
				{
					if ($col == 'D'){
						$split_prestamos = explode(',', $cell);
						$columns = sizeof($split_prestamos);
						if ($columns > $max_columns){
							$max_columns = $columns;
						}
					}
					$col++;
				}
			}

			foreach ($query->result() as $row)
			{
				$col = 'A';
				foreach ($row as $cell)
				{
					$flag = 0;
					$count_prestamos = 0;
					if ($col == 'D'){
						$split_prestamos = explode(',', $cell);
						foreach($split_prestamos as $prestamo_unico){
							$objPHPExcel->getActiveSheet()->setCellValue(
							$col.$rowNumber,$prestamo_unico);
							$col++;
							$count_prestamos += 1;
						}
						if ($count_prestamos < $max_columns){
							while ($count_prestamos < $max_columns){
								$objPHPExcel->getActiveSheet()->setCellValue(
								$col.$rowNumber,'0');
								$col++;
								$count_prestamos++;
							}
						}
						$flag = 1;
					}
					if (!$flag){
						$objPHPExcel->getActiveSheet()->setCellValue(
							$col.$rowNumber,$cell);
						$col++;
					}
				}
				$rowNumber += 1;
			}
			if($max_columns > 1){
				$col = 'E';
				$rowNumber = 1;
				$objPHPExcel->getActiveSheet()->setCellValue(
					$col.$rowNumber,'');
				for($i = 1; $i < $max_columns; $i++){
					$col++;
				}
				 $objPHPExcel->getActiveSheet()->setCellValue(
				 	$col.$rowNumber,'Total');
			}
			ob_start();
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			//$objWriter->setUseBOM(false);
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="nomina_semanal_'.$week.'.xls"');
			header('Cache-Control: max-age=0');
			ob_end_clean();
			return $objWriter->save('php://output');
		}
		else
			return false;

		
		//exit();
	}//executeNominaExcel



function export_nomina_excel($data, $week)
{
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=nomina_semana_".$week.".xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	print "$data";
}

function export_to_excel($data, $name)
{
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=".$name.".xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	print "$data";
}



}
