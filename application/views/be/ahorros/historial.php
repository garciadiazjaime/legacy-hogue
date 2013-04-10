
<div id="submenu">
	<?=$this->load->view('be/layout/submenu_ahorros')?>
</div>

<div id="content" class="savings consult">
	<h1>Historial de dep&oacute;sitos</h1>
	<div >
       <?=$registros;?>
   </div>
   <div class="pagination">
           <?php echo $this->pagination->create_links(); ?>
   </div>	<br class="clearer" />
</div>