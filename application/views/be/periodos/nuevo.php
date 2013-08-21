<div id="submenu">
	<ul>
		<li class="last"><a href="<?=base_url();?>sistema/periodos" title="Consultar">Consultar</a></li>
		<li class="current"><a href="<?=base_url();?>sistema/periodos/nuevo" title="Nuevo">Nuevo</a></li>
	</ul>
	<br class="clearer" />
</div>
<div id="content" class="period">
	<h1>Nuevo per&iacute;odo</h1>
	<form method="post" action="#" id="form_create_periodo">
		<div class="left_column">
			<label># Periodo:</label> 
			<label><?=$periodo_no?></label> 
		</div> <!-- .left_column --> 
		<br class="clearer" />
		<div class="left_column">
			<label>Inicio<span class="required">*</span>:</label> 
			<select
				name="week_from" id="week_from">
				<?=$yearWeeks?>
			</select>   
		</div> <!-- .left_column --> 
		<div class="right_column">
			<label>Fin:</label> 
			<select name="week_until"
				id="week_until">
				<?=$yearWeeks?>
			</select> 
		</div> <!-- .right_column --> 
		<br class="clearer" />
		      <div class="right_column">
<p class="button filter_button_in_form ">
                               <input name="btnSubmit" type="submit" id="btnSubmit" value="Generar Nuevo Periodo" class="filter_button_in_form"/>
</p>
</div>
		<p>
			<span id="msg"><?=$msg?></span>
		</p>
		<br class="clearer" />
		<p class="form_notes">
			<span class="required">*</span> Campo obligatorio
		</p>
	</form>
</div>
