<span id="msg"><?php if(isset($msg) && !empty($msg)) echo $msg;?></span>
<BR>
<?php if(isset($list_users) == false && empty($list_users) &&
		isset($msg) == false && empty($msg))
		echo '
	<form method="post" action="#">
	
		<h1>Eliminar Usuario</h1>
		<h2>¿Seguro de borrar usuario?</h2>
		<h3> Nombre: '.$name.'<BR> No. Emp.: '.$no_emp.'<h3>
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
<span id="list_users">
	<?php if(isset($list_users) && !empty($list_users)) 
		echo '<a href="'.$list_users.'">Regresar a lista de Usuarios.</a>';
	?>
</span>
