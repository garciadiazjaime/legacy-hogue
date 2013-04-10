<?php
class controlAhorro extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('controlperiodo');
	}
	
	public function getAhorradores()
	{
		$current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
		$response = $class = $status = $filter = $date = $pagination = $sql = '';
		$i = $no = 1;
		$emp_per_page = 6;
		$keepOrderby = 0;
		$orderby = "u.id";
		$orderbyArr = array('','u.no_emp desc','u.no_emp asc','u.name desc','u.name asc','a.year, a.week desc','a.year, a.week','a.monto desc','a.monto asc','ahorrado desc','ahorrado asc','a.status desc','a.status asc');
		$money_grade = array('',0,1000,5000,10000,1000000);
		$params = isset($_POST['params']) ? $_POST['params'] : 1;
		$filters = $_POST; //$this->miscellaneous->sanitize($params);
		$page = 1;
		if(count($filters))
		{
			if(!empty($filters['page'])) $page = $filters['page'];
			if(!empty($filters['employee_number'])) $filter .= " AND u.no_emp like '%".$filters['employee_number']."%'";
			if(!empty($filters['employee_name'])) $filter .= " AND u.name like '%".$filters['employee_name']."%'";
			if($filters['week_from'] && $filters['week_until'] && $filters['week_from'] != $filters['week_until'] ) $filter .= " AND a.week between ".$filters['week_from']." AND ".$filters['week_until'];
			if($filters['saved_from'] && $filters['saved_until']  ) $filter .= " AND monto between ".$money_grade[$filters['saved_from']]." AND ".$money_grade[$filters['saved_until']+1];
			if($filters['saving_status']) $filter .= " AND a.status = ".$filters['saving_status'];
			if(!empty($filters['header']) && $filters['header'] > 0)
			{
				$orderby = $orderbyArr[$filters['header']]; $keepOrderby = $filters['header'];
			}
		}
		$sql ="
				SELECT u.id
				FROM user u
				INNER JOIN ahorro a
				ON u.id = a.user_id
				AND u.role=0 AND u.status=1 AND (a.status != 0 OR a.status != 3)
				AND a.periodo_id = ".$current_periodo_id."
				".$filter."
				";	
		$query = $this->db->query($sql);
		$no_empleados = $query->num_rows;
		$no_pages = ceil($no_empleados / $emp_per_page);
		$from = $emp_per_page * ($page - 1);
		$no = ($emp_per_page * ($page - 1)) +1;
		$sql = "
		SELECT u.id as user_id, a.id, u.no_emp, u.name, a.year, a.week, a.monto,
		ifnull((SELECT SUM(ar.monto) as monto FROM ahorro_registro ar WHERE ar.ahorro_id = a.id AND ar.status <> 0),0 ) as 'ahorrado', a.status
		FROM user u
		INNER JOIN ahorro a
		ON u.id = a.user_id
		AND u.role=0 AND u.status=1 AND (a.status != 0 OR a.status != 3)
		AND a.periodo_id = ".$current_periodo_id."
		".$filter."
		ORDER BY ".$orderby."
		LIMIT ".$from.",".$emp_per_page;
		$query = $this->db->query($sql);
		foreach ($query->result() as $row)
		{
			$date = date("d/M/Y", strtotime("1.1.".$row->year." + ".$row->week." weeks")). "<b>(#".$row->week.")</b>";
			$date = $this->miscellaneous->getSpanishDate($date);
			$status =  ($row->status == 1) ? 'Activo' : 'Excento';
			$class = ($i++ % 2 == 0) ? 'pair' : 'odd';
			if(!empty($filters['employee_number'])) $row->no_emp = str_replace($filters['employee_number'], "<b>".$filters['employee_number']."</b>", $row->no_emp);
			if(!empty($filters['employee_name'])) $row->name = str_replace($filters['employee_name'], "<b>".$filters['employee_name']."</b>", $row->name);
			$response .="
			<tr class=\"$class\">
			<td>".$no++."</td>
			<td>".$row->no_emp."</td>
			<td>".$row->name."</td>
			<td>".$date."</td>
			<td class=\"number\">$ ".number_format($row->monto, 2,'.'," ")."</td>
			<td class=\"number\">$ ".$row->ahorrado."</td>
			<td>".$status."</td>
			<td><a href=\"".base_url()."sistema/ahorros/ver/".$row->user_id."\" title=\"Ver m&aacute;s\" class=\"read_more\">Ver +</a></td>
			</tr>
			";
		}
		if(!empty($response)){
			if($no_empleados > $emp_per_page)
			{
				for($i=1; $i <= $no_pages; $i++)
				{
					$pagination .= ($i == $page) ?
					"<a href=\"?page=$i\" onclick=\"getAhorradores($i, ".$keepOrderby."); return false\"><span>[".$i."]</span></a>-":
					"<a href=\"?page=$i\" onclick=\"getAhorradores($i, ".$keepOrderby."); return false\" >".$i."</a>-";
				}
				if(!empty($pagination)){
					$pagination = substr($pagination, 0, strrpos($pagination, '-'));
					$pagination = "<div class=\"pagination\">$pagination</div>";
				}
			}

			$response = "
			<p class=\"important_number\">
			<em>N&uacute;mero de empleados:</em> <span>$no_empleados</span>
			</p>
			<table>
			<tr>
			<th>#</th>
			<th class=\"column_id\"># Emp
			<a href=\"Order descendentemente\" title=\"Ordenar descendentemente\" onclick=\"getAhorradores(0,1); return false;\">
			<img src=\"../resources/images/arrow_down.png\" alt=\"&darr;\" class=\"sort_arrow_desc\" />
			</a>
			<a href=\"Order ascendentemente\" title=\"Ordenar ascendentemente\" onclick=\"getAhorradores(0,2); return false;\">
			<img src=\"../resources/images/arrow_up.png\" alt=\"&uarr;\" class=\"sort_arrow_asc\" /> </a>
			</th>
			<th class=\"column_name\">Nombre
			<span class=\"sort_arrows\">
			<a href=\"#\" title=\"Ordenar descendentemente\" onclick=\"getAhorradores(0,3); return false;\">
			<img src=\"../resources/images/arrow_down.png\" alt=\"&darr;\" class=\"sort_arrow_desc\" /> </a>
			<a href=\"#\" title=\"Ordenar ascendentemente\" onclick=\"getAhorradores(0,4); return false;\">
			<img src=\"../resources/images/arrow_up.png\" alt=\"&uarr;\" class=\"sort_arrow_asc\" /> 
			</a>
			</span>
			</th>
			<th class=\"column_date\">Inicio ahorro <a href=\"#\" title=\"Ordenar descendentemente\" onclick=\"getAhorradores(0,5);\"><img
			src=\"../resources/images/arrow_down.png\" alt=\"&darr;\"
			class=\"sort_arrow_desc\" /> </a> <a href=\"#\" title=\"Ordenar ascendentemente\" onclick=\"getAhorradores(0,6);\"><img
			src=\"../resources/images/arrow_up.png\" alt=\"&uarr;\"
			class=\"sort_arrow_asc\" /> </a>
			</th>
			<th class=\"column_amount_to_save\"><span>Monto a ahorrar</span>
			<span class=\"sort_arrows\"> <a href=\"#\"
			title=\"Ordenar descendentemente\" onclick=\"getAhorradores(0,7);\"><img src=\"../resources/images/arrow_down.png\"
			alt=\"&darr;\" class=\"sort_arrow_desc\" /> </a> <a href=\"#\"
			title=\"Ordenar ascendentemente\" onclick=\"getAhorradores(0,8);\"><img src=\"../resources/images/arrow_up.png\"
			alt=\"&uarr;\" class=\"sort_arrow_asc\" /> </a>
			</span>
			</th>
			<th class=\"column_amount_saved\"><span>Monto ahorrado</span>
			<span class=\"sort_arrows\"> <a href=\"#\"
			title=\"Ordenar descendentemente\" onclick=\"getAhorradores(0,9);\"><img src=\"../resources/images/arrow_down.png\"
			alt=\"&darr;\" class=\"sort_arrow_desc\" /> </a> <a href=\"#\"
			title=\"Ordenar ascendentemente\" onclick=\"getAhorradores(0,10);\"><img src=\"../resources/images/arrow_up.png\"
			alt=\"&uarr;\" class=\"sort_arrow_asc\" /> </a>
			</span>
			</th>
			<th class=\"column_status\">Estatus <a href=\"#\" title=\"Ordenar descendentemente\" onclick=\"getAhorradores(0,11);\"><img
			src=\"../resources/images/arrow_down.png\" alt=\"&darr;\"
			class=\"sort_arrow_desc\" /> </a> <a href=\"#\" title=\"Ordenar acendentemente\" onclick=\"getAhorradores(0,12);\"><img
			src=\"../resources/images/arrow_up.png\" alt=\"&uarr;\"
			class=\"sort_arrow_asc\" /> </a>
			</th>
			<th class=\"column_view_more\">&nbsp;
			</th>
			</tr>
			$response
			</table>
			$pagination
			";
		}else
		{
			$response = "Sin Resultados";	
		}
		return $response;
	}

	private function getAhorroByID($id){
		$sql = 'SELECT * FROM ahorro WHERE id = '.$id;
		$query = $this->db->query($sql);
		$result = $query->result();
		if(sizeof($result)) return $result[0];
		else return false;
	}

	public function getRegistroByID($id){
		$sql = 'SELECT * FROM ahorro_registro WHERE id = '.$id;
		$query = $this->db->query($sql);
		$result = $query->result();
		if(sizeof($result)) return $result[0];
		else return false;
	}

	public function getRegistrosAhorro($id,$offset = 0)
	{
		$msg = '';
		$ahorro = '';
        $this->load->library('pagination');
        $limit = 10;
        $response = '';
        $query = $offset != 0 ?
                'SELECT id, monto, week, year,status 
                FROM ahorro_registro WHERE ahorro_id='.$id.
        ' AND status <> 0 
        LIMIT '.$limit.' OFFSET '.$offset
                    :
                    'SELECT id, monto, week, year,status 
                FROM ahorro_registro WHERE ahorro_id='.$id.
        ' AND status <> 0 
        LIMIT '.$limit;
            $data = $this->db->query($query);
            if($data->num_rows() > 0){
                     $counter = 1;
                     foreach($data->result() as $row){
                            $class = $counter % 2 == 0 ? 'odd' : 'pair';
                            $response .= "
                                    <tr class = '". $class. "'> 
                                            <td>".$row->monto."</td>
                                            <td>".$row->week."</td>
                                            <td>".$row->year."</td>
                                            <td>".$row->status."</td>
                                            <td>
                                                    <a href='".base_url().
                        "sistema/ahorros/ver_registros/".
                        $row->id."' title=\"editar registro".
                        $row->id."\">
                                                            <img src=\"".base_url().
            "resources/images/edit_icon_active.png\" alt=\"edit\" />
                                                    </a>
                                            </td>
                                            <td>
                                                    <a href='".base_url().
                        "sistema/ahorros/delete/".
                        $row->id."' title=\"eliminar registro ".
                        $row->id."\">
                                                    <img src=\"".base_url().
            "resources/images/delete_icon_active.png\" alt=\"delete\"/>
                                                    </a>
                                            </td>
                                    </tr>";
                            $counter++;
                    }//foreach
                    if(!empty($response)){
                            $response = "
                            <table style = 'width: 925px;'>
                                    <tr>
                                          <th>Monto</th>
                                          <th>Semana</th>
                                          <th>Año</th>
                                          <th>Estatus</th>
                                          <th>Editar</th>
                                          <th>Eliminar</th>
                                    </tr>
                                    $response
                            </table>";
                            $ahorro = $this->getAhorroByID($id);
                            $query = $this->db->query('SELECT count(*) as total 
                FROM ahorro_registro WHERE ahorro_id = '.$id.' AND status <> 0');
                            $config['base_url'] = base_url().'sistema/ahorros/historial/'.$ahorro->user_id;
                            $config['total_rows'] = $query->row()->total;
                            $config['per_page'] = $limit;
                            $this->pagination->initialize($config);
                    }else
                            $response = "Lo sentimos no hay registros";
            }//if $data->num_rows
            return $response;
        }//get_registros_ahorro

    public function delete_registro($id){
        $msg = '';
        $data = array(
              'status' => 0
               );

        $this->db->where('id', $id);
        $msg .= ($this->db->update('ahorro_registro', $data)) ?
                    " Ahorro eliminado":
                    " Error, no se puedo eliminar el ahorro.";
        return $msg;
    }

    public function update_registro($id)
	{
		$response = $sql = '';
		$updateFields = array();
		$query = $this->db->query("SELECT * FROM ahorro_registro where id = ".$id);
		
		if ($query->num_rows() > 0 && sizeof($_POST))
		{
			$row = $query->row();
			if($row->monto != $_POST['monto'])
			{
				$updateFields['monto'] = $_POST['monto'];
			}
			if($row->week != $_POST['week'])
			{
				$updateFields['week'] = $_POST['week'];
			}
			if(sizeof($updateFields))
			{
				foreach($updateFields as $key => $row)
				{
					$sql .= $key." = ".$row;
				}
				if(!empty($sql))
				{
					$response .= ($this->db->update('ahorro_registro', $updateFields, "id = ".$id)) ?
					" Ahorro actualizado":
					" Error, no se puedo actualizar el ahorro.";
				}
			}else
			{
				$response = "Nig&uacute;n campo fue modificado por tanto no se realiz&oacute; ning&uacute;n cambio";		
			}
		}else 
		{
			$response = "Error, intentar m&aacute;s tarde";
		}
		return $response;
	}//update_registro
}
