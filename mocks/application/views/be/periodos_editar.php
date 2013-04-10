<div id="submenu">
	<?php require_once('layout/submenu_periodos.php'); ?>
</div>
<div id="content" class="period">
	<h1>Editar per&iacute;odo #0012</h1>
	<p class="alert">
		El per&iacute;odo est&aacute; por cerrar, favor de capturar el monto de inter&eacute;s generado por el banco.
	</p>
	<form> 
		<p>
			<label class="first_tag"># Periodo:</label> 12
		</p>
		<div class="left_column">
			<label>Inicio<span class="required">*</span>:</label> 
			<select
				name="week_from" id="week_from">
				<option>Semana 1 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 2 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 23 ( Enero 2 a Diciembre 8 del 2012)</option>
			</select>   
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Fin:</label> 
			<select name="week_until"
				id="week_until">
				<option>Semana Actual</option>
				<option>Semana 1 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 23 ( Enero 2 a Diciembre 8 del 2012)</option>
			</select> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>Estatus<span class="required">*</span>:</label> 
			<select
				name="week_from" id="week_from">
				<option>Cerrado</option>
				<option>Abierto</option>
			</select>   
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Monto de inter&eacute;s:</label> 
			<input type="number" min="1" max="9999999999" id="interest_rate" name="interest_rate" /> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<p class="filter_button">
			<a href="#" title="Guardar cambios">Guardar cambios</a>
		</p>
		<br class="clearer" />
		<p class="form_notes">
			<span class="required">*</span> Campo obligatorio
		</p>
	</form>
</div>
