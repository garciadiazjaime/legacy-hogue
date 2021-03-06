<?php 
$response = '';
$is_first = true;
$class = '';
$pages = array(
		array('href' => 'sistema/dashboard','title'=>'', 'class'=>''),
		array('href' => 'sistema/ahorros','title'=>'Ahorros', 'class'=>''),
		array('href' => 'sistema/prestamos','title'=>'Prestamos', 'class'=>''),
		array('href' => 'sistema/periodos','title'=>'Periodos', 'class'=>'has_children','submenu'=>'submenu_periodo'),
		array('href' => 'sistema/reportes','title'=>'Reportes', 'class'=>'has_children','submenu'=>'submenu_reportes'),
		array('href' => 'sistema/users','title'=>'Usuarios', 'class'=>''),
		);
$submenu_periodo="<li class=\"first last\"><a href=\"".base_url()."sistema/periodos/validar_nomina\">Validar N&oacute;mina</a></li>";
$submenu_reportes="
	<li class=\"first\"><a href=\"".base_url()."sistema/reportes/nomina\">Guardar nomina</a></li>
	<li><a href=\"".base_url()."sistema/reportes/nomina_2\">Reporte nomina</a></li>
	<li class=\"last\"><a href=\"".base_url()."sistema/reportes/prestamos\">Reporte de pr&eacute;stamos</a></li>
	<li class=\"last\"><a href=\"".base_url()."sistema/reportes/ahorros_2\">Reporte de ahorros</a></li>
	<li class=\"last\"><a href=\"".base_url()."sistema/reportes/ahorros\">Reparticion de ahorros</a></li>
	<li class=\"last\"><a href=\"".base_url()."sistema/reportes/prestamos_semana\">Prestamos de la semana</a></li>
";
foreach($pages as $item){
	$class = (strpos(uri_string(), $item['href']) !== false) ? 'current' : '';
	if($is_first){
		$response .="<li id=\"home\" class=\"".$class."\"><a href=\"".base_url().$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>"; 
		$is_first = false;
	}
	else{ 
		if($item['class']=='has_children'){
			$response .="<li class=\"".$item['class']." ".$class."\"><a href=\"".base_url().$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a>";
			$response .="<ul>".${$item['submenu']}."</ul>";
			$response .="</li>"; 
		}
		else{
			$response .="<li class=\"".$item['class']." ".$class."\"><a href=\"".base_url().$item['href']."\" title=\"".$item['title']."\">".$item['title']."</a></li>"; 
		}
	}
}
if(!empty($response)) print("<ul>".$response."</ul>");
?>
