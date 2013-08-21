<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MiPrestamo {
	private $id;
	private $monto;
	private $monto_total;			//monto total a pagar: prestamo + intereses
	private $monto_pago;			//monto semanal a pagar
	private $monto_abonado;			//monto que se lleva depositado
	private $plazo;
	private $interes;
	private $week;
	private $year;
	private $status;
	private $notes;
	private $periodo_id;
	private $user_id;

	public function __construct($id)
	{
		$db = new DataBase();
		$db->set_query("SELECT * FROM prestamo WHERE id = ".$id);
		$result = $db->get_fetch_array();
		if(sizeof($result))
		{
			foreach ($result as $prestamo)
			{
				$this->id = $prestamo['id'];
				$this->monto_total = $prestamo['monto_total'];
				$this->monto_pago = ($prestamo['status'] == 1) ? $prestamo['monto_pago'] : 0; ;
				$this->monto_abonado = $prestamo['monto_abonado'];
				$this->plazo = $prestamo['plazo'];
				$this->interes = $prestamo['interes'];
				$this->week = $prestamo['week'];
				$this->year = $prestamo['year'];
				$this->status = $prestamo['status'];
				$this->notes = $prestamo['notes'];
				$this->periodo_id = $prestamo['periodo_id'];
				$this->user_id = $prestamo['user_id'];
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
}

?>

