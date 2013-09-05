<div class="content_block employees_loans">
	<h1>Consultar pr&eacute;stamos</h1>
	<div class="l_column">		
			<span class="first_tag">Fecha comienzo: </span>
			<span><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$prestamo->year." + ".$prestamo->week." weeks - 6 days")));?>
				(#<?=$prestamo->week;?>)
			</span>
	</div>

	<div class="m_column">
			<span class="tag">Fecha fin: </span>
			<span><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$prestamo->year." + ".$prestamo->week." weeks + ".$prestamo->plazo." weeks")));?>
				(#<?=$prestamo->week + $prestamo->plazo;?>)</span>	
	</div>
	<div class="r_column">
		<span class="tag">Estatus:</span>
		<span name="loan_status" id="saving_status"><?php echo $this->ahorro->getStatus($prestamo->status, array('','activo','excento','cerrado'));?></span> 
	</div>
	<div>
		<input type="hidden" id="porcentaje" name="porcentaje" value="15" />
        <input type="hidden" id="nprestamos" name="nprestamos" value="0" />
        <input type="hidden" id="usrid" name="usrid" value="" />
        <input type="hidden" id="employee_name" name="employee_name" value="<?=$user->name;?>" />
        <input type="hidden" id="employee_number" name="employee_number" value="<?=$user->no_emp;?>" />
		<input type="hidden" id="weeks_payment" name="weeks_payment" value="<?=$prestamo->plazo;?>" />
        <input type="hidden" id="saving_starts" name="saving_starts" value="<?=$prestamo->week;?>" />
    </div>
    <br />
    <div class="l_column">
        <span class="first_tag">Pago semanal:</span> 
        <span id="pago-semanal">$ <?=$prestamo->monto_pago;?></span>
	</div>
	<div class="m_column">
			<span class="tag">Monto Restante:</span>
			<span name="loan_pending" id="loan_pending">
				$ <?=($prestamo->monto_total)-($prestamo->pagado);?>
			</span> 
	</div>
	<div class="r_column">
            <span class="tag">Total a pagar:</span> 
            <span id="pago-total">$ <?=$prestamo->monto_total;?></span>
    </div>
    <br /><br />

    <div class="l_column">
		<span class="first_tag">Monto Pagado:</span>
		<span>$ <?=$prestamo->pagado;?></span>
	</div>
	<div class="m_column">
		<span class="tag">Pr&eacute;stamo:</span> 
		<span name="loan" maxlength="100" id="loan">$ <?=$prestamo->monto_prestado;?> </span>
	</div>
	<div class="r_column">
		<span class="tag">Inter&eacute;s:</span> 
		<span id="interes-prestamo">$ <?=$prestamo->interes;?> [<?=($prestamo->interes / $prestamo->monto_prestado)*100;?>%]</span>
	</div>
	<br /><br />

	<div class="l_column">
		<span class="first_tag">Nombre:</span> 
		<span id="employee_name"><?=$user->name;?></span>
	</div>
	<div class="m_column">
		<span class="tag"># Empleado:</span> 
		<span id="employee_number"><?=$user->no_emp;?></span>
	</div>
	<div class="m_column">
		<span class="tag">Dep&oacute;sitos realizados:</span>
		<span><?=$prestamo->pagos;?> </span>
	</div>
	
	
	
<!--

		<div class="l_column">
            <label>Plazo:</label> 
            <select name="weeks_payment" id="weeks_payment">
                <option value="2" >2 semanas</option>
                <option value="3" >3 semanas</option>
                <option value="4" >4 semanas</option>
                <option value="5" >5 semanas</option>
                <option value="6" >6 semanas</option>
                <option value="7" >7 semanas</option>
                <option value="8" >8 semanas</option>
                <option value="9" >9 semanas</option>
                <option value="10" >10 semanas</option>
            </select> 
        </div> <!-- .right_column ->
	<div class="m_column">
            <label>Semana de inicio:</label> 
            <select name="saving_starts" id="saving_starts">
                <?=$yearWeeks?>
            </select>
        </div><!-- .m_column ->
-->
	<br />
	
	
	<hr />
		<?=$msg?>
	<!--<p class="other_loans"><em>Otros pr&eacute;stamos:</em></p>
	<p class="other_loans">
		<a href="#" class="first"><span class="loan_id">#32</span><span class="loan_separator">-</span>$600.00</a>
		<a href="#"><span class="loan_id">#32</span><span class="loan_separator">-</span>$600.00</a>
	</p>-->
</div>
<div class="content_block employees_loans">
	<!--<h2>historial de pagos</h2>
	<table>
		<tr>
			<th># De pago</th>
			<th>Fecha de pago</th>
			<th>Monto semanal a pagar</th>
			<th>Monto liquidado</th>
			<th>Monto por pagar</th>
		</tr>
		<tr class="odd">
			<td>23</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>$200.00</td>
		</tr>
		<tr class="pair">
			<td>22</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>$200.00</td>
		</tr>
		<tr class="odd">
			<td>21</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>$200.00</td>
		</tr>
		<tr class="pair">
			<td>20</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>$200.00</td>
		</tr>
		<tr class="odd">
			<td>20</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>$200.00</td>
		</tr>
		<tr class="pair">
			<td>19</td>
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$20000.00</td>
			<td>$200.00</td>
			<td>$200.00</td>
		</tr>
	</table>
	<div class="pagination">
		<a href="#"><span>[1]</span></a>-<a href="#">2</a>-<a href="#">3</a>-<a href="#">4</a>
	</div>-->
	<br class="clearer" />
</div>
