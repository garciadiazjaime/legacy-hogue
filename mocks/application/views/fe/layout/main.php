<!DOCTYPE html>
<html lang="es">
<head>
<?php $this->load->view('fe/layout/head','', false); ?>
</head>
<body>
	<div id="wrapper">
		<?php $this->load->view('fe/layout/header')?>
		<div id="container">
			<?=$content?>
		</div>
		<?php $this->load->view('fe/layout/footer','', false); ?>
	</div>
</body>
</body>
</html>
