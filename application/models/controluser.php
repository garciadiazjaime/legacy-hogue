<?php
class ControlUser extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->model('controlperiodo');
    }

	public function userExists($employee_number, $employee_name)
	{
		$query = $response = $result = '';
		if(!empty($employee_number))
		{
			$query = $this->db->query(
				"select id FROM user WHERE no_emp=".$employee_number
				);
			if($query->num_rows()) return $query->row()->id;
		}else
		{
			$query = $this->db->query(
				"select id FROM user WHERE name like '%s".
				$employee_name."%s' limit 1"
				);
			if($query->num_rows()) return $query->row()->id;
		}
		return 0;
	}

	public function getUser($id)
	{
		$response = $sql = '';
		if($id)
		{
			$sql = "select name, no_emp 
				FROM user 
				WHERE role = 0 
				AND status = 1 AND id=".$id;
			$query = $this->db->query($sql);
			$result = $query->result();
			if(sizeof($result)) return $result[0];
		}
		return false;
	}

	public function getCurrentAhorro($id)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$response = $sql = '';
		if($id)
		{
			$sql = "
			SELECT a.id as ahorro_id,a.monto, a.week, a.year, a.beneficiario, a.status, a.notes, a.week_end,
				ifnull((SELECT SUM(ar.monto) FROM ahorro_registro ar 
			WHERE ar.ahorro_id = a.id AND ar.year = a.year AND ar.status <> 0),0 ) as 'ahorrado',
				ifnull((SELECT count(ar.id) FROM ahorro_registro ar 
			WHERE ar.ahorro_id = a.id AND ar.year = a.year AND ar.status <> 0),0 ) as 'depositos'
			FROM user u
			INNER JOIN ahorro a
			ON a.user_id = u.id
			WHERE u.role = 0 AND u.status = 1 AND u.id=".$id."
			AND a.periodo_id = ".$current_periodo_id;
			$query = $this->db->query($sql);
			$result = $query->result();
			if(sizeof($result)) return $result[0];
		}
		return false;
	}

	public function getCurrentPrestamo($id)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$response = $sql = '';
		if($id)
		{
			$sql = "
			SELECT p.id as prestamo_id, p.monto_prestado, p.monto_total, p.monto_abonado, p.plazo, p.week_end,
			 p.week, p.year, p.status, p.monto_pago, p.interes,
				ifnull((SELECT SUM(pr.monto) FROM prestamo_registro pr 
			WHERE pr.prestamo_id = p.id AND pr.year = p.year),0 ) as 'pagado',
				ifnull((SELECT count(pr.id) FROM prestamo_registro pr 
			WHERE pr.prestamo_id = p.id AND pr.year = p.year),0 ) as 'pagos'
			FROM user u
			INNER JOIN prestamo p
			ON p.user_id = u.id
			WHERE u.role = 0 AND u.status = 1 AND p.id=".$id."
			AND p.periodo_id = ".$current_periodo_id;
			$query = $this->db->query($sql);
			$result = $query->result();
			if(sizeof($result)) return $result[0];
		}
		return false;
	}


	 public function getListUser($offset = 0, $name, $no_emp)
        {
                $msg = '';
                $this->load->library('pagination');
                $limit = 10;
                $response = '';
                $query = $offset != 0 ?
                        'SELECT id, name, no_emp 
                        FROM user WHERE status=1 
                        AND role=0 
			AND name like "%'.$name.'%" 		
			AND no_emp like "%'.$no_emp.'%" 
			LIMIT '.$limit.' OFFSET '.$offset
                        :
                        'SELECT id, name, no_emp 
                        FROM user WHERE status=1 
                        AND role=0 
			AND name like "%'.$name.'%" 		
			AND no_emp like "%'.$no_emp.'%" 
			LIMIT '.$limit;
                $data = $this->db->query($query);
                if($data->num_rows() > 0){
                         $counter = 1;
                         foreach($data->result() as $row){
                                $class = $counter % 2 == 0 ? 'odd' : 'pair';
                                $response .= "
                                        <tr class = '". $class. "'> 
                                                <td>".$row->name."</td>
                                                <td>".$row->no_emp."</td>
                                                <td>
                                                        <a href='".base_url().
							"sistema/users/edit/".
							$row->id."' title=\"edit user".
							$row->id."\">
                                                                <img src=\"".base_url().
				"resources/images/edit_icon_active.png\" alt=\"edit\" />
                                                        </a>
                                                </td>
                                                <td>
                                                        <a href='".base_url().
							"sistema/users/delete/".
							$row->id."' title=\"delete user ".
							$row->id."\">
                                                        <img src=\"".base_url().
				"resources/images/delete_icon_active.png\" alt=\"delete\"/>
                                                        </a>
                                                </td>
                                        </tr>";
                                $counter++;
                        }//foreach
						if(!empty($response)){
                                $response = "
                                <table style = 'width: 925px;'>
                                        <tr>
                                              <th>Nombre</th>
                                              <th>No. Emp.</th>
                                              <th>Editar</th>
                                              <th>Eliminar</th>
                                        </tr>
                                        $response
                                </table>";
                                $query = $this->db->query('SELECT count(*) as total 
					FROM user WHERE status = 1 AND role = 0 
					AND name like "%'.$name.'%" 		
					AND no_emp like "%'.$no_emp.'%" ');
                                $config['base_url'] = base_url().'sistema/users';
                                $config['total_rows'] = $query->row()->total;
                                $config['per_page'] = $limit;
                                $this->pagination->initialize($config);
                        }else
                                $response = "Lo sentimos no hay registros";
                }//if $data->num_rows
                return $response;
        }//get_user()   	
	
	public function getNumUsers($offset = 0, $name, $no_emp)
        {
                $num_users = '';
                $limit = 10;
		$query = $offset != 0 ?
                        'SELECT id, name, no_emp 
                        FROM user WHERE status=1 
                        AND role=0 
			AND name like "%'.$name.'%" 		
			AND no_emp like "%'.$no_emp.'%" 
			LIMIT '.$limit.' OFFSET '.$offset
                        :
                        'SELECT id, name, no_emp 
                        FROM user WHERE status=1 
                        AND role=0 
			AND name like "%'.$name.'%" 		
			AND no_emp like "%'.$no_emp.'%" 
			LIMIT '.$limit;
                $data = $this->db->query($query);
                if($data->num_rows() > 0){
			if($data->num_rows() < 10)
				$limit = $data->num_rows();
                        $num_users = 'Mostrando resultados del <b>'.
					($offset + 1). ' al '. ($limit + $offset).
					'</b> de <b>';
                        $query = $this->db->query('SELECT count(*) as total 
				FROM user WHERE status = 1 AND role = 0');
                        $total= $query->row()->total;
			$num_users .= $total. '</b>';
                }//if $data->num_rows
                return $num_users;
        }//getNumUsers()

}
