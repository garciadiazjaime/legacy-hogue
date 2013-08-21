<script src="<?=base_url();?>resources/js/prestamos.js" type="text/javascript"></script>
<div id="content" class="savings consult">
	<h1>
		Consultar Registro
	</h1>
	<form action="#" method="post" id="form_ahorros_consultar">

	<div class="l_column">
		<label class="first">Monto:</label> <input type="text"
			name="monto" maxlength="100" id="monto"
			value="<?=$monto;?>" />
	</div>
	<!-- .l_column -->
	<div class="m_column">
		<label class="first">Semana:</label> <input type="text"
			name="week" maxlength="100" id="week"
			value="<?=$week;?>" />
	</div>
	<!-- .r_column -->
	<div class="r_column">
		<label>Estatus:</label> <select name="registro_status"
			onchange="changeAhorroStatus()" id="registro_status">
			<?=$this->ahorro->getOptionStatus($prestamo->status, array('','activo','excento','cerrado'));?>
		</select> 
	</div>

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
<!-- 
<p class="print_button">
	<a href="#" title="Imprime esta p&aacute;gina">Imprimir</a>
</p>-->
