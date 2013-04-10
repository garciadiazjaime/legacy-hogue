<?php
class Periodo extends CI_Model {
	var $start_week;
	var $end_week;
	var $year;
	var $bank_amount = 0;
	var $status = 1;
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function create()
	{	
		$msg = '';
		$this->start_week = $_POST['week_from'];
		$this->end_week = $_POST['week_until'];
		$this->year = date('Y');
		if($this->validateCreation($this->year)){
			$msg = ($this->db->insert('periodo', $this)) ? 
				'Periodo guardado':
				'El periodo no se pudo crear, por favor av&iacute;sanos info@mintitmedia.com';
		}else
			$msg = 'El periodo no se pudo crear, Ya existe un periodo para el A&ntilde;o '.$this->year;
		return $msg;
		
	}

	public function edit($id)
	{	
		$msg = '';
		$data = array(
               'start_week' => $_POST['week_from'],
               'end_week' => $_POST['week_until'],
               'year' => date('Y')
            );
		if($this->validateEdit($id)){
			$this->db->where('id',$id);
			$msg = ($this->db->update('periodo', $data)) ? 
				'Periodo guardado':
				'El periodo no se pudo guardar, por favor av&iacute;sanos info@mintitmedia.com';
		}else
			$msg = 'El periodo no se pudo guardar, Ya existe un periodo para el A&ntilde;o '.$this->year;
		return $msg;
		
	}

	public function close($id)
	{	
		$msg = '';
		$data = array(
               'bank_amount' => $_POST['monto_banco'],
               'status' => 3
            );
		$this->db->where('id',$id);
		$msg = ($this->db->update('periodo', $data)) ? 
			'Periodo cerrado':
			'El periodo no se pudo cerrar, por favor av&iacute;sanos info@mintitmedia.com';
		return $msg;
		
	}
	
	public function delete($id)
	{	
		$msg = '';
		$this->status = 0;
		if($this->validateEdit($id)){
			$this->db->where('id',$id);
			$msg = ($this->db->update('periodo', $this)) ? 
				'Periodo eliminado':
				'El periodo no se pudo eliminar, por favor av&iacute;sanos info@mintitmedia.com';
		}else
			$msg = 'El periodo no se pudo eliminar. EL periodo está siendo utilizado';
		return $msg;
		
	}

	public function validateCreation($year)
	{
		$query = $this->db->query("select id FROM periodo WHERE year=$year and status=1");
		$result = $query->result();		
		if(sizeof($result))
			return false;
		return true;
	}

	public function validateEdit($id)
	{
		$query_ahorro = $this->db->query("select id FROM ahorro WHERE periodo_id = $id");
		$ahorro = $query_ahorro->result();	
		$query_prestamo = $this->db->query("select id FROM prestamo WHERE periodo_id = $id");
		$prestamo = $query_prestamo->result();	
		if(sizeof($ahorro) || sizeof($prestamo))
			return false;
		return true;
	}
	
}
