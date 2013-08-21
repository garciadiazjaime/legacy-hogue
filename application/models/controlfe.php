<?php
class ControlFe extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('controlperiodo');
	}

	public function getPrestamos($no_emp = 0){
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$msg = '';
                $limit = 10;
                $response = '';
                $query = 'SELECT name, week, year, monto_pago
			FROM prestamo
			LEFT JOIN user ON prestamo.user_id = user.id
			WHERE (
			prestamo.status =1
			OR prestamo.status =2
			)
			AND user.no_emp ='.$no_emp.'
			AND prestamo.periodo_id = '.$current_periodo_id;
                $data = $this->db->query($query);
                if($data->num_rows() > 0){
                         $counter = 1;
                         foreach($data->result() as $row){
				$date = date("d/M/Y", strtotime("1.1.".$row->year." + ".$row->week." weeks")). "<b>(#".$row->week.")</b>";
				$date = $this->miscellaneous->getSpanishDate($date);
                                $class = $counter % 2 == 0 ? 'odd' : 'pair';
				
                                $response .= "
                                        <tr class = '". $class. "'> 
                                                <td>".$row->name."</td>
                                                <td>".$date."</td>
						<td>".$row->monto_pago."</td>
                                        </tr>";
                                $counter++;
                        }//foreach
						if(!empty($response)){
                                $response = "
                                <table>
                                        <tr>
                                              <th>Nombre</th>
                                              <th>Inicio Pr&eacute;stamo</th>
                                              <th>&Uacute;ltimo dep&oacute;sito</th>
                                        </tr>
                                        $response
                                </table>";
                                $response .= "<a href= ".base_url()."fe/prestamos_empleados/".$no_emp." class=\"button\">Ver dep&oacute;sitos</a>";
                        }
                }//if $data->num_rows
                else
                    $response = "Lo sentimos no hay registros";
                return $response;
	}

	public function getAhorro($no_emp = 0){
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$msg = '';
                $response = '';
                $query = 'SELECT name, week, year, monto
			FROM ahorro
			LEFT JOIN user ON ahorro.user_id = user.id
			WHERE (
			ahorro.status =1
			OR ahorro.status =2
			)
			AND user.no_emp ='.$no_emp.'
			AND ahorro.periodo_id = '.$current_periodo_id;
                $data = $this->db->query($query);
                if($data->num_rows() > 0){
                         $counter = 1;
                         foreach($data->result() as $row){
				$date = date("d/M/Y", strtotime("1.1.".$row->year." + ".$row->week." weeks")). "<b>(#".$row->week.")</b>";
				$date = $this->miscellaneous->getSpanishDate($date);
                                $class = $counter % 2 == 0 ? 'odd' : 'pair';
                                $response .= "
                                        <tr class = '". $class. "'> 
                                                <td>".$row->name."</td>
                                                <td>".$date."</td>
                                                <td>".$row->monto."</td>
                                        </tr>";
                                $counter++;
                        }//foreach
						if(!empty($response)){
                                $response = "
                                <table>
                                        <tr>
                                              <th>Nombre</th>
                                              <th>Inicio Ahorro</th>
                                              <th>&Uacute;ltimo dep&oacute;sito</th>
                                        </tr>
                                        $response
                                </table>";
                                $response .= "<a href= ".base_url()."fe/ahorros_empleados/".$no_emp." class=\"button\">Ver dep&oacute;sitos</a>";
                        }
                }
                else
					$response = "Lo sentimos no hay registros";//if $data->num_rows
                return $response;
	}

	public function getPrestamosDetalle($no_emp = 0)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$response = $sql = '';
		if($no_emp)
		{
			$sql = "
			SELECT p.monto_prestado, p.monto_total, p.monto_abonado, p.plazo,
			 p.week, p.year, p.status, p.monto_pago, p.interes,
				ifnull((SELECT SUM(pr.monto) FROM prestamo_registro pr 
			WHERE pr.prestamo_id = p.id AND pr.year = p.year),0 ) as 'pagado',
				ifnull((SELECT count(pr.id) FROM prestamo_registro pr 
			WHERE pr.prestamo_id = p.id AND pr.year = p.year),0 ) as 'pagos'
			FROM user u
			INNER JOIN prestamo p
			ON p.user_id = u.id
			INNER JOIN periodo pe
			ON p.periodo_id = pe.id
			WHERE u.role = 0 AND u.status = 1 AND u.no_emp=".$no_emp." 
			and (p.status = 1 OR p.status = 2)
			AND p.periodo_id = ".$current_periodo_id;
			$query = $this->db->query($sql);
			$result = $query->result();
			if(sizeof($result)) return $result;
		}
		return false;
	}

	public function getAhorroDetalle($no_emp = 0)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$response = $sql = '';
		if($no_emp)
		{
			$sql = "
			SELECT a.monto, a.week, a.year, a.beneficiario, a.status, a.notes, 
				ifnull((SELECT SUM(ar.monto) FROM ahorro_registro ar 
			WHERE ar.ahorro_id = a.id AND ar.year = a.year),0 ) as 'ahorrado',
				ifnull((SELECT count(ar.id) FROM ahorro_registro ar 
			WHERE ar.ahorro_id = a.id AND ar.year = a.year),0 ) as 'depositos'
			FROM user u
			INNER JOIN ahorro a
			ON a.user_id = u.id
			INNER JOIN periodo p
			ON a.periodo_id = p.id
			WHERE u.role = 0 AND u.status = 1 AND u.no_emp=".$no_emp."
			and (a.status = 1 OR a.status = 2)
			AND a.periodo_id = ".$current_periodo_id;
			$query = $this->db->query($sql);
			$result = $query->result();
			if(sizeof($result)) return $result[0];
		}
		return false;
	}

	public function getPrestamosId($no_emp = 0){
	
	}
}
