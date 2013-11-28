<?php

class Reporte extends CI_Model{
    
	function __construct()
	{
		parent::__construct();
		$this->load->model('controlperiodo');
	}
	
	public function create($employee_number, $employee_name)
	{
		$this->db->query("insert into user(name, no_emp) value('".
			$employee_name."', '".$employee_number."');");
		return $this->db->insert_id();  
	}
	
	public function update($id)
	{
		$response = $sql = 'Datos Actualizados. ';
		$query = $this->db->query("select no_emp, name from user where id = ".$id);
		$updateFields = array();
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			if($row->no_emp != $_POST['employee_number'])
			{
				$query = $this->db->query("SELECT id FROM user WHERE id != ".
					$id." AND no_emp = ".$row->no_emp);
				if ($query->num_rows() > 0)
				{
					$response = "Error: No se pudo guardar, ese 
						<b>#Empleado</b> ya existe.";
				}else
				{
					$updateFields['no_emp'] = $_POST['employee_number'];
				}
			}
			if($row->name != $_POST['employee_name'])
			{
				$updateFields['name'] = $_POST['employee_name'];
			}
		}
		if(sizeof($updateFields))
		{
			foreach($updateFields as $key => $row)
			{
				$sql .= $key." = ".$row;	
			}
			if(!empty($sql))
			{
				$response = ($this->db->update(
						'user', 
						$updateFields, 
						"id = ".$id)
						) ?
						"Usuario actualizado.":
						"Error, no se puedo actualizar usuario.";
			}
			
		}
		return $response;	
	}
	
	public function getInfo($no_emp = '')
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$response = '';
		$sql = "select name, id from user where no_emp='".$no_emp."' and status = 1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$response = $query->row()->name."|".$query->row()->id;
			$sql = "select count(*) as times from ahorro where user_id=".$query->row()->id." and status = 1 and perido_id = ".$current_periodo_id;
			$query2 = $this->db->query($sql);
			if($query2->num_rows() > 0)
			$response .="|".$query2->row()->times;
		}
		return $response;
	}

	public function general()
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$filters = $_POST;
		$response = $clas = $prestamo = $pagination = $sql = $msg = '';
		$i = $no = 1;
		$emp_per_page = 10;
		$i = 1;
		$descontar = $ahorro = 0;
		$page = 1;
		if(!empty($filters['page'])) $page = $filters['page'];
		//echo $page;
		$keepOrderby = 0;
		$sql = "
		SELECT u.id, u.no_emp, u.name, ifnull(a.monto,0) as amonto, a.status as status,
			ifnull((SELECT SUM(ar.monto) 
			FROM ahorro_registro ar 
			WHERE ar.ahorro_id = a.id AND ar.year = a.year),0 ) as 'ahorrado' 
			FROM user u
			LEFT JOIN ahorro a
			ON u.id = a.user_id
				AND (a.status = 1 OR a.status = 2 )
				AND a.periodo_id = ".$current_periodo_id."
				AND u.status = 1
			ORDER BY u.no_emp";
		$query = $this->db->query($sql);
		$no_empleados = $query->num_rows;
		$no_pages = ceil($no_empleados / $emp_per_page);

		$from = $emp_per_page * ($page - 1);
		$sql = "
		SELECT u.id, u.no_emp, u.name, ifnull(a.monto,0) as amonto, a.status as status,
			ifnull((SELECT SUM(ar.monto) 
			FROM ahorro_registro ar 
			WHERE ar.ahorro_id = a.id AND ar.year = a.year),0 ) as 'ahorrado' 
			FROM user u
			LEFT JOIN ahorro a
			ON u.id = a.user_id
				AND (a.status = 1 OR a.status = 2 )
				AND a.periodo_id = ".$current_periodo_id."
				AND u.status = 1
			ORDER BY u.no_emp
		LIMIT ".$from.",".$emp_per_page;
		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$prestamo = '';
				$descontar = 0;
				$total_deuda = 0;
				$total_pagos = 0;
				$sql = "SELECT ifnull(p.monto_pago,0) as monto, ifnull((SELECT SUM(pr.monto) FROM prestamo_registro pr 
			WHERE pr.prestamo_id = p.id AND p.periodo_id = ".$current_periodo_id."),0 ) as 'pagado', ifnull(p.monto_total,0) as monto_total FROM prestamo p WHERE (status=1 OR status=2) AND user_id = ".$row->id." AND p.periodo_id = ".$current_periodo_id;
				$query2 = $this->db->query($sql);
				$ahorro = ($row->status == 1) ? $row->amonto : 0;
				$ahorrado = ($row->status == 1) ? $row->ahorrado : 0;

				if($query2->num_rows() > 0)
				{
					foreach ($query2->result() as $row2)
					{
						$prestamo .= "<span class=\"loans_info\">$".number_format(round($row2->monto, 2), 2, '.', ' ')."</span>";
						$total_deuda += $row2->monto_total;
						$total_pagos += $row2->pagado;
					}
				}
				
				#if(empty($row->amonto) && empty($prestamo)) continue;
				$class = ($i++ % 2 == 0) ? 'odd' : '';
				$response .= "
				<tr class=\"".$class."\">
				<td>".$row->no_emp."</td>
				<td>".$row->name."</td>
				<td class=\"money\">$".number_format(round($ahorro,2), 2, '.',' ')."</td>
				<td class=\"money\">$".number_format(round($ahorrado,2), 2, '.',' ')."</td>
				<td >".$prestamo."</td>
				<td>$".number_format(round($total_pagos,2), 2, '.', ' ')."</td>
				<td>$".number_format(round($total_deuda,2), 2, '.', ' ')."</td>
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
					"<a href=\"?page=$i\" onclick=\"getReporteGeneral($i); return false\"><span>[".$i."]</span></a>-":
					"<a href=\"?page=$i\" onclick=\"getReporteGeneral($i); return false\" >".$i."</a>-";
				}
				if(!empty($pagination)){
					$pagination = substr($pagination, 0, strrpos($pagination, '-'));
					$pagination = "<div class=\"pagination\">$pagination</div>";
				}
			}

				$response =
				"<table class=\"report_table\">
				<tr>
				<th class=\"column_report_id_employee\"><span># Empleado</span></th>
				<th class=\"column_report_employee_name\"><span>Nombre</span></th>
				<th class=\"column_report_savings\"><span>Ahorro Actual</span></th>
				<th class=\"column_report_savings\"><span>Total Ahorrado</span></th>
				<th class=\"column_report_loans\"><span>Pago de Pr&eacute;stamos por Semana</span></th>
				<th class=\"column_report_total_loans\"><span>Total Pagos</span></th>
