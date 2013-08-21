<div id="submenu">
	<ul>
		<li class="current"><a href="<?=base_url();?>sistema/periodos" title="Consultar">Consultar</a></li>
		<li class="last"><a href="<?=base_url();?>sistema/periodos/nuevo" title="Nuevo">Nuevo</a></li>
	</ul>
	<br class="clearer" />
</div>
<div id="content" class="period">

	<h1>Per&iacute;odos existentes</h1>
	<div >
                       <?=$list_periodos;?>
       </div>
       <div class="pagination">
               <?php echo $this->pagination->create_links(); ?>
       </div>	<br class="clearer" />
</div>
