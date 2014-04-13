<?php
class Prestamo extends CI_Model {
    
    public $Html = "";
    public $TRegistros = "";
    public $periodo_id = 1;
    public $InfoPaginado = array();
    public $estatus = array( "0" => "Inactivo",
                             "1" => "Activo",
                             "2" => "Excento",
                             "3" => "Cerrado" );

    function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('controluser');
        $this->load->model('controlperiodo');
    }

    public function _get_prestamos(){
        $current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        $_info = $_POST;
        $_Inicio = 0;
        $_Pactua = 1;
        $_OrdenBy = "P.id DESC";
        $_Where = array();
        $_Nregistros = 10;
        $_InfoWhere = "";
        $_CpoInner = array();
        $_InfoInner = "";
        $_Order = array( "1-desc" => "U.no_emp DESC",
                         "1-asc" => "U.no_emp ASC",
                         "2-desc" => "U.name DESC",
                         "2-asc" => "U.name ASC",
                         "3-desc" => "P.monto_total DESC",
                         "3-asc" => "P.monto_total ASC",
                         "4-desc" => "P.interes DESC",
                         "4-asc" => "P.interes ASC",
                         "5-desc" => "P.plazo DESC",
                         "5-asc" => "P.plazo ASC",
                         "6-desc" => "P.status DESC",
                         "6-asc" => "P.status ASC" );

        if(isset($_info['campo']) && $_info['campo'] != "" ){
            $_OrdenBy = $_Order[ $_info['campo'] ];
        }

        if( isset($_info['pagina']) && $_info['pagina'] != 0 ){
            $_Inicio = ( $_info['pagina']-1 ) * $_Nregistros;
            $_Pactua = $_info['pagina'];
        }

        if(isset($_info['week_from']) && isset($_info['week_until']) && $_info['week_from'] != "0" AND $_info['week_until'] != "0" ){
            //$_Where[] = "P.week >= {$_info['week_from']} AND P.week <= {$_info['week_until']}";
        }

        if(isset($_info['loaned_from']) && isset($_info['loaned_until']) && $_info['loaned_from'] != "" AND $_info['loaned_until'] != "" ){
            $_Where[] = "P.monto_total >= {$_info['loaned_from']} AND P.monto_total <= {$_info['loaned_until']}";
        }
        $_Where[] = "P.periodo_id = ".$current_periodo_id;
        if(isset($_info['payments_from']) && isset($_info['payments_from']) && $_info['payments_from'] != "" AND $_info['payments_until'] != "" ){
            $_Where[] = "P.plazo >= {$_info['payments_from']} AND P.plazo <= {$_info['payments_until']}";
        }

        if(isset($_info['loan_status']) && ($_info['loan_status'] != "" && $_info['loan_status'] != "0") ){
            $_Where[] = "P.status = {$_info['loan_status']}";
        }

        if( count( $_Where ) )
            $_InfoWhere = " WHERE ".  implode( " AND ", $_Where );

        if( isset($_info['employee_number']) && $_info['employee_number'] != "" ){
            $_CpoInner[] = " U.no_emp like '%".$_info['employee_number']."%'";
        }

        if(isset($_info['employee_name']) && $_info['employee_name'] != "" ){
            $_CpoInner[] = " U.name LIKE '%{$_info['employee_name']}%' ";
        }

        if( count( $_CpoInner ) > 0 )
            $_InfoInner = " AND ". implode( " AND ", $_CpoInner );

        $_InfoInner = " INNER JOIN user AS U ON P.user_id = U.id {$_InfoInner}";

        $_Query = "SELECT P.id FROM  prestamo AS P {$_InfoInner} {$_InfoWhere} ";
        
        $_InfoQuery = $this->db->query( $_Query );
        $this->TRegistros = $_InfoQuery->num_rows();

        $_Panterior = $_Pactua - 1;
        $_Psiguiente = $_Pactua + 1;
        $_Pultima = $this->TRegistros / $_Nregistros;
        $_Resultado = $this->TRegistros % $_Nregistros;
        if( $_Resultado > 0 ) $_Pultima = floor( $_Pultima ) + 1;

        if( $this->TRegistros == 0 )
            $_Pactua = 0;

        $this->InfoPaginado = array( "pactual" => $_Pactua,
                                     "panterior" => $_Panterior,
                                     "psiguiente" => $_Psiguiente,
                                     "pultima" => $_Pultima,
                                     "pinicio" => $_Pactua-3,
                                     "pfin" => $_Pactua+3 );

        $_Query = "SELECT P.id, 
                          P.monto_total, 
                          P.week, 
                          P.year, 
                          P.status, 
                          P.interes, 
                          P.user_id, 
                          P.periodo_id,
                          P.plazo,
                          U.no_emp,
                          U.name
                   FROM prestamo AS P {$_InfoInner} {$_InfoWhere} ORDER BY {$_OrdenBy} 
                   LIMIT ".$_Inicio.",".$_Nregistros;

        $_InfoQuery = $this->db->query( $_Query );
    	if(!empty($_POST)) //isset($_info['pagina']) && $_info['pagina'] > 1)
            echo $this->_set_lista_view( $_InfoQuery );
    	else
            return $this->_set_lista_view( $_InfoQuery );
    }

    public function _set_format_cantidad( $_Prestamo ){

        return "$ ".number_format( $_Prestamo, 2, ".",",");

    }
    
    public function _set_format_db( $_Prestamo ){

        return number_format( $_Prestamo, 2, ".","");

    }
    public function _set_lista_view( $_InfoQuery ){

        $this->Html = "";
        $this->Html .= '<p class="important_number">
                            <em>N&uacute;mero de pr&eacute;stamos:</em> <span id="nprestamos">'. $this->TRegistros .'</span>
                        </p>';
        $this->Html .= '<table>';

            $this->Html .= $this->_add_header_list();            

            $i = 0;
            if( $this->TRegistros != 0 )
                foreach ( $_InfoQuery->result() as $row ){

                    $i++;
                    $_class = ( $i % 2 ) ? "odd" : "pair";

                    $this->Html .= '<tr class="'. $_class .'">
                                        <td>
                                            '. $row->no_emp .'
                                        </td>
                                        <td>
                                            '. $row->name .'
                                        </td>
                                        <td>
                                            '. $this->_set_format_cantidad( $row->monto_total ) .'
                                        </td>
                                        <td>
                                            '. $this->_set_format_cantidad( $row->interes ) .'
                                        </td>
                                        <td>
                                            '. $row->plazo .' Semanas
                                        </td>
                                        <td>
                                            '. $this->estatus[ $row->status ] .'
                                        </td>
                                        <td>
                                            <a href=\''.base_url().'sistema/prestamos/ver/'.$row->id.'\' title=\'Ver m&aacute;s\' class=\'read_more\'>Ver +</a>
                                        </td>
                                    </tr>';

                }
            else
                $this->Html .= '<tr class="odd">
                                    <td colspan="7">
                                        No cuenta con registros para mostrar
                                    </td>
                                </tr>';

        $this->Html .= '</table>';
        $this->Html .= $this->_add_paginado();

        return $this->Html;

    }

    public function _add_paginado(){

        $_inicia = 1;
        $_termina = 0;

        if( $this->InfoPaginado['pinicio'] > 0 )
            $_inicia = $this->InfoPaginado['pinicio'];

        if( $this->InfoPaginado['pfin'] > $this->InfoPaginado['pultima'] )
            $_termina = $this->InfoPaginado['pultima'];
        else
            $_termina = $this->InfoPaginado['pfin'];

        $_Paginado = '<div class="pagination">';

        for( $i = $_inicia; $i <= $_termina; $i++ ){

            $_Paginado .= '<a href="#" onclick="FilePrestamos._set_muestra( '. $i .', \'\' )">';
                if( $i == $this->InfoPaginado['pactual'] )
                    $_Paginado .= '<span>['. $i .']</span>';
                else
                    $_Paginado .= $i;
            $_Paginado .= '</a>';

        }

        $_Paginado .= '</div>';

        return $_Paginado;

    }

    public function _add_header_list(){

        $_Header = '<tr>
                        <th class="column_id">
                            # Empleado 
                            <a href="#" title="Ordenar descendentemente" onclick="FilePrestamos._set_muestra( \'\', \'1-desc\' )" >
                                <img src="../resources/images/arrow_down.png" alt="&darr;" class="sort_arrow_desc" /> 
                            </a> 
                            <a href="#" title="Ordenar ascendentemente"  onclick="FilePrestamos._set_muestra( \'\', \'1-asc\' )">
                                <img src="../resources/images/arrow_up.png" alt="&uarr;" class="sort_arrow_asc" /> 
                            </a>
                        </th>
                        <th class="column_name">
                            <span>Nombre</span> 
                            <span class="sort_arrows"> 
                                <a href="#" title="Ordenar descendentemente" onclick="FilePrestamos._set_muestra( \'\', \'2-desc\' )" >
                                    <img src="../resources/images/arrow_down.png" alt="&darr;" class="sort_arrow_desc" /> 
                                </a> 
                                <a href="#" title="Ordenar ascendentemente"  onclick="FilePrestamos._set_muestra( \'\', \'2-asc\' )">
                                    <img src="../resources/images/arrow_up.png" alt="&uarr;" class="sort_arrow_asc" /> 
                                </a>
                            </span>
                        </th>
                        <th class="column_name">
                            <span>Monto prestado</span> 
                            <span class="sort_arrows"> 
                                <a href="#" title="Ordenar descendentemente" onclick="FilePrestamos._set_muestra( \'\', \'3-desc\' )" >
                                    <img src="../resources/images/arrow_down.png" alt="&darr;" class="sort_arrow_desc" /> 
                                </a> 
                                <a href="#" title="Ordenar ascendentemente"  onclick="FilePrestamos._set_muestra( \'\', \'3-asc\' )">
                                    <img src="../resources/images/arrow_up.png" alt="&uarr;" class="sort_arrow_asc" /> 
                                </a>
                            </span>
                        </th>
                        <th class="column_name">
                            <span>Interese</span> 
                            <span class="sort_arrows"> 
                                <a href="#" title="Ordenar descendentemente" onclick="FilePrestamos._set_muestra( \'\', \'4-desc\' )" >
                                    <img src="../resources/images/arrow_down.png" alt="&darr;" class="sort_arrow_desc" /> 
                                </a> 
                                <a href="#" title="Ordenar ascendentemente"  onclick="FilePrestamos._set_muestra( \'\', \'4-asc\' )">
                                    <img src="../resources/images/arrow_up.png" alt="&uarr;" class="sort_arrow_asc" /> 
                                </a>
                            </span>
                        </th>
                        <th class="column_plazo">
                            Plazo 
                            <a href="#" title="Ordenar descendentemente" onclick="FilePrestamos._set_muestra( \'\', \'5-desc\' )" >
                                <img src="../resources/images/arrow_down.png" alt="&darr;" class="sort_arrow_desc" /> 
                            </a> 
                            <a href="#" title="Ordenar ascendentemente"  onclick="FilePrestamos._set_muestra( \'\', \'5-asc\' )">
                                <img src="../resources/images/arrow_up.png" alt="&uarr;" class="sort_arrow_asc" /> 
                            </a>
                        </th>
                        <th class="column_estatus">
                            Estatus 
                            <a href="#" title="Ordenar descendentemente" onclick="FilePrestamos._set_muestra( \'\', \'6-desc\' )" >
                                <img src="../resources/images/arrow_down.png" alt="&darr;" class="sort_arrow_desc" /> 
                            </a> 
                            <a href="#" title="Ordenar ascendentemente"  onclick="FilePrestamos._set_muestra( \'\', \'6-asc\' )">
                                <img src="../resources/images/arrow_up.png" alt="&uarr;" class="sort_arrow_asc" /> 
                            </a>
                        </th>
                        <th class="column_view_more">&nbsp;</th>
                    </tr>';

        return $_Header;

    }
    
    public function _get_infoAhorrador( $_Id ){
        
        #Info es ahorrador   
        $current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        $_Query = "SELECT A.id,
                          A.monto
                   FROM ahorro AS A
                   WHERE A.user_id = '{$_Id}' 
                       AND 
                       (A.status = 1 OR A.status = 2) 
                       AND A.periodo_id = ".$current_periodo_id;

        $_InfoQuery = $this->db->query( $_Query );
        
        return $_InfoQuery->num_rows();
        
    }
    
    public function _get_infoPrestamos( $_Id ){
        
        #Info num prestamos
        $current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        $_Query = "SELECT P.id,
                          P.monto_total
                   FROM prestamo AS P
                   WHERE P.user_id = '{$_Id}' 
                       AND P.status = 1
                       AND P.periodo_id = ".$current_periodo_id;
                   
        $_InfoQuery = $this->db->query( $_Query );
        
        return $_InfoQuery->num_rows();
        
    }
    
    public function _get_infoEmpleado(){
        
        $_info = $_POST;
        #Info nombre del empleado
        $_Query = "SELECT U.no_emp,
                          U.name,
                          U.id
                   FROM user AS U
                   WHERE U.no_emp = '{$_info['no_emp']}'";
        
        $_InfoQuery = $this->db->query( $_Query );
        $_Empleado = $_InfoQuery->result();
                
        if( sizeof( $_Empleado ) ) {      
            
            $_Tasa = 0;
            $_Ahorrador = $this->_get_infoAhorrador($_Empleado[0]->id);
            $_Nprestamos = $this->_get_infoPrestamos($_Empleado[0]->id);
            
            $_Tasa = ( $_Ahorrador != 0 ) ? 10 : 15;
            
            return "{$_Empleado[0]->name}|{$_Tasa}|{$_Nprestamos}|{$_Empleado[0]->id}";
            
        } else {            
            return '';            
        }
    }
      
    public function _save_prestamos(){
    
        $_info = $_POST;
        $current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        $_iva = $_info['loan'] * ( $_info['porcentaje'] / 100 ) ;
        $_total = $_info['loan'] + $_iva;
        $_parcialidades = $_total / $_info['weeks_payment'];
        $_info['usrid'] = $this->controluser->userExists(
		                  $_info['employee_number'], $_info['employee_name']);
        if( $_info['usrid'] == "" || $_info['usrid'] == 0){
            $_info['usrid'] = $this->user->create( $_info['employee_number'], 
                                                   $_info['employee_name'] );
        }
        
        $_prestamo = array( "monto_prestado" => "{$this->_set_format_db($_info['loan'])}",
                            "monto_total" => "{$this->_set_format_db($_total)}",
                            "monto_pago" => "{$this->_set_format_db($_parcialidades)}",
                            "plazo" => "{$_info['weeks_payment']}",
                            "interes" => "{$this->_set_format_db($_iva)}",
                            "week" => "{$_info['saving_starts']}",
                            "year" => date("Y"),
                            "status" => "1",
                            "user_id" => "{$_info['usrid']}",
                            "periodo_id" => "{$current_periodo_id}" );
                               
        if( $this->db->insert( 'prestamo', $_prestamo ) )
            return 'Registro insertado de manera exitosa.';
        else 
            return 'Hubo un error al insertar el registro.';
    }
    
    public function _update_prestamos($id){
    
        $_info = $_POST;
        $_close_week = 1;
        $current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        if(isset($_info['new_weeks_payment_check']) && $_info['new_weeks_payment_check'] == 'new'){
            $_info['weeks_payment'] = $_info['new_weeks_payment'];
        }
        if(isset($_info['new_saving_starts_check']) && $_info['new_saving_starts_check'] == 'new'){
            $_info['saving_starts'] = $_info['new_saving_starts'];
        }

        $_iva = $_info['loan'] * ( $_info['porcentaje'] / 100 ) ;
        $_total = $_info['loan'] + $_iva;
        $_deuda = $_total - $_info['m_pagado'];
        if(isset($_info['new_pago_semanal_check']) && $_info['new_pago_semanal_check'] == 'new'){
            $_parcialidades = $_info['new_pago_semanal'];
        }else {
            $_parcialidades = $_total / $_info['weeks_payment'];
        }
        if(isset($_info['loan_weeks_pending']) && $_info['loan_weeks_pending'])// != $query2->row()->val)
            {
                $query = $this->db->query("SELECT id FROM excento WHERE tipo=0 AND status=1 AND prestamo_id = ".$id);
                if ($query->num_rows() > 0)
                {
                    $excento_id = $query->row()->id;
                    $response = ($this->db->update('excento',array('val' => $_info['loan_weeks_pending']), "prestamo_id = ".$id." and status=1 and tipo=1")) ?
                        " Status actualizado.":
                        " Error, no se puedo actualizar el status.";
                }else {
                    $week_start = $this->controlperiodo->get_last_registered_week($current_periodo_id);
                    $response = $this->db->insert('excento',array('val' => $_info['loan_weeks_pending'], 'prestamo_id' => $id, 'status'=>1, 'tipo'=>1, 'week_start'=>$week_start)) ?
                    " Status registrado.":
                    " Error, no se puedo registrar el status.";
                }
            }
        
        $_info['usrid'] = $this->controluser->userExists(
                          $_info['employee_number'], $_info['employee_name']);
        if( $_info['usrid'] == "" ){
            $_info['usrid'] = $this->user->create( $_info['employee_number'], 
                                                   $_info['employee_name'] );
        }
        if($_info['loan_status'] != 3){
            $_prestamo = array( "monto_prestado" => "{$this->_set_format_db($_info['loan'])}",
                            "monto_total" => "{$this->_set_format_db($_total)}",
                            "monto_pago" => "{$this->_set_format_db($_parcialidades)}",
                            "plazo" => "{$_info['weeks_payment']}",
                            "interes" => "{$this->_set_format_db($_iva)}",
                            "week" => "{$_info['saving_starts']}",
                            "year" => date("Y"),
                            "status" => "{$_info['loan_status']}",
                            "user_id" => "{$_info['usrid']}",
                            "periodo_id" => "{$current_periodo_id}" );
        }
        else{
            $_close_week = $this->controlperiodo->get_last_registered_week($current_periodo_id);
            $_prestamo = array( "monto_prestado" => "{$this->_set_format_db($_info['loan'])}",
                            "monto_total" => "{$this->_set_format_db($_total)}",
                            "monto_pago" => "{$this->_set_format_db($_parcialidades)}",
                            "monto_abonado" => "{$this->_set_format_db($_total)}",
                            "plazo" => "{$_info['weeks_payment']}",
                            "interes" => "{$this->_set_format_db($_iva)}",
                            "week" => "{$_info['saving_starts']}",
                            "week_end" => $_close_week,
                            "year" => date("Y"),
                            "status" => "{$_info['loan_status']}",
                            "user_id" => "{$_info['usrid']}",
                            "periodo_id" => "{$current_periodo_id}" );
            $_prestamo_registro = array( "monto" => "{$this->_set_format_db($_deuda)}",
                            "week" => date('W'),
                            "year" => date("Y"),
                            "status" => "{$_info['loan_status']}",
                            "prestamo_id" => "{$id}");
            $this->db->insert('prestamo_registro', $_prestamo_registro);
        }
        $this->db->where('id', $id);                       
        if( $this->db->update( 'prestamo', $_prestamo ) ){
            return 'Registro actualizado de manera exitosa.';
        }
        else{
            return 'Hubo un error al insertar el registro.';
        }
    }

    function getUserId($id)
    {
		$query = $this->db->query("select user_id from prestamo where id = ".$id);
		if ($query->num_rows() > 0)
		{
			return $query->row()->user_id;
		}
		return false;
    }

    public function getRegistroByID($id){
        $sql = 'SELECT * FROM prestamo_registro WHERE id = '.$id;
        $query = $this->db->query($sql);
        $result = $query->result();
        if(sizeof($result)) return $result[0];
        else return false;
    }

    public function delete_registro($id){
        $msg = $sql_pr = '';
        $data = array(
              'status' => 0
               );
        $data_prestamo = array();

        $old_registro = $this->getRegistroByID($id);

        $this->db->where('id', $id);
        if($this->db->update('prestamo_registro', $data)){
            $msg = " Prestamo eliminado";
            $sql_pr = "
                SELECT SUM(monto) as total_registro 
                FROM prestamo_registro
                WHERE prestamo_id = ".$id."
                AND status <> 0";
            $query = $this->db->query($sql_pr);
            $result = $query->result();
            if(sizeof($result)){
                $pr = $result[0];
                $data_prestamo = array(
                   'monto_abonado' => $pr->total_registro
                );

                $this->db->where('id', $row->id);
                $this->db->update('prestamo', $data_prestamo);
            }
        }
        else{
            $msg = "Error, no se pudo eliminar el préstamo";
        }
        return $msg;
    }

    public function update_registro($id)
    {
        $response = $sql = '';
        $updateFields = array();
        $query = $this->db->query("SELECT * FROM prestamo_registro where id = ".$id);
        
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
                    if($this->db->update('prestamo_registro', $updateFields, "id = ".$id)){
                        $response = " Prestamo actualizado";
                        $sql_pr = "
                            SELECT SUM(monto) as total_registro 
                            FROM prestamo_registro
                            WHERE prestamo_id = ".$id."
                            AND status <> 0";
                        $query = $this->db->query($sql_pr);
                        $result = $query->result();
                        if(sizeof($result)){
                            $pr = $result[0];
                            $data = array(
                               'monto_abonado' => $pr->total_registro
                            );

                            $this->db->where('id', $row->id);
                            $this->db->update('prestamo', $data);
                        }
                    }
                    else{
                        $response = " Error, no se puedo actualizar el prestamo.";
                    }
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

    public function _get_registros_prestamo($id,$offset = 0){
        $msg = '';
        $this->load->library('pagination');
        $limit = 10;
        $response = '';
        $query = $offset != 0 ?
                'SELECT id, monto, week, year,status 
                FROM prestamo_registro WHERE prestamo_id='.$id.
        ' AND status <> 0 
        LIMIT '.$limit.' OFFSET '.$offset
                    :
                    'SELECT id, monto, week, year,status 
                FROM prestamo_registro WHERE prestamo_id='.$id.
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
                        "sistema/prestamos/ver_registros/".
                        $row->id."' title=\"editar registro".
                        $row->id."\">
                                                            <img src=\"".base_url().
            "resources/images/edit_icon_active.png\" alt=\"edit\" />
                                                    </a>
                                            </td>
                                            <td>
                                                    <a href='".base_url().
                        "sistema/prestamos/delete/".
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
                            $query = $this->db->query('SELECT count(*) as total 
                FROM prestamo_registro WHERE prestamo_id = '.$id.' AND status <> 0');
                            $config['base_url'] = base_url().'sistema/users';
                            $config['total_rows'] = $query->row()->total;
                            $config['per_page'] = $limit;
                            $this->pagination->initialize($config);
                    }else
                            $response = "Lo sentimos no hay registros";
            }//if $data->num_rows
            return $response;
        }//get_registros_prestamo

    function isWeekRegistered($week)
    {
        $current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        $query = $this->db->query("SELECT ifnull(status,0) as status FROM nomina WHERE week = ".$week." AND periodo_id = ".$current_periodo_id);
        if ($query->num_rows() > 0)
            return true;
        return false;
    }

    public function get_reporte_prestamos()
    {        
        $current_periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        $sql = "SELECT p.id, p.monto_total, p.monto_pago, p.plazo, p.status, u.name, u.no_emp, p.interes FROM prestamo p
                INNER JOIN user u 
                    ON p.user_id = u.id
                WHERE periodo_id=".$current_periodo_id;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)        
            return $query->result();
        return false;   
    }

    public function get_reporte_desglose($prestamo_id = '')
    {
        $sql = 'SELECT * FROM prestamo_registro WHERE prestamo_id='.$prestamo_id;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->result();
        return false;
    }

    public function get_total_prestado($periodo_id = '')
    {
        if(empty($periodo_id)) $periodo_id = $this->controlperiodo->getCurrentPeriodoID();   
        $sql = "SELECT 
                SUM(monto_total) as monto
            FROM  `prestamo` 
            WHERE  `periodo_id`=".$periodo_id." and status!= 4";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)        
            return $query->row()->monto;
        return false;   
    }

    public function get_total_cerrados($periodo_id = '')
    {
        if(empty($periodo_id)) $periodo_id = $this->controlperiodo->getCurrentPeriodoID();   
        $sql = "SELECT 
                SUM(monto_total) as monto
            FROM  `prestamo` 
            WHERE  `periodo_id`=".$periodo_id."
            AND status=3 ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)        
            return $query->row()->monto;
        return false;   
    }

    public function get_total_activos($periodo_id = '')
    {
        if(empty($periodo_id)) $periodo_id = $this->controlperiodo->getCurrentPeriodoID();   
        $sql = "SELECT 
                SUM(monto_total) as monto
            FROM  `prestamo` 
            WHERE  `periodo_id`=".$periodo_id."
            AND status in (1,2)";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)        
            return $query->row()->monto;
        return false;   
    }

    public function get_total_recuperado($periodo_id = '')
    {
        if(empty($periodo_id)) $periodo_id = $this->controlperiodo->getCurrentPeriodoID();   
        $sql = "SELECT 
                SUM(monto_abonado) as monto
            FROM  `prestamo` 
            WHERE  `periodo_id`=".$periodo_id;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)        
            return $query->row()->monto;
        return false;   
    }

    public function get_prestamos_excel()
    {
        $periodo_id = $this->controlperiodo->getCurrentPeriodoID();
        $response = "";
        $data = array();
        $total_prestado = 0;
        $prestado_por_semana = array();
        $estatus_label = array("Inactivo", "Activo", "Excento", "Cerrado" );
        for($i=0; $i<53; $i++)
            $prestado_por_semana[$i] = 0;
        $sql = "SELECT 
                    p.id,
                    u.name, 
                    u.no_emp, 
                    p.monto_total, 
                    p.monto_pago, 
                    p.plazo, 
                    p.status,
                    p.interes
                FROM `prestamo` p 
                INNER JOIN user u
                    ON p.user_id = u.id
                WHERE p.`periodo_id`=".$periodo_id."
                    AND p.status in (1,2,3)
                ORDER BY u.no_emp";
        $query = $this->db->query($sql);
        $result = $query->result();
        $i = 0;
        foreach($result as $row)
        {
            $data[$i]['gral_info'] = $row;  
            $data[$i]['historial'] = $this->get_reporte_desglose($row->id);
            $i++;
        }
        foreach($data as $row)
        {
            $response .= $row['gral_info']->no_emp."\t";
            $response .= $row['gral_info']->name."\t";
            $response .= $row['gral_info']->monto_total."\t";
            $response .= $row['gral_info']->monto_pago."\t";
            $response .= $row['gral_info']->plazo."\t";
            $response .= $estatus_label[$row['gral_info']->status]."\t";
            $response .= $row['gral_info']->interes."\t";
            //$total_prestado += $row['gral_info']->monto_total;
            if( is_array($row['historial']) )
            {
                for($i=1; $i < $row['historial'][0]->week; $i++)
                {
                    $response .= "-\t";
                    $prestado_por_semana[($i-1)] += 0;
                }
                for($j=0; $j<sizeof($row['historial']); $j++)
                {
                    $response .= $row['historial'][$j]->monto."\t";
                    $prestado_por_semana[($i-1)] += $row['historial'][$j]->monto;
                    $i++;
                }
            }
            for(;$i<53;$i++)
            {
                $response .= "-\t";
                $prestado_por_semana[($i-1)] += 0;
            }
            $response .= "\n";
        }
        
        $response .= "\t\t\t\t\t";

        foreach ($prestado_por_semana as $row) 
        {
            $response .= "\t".$row;
        }

        $response .= "\n";

        $total_prestado = $this->get_total_prestado();
        $total_cerrados = $this->get_total_cerrados();
        $total_activos = $this->get_total_activos();
        $total_recuperados = $this->get_total_recuperado();
        $total_pendientes = $total_prestado - $total_recuperados;

        $response .= "\tTotal prestado en el periodo: \t".number_format($total_prestado, 2, '.', '')."\n";
        $response .= "\tTotal prestamos cerrados: \t".number_format($total_cerrados, 2, '.', '')."\n";
        $response .= "\tTotal prestamos activos: \t".number_format($total_activos, 2, '.', '')."\n";
        $response .= "\tTotal prestamos recuperados: \t".number_format($total_recuperados, 2, '.', '')."\n";
        $response .= "\tTotal prestamos pendientes: \t".number_format($total_pendientes, 2, '.', '')."\n";
        return $response;
    }

    public function get_reporte_prestamo_general($prestamo_id = '')
    {            
        $sql = "SELECT p.id, p.monto_total, p.monto_pago, p.plazo, p.status, u.name, u.no_emp FROM prestamo p
                INNER JOIN user u 
                    ON p.user_id = u.id
                WHERE p.id=".$prestamo_id;
        $query = $this->db->query($sql);
        if ($query->num_rows())        
            return $query->row();
        return false;   
    }
}
