<?php 
$header = ($this->agent->is_browser('Internet Explorer')) ? "div" : "header";
$footer = ($this->agent->is_browser('Internet Explorer')) ? "div" : "footer";
$nav = ($this->agent->is_browser('Internet Explorer')) ? "div" : "nav";
?>
<<?=$footer?> id="footer">
<p>&copy; Hogue 2012</p>
<p>
¿Dudas? Escríbenos a <a href="mailto:info@mintitmedia.com">info@mintitmedia.com</a></p>
<p id="footer_mint">
	Desarrollado por <a href="http://mintitmedia.com" title="Mint IT Media"
		target="_blank">Mint IT Media</a>
		<br />
</p>
</<?=$footer?>>
