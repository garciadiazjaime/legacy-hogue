<?php
$header = ($this->agent->is_browser('Internet Explorer')) ? "div" : "header";
$nav = ($this->agent->is_browser('Internet Explorer')) ? "div" : "nav";
?>
<<?=$header?> id="header" class="fe">
			<div id="brand">
				<h1>Hogue Inc.</h1>
				<p id="tagline">Caja de ahorro y control de pr&eacute;stamos</p>
			</div>
			<<?=$nav?> id="nav">
				<?php $this->load->view('fe/layout/employees_menu',array('no_emp'=>$no_emp),false);?>
			</<?=$nav?>>
			<br class="clearer" /> 
		</<?=$header?>>
