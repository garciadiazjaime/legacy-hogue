<script src="<?=base_url();?>resources/js/prestamos.js" type="text/javascript"></script>
<div id="submenu">
	<?=$this->load->view('be/layout/submenu_prestamos')?>
</div>
<div id="content" class="savings consult">
	<h1>
		Consultar Pr&eacute;stamo
	</h1>
	<form action="#" method="post" id="form_prestamos_consultar">
		<div class="l_column">		
			<p>
				Semana comienzo: <span><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$prestamo->year." + ".$prestamo->week." weeks - 6 days")));?>
				</span> <b>(#<?=$prestamo->week;?>)
				</b>
			</p>
		</div>

		<div class="m_column">
			<p>
				Semana fin: <span><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$prestamo->year." + ".$prestamo->week." weeks + ".$prestamo->plazo." weeks - 1 weeks")));?>
				</span> <b>(#<?=$prestamo->week + $prestamo->plazo -1;?>)
				</b>
			</p>
		</div>
		<?php if ($prestamo->status == 3): ?>
		<div class="m_column">
			<p>
				Pr&eacute;stamo cerrado semana: <span>
				</span> <b><?=$prestamo->week_end;?></b>
			</p>
		</div>
		<?php endif; ?>
		<br />
	<input type="hidden" id="porcentaje" name="porcentaje" value="<?=($prestamo->interes / $prestamo->monto_prestado)*100;?>" />
        <input type="hidden" id="nprestamos" name="nprestamos" value="0" />
        <input type="hidden" id="usrid" name="usrid" value="" />
        <input type="hidden" id="employee_name" name="employee_name" value="<?=$user->name;?>" />
        <input type="hidden" id="employee_number" name="employee_number" value="<?=$user->no_emp;?>" />
        <input type="hidden" id="m_pagado" name="m_pagado" value="<?=$prestamo->pagado;?>" />
	 	<input type="hidden" id="weeks_payment" name="weeks_payment" value="<?=$prestamo->plazo;?>" />
        <input type="hidden" id="saving_starts" name="saving_starts" value="<?=$prestamo->week;?>" />
        <div class="l_column">
            <span class="first_tag">Monto a pagar semanalmente:</span> 
            <span id="pago-semanal">$ <?=round($prestamo->monto_pago,2);?></span>
	</div>
	<div class="m_column">
            <span class="tag">Inter&eacute;s generado:</span> 
            <span id="interes-prestamo">$ <?=$prestamo->interes;?> [<?=round((($prestamo->interes / $prestamo->monto_prestado)*100),2);?>%]</span>
	</div>
	<div class="r_column">
            <span class="tag">Monto total a pagar:</span> 
            <span id="pago-total">$ <?=round($prestamo->monto_total,2);?></span>
        </div>
		<div class="l_column">
			<label># Empleado:</label> 
			<span id="employee_number"><?=$user->no_emp;?></span>
		</div>
		<!-- .l_column -->
		<div class="m_column">
			<label class="first">Empleado:</label> 
			<span id="employee_name"><?=$user->name;?></span>
		</div>
		<!-- .m_column -->
		<div class="r_column">
			<label class="first">Pr&eacute;stamo:</label> <input type="text"
				name="loan" maxlength="100" id="loan"
				value="<?=$prestamo->monto_prestado;?>" />
		</div>
		<!-- .r_column -->

		<!-- .l_column -->
		<div class="l_column">
			<label>Monto Pagado:</label> <span class="data"><?=round($prestamo->pagado,2);?>
			</span>
		</div>
		<!-- .m_column -->
		<div class="m_column">
			<p>
				<span class="tag">Dep&oacute;sitos realizados:</span> <span
					class="data"><?=$prestamo->pagos;?> </span>
			</p>
		</div>
		<!-- .r_column -->
		<label>Estatus:</label> <select name="loan_status"
			onchange="changePrestamoStatus()" id="loan_status">
			<?=$this->ahorro->getOptionStatus($prestamo->status, array('','activo','excento','cerrado'));?>
		</select>
		<div id="extraWeeks">
			<?=$extraWeeks;?>
		</div>

		<div class="l_column">
            <label>Plazo:</label> 
            <span ><?=$prestamo->plazo;?></span>
        </div> <!-- l_column -->
		<div class="m_column">
            <label>Semana de inicio:</label> 
            <span ><?=$prestamo->week;?></span>
        </div><!--m_column -->
        <br />
        
        <div class="l_column">
        	<label for="new_pago_semanal_check"> Modificar Monto Semanal</label> 
            <input type="checkbox" id="new_pago_semanal_check" name="new_pago_semanal_check" onchange="showhide('hide_pago_semanal');" value="new" />
        </div> <!-- l_column -->
		<div class="l_column" id="hide_pago_semanal">
            <label class="first">Cantidad:</label> 
            <input type="text" name="new_pago_semanal" maxlength="100" id="new_pago_semanal" />
        </div><!--m_column -->

        <div class="m_column">
        	<label for="new_weeks_payment_check"> Modificar Plazo</label> 
            <input type="checkbox" id="new_weeks_payment_check" name="new_weeks_payment_check" onchange="showhide('hide_weeks_payment');" value="new" />
        </div> <!-- l_column -->
		<div class="m_column" id="hide_weeks_payment">
            <label>Plazo:</label> 
            <select name="new_weeks_payment" id="new_weeks_payment">
                <option value="1" >1 semana</option>
                <option value="2" >2 semanas</option>
                <option value="3" >3 semanas</option>
                <option value="4" >4 semanas</option>
                <option value="5" >5 semanas</option>
                <option value="6" >6 semanas</option>
                <option value="7" >7 semanas</option>
                <option value="8" >8 semanas</option>
                <option value="9" >9 semanas</option>
                <option value="10" >10 semanas</option>
                <option value="11"> 11 semanas </option>
                <option value="12"> 12 semanas </option>
                <option value="13"> 13 semanas </option>
                <option value="14"> 14 semanas </option>
                <option value="15"> 15 semanas </option>
            </select>
        </div><!--m_column -->

        <div class="r_column">
        	<label for="new_saving_starts_check"> Modificar Semana de Inicio</label> 
            <input type="checkbox" id="new_saving_starts_check" name="new_saving_starts_check" onchange="showhide('hide_saving_starts');" value="new" />
        </div> <!-- l_column -->
		<div class="r_column" id="hide_saving_starts">
            <label>Semana de inicio:</label> 
            <select name="new_saving_starts" id="new_saving_starts">
                <?=$yearWeeks?>
            </select>
        </div><!--m_column -->


	<br />
		<div class="aligned_right_buttons">
			<span id="msg"><?=$msg?></span>
			<p class="button filter_button_in_form ">
			<input name="btnSubmit" type="submit" id="btnSubmit" value="Guardar" class="filter_button_in_form"/>
		</p><!-- 
			<p class="filter_button">
				<a href="#" title="Eliminar">Eliminar</a>
			</p> -->
		</div>
	</form>
</div>
