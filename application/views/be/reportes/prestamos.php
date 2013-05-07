<div class="reports content_block">	
	<h1>Reporte de n&oacute;mina</h1> <b>del periodo en Curso</b>
</div>
<div id="reporte_prestamos" class="content_block">
	<input id="table_search" type="text" name="table_search">
	[presionar enter] 
	<table id="table_sort" class="report_table tablesorter">
		<thead> 
		<tr>
			<th class="column_report_id_employee header headerSortDown"><span># Emp</span></th>
			<th class="column_report_employee_name header"><span>Nombre</span></th>
			<th class="column_report_savings header"><span>Prestamo</span></th>
			<th class="column_report_loans header"><span>Descuento por semana</span></th>
			<th class="column_report_total_loans header"><span># de Semanas</span></th>
			<th class="column_report_total_loans header"><span>Estatus</span></th>
			<th> ver desglose</th>
		</tr>
		</thead> 
		<tbody>
		<?php $estatus = array("Inactivo", "Activo", "Excento", "Cerrado" );?>
		<?php foreach($prestamos as $row):?>						
			<tr class="<?=alternator('odd', 'even');?>">				
				<td><?=$row->no_emp?></td>
				<td><?=$row->name?></td>
				<td class="money"><?=$row->monto_total?></td>
				<td class="money"><?=$row->monto_pago?></td>
				<td><?=$row->plazo?></td>
				<td><?=$estatus[$row->status]?></td>
				<td><a href="<?=base_url()?>sistema/reportes/prestamos/<?=$row->id?>" title="ver desglose">ver</a></td>
			</tr>
		<?php endforeach; ?>			
		</tbody>
	</table>	
	<br class="clearer" />
</div>
