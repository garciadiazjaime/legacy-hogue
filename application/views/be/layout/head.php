<meta charset=utf-8>
<title>HOGUE INC.</title>
<link rel="shortcut icon" href="<?=base_url();?>favicon.ico">
<link rel="stylesheet" href="<?=base_url();?>resources/css/style.css">
<?php if($this->agent->is_browser('Internet Explorer')): ?>
<link rel="stylesheet" href="<?=base_url();?>resources/css/ie-style.css">
<?php endif;?>
<script src="<?=base_url();?>resources/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>resources/js/jquery.tablesorter.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>resources/js/functions.js" type="text/javascript"></script>
<?php if(strpos(uri_string(), 'ahorros') !== FALSE):?>
<script src="<?=base_url();?>resources/js/ahorros.js" type="text/javascript"></script>
<?php elseif(strpos(uri_string(), 'prestamos') !== FALSE):?>
<script src="<?=base_url();?>resources/js/prestamos.js" type="text/javascript"></script>
<?php endif; ?>
