<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sistema extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('user_agent');
	}
	
	public function index()
	{
		$content = $this->load->view('login','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function dashboard()
	{
		$content = $this->load->view('be/dashboard','',true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function ahorros()
	{
		$content = $this->load->view('be/ahorros','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function ahorros_nuevo()
	{
		$content = $this->load->view('be/ahorros_nuevo','', true);
		$this->load->view('be/layout/main', array('content'=>$content));	}
	
	
	public function ahorros_consultar()
	{
		$content = $this->load->view('be/ahorros_consultar','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function periodos()
	{
		$content = $this->load->view('be/periodos','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function periodos_nuevo()
	{
		$content = $this->load->view('be/periodos_nuevo','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function periodos_editar()
	{
		$content = $this->load->view('be/periodos_editar','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function prestamos()
	{
		$content = $this->load->view('be/prestamos','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function prestamos_nuevo()
	{
		$content = $this->load->view('be/prestamos_nuevo','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function prestamos_consultar()
	{
		$content = $this->load->view('be/prestamos_consultar','', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function validar_nomina()
	{
		$content = $this->load->view('be/validar_nomina', '', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function validar_nomina_error()
	{
		$content = $this->load->view('be/validar_nomina_error', '', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function reportes()
	{
		$content = $this->load->view('be/reportes', '', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function reportes_nomina()
	{
		$content = $this->load->view('be/reportes_nomina', '', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function reportes_ahorros()
	{
		$content = $this->load->view('be/reportes_ahorros', '', true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}
	
	public function dashboard_empleados()
	{
		$content = $this->load->view('fe/dashboard_empleados', '', true);
		$this->load->view('fe/layout/main', array('content'=>$content));
	}
	
	public function ahorros_empleados()
	{
		$content = $this->load->view('fe/ahorros_empleados', '', true);
		$this->load->view('fe/layout/main', array('content'=>$content));
	}
	
	public function prestamos_empleados()
	{
		$content = $this->load->view('fe/prestamos_empleados', '', true);
		$this->load->view('fe/layout/main', array('content'=>$content));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
