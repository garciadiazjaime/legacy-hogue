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
			<th class="column_report_savings header"><span>Monto Autorizado</span></th>
			<th class="column_report_total_loans header"><span>Estatus</span></th>			
			<th> ver desglose</th>
		</tr>
		</thead> 
		<tbody>
		<?php $estatus = array("Inactivo", "Activo", "Excento", "Cerrado" );?>
		<?php $total = 0 ?>
		<?php if(!empty($ahorros)): ?>
		<?php foreach($ahorros as $row):?>						
			<tr class="<?=alternator('odd', 'even');?>">				
				<td><?=$row->no_emp?></td>
				<td><?=$row->name?></td>
				<td class="money"><?=$row->monto?></td>				
				<td><?=$estatus[$row->status]?></td>
				<td><a href="<?=base_url()?>sistema/reportes/ahorros_2/<?=$row->id?>" title="ver desglose">ver</a></td>
			</tr>
			<?php $total+=$row->monto ?>
		<?php endforeach; ?>
		<?php endif; ?>
		</tbody>
	</table>	
	<h2>Total Ahorrado por semana: <b>$ <?=number_format($total, 2, ',', ' ');?></b></h2>
	<h3>Total Ahorro Activos en el a&ntilde;o: <b>$ <?=number_format($total_activos, 2, ',', ' ');?></b></h3>
	<h3>Total Ahorro Inactivos en el a&ntilde;o: <b>$ <?=number_format($total_inactivos, 2, ',', ' ');?></b></h3>
	<br class="clearer" />
	<p class="print_button export_button">
		<a href="<?=base_url()?>sistema/reportes/get_ahorros_excel" title="Exportar a excel" class="export_btn">Exportar</a>
	</p>
</div>
