<div id="submenu">
	<?php require_once('layout/submenu_ahorros.php'); ?>
</div>
<div id="content" class="savings consult">
	<h1>Consultar Pr&eacute;stamo <span>de</span> Lorem Ipsum</h1>
	<p class="cancel_text_button"><a href="#" title="Cancelar">Cancelar</a></p>
	<form>
		<div class="l_column">
			<label># Empleado:</label> 
			<input type="number"
				name="employee_number" max="99999" min="1" id="employee_number" /> 
		</div> <!-- .l_column --> 
		<div class="m_column">
			<label  class="first">Empleado:</label> 
			<input type="text"
				name="employee_name" maxlenght="100" id="employee_name" />
		</div> <!-- .m_column -->
		<div class="r_column">
			<label  class="first">Beneficiario:</label> 
			<input type="text"
				name="payee_name" maxlenght="100" id="payee_name" />
		</div> <!-- .r_column -->
		<p>Caja de ahorro creada el: <span>03/octubre/2011</span></p>
		
		<div class="l_column">
			<label>Monto a ahorrar:</label>  
			<select name="amount_to_save"
				id="amount_to_save">
				<option>$1000.00</option>
				<option>$5000.00</option>
				<option>$10000.00</option>
			</select> 
		</div> <!-- .l_column --> 
		<div class="m_column">
			<label>Monto ahorrado:</label> 
			<input type="number"
				name="amount_saved" max="999999" min="1" id="amount_saved" />
		</div> <!-- .m_column --> 
		<div class="r_column">
			<p>
				<span class="tag">Dep&oacute;sitos realizados:</span> 
				<span class="data">00023</span>
			</p> 
		</div> <!-- .r_column --> 
		<label>Estatus:</label>  
		<select name="saving_status"
			id="saving_status">
			<option>Excento</option>
			<option>Activo</option>
		</select> 
		<label class="tag">por</label>  
		<select name="saving_weeks_pending"
			id="saving_weeks_pending">
			<option>Indefinido</option>
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
		<label class="tag">semanas</label>
		<br />
		<label class="textarea_tag">Notas:</label>
		<textarea>
		</textarea>
		<hr />
		<p class="other_loans"><em>Otros pr&eacute;stamos de este empleado</em></p>
		<p class="other_loans">
			<a href="#" class="first"><span class="loan_id">#32</span><span class="loan_separator">-</span>$600.00</a>
			<a href="#"><span class="loan_id">#32</span><span class="loan_separator">-</span>$600.00</a>
		</p>
		<div class="aligned_right_buttons">
			<p class="filter_button">
				<a href="#" title="Guardar">Guardar</a>
			</p>
			<p class="filter_button">
				<a href="#" title="Eliminar">Eliminar</a>
			</p>
		</div>
	</form>
	<p class="cancel_text_button"><a href="#" title="Cancelar">Cancelar</a></p></div>
<div class="content_block loans_consult">
	<p class="print_button">
		<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
	</p>
	<h2>Historial de dep&oacute;sitos</h2>
	<table class="savings_consult">
		<tr>
			<th class="column_savings_id"><span># De Empleado </span>
					<span class="sort_arrows"> <a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a></span>
			</th>
			
			<th class="column_savings_date"><span>Fecha</span> 
					<span class="sort_arrows"> <a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a></span>
			</th>
			
			<th class="column_payment">Monto
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_amount_saved"><span>Monto acumulado</span> 
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			<th class="column_status">Estatus
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_modify">&nbsp;
			</th>
			
			<th class="column_delete">&nbsp;
			</th>
		
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Excento</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>  
				<select name="table_payment"
					id="table_payment">
					<option>$100.00</option>
					<option>$200000.00</option>
				</select> 
			</td>
			<td>$19800.00</td>
			<td>  
				<select name="table_status"
					id="table_status">
					<option>Activo</option>
					<option>Excento</option>
				</select> 
			</td>
			<td><a href="#" title="Modificar" class="edit_button current_edit_button">Cancelar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Excento</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Excento</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Excento</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Excento</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$19800.00</td>
			<td>Excento</td>
			<td><a href="#" title="Modificar" class="edit_button">Modificar</a></td>
			<td><a href="#" title="Eliminar" class="delete_button">Eliminar</a></td>
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