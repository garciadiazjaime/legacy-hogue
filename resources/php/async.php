<?php
$response = '';
if(isset($_POST['flag']))
	$flag = $_POST['flag'];
elseif(isset($_GET['flag']))
	$flag =  $_GET['flag'];
switch($flag)
{
	case 'userInfo':
		$no = $_POST['no'];
		$db_link = connect_db();
		$result = mysql_query('select name, no_emp from user where no_emp='.$no);
		$row = mysql_fetch_row ($result);
		if(mysql_num_rows($result)) $response = "{\"name\":\"".$row[0]."\",\"no_emp\":\"".$row[1]."\"}";
		mysql_close($link);
		if(!empty($response)) echo $response;
	break;
	case 'getAhorro':
		$data = array();
		$data['page'] = 1;
		$data['total'] = 3;
		$data['rows'] = array();
		
		$db_link = connect_db();
		$result = mysql_query('select name, no_emp from user where no_emp='.$no);
		
		$data['rows'][] = array('id'=>1, 'cell'=>array(11,$_GET['flag']));
		$data['rows'][] = array('id'=>2, 'cell'=>array(22,'alex'));
		$data['rows'][] = array('id'=>3, 'cell'=>array(33,'gaby'));
		
		echo json_encode($data);
	break;
}

function connect_db(){
	$link = mysql_connect('localhost','root','');
	mysql_select_db('hogue');
	return $link;
}

?>