<?php 
$week = isset($_POST['report_week']) ? $_POST['report_week'] : '';
?>
<div class="reports content_block">
	<!--<p class="print_button">
		<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
	</p>-->
	<h1>Reporte General</h1>
	<form action="#" method="POST">
		<div class="left_column">
			<label>Per&iacute;odo:</label> 
		</BR>
		</BR>
			<?=$list_periodos;?>
		</div> <!-- .left_column --> 
		<div class="right_column">
		</BR>
		</BR>
			<p class="button filter_button_in_form ">
				               <input name="generar_reporte" type="submit" id="generar_reporte" value="Generar Reporte" class="filter_button_in_form"/>
		</p>
		</div> <!-- .right_column -->
		<br class="clearer" />
	 </form>
</div>
<div id="reporte_general" class="content_block">
	<?=$resumen;?>
	<br class="clearer" />
</div>
<!--<p class="print_button export_button">
<?php echo "<a href=".base_url().".sistema/reportes/nomina/getNominaExcel/".$report_week." title=\"Imprime esta p&aacute;gina\" class=\"export_btn\">Exportar</a>"?>-->
</p>
