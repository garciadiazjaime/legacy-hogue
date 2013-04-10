<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MiAhorro {
	private $id;
	private $monto;
	private $week;
	private $year;
	private $beneficiario;
	private $periodo_id;
	private $status;
	private $notes;
	private $user_id;
	private $historial;

	public function __construct($id)
	{
		$db = new DataBase();
		$db->set_query("SELECT * FROM ahorro WHERE (status=1 OR status=2) AND id = ".$id);
		$result = $db->get_fetch_array();
		if(sizeof($result))
		{
			foreach ($result as $ahorro)
			{
				$this->id = $ahorro['id'];
				$this->monto = ($ahorro['status'] == 1) ? $ahorro['monto'] : 0;
				$this->week = $ahorro['week'];
				$this->year = $ahorro['year'];
				$this->beneficiario = $ahorro['beneficiario'];
				$this->notes = $ahorro['notes'];
				$this->periodo_id = $ahorro['periodo_id'];
				$this->user_id = $ahorro['user_id'];
				$this->status = $ahorro['status'];
				$this->historial = $this->getHistorial($id);
			}
		}
	}
	
	public function getProperty($var)
	{
		return $this->$var;
	}
	
	public function setProperty($var, $value)
	{
		$this->$var = $value;
	}
	
	public function getHistorial($id)
	{
		$db = new DataBase();
		$response = "";
		$result = $db->set_query("SELECT * FROM ahorro_registro WHERE ahorro_id = ".$id);
		if(sizeof($result))
		{
			foreach ($result as $ahorro)
			{
				$response[] = array(
						'id' => $row['id'],
						'monto' => $row['monto'],
						'week' => $row['week'],
						'year' => $row['year'],
						'status' => $row['status'],
						'ahorro_id' => $row['ahorro_id']
				);
			}
		}
		return $response;
	}
}

?>

