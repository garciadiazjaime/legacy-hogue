<?php

class Nomina extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('controlperiodo');
	}

	function isWeekRegistered($week)
	{
		$periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$query = $this->db->query("SELECT ifnull(status,0) as status FROM nomina WHERE week = ".$week." AND periodo_id = ".$periodo_id);
		if ($query->num_rows() > 0)
			return true;
		return false;
	}

	function registrarPrestamos($week)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$status = '';
		$sql_prestamo = "
		SELECT monto_pago, monto_total, year, status, id
			FROM prestamo
			WHERE periodo_id = ".$current_periodo_id."
				AND (status =1)";
		$prestamos = $this->db->query($sql_prestamo);		
		if ($prestamos->num_rows() > 0)
		{
			foreach ($prestamos->result() as $row)
			{
				$prestamos_registro = array(
					'monto' => $row->monto_pago,
					'week' => $week,
					'year' => $row->year,
					'status' => $row->status,
					'prestamo_id' => $row->id
				);
				$this->db->insert('prestamo_registro',$prestamos_registro);

				$sql_pr = "
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = ".$row->id."
					AND status <> 0";
				$query = $this->db->query($sql_pr);
				$result = $query->result();
				if(sizeof($result)){
					$pr = $result[0];
					if(round($pr->total_registro) == round($row->monto_total)){
						$data = array(
			               'monto_abonado' => $pr->total_registro,
			               'status' => 3
			            );

						$this->db->where('id', $row->id);
						$this->db->update('prestamo', $data); 
					}
					else{
						$data = array(
			               'monto_abonado' => $pr->total_registro
			            );

						$this->db->where('id', $row->id);
						$this->db->update('prestamo', $data); 
					}
				}
			}
		}
	}

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
			if($this->db->insert('nomina',$nomina_registro))
				$registrado = true;
			else
				$registrado = false;
		}
		else
			$registrado = false;

		return $registrado;
	}

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
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =".$week."
				AND a.periodo_id = ".$current_periodo_id."
				GROUP BY u.no_emp;"
			);
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
				AND p.periodo_id = ".$current_periodo_id." AND p.status = 1
				GROUP BY u.no_emp;"
			);
			$this->db->query("INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =".$current_periodo_id." AND a.status = 1
				GROUP BY u.no_emp;"
			);
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
					$flag = $this->controlperiodo->is_nomina_validada($current_periodo_id, $week);
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
				"<table class=\"report_table\">
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

}
