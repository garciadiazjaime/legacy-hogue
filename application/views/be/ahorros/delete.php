<span id="msg"><?php if(isset($msg) && !empty($msg)) echo $msg;?></span>
<BR>
<?php if(isset($monto) && isset($week) && empty($historial))
		echo '
	<form method="post" action="#">
	
		<h1>Eliminar Registro</h1>
		<h2>¿Seguro de borrar el registro?</h2>
		<h3> Monto: '.$monto.'<BR/> Semana: '.$week.'</h3>
		<input
		name="btnOK"
		type="submit"
		id="btnOK"
		value="OK"
		/>

		<input
		name="btnCancel"
		type="button"
		id="btnCancel"
		value="Cancel"
		onclick="javascript: window.history.back()"
		/><BR>
	
	</form>';
?>
<span id="historial">
	<?php if(isset($historial) && !empty($historial)) 
		echo '<a href="'.$historial.'">Regresar a lista de ahorros.</a>';
	?>
</span>
