<!DOCTYPE html>
<html lang="es">
<head>
	<?php $this->load->view('be/layout/head','', false); ?>
</head>
<body>
		<div id="wrapper">
			<header><?php $this->load->view('be/layout/header','', false); ?></header>
			<div id="container">
				<div id="login_container">
					<p>Bienvenido, por favor proporcione su usuario y contrase&ntilde;a</p>
					<p class="submit_error"><em>Error</em> El n&uacute;mero de empleado no existe</p>
					<input type="number" name="employee_number" max="99999" min="1" id="employee_number"  />
					<input type="text" name="employee_name" maxlength="50" id="employee_name" />
					<input type="text" name="payee_name" maxlength="50" id="payee_name" />
					<a href="<?=base_url();?>sistema/dashboard" title="Ingresar a sistema" class="button">Ingresar</a>
				</div>
			</div>
			<footer>
				<?php $this->load->view('be/layout/footer','', false); ?>
			</footer>
		</div>
    </body>
</body>
</html>