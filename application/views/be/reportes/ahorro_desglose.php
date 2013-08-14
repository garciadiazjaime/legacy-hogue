<?php $estatus = array("Inactivo", "Activo", "Excento", "Cerrado" );?>
<?php $week_no = 1 ?>
<div class="reports content_block">	
	<h1>Desglose de préstamo</h1>
	Nombre: <b><?=$general_info->name?></b> <br />
	No. Emp: <b><?=$general_info->no_emp?></b> <br />
	Ahorro semanal autorizado: <b>$ <?=$general_info->monto?></b> <br />		
	Estatus: <b><?=$estatus[$general_info->status]?></b> <br />
	<a href="<?=base_url()?>sistema/reportes/ahorros_2" title="reporte de pr&eacute;stamos">REGRESAR</a>
</div>
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
				$week_no++;
			endfor;
			foreach($desglose as $row):
				while($week_no < $row->week):
					?>
				<tr class="<?=alternator('odd','even')?>">
					<td><?=$week_no?></td>
					<td>$ 0</td>
					<td>EXCENTO</td>
				</tr>
				<?php 
					$week_no++;
				endwhile;
				?>
				<?php $monto = ($row->status == 1)?$row->monto:'-'?>
				<tr class="<?=alternator('odd','even')?>">
					<td><?=$row->week?></td>
					<td>$ <?=$monto?></td>
					<td><?=$estatus[$row->status]?></td>
				</tr>
				<?php
				$week_no++;					
			endforeach;
			for($i=$last_week+1; $i<53; $i++):
				?>
				<tr class="<?=alternator('odd','even')?>">
					<td><?=$i?></td>
					<td>-</td>
					<td>-</td>
				</tr>
				<?php
				$week_no++;
			endfor;														
		?>					
	</table>	
	<br class="clearer" />
</div>
