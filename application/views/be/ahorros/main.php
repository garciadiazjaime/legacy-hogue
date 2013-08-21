<div id="submenu">
	<ul>
		<li class="current"><a href="<?=base_url();?>sistema/ahorros"
			title="Consultar">Consultar</a></li>
		<li class="last"><a href="<?=base_url();?>sistema/ahorros/nuevo"
			title="Nuevo">Nuevo</a></li>
	</ul>
	<br class="clearer" />
</div>
<div id="content" class="savings">
	<!-- <p class="print_button">
		<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
	</p> -->
	<h1>Dep&oacute;sitos de caja de ahorro</h1>
	<h2>Filtro de b&uacute;squeda</h2>
	<form id="form-filtros-Ahorros">
		<div class="left_column">
			<label># de empleado:</label> <input type="number"
				name="employee_number" max="99999" min="1" id="employee_number" />
		</div>
		<!-- .left_column -->
		<div class="right_column">
			<label>Nombre:</label> <input type="text" name="employee_name"
				maxlength="70" id="employee_name" />
		</div>
		<!-- .right_column -->
		<br class="clearer" />
		<div class="left_column">
			<label>A partir de:</label> <select name="week_from" id="week_from">
				<option value="0">Seleccionar</option>
				<?=$this->miscellaneous->getYearWeeks(date('Y'))?>
			</select>
		</div>
		<!-- .left_column -->
		<div class="right_column">
			<label>Hasta:</label> <select name="week_until" id="week_until">
				<option value="0">Seleccionar</option>
				<?=$this->miscellaneous->getYearWeeks(date('Y'))?>
			</select>
		</div>
		<!-- .right_column -->
		<br class="clearer" />
		<div class="left_column">
			<label>Monto ahorrado:</label> <select name="saved_from"
				id="saved_from">
				<option value="0">Seleccionar</option>
				<option value="1">$0.00</option>
				<option value="2">$1'000.00</option>
				<option value="3">$5'000.00</option>
			</select>
		</div>
		<!-- .left_column -->
		<div class="right_column">
			<label>Hasta:</label> <select name="saved_until" id="saved_until">
				<option value="0">Seleccionar</option>
				<option value="1">$1'000.00</option>
				<option value="2">$5'000.00</option>
				<option value="3">$10'000.00 o m&aacute;s</option>
			</select>
		</div>
		<!-- .right_column -->
		<br class="clearer" />
		<div class="left_column">
			<label>Estatus:</label> <select name="saving_status"
				id="saving_status">
				<option value="0">Seleccionar</option>
				<option value="1">Activo</option>
				<option value="2">Excento</option>
				<option value="3">Cerrado</option>
			</select>
		</div>
		<!-- .left_column -->
		<div class="right_column">
			<p class="button filter_button_in_form ">
				<input name="btnOK" type="submit" id="btn-search-Ahorros" value="Buscar"                                                 class="filter_button_in_form"/>
			</p>
		</div>
		<!-- .right_column -->
		<br class="clearer" />
	</form>
	<hr />
	<h2>Listado de ahorradores</h2>
	<div id="ahorradores">
		<?=$ahorradores;?>
	</div>
	<br class="clearer" />
</div>
