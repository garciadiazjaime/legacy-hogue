<!--	<ul>
		<li class="current"><a href="prestamos" title="Consultar">Consultar</a></li>
		<li class="last"><a href="prestamos_nuevo" title="Nuevo">Nuevo</a></li>
	</ul>
	<br class="clearer" />-->
	<?php 
	$items = array(
			array('title'=>'ver','href'=>base_url()."sistema/prestamos/ver/".$id),
			array('title'=>'historial','href'=>base_url()."sistema/prestamos/historial/".$id."/0"),
			);
	$class = '';
	$i = 1;
?>
	<ul>
		<?php foreach($items as $menu_item):
		
		$class = strpos($menu_item['href'], uri_string()) !== false ? 'current' : '';
		if(($i++) == sizeof($items))
			$class.= " last";
		?>
		<li class="<?=$class?>"><a href="<?=$menu_item['href']?>" title="<?=$menu_item['title']?>"><?=$menu_item['title']?></a></li>
		<?php endforeach;?>
	</ul>
	<br class="clearer" />