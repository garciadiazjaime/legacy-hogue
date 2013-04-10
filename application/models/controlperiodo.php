<?php
class ControlPeriodo extends CI_Model{
	
	public function getCurrentPeriodo()
	{
		$query = $this->db->query("select * FROM periodo WHERE status = 1 ORDER BY id DESC, year DESC");
		$result = $query->result();
		if(sizeof($result))
			return $result[0];			
		return false;
	}

	public function getLastClosedPeriodoID(){
		$query = $this->db->query("select * FROM periodo WHERE status <> 1 ORDER BY ID DESC, year DESC");
		$result = $query->result();
		if(sizeof($result))
			return $result[0]->id;			
		return 0;
	}

	public function getCurrentPeriodoID()
	{
		$query = $this->db->query("select * FROM periodo WHERE status = 1 ORDER BY id DESC, year DESC");
		$result = $query->result();
		if(sizeof($result))
			return $result[0]->id;			
		return 0;
	}

	public function getListPeriodos($offset = 0){
		$msg = '';
                $this->load->library('pagination');
                $limit = 10;
                $response = '';
                $query = $offset != 0 ?
                        'SELECT id, start_week, end_week, year, status
                        FROM periodo WHERE status=1
			LIMIT '.$limit.' OFFSET '.$offset
                        :
                        'SELECT id, start_week, end_week, year, status
                        FROM periodo WHERE status=1
			LIMIT '.$limit;
                $data = $this->db->query($query);
                if($data->num_rows() > 0){
                         $counter = 1;
                         foreach($data->result() as $row){
                                $class = $counter % 2 == 0 ? 'odd' : 'pair';
				$start_week = date('d-M-Y', strtotime("1.1.2012 + ".
					$row->start_week." weeks - 6 days"));
				$end_week = date('d-M-Y', strtotime("1.1.2012 + ".
					$row->end_week." weeks"));
				$status = $row->status ? 'Activo':'Pendiente';
                                $response .= "
                                        <tr class = '". $class. "'> 
                                                <td>".$row->id."</td>
                                                <td>".$start_week."</td>
						<td>".$end_week."</td>
                                                <td>".$status."</td>
                                                <td>
                                                        <a href='".base_url().
							"sistema/periodos/editar/".
							$row->id."' title=\"edit periodos".
							$row->id."\">
                                                                <img src=\"".base_url().
				"resources/images/edit_icon_active.png\" alt=\"edit\" />
                                                        </a>
                                                </td>
						<td>
                                                        <a href='".base_url().
							"sistema/periodos/eliminar/".
							$row->id."' title=\"eliminar periodo".
							$row->id."\">
                                                                <img src=\"".base_url().
				"resources/images/delete_icon_active.png\" alt=\"eliminar\" />
                                                        </a>
                                                </td>
                                                
                                        </tr>";
                                $counter++;
                        }//foreach
						if(!empty($response)){
                                $response = "
                                <table style = 'width: 925px;'>
                                        <tr>
                                              <th># De Período</th>
                                              <th>Inicio</th>
                                              <th>Fin</th>
                                              <th>Estatus</th>
					      <th>Editar</th>
					      <th>Eliminar</th>
                                        </tr>
                                        $response
                                </table>";
                                $query = $this->db->query('SELECT count(*) as total 
					FROM periodo WHERE status=1');
                                $config['base_url'] = base_url().'sistema/periodos';
                                $config['total_rows'] = $query->row()->total;
                                $config['per_page'] = $limit;
                                $this->pagination->initialize($config);
                        }else
                                $response = "Lo sentimos no hay registros";
                }//if $data->num_rows
                return $response;
	}

	public function getPeriodoByID($id)
	{
		$msg = '';
                $response = '';
                $query = 'SELECT id, start_week, end_week, year, status
                        FROM periodo WHERE id='.$id;
                $data = $this->db->query($query);
                if($data->num_rows() > 0){
                         foreach($data->result() as $row){
				$start_week = date('d-M-Y', strtotime("1.1.2012 + ".
					$row->start_week." weeks - 6 days"));
				$end_week = date('d-M-Y', strtotime("1.1.2012 + ".
					$row->end_week." weeks"));
				$status = $row->status ? 'Activo':'Pendiente';
                                $response .= "Periodo #".$row->id."</br> Fecha de inicio: 
                                                ".$start_week."</br> Finaliza en: 
						".$end_week;
                                                
                        }//foreach
				
                }//if $data->num_rows
		else
                	$response = "Lo sentimos no hay registros";
                
                return $response;
	}//getperiodobyid

	public function validar_nomina()
	{
		$emp_excel = array();
		$current_periodo_id = $this->getCurrentPeriodoID();
		$this->load->library('PHPExcel');
		$validado = true;
		$week_to_validate = $_POST['week_to_validate'];
		$response = $class = $prestamo = $pagination = $sql = $msg = '';
		$no = 1;
		$emp_per_page = 10;
		$descontar = $ahorro = 0;
		$page = 1;
		$keepOrderby = 0;
		$return_array = array();
		$emp_result = '';
		$c_error = 0;
		//$file_to_validate = $_POST['file_to_validate'];

		try
		{
			$inputFileName = $this->upload_file();
		}
		catch (Exception $e) 
		{
			throw $e;
		}
 
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
		$objReader->setReadDataOnly(true);  
		/**  Load $inputFileName to a PHPExcel Object  **/  
		$objPHPExcel = $objReader->load($inputFileName);  
		$total_sheets=$objPHPExcel->getSheetCount(); // 
		$allSheetName=$objPHPExcel->getSheetNames(); //
		$objWorksheet = $objPHPExcel->setActiveSheetIndex(0); // 
		$highestRow = $objWorksheet->getHighestRow(); //
		$highestColumn = $objWorksheet->getHighestColumn(); // 
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);  //
		$arr_data =array(); 
		for ($row = 1; $row <= $highestRow; ++$row) {  
		    for ($col = 0; $col <= $highestColumnIndex; ++$col) {  
		    $value=$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();  
			if(is_array($arr_data) ) { $arr_data[$row-1][$col]=$value; }  
		    }  
		}

		$sql = "
		SELECT u.id as uid, u.no_emp, u.name, IFNULL( ar.monto, 0 ) as amonto
		FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =".$week_to_validate."
				AND a.periodo_id = ".$current_periodo_id."
				GROUP BY u.no_emp";
		$query = $this->db->query($sql);

		for($i = 0; $i < count($arr_data,0); $i++){
			$emp_excel[$i] = $arr_data[$i][0];
		}
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$prestamo = '';
				$descontar = 0;
				$descontar += $row->amonto;
				$sql = "SELECT ifnull(monto,0) as monto FROM prestamo_registro pr
					LEFT JOIN prestamo p ON p.id = pr.prestamo_id
					LEFT JOIN user u ON u.id = p.user_id
					WHERE pr.week = ".$week_to_validate."
					AND p.periodo_id = ".$current_periodo_id."
					AND u.id = ".$row->uid;

				$query2 = $this->db->query($sql);
				$ahorro = $row->amonto;
				if($query2->num_rows())
				{
					foreach ($query2->result() as $row2)
					{
						$descontar += $row2->monto;
					}
				}
				for($i = 0; $i < count($arr_data,0); $i++)
				{

					if ($arr_data[$i][0] == $row->no_emp)
					{
						if($arr_data[$i][2])
							$d1=str_replace(',', '', $arr_data[$i][2]);
						else $d1 = '0.00';
						if($arr_data[$i][6])
							$d2=str_replace(',', '', $arr_data[$i][6]);
						else $d2='0.00';
						
						if(round($descontar) != round($d1 + $d2))
						{
							$validado = false;
							$class = ($c_error++ % 2 == 0) ? 'odd' : '';
							$emp_result .= "
							<tr class=\"".$class."\">
							<td>".$row->no_emp."</td>
							<td>".$row->name."</td>
							<td class=\"money\">$".number_format(round($d1,2), 2, '.',' ')."</td>
							<td class=\"money\">$".number_format(round($d2,2), 2, '.',' ')."</td>
							<td class=\"money\">$".number_format(round(($d1 + $d2),2), 2, '.',' ')."</td>
							<td class=\"money\">$".number_format(round($row->amonto,2), 2, '.', ' ')."</td>
							<td class=\"money\">$".number_format(round(($descontar - $row->amonto),2), 2, '.', ' ')."</td>
							<td class=\"money\">$".number_format(round($descontar,2), 2, '.', ' ')."</td>
							</tr>
							";
						}
					}
				}
				if (!in_array($row->no_emp, $emp_excel) && $descontar != 0){
					$validado = false;
						$class = ($c_error++ % 2 == 0) ? 'odd' : '';
						$emp_result .= "
						<tr class=\"".$class."\">
						<td>".$row->no_emp."</td>
						<td>".$row->name."</td>
						<td class=\"money\">NULO</td>
							<td class=\"money\">NULO</td>
							<td class=\"money\">NULO</td>
							<td class=\"money\">$".number_format(round($row->amonto,2), 2, '.', ' ')."</td>
							<td class=\"money\">$".number_format(round(($descontar - $row->amonto),2), 2, '.', ' ')."</td>
							<td class=\"money\">$".number_format(round($descontar,2), 2, '.', ' ')."</td>
						</tr>
						";
				}
			}
			$emp_result  =
				"<table class=\"report_table\">
				<tr>
				<th class=\"column_report_id_employee\"><span># Empleado</span></th>
				<th class=\"column_report_employee_name\"><span>Nombre</span></th>
				<th class=\"column_report_savings\"><span>Ahorro en n&oacute;mina</span></th>
				<th class=\"column_report_savings\"><span>Pr&eacute;stamo en n&oacute;mina</span></th>
				<th class=\"column_report_savings\"><span>Saldo final en n&oacute;mina</span></th>
				<th class=\"column_report_loans\"><span>Ahorro en el sistema</span></th>
				<th class=\"column_report_loans\"><span>Pr&eacute;stamo en el sistema</span></th>
				<th class=\"column_report_loans\"><span>Saldo final en el sistema</span></th>
				</tr>
				$emp_result 
				</table>
				";		
		}
		$return_array[0] = $validado;
		$return_array[1] = $emp_result;
