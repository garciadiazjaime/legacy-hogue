<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

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

	/*public function index()
	{
		redirect(base_url().'sistema/users', 'refresh');
	}*/

	function clear_cache()
	{
        	$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	        $this->output->set_header("Pragma: no-cache");
	}

	
	public function create()
	{
		$msg = '';
		$success = false;
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->lang->load('form_validation', 'spanish');
	    $this->form_validation->set_rules(
			'name', 
			'Nombre', 
			'trim|required|max_length[90]|xss_clean'
		);
		$this->form_validation->set_rules(
			'no_emp', 
			'No. Emp.', 
			'required|max_length[10]|xss_clean|numeric'
		);
		$this->form_validation->set_rules(
			'no_cuenta', 
			'No. de Cuenta.', 
			'xss_clean'
		);

		if(sizeof($_POST))
		{
			$POST['name'] = trim($_POST['name']);
			if ($this->form_validation->run() == FALSE)
			{
				$msg = 'Error, favor de capturar la informaci&oacute;n de forma correcta';
			}
			else
			{
				$data = array(
					'name' => $_POST['name'],
					'no_emp' => $_POST['no_emp'],
					'no_cuenta' => $_POST['no_cuenta'],
					'date' => date('Y-m-d')
				);
				$query = $this->db->query(
					'select id, status '.
					'from user where name="'.$data['name'].
					'" && no_emp="'.$data['no_emp'].'"'
				);
				if($query->num_rows() > 0)
				{
					if($query->row()->status)
					{
						$msg = 'Error, esto usuario ya ha sido registro anteriormente';
					}
					else
					{
						$this->db->query(
							'update user set status=1, date = NOW() where id = ?', 
							$query->row()->id
						);
						$msg = "Operaci&oacute;n con &Eacute;xito, Usuario activado";
					}
				}
				else
				{
					$this->db->insert('user', $data);
					$msg = "Operaci&oacute;n con &Eacute;xito, Usuario registrado";
				}
				$success = true;
			}
		}
 		$content = $this->load->view(
			'be/users/create',
			array('msg'=>$msg, 'success'=>$success),
			true
		);
		$this->load->view('be/layout/main', array('content'=>$content));
	}

	public function index($offset = 0)
	{
		$this->load->library('user_agent');
		$name = '';
		$no_emp = '';
		if(sizeof($_POST)){
			$name =$_POST['name'];			  
			$no_emp = $_POST['no_emp'];
		}
		$list_user = $this->controluser->getListUser($offset,$name,$no_emp);
		$num_users = $this->controluser->getNumUsers($offset,$name,$no_emp);
		$content = $this->load->view(
				'be/users/main',
				array('user_list'=>$list_user,
				'num_users'=>$num_users),
				true);
	        $this->load->view('be/layout/main', array('content'=>$content));
	}
 
	public function edit($id)
	{
	        $this->load->library('user_agent');
		$msg = '';
		$name = '';
		$no_emp = '';
		$no_cuenta = '';
		$list_users = '';
		$success = false;
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->lang->load('form_validation', 'spanish');
	        $this->form_validation->set_rules(
			'name', 
			'Nombre', 
			'trim|required|max_length[90]|xss_clean'
		);
		$this->form_validation->set_rules(
			'no_emp', 
			'No. Emp.', 
			'required|max_length[10]|xss_clean|numeric'
		);
		$query = $this->db->get_where('user', array('id' => $id));
		$name = $query->row()->name;
		$no_emp = $query->row()->no_emp;
		$no_cuenta = $query->row()->no_cuenta;
		if(sizeof($_POST))
		{
			$POST['name'] = trim($_POST['name']);
			if ($this->form_validation->run() == FALSE)
				$msg = 'Error, favor de capturar la '.
				       'informaci&oacute;n de forma correcta';
			else
			{
			       $data = array(
				  'name' => $_POST['name'],
				  'no_emp' => $_POST['no_emp'],
				  'no_cuenta' => $_POST['no_cuenta'],
				  'date' => date('Y-m-d')
			       );
				$name = $_POST['name'];
				$no_emp = $_POST['no_emp'];
				$no_cuenta = $_POST['no_cuenta'];
				$this->db->where('id', $id);
				$this->db->update('user', $data); 
				$success = true;
				$msg = 'Usuario modificado de manera exitosa.';
				$list_users = base_url().'sistema/users';
			}
			$content = $this->load->view('be/users/edit',
 					array('name'=>$name, 
						'no_emp'=>$no_emp,
						'no_cuenta'=>$no_cuenta,
						'msg'=>$msg,
						'list_users'=>$list_users), 
					true
				);
			$this->load->view('be/layout/main', array('content'=>$content));
		}
		else {
			$content = $this->load->view('be/users/edit',
 					array('name'=>$name, 
						'no_emp'=>$no_emp,
						'no_cuenta'=>$no_cuenta
						), 
						true
					);
			$this->load->view('be/layout/main', array('content'=>$content));
		}	
	}

	public function delete($id)
	{
		$msg = '';
		$query = $this->db->get_where('user', array('id' => $id));
		$name = $query->row()->name;
		$no_emp = $query->row()->no_emp;
		if(sizeof($_POST))
		{
		       $data = array(
			  'status' => 0,
			  'date' => date('Y-m-d')
		       );

			$this->db->where('id', $id);
			$this->db->update('user', $data); 
			$success = true;
			$msg = 'Usuario eliminado de manera exitosa.';
			$list_users = base_url().'sistema/users';
			$content = $this->load->view('be/users/delete',
 					array('msg'=>$msg, 'list_users'=>$list_users), 
					true
				);
			$this->load->view('be/layout/main', array('content'=>$content));
		}
		else{
			$content = $this->load->view('be/users/delete',
 					array('name'=>$name, 'no_emp'=>$no_emp), 
					true
				);
			$this->load->view('be/layout/main', array('content'=>$content));
		}
	}

	public function getInfo(){
		echo  $this->prestamo->_get_infoEmpleado();
	}

}
