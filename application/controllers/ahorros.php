<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ahorros extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('periodo');
		$this->load->model('ahorro');
		$this->load->model('user');
		$this->load->model('controlperiodo');
		$this->load->model('controluser');
		$this->load->model('controlahorro');
		$this->load->model('nomina');
		$this->load->model('prestamo');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('miscellaneous');
		$this->is_logged_in();
		$this->clear_cache();
	}

	public function is_logged_in()
	{
		if ($this->session->userdata('is_logged') != 'true'
			&& uri_string() != 'sistema/login')
		{
     		redirect(base_url().'sistema/login', 'refresh');
		}
	}	

	public function index()
	{
		$ahorradores =  $this->controlahorro->getAhorradores();
		$content = $this->load->view('be/ahorros/main',array('ahorradores' => $ahorradores), true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	function clear_cache()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
	}

	public function ver($id = '')
	{
		$extraWeeks = $msg = $user_id = '';
		if(sizeof($_POST))
		{
			$user_id  = $this->ahorro->getUserId($id);
			//$msg = $this->user->update($user_id);
			$msg = $this->ahorro->update($id);
		}
		$user =  $this->controluser->getUser($id);
		$ahorro =  $this->controluser->getCurrentAhorro($id);
		$ahorro->status;
		if($ahorro->status == 2) $extraWeeks = $this->ahorro->getExtraWeeks($id);
		$content = $this->load->view('be/ahorros/ver',array('user' => $user, 'ahorro' => $ahorro, 'extraWeeks' => $extraWeeks, 'msg' => $msg, 'id'=>$id), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}
	
	public function historial($id = '',$offset=0)
	{
		$extraWeeks = $msg = $user_id = '';
		$user =  $this->controluser->getUser($id);
		$ahorro =  $this->controluser->getCurrentAhorro($id);
		$ahorro->status;
		$registros = $this->controlahorro->getRegistrosAhorro($ahorro->ahorro_id,$offset);
		$content = $this->load->view('be/ahorros/historial',array('registros' => $registros, 'id' => $id), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}

	public function ver_registros($id = '')
	{
		$monto =  $week = $msg = '';
		if(sizeof($_POST))
		{
			$msg = $this->controlahorro->update_registro($id);
		}
		$ahorro =  $this->controlahorro->getRegistroByID($id);
		if($ahorro){
			$week = $ahorro->week;
			$monto = $ahorro->monto;
		}
		$content = $this->load->view('be/ahorros/ver_registros',array('week' => $week, 'monto' => $monto, 'msg' => $msg), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}

	public function delete($id = '')
	{
		$monto =  $week = $msg = '';
		$historial = '';
		if(sizeof($_POST))
		{
			$msg = $this->controlahorro->delete_registro($id);
			$historial = base_url().'sistema/ahorros';
		}
		$ahorro =  $this->controlahorro->getRegistroByID($id);
		if($ahorro){
			$week = $ahorro->week;
			$monto = $ahorro->monto;
		}
		$content = $this->load->view('be/ahorros/delete',array('week' => $week, 'monto' => $monto, 'msg' => $msg,'historial'=>$historial), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}

	public function nuevo()
	{
		$msg = $user_id = $employee_number = $amount_to_save = $employee_name = $payee_name = $saving_starts = $date = '';
		$periodo = $this->controlperiodo->getCurrentPeriodo();
		if(sizeof($_POST))
		{
			$employee_number = $_POST['employee_number'];
			$amount_to_save = $_POST['amount_to_save'];
			$saving_starts = $_POST['saving_starts'];
			$employee_name = $_POST['employee_name'];
			$payee_name = $_POST['payee_name'];

			$user_id = $this->controluser->userExists($employee_number, $payee_name, $payee_name);
			if(!$user_id) $user_id = $this->user->create($employee_number, $employee_name);
			$msg = $this->ahorro->create($periodo, date('Y'), $user_id);
			if($msg == 'Se genero correctamente el ahorro solicitado...')
			{
				$employee_number = $employee_name = $amount_to_save = $saving_starts = $employee_name = $payee_name = '';
				$msg = 'Ahorro guardado. ';
			}
		}
		if($periodo)
		{
			$date = date("d/M/Y", strtotime("1.1.".$periodo->year." + ".$periodo->start_week." weeks - 6 days"));
			$date = $this->miscellaneous->getSpanishDate($date);
			$msg .= "El d&iacute;a en curso corresponde al periodo #".$periodo->id.", fecha de inicio:".$date;
			$yearWeeks = $this->miscellaneous->getYearWeeks(date('Y'), 1, $saving_starts);
			$content = $this->load->view('be/ahorros/nuevo',
					array('yearWeeks'=>$yearWeeks, 'msg'=> $msg, 'post'=>array($employee_number, $amount_to_save, $employee_name, $payee_name)), true);
		}else
		{
			$msg = "<div class=\"warning\">Error: Hay que crear primero un periodo.</div>";
			$content = $msg;
		}
		$this->load->view('be/layout/main', array('content'=>$content) );
	}
	
	public function guardar()
	{
		$user_id = isset($_POST['usrid']) ? $_POST['usrid'] : '';
		if(!empty($user_id))
			echo  $this->ahorro->create('','',$user_id);
		else
			echo "error, no se pudo guardar el ahorro.";
	}

	public function getAhorradores()
	{
		echo $this->controlahorro->getAhorradores();
	}

	public function periodos()
	{
		$content = $this->load->view('be/periodos','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function periodos_nuevo()
	{
		$msg = '';
		if(sizeof($_POST))
		{
			$msg = $this->periodo->create();
		}
		$yearWeeks = $this->miscellaneous->getYearWeeks(date('Y'));
		$periodo_obj = $this->controlperiodo->getCurrentPeriodo();
		$content = $this->load->view('be/periodos_nuevo',array('yearWeeks'=>$yearWeeks, 'periodo_no' =>$periodo_obj->id + 1, 'msg'=>$msg), true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
}
