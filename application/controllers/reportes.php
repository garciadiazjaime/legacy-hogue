<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller {

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
		$this->load->model('ahorro');
		$this->load->model('user');
		$this->load->model('controlperiodo');
		$this->load->model('controluser');
		$this->load->model('controlahorro');
		$this->load->model('nomina');
		$this->load->model('reporte');
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

	function clear_cache()
	{
        	$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	        $this->output->set_header("Pragma: no-cache");
	}

	public function index()
	{
		$resumen = "";
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$list_periodos = $this->controlperiodo->getPeriodoByID($current_periodo_id);
		if(sizeof($_POST))
		{
			$resumen = $this->reporte->general();
		}
		$content = $this->load->view('be/reportes/main', array('resumen'=>$resumen,
			'list_periodos'=>$list_periodos), true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function nomina()
	{
		$week_is_registered = false;
		$resumen = $report_week = "";
		if(sizeof($_POST))
		{
			$report_week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
			if(!empty($report_week))
			{
				if(!$this->nomina->isWeekRegistered($report_week))
				{
					$resumen = $this->nomina->executeNomina(
						$report_week,
						$week_is_registered);
				}else
				{
					$week_is_registered = true;
					$resumen = $this->nomina->executeNomina(
						$report_week,
						$week_is_registered);
				}
			}

		}
		$content = $this->load->view('be/reportes/nomina', array('resumen'=>$resumen,
			'report_week'=>$report_week,'week_is_registered'=>$week_is_registered), true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function nomina_2()
	{
		$week_is_registered = false;
		$resumen = $report_week = "";
		if(sizeof($_POST))
		{
			$report_week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
			if(!empty($report_week))
			{
				$week_is_registered = $this->nomina->isWeekRegistered($report_week);
				$resumen = $this->nomina->executeNomina_2(
						$report_week,
						$week_is_registered);
			}
		}
		$content = $this->load->view('be/reportes/nomina2', array(
				'resumen'=>$resumen,
				'report_week'=>$report_week,
				'week_is_registered'=>$week_is_registered),
			true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function prestamos($prestamo_id = '')
	{			
		if(empty($prestamo_id))
		{
			$subdata['prestamos'] = $this->prestamo->get_reporte_prestamos();
			$content = $this->load->view('be/reportes/prestamos', $subdata, true);	
		}
		else
		{
			$subdata['general_info'] = $this->prestamo->get_reporte_prestamo_general($prestamo_id);
			$subdata['desglose'] = $this->prestamo->get_reporte_desglose($prestamo_id);
			$content = $this->load->view('be/reportes/prestamo_desglose', $subdata, true);	
		}
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function ahorros_2($ahorro_id = '')
	{			
		if(empty($ahorro_id))
		{
			$subdata['ahorros'] = $this->ahorro->get_reporte_ahorros();
			$content = $this->load->view('be/reportes/ahorro_2', $subdata, true);	
		}
		else
		{
			$subdata['general_info'] = $this->ahorro->get_ahorro_general($ahorro_id);
			$subdata['desglose'] = $this->ahorro->get_ahorro_desglose($ahorro_id);
			$content = $this->load->view('be/reportes/ahorro_desglose', $subdata, true);	
		}
		$this->load->view('be/layout/main', array('content'=>$content));
	}


	public function ahorros()
	{	
		$closed_periodo_id = $this->controlperiodo->getLastClosedPeriodoID();
		$ahorradores = $prestamo = $total_intereses = $total_ahorrado = $calculo = '';
		$break_down = '';
		$query = $this->db->query("select bank_amount FROM periodo WHERE id = ".$closed_periodo_id);
		if($query->num_rows()){
			$result = $query->result();	
			$banco = $result[0]->bank_amount;
		}
		else {
			$banco = 0;
		}
		$is_post = false;
		$msg = '';
		$ahorradores = '';
		
		if(sizeof($_POST))
		{
			if($banco <= 0)
			{
				$msg = 'Favor de ingresar un monto válido.';
			}
			else{
				$result = $this->reporte->ahorros();
				$ahorradores = $result['ahorradores'];
				$banco = $result['banco'];
				$prestamo = $result['prestamo'];
				$total_intereses = $result['total_intereses'];
				$total_ahorrado = $result['total_ahorrado'];
				$calculo = $result['calculo'];
				$is_post = true;

				$break_down = '';
			}
		}
		$content = $this->load->view('be/reportes/ahorros', 
			array('msg'=>$msg,
				'ahorradores'=>$ahorradores, 
				'prestamo'=>$prestamo, 
				'banco'=>$banco, 
				'is_post'=>$is_post,
				'break_down' => $break_down,
				'total_intereses' => $total_intereses,
				'total_ahorrado' => $total_ahorrado,
				'calculo' => $calculo), 
			true
		);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function excel(){
		$this->load->view('be/reportes/excel', '', true);
	}

	public function getReporteNominas()
	{
		$report_week = $resumen = "";
		$week_is_registered = false;
		if(sizeof($_POST))
		{
			$week_is_registered = isset($_POST['week_is_registered']) ? $_POST['week_is_registered'] : false;
			$report_week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
			if(!empty($report_week))
			{
				$resumen = $this->nomina->executeNomina(
					$report_week,
					$week_is_registered);
			}

		}
		echo $resumen;
	}

	public function registrarNomina($week)
	{
		if(sizeof($_POST))
		{
			
			$report_week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
			if(!empty($report_week))
			{
				$week = $report_week;
				$week_is_registered = $this->nomina->isWeekRegistered($week);
			}

		}
		else
			$week_is_registered = $this->nomina->registrarNomina($week);
		
		$resumen = $this->nomina->executeNomina($week,$week_is_registered);

		$content = $this->load->view('be/reportes/nomina', array('resumen'=>$resumen,
			'report_week'=>$week,'week_is_registered'=>$week_is_registered), true);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function getNominaExcel($week)
	{
		return $this->nomina->executeNominaExcel($week);
	}

	public function download_nomina_excel($week)
	{
		$week_is_registered = false;
		$resumen = $report_week = "";
		if(!empty($week))
		{
			$week_is_registered = $this->nomina->isWeekRegistered($week);
			//$resumen = $this->nomina->get_nomina_data($week, '8');	
			$resumen = $this->nomina->get_html_nomina_excel($week);
			if(!empty($resumen))
			{
				$resumen = "\t\tDESCUENTO CAJA DE AHORRO SEMANA #".$week.", ".date('Y')."\n\n# Emp\tNombre\tAhorro\tPrestamo 1\tPrestamo 2\tPrestamo 3\tSemanas\n".$resumen;
			}
			
		}
		//print_r($resumen);
		return $this->nomina->export_nomina_excel($resumen, $week);
	}
	
	public function getReporteGeneral()
	{
		echo $this->reporte->general();
	}

	public function getReporteAhorros(){
		echo $this->reporte->ahorros();
	}

	public function getAhorrosExcel(){
		echo $this->reporte->ahorros_excel();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
