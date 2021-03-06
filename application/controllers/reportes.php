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

	/*
	Función para mostrar datos de la nómina que en POST se guardan,
	de igual forma verifica que la nómina no haya sido ya registrada.
	*/
	public function nomina()
	{
		$week_is_registered = false;
		$resumen = $report_week = "";
		if(sizeof($_POST))
		{
			$report_week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
			if(!empty($report_week))
			{
				$week_is_registered  = $this->nomina->isWeekRegistered($report_week);
				$resumen = $this->nomina->executeNomina($report_week, $week_is_registered);
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
			$subdata['total_prestado'] = $this->prestamo->get_total_prestado();
			$subdata['total_cerrados'] = $this->prestamo->get_total_cerrados();
			$subdata['total_activos'] = $this->prestamo->get_total_activos();
			$subdata['total_recuperado'] = $this->prestamo->get_total_recuperado();
			$subdata['total_pendiente'] = $subdata['total_prestado'] - $subdata['total_recuperado'];
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

	public function download_prestamos_excel()
	{
		$resumen = "";
		$header = '';
		$resumen = $this->prestamo->get_prestamos_excel();
		if(!empty($resumen))
		{
			$header = "\t\tCAJA AHORRO MAM DE LA FRONTERA DIVISION HOGUE\n\n".
						"# Emp\tNombre\tPrestamo\tDescuento por semana\t# de semanas\tEstatus\tInteres";
			for($i=1;$i<54;$i++)
				$header .= "\t".$i;
			$header .= "\n";
			$resumen = $header.$resumen;
		}
			
		//print_r($resumen);
		return $this->nomina->export_to_excel($resumen, "Reporte_Pestamos_".date('Y'));
	}

	public function ahorros_2($ahorro_id = '')
	{			
		if(empty($ahorro_id))
		{
			$subdata['ahorros'] = $this->ahorro->get_reporte_ahorros();
			$subdata['total_activos'] = $this->ahorro->get_total_activos();
			$subdata['total_inactivos'] = $this->ahorro->get_total_inactivos();
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

	public function download_ahorros_excel()
	{
		$resumen = "";
		$header = '';
		$resumen = $this->ahorro->get_ahorros_excel();
		if(!empty($resumen))
		{
			$header = "\t\tCAJA AHORRO MAM DE LA FRONTERA DIVISION HOGUE\n\n".
						"# Emp\tNombre\tAhorro semanal";
			for($i=1;$i<54;$i++)
				$header .= "\t".$i;
			$header .= "\n";
			$resumen = $header.$resumen;
		}
			
		//print_r($resumen);
		return $this->nomina->export_to_excel($resumen, "Reporte_Ahorros_".date('Y'));
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
			$week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
			if(!empty($week)) $week_is_registered = $this->nomina->isWeekRegistered($week);
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
			$resumen = $this->nomina->get_html_nomina_excel($week);
			if(!empty($resumen))
			{
				$resumen = "\t\tDESCUENTO CAJA DE AHORRO SEMANA #".$week.", ".date('Y')."\n\n# Emp\tNombre\tAhorro\tPrestamo 1\tPrestamo 2\tPrestamo 3\tPrestamo 4\tSemanas\n".$resumen;
			}
			
		}
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

	/*
		Author: Jaime Garcia
		Función para mostrar solo los prestamos registrados en la semana en curso,
		adicionalmente la información se puede exportar a excel (csv) y para eso
		se utiliza la variable 'flag', si ésta tiene valor=excel entonces la información
		se muestra en archivo csv.
	*/
	public function prestamos_semana($flag = ''){
		$content = array();
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$weekNumber = date("W");
		$year = date("Y");
		$total = 0;
		$sql = "SELECT u.no_emp, u.name, u.no_cuenta, p.monto_prestado
			FROM  `prestamo` p
			INNER JOIN user u ON p.user_id = u.id
			WHERE p.periodo_id = ".$current_periodo_id."
			AND p.week = ".$weekNumber;
		$query = $this->db->query($sql);
		if($query->num_rows()){
			$result = $query->result();
			$sql = "SELECT sum(p.monto_prestado) as total
				FROM  `prestamo` p
				INNER JOIN user u ON p.user_id = u.id
				WHERE p.periodo_id = ".$current_periodo_id."
				AND p.week = ".$weekNumber;
			$query = $this->db->query($sql);
			$total = $query->row('total');
			$content = array(
				'status' => True,
				'prestamos' => $result,
				'week' => $weekNumber,
				'year' => $year,
				'total' => $total
			);
		}
		else{
			$content = array(
				'status' => False,
				'week' => $weekNumber,
				'year' => $year
			);
		}
		if(empty($flag)){
			$content = $this->load->view('be/reportes/prestamos_semana', $content, true);
			$this->load->view('be/layout/main', array('content'=>$content));	
		}
		elseif($flag == 'excel' && $content['status'] == True){
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=prestamos_semana_".$content['week'].".xls");
			header("Pragma: no-cache");
			header("Expires: 0");
			$data = "Prestamos\t";
			$data .= "Semana\t".$content['week']." del ".$content['year']."\n";
			$data .= "# Empleado\tNombre\t# de Cuenta\tDeposito\n";
			foreach ($content['prestamos'] as $row) {
				$data .= $row->no_emp."\t".$row->name."\t'".$row->no_cuenta."\t".$row->monto_prestado."\n";
			}
			$data .="\n\n\t\tTotal\t".$content['total'];
			print($data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
