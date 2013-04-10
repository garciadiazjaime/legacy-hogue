<!DOCTYPE html>
<html lang="es">
<head>
<?php $this->load->view('be/layout/head','', false); ?>
</head>
<body>
	<div id="wrapper">
		<?php $this->load->view('be/layout/header')?>
		<div id="container">
			<?=$content?>
		</div>
		<div id="footer_push" > </div>
	</div>
	<?php $this->load->view('be/layout/footer','', false); ?>
</body>
</body>
</html>