<th class=\"column_report_total_loans\"><span>Total Pr&eacute;stamos Actuales</span></th>
				</tr>
				$response
				</table>
				$pagination
				";
			}
		}
		return $msg.$response;
	}

	public function ahorros()
	{
		$closed_periodo_id = $this->controlperiodo->getLastClosedPeriodoID();
		$filters = $_POST;
		$response = $class = $prestamo = $pagination = $sql = $msg = '';
		$total_depositos = $total_ahorrado= 0;
		$query = $this->db->query("select bank_amount FROM periodo WHERE id = ".$closed_periodo_id);
		$result = $query->result();	
		$banco = $result[0]->bank_amount;
		$i = $no = 1;
		$emp_per_page = 10;
		$i = 1;
		$descontar = $ahorro = 0;
		$page = 1;
		if(!empty($filters['page'])) $page = $filters['page'];
		$keepOrderby = 0;
		$sql = "
		SELECT SUM( ar.monto ) as total
		FROM ahorro_registro ar
		LEFT JOIN ahorro a ON a.id = ar.ahorro_id
		WHERE a.status =1 AND ar.status <> 0
		AND a.periodo_id = ".$closed_periodo_id;

		$query = $this->db->query($sql);
		foreach ($query->result() as $row)
   		{
   			$total_ahorrado = $row->total;
   		}
   		$sql = "
		SELECT SUM( interes ) as interes
		FROM  prestamo
		WHERE status <>0
		AND periodo_id = ".$closed_periodo_id;
		$query = $this->db->query($sql);
		foreach ($query->result() as $row)
   		{
   			$prestamo = $row->interes;
   		}
		$sql = "
		SELECT u.id, u.no_emp as No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS monto, 
		a.status AS STATUS, 
		IFNULL( (SELECT SUM( ar.monto ) 
			FROM ahorro_registro ar
			WHERE ar.ahorro_id = a.id
			AND ar.year = a.year ) , 0) AS  'ahorrado', 
		IFNULL( (SELECT COUNT( ar.monto ) 
			FROM ahorro_registro ar
			WHERE ar.ahorro_id = a.id
			AND ar.year = a.year ) , 0) AS  'depositos'
		FROM ahorro a
		LEFT JOIN user u ON u.id = a.user_id
			AND (a.status <> 0)
			AND a.periodo_id = ".$closed_periodo_id."
			AND u.status =1
		WHERE a.status = 1
		AND a.periodo_id = ".$closed_periodo_id."
		ORDER BY u.no_emp";

		$query = $this->db->query($sql);
		$no_empleados = $query->num_rows;
		$no_pages = ceil($no_empleados / $emp_per_page);
		$from = $emp_per_page * ($page - 1);
		$sql = "
		SELECT count( ar.id ) as depositos
		FROM  ahorro_registro ar
		LEFT JOIN ahorro a on a.id = ar.ahorro_id
		WHERE ar.status <>0
		AND a.periodo_id = ".$closed_periodo_id;
		$query = $this->db->query($sql);
		foreach ($query->result() as $row)
   		{
   			$total_depositos = $row->depositos;
   		}
		$sql = "
		SELECT u.id, u.no_emp, u.name, IFNULL( a.monto, 0 ) AS monto, 
		a.status AS STATUS, 
		IFNULL( (SELECT SUM( ar.monto ) 
			FROM ahorro_registro ar
			WHERE ar.ahorro_id = a.id
			AND ar.year = a.year ) , 0) AS  'ahorrado', 
		IFNULL( (SELECT COUNT( ar.monto ) 
			FROM ahorro_registro ar
			WHERE ar.ahorro_id = a.id
			AND ar.year = a.year ) , 0) AS  'depositos'
		FROM ahorro a
		LEFT JOIN user u ON u.id = a.user_id
			AND (a.status <>0 )
			AND a.periodo_id = '".$closed_periodo_id."'
			AND u.status = 1
		WHERE a.status = 1
		AND a.periodo_id = '".$closed_periodo_id."'
		ORDER BY u.no_emp
		LIMIT ".$from.",".$emp_per_page;
		$query = $this->db->query($sql);
		if($query->num_rows())
		{
			$total_intereses = $banco + $prestamo;
			$calculo_interes = $total_intereses/$total_ahorrado;
			foreach ($query->result() as $row)
			{
				if(empty($row->monto) && empty($banco)) continue;
				$class = ($i++ % 2 == 0) ? 'odd' : '';
				$response .= "
				<tr class=\"".$class."\">
				<td>".$row->no_emp."</td>
				<td>".$row->name."</td>
				<td class=\"money\">$".number_format(round($row->monto,2), 2, '.',' ')."</td>
				<td >".$row->depositos."</td>
				<td class=\"money\">$".number_format(round($row->ahorrado,2), 2, '.',' ')."</td>
				<td class=\"money\">$".number_format(round(($row->ahorrado*$calculo_interes),2), 2, '.',' ')."</td>
				<td>$".number_format(round($row->ahorrado + (($row->ahorrado*$calculo_interes)),2), 2, '.', ' ')."</td>
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
					"<a href=\"?page=$i\" onclick=\"getReporteAhorros($i,$banco); return false\"><span>[".$i."]</span></a>-":
					"<a href=\"?page=$i\" onclick=\"getReporteAhorros($i,$banco); return false\" >".$i."</a>-";
				}
				if(!empty($pagination)){
					$pagination = substr($pagination, 0, strrpos($pagination, '-'));
					$pagination = "<div class=\"pagination\">$pagination</div>";
				}
			}

				$response =
				"<table class=\"report_table\">
				<tr>
				<th class=\"column_report_id_employee\"><span># Empleado</span></th>
				<th class=\"column_report_employee_name\"><span>Nombre</span></th>
				<th class=\"column_report_savings\"><span>Monto Semanal</span></th>
				<th class=\"column_report_loans\"><span>Total Dep&oacute;sitos</span></th>
				<th class=\"column_report_savings\"><span>Total Ahorrado</span></th>
				<th class=\"column_report_savings\"><span>Intereses</span></th>
				<th class=\"column_report_total_loans\"><span>Pago Correspondiente</span></th>
				</tr>
				$response
				</table>
				$pagination
				";
			}
		}
		
		$result = array(
			'ahorradores' => $response,
			'banco' => $banco,
			'prestamo' => $prestamo,
			'total_intereses' => $total_intereses,
			'total_ahorrado' => $total_ahorrado,
			'calculo' => $calculo_interes
		);

		return $result;
	}

	public function ahorros_excel()
	{
		$closed_periodo_id = $this->controlperiodo->getLastClosedPeriodoID();
		$this->load->library('PHPExcel');
		$objPHPExcel = new PHPExcel();
		$rowNumber = 1;
		$headings = array('No Emp','Nombre','Monto Semanal','No Depositos', 'Total Ahorrado', 'Intereses', 'Pago Correspondiente');
		$objPHPExcel->getActiveSheet()->fromArray(array($headings),NULL,'A'.$rowNumber);
		$sql = "
		SELECT SUM( ar.monto ) as total
		FROM ahorro_registro ar
		LEFT JOIN ahorro a ON a.id = ar.ahorro_id
		WHERE a.status =1 AND ar.status <> 0
		AND a.periodo_id = ".$closed_periodo_id;
		$query = $this->db->query($sql);
		foreach ($query->result() as $row)
   		{
   			$total_ahorrado = $row->total;
   		}
		$rowNumber += 1;
		$filters = $_POST;
		$response = $class = $prestamo = $pagination = $sql = $msg = '';
		$total_depositos = 0;
		$query = $this->db->query("select bank_amount FROM periodo WHERE status=3 and bank_amount<>0 ORDER BY year DESC LIMIT 1");
		$result = $query->result();	
		$banco = $result[0]->bank_amount;
		$i = $no = 1;
		$emp_per_page = 10;
		$i = 1;
		$descontar = $ahorro = 0;
		$page = 1;
		if(!empty($filters['page'])) $page = $filters['page'];
		$keepOrderby = 0;
		$sql = "
		SELECT SUM( interes ) as interes
		FROM  prestamo
		WHERE status <>0
		AND periodo_id = ".$closed_periodo_id;
		$query = $this->db->query($sql);
		foreach ($query->result() as $row)
   		{
   			$prestamo = $row->interes;
   		}
   		$total_intereses = $banco + $prestamo;
		$calculo_interes = $total_intereses/$total_ahorrado;
		$sql = "
		SELECT u.no_emp, u.name, IFNULL( a.monto, 0 ) AS monto, 
		IFNULL( (SELECT COUNT( ar.monto ) 
			FROM ahorro_registro ar
			WHERE ar.ahorro_id = a.id
			AND ar.year = a.year ) , 0) AS  'depositos',
		IFNULL( (SELECT SUM( ar.monto ) 
			FROM ahorro_registro ar
			WHERE ar.ahorro_id = a.id AND ar.status <> 0 
			AND ar.year = a.year ) , 0) AS  'ahorrado'
		FROM ahorro a
		LEFT JOIN user u ON u.id = a.user_id
			AND (a.status <> 0)
			AND a.periodo_id = '".$closed_periodo_id."'
			AND u.status =1
		WHERE a.status = 1
		AND a.periodo_id = '".$closed_periodo_id."'
		ORDER BY u.no_emp";
		$query = $this->db->query($sql);
		if($query->num_rows())
		{
			foreach ($query->result() as $row)
			{
				$total_depositos += $row->depositos;
			}
			$total_intereses = $banco + $prestamo;
			foreach ($query->result() as $row)
			{
				$col = 'A';
				foreach ($row as $cell)
				{
					$objPHPExcel->getActiveSheet()->setCellValue(
						$col.$rowNumber,$cell);
					if($col == 'E'){
						$row_ahorrado = $cell;
					}
					$col++;
				}
				$interes_individual = round($row_ahorrado * $calculo_interes,2);
				$pago_correspondiente = round($row_ahorrado + $interes_individual,2);
				$objPHPExcel->getActiveSheet()->setCellValue(
						$col.$rowNumber,$interes_individual);
				$col++;
				$objPHPExcel->getActiveSheet()->setCellValue(
						$col.$rowNumber,$pago_correspondiente);
				$rowNumber += 1;
			}
			ob_start();
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			//$objWriter->setUseBOM(false);
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="reporte_ahorros.xls"');
			header('Cache-Control: max-age=0');
			ob_end_clean();
			return $objWriter->save('php://output');
		}else{
			return false;
		}
	}
}