/*
		$query_ahorro = $this->db->query("select id FROM ahorro WHERE periodo_id = $id");
		$ahorro = $query_ahorro->result();	
		$query_prestamo = $this->db->query("select id FROM prestamo WHERE periodo_id = $id");
		$prestamo = $query_prestamo->result();	
		if(sizeof($ahorro) || sizeof($prestamo))
			return false;*/
		return $return_array;
	}

/* *************************** ACTUALIZACION PARA VALIDAR NOMINA ANTES DE GAURDAR **/


	public function set_nomina_valida($periodo, $week = 0)
	{
		$sql = '';		
		if(!empty($week) && !empty($periodo))
		{
			$sql = "SELECT id FROM nomina_validada WHERE week = ".$week." AND periodo=".$periodo;
			$query = $this->db->query($sql);
			if($query->num_rows() == 0)
			{
				$sql = "INSERT INTO nomina_validada(week, periodo) values(".$week.",".$periodo.");";
				$this->db->query($sql);
			}			
		}
	}
/*
	public function is_nomina_validada($week = 0, $periodo = 0)
	{
		$sql = '';		
		if(!empty($week) && !empty($periodo))
		{
			$sql = "SELECT IFNULL(COUNT(*),0) AS count FROM nomina_validada WHERE week = ".$week." AND periodo=".$periodo;			
			$query = $this->db->query($sql);
			if($query->row()->count > 0)
			{
				return TRUE;
			}			
		}
		return FALSE;
	}
	*/
/* *************************** ACTUALIZACION PARA VALIDAR NOMINA ANTES DE GAURDAR **/
	public function upload_file()
	{
		$location = '';
		$allowedExts = array("xls","XLS");
		$extension = end(explode(".", $_FILES["file_to_validate"]["name"]));
		if (in_array($extension, $allowedExts))
		{
			if ($_FILES["file_to_validate"]["error"] > 0)
			{
				//echo "Error: " . $_FILES["file_to_validate"]["error"] . "<br />";
			}
			else
			{
				//echo "Upload: " . $_FILES["file_to_validate"]["name"] . "<br />";
				//echo "Type: " . $_FILES["file_to_validate"]["type"] . "<br />";
				//echo "Size: " . ($_FILES["file_to_validate"]["size"] / 1024) . " Kb<br />";
				$location = $_FILES["file_to_validate"]["tmp_name"];
			}
		}
		else
		{
			//echo "Invalid file";
		}
		return $location;
	}
}
