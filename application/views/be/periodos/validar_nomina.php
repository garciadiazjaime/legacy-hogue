<div class="content_block">
	<h1>Validar N&oacute;mina</h1>
	<p class="week_data"><?="Semana ".$week;?> </p>
	<div class="validate_result_success">		
		<p id="msg"><?=$msg;?></p>
	</div>
	<hr />
	<form enctype="multipart/form-data" action="#" method="POST">
		<div class="left_column">
			<label>Seleccione el archivo de n&oacute;mina (.xls, .xlsx)</label>
			</BR>
			<input type="file" name="file_to_validate"
						id="file_to_validate" />
			</BR>
			<label>Seleccione la semana a validar</label>
			</BR>
			<select
				name="week_to_validate" id="week_to_validate">
				<?=$this->miscellaneous->getYearWeeks(date('Y'), false, $week);?>
			</select> 
			</BR>
		</div>
	<div class="right_column">
		<p class="button filter_button_in_form ">
			<input name="validar_nomina" type="submit" id="validar_nomina" value="Validar n&oacute;mina" class="filter_button_in_form"/>
		</p>
	</div>
	</form>
</div>
