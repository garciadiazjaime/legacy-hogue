var server = "http://localhost/hogue/";
//var server = "http://hogue-mxserver:8080/hogue/";
$(document).ready(function(){
    
    if( $( "#btn-search-Prestamos" ).length ){
        $( "#btn-search-Prestamos" ).click( function() {
            if( FilePrestamos._set_valida() )
                FilePrestamos._get_list_prestamos();
		return false;
        });
    }
    
    if( $( "#btn-new-prestamo" ).length ){        
        $( "#btn-new-prestamo" ).click( function() {
            if( FilePrestamos._set_valida_prestamo() )
                FilePrestamos._set_save_prestamo();
        });
    }
    
    if( $( "#list-prestamos" ).length ){
  //      FilePrestamos._get_list_prestamos();
    }
    
    
    if( $( "#employee_number" ).length ){
        /*
        $( "#employee_number" ).keyup(function() {
            FilePrestamos._get_info_empleado( $(this).val() );
        });
        */
        $( "#employee_number" ).change(function() {
            FilePrestamos._get_info_empleado( $(this).val() );
        });
    }
    
    if( $( "#loan" ).length ){
        $( "#loan" ).keyup(function() {
            FilePrestamos._get_info_calculo();
        });        
    }
    
    if( $( "#weeks_payment" ).length ){
        $( "#weeks_payment" ).change(function() {
            FilePrestamos._get_info_calculo();
        });        
    }

    if( $( "#new_weeks_payment" ).length ){
        $( "#new_weeks_payment" ).change(function() {
            FilePrestamos._get_info_calculo();
        });        
    }

    if( $( "#new_weeks_payment_check" ).length ){
        $( "#new_weeks_payment_check" ).change(function() {
            FilePrestamos._get_info_calculo();
        });        
    }
    
});

function Prestamos() {
        
    return {
        _set_muestra : function( _pagina, _campo ){
            
            if( _pagina != 0  )
                $( "#pagina" ).val( _pagina );
            
            if( _campo != ""  )
                $( "#campo" ).val( _campo );
            
            this._get_list_prestamos();
            
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
        _set_valida_prestamo: function(){
            
            $( "#msg" ).text( "" );
             
            if( $( "#employee_number" ).val() == "" ){
                $( "#msg" ).text( "Favor de ingresar numero de empleado." );
                return false;
            }
            
            if( $( "#loan" ).val() == "" ){
                $( "#msg" ).text( "Favor de ingresar monto del prestamo solicitado." );
                return false;
            }
            
            if( $( "#employee_name" ).val() == "" ){
                $( "#msg" ).text( "Favor de ingresar nombre del empleado." );
                return false;
            }
            
            if( $( "#nprestamos" ).val() == 3 ){
                $( "#msg" ).text( "No se puede generar presta ya que el empleado cuenta con 3 prestamos activos." );
                return false;
            }
            
            return true;
            
        },
        _get_info_calculo: function(){
            
            var _monto = $( "#loan" ).val();
            if( _monto == "" )
                _monto = 0;
            
            var _tasa = $( "#porcentaje" ).val();

            if( $( "#new_weeks_payment_check" ).length ){
                if($("#new_weeks_payment_check").is(':checked')){
                    var _plazo = $( "#new_weeks_payment" ).val();
                } else{
                    var _plazo = $( "#weeks_payment" ).val();
                }
            } else{
                var _plazo = $( "#weeks_payment" ).val();
            }
            
            
            var _iva = parseFloat( _monto ) * ( parseFloat( _tasa ) / 100 ) ;
            var _total = parseFloat( _monto ) + ( parseFloat( _iva ) );
            var _parcialidades = parseFloat( _total ) / ( parseInt( _plazo ) );
            
            $( "#pago-total" ).text( "$ " + _total.toFixed(2) );
            $( "#interes-prestamo" ).text( "$ " + _iva.toFixed(2) + " [" + _tasa + "%]" );
            $( "#pago-semanal" ).text( "$ " + _parcialidades.toFixed(2) );
            
        },
        _limpia_campos : function(){
            
            $( "#pago-total" ).text( "$ 0.00" );
            $( "#interes-prestamo" ).text( "$ 0.00" );
            $( "#pago-semanal" ).text( "$ 0.00" );
            $( "#employee_name" ).val( '' );
            $( "#porcentaje" ).val( 15 );
            $( "#nprestamos" ).val( 0 );
            $( "#loan" ).val( '' );
            $( "#employee_number" ).val( '' );
            $( "#weeks_payment" ).val( 2 );
            
        },
        _set_save_prestamo: function(){
             
            var _myself = this;      
            $.ajax({
                type: "POST",
                data: $( "#form-new-prestamos" ).serialize(),
                url: server + "sistema/savePrestamos",
                beforeSend: function() {
                    //$( "#msj").html("Obteniendo informacion de usuario ");
                },
                success: function (response) {
                    if( response ){
                        $( "#msg" ).html( "Se genero correctamente el prestamo solicitado..." );
                        _myself._limpia_campos();
                    } else{
                        $( "#msg" ).html( "No se pudo generar el prestamo solicitado..." );
                    }
                },
                error: function (xhr, ajaxOptions, thrownError){
                    
                }
            });
            
        },
        _get_list_prestamos : function(){
            
            var _myself = this;      
            $.ajax({
                type: "POST",
                data: $( "#form-filtros-prestamos" ).serialize(),
                url: server + "sistema/prestamos/getPrestamos",
                beforeSend: function() {
                    //$( "#msj").html("Obteniendo informacion de usuario ");
                    console.log( $( "#form-filtros-prestamos" ).serialize());
                },
                success: function (response) {
                    $( "#list-prestamos" ).html( response )
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
                    no_emp : emp_no
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
                        $( "#porcentaje" ).val( _Info[1] );
                        $( "#nprestamos" ).val( _Info[2] );
                        $( "#usrid" ).val( _Info[3] );
                    } else {
                        $( "#employee_name" ).val( '' )
                        $( "#porcentaje" ).val(  '15' );
                        $( "#nprestamos" ).val( '0' );
                        $( "#usrid" ).val( '' );
                    }
                    _myself._get_info_calculo();
                },
                error: function (xhr, ajaxOptions, thrownError){
                    
                }
            });           
            
        }
    }
    
}

var FilePrestamos = new Prestamos();
