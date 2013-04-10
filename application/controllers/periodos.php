<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Periodos extends CI_Controller {

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

	public function index($offset = 0)
	{
		$list_periodos = $this->controlperiodo->getListPeriodos($offset);
		$content = $this->load->view('be/periodos/main',array('list_periodos'=>$list_periodos), true);
		$this->load->view('be/layout/main',array( 'content'=> $content ) );
	}
	
	function clear_cache()
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
	}


	public function validar_nomina()
	{
		$msg = $emp_list = $week = '';
		$return_array = array();
		if(!sizeof($_POST))		
			$content = $this->load->view('be/periodos/validar_nomina',array('msg'=>$msg,'week'=>$week),true);
		if(sizeof($_POST))
		{
			$week = $_POST['week_to_validate'];
			$return_array = $this->controlperiodo->validar_nomina();
			
			if($return_array[0])
			{
				//new option
				//$this->controlperiodo->nomina_validada($week);
				//!
				$msg = "Validada de manera exitosa";
				$content = $this->load->view('be/periodos/validar_nomina',array('msg'=>$msg,'week'=>$week),true);
			}
			else
			{
				$msg = "Error, favor de verificar";
				$emp_list = $return_array[1];
				$content = $this->load->view('be/periodos/validar_nomina_error',array('msg'=>$msg,
					'emp_list'=>$emp_list,'week'=>$week),true);
			}
		}

		//$content = $this->load->view('be/periodos/validar_nomina',array('msg'=>$msg),true);
	        
		$this->load->view('be/layout/main', array('content' => $content ));
	}

	public function validar_nomina_error()
	{
	      
		$msg = $emp_list = $week = '';
		$return_array = array();
		if(!sizeof($_POST))
			$content = $this->load->view('be/periodos/validar_nomina',array('msg'=>$msg,'week'=>$week),true);
		if(sizeof($_POST))
		{
			$week = $_POST['week_to_validate'];
			$return_array = $this->controlperiodo->validar_nomina();
			
			if($return_array[0])
			{
				$msg = "Validada de manera exitosa";
				$content = $this->load->view('be/periodos/validar_nomina',array('msg'=>$msg,'week'=>$week),true);
			}
			else
			{
				$msg = "Error, favor de verificar";
				$emp_list = $return_array[1];
				$content = $this->load->view('be/periodos/validar_nomina_error',array('msg'=>$msg,
					'emp_list'=>$emp_list,'week'=>$week),true);
			}
		}

		//$content = $this->load->view('be/periodos/validar_nomina',array('msg'=>$msg),true);
	        
		$this->load->view('be/layout/main', array('content' => $content ));
	}

	public function nuevo(){
	      $msg = '';
		if(sizeof($_POST))
		{
			$msg = $this->periodo->create();
		}
		$yearWeeks = $this->miscellaneous->getYearWeeks(date('Y'));
		if($this->controlperiodo->getCurrentPeriodo()){
			$periodo_obj = $this->controlperiodo->getCurrentPeriodo();
			$content = $this->load->view('be/periodos/nuevo',array('yearWeeks'=>$yearWeeks, 'periodo_no' =>$periodo_obj->id + 1, 'msg'=>$msg), true);
		}
		else{
			$content = $this->load->view('be/periodos/nuevo',array('yearWeeks'=>$yearWeeks, 'periodo_no' =>'', 'msg'=>$msg), true);
		}
		$this->load->view('be/layout/main', array('content'=>$content));
	}

public function editar($id){
	        $msg = '';
		if(sizeof($_POST))
		{
			$my_action = $this->input->post('button', TRUE);
			if ($my_action == 'Editar Periodo') {
				$msg = $this->periodo->edit($id);
			}else{
				if(sizeof($_POST['monto_banco']) && $_POST['monto_banco'] != ''){
					$msg = $this->periodo->close($id);
				}else{
					$msg = 'Favor de ingresar el monto generado por intereses.';
				}
			}
		}
		$yearWeeks = $this->miscellaneous->getYearWeeks(date('Y'));
		if($this->controlperiodo->getCurrentPeriodo()){
			$periodo_obj = $this->controlperiodo->getCurrentPeriodo();
			$content = $this->load->view('be/periodos/editar',array('yearWeeks'=>$yearWeeks, 'periodo_no' =>$periodo_obj->id, 'msg'=>$msg), true);
		}
		else{
			$content = $this->load->view('be/periodos/editar',array('yearWeeks'=>$yearWeeks, 'periodo_no' =>'', 'msg'=>$msg), true);
		}
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function eliminar($id)
	{
		$msg = '';
		if(sizeof($_POST))
		{
			$msg = $this->periodo->delete($id);
			$content = $this->load->view('be/periodos/eliminar',array('msg'=>$msg), true);
		}
		else{
		$periodo = $this->controlperiodo->getPeriodoByID($id);
		$content = $this->load->view('be/periodos/eliminar',array('list_periodos'=>$periodo,'msg'=>$msg), true);
		}
		
		$this->load->view('be/layout/main',array( 'content'=> $content ) );
	}


}
