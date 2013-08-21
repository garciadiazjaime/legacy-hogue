<!--<script src="<?=base_url();?>resources/js/prestamos.js" type="text/javascript"></script>-->
<div id="submenu">
    <ul>
        <li class="current">
            <a href="#" title="Consultar">Consultar</a>
        </li>
        <li class="last">
            <a href="prestamos/nuevo" title="Nuevo">Nuevo</a>
        </li>
    </ul>
    <br class="clearer" />
</div>
<div id="content" class="loans">
   
    <h1>Pr&eacute;stamos solicitados</h1>
    <h2>Filtros de b&uacute;squeda</h2>
    <form action="#" method="post" id="form-filtros-prestamos">
        <input type="hidden" id="pagina" name="pagina" value="1" />
        <input type="hidden" id="campo" name="campo" value="" />
        <div class="left_column">
            <label># de empleado:</label> 
            <input type="number" name="employee_number" max="99999" min="1" id="employee_number" /> 
        </div> <!-- .left_column --> 
        <div class="right_column">
            <label>Nombre:</label>
            <input type="text" name="employee_name" maxlength="70" id="employee_name" />
        </div> <!-- .right_column --> 
        <br class="clearer" />
        <div class="left_column">
            <label>A partir de:</label>  
            <select name="week_from" id="week_from">
                <option value="0">Seleccionar</option>
                    <?=$this->miscellaneous->getYearWeeks(date('Y'))?>
            </select>
        </div> <!-- .left_column --> 
        <div class="right_column">
            <label>Hasta:</label> 
            <select name="week_until" id="week_until">
                    <option value="0">Seleccionar</option>
                    <?=$this->miscellaneous->getYearWeeks(date('Y'))?>
            </select> 
        </div> <!-- .right_column --> 
        <br class="clearer" />
        <div class="left_column">
            <label>Monto prestado:</label> 
            <input type="number" name="loaned_from" max="99999" min="1" id="loaned_from" /> 
        </div> <!-- .left_column --> 
        <div class="right_column">
            <label>Hasta:</label> 
            <input type="number" name="loaned_until" max="99999" min="1" id="loaned_until" />
        </div> <!-- .right_column -->
        <br class="clearer" /> 
        <div class="left_column two_elements">
            <label>Plazos:</label> 
            <select name="payments_from" id="payments_from">
                <option value=""> -- </option>
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
            <label>Hasta:</label> 
            <select name="payments_until" id="payments_until">
                <option value=""> -- </option>
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
        </div> <!-- .left_column .two_elements --> 
        <div class="right_column">
            <label>Estatus:</label> 
            <select name="loan_status" id="loan_status">
                <option value="0">Seleccionar</option>
                <option value="1">Activo</option>
                <option value="2">Excento</option>
                <option value="3">Cerrado</option>
            </select>
        </div> <!-- .right_column --> 
        <br class="clearer" />
        <div class="right_column">
			<p class="button filter_button_in_form ">
                <input name="btnOK" type="submit" id="btn-search-Prestamos" value="Buscar" class="filter_button_in_form"/>
            </p>
	</div><!-- .right_column -->
	<br class="clearer" />
    </form>
    <hr />
    <h2>Listado de pr&eacute;stamos</h2>
    <div id="list-prestamos">
	<?=$prestamos;?>
	</div>
    <br class="clearer" />
</div>
