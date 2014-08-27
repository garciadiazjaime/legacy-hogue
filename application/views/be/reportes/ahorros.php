<div class="reports content_block">
	<h1>Reportes Ahorros</h1>
	<form action="#" method="POST">
	<div class="left_column">
		<span id="msg"><?=$msg;?></span><BR/>
		<span>% Banco:</span> <b><?=!empty($banco) ? number_format($banco, 2, ',', ' ') : '0';?></b><BR/>
		<span>Total Pr&eacute;stamo:</span> <b><?=!empty($prestamo) ? number_format($prestamo, 2, ',', ' '): '0';;?></b><BR/>
		<span>Total Intereses:</span> <b><?=!empty($total_intereses) ? number_format($total_intereses, 2, ',', ' '): '0';;?></b><BR/>
		<span>Total Ahorrado:</span> <b><?=!empty($total_ahorrado) ? number_format($total_ahorrado, 2, ',', ' '): '0';;?></b><BR/>
		<span>Valor de peso por Inter&eacute;s:</span> <?=!empty($calculo) ? $calculo: '0';?><BR/>
	</div>
	<div class="right_column">
		<p class="button filter_button_in_form ">
			<input name="submit" type="submit" id="submit" value="Generar Reporte" class="filter_button_in_form"/>
		</p>
	</div>
<br class="clearer" />

	<div id="ahorradores" class="">
		<?php echo isset($ahorradores) ? $ahorradores : '0';?>
	</div>
<br class="clearer" />
	</form>
	<p class="print_button export_button">
<?php echo $is_post ? "<a href=".base_url()."sistema/reportes/getAhorrosExcel/ title=\"Exportar a excel\" class=\"export_btn\">Exportar</a>" : "";?>
	<!--<a href="<?=base_url();?>sistema/reportes/nomina/getNominaExcel/<?=$report_week;?>" title="Imprime esta p&aacute;gina" class="export_btn">Exportar</a>--> <!--<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>-->
</p>
</div>
