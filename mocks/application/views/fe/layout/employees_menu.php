<?php 
$response = '';
$is_first = true;
$pages = array(
		array('href' => 'dashboard_empleados','title'=>'Inicio'),
		array('href' => 'ahorros_empleados','title'=>'Ahorros'),
		array('href' => 'prestamos_empleados','title'=>'Prestamos')
		);
foreach($pages as $item):
	$response .= ($is_first) ?
		"<li id=\"home\"><a href=\"".$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>":
		"<li><a href=\"".$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>"; 
	$is_first = false;
endforeach;
if(!empty($response)) print("<ul>".$response."</ul>");
?>
