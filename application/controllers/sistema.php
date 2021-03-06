<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sistema extends CI_Controller {

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
		redirect(base_url().'sistema/dashboard', 'refresh');		
	}

	function clear_cache()
	{
        	$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	        $this->output->set_header("Pragma: no-cache");
	}

	
	public function login()
	{
		$msg = '';
		$this->session->unset_userdata('is_logged');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->lang->load('form_validation', 'spanish');
		$username = '';
		$password = '';
		if(sizeof($_POST)){
			$this->form_validation->set_rules(
					'username',
					'Usuario',
					'trim|required|xss_clean'
			);
			$this->form_validation->set_rules(
					'password',
					'Contrase&ntilde;a',
					'trim|required|md5'
			);
			if($this->form_validation->run() == TRUE){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				if($username == 'hogue_user' && $password == md5('Hogue@horro')){
					$this->session->set_userdata('is_logged', 'true');
					redirect(base_url().'sistema/dashboard', 'refresh');
				}
			}
			$msg = "<p class='submit_error'>
			Login incorrecto, verificar usuario y contrase&ntilde;a.
			</p>";
	
		}
		$content = $this->load->view('be/login',
				array('msg'=>$msg, 'username'=>$username, 'password'=>$password), true);
		$this->load->view('be/layout/login', array('content' => $content));
	}
	
	public function logout()
	{
		$this->session->unset_userdata('is_logged');
		$this->session->sess_destroy();
		redirect(base_url().'sistema/login', 'refresh');
	}
	
	public function dashboard()
	{		
		$content = $this->load->view('be/dashboard','',true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	/*	public function prestamos()
	 {
	$content = $this->load->view('be/prestamos','', true);
	$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function prestamos_nuevo()
	{
	$content = $this->load->view('be/prestamos_nuevo','', true);
	$this->load->view('be/layout/main', array('content'=>$content));
	}
	public function validar_nomina()
	{
	$content = $this->load->view('be/validar_nomina', '', true);
	$this->load->view('be/layout/main', array('content'=>$content));
	}
	*/
}
