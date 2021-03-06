<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fe extends CI_Controller {

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
		$this->load->database();
		$this->load->model('periodo');
		$this->load->model('controlfe');
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
	}
	
	public function index()
	{
		$msg = '';
		$employee_number = '';
		if(sizeof($_POST))
		{
			$employee_number = $_POST['employee_number'];
			$emp_info = $this->user->getInfo($employee_number);
			if ($emp_info != '')
				redirect(base_url().'fe/dashboard_empleados/'.$employee_number, 'refresh');
			else
				$msg = '<em>Error</em> El n&uacute;mero de empleado no existe';
		}
		$content = $this->load->view('fe/login',array('msg'=>$msg), true);
		$this->load->view('fe/layout/main', array('content'=>$content,'no_emp'=>$employee_number));
	}
	
	public function dashboard_empleados($no_emp = 0)
	{
		$prestamos = $ahorro = '';
		if($no_emp > 0){
			$prestamos = $this->controlfe->getPrestamos($no_emp);
			$ahorro = $this->controlfe->getAhorro($no_emp);
		}

		$content = $this->load->view('fe/dashboard_empleados',  array('prestamos'=>$prestamos,'ahorro'=>$ahorro,'no_emp'=>$no_emp), true);
		$this->load->view('fe/layout/main', array('content'=>$content,'no_emp'=>$no_emp));
	}
	
	public function ahorros_empleados($no_emp = 0)
	{
		$msg = '';
		$extraWeeks = '';
		$u_id = $this->user->getId($no_emp);
		$user =  $this->controluser->getUser($u_id);
		$ahorro =  $this->controlfe->getAhorroDetalle($no_emp);
		$ahorro->status;
		//if($ahorro->status == 2) $extraWeeks = $this->ahorro->getExtraWeeks($id);
		$content = $this->load->view('fe/ahorros_empleados',array('user' => $user, 'ahorro' => $ahorro, 'extraWeeks' => $extraWeeks, 'msg' => $msg, 'id'=>$u_id), true);
		
		$this->load->view('fe/layout/main', array('content'=>$content,'no_emp'=>$no_emp));
	}
	
	public function prestamos_empleados($no_emp = 0, $p_id = 0)
	{
		$yearWeeks = $msg = '';
		$j=0;
		$prestamo =  $this->controlfe->getPrestamosDetalle($no_emp);
		if(sizeof($prestamo) > 1){
			$msg = "<p class=\"other_loans\"><em>Total pr&eacute;stamos:</em></p>";

			for ($i = 0; $i < sizeof($prestamo); $i++){
				$j=$i+1;
				$msg .= "<p class=\"other_loans\">
						<a href= ".base_url()."fe/prestamos_empleados/".$no_emp."/".$i." class=\"loan_separator\"> #".$j."</a>
					</p>";
			}
		} 
		$u_id = $this->user->getId($no_emp);
		$user =  $this->controluser->getUser($u_id);
		$content = $this->load->view('fe/prestamos_empleados',array('user' => $user, 'prestamo' => $prestamo[$p_id], 'msg' => $msg, 'id'=>$u_id,'yearWeeks' => $yearWeeks), true);
		$this->load->view('fe/layout/main', array('content'=>$content,'no_emp'=>$no_emp));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
