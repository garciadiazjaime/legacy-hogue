<?php 
$response = '';
$is_first = true;
$pages = array(
		array('href' => 'dashboard','title'=>'Inicio'),
		array('href' => 'ahorros','title'=>'Ahorros'),
		array('href' => 'prestamos','title'=>'Prestamos'),
		array('href' => 'validar_nomina','title'=>'Validar N&oacute;mina'),
		array('href' => 'reportes','title'=>'Reportes'),
		array('href' => 'periodos','title'=>'Periodos'),
		array('href' => 'reportes_nomina','title'=>'Reportes de nomina'),
		array('href' => 'reportes_ahorros','title'=>'Reportes de ahorros')
		);
foreach($pages as $item):
	$response .= ($is_first) ?
		"<li id=\"home\"><a href=\"".$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>":
		"<li><a href=\"".$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>"; 
	$is_first = false;
endforeach;
if(!empty($response)) print("<ul>".$response."</ul>");
?>
