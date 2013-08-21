<?php 
$week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
?>
<div class="reports content_block">
	<!--<p class="print_button">
		<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
	</p>-->
	<h1>Reporte de n&oacute;mina</h1>
	<form action="#" method="POST">
		<div class="left_column">
			<label>Semana:</label> 
			<select name="report_week"
				id="report_week">
				<?=$this->miscellaneous->getYearWeeks(date('Y'), false, $week);?>
			</select> 
		</div> <!-- .left_column --> 
		<div class="right_column">
			<p class="button filter_button_in_form ">
				               <input name="generar_reporte" type="submit" id="generar_reporte" value="Generar Reporte" class="filter_button_in_form"/>
		</p>
		</div> <!-- .right_column -->
		<br class="clearer" />
	 </form>
</div>
<div id="reporte_nomina" class="content_block">
	<?=$resumen;?>
	<br class="clearer" />
</div>
<p class="print_button export_button">
<?php echo isset($_POST['report_week']) ? "<a href=".base_url()."sistema/reportes/nomina/getNominaExcel_2/".$report_week." title=\"Exportar a excel\" class=\"export_btn\">Exportar</a>" : "";?>
	<!--<a href="<?=base_url();?>sistema/reportes/nomina/getNominaExcel/<?=$report_week;?>" title="Imprime esta p&aacute;gina" class="export_btn">Exportar</a>--> <!--<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>-->
</p>
