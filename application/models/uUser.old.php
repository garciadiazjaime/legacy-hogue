<?php
class User extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function create($employee_number, $employee_name)
	{
		$this->db->query("insert into user(name, no_emp) value('".$employee_name."', '".$employee_number."');");
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
				$query = $this->db->query("SELECT id FROM user WHERE id != ".$id." AND no_emp = ".$row->no_emp);
				if ($query->num_rows() > 0)
				{
					$response = "Error: No se pudo guardar, ese <b># Empleado</b> ya existe.";
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
				$response = ($this->db->update('user', $updateFields, "id = ".$id)) ?
					"Usuario actualizado.":
					"Error, no se puedo actualizar usuario.";
			}
			
		}
		return $response;	
	}
}
