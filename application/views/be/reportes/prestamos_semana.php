<div id="content" class="period">
	<h1>Préstamos solicitados en semana <?=$week?> del <?=$year?></h1>
<?php if($status):?>
	<table style="width: 925px">
		<tr>
			<th># Empleado</th>
			<th>Nombre</th>
			<th># de Cuenta</th>
			<th>Depósito</th>
		</tr>
		<?php foreach($prestamos as $prestamo):?>
		<tr class="<?php echo alternator('pair', 'odd');?>">
			<td><?=$prestamo->no_emp?></td>
			<td><?=$prestamo->name?></td>
			<td><?=$prestamo->no_cuenta?></td>
			<td>$ <?=number_format($prestamo->monto_prestado, 2, '.', ',')?></td>
		<?php endforeach; ?>
		<tr>
			<td colspan="2"><td>
			<td colspan="2">Total a depositar: $<b><?=number_format($total, 2, '.', ',')?></b><td>
		</tr>
	</table>
	<p class="print_button export_button">
		<a href="<?=base_url()?>sistema/reportes/prestamos_semana/excel" title="Exportar a excel" class="export_btn" target="_blank">Exportar</a>
	</p>
<?php else: ?>
	No hay préstamos registrados en esta semana
<?php endif; ?>
</div>