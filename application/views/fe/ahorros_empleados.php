<div class="content_block employees_savings">
	<h1>Consultar ahorros</h1>
		<div class="l_column">
			<label># Empleado:</label> 
			<span><?=$user->no_emp;?></span>
		</div>
		<!-- .l_column -->
		<div class="m_column">
			<label class="first">Empleado:</label> 
			<span><?=$user->name;?></span>
		</div>
		<!-- .m_column -->
		<div class="r_column">
			<label class="first">Beneficiario:</label> <span
				name="payee_name" id="payee_name">
				<?=$ahorro->beneficiario;?> </span>
		</div>
		<!-- .r_column -->
		<p>
			Caja de ahorro creada el: <span><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$ahorro->year." + ".$ahorro->week." weeks - 6 days")));?>
			</span> <b>(#<?=$ahorro->week;?>)
			</b>
		</p>
		<div class="l_column">
			<label>Monto a ahorrar:</label> <span
				id="amount_to_save" name="amount_to_save">
				<?=$ahorro->monto;?></span>
		</div>
		<!-- .l_column -->
		<div class="m_column">
			<label>Monto ahorrado:</label> <span class="data"><?=$ahorro->ahorrado;?>
			</span>
		</div>
		<!-- .m_column -->
		<div class="r_column">
			<p>
				<span class="tag">Dep&oacute;sitos realizados:</span> <span
					class="data"><?=$ahorro->depositos;?> </span>
			</p>
		</div>
		<!-- .r_column -->
		<label>Estatus:</label> <span name="loan_status" id="saving_status">
			<?php echo $this->ahorro->getStatus($ahorro->status, array('','activo','excento','cerrado'));?>
		</span> 
		<div id="extraWeeks">
			<?=$extraWeeks;?>
		</div>
		<br /> <label class="textarea_tag">Notas:</label>
		<span id="notes" name="notes"><?=$ahorro->notes;?></span>
		<hr />
		<!--<div class="aligned_right_buttons">
			<span id="msg"><?=$msg?></span>
			<p class="filter_button">
				<a href="Guardar" title="Guardar"
					onclick="guardarAhorro(); return false">Guardar</a>
			</p> 
			<p class="filter_button">
				<a href="#" title="Eliminar">Eliminar</a>
			</p> 
		</div>-->
	
	<!--<h2>historial de abonos</h2>
	<table>
		<tr>
			<th>Inicio de ahorro</th>
			<th>Monto abonado</th>
			<th>Monto ahorrado</th>
			<th>Estatus</th>
		</tr>
		<tr class="odd">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="pair">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="odd">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="pair">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="odd">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="pair">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="odd">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="pair">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="odd">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
		<tr class="pair">
			<td>12/sep/2012 <span>(#47)</span>
			</td>
			<td>$200.00</td>
			<td>$19800.00</td>
			<td>Activo</td>
		</tr>
	</table>
	<div class="pagination">
		<a href="#"><span>[1]</span></a>-<a href="#">2</a>-<a href="#">3</a>-<a href="#">4</a>
	</div>-->
	<br class="clearer" />
</div>
