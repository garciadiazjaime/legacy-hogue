<span id="msg"><?php if(isset($msg) && !empty($msg)) echo $msg;?></span>
<BR>
<form method="post" action="#">
<h1>Editar Usuario</h1>
	<label for="name"> 
      		Nombre:
    	</label>	
	<input
        name="name"
        type="text"
        id="name"
	value="<?=$name;?>"
	/><BR>
	<?php echo form_error('name').'<BR>'; ?>
	<label for="no_emp"> 
      		No. Emp.:
    	</label>
	<input
        name="no_emp"
        type="text"
        id="no_emp"
	value="<?=$no_emp; ?>"
	/><BR>
	<?php echo form_error('no_emp').'<BR>'; ?>
	<label for="no_cuenta"> 
      		No. Cuenta:
    	</label>
	<input
        name="no_cuenta"
        type="text"
        id="no_cuenta"
	value="<?=$no_cuenta;?>"
	/><BR>
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
	/>
</form>
<span id="list_users">
	<?php if(isset($list_users) && !empty($list_users)) 
		echo '<a href="'.$list_users.'">Regresar a lista de Usuarios.</a>';
	?>
</span>
