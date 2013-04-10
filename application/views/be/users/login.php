<div id="login_container">
	<form method="post" action="#">
		<h1>Login Usuario</h1>
		<p>
		<label for="username">Usuario: </label>
		<?php echo form_error('username','<span class="submit_error">','</span>'); ?>
		</p>	
		<input name="username" type="text" id="username" value="<?=$username;?>"/>
		<p>
			<label for="password">Contrase&ntilde;a: </label>
		<?php echo form_error('password','<span class="submit_error">','</span>'); ?>
		</p>

		<input name="password" type="password" id="password" value=""/><br/>
		<input name="btnIngresar" type="submit"  id="btnIngresar" 
			value="INGRESAR" class="button"/><br/>
		<span id="msg"><?php if(isset($msg) && !empty($msg)) echo $msg;?></span>
	</form>
</div>
