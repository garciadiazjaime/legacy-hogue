<?php 
//print_r($ahorro);
?>
<div id="submenu">
	<?php $this->load->view('be/layout/submenu_ahorros'); ?>
</div>
<div id="content" class="savings consult">
	<h1>
		Consultar Ahorro
	</h1>
	<form action="#" method="post" id="form_ahorros_consultar">
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
			<label class="first">Beneficiario:</label> <input type="text"
				name="payee_name" maxlength="100" id="payee_name"
				value="<?=$ahorro->beneficiario;?>" />
		</div>
		<!-- .r_column -->
		<p>
			Caja de ahorro creada el: <span><?=$this->miscellaneous->getSpanishDate(date("d/M/Y", strtotime("1.1.".$ahorro->year." + ".$ahorro->week." weeks - 6 days")));?>
			</span> <b>(#<?=$ahorro->week;?>)
			</b>
		</p>
		<div class="l_column">
			<label>Monto a ahorrar:</label> <input type="text"
				id="amount_to_save" maxlength="10" name="amount_to_save"
				value="<?=$ahorro->monto;?>">
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
		<label>Estatus:</label> <select name="saving_status"
			onchange="changeAhorroStatus()" id="saving_status">
			<?=$this->ahorro->getOptionStatus($ahorro->status, array('','activo','excento','cerrado'));?>
		</select>
		<div id="extraWeeks">
			<?=$extraWeeks;?>
		</div>
		<br /> <label class="textarea_tag">Notas:</label>
		<textarea id="notes" name="notes"><?=$ahorro->notes;?></textarea>
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
<div class="right_column">
			<p class="button filter_button_in_form ">
                               <input name="btnOK" type="submit" id="btn-update-Ahorros" value="GUARDAR"                                                 class="filter_button_in_form"/>
</p>
		</div>
	</form>
</div>
