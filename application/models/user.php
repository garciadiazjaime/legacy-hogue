<?php
class User extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
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
		$response = '';
		$sql = "select name, id from user where no_emp='".$no_emp."' and status = 1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$response = $query->row()->name."|".$query->row()->id;
			$sql = "select count(*) as times from ahorro where user_id=".$query->row()->id." and status = 1";
			$query2 = $this->db->query($sql);
			if($query2->num_rows() > 0)
			$response .="|".$query2->row()->times;
		}
		return $response;
	}

	public function getId($no_emp = 0)
	{
		$response = '';
		$sql = "select id from user where no_emp='".$no_emp."' and status = 1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$response = $query->row()->id;
		}
		return $response;
	}
}
