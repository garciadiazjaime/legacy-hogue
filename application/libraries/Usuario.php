<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario {
	private $id;
	private $no_emp;
	private $name;
	private $prestamos;
	private $ahorro;

	public function __construct($params)
	{
		$db = new DataBase();
		$this->id = $params->id;
		$this->no_emp = $params->no_emp;
		$this->name = $params->name;
		if(!empty($params->aid))
			$this->ahorro = new MiAhorro($params->aid);
		
		$db->set_query("SELECT id FROM prestamo WHERE status=1 AND user_id = ".$params->id);
		$result = $db->get_fetch_array();
		if(sizeof($result))
		{
			foreach ($result as $prestamo)
			{
				$this->prestamos[] = new MiPrestamo($prestamo['id']);
			}
		}
		
		return $this;
	}

	public function getProperty($var)
	{
		return $this->$var;
	}

	public function setProperty($var, $value)
	{
		$this->$var = $value;
	}
}

?>

