<div id="submenu">
	<?php require_once('layout/submenu_ahorros.php'); ?>
</div>
<div id="content" class="savings">
	<p class="print_button">
		<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
	</p>
	<h1>Dep&oacute;sitos de caja de ahorro</h1>
	<h2>Filtro de b&uacute;squeda</h2>
	<form>
		<div class="left_column">
			<label># de empleado:</label> 
			<input type="number"
				name="employee_number" max="99999" min="1" id="employee_number" /> 
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Nombre:</label>
			<input type="text" name="employee_name" maxlength="70"
				id="employee_name" />
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>A partir de:</label> 
			<select
				name="week_from" id="week_from">
				<option>Semana 1 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 2 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 23 ( Enero 2 a Diciembre 8 del 2012)</option>
			</select>   
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Hasta:</label> 
			<select name="week_until"
				id="week_until">
				<option>Semana Actual</option>
				<option>Semana 1 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 23 ( Enero 2 a Diciembre 8 del 2012)</option>
			</select> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>Monto ahorrado:</label> 
			<select name="saved_from"
				id="saved_from">
				<option>$50.00</option>
				<option>$100.00</option>
				<option>$500.00</option>
			</select>   
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Hasta:</label> 
			<select name="saved_until"
				id="saved_until">
				<option>$50.00</option>
				<option>$100.00</option>
				<option>$500.00</option>
			</select> 
		</div> <!-- .right_column -->
		<br class="clearer" /> 
		<div class="left_column">
			<label>Estatus:</label> 
			<select name="saving_status"
				id="saving_status">
				<option>Activo</option>
				<option>Excento</option>
			</select>
		</div> <!-- .left_column --> 
		<div class="right_column">
			<p class="filter_button_in_form">
				<a href="#" title="Buscar">Buscar</a>
			</p>
		</div> <!-- .right_column --> 
		<br class="clearer" />
	</form>

	<hr />

	<h2>Listado de ahorradores</h2>
	<p class="important_number">
		<em>N&uacute;mero de empleados:</em> <span>310</span>
	</p>
	<table>
		<tr>
			<th class="column_id"># Empleado 
					<a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a>
			</th>
			<th class="column_name">Nombre
					<span class="sort_arrows"> 
						<a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> 
						<a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_date">Inicio de ahorro <a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a>
			</th>
			
			<th class="column_amount_to_save"><span>Monto a ahorrar</span> 
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_amount_saved"><span>Monto ahorrado</span> 
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_status">Estatus <a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar acendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a>
			</th>
			
			<th class="column_view_more">&nbsp;
			</th>
		
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>Lorem Ipsum Dolor</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
	</table>
	<div class="pagination">
		<a href="#"><span>[1]</span></a>-<a href="#">2</a>-<a href="#">3</a>-<a href="#">4</a>
	</div>
	<br class="clearer" />
</div>
<p class="print_button">
	<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
</p>
