<div id="submenu">
	<?php require_once('layout/submenu_ahorros.php'); ?>
</div>
<div id="content" class="savings">
	<h1>Nueva caja de ahorros</h1>
	<p class="cancel_text_button"><a href="#" title="Cancelar">Cancelar</a></p>
	<p class="current_week_info">El d&iacute;a en curso corresponde al periodo <em>#44</em></p>
	<form>
		<div class="left_column two_elements">
			<label  class="first"># Empleado:</label> 
			<input type="number"
				name="employee_number" max="99999" min="1" id="employee_number" class="first" />
			<label>Monto a ahorrar:</label> 
			<input type="text"
				name="amount_to_save" maxlength="5" id="amount_to_save" />  
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Semana de inicio:</label> 
			<select name="saving_starts"
				id="saving_starts">
				<option>Semana Actual</option>
				<option>Semana 1 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 23 ( Enero 2 a Diciembre 8 del 2012)</option>
			</select> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>Empleado:</label> 
			<input type="text"
				name="employee_name" maxlength="100" id="employee_name" />  
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Beneficiario:</label> 
			<input type="text"
				name="payee_name" maxlength="100" id="payee_name" />  
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<p class="create_button">
			<a href="#" title="Nuevo per&iacute;odo">Crear nuevo ahorro</a>
		</p>
		<br class="clearer" />
	</form>
</div>
