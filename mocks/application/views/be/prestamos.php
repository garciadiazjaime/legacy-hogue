<div id="submenu">
	<?php require_once('layout/submenu_prestamos.php'); ?>
</div>
<div id="content" class="loans">
	<p class="print_button">
		<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
	</p>
	<h1>Pr&eacute;stamos solicitados</h1>
	<h2>Filtros de b&uacute;squeda</h2>
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
		<div class="left_column">
			<label>Pr&eacute;stamo solicitado:</label> 
			<select
				name="loan_from" id="loan_from">
				<option>$100.00</option>
				<option>$200.00</option>
				<option>$300.00</option>
				<option>$400.00</option>
				<option>$500.00</option>
			</select>   
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Hasta:</label> 
			<select name="loan_until"
				id="loan_until">
				<option>$100.00</option>
				<option>$200.00</option>
				<option>$300.00</option>
				<option>$400.00</option>
				<option>$500.00</option>
			</select> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<div class="left_column two_elements">
				<label class="first">Plazos:</label> 
				<select name="payments_from"
					id="payments_from"  class="first" >
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			<div class="wrap_container_right">
				<label>Hasta:</label> 
				<select name="payments_until"
					id="payments_until">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</div>
			<br class="clearer" />
		</div> <!-- .left_column .two_elements --> 
		<div class="right_column">
			<label>Estatus:</label> 
			<select name="loan_status"
				id="loan_status">
				<option>Activo</option>
				<option>Excento</option>
			</select>
		</div> <!-- .right_column --> 
		<br class="clearer" />
		<p class="filter_button_in_form">
			<a href="#" title="Buscar">Buscar</a>
		</p>
	</form>

	<hr />

	<h2>Listado de pr&eacute;stamos</h2>
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
			
			<th class="column_date">Fecha de pr&eacute;stamo <a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a>
			</th>
			
			<th class="column_amount_to_save"><span>Monto total a pagar</span> 
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_amount_saved"><span>Monto liquidado</span> 
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_amount_saved"><span>Monto restante</span> 
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_status">Estatus
			</th>
			
			<th class="column_view_more">&nbsp;
			</th>
		
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Activo</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
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
