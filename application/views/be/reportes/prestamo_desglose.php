<div class="reports content_block">	
	<h1>Desglose de préstamo</h1>
	Nombre: <b><?=$general_info->name?></b> <br />
	No. Emp: <b><?=$general_info->no_emp?></b> <br />
	Pr&eacute;stamo: <b>$ <?=$general_info->monto_total?></b> <br />
	Descuento por semana: <b>$ <?=$general_info->monto_pago?></b> <br />
	# de semanas: <b><?=$general_info->plazo?></b> <br />
	Estatus: <b><?=$general_info->status?></b> <br />
	<a href="<?=base_url()?>sistema/reportes/prestamos" title="reporte de pr&eacute;stamos">REGRESAR</a>
</div>
<?php $estatus = array("Inactivo", "Activo", "Excento", "Cerrado" );?>
<div id="reporte_prestamos" class="content_block">
	<table id="table_desglose" class="report_table">		
		<tr>
			<th>Semana</th>
			<th>Monto</th>
			<th>Estatus</th>
		</tr>
		<?php
			$first_week = $desglose[0]->week;
			$last_week	= $desglose[(sizeof($desglose)-1)]->week;
			for($i=1; $i<$first_week; $i++):
				?>
				<tr class="<?=alternator('odd','even')?>">
					<td><?=$i?></td>
					<td>-</td>
					<td>-</td>
				</tr>
				<?php
			endfor;
			foreach($desglose as $row):
				?>
				<tr class="<?=alternator('odd','even')?>">
					<td><?=$row->week?></td>
					<td>$ <?=$row->monto?></td>
					<td><?=$estatus[$row->status]?></td>
				</tr>
				<?php					
			endforeach;
			for($i=$last_week+1; $i<53; $i++):
				?>
				<tr class="<?=alternator('odd','even')?>">
					<td><?=$i?></td>
					<td>-</td>
					<td>-</td>
				</tr>
				<?php
			endfor;														
		?>					
	</table>	
	<br class="clearer" />
</div>
