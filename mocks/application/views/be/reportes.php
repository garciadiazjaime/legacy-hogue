<div id="content" class="reports">
	<p class="print_button">
		<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
	</p>
	<h1>Reportes</h1>
	<h2>Filtro de b&uacute;squeda</h2> 
	<form>
		<div class="left_column">
			<label>Tipo de reporte:</label> 
			<select
				name="type_filter" id="type_filter">
				<option>Pr&eacute;stamos</option>
				<option>Ahorros</option>
			</select>   
		</div> <!-- .left_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>A partir de:</label>
			<select name="date_from"
				id="date_until">
				<option>Semana Actual</option>
				<option>Semana 1 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 23 ( Enero 2 a Diciembre 8 del 2012)</option>
			</select> 
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Hasta:</label> 
			<select name="date_until"
				id="date_until">
				<option>Semana Actual</option>
				<option>Semana 1 ( Enero 2 a Diciembre 8 del 2012)</option>
				<option>Semana 23 ( Enero 2 a Diciembre 8 del 2012)</option>
			</select> 
		</div> <!-- .right_column -->
		<br class="clearer" />
		<div class="left_column">
			<label>Rango de montos:</label>
			<select name="quantity_from"
				id="quantity_from">
				<option>$100.00</option>
				<option>$200.00</option>
				<option>$150000.00</option>
			</select> 
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Hasta:</label> 
			<select name="quantity_until"
				id="quantity_until">
				<option>$100.00</option>
				<option>$200.00</option>
				<option>$150000.00</option>
			</select> 
		</div> <!-- .right_column -->
		<br class="clearer" />
		<p class="filter_button">
			<a href="#" title="Generar reporte">Generar reporte</a>
		</p>
		<br class="clearer" />
		<div class="report_important_data">
			<p><span>Acumulado de ahorros</span> $20,000.00  </p>
			<p><span>Acumulado de pr&eacute;stamos</span> $10,000.00  </p>
			<p><span>Intereses generados <br /> por pr&eacute;stamos</span> $2,000.00  </p>
		</div>
	 </form>
	<hr />
	<h2>Listado de pr&eacute;stamos</h2>
	<p class="important_number">
		<em>A partir de:</em>
		<span>30/Agosto/2011 <em>(Semana 18)</em></span>
		<em>Hasta:</em>
		<span>30/Septiembre/2011 <em>(Semana 30)</em></span>
		<br />
		<br />
		<em>N&uacute;mero de empleados:</em>
		<span>310</span>
	
	</p>
	
	<table class="loans">
		<tr>
			<th class="column_report_id"><span># De Empleado</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			<th class="column_report_number_weeks"><span>Semanas acumuladas</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_amount_loaned"> <span>Cantidad prestada</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_amount_payed"> <span>Cantidad pagada</span>
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_amount_left"> <span>Cantidad restante</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_interest_rate"> <span>Intereses</span>
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_status"> <span>Estatus</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			<th class="column_view_more">&nbsp;
			</th>
		
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>23</td>
			<td>$20000.00</td>
			<td>$20000.00</td>
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
	<h2>Listado de ahorros</h2>
	<table>
		<tr>
			<th class="column_report_id_employee"><span># Empleado</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			<th class="column_report_saving_starts"><span>Inicio de ahorro</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_amount_to_save"> <span>Monto a ahorrar</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_amount_saved"> <span>Monto ahorrado</span>
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			
			<th class="column_report_saving_status"> <span>Estatus</span> 
					<span class="sort_arrows">
						<a href="#" title="Ordenar descendentemente"><img
						src="../resources/images/arrow_down.png" alt="&darr;"
						class="sort_arrow_desc" /> </a> <a href="#" title="Ordenar ascendentemente"><img
						src="../resources/images/arrow_up.png" alt="&uarr;"
						class="sort_arrow_asc" /> </a>
					</span>
			</th>
			<th class="column_view_more">&nbsp;
			</th>
		
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="odd">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>Excento</td>
			<td><a href="#" title="Ver m&aacute;s" class="read_more">Ver +</a></td>
		</tr>
		<tr class="pair">
			<td>00012</td>
			<td>12/sep/2012 <span>(#47)</span>
			<td>23</td>
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