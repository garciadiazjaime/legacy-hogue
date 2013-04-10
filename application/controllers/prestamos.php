<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestamos extends CI_Controller {

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
		if ($this->session->userdata('is_logged') != 'true' && uri_string() != 'sistema/login')
		{
     			redirect(base_url().'sistema/login', 'refresh');
		}
	}	

	public function index()
	{	
		$prestamos = $this->getPrestamos();
		$content = $this->load->view('be/prestamos/main', array('prestamos'=>$prestamos), true);
		$this->load->view('be/layout/main',array( 'content'=> $content ) );
	}
	
	function clear_cache()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
	}

	public function getPrestamos(){

		return  $this->prestamo->_get_prestamos();

	}

	public function nuevo(){
	        $saving_starts = '';
		$msg = '';
	        $yearWeeks = $this->miscellaneous->getYearWeeks(
			date('Y'), 
			1, 
			$saving_starts
		);

		if(sizeof($_POST)){
			$msg = $this->savePrestamos();
		}

		$_Content = $this->load->view( 
			'be/prestamos/nuevo',
			array( 'yearWeeks' => $yearWeeks, 'msg'=>$msg ),
			true 
		);
	        
		$this->load->view( 
			'be/layout/main',
			array( 'content' => $_Content ) 
		);
	}

	public function ver($id = '')
	{
		$extraWeeks = $saving_starts = '';
	        $yearWeeks = $this->miscellaneous->getYearWeeks(
			date('Y'));
		$msg = $user_id = '';
		if(sizeof($_POST))
		{
			$msg = $this->updatePrestamos($id);
		}
		$user_id  = $this->prestamo->getUserId($id);
		$user =  $this->controluser->getUser($user_id);
		$prestamo =  $this->controluser->getCurrentPrestamo($id);
		$prestamo->status;
		if($prestamo->status == 2) $extraWeeks = $this->ahorro->getExtraWeeks($id);
		$content = $this->load->view('be/prestamos/ver',array('user' => $user, 'prestamo' => $prestamo, 'msg' => $msg, 'id'=>$id,'yearWeeks' => $yearWeeks, 'extraWeeks' => $extraWeeks), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}

	public function historial($id = '',$offset=0)
	{
		$extraWeeks = $msg = $user_id = '';
		$user =  $this->controluser->getUser($id);
		$prestamo =  $this->controluser->getCurrentPrestamo($id);
		$prestamo->status;
		$registros = $this->prestamo->_get_registros_prestamo($prestamo->prestamo_id,$offset);
		$content = $this->load->view('be/prestamos/historial',array('registros' => $registros, 'id' => $id), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}

	public function ver_registros($id = '')
	{
		$monto =  $week = $msg = '';
		if(sizeof($_POST))
		{
			$msg = $this->prestamo->update_registro($id);
		}
		$prestamo =  $this->prestamo->getRegistroByID($id);
		if($prestamo){
			$week = $prestamo->week;
			$monto = $prestamo->monto;
		}
		$content = $this->load->view('be/prestamos/ver_registros',array('week' => $week, 'monto' => $monto, 'msg' => $msg), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}

	public function delete($id = '')
	{
		$monto =  $week = $msg = $historial = '';
		if(sizeof($_POST))
		{
			$msg = $this->prestamo->delete_registro($id);
			$historial = base_url().'sistema/prestamos';
		}
		$prestamo =  $this->prestamo->getRegistroByID($id);
		if($prestamo){
			$week = $prestamo->week;
			$monto = $prestamo->monto;
		}
		$content = $this->load->view('be/prestamos/delete',array('week' => $week, 'monto' => $monto, 'msg' => $msg, 'historial'=>$historial), true);
		$this->load->view('be/layout/main',array('content'=>$content));
	}

	public function infoEmpleado(){

		echo  $this->prestamo->_get_infoEmpleado();

	}

	public function savePrestamos(){

		return  $this->prestamo->_save_prestamos();

	}

	public function updatePrestamos($id){

		return  $this->prestamo->_update_prestamos($id);

	}
}
