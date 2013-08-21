//var server = "http://localhost/hogue/";
var server = "http://hogue-mxserver:8080/hogue/";
$(document).ready(function(){
    
    if( $( "#btn-search-Ahorros" ).length ){
        $( "#btn-search-Ahorros" ).click( function() {
		if( ObjAhorros._set_valida() )
			ObjAhorros._get_list_Ahorros();
		return false;
        });
    }
    
    if( $( "#btn-new-ahorro" ).length ){        
        $( "#btn-new-ahorro" ).click( function() {
            if( ObjAhorros._set_valida_ahorro() )
                ObjAhorros._set_save_ahorro();
        	return false;
        });
    }
    /*
    if( $( "#list-Ahorros" ).length ){
        ObjAhorros._get_list_Ahorros();
    }
    */
    
    if( $( "#employee_number" ).length ){
        /*$( "#employee_number" ).keyup(function() {
            ObjAhorros._get_info_empleado( $(this).val() );
        });*/
        $( "#employee_number" ).change(function() {
            ObjAhorros._get_info_empleado( $(this).val() );
		console.log('getting info emp');
        });
    }
/*    
    if( $( "#loan" ).length ){
        $( "#loan" ).keyup(function() {
            ObjAhorros._get_info_calculo();
        });        
    }
    
    if( $( "#weeks_payment" ).length ){
        $( "#weeks_payment" ).change(function() {
            ObjAhorros._get_info_calculo();
        });        
    }
   */ 
});

function Ahorros() {
        
    return {
        _set_muestra : function( _pagina, _campo ){
            
            if( _pagina != 0  )
                $( "#pagina" ).val( _pagina );
            
            if( _campo != ""  )
                $( "#campo" ).val( _campo );
            
            this._get_list_Ahorros();
            
        },
        _set_valida : function(){
            
            $( "#msg" ).text( "" );
             
            if( $( "#week_from" ).val() > $( "#week_until" ).val() ){
                $( "#msg" ).text( "La 2da semana debe ser igual o mayor que la primera." );
                return false;
            }
            
            if( $( "#loaned_from" ).val() > $( "#loaned_until" ).val() ){
                $( "#msg" ).text( "El rango de monto prestado es incorrecto." );
                return false;
            }
            
            if( $( "#payments_from" ).val() > $( "#payments_until" ).val() ){
                $( "#msg" ).text( "El rango de plazo es incorrecto." );
                return false;
            }
            
            return true;
            
        },
        _set_valida_ahorro: function(){
            
            $( "#msg" ).text( "" );
             
            if( $( "#employee_number" ).val() == "" ){
                $( "#msg" ).text( "Favor de ingresar numero de empleado." );
                return false;
            }
            
            if( $( "#amount_to_save" ).val() == "" ){
                $( "#msg" ).text( "Favor de ingresar monto a ahorrar." );
                return false;
            }
            
            if( $( "#nAhorros" ).val() == 1 ){
                $( "#msg" ).html( "No se puede generar pr&eacute;stamo ya que el empleado cuenta con 1 Ahorro activo." );
                return false;
            }
            
            return true;
            
        },
        _get_info_calculo: function(){
            
            var _monto = $( "#loan" ).val();
            if( _monto == "" )
                _monto = 0;
            
            var _tasa = $( "#porcentaje" ).val();
            var _plazo = $( "#weeks_payment" ).val();
            
            var _iva = parseFloat( _monto ) * ( parseFloat( _tasa ) / 100 ) ;
            var _total = parseFloat( _monto ) + ( parseFloat( _iva ) );
            var _parcialidades = parseFloat( _total ) / ( parseInt( _plazo ) );
            
            $( "#pago-total" ).text( "$ " + _total.toFixed(2) );
            $( "#interes-ahorro" ).text( "$ " + _iva.toFixed(2) + " [" + _tasa + "%]" );
            $( "#pago-semanal" ).text( "$ " + _parcialidades.toFixed(2) );
            
        },
        _limpia_campos : function(){
        	$( "#nAhorros" ).val( 0 );
        	$( "#employee_number" ).val( '' );
            $( "#employee_name" ).val( '' );
            $( "#amount_to_save" ).val( '' );
            $( "#saving_starts" ).val( 0 );
            $( "#payee_name" ).val( '' );
        },
        _set_save_ahorro: function(){
            var _myself = this;      
            $.ajax({
                type: "POST",
                data: $("#form-new-Ahorro" ).serialize(),
                url: server + "sistema/ahorros/guardar",
                beforeSend: function() {
                    //$( "#msj").html("Obteniendo informacion de usuario ");
                },
                success: function (response) {
                	console.log(response);
                    if( response ){
                        $( "#msg" ).html( response );
                        _myself._limpia_campos();
                    } else{
                        $( "#msg" ).html( "No se pudo generar el ahorro solicitado..." );
                    }
                },
                error: function (xhr, ajaxOptions, thrownError){
                    
                }
            });
            
        },
        _get_list_Ahorros : function(){
            
            var _myself = this;      
            $.ajax({
                type: "POST",
                data: $( "#form-filtros-Ahorros" ).serialize(),
                url: server + "ahorros/getAhorradores",
                beforeSend: function() {
			loading('ahorradores');
                },
                success: function (response) {
			$('#ahorradores').html(response);
                },
                error: function (xhr, ajaxOptions, thrownError){
                    
                }
            });           
            
        },
        _get_info_empleado : function( emp_no ){
            var _myself = this;      
            $.ajax({
                type: "POST",
                data: {
                    no_emp : emp_no,
                    flag : 'ahorro'
                },
                url: server + "users/getInfo",
                beforeSend: function() {
                    //$( "#msj").html("Obteniendo informacion de usuario ");
                },
                success: function (response) {
                	console.log(response);
                    if( response != "" ){
                        var _Info = response.split( "|" );
                        $( "#employee_name" ).val( _Info[0] );
                        $( "#usrid" ).val( _Info[1] );
                        $( "#nAhorros" ).val( _Info[2] );
                    } else {
                        $( "#employee_name" ).val( '' )
                        $( "#nAhorros" ).val( '0' );
                        $( "#usrid" ).val( '' );
                    }
                    //_myself._get_info_calculo();
                },
                error: function (xhr, ajaxOptions, thrownError){
                    
                }
            });           
            
        }
    }
    
}

var ObjAhorros = new Ahorros();
