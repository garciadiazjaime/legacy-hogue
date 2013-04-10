<?php
class Ahorro extends CI_Model {
	var $monto = 500;
	var $week =1;
	var $year = 2;
	var $beneficiario ='asdf';
	var $periodo_id = 1;
	var $user_id = 1;

	function __construct()
	{
		parent::__construct();
		$this->load->model('controlperiodo');
	}

	public function create($periodo = 0, $year = 0, $user_id = 0)
	{
		$msg = '';
		if(!$year) $year = date('Y');
		if($periodo)
		{
			$query = $this->db->query('select id from periodo where status=1');
			if($query->num_rows() > 0)
			{
				$periodo = $query->row()->id;
				$this->monto = $_POST['amount_to_save'];
				$this->week = $_POST['saving_starts'];
				$this->year = $year;
				$this->beneficiario = $_POST['payee_name'];
				$this->periodo_id = $periodo;
				$this->user_id = $user_id;
				
				if( $this->validateCreation($user_id) )
				{
					$msg = ( $this->db->insert('ahorro', $this) ) ?
					'Se genero correctamente el ahorro solicitado...':
					'El Ahorro no se pudo crear, por favor av&iacute;sanos info@mintitmedia.com';
				}else
					$msg = 'El ahorro no se pudo crear. El n&uacute;mero de empleado tiene un ahorro activo.';
			} else
			{
				$msg = 'Error, no hay periodo activo, favor de activar un periodo primero.';	
			}
		}
		return $msg;
	}

	public function validateCreation($user_id)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$query = $this->db->query("SELECT id 
									FROM ahorro 
									WHERE user_id=".$user_id." 
									AND status=1 
									AND periodo_id = ".$current_periodo_id."
									LIMIT 1");
		if($query->num_rows()) return false;
		return true;
	}

	public function getOptionStatus($status, $labels)
	{
		$response = '';
		for($i=1; $i < sizeof($labels); $i++)
		{
			$response .= ($i == $status) ?
			"<option value=\"$i\" selected=\"selected\">".$labels[$i]."</option>" :
			"<option value=\"$i\">".$labels[$i]."</option>" ;
		}
		echo $response;
	}

	public function getStatus($status, $labels)
	{
		$response = '';
		for($i=1; $i < sizeof($labels); $i++)
		{
			$response .= ($i == $status) ?$labels[$i] : "" ;
		}
		echo $response;
	}

	public function getExtraWeeks($ahorro_id)
	{
		$response = "";
		$query = $this->db->query("SELECT ifnull(val,'false') as val FROM excento WHERE status=1 AND tipo=0 AND ahorro_id=".$ahorro_id);
		$labels = array('Indefinido','1','2','3','4','5','6','7','8','9','10');
		if($query->num_rows())
		{
			$result = $query->result();
			for($i=0; $i<11; $i++)
			{
				$response .= ($result[0]->val == $i) ?
				"<option selected=\"selected\">".$labels[$i]."</option>":
				"<option>".$labels[$i]."</option>";
			}
			$response = "
			<label class=\"tag\">por</label>
			<select name=\"saving_weeks_pending\"
			id=\"saving_weeks_pending\">
			".$response."
			</select>
			<label class=\"tag\">semanas</label>
			";
		}
		return $response;
	}

	function update($id)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$response = $sql = $excento_id = '';
		$ahorro_id = '';
		$updateFields = array();
		$query = $this->db->query("SELECT id,monto, beneficiario, notes, status FROM ahorro where user_id = ".$id." AND periodo_id = ".$current_periodo_id);
		
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$query2 = $this->db->query("SELECT val FROM excento WHERE status=1 AND tipo=0 AND ahorro_id=".$row->id);
			$ahorro_id = $row->id;
			if($row->monto != $_POST['amount_to_save'])
			{
				$updateFields['monto'] = $_POST['amount_to_save'];
			}
			if($row->beneficiario != $_POST['payee_name'])
			{
				$updateFields['beneficiario'] = $_POST['payee_name'];
			}
			if($row->notes != $_POST['notes'])
			{
				$updateFields['notes'] = $_POST['notes'];
			}
			if($row->status != $_POST['saving_status'])
			{
				$updateFields['status'] = $_POST['saving_status'];
			}
			if(isset($_POST['saving_weeks_pending']) && $_POST['saving_weeks_pending'])// != $query2->row()->val)
			{
				$query = $this->db->query("SELECT id FROM excento WHERE tipo=0 AND status=1 AND ahorro_id = ".$ahorro_id);
				if ($query->num_rows() > 0)
				{
					$excento_id = $query->row()->id;
					$response = ($this->db->update('excento',array('val' => $_POST['saving_weeks_pending']), "ahorro_id = ".$ahorro_id." and status=1 and tipo=0")) ?
						" Status actualizado.":
						" Error, no se puedo actualizar el status.";
				}else {
					$response = $this->db->insert('excento',array('val' => $_POST['saving_weeks_pending'], 'ahorro_id' => $ahorro_id, 'status'=>1, 'tipo'=>0)) ?
					" Status registrado.":
					" Error, no se puedo registrar el status.";
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
					$response .= ($this->db->update('ahorro', $updateFields, "id = ".$ahorro_id)) ?
					" Ahorro actualizado":
					" Error, no se puedo actualizar el ahorro.";
				}
			}else
			{
				$response = "Nig&uacute;n campo fue modificado por tanto no se realiz&oacute; ning&uacute;n cambio";		
			}
		}else 
		{
			$response = "Error, intentar m&aacute;s tarde";
		}
		return $response;
	}

	function getUserId($id)
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$query = $this->db->query("select user_id from ahorro where id = ".$id." AND periodo_id = ".$current_periodo_id);
		if ($query->num_rows() > 0)
		{
			return $query->row()->user_id;
		}
		return false;
	}
}
