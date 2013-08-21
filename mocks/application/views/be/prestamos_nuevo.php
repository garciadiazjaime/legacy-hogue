<div id="submenu">
	<?php require_once('layout/submenu_prestamos.php'); ?>
</div>
<div id="content" class="loans">
	<h1>Nuevo pr&eacute;stamo</h1>
	<p class="cancel_text_button"><a href="#" title="Cancelar">Cancelar</a></p>
	<form>
		<p>
			<span class="first_tag">Monto a pagar semanalmente:</span> 
			$500.00
			<span class="tag">Inter&eacute;s generado:</span> 
			$50.00
			<span class="tag">Monto total a pagar:</span> 
			$550.00
		</p>
		<div class="left_column two_elements">
			<label  class="first"># Empleado:</label> 
			<input type="number"
				name="employee_number" max="99999" min="1" id="employee_number" class="first" />
			<div class="wrap_right">
				<label>Monto a solicitar:</label> 
				<select name="loan"
				id="loan">
					<option>$100.00</option>
					<option>$200.00</option>
					<option>$300.00</option>
					<option>$400.00</option>
					<option>$20000.00</option>
				</select>  
			</div> 
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Plazo:</label> 
			<select name="weeks_payment"
				id="weeks_payment">
				<option>4 semanas</option>
				<option>6 semanas</option>
				<option>10 semanas</option>
			</select> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>Empleado:</label> 
			<input type="text"
				name="employee_name" maxlength="100" id="employee_name" />  
		</div> <!-- .left_column --> 
		<div class="right_column">
			<p class="create_button_in_form">
				<a href="#" title="Nuevo per&iacute;odo">Crear nuevo pr&eacute;stamo</a>
			</p>
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<br class="clearer" />
	</form>
</div>
