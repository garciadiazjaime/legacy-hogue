<script src="<?=base_url();?>resources/js/prestamos.js" type="text/javascript"></script>
<div id="submenu">
    <ul>
        <li class="last">
            <a href="<?=base_url();?>sistema/prestamos" title="Consultar">Consultar</a>
        </li>
        <li class="current">
            <a href="#" title="Nuevo">Nuevo</a>
        </li>
    </ul>
    <br class="clearer" />
</div>
<div id="content" class="loans">
    <h1>Nuevo pr&eacute;stamo</h1>
<p class="current_week_info">
		<?=$msg?>
	</p>
    <p class="cancel_text_button">
        <a href="<?=base_url();?>sistema/prestamos" title="Cancelar">Cancelar</a>
    </p>
    <form action="#" method="post" id="form-new-prestamos">
        <input type="hidden" id="porcentaje" name="porcentaje" value="15" />
        <input type="hidden" id="nprestamos" name="nprestamos" value="0" />
        <input type="hidden" id="usrid" name="usrid" value="" />
        <p>
            <span class="first_tag">Monto a pagar semanalmente:</span> 
            <span id="pago-semanal">$0.00</span>
            <span class="tag">Inter&eacute;s generado:</span> 
            <span id="interes-prestamo">$0.00</span>
            <span class="tag">Monto total a pagar:</span> 
            <span id="pago-total">$0.00</span>
        </p>
        <div class="left_column two_elements">
            <label  class="first"># Empleado:</label> 
            <input type="number" name="employee_number" max="99999" min="1" id="employee_number" class="first" />
            <div class="wrap_right">
                <label>Monto a solicitar:</label> 
                <input type="number" name="loan" max="99999" min="1" id="loan" class="first" /> 
            </div> 
        </div> <!-- .left_column --> 
        <div class="right_column">
            <label>Plazo:</label> 
            <select name="weeks_payment" id="weeks_payment">
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
        </div> <!-- .right_column --> 
        <br class="clearer" />
        <div class="left_column">
            <label>Empleado:</label> 
            <input type="text" name="employee_name" maxlength="100" id="employee_name" />  
        </div> <!-- .left_column --> 
        <div class="right_column">
            <label>Semana de inicio:</label> 
            <select name="saving_starts" id="saving_starts">
                <?=$yearWeeks?>
            </select>
        </div><!-- .right_column --> 
        <br class="clearer" />
        <div class="left_column">
            <p id="msg"></p>
        </div> <!-- .left_column --> 
        <div class="right_column">
		<p class="button filter_button_in_form ">
				               <input name="btnSubmit" type="submit" id="btnSubmit" value="Generar Nuevo Prestamo" class="filter_button_in_form"/>
		</p>
	</div> <!-- .right_column --> 
        <br class="clearer" />
    </form>
</div>
