<div class="content_block employees_loans">
	<h1>Consultar pr&eacute;stamos</h1>
	<table>
		<tr>
			<th>Nombre:</th>
			<td><?=$user->name;?></td>
			<th># Empleado:</th>
			<td><?=$user->no_emp;?></td>
			<th>Estatus:</th>
			<td><?=$this->ahorro->getStatus($prestamo->status, array('','activo','excento','cerrado'));?></td>				
		</tr>
		<tr>
			<th>Fecha Inicio:</th>
			<td><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$prestamo->year." + ".$prestamo->week." weeks - 6 days")));?>
				(#<?=$prestamo->week;?>)</td>
			<th>Fecha fin:</th>
			<td><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$prestamo->year." + ".$prestamo->week." weeks + ".$prestamo->plazo." weeks")));?>
				(#<?=$prestamo->week + $prestamo->plazo;?>)</td>
			<th>Total a pagar:</th>
			<td>$ <?=$prestamo->monto_total;?></td>
		</tr>
		<tr>
			<th>Pago semanal:</th>
			<td>$ <?=$prestamo->monto_pago;?></td>
			<th>Monto Pagado:</th>
			<td>$ <?=$prestamo->pagado;?></td>
			<th>Monto Restante:</th>
			<td>$ <?=($prestamo->monto_total)-($prestamo->pagado);?></td>
		</tr>
		<tr>
			<th>Dep&oacute;sitos realizados:</th>
			<td><?=$prestamo->pagos;?></td>
			<!--<th>Pr&eacute;stamo:</th>
			<td>$ <?=$prestamo->monto_prestado;?></td>
			<th>Inter&eacute;s:</th>
			<td>$ <?=$prestamo->interes;?> [<?=($prestamo->interes / $prestamo->monto_prestado)*100;?>%]</td>-->
		</tr>
	</table>
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
	<br />		
	<hr />
	<?=$msg?>	
</div>
<div class="content_block employees_loans">	
	<br class="clearer" />
</div>
