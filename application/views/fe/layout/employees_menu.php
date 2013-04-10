<?php 
$response = '';
$is_first = true;
$pages = array(
		array('href' => base_url().'fe/index','title'=>'Inicio'),
		array('href' => base_url().'fe/ahorros_empleados/'.$no_emp,'title'=>'Ahorros'),
		array('href' => base_url().'fe/prestamos_empleados/'.$no_emp,'title'=>'Prestamos')
		);
foreach($pages as $item):
	$response .= ($is_first) ?
		"<li id=\"home\"><a href=\"".$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>":
		"<li><a href=\"".$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>"; 
	$is_first = false;
endforeach;
if(!empty($response)) print("<ul>".$response."</ul>");
?>
