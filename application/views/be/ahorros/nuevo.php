<div id="submenu">
	<ul>
		<li class="last"><a href="<?=base_url();?>sistema/ahorros" title="Consultar">Consultar</a></li>
		<li class="current"><a href="<?=base_url();?>sistema/ahorros/nuevo" title="Nuevo">Nuevo</a></li>
	</ul>
	<br class="clearer" />
</div>
<div id="content" class="savings">
	<h1>Nueva caja de ahorros</h1>
	<p class="current_week_info">
		<?=$msg?>
	</p>
	<form action="#" method="post" id="form-new-Ahorro">
	 	<input type="hidden" id="usrid" name="usrid" value="" />
	 	<input type="hidden" id="nAhorros" name="nAhorros" value="0" />
		<div class="left_column two_elements">
			<label class="first"># Empleado:</label> <input type="number"
				name="employee_number" max="99999" min="1" id="employee_number" value="<?=$post[0]?>"
				class="first" maxlength="10" /> <label>Monto a ahorrar:</label> <input
				type="text" name="amount_to_save" maxlength="10" id="amount_to_save" value="<?=$post[1]?>"/>
		</div>
		<!-- .left_column -->
		<div class="right_column">
			<label>Semana de inicio:</label> <select name="saving_starts"
				id="saving_starts">
				<?=$yearWeeks?>
			</select>
		</div>
		<!-- .right_column -->
		<br class="clearer" />
		<div class="left_column">
			<label>Empleado:</label> <input type="text" name="employee_name" value="<?=$post[2]?>"
				maxlength="100" id="employee_name" readonly="readonly" />
		</div>
		<!-- .left_column -->
		<div class="right_column">
			<label>Beneficiario:</label> <input type="text" name="payee_name" value="<?=$post[3]?>"
				maxlength="100" id="payee_name" />
		</div>
		<!-- .right_column -->
		<br class="clearer" />
        <div class="left_column">
            <p id="msg"></p>
        </div> <!-- .left_column -->
        <div class="right_column">
		<p class="button filter_button_in_form ">
				               <input name="btnSubmit" type="submit" id="btnSubmit" value="Generar Nuevo Ahorro" class="filter_button_in_form"/>
		</p>
	</div> <!-- .right_column --> 
        <br class="clearer" />
	</form>
</div>
