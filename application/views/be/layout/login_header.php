<?php
$header = ($this->agent->is_browser('Internet Explorer')) ? "div" : "header";
$nav = ($this->agent->is_browser('Internet Explorer')) ? "div" : "nav";
?>
<<?=$header?> id="header">
			<div id="brand">
				<h1>Hogue Inc.</h1>
				<p id="tagline">Caja de ahorro y control de pr&eacute;stamos</p>
			</div>
			<br class="clearer" /> 
		</<?=$header?>>
