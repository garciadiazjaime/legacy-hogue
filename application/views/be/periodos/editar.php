<div id="content" class="period">
	<h1>Editar Periodo</h1>
	<form method="post" action="#" id="form_create_periodo">
		<div class="left_column">
			<label># Periodo:</label> 
			<label><?=$periodo_no?></label> 
		</div> <!-- .left_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>Inicio<span class="required">*</span>:</label> 
			<select
				name="week_from" id="week_from">
				<?=$yearWeeks?>
			</select>   
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Fin:</label> 
			<select name="week_until"
				id="week_until">
				<?=$yearWeeks?>
			</select> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		 
		<div class="right_column">
			<p class="button filter_button_in_form ">
            	<input name="button" type="submit" id="btnEdit" value="Editar Periodo" class="filter_button_in_form"/>
			</p>
		</div>
		<br class="clearer" />

		<div class="left_column">
			<label>Interes Generados (cierre):</label> 
			<input type="text" name="monto_banco" maxlength="9" id="monto_banco" />   
		</div> <!-- .left_column -->
		<div class="right_column">
			<p class="button filter_button_in_form ">
            	<input name="button" type="submit" id="btnClose" value="Cerrar Periodo" class="filter_button_in_form"/>
			</p>
		</div>
		<br class="clearer" />
		<p>
			<span id="msg"><?=$msg?></span>
		</p>
		<br class="clearer" />
		<p class="form_notes">
			<span class="required">*</span> Campo obligatorio
		</p>
	</form>
</div>
