<?php 
	$is_first = true;
	$response = '';
	$menu = array(
			array('href'=>'dashboard', 'title'=>'Inicio'),
			array('href'=>'ahorros', 'title'=>'Ahorros'),
			array('href'=>'prestamos', 'title'=>'Validar N&oacute;mina'),
			array('href'=>'reportes', 'title'=>'Reportes'),
			array('href'=>'periodos','title'=>'Periodos')			
			);
?>
<ul>
	<li><a href="dashboard" title="dashboard">Inicio</a>
	</li>
	<li class="current"><a href="ahorros" title="ahorros" class="current">Ahorros</a>
	</li>
	<li><a href="prestamos" title="prestamos">Prestamos</a>
	</li>
	<li><a href="validar_nomina" title="validar n&oacute;mina">Validar
			N&oacute;mina</a>
	</li>
	<li><a href="reportes" title="reportes">Reportes</a>
	</li>
	<li><a href="periodos" title="periodos">Periodos</a>

	</li>
</ul>