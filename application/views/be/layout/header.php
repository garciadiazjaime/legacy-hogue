<?php
$header = ($this->agent->is_browser('Internet Explorer')) ? "div" : "header";
$nav = ($this->agent->is_browser('Internet Explorer')) ? "div" : "nav";
?>
<<?=$header?> id="header">
			<div id="header_wrapper">
			<div id="brand">
				<h1>Hogue Inc.</h1>
				<p id="tagline">Caja de ahorro y control de pr&eacute;stamos</p>
			</div>
			<div class="log_out">
				<a href="<?=base_url()?>sistema/logout">Logout</a>
			</div>
			<br class="clearer" /> 
			<div>
			<<?=$nav?> id="nav">
				<?php $this->load->view('be/layout/admin_menu','',false);?>
			</<?=$nav?>>
			<br class="clearer" /> 
		</<?=$header?>>
