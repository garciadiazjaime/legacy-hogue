<!DOCTYPE html>
<html lang="es">
<head>
	<!--<?php $this->load->view('fe/layout/head','', false); ?>-->
</head>
<body>
		<div id="wrapper">
			<!--<header><?php $this->load->view('be/layout/header','', false); ?></header>-->
			<div id="container">
<form method="post" action="#">
				<div id="login_container">
					<p>Bienvenido, por favor proporcione su usuario y contrase&ntilde;a</p>
					<p class="submit_error"><?=$msg;?><!--<em>Error</em> El n&uacute;mero de empleado no existe--></p>
					<label>No. Empleado </label>
					<input type="number" name="employee_number" max="99999" min="1" id="employee_number"  />
					<input name="btnIngresar" type="submit"  id="btnIngresar" 
			value="INGRESAR" class="button"/><br/>
				</div>
</form>
			</div>
			<footer>
				<!--<?php $this->load->view('be/layout/footer','', false); ?>-->
			</footer>
		</div>
    </body>
</body>
</html>
