<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "sistema";

$route['sistema/ahorros'] = "ahorros";
$route['sistema/ahorros/nuevo'] = "ahorros/nuevo";
$route['sistema/ahorros/guardar'] = "ahorros/guardar";
$route['sistema/ahorros/ver_registros/(:num)'] = "ahorros/ver_registros/$1";
$route['sistema/ahorros/delete/(:num)'] = "ahorros/delete/$1";
$route['sistema/ahorros/ver/(:num)'] = "ahorros/ver/$1";
$route['sistema/ahorros/historial/(:num)/(:num)'] = "ahorros/historial/$1/$2";
$route['sistema/ahorros/getAhorradores'] = "ahorros/getAhorradores";

$route['sistema/prestamos'] = "prestamos";
$route['sistema/prestamos/nuevo'] = "prestamos/nuevo";
$route['sistema/prestamos/ver/(:num)'] = "prestamos/ver/$1";
$route['sistema/prestamos/ver_registros/(:num)'] = "prestamos/ver_registros/$1";
$route['sistema/prestamos/delete/(:num)'] = "prestamos/delete/$1";
$route['sistema/prestamos/getPrestamos'] = 'prestamos/getPrestamos';
$route['sistema/prestamos/historial/(:num)/(:num)'] = "prestamos/historial/$1/$2";

$route['sistema/reportes'] = "reportes/index/$1";
$route['sistema/reportes/nomina'] = "reportes/nomina";
$route['sistema/reportes/ahorros'] = "reportes/ahorros";
$route['sistema/reportes/getReporteGeneral'] = "reportes/getReporteGeneral";
$route['sistema/reportes/getReporteAhorros'] = "reportes/getReporteAhorros";
$route['sistema/reportes/getAhorrosExcel'] = "reportes/getAhorrosExcel";
$route['sistema/reportes/nomina/getReporteNominas'] = "reportes/getReporteNominas";
$route['sistema/reportes/nomina/getNominaExcel/(:num)'] = "reportes/getNominaExcel/$1";
$route['sistema/reportes/nomina/getNominaExcel_2/(:num)'] = "reportes/download_nomina_excel/$1";
$route['sistema/reportes/nomina/registrarNomina/(:num)'] = "reportes/registrarNomina/$1";

$route['sistema/reportes/nomina_2'] = "reportes/nomina_2";
$route['sistema/reportes/prestamos'] = "reportes/prestamos";
$route['sistema/reportes/prestamos/(:num)'] = "reportes/prestamos/$1";
$route['sistema/reportes/ahorros_2'] = "reportes/ahorros_2";
$route['sistema/reportes/ahorros_2/(:num)'] = "reportes/ahorros_2/$1";

$route['sistema/users/(:num)'] = 'users/index/$1';
$route['sistema/users'] = "users";
$route['sistema/users/create'] = "users/create";
$route['sistema/users/delete/(:num)'] = "users/delete/$1";
$route['sistema/users/edit/(:num)'] = "users/edit/$1";

$route['sistema/periodos'] = "periodos";
$route['sistema/periodos/validar_nomina'] = "periodos/validar_nomina";
$route['sistema/periodos/validar_nomina_error'] = "periodos/validar_nomina_error";
$route['sistema/periodos/nuevo'] = "periodos/nuevo";
$route['sistema/periodos/editar/(:num)'] = "periodos/editar/$1";
$route['sistema/periodos/eliminar/(:num)'] = "periodos/eliminar/$1";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
