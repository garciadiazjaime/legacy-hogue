<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Miscellaneous /*extends CI_Controller*/{
/*
 	public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->database();
		$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->lang->load('form_validation', 'spanish');

        }
*/

	public function getYearWeeks($year, $fromCurrent = false, $saving_starts = 0)
	{
		$dayOfYear = $thisMonday = $nextFriday = $response = $selected = $startFrom = '';
		$monts_en = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
		$months_sp = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		$flag = $saving_starts ? $saving_starts : date('W');
		if($fromCurrent){
			$dayOfYear = mktime(0, 0, 0, date('m'), date('d'), $year);
			$startFrom = date('W')-8;
			$thisMonday = strtotime('monday -9 week', $dayOfYear);
		}
		else{
			$dayOfYear = mktime(0, 0, 0, 1, 1, $year);
			$startFrom = 1;
			// in 2016 it was 'monday 0 days' but before it was 'monday -7 days'
			$thisMonday = strtotime('monday 0 days', $dayOfYear);
		}
		for($i=$startFrom; $i<53 ; $i++)
		{
			$nextFriday = strtotime('+6 day', $thisMonday);
			$selected = ($i != $flag) ? '' : "selected=\"selected\"";
			$response .=
				"
				<option value=\"$i\" $selected >
					Semana $i (".
						str_replace($monts_en, $months_sp, date('M',$thisMonday))." ".date('d', $thisMonday)." a ".
						str_replace($monts_en, $months_sp, date('M',$nextFriday))." ".date('d',$nextFriday)." del ".date('Y', $nextFriday)."
						)
				</option>";
			$thisMonday = strtotime('+1 week', $thisMonday);
		}
		return $response;
	}
	
	public function sanitize($str)
	{
		$fields = array();
		$a = explode('&', $str);
		$i = 0;
		if(strlen($str) > 1)
			while ($i < count($a)) {
			$b = preg_split("/=/", $a[$i]);
			$fields[htmlspecialchars(urldecode($b[0]))] =  htmlspecialchars(urldecode($b[1]));
			$i++;
		}
		return $fields;	
	}
	
	public function getSpanishDate($date)
	{
		$response = '';
		$months = array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
		$meses = array('','ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dec');
		$response = str_replace($months, $meses, $date);
		return $response;
	}
/*
	public function getListUser($offset = 0)
	{	
		$msg = '';
                $this->load->library('pagination');
                $limit = 10;
                $response = '';
                $query = $offset != 0 ?
                	'SELECT id, name, no_emp 
			FROM user WHERE status=1 
                        AND role=0 LIMIT '.$limit.' OFFSET '.$offset
                        :
                        'SELECT id, name, no_emp 
                        FROM user WHERE status=1 
                        AND role=0 LIMIT '.$limit;
                $data = $this->db->query($query);
		if($data->num_rows() > 0){
                         $counter = 1;
                         foreach($data->result() as $row){
                         	$class = $counter % 2 == 0 ? 'odd' : 'pair';
                                $response .= "
                                	<tr class = '". $class. "'> 
                                        	<td>".$row->name."</td>
                                                <td>".$row->no_emp."</td>
                                                <td>
                                                	<a href='".base_url()."index.php/sistema/edit_user/".$row->id."' title=\"edit user".$row->id."\">
	                                                        <img src=\"".base_url()."resources/images/edit_icon_active.png\" alt=\"edit\" />
                                                        </a>
                                                </td>
                                                <td>
                                                        <a href='".base_url()."index.php/sistema/delete_user/".$row->id."' title=\"delete user ".$row->id."\">
                                                        <img src=\"".base_url()."resources/images/delete_icon_active.png\" alt=\"delete\"/>
                                                        </a>
                                                </td>
                                        </tr>";
                                $counter++;
                     	}//foreach
			 if(!empty($response)){
                                $response = "
                                <table>
                                        <tr>
                                              <th>Nombre</th>
                                              <th>No. Emp.</th>
                                              <th>Editar</th>
                                              <th>Eliminar</th>
                                        </tr>
                                        $response
                                </table>";
				$query = $this->db->query('SELECT count(*) as total FROM user WHERE status = 1 AND role = 0');
	                        $config['base_url'] = base_url().'index.php/sistema/list_users';
	                        $config['total_rows'] = $query->row()->total;
	                        $config['per_page'] = $limit;
	                        $this->pagination->initialize($config);
                        }else
                                $response = "Lo sentimos no hay registros";
          	}//if $data->num_rows
		return $response;
	}//get_user()	
	*/
}
