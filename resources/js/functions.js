//var server = "http://localhost/hogue/";
var server = "http://hogue-mxserver:8080/hogue/";
$(document)
		.ready(
				function() {
					var pathname = window.location.pathname;
					var msg = '';
					var flag = true;
					// alert(pathname);
					if (pathname.indexOf('periodos_nuevo') != -1) {
						$('#create_periodo')
								.click(
										function() {
											flag = true;
											var week_from = parseInt($(
													'#week_from').val());
											var week_until = parseInt($(
													'#week_until').val());
											if (week_from > week_until) {
												$('#msg')
														.text(
																'La 2da semana debe ser igual o mayor que la primera.');
												flag = false;
											}
											if (flag) {
												$('#form_create_periodo')
														.submit();
											}
											return false;
										})
					} else if (pathname.indexOf('ahorros/nuevo') != -1) {
						$('#create_ahorro').click(
								function() {
									flag = true;
									fields = new Array('employee_number',
											'amount_to_save', 'employee_name',
											'payee_name')
									// saving_starts
									flag = validate_fields(fields);
									if (flag) {
										$('#form_create_ahorro').submit();
									}
									return false;
								});
						$('#employee_number').change(function() {
							$.post(server + 'resources/php/async.php', {
								flag : 'userInfo',
								no : $('#employee_number').val()
							}, function(data) {
								var obj = jQuery.parseJSON(data);
								$('#employee_name').val(obj.name);
								$('#payee_name').val(obj.no_emp);
							})
						});
					} else if (pathname.indexOf('prestamos/ver') != -1){
						hide("hide_pago_semanal");
						hide("hide_weeks_payment");
						hide("hide_saving_starts");
					}
				});

function getAhorradores(page, header) {
	var params = $('#form-filtros-Ahorros').serialize()
	params += "&page=" + page + "&header=" + header;	
	console.log(params);
	loading('ahorradores');
	$.ajax({
		type: "POST",
		data: params,
		url: server + "ahorros/getAhorradores",
		beforeSend: function(){		
		},
		success: function(response){
			$('#ahorradores').html(response);
		},
		error: function(xhr, ajaxOptions, thrownError){
		}
	});
	return false;
}

function showhide(myhide) {
	  if(document.getElementById(myhide).style.display == "none") {
      document.getElementById(myhide).style.display = "block";
   }
   else {
      //hide the div:
      document.getElementById(myhide).style.display = "none";
      //clear the form:
      document.getElementById(myhide).reset();
   }
}

function hide(myhide) {
      document.getElementById(myhide).style.display = "none";
      //clear the form:
      //document.getElementById(myhide).reset();
}

function getReporteNominas(page,week, week_is_registered) {
	var params = "page=" + page +"&report_week=" + week + "&week_is_registered=" + week_is_registered;	
	console.log(params);
	loading('reporte_nomina');
	$.ajax({
		type: "POST",
		data: params,
		url: server + "sistema/reportes/nomina/getReporteNominas",
		beforeSend: function(){		
		},
		success: function(response){
			$('#reporte_nomina').html(response);
		},
		error: function(xhr, ajaxOptions, thrownError){
		}
	});
	return false;
}

function getReporteGeneral(page) {
	var params = "page=" + page;
	console.log(params);
	loading('reporte_general');
	$.ajax({
		type: "POST",
		data: params,
		url: server + "sistema/reportes/getReporteGeneral",
		beforeSend: function(){		
		},
		success: function(response){
			$('#reporte_general').html(response);
		},
		error: function(xhr, ajaxOptions, thrownError){
		}
	});
	return false;
}

function getReporteAhorros(page,banco) {
	var params = "page=" + page +"&banco=" + banco ;
	console.log(params);
	loading('ahorradores');
	$.ajax({
		type: "POST",
		data: params,
		url: server + "sistema/reportes/getReporteAhorros",
		beforeSend: function(){		
		},
		success: function(response){
			$('#ahorradores').html(response);
		},
		error: function(xhr, ajaxOptions, thrownError){
		}
	});
	return false;
}

function loading(id) {
	$('#' + id).html(
			"<img src=\"" + server
					+ "resources/images/loader.gif\" title=\"loading\" />")
}

function validate_fields(arr) {
	var response = true;
	for (i = 0; i < arr.length; i++) {
		if ($('#' + arr[i]).val().trim().length == 0) {
			$('#' + arr[i]).addClass('missed');
			response = false;
		} else
			$('#' + arr[i]).removeClass('missed');
	}
	if (!response)
		$('#msg').text('Capturar los espacios marcados en rojo');
	return response;
}

function changeAhorroStatus(s) {
	if ($('#saving_status').val() == 2) {
		$('#extraWeeks')
				.html(
						"<label class=\"tag\">por</label>"
								+ "<select id=\"saving_weeks_pending\" name=\"saving_weeks_pending\"><option value=\"0\">Indefinido</option><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option></select>"
								+ "<label class=\"tag\">semanas</label>");
	} else if ($('#saving_status').val() == 1) {
		$('#extraWeeks').html('');
	}
}

function changePrestamoStatus(s) {
	if ($('#loan_status').val() == 2) {
		$('#extraWeeks')
				.html(
						"<label class=\"tag\">por</label>"
								+ "<select id=\"loan_weeks_pending\" name=\"loan_weeks_pending\"><option value=\"0\">Indefinido</option><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option><option value=\"10\">10</option></select>"
								+ "<label class=\"tag\">semanas</label>");
	} else if ($('#loan_status').val() == 1) {
		$('#extraWeeks').html('');
	}
}

function guardarAhorro() {
	flag = true;
	fields = new Array('payee_name','amount_to_save')
	flag = validate_fields(fields);
	if (flag) {
		$('#form_ahorros_consultar').submit();
	}
	return false;
}

function warning(flag){
	if(flag == 'cancelar'){
		if(confirm("Para salir de esta ventan presionar OK")){
			window.location = "ahorros";
		}
	}
	return false;
}

function registrarNomina(week){
	if(confirm('¿Seguro de guardar?'))
	{
		var url = server + "sistema/reportes/nomina/registrarNomina/" + week;
		window.location.href = url;
	}
	else
	{
		var url = server + "sistema/reportes/nomina/";
		window.location.href = url;
	} 
	
}
