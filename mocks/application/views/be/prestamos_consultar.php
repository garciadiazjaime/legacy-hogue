<div id="submenu">
	<?php require_once('layout/submenu_prestamos.php'); ?>
</div>
<div id="content" class="loans consult">
	<h1>Consultar Pr&eacute;stamo <span>de</span> Lorem Ipsum</h1>
	<p class="cancel_text_button"><a href="#" title="Cancelar">Cancelar</a></p>
	<form>
		<div class="l_column">
			<label># Empleado:</label> 
			<input type="number"
				name="employee_number" max="99999" min="1" id="employee_number" /> 
		</div> <!-- .l_column --> 
		<div class="m_r_column">
			<label  class="first">Empleado:</label> 
			<input type="text"
				name="employee_number" maxlenght="100" id="employee_name" />
		</div> <!-- .m_column -->
		<div class="l_column">
			<label>Monto solicitado:</label>  
			<select name="amount_loaned"
				id="amount_loaned">
				<option>$1000.00</option>
				<option>$5000.00</option>
				<option>$10000.00</option>
			</select> 
		</div> <!-- .l_column --> 
		<div class="m_column">
			<label>Monto abonado:</label> 
			<input type="number"
				name="amount_payed" max="999999" min="1" id="amount_payed" />
		</div> <!-- .m_column --> 
		<div class="r_column">
			<label>Plazo:</label> 
			<select name="weeks_payment"
				id="weeks_payment">
				<option>4 semanas</option>
				<option>6 semanas</option>
				<option>10 semanas</option>
			</select> 
		</div> <!-- .r_column --> 
		<div class="l_column">
			<p>
				<span class="tag">Inter&eacute;s generado:</span> 
				<span class="data">$1123.00</span>
			</p> 
		</div> <!-- .l_column --> 
		<div class="m_r_column">
			<p>
				<span class="tag">Monto total a pagar:</span> 
				<span class="data">$31123.00</span>
			</p>
		</div> <!-- .m_column -->
		<label>Estatus:</label>
		<select name="loan_status"
			id="loan_status">
			<option>Excento</option>
			<option>Activo</option>
		</select> 
		<label class="tag">por</label>
		<select name="loan_pending_time"
			id="loan_pending_time">
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
	<h2>Historial de pagos</h2>
	<table>
		<tr>
			<th class="column_id"><span># De Empleado </span>
					<span class="sort_arrows"> <a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a></span>
			</th>
			
			<th class="column_date"><span>Fecha de pago</span> <span class="sort_arrows"> <a href="#" title="Ordenar descendentemente"><img
					src="../resources/images/arrow_down.png" alt="&darr;"
					class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
					src="../resources/images/arrow_up.png" alt="&uarr;"
					class="sort_arrow_asc" /> </a><span>
			</th>
			
			<th class="column_payment">Abono
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_amount_payed"><span>Monto liquidado</span> 
					<span class="sort_arrows"> <a href="#"
				title="Ordenar descendentemente"><img src="../resources/images/arrow_down.png"
					alt="&darr;" class="sort_arrow_desc" /> </a> <a href="#"
				title="Ordenar ascendentemente"><img src="../resources/images/arrow_up.png"
					alt="&uarr;" class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_amount_to_pay"><span>Monto restante</span> 
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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
			<td>$200.00</td>
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