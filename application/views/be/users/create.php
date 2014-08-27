<div id="submenu">
	<ul>
		<li><a href="<?=base_url();?>sistema/users"
			title="Consultar">Consultar</a></li>
		<li class="current last"><a href="<?=base_url();?>sistema/users/create"
			title="Nuevo">Nuevo</a></li>
	</ul>
	<br class="clearer" />
</div>
<div id="content" class="users">
	<span id="msg"><?=$msg;?></span>
	<form method="post" action="#">
		<label for="no_emp"> 
			No. Emp:
		</label>
		<input
			name="no_emp"
			type="text"
			id="no_emp"
		value="<?php echo ($success) ? '' :  set_value('no_emp'); ?>"
		input> <BR>
		<?php echo form_error('no_emp').'<BR>'; ?>
		<label for="name"> 
			Nombre:
		</label>
		<input
			name="name"
			type="text"
			id="name"
		value="<?php echo ($success) ? '' : set_value('name'); ?>"
		input><BR>
		<?php echo form_error('name').'<BR>'; ?>
		
		<label for="cuenta"> 
			# de cuenta:
		</label>
		<input
			name="no_cuenta"
			type="text"
			id="no_cuenta"
		value="<?php echo ($success) ? '' : set_value('no_cuenta'); ?>"
		input><BR>
		<?php echo form_error('no_cuenta').'<BR>'; ?>
		<input
			name="btnOK"
			type="submit"
			id="btnOK"
		value="OK"
		input>
	</form>
</div>
