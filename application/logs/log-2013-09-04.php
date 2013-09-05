<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-09-04 00:00:40 --> Config Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:00:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:00:40 --> URI Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Router Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Output Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Security Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Input Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:00:40 --> Language Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Loader Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Controller Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:00:40 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Session Class Initialized
DEBUG - 2013-09-04 00:00:40 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:00:40 --> Session routines successfully run
DEBUG - 2013-09-04 00:00:40 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:00:40 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:00:40 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:00:40 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:00:40 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:00:40 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:00:40 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:00:40 --> Final output sent to browser
DEBUG - 2013-09-04 00:00:40 --> Total execution time: 0.0531
DEBUG - 2013-09-04 00:00:42 --> Config Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:00:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:00:42 --> URI Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Router Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Output Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Security Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Input Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:00:42 --> Language Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Loader Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Controller Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:00:42 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Session Class Initialized
DEBUG - 2013-09-04 00:00:42 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:00:42 --> Session routines successfully run
DEBUG - 2013-09-04 00:00:42 --> User Agent Class Initialized
INFO  - 2013-09-04 00:00:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:00:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:00:42 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:00:42 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:00:42 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:00:42 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:00:42 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:00:42 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:00:42 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:00:42 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:00:42 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:00:42 --> Final output sent to browser
DEBUG - 2013-09-04 00:00:42 --> Total execution time: 0.1591
DEBUG - 2013-09-04 00:01:04 --> Config Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:01:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:01:04 --> URI Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Router Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Output Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Security Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Input Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:01:04 --> Language Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Loader Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Controller Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:01:04 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Session Class Initialized
DEBUG - 2013-09-04 00:01:04 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:01:04 --> Session routines successfully run
DEBUG - 2013-09-04 00:01:04 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:01:04 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:01:04 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:01:04 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:01:04 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:01:04 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:01:04 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:01:04 --> Final output sent to browser
DEBUG - 2013-09-04 00:01:04 --> Total execution time: 0.1221
DEBUG - 2013-09-04 00:01:06 --> Config Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:01:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:01:06 --> URI Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Router Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Output Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Security Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Input Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:01:06 --> Language Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Loader Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Controller Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:01:06 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Session Class Initialized
DEBUG - 2013-09-04 00:01:06 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:01:06 --> Session routines successfully run
DEBUG - 2013-09-04 00:01:06 --> User Agent Class Initialized
INFO  - 2013-09-04 00:01:06 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
DEBUG - 2013-09-04 00:01:07 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:01:07 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:01:07 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:01:07 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:01:07 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:01:07 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:01:07 --> Final output sent to browser
DEBUG - 2013-09-04 00:01:07 --> Total execution time: 0.3274
DEBUG - 2013-09-04 00:10:02 --> Config Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:10:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:10:02 --> URI Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Router Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Output Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Security Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Input Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:10:02 --> Language Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Loader Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Controller Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:10:02 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Session Class Initialized
DEBUG - 2013-09-04 00:10:02 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:10:02 --> Session routines successfully run
DEBUG - 2013-09-04 00:10:02 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:10:02 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:10:02 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:10:02 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:10:02 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:10:02 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:10:02 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:10:02 --> Final output sent to browser
DEBUG - 2013-09-04 00:10:02 --> Total execution time: 0.0792
DEBUG - 2013-09-04 00:10:03 --> Config Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:10:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:10:03 --> URI Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Router Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Output Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Security Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Input Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:10:03 --> Language Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Loader Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Controller Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:10:03 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Session Class Initialized
DEBUG - 2013-09-04 00:10:03 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:10:03 --> Session routines successfully run
DEBUG - 2013-09-04 00:10:03 --> User Agent Class Initialized
INFO  - 2013-09-04 00:10:03 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:10:03 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:10:03 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 36
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:10:03 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:10:03 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:10:03 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:10:03 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:10:03 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:10:03 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:10:03 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:10:03 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:10:03 --> Final output sent to browser
DEBUG - 2013-09-04 00:10:03 --> Total execution time: 0.2721
DEBUG - 2013-09-04 00:10:14 --> Config Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:10:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:10:14 --> URI Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Router Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Output Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Security Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Input Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:10:14 --> Language Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Loader Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Controller Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:10:14 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Session Class Initialized
DEBUG - 2013-09-04 00:10:14 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:10:14 --> Session routines successfully run
DEBUG - 2013-09-04 00:10:14 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:10:14 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 00:10:14 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 00:10:14 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:10:14 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:10:14 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:10:14 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:10:14 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:10:14 --> Final output sent to browser
DEBUG - 2013-09-04 00:10:14 --> Total execution time: 0.0711
DEBUG - 2013-09-04 00:10:27 --> Config Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:10:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:10:27 --> URI Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Router Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Output Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Security Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Input Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:10:27 --> Language Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Loader Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Controller Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:10:27 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Session Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:10:27 --> Session routines successfully run
DEBUG - 2013-09-04 00:10:27 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:10:27 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:10:27 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:10:27 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:10:27 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:10:27 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:10:27 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:10:27 --> Final output sent to browser
DEBUG - 2013-09-04 00:10:27 --> Total execution time: 0.0536
DEBUG - 2013-09-04 00:10:27 --> Config Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:10:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:10:27 --> URI Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Router Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Output Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Security Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Input Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:10:27 --> Language Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Loader Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Controller Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:10:27 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Model Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Session Class Initialized
DEBUG - 2013-09-04 00:10:27 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:10:27 --> Session routines successfully run
DEBUG - 2013-09-04 00:10:27 --> User Agent Class Initialized
INFO  - 2013-09-04 00:10:27 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
DEBUG - 2013-09-04 00:10:28 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:10:28 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:10:28 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:10:28 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:10:28 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:10:28 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:10:28 --> Final output sent to browser
DEBUG - 2013-09-04 00:10:28 --> Total execution time: 0.3127
DEBUG - 2013-09-04 00:13:06 --> Config Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:13:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:13:06 --> URI Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Router Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Output Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Security Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Input Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:13:06 --> Language Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Loader Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Controller Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:13:06 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Session Class Initialized
DEBUG - 2013-09-04 00:13:06 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:13:06 --> Session routines successfully run
DEBUG - 2013-09-04 00:13:06 --> User Agent Class Initialized
INFO  - 2013-09-04 00:13:06 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 00:13:06 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:13:06 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:13:06 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:13:06 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:13:06 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:13:06 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:13:06 --> Final output sent to browser
DEBUG - 2013-09-04 00:13:06 --> Total execution time: 0.3778
DEBUG - 2013-09-04 00:13:17 --> Config Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:13:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:13:17 --> URI Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Router Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Output Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Security Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Input Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:13:17 --> Language Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Loader Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Controller Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:13:17 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Session Class Initialized
DEBUG - 2013-09-04 00:13:17 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:13:17 --> Session routines successfully run
DEBUG - 2013-09-04 00:13:17 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:13:17 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:13:17 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:13:17 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:13:17 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:13:17 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:13:17 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:13:17 --> Final output sent to browser
DEBUG - 2013-09-04 00:13:17 --> Total execution time: 0.0501
DEBUG - 2013-09-04 00:13:21 --> Config Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:13:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:13:21 --> URI Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Router Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Output Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Security Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Input Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:13:21 --> Language Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Loader Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Controller Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:13:21 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Session Class Initialized
DEBUG - 2013-09-04 00:13:21 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:13:21 --> Session routines successfully run
DEBUG - 2013-09-04 00:13:21 --> User Agent Class Initialized
INFO  - 2013-09-04 00:13:21 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:13:21 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:13:21 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:13:21 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:13:21 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:13:21 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:13:21 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:13:21 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:13:21 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:13:21 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:13:21 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:13:21 --> Final output sent to browser
DEBUG - 2013-09-04 00:13:21 --> Total execution time: 0.1054
DEBUG - 2013-09-04 00:13:37 --> Config Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:13:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:13:37 --> URI Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Router Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Output Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Security Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Input Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:13:37 --> Language Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Loader Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Controller Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:13:37 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Session Class Initialized
DEBUG - 2013-09-04 00:13:37 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:13:37 --> Session routines successfully run
DEBUG - 2013-09-04 00:13:37 --> User Agent Class Initialized
INFO  - 2013-09-04 00:13:37 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 49 AND periodo_id = 8
INFO  - 2013-09-04 00:13:37 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 49 AND periodo_id = 8
INFO  - 2013-09-04 00:13:37 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 49
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:13:37 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:13:37 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:13:37 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:13:37 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:13:37 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:13:37 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:13:37 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:13:37 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:13:37 --> Final output sent to browser
DEBUG - 2013-09-04 00:13:37 --> Total execution time: 0.1325
DEBUG - 2013-09-04 00:13:48 --> Config Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:13:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:13:48 --> URI Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Router Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Output Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Security Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Input Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:13:48 --> Language Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Loader Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Controller Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:13:48 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Session Class Initialized
DEBUG - 2013-09-04 00:13:48 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:13:48 --> Session routines successfully run
DEBUG - 2013-09-04 00:13:48 --> User Agent Class Initialized
INFO  - 2013-09-04 00:13:48 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:13:48 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:13:48 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:13:48 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:13:48 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:13:48 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:13:48 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:13:48 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:13:48 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:13:48 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:13:48 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:13:49 --> Final output sent to browser
DEBUG - 2013-09-04 00:13:49 --> Total execution time: 0.5122
DEBUG - 2013-09-04 00:13:57 --> Config Class Initialized
DEBUG - 2013-09-04 00:13:57 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:13:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:13:58 --> URI Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Router Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Output Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Security Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Input Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:13:58 --> Language Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Loader Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Controller Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:13:58 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Session Class Initialized
DEBUG - 2013-09-04 00:13:58 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:13:58 --> Session routines successfully run
DEBUG - 2013-09-04 00:13:58 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:13:58 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:13:58 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:13:58 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:13:58 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:13:58 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:13:58 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:13:58 --> Final output sent to browser
DEBUG - 2013-09-04 00:13:58 --> Total execution time: 0.2725
DEBUG - 2013-09-04 00:14:01 --> Config Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:14:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:14:01 --> URI Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Router Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Output Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Security Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Input Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:14:01 --> Language Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Loader Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Controller Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:14:01 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Session Class Initialized
DEBUG - 2013-09-04 00:14:01 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:14:01 --> Session routines successfully run
DEBUG - 2013-09-04 00:14:01 --> User Agent Class Initialized
INFO  - 2013-09-04 00:14:01 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 42 AND periodo_id = 8
DEBUG - 2013-09-04 00:14:01 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:14:01 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:14:01 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:14:01 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:14:01 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:14:01 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:14:01 --> Final output sent to browser
DEBUG - 2013-09-04 00:14:01 --> Total execution time: 0.3195
DEBUG - 2013-09-04 00:14:11 --> Config Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:14:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:14:11 --> URI Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Router Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Output Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Security Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Input Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:14:11 --> Language Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Loader Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Controller Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:14:11 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Session Class Initialized
DEBUG - 2013-09-04 00:14:11 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:14:11 --> Session routines successfully run
DEBUG - 2013-09-04 00:14:11 --> User Agent Class Initialized
INFO  - 2013-09-04 00:14:11 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 00:14:11 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:14:11 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:14:11 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:14:11 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:14:11 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:14:11 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:14:11 --> Final output sent to browser
DEBUG - 2013-09-04 00:14:11 --> Total execution time: 0.3160
DEBUG - 2013-09-04 00:14:17 --> Config Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:14:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:14:17 --> URI Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Router Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Output Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Security Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Input Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:14:17 --> Language Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Loader Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Controller Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:14:17 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Session Class Initialized
DEBUG - 2013-09-04 00:14:17 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:14:17 --> Session routines successfully run
DEBUG - 2013-09-04 00:14:17 --> User Agent Class Initialized
INFO  - 2013-09-04 00:14:17 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
DEBUG - 2013-09-04 00:14:17 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:14:17 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:14:17 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:14:17 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:14:17 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:14:17 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:14:17 --> Final output sent to browser
DEBUG - 2013-09-04 00:14:17 --> Total execution time: 0.3162
DEBUG - 2013-09-04 00:16:02 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:02 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:02 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:02 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:02 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:02 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:02 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:16:02 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:16:02 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:02 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:02 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:02 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:02 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:02 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:02 --> Total execution time: 0.0784
DEBUG - 2013-09-04 00:16:05 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:05 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:05 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:05 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:05 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:05 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:05 --> User Agent Class Initialized
INFO  - 2013-09-04 00:16:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 00:16:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 00:16:05 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =34
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:16:05 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =34
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:16:05 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:16:05 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:16:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:05 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:05 --> Total execution time: 0.1560
DEBUG - 2013-09-04 00:16:17 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:17 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:17 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:17 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:17 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:17 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:17 --> User Agent Class Initialized
INFO  - 2013-09-04 00:16:17 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:16:17 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:16:17 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:16:17 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:16:17 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:16:17 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:16:17 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:17 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:17 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:17 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:17 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:17 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:17 --> Total execution time: 0.1061
DEBUG - 2013-09-04 00:16:24 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:24 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:24 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:24 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:24 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:24 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:24 --> User Agent Class Initialized
INFO  - 2013-09-04 00:16:24 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 44 AND periodo_id = 8
INFO  - 2013-09-04 00:16:24 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 44 AND periodo_id = 8
INFO  - 2013-09-04 00:16:24 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 44
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:16:24 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:16:24 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:16:24 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:16:24 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:24 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:24 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:24 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:24 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:24 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:24 --> Total execution time: 0.1039
DEBUG - 2013-09-04 00:16:28 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:28 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:28 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:28 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:28 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:28 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:28 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:16:28 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:16:28 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:28 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:28 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:28 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:28 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:28 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:28 --> Total execution time: 0.0519
DEBUG - 2013-09-04 00:16:32 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:32 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:32 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:32 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:32 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:32 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:32 --> User Agent Class Initialized
INFO  - 2013-09-04 00:16:32 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
DEBUG - 2013-09-04 00:16:32 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:16:32 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:32 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:32 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:32 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:32 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:32 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:32 --> Total execution time: 0.3265
DEBUG - 2013-09-04 00:16:38 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:38 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:38 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:38 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:38 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:38 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:38 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:39 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:39 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:39 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:39 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:39 --> User Agent Class Initialized
INFO  - 2013-09-04 00:16:39 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 00:16:39 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:16:39 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:39 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:39 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:39 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:39 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:39 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:39 --> Total execution time: 0.3397
DEBUG - 2013-09-04 00:16:46 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:46 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:46 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:46 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:46 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:46 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:46 --> User Agent Class Initialized
INFO  - 2013-09-04 00:16:46 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
DEBUG - 2013-09-04 00:16:47 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 00:16:47 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:47 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:47 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:47 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:47 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:47 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:47 --> Total execution time: 0.3227
DEBUG - 2013-09-04 00:16:58 --> Config Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:16:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:16:58 --> URI Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Router Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Output Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Security Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Input Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:16:58 --> Language Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Loader Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Controller Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:16:58 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Model Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Session Class Initialized
DEBUG - 2013-09-04 00:16:58 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:16:58 --> Session routines successfully run
DEBUG - 2013-09-04 00:16:58 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:16:58 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 00:16:58 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 00:16:58 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:16:58 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:16:58 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:16:58 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:16:58 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:16:58 --> Final output sent to browser
DEBUG - 2013-09-04 00:16:58 --> Total execution time: 0.1486
DEBUG - 2013-09-04 00:17:02 --> Config Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:17:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:17:02 --> URI Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Router Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Output Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Security Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Input Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:17:02 --> Language Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Loader Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Controller Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:17:02 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Session Class Initialized
DEBUG - 2013-09-04 00:17:02 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:17:02 --> Session routines successfully run
DEBUG - 2013-09-04 00:17:02 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:17:03 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:17:03 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:17:03 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:17:03 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:17:03 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:17:03 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:17:03 --> Final output sent to browser
DEBUG - 2013-09-04 00:17:03 --> Total execution time: 0.0522
DEBUG - 2013-09-04 00:17:05 --> Config Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:17:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:17:05 --> URI Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Router Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Output Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Security Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Input Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:17:05 --> Language Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Loader Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Controller Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:17:05 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Session Class Initialized
DEBUG - 2013-09-04 00:17:05 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:17:05 --> Session routines successfully run
DEBUG - 2013-09-04 00:17:05 --> User Agent Class Initialized
INFO  - 2013-09-04 00:17:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 00:17:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 00:17:05 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =34
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:17:05 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =34
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:17:05 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:17:05 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:17:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:17:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:17:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:17:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:17:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:17:05 --> Final output sent to browser
DEBUG - 2013-09-04 00:17:05 --> Total execution time: 0.1537
DEBUG - 2013-09-04 00:17:16 --> Config Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:17:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:17:16 --> URI Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Router Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Output Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Security Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Input Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:17:16 --> Language Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Loader Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Controller Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:17:16 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Session Class Initialized
DEBUG - 2013-09-04 00:17:16 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:17:16 --> Session routines successfully run
DEBUG - 2013-09-04 00:17:16 --> User Agent Class Initialized
INFO  - 2013-09-04 00:17:16 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:17:16 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:17:16 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:17:16 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:17:16 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:17:16 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:17:16 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:17:16 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:17:16 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:17:16 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:17:16 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:17:16 --> Final output sent to browser
DEBUG - 2013-09-04 00:17:16 --> Total execution time: 0.1059
DEBUG - 2013-09-04 00:17:23 --> Config Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:17:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:17:23 --> URI Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Router Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Output Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Security Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Input Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:17:23 --> Language Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Loader Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Controller Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:17:23 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Model Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Session Class Initialized
DEBUG - 2013-09-04 00:17:23 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:17:23 --> Session routines successfully run
DEBUG - 2013-09-04 00:17:23 --> User Agent Class Initialized
INFO  - 2013-09-04 00:17:23 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:17:23 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:17:23 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 36
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:17:23 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:17:23 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:17:23 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:17:23 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:17:23 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:17:23 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:17:23 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:17:23 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:17:23 --> Final output sent to browser
DEBUG - 2013-09-04 00:17:23 --> Total execution time: 0.1072
DEBUG - 2013-09-04 00:19:53 --> Config Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:19:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:19:53 --> URI Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Router Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Output Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Security Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Input Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:19:53 --> Language Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Loader Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Controller Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:19:53 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Model Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Session Class Initialized
DEBUG - 2013-09-04 00:19:53 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:19:53 --> Session routines successfully run
DEBUG - 2013-09-04 00:19:53 --> User Agent Class Initialized
DEBUG - 2013-09-04 00:19:53 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:19:53 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:19:53 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:19:53 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:19:53 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:19:53 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:19:53 --> Final output sent to browser
DEBUG - 2013-09-04 00:19:53 --> Total execution time: 0.0695
DEBUG - 2013-09-04 00:20:04 --> Config Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:20:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:20:04 --> URI Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Router Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Output Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Security Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Input Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:20:04 --> Language Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Loader Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Controller Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:20:04 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Session Class Initialized
DEBUG - 2013-09-04 00:20:04 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:20:04 --> Session routines successfully run
DEBUG - 2013-09-04 00:20:04 --> User Agent Class Initialized
INFO  - 2013-09-04 00:20:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:20:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 00:20:04 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 36
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:20:04 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:20:04 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:20:04 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:20:04 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:20:04 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:20:04 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:20:04 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:20:04 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:20:04 --> Final output sent to browser
DEBUG - 2013-09-04 00:20:04 --> Total execution time: 0.1066
DEBUG - 2013-09-04 00:20:41 --> Config Class Initialized
DEBUG - 2013-09-04 00:20:41 --> Hooks Class Initialized
DEBUG - 2013-09-04 00:20:41 --> Utf8 Class Initialized
DEBUG - 2013-09-04 00:20:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 00:20:41 --> URI Class Initialized
DEBUG - 2013-09-04 00:20:41 --> Router Class Initialized
DEBUG - 2013-09-04 00:20:41 --> Output Class Initialized
DEBUG - 2013-09-04 00:20:41 --> Security Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Input Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 00:20:42 --> Language Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Loader Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Controller Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Helper loaded: url_helper
DEBUG - 2013-09-04 00:20:42 --> Database Driver Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Model Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Session Class Initialized
DEBUG - 2013-09-04 00:20:42 --> Helper loaded: string_helper
DEBUG - 2013-09-04 00:20:42 --> Session routines successfully run
DEBUG - 2013-09-04 00:20:42 --> User Agent Class Initialized
INFO  - 2013-09-04 00:20:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:20:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 00:20:42 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:20:42 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 00:20:42 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 00:20:42 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 00:20:42 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 00:20:42 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 00:20:42 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 00:20:42 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 00:20:42 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 00:20:42 --> Final output sent to browser
DEBUG - 2013-09-04 00:20:42 --> Total execution time: 0.1071
DEBUG - 2013-09-04 01:28:35 --> Config Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:28:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:28:35 --> URI Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Router Class Initialized
DEBUG - 2013-09-04 01:28:35 --> No URI present. Default controller set.
DEBUG - 2013-09-04 01:28:35 --> Output Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Security Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Input Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:28:35 --> Language Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Loader Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Controller Class Initialized
DEBUG - 2013-09-04 01:28:35 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:28:35 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Session Class Initialized
DEBUG - 2013-09-04 01:28:36 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:28:36 --> Session routines successfully run
DEBUG - 2013-09-04 01:28:36 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Config Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:28:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:28:37 --> URI Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Router Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Output Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Security Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Input Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:28:37 --> Language Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Loader Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Controller Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:28:37 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Session Class Initialized
DEBUG - 2013-09-04 01:28:37 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:28:37 --> Session routines successfully run
DEBUG - 2013-09-04 01:28:37 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:28:37 --> File loaded: application/views/be/dashboard.php
DEBUG - 2013-09-04 01:28:37 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:28:37 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:28:37 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:28:37 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:28:37 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:28:37 --> Final output sent to browser
DEBUG - 2013-09-04 01:28:37 --> Total execution time: 0.2162
DEBUG - 2013-09-04 01:28:38 --> Config Class Initialized
DEBUG - 2013-09-04 01:28:38 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:28:38 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:28:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:28:38 --> URI Class Initialized
DEBUG - 2013-09-04 01:28:38 --> Router Class Initialized
ERROR - 2013-09-04 01:28:38 --> 404 Page Not Found --> favicon.ico
DEBUG - 2013-09-04 01:28:41 --> Config Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:28:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:28:41 --> URI Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Router Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Output Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Security Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Input Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:28:41 --> Language Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Loader Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Controller Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:28:41 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Session Class Initialized
DEBUG - 2013-09-04 01:28:41 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:28:41 --> Session routines successfully run
DEBUG - 2013-09-04 01:28:41 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:28:42 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:28:42 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:28:42 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:28:42 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:28:42 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:28:42 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:28:42 --> Final output sent to browser
DEBUG - 2013-09-04 01:28:42 --> Total execution time: 0.5296
DEBUG - 2013-09-04 01:28:57 --> Config Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:28:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:28:57 --> URI Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Router Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Output Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Security Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Input Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:28:57 --> Language Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Loader Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Controller Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:28:57 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Session Class Initialized
DEBUG - 2013-09-04 01:28:57 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:28:57 --> Session routines successfully run
DEBUG - 2013-09-04 01:28:57 --> User Agent Class Initialized
ERROR - 2013-09-04 01:28:57 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:28:57 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:28:57 --> Final output sent to browser
DEBUG - 2013-09-04 01:28:57 --> Total execution time: 0.3655
DEBUG - 2013-09-04 01:28:59 --> Config Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:28:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:28:59 --> URI Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Router Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Output Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Security Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Input Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:28:59 --> Language Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Loader Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Controller Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:28:59 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Session Class Initialized
DEBUG - 2013-09-04 01:28:59 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:28:59 --> Session routines successfully run
DEBUG - 2013-09-04 01:28:59 --> User Agent Class Initialized
ERROR - 2013-09-04 01:28:59 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:28:59 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:28:59 --> Final output sent to browser
DEBUG - 2013-09-04 01:28:59 --> Total execution time: 0.3585
DEBUG - 2013-09-04 01:31:30 --> Config Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:31:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:31:30 --> URI Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Router Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Output Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Security Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Input Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:31:30 --> Language Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Loader Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Controller Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:31:30 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Session Class Initialized
DEBUG - 2013-09-04 01:31:30 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:31:30 --> Session routines successfully run
DEBUG - 2013-09-04 01:31:30 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:31:30 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:31:30 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:31:30 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:31:30 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:31:30 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:31:30 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:31:30 --> Final output sent to browser
DEBUG - 2013-09-04 01:31:30 --> Total execution time: 0.1366
DEBUG - 2013-09-04 01:31:41 --> Config Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:31:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:31:41 --> URI Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Router Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Output Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Security Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Input Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:31:41 --> Language Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Loader Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Controller Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:31:41 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Session Class Initialized
DEBUG - 2013-09-04 01:31:41 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:31:41 --> Session routines successfully run
DEBUG - 2013-09-04 01:31:41 --> User Agent Class Initialized
INFO  - 2013-09-04 01:31:41 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 01:31:41 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 01:31:41 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:31:41 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:31:41 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 01:31:41 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:31:41 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:31:41 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:31:41 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:31:41 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:31:41 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:31:41 --> Final output sent to browser
DEBUG - 2013-09-04 01:31:41 --> Total execution time: 0.1262
DEBUG - 2013-09-04 01:31:47 --> Config Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:31:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:31:47 --> URI Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Router Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Output Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Security Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Input Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:31:47 --> Language Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Loader Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Controller Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:31:47 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Session Class Initialized
DEBUG - 2013-09-04 01:31:47 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:31:47 --> Session routines successfully run
DEBUG - 2013-09-04 01:31:47 --> User Agent Class Initialized
INFO  - 2013-09-04 01:31:47 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 01:31:47 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-04 01:31:47 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 36
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:31:47 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:31:47 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 01:31:47 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:31:47 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:31:47 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:31:47 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:31:47 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:31:47 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:31:47 --> Final output sent to browser
DEBUG - 2013-09-04 01:31:47 --> Total execution time: 0.1049
DEBUG - 2013-09-04 01:31:53 --> Config Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:31:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:31:53 --> URI Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Router Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Output Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Security Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Input Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:31:53 --> Language Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Loader Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Controller Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:31:53 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Model Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Session Class Initialized
DEBUG - 2013-09-04 01:31:53 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:31:53 --> Session routines successfully run
DEBUG - 2013-09-04 01:31:53 --> User Agent Class Initialized
INFO  - 2013-09-04 01:31:53 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 01:31:53 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 01:31:53 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =34
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:31:53 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =34
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:31:53 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 01:31:53 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:31:53 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:31:53 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:31:53 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:31:53 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:31:53 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:31:53 --> Final output sent to browser
DEBUG - 2013-09-04 01:31:53 --> Total execution time: 0.1761
DEBUG - 2013-09-04 01:32:09 --> Config Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:32:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:32:09 --> URI Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Router Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Output Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Security Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Input Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:32:09 --> Language Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Loader Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Controller Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:32:09 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Session Class Initialized
DEBUG - 2013-09-04 01:32:09 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:32:09 --> Session routines successfully run
DEBUG - 2013-09-04 01:32:09 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:32:09 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 01:32:09 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:32:09 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:32:09 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:32:09 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:32:09 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:32:09 --> Final output sent to browser
DEBUG - 2013-09-04 01:32:09 --> Total execution time: 0.1029
DEBUG - 2013-09-04 01:32:11 --> Config Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:32:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:32:11 --> URI Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Router Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Output Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Security Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Input Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:32:11 --> Language Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Loader Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Controller Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:32:11 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Session Class Initialized
DEBUG - 2013-09-04 01:32:11 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:32:11 --> Session routines successfully run
DEBUG - 2013-09-04 01:32:11 --> User Agent Class Initialized
INFO  - 2013-09-04 01:32:11 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
DEBUG - 2013-09-04 01:32:11 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 01:32:12 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:32:12 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:32:12 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:32:12 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:32:12 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:32:12 --> Final output sent to browser
DEBUG - 2013-09-04 01:32:12 --> Total execution time: 0.3483
DEBUG - 2013-09-04 01:32:28 --> Config Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:32:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:32:28 --> URI Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Router Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Output Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Security Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Input Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:32:28 --> Language Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Loader Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Controller Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:32:28 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Session Class Initialized
DEBUG - 2013-09-04 01:32:28 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:32:28 --> Session routines successfully run
DEBUG - 2013-09-04 01:32:28 --> User Agent Class Initialized
INFO  - 2013-09-04 01:32:28 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
ERROR - 2013-09-04 01:32:29 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/nomina.php:1074) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:32:29 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/nomina.php:1074) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:32:29 --> Final output sent to browser
DEBUG - 2013-09-04 01:32:29 --> Total execution time: 0.2965
DEBUG - 2013-09-04 01:34:24 --> Config Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:34:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:34:24 --> URI Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Router Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Output Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Security Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Input Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:34:24 --> Language Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Loader Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Controller Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:34:24 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:24 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:25 --> Session Class Initialized
DEBUG - 2013-09-04 01:34:25 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:34:25 --> Session routines successfully run
DEBUG - 2013-09-04 01:34:25 --> User Agent Class Initialized
ERROR - 2013-09-04 01:34:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:34:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:34:25 --> Final output sent to browser
DEBUG - 2013-09-04 01:34:25 --> Total execution time: 0.0907
DEBUG - 2013-09-04 01:34:26 --> Config Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:34:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:34:26 --> URI Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Router Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Output Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Security Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Input Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:34:26 --> Language Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Loader Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Controller Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:34:26 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Session Class Initialized
DEBUG - 2013-09-04 01:34:26 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:34:26 --> Session routines successfully run
DEBUG - 2013-09-04 01:34:26 --> User Agent Class Initialized
ERROR - 2013-09-04 01:34:26 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:34:26 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:34:26 --> Final output sent to browser
DEBUG - 2013-09-04 01:34:26 --> Total execution time: 0.0713
DEBUG - 2013-09-04 01:37:02 --> Config Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:37:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:37:02 --> URI Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Router Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Output Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Security Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Input Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:37:02 --> Language Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Loader Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Controller Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:37:02 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Session Class Initialized
DEBUG - 2013-09-04 01:37:02 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:37:02 --> Session routines successfully run
DEBUG - 2013-09-04 01:37:02 --> User Agent Class Initialized
INFO  - 2013-09-04 01:37:02 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 01:37:02 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 01:37:02 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:37:02 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:37:02 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:37:02 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:37:02 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:37:02 --> Final output sent to browser
DEBUG - 2013-09-04 01:37:02 --> Total execution time: 0.3554
DEBUG - 2013-09-04 01:37:16 --> Config Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:37:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:37:16 --> URI Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Router Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Output Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Security Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Input Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:37:16 --> Language Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Loader Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Controller Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:37:16 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Session Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:37:16 --> Session routines successfully run
DEBUG - 2013-09-04 01:37:16 --> User Agent Class Initialized
INFO  - 2013-09-04 01:37:16 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
DEBUG - 2013-09-04 01:37:16 --> Config Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:37:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:37:16 --> URI Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Router Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Output Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Security Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Input Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:37:16 --> Language Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Loader Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Controller Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:37:16 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Session Class Initialized
DEBUG - 2013-09-04 01:37:16 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:37:16 --> Session routines successfully run
DEBUG - 2013-09-04 01:37:16 --> User Agent Class Initialized
INFO  - 2013-09-04 01:37:16 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
DEBUG - 2013-09-04 01:37:16 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 01:37:16 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:37:16 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:37:16 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:37:16 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:37:16 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:37:16 --> Final output sent to browser
DEBUG - 2013-09-04 01:37:16 --> Total execution time: 0.3392
DEBUG - 2013-09-04 01:37:17 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 01:37:17 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:37:17 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:37:17 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:37:17 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:37:17 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:37:17 --> Final output sent to browser
DEBUG - 2013-09-04 01:37:17 --> Total execution time: 0.3308
DEBUG - 2013-09-04 01:38:08 --> Config Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:38:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:38:08 --> URI Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Router Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Output Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Security Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Input Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:38:08 --> Language Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Loader Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Controller Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:38:08 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Session Class Initialized
DEBUG - 2013-09-04 01:38:08 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:38:08 --> Session routines successfully run
DEBUG - 2013-09-04 01:38:08 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:38:08 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:38:08 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:38:08 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:38:08 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:38:08 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:38:08 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:38:08 --> Final output sent to browser
DEBUG - 2013-09-04 01:38:08 --> Total execution time: 0.0523
DEBUG - 2013-09-04 01:38:11 --> Config Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:38:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:38:11 --> URI Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Router Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Output Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Security Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Input Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:38:11 --> Language Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Loader Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Controller Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:38:11 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Session Class Initialized
DEBUG - 2013-09-04 01:38:11 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:38:11 --> Session routines successfully run
DEBUG - 2013-09-04 01:38:11 --> User Agent Class Initialized
INFO  - 2013-09-04 01:38:11 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 01:38:11 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 01:38:11 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =34
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:38:11 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =34
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:38:11 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 01:38:11 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:38:11 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:38:11 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:38:11 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:38:11 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:38:11 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:38:11 --> Final output sent to browser
DEBUG - 2013-09-04 01:38:11 --> Total execution time: 0.1400
DEBUG - 2013-09-04 01:38:21 --> Config Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:38:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:38:21 --> URI Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Router Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Output Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Security Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Input Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:38:21 --> Language Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Loader Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Controller Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:38:21 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Session Class Initialized
DEBUG - 2013-09-04 01:38:21 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:38:21 --> Session routines successfully run
DEBUG - 2013-09-04 01:38:21 --> User Agent Class Initialized
INFO  - 2013-09-04 01:38:21 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 01:38:21 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 01:38:21 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:38:21 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:38:21 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 01:38:21 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:38:21 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:38:21 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:38:21 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:38:21 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:38:21 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:38:21 --> Final output sent to browser
DEBUG - 2013-09-04 01:38:21 --> Total execution time: 0.1283
DEBUG - 2013-09-04 01:38:34 --> Config Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:38:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:38:34 --> URI Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Router Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Output Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Security Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Input Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:38:34 --> Language Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Loader Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Controller Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:38:34 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Session Class Initialized
DEBUG - 2013-09-04 01:38:34 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:38:34 --> Session routines successfully run
DEBUG - 2013-09-04 01:38:34 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:38:34 --> File loaded: application/views/be/reportes/prestamos.php
DEBUG - 2013-09-04 01:38:34 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:38:34 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:38:34 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:38:34 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:38:34 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:38:34 --> Final output sent to browser
DEBUG - 2013-09-04 01:38:34 --> Total execution time: 0.1025
DEBUG - 2013-09-04 01:38:42 --> Config Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:38:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:38:42 --> URI Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Router Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Output Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Security Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Input Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:38:42 --> Language Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Loader Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Controller Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:38:42 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Model Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Session Class Initialized
DEBUG - 2013-09-04 01:38:42 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:38:42 --> Session routines successfully run
DEBUG - 2013-09-04 01:38:42 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:38:42 --> File loaded: application/views/be/reportes/prestamo_desglose.php
DEBUG - 2013-09-04 01:38:42 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:38:42 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:38:42 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:38:42 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:38:42 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:38:42 --> Final output sent to browser
DEBUG - 2013-09-04 01:38:42 --> Total execution time: 0.0696
DEBUG - 2013-09-04 01:39:16 --> Config Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:39:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:39:16 --> URI Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Router Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Output Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Security Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Input Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:39:16 --> Language Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Loader Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Controller Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:39:16 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Session Class Initialized
DEBUG - 2013-09-04 01:39:16 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:39:16 --> Session routines successfully run
DEBUG - 2013-09-04 01:39:16 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:39:16 --> File loaded: application/views/be/reportes/prestamos.php
DEBUG - 2013-09-04 01:39:16 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:39:16 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:39:16 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:39:16 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:39:16 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:39:16 --> Final output sent to browser
DEBUG - 2013-09-04 01:39:16 --> Total execution time: 0.0818
DEBUG - 2013-09-04 01:39:21 --> Config Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:39:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:39:21 --> URI Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Router Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Output Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Security Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Input Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:39:21 --> Language Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Loader Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Controller Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:39:21 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Session Class Initialized
DEBUG - 2013-09-04 01:39:21 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:39:21 --> Session routines successfully run
DEBUG - 2013-09-04 01:39:21 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:39:21 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:39:21 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:39:21 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:39:21 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:39:21 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:39:21 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:39:21 --> Final output sent to browser
DEBUG - 2013-09-04 01:39:21 --> Total execution time: 0.0487
DEBUG - 2013-09-04 01:39:25 --> Config Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:39:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:39:25 --> URI Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Router Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Output Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Security Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Input Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:39:25 --> Language Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Loader Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Controller Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:39:25 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Session Class Initialized
DEBUG - 2013-09-04 01:39:25 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:39:25 --> Session routines successfully run
DEBUG - 2013-09-04 01:39:25 --> User Agent Class Initialized
INFO  - 2013-09-04 01:39:25 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 01:39:25 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 01:39:25 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =34
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:39:25 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =34
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:39:25 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 01:39:25 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:39:25 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:39:25 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:39:25 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:39:25 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:39:25 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:39:25 --> Final output sent to browser
DEBUG - 2013-09-04 01:39:25 --> Total execution time: 0.1441
DEBUG - 2013-09-04 01:39:31 --> Config Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:39:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:39:31 --> URI Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Router Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Output Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Security Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Input Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:39:31 --> Language Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Loader Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Controller Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:39:31 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Session Class Initialized
DEBUG - 2013-09-04 01:39:31 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:39:31 --> Session routines successfully run
DEBUG - 2013-09-04 01:39:31 --> User Agent Class Initialized
INFO  - 2013-09-04 01:39:31 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 01:39:31 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 01:39:31 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:39:31 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 01:39:31 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 01:39:31 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 01:39:31 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:39:31 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:39:31 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:39:31 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:39:31 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:39:31 --> Final output sent to browser
DEBUG - 2013-09-04 01:39:31 --> Total execution time: 0.1000
DEBUG - 2013-09-04 01:43:36 --> Config Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:43:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:43:36 --> URI Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Router Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Output Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Security Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Input Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:43:36 --> Language Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Loader Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Controller Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:43:36 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Session Class Initialized
DEBUG - 2013-09-04 01:43:36 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:43:36 --> Session routines successfully run
DEBUG - 2013-09-04 01:43:36 --> User Agent Class Initialized
ERROR - 2013-09-04 01:43:36 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:43:36 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:43:36 --> Final output sent to browser
DEBUG - 2013-09-04 01:43:36 --> Total execution time: 0.1195
DEBUG - 2013-09-04 01:44:39 --> Config Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:44:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:44:39 --> URI Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Router Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Output Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Security Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Input Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:44:39 --> Language Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Loader Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Controller Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:44:39 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Session Class Initialized
DEBUG - 2013-09-04 01:44:39 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:44:39 --> Session routines successfully run
DEBUG - 2013-09-04 01:44:39 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:44:39 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:44:39 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:44:39 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:44:39 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:44:39 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:44:39 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:44:39 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:44:39 --> Final output sent to browser
DEBUG - 2013-09-04 01:44:39 --> Total execution time: 0.1106
DEBUG - 2013-09-04 01:44:48 --> Config Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:44:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:44:48 --> URI Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Router Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Output Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Security Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Input Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:44:48 --> Language Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Loader Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Controller Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:44:48 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Session Class Initialized
DEBUG - 2013-09-04 01:44:48 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:44:48 --> Session routines successfully run
DEBUG - 2013-09-04 01:44:48 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:44:48 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:44:48 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:44:48 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:44:48 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:44:48 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:44:48 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:44:48 --> Final output sent to browser
DEBUG - 2013-09-04 01:44:48 --> Total execution time: 0.0654
DEBUG - 2013-09-04 01:44:59 --> Config Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:44:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:44:59 --> URI Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Router Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Output Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Security Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Input Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:44:59 --> Language Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Loader Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Controller Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:44:59 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Model Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Session Class Initialized
DEBUG - 2013-09-04 01:44:59 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:44:59 --> Session routines successfully run
DEBUG - 2013-09-04 01:44:59 --> User Agent Class Initialized
ERROR - 2013-09-04 01:44:59 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:44:59 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:44:59 --> Final output sent to browser
DEBUG - 2013-09-04 01:44:59 --> Total execution time: 0.0507
DEBUG - 2013-09-04 01:45:03 --> Config Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:45:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:45:03 --> URI Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Router Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Output Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Security Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Input Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:45:03 --> Language Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Loader Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Controller Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:45:03 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Session Class Initialized
DEBUG - 2013-09-04 01:45:03 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:45:03 --> Session routines successfully run
DEBUG - 2013-09-04 01:45:03 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:45:03 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:45:03 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:45:03 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:45:03 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:45:03 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:45:03 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:45:03 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:45:03 --> Final output sent to browser
DEBUG - 2013-09-04 01:45:03 --> Total execution time: 0.0562
DEBUG - 2013-09-04 01:45:05 --> Config Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:45:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:45:05 --> URI Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Router Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Output Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Security Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Input Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:45:05 --> Language Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Loader Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Controller Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:45:05 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Session Class Initialized
DEBUG - 2013-09-04 01:45:05 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:45:05 --> Session routines successfully run
DEBUG - 2013-09-04 01:45:05 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:45:05 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:45:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:45:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:45:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:45:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:45:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:45:05 --> Final output sent to browser
DEBUG - 2013-09-04 01:45:05 --> Total execution time: 0.0636
DEBUG - 2013-09-04 01:45:11 --> Config Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:45:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:45:11 --> URI Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Router Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Output Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Security Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Input Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:45:11 --> Language Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Loader Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Controller Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:45:11 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Session Class Initialized
DEBUG - 2013-09-04 01:45:11 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:45:11 --> Session routines successfully run
DEBUG - 2013-09-04 01:45:11 --> User Agent Class Initialized
ERROR - 2013-09-04 01:45:11 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:45:11 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:45:11 --> Final output sent to browser
DEBUG - 2013-09-04 01:45:11 --> Total execution time: 0.0493
DEBUG - 2013-09-04 01:45:14 --> Config Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:45:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:45:14 --> URI Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Router Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Output Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Security Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Input Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:45:14 --> Language Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Loader Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Controller Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:45:14 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Session Class Initialized
DEBUG - 2013-09-04 01:45:14 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:45:14 --> Session routines successfully run
DEBUG - 2013-09-04 01:45:14 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:45:14 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:45:14 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:45:14 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:45:14 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:45:14 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:45:14 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:45:14 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:45:14 --> Final output sent to browser
DEBUG - 2013-09-04 01:45:14 --> Total execution time: 0.0544
DEBUG - 2013-09-04 01:45:26 --> Config Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:45:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:45:26 --> URI Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Router Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Output Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Security Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Input Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:45:26 --> Language Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Loader Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Controller Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:45:26 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Session Class Initialized
DEBUG - 2013-09-04 01:45:26 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:45:26 --> Session routines successfully run
DEBUG - 2013-09-04 01:45:26 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:45:26 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:45:26 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:45:26 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:45:26 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:45:26 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:45:26 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:45:26 --> Final output sent to browser
DEBUG - 2013-09-04 01:45:26 --> Total execution time: 0.0653
DEBUG - 2013-09-04 01:45:27 --> Config Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:45:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:45:27 --> URI Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Router Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Output Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Security Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Input Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:45:27 --> Language Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Loader Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Controller Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:45:27 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Session Class Initialized
DEBUG - 2013-09-04 01:45:27 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:45:27 --> Session routines successfully run
DEBUG - 2013-09-04 01:45:27 --> User Agent Class Initialized
ERROR - 2013-09-04 01:45:27 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:45:27 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:45:27 --> Final output sent to browser
DEBUG - 2013-09-04 01:45:27 --> Total execution time: 0.0485
DEBUG - 2013-09-04 01:45:29 --> Config Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:45:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:45:29 --> URI Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Router Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Output Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Security Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Input Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:45:29 --> Language Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Loader Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Controller Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:45:29 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Model Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Session Class Initialized
DEBUG - 2013-09-04 01:45:29 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:45:29 --> Session routines successfully run
DEBUG - 2013-09-04 01:45:29 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:45:29 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:45:29 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:45:29 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:45:29 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:45:29 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:45:29 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:45:29 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:45:29 --> Final output sent to browser
DEBUG - 2013-09-04 01:45:29 --> Total execution time: 0.0517
DEBUG - 2013-09-04 01:46:28 --> Config Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:46:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:46:28 --> URI Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Router Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Output Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Security Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Input Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:46:28 --> Language Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Loader Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Controller Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:46:28 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Session Class Initialized
DEBUG - 2013-09-04 01:46:28 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:46:28 --> Session routines successfully run
DEBUG - 2013-09-04 01:46:28 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:46:28 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:46:28 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:46:28 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:46:28 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:46:28 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:46:28 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:46:28 --> Final output sent to browser
DEBUG - 2013-09-04 01:46:28 --> Total execution time: 0.0621
DEBUG - 2013-09-04 01:46:31 --> Config Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:46:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:46:31 --> URI Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Router Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Output Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Security Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Input Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:46:31 --> Language Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Loader Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Controller Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:46:31 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Session Class Initialized
DEBUG - 2013-09-04 01:46:31 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:46:31 --> Session routines successfully run
DEBUG - 2013-09-04 01:46:31 --> User Agent Class Initialized
ERROR - 2013-09-04 01:46:31 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:46:31 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:46:31 --> Final output sent to browser
DEBUG - 2013-09-04 01:46:31 --> Total execution time: 0.0439
DEBUG - 2013-09-04 01:46:32 --> Config Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:46:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:46:32 --> URI Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Router Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Output Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Security Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Input Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:46:32 --> Language Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Loader Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Controller Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:46:32 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Session Class Initialized
DEBUG - 2013-09-04 01:46:32 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:46:32 --> Session routines successfully run
DEBUG - 2013-09-04 01:46:32 --> User Agent Class Initialized
ERROR - 2013-09-04 01:46:32 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:46:32 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:46:32 --> Final output sent to browser
DEBUG - 2013-09-04 01:46:32 --> Total execution time: 0.0475
DEBUG - 2013-09-04 01:46:52 --> Config Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:46:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:46:52 --> URI Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Router Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Output Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Security Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Input Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:46:52 --> Language Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Loader Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Controller Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:46:52 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Model Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Session Class Initialized
DEBUG - 2013-09-04 01:46:52 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:46:52 --> Session routines successfully run
DEBUG - 2013-09-04 01:46:52 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:46:52 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:46:52 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:46:52 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:46:52 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:46:52 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:46:52 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:46:52 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:46:52 --> Final output sent to browser
DEBUG - 2013-09-04 01:46:52 --> Total execution time: 0.0548
DEBUG - 2013-09-04 01:48:40 --> Config Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:48:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:48:40 --> URI Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Router Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Output Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Security Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Input Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:48:40 --> Language Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Loader Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Controller Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:48:40 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Model Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Session Class Initialized
DEBUG - 2013-09-04 01:48:40 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:48:40 --> Session routines successfully run
DEBUG - 2013-09-04 01:48:40 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:48:40 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:48:40 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:48:40 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:48:40 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:48:40 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:48:40 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:48:40 --> Final output sent to browser
DEBUG - 2013-09-04 01:48:40 --> Total execution time: 0.0665
DEBUG - 2013-09-04 01:50:13 --> Config Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:50:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:50:13 --> URI Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Router Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Output Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Security Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Input Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:50:13 --> Language Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Loader Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Controller Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:50:13 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Session Class Initialized
DEBUG - 2013-09-04 01:50:13 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:50:13 --> Session routines successfully run
DEBUG - 2013-09-04 01:50:13 --> User Agent Class Initialized
ERROR - 2013-09-04 01:50:13 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:50:13 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:50:13 --> Final output sent to browser
DEBUG - 2013-09-04 01:50:13 --> Total execution time: 0.0481
DEBUG - 2013-09-04 01:50:31 --> Config Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:50:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:50:31 --> URI Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Router Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Output Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Security Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Input Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:50:31 --> Language Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Loader Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Controller Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:50:31 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Session Class Initialized
DEBUG - 2013-09-04 01:50:31 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:50:31 --> Session routines successfully run
DEBUG - 2013-09-04 01:50:31 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:50:31 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:50:31 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:50:31 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:50:31 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:50:31 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:50:31 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:50:31 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:50:31 --> Final output sent to browser
DEBUG - 2013-09-04 01:50:31 --> Total execution time: 0.0543
DEBUG - 2013-09-04 01:50:43 --> Config Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:50:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:50:43 --> URI Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Router Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Output Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Security Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Input Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:50:43 --> Language Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Loader Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Controller Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:50:43 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Session Class Initialized
DEBUG - 2013-09-04 01:50:43 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:50:43 --> Session routines successfully run
DEBUG - 2013-09-04 01:50:43 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:50:43 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:50:43 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:50:43 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:50:43 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:50:43 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:50:43 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:50:43 --> Final output sent to browser
DEBUG - 2013-09-04 01:50:43 --> Total execution time: 0.0647
DEBUG - 2013-09-04 01:50:45 --> Config Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:50:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:50:45 --> URI Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Router Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Output Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Security Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Input Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:50:45 --> Language Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Loader Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Controller Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:50:45 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Session Class Initialized
DEBUG - 2013-09-04 01:50:45 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:50:45 --> Session routines successfully run
DEBUG - 2013-09-04 01:50:45 --> User Agent Class Initialized
ERROR - 2013-09-04 01:50:45 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:50:45 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:50:45 --> Final output sent to browser
DEBUG - 2013-09-04 01:50:45 --> Total execution time: 0.0468
DEBUG - 2013-09-04 01:50:54 --> Config Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:50:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:50:54 --> URI Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Router Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Output Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Security Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Input Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:50:54 --> Language Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Loader Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Controller Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:50:54 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Session Class Initialized
DEBUG - 2013-09-04 01:50:54 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:50:54 --> Session routines successfully run
DEBUG - 2013-09-04 01:50:54 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:50:54 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:50:54 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:50:54 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:50:54 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:50:54 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:50:54 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:50:54 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:50:54 --> Final output sent to browser
DEBUG - 2013-09-04 01:50:54 --> Total execution time: 0.0562
DEBUG - 2013-09-04 01:51:45 --> Config Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:51:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:51:45 --> URI Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Router Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Output Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Security Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Input Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:51:45 --> Language Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Loader Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Controller Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:51:45 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Session Class Initialized
DEBUG - 2013-09-04 01:51:45 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:51:45 --> Session routines successfully run
DEBUG - 2013-09-04 01:51:45 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:51:45 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:51:45 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:51:45 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:51:45 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:51:45 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:51:45 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:51:45 --> Final output sent to browser
DEBUG - 2013-09-04 01:51:45 --> Total execution time: 0.0656
DEBUG - 2013-09-04 01:51:47 --> Config Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:51:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:51:47 --> URI Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Router Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Output Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Security Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Input Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:51:47 --> Language Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Loader Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Controller Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:51:47 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Session Class Initialized
DEBUG - 2013-09-04 01:51:47 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:51:47 --> Session routines successfully run
DEBUG - 2013-09-04 01:51:47 --> User Agent Class Initialized
ERROR - 2013-09-04 01:51:47 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:51:47 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:51:47 --> Final output sent to browser
DEBUG - 2013-09-04 01:51:47 --> Total execution time: 0.0469
DEBUG - 2013-09-04 01:51:54 --> Config Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:51:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:51:54 --> URI Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Router Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Output Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Security Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Input Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:51:54 --> Language Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Loader Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Controller Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:51:54 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Model Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Session Class Initialized
DEBUG - 2013-09-04 01:51:54 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:51:54 --> Session routines successfully run
DEBUG - 2013-09-04 01:51:54 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:51:54 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 01:51:54 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 01:51:54 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:51:54 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:51:54 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:51:54 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:51:54 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:51:54 --> Final output sent to browser
DEBUG - 2013-09-04 01:51:54 --> Total execution time: 0.0522
DEBUG - 2013-09-04 01:59:03 --> Config Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:59:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:59:03 --> URI Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Router Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Output Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Security Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Input Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:59:03 --> Language Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Loader Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Controller Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:59:03 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Session Class Initialized
DEBUG - 2013-09-04 01:59:03 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:59:03 --> Session routines successfully run
DEBUG - 2013-09-04 01:59:03 --> User Agent Class Initialized
DEBUG - 2013-09-04 01:59:03 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-04 01:59:03 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 01:59:03 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 01:59:03 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 01:59:03 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 01:59:03 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 01:59:03 --> Final output sent to browser
DEBUG - 2013-09-04 01:59:03 --> Total execution time: 0.0889
DEBUG - 2013-09-04 01:59:06 --> Config Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:59:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:59:06 --> URI Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Router Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Output Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Security Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Input Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:59:06 --> Language Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Loader Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Controller Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:59:06 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Session Class Initialized
DEBUG - 2013-09-04 01:59:06 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:59:06 --> Session routines successfully run
DEBUG - 2013-09-04 01:59:06 --> User Agent Class Initialized
ERROR - 2013-09-04 01:59:06 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:59:06 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:59:06 --> Final output sent to browser
DEBUG - 2013-09-04 01:59:06 --> Total execution time: 0.0484
DEBUG - 2013-09-04 01:59:08 --> Config Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Hooks Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Utf8 Class Initialized
DEBUG - 2013-09-04 01:59:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 01:59:08 --> URI Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Router Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Output Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Security Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Input Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 01:59:08 --> Language Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Loader Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Controller Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Helper loaded: url_helper
DEBUG - 2013-09-04 01:59:08 --> Database Driver Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Model Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Session Class Initialized
DEBUG - 2013-09-04 01:59:08 --> Helper loaded: string_helper
DEBUG - 2013-09-04 01:59:08 --> Session routines successfully run
DEBUG - 2013-09-04 01:59:08 --> User Agent Class Initialized
ERROR - 2013-09-04 01:59:08 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 01:59:08 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 01:59:08 --> Final output sent to browser
DEBUG - 2013-09-04 01:59:08 --> Total execution time: 0.0582
DEBUG - 2013-09-04 02:01:47 --> Config Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:01:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:01:47 --> URI Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Router Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Output Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Security Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Input Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:01:47 --> Language Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Loader Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Controller Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:01:47 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Session Class Initialized
DEBUG - 2013-09-04 02:01:47 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:01:47 --> Session routines successfully run
DEBUG - 2013-09-04 02:01:47 --> User Agent Class Initialized
ERROR - 2013-09-04 02:01:47 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 02:01:47 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 02:01:47 --> Final output sent to browser
DEBUG - 2013-09-04 02:01:47 --> Total execution time: 0.0436
DEBUG - 2013-09-04 02:01:48 --> Config Class Initialized
DEBUG - 2013-09-04 02:01:48 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:01:48 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:01:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:01:48 --> URI Class Initialized
DEBUG - 2013-09-04 02:01:48 --> Router Class Initialized
DEBUG - 2013-09-04 02:01:48 --> Output Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Security Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Input Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:01:49 --> Language Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Loader Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Controller Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:01:49 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Model Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Session Class Initialized
DEBUG - 2013-09-04 02:01:49 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:01:49 --> Session routines successfully run
DEBUG - 2013-09-04 02:01:49 --> User Agent Class Initialized
ERROR - 2013-09-04 02:01:49 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-04 02:01:49 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-04 02:01:49 --> Final output sent to browser
DEBUG - 2013-09-04 02:01:49 --> Total execution time: 0.7148
DEBUG - 2013-09-04 02:04:32 --> Config Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:04:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:04:32 --> URI Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Router Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Output Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Security Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Input Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:04:32 --> Language Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Loader Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Controller Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:04:32 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Session Class Initialized
DEBUG - 2013-09-04 02:04:32 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:04:32 --> Session routines successfully run
DEBUG - 2013-09-04 02:04:32 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:04:32 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 02:04:32 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-04 02:04:32 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:04:32 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:04:32 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:04:32 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:04:32 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:04:32 --> Final output sent to browser
DEBUG - 2013-09-04 02:04:32 --> Total execution time: 0.0530
DEBUG - 2013-09-04 02:04:33 --> Config Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:04:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:04:33 --> URI Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Router Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Output Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Security Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Input Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:04:33 --> Language Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Loader Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Controller Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:04:33 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Session Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:04:33 --> Session routines successfully run
DEBUG - 2013-09-04 02:04:33 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:04:33 --> Pagination Class Initialized
DEBUG - 2013-09-04 02:04:33 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-04 02:04:33 --> File loaded: application/views/be/prestamos/historial.php
DEBUG - 2013-09-04 02:04:33 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:04:33 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:04:33 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:04:33 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:04:33 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:04:33 --> Final output sent to browser
DEBUG - 2013-09-04 02:04:33 --> Total execution time: 0.0989
DEBUG - 2013-09-04 02:04:38 --> Config Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:04:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:04:38 --> URI Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Router Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Output Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Security Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Input Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:04:38 --> Language Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Loader Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Controller Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:04:38 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Session Class Initialized
DEBUG - 2013-09-04 02:04:38 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:04:38 --> Session routines successfully run
DEBUG - 2013-09-04 02:04:38 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:04:38 --> File loaded: application/views/be/reportes/prestamos.php
DEBUG - 2013-09-04 02:04:38 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:04:38 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:04:38 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:04:38 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:04:38 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:04:38 --> Final output sent to browser
DEBUG - 2013-09-04 02:04:38 --> Total execution time: 0.0905
DEBUG - 2013-09-04 02:04:47 --> Config Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:04:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:04:47 --> URI Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Router Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Output Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Security Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Input Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:04:47 --> Language Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Loader Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Controller Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:04:47 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Session Class Initialized
DEBUG - 2013-09-04 02:04:47 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:04:47 --> Session routines successfully run
DEBUG - 2013-09-04 02:04:47 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:04:47 --> File loaded: application/views/be/reportes/prestamo_desglose.php
DEBUG - 2013-09-04 02:04:47 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:04:47 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:04:47 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:04:47 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:04:47 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:04:47 --> Final output sent to browser
DEBUG - 2013-09-04 02:04:47 --> Total execution time: 0.0690
DEBUG - 2013-09-04 02:05:11 --> Config Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:05:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:05:11 --> URI Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Router Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Output Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Security Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Input Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:05:11 --> Language Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Loader Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Controller Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:05:11 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Session Class Initialized
DEBUG - 2013-09-04 02:05:11 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:05:11 --> Session routines successfully run
DEBUG - 2013-09-04 02:05:11 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:05:11 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 02:05:11 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:05:11 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:05:11 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:05:11 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:05:11 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:05:11 --> Final output sent to browser
DEBUG - 2013-09-04 02:05:11 --> Total execution time: 0.0602
DEBUG - 2013-09-04 02:05:14 --> Config Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:05:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:05:14 --> URI Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Router Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Output Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Security Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Input Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:05:14 --> Language Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Loader Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Controller Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:05:14 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Model Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Session Class Initialized
DEBUG - 2013-09-04 02:05:14 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:05:14 --> Session routines successfully run
DEBUG - 2013-09-04 02:05:14 --> User Agent Class Initialized
INFO  - 2013-09-04 02:05:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 02:05:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
INFO  - 2013-09-04 02:05:14 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =34
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 02:05:14 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =34
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-04 02:05:14 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 02:05:14 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 02:05:14 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:05:14 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:05:14 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:05:14 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:05:14 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:05:14 --> Final output sent to browser
DEBUG - 2013-09-04 02:05:14 --> Total execution time: 0.1573
DEBUG - 2013-09-04 02:06:04 --> Config Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:06:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:06:04 --> URI Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Router Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Output Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Security Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Input Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:06:04 --> Language Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Loader Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Controller Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:06:04 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Model Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Session Class Initialized
DEBUG - 2013-09-04 02:06:04 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:06:04 --> Session routines successfully run
DEBUG - 2013-09-04 02:06:04 --> User Agent Class Initialized
INFO  - 2013-09-04 02:06:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 02:06:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 02:06:04 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 02:06:04 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 02:06:04 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 02:06:04 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 02:06:04 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:06:04 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:06:04 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:06:04 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:06:04 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:06:04 --> Final output sent to browser
DEBUG - 2013-09-04 02:06:04 --> Total execution time: 0.1045
DEBUG - 2013-09-04 02:07:27 --> Config Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:07:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:07:27 --> URI Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Router Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Output Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Security Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Input Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:07:27 --> Language Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Loader Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Controller Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:07:27 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Session Class Initialized
DEBUG - 2013-09-04 02:07:27 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:07:27 --> Session routines successfully run
DEBUG - 2013-09-04 02:07:27 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:07:27 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:07:27 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:07:27 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:07:27 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:07:27 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:07:27 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:07:27 --> Final output sent to browser
DEBUG - 2013-09-04 02:07:27 --> Total execution time: 0.0672
DEBUG - 2013-09-04 02:07:29 --> Config Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:07:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:07:29 --> URI Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Router Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Output Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Security Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Input Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:07:29 --> Language Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Loader Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Controller Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:07:29 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Session Class Initialized
DEBUG - 2013-09-04 02:07:29 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:07:29 --> Session routines successfully run
DEBUG - 2013-09-04 02:07:29 --> User Agent Class Initialized
INFO  - 2013-09-04 02:07:29 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 02:07:30 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:07:30 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:07:30 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:07:30 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:07:30 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:07:30 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:07:30 --> Final output sent to browser
DEBUG - 2013-09-04 02:07:30 --> Total execution time: 0.3195
DEBUG - 2013-09-04 02:07:41 --> Config Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:07:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:07:41 --> URI Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Router Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Output Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Security Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Input Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:07:41 --> Language Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Loader Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Controller Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:07:41 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Session Class Initialized
DEBUG - 2013-09-04 02:07:41 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:07:41 --> Session routines successfully run
DEBUG - 2013-09-04 02:07:41 --> User Agent Class Initialized
INFO  - 2013-09-04 02:07:41 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
DEBUG - 2013-09-04 02:07:41 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:07:41 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:07:41 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:07:41 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:07:41 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:07:41 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:07:41 --> Final output sent to browser
DEBUG - 2013-09-04 02:07:41 --> Total execution time: 0.3947
DEBUG - 2013-09-04 02:07:57 --> Config Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:07:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:07:57 --> URI Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Router Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Output Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Security Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Input Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:07:57 --> Language Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Loader Class Initialized
DEBUG - 2013-09-04 02:07:57 --> Controller Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:07:58 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Session Class Initialized
DEBUG - 2013-09-04 02:07:58 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:07:58 --> Session routines successfully run
DEBUG - 2013-09-04 02:07:58 --> User Agent Class Initialized
INFO  - 2013-09-04 02:07:58 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 02:07:58 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:07:58 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:07:58 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:07:58 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:07:58 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:07:58 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:07:58 --> Final output sent to browser
DEBUG - 2013-09-04 02:07:58 --> Total execution time: 0.3239
DEBUG - 2013-09-04 02:08:22 --> Config Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:08:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:08:22 --> URI Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Router Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Output Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Security Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Input Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:08:22 --> Language Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Loader Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Controller Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:08:22 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Session Class Initialized
DEBUG - 2013-09-04 02:08:22 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:08:22 --> Session routines successfully run
DEBUG - 2013-09-04 02:08:22 --> User Agent Class Initialized
INFO  - 2013-09-04 02:08:22 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 33 AND periodo_id = 8
DEBUG - 2013-09-04 02:08:23 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:08:23 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:08:23 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:08:23 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:08:23 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:08:23 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:08:23 --> Final output sent to browser
DEBUG - 2013-09-04 02:08:23 --> Total execution time: 0.3188
DEBUG - 2013-09-04 02:08:52 --> Config Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:08:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:08:52 --> URI Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Router Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Output Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Security Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Input Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:08:52 --> Language Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Loader Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Controller Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:08:52 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Model Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Session Class Initialized
DEBUG - 2013-09-04 02:08:52 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:08:52 --> Session routines successfully run
DEBUG - 2013-09-04 02:08:52 --> User Agent Class Initialized
INFO  - 2013-09-04 02:08:52 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 52 AND periodo_id = 8
DEBUG - 2013-09-04 02:08:52 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:08:52 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:08:52 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:08:52 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:08:52 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:08:52 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:08:52 --> Final output sent to browser
DEBUG - 2013-09-04 02:08:52 --> Total execution time: 0.3211
DEBUG - 2013-09-04 02:09:36 --> Config Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:09:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:09:36 --> URI Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Router Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Output Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Security Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Input Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:09:36 --> Language Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Loader Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Controller Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:09:36 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Session Class Initialized
DEBUG - 2013-09-04 02:09:36 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:09:36 --> Session routines successfully run
DEBUG - 2013-09-04 02:09:36 --> User Agent Class Initialized
INFO  - 2013-09-04 02:09:36 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
DEBUG - 2013-09-04 02:09:36 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:09:36 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:09:36 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:09:36 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:09:36 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:09:36 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:09:36 --> Final output sent to browser
DEBUG - 2013-09-04 02:09:36 --> Total execution time: 0.3270
DEBUG - 2013-09-04 02:09:48 --> Config Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:09:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:09:48 --> URI Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Router Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Output Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Security Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Input Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:09:48 --> Language Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Loader Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Controller Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:09:48 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Model Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Session Class Initialized
DEBUG - 2013-09-04 02:09:48 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:09:48 --> Session routines successfully run
DEBUG - 2013-09-04 02:09:48 --> User Agent Class Initialized
INFO  - 2013-09-04 02:09:48 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 30 AND periodo_id = 8
DEBUG - 2013-09-04 02:09:49 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:09:49 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:09:49 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:09:49 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:09:49 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:09:49 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:09:49 --> Final output sent to browser
DEBUG - 2013-09-04 02:09:49 --> Total execution time: 0.3164
DEBUG - 2013-09-04 02:10:09 --> Config Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:10:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:10:09 --> URI Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Router Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Output Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Security Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Input Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:10:09 --> Language Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Loader Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Controller Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:10:09 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Session Class Initialized
DEBUG - 2013-09-04 02:10:09 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:10:09 --> Session routines successfully run
DEBUG - 2013-09-04 02:10:09 --> User Agent Class Initialized
INFO  - 2013-09-04 02:10:09 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 28 AND periodo_id = 8
DEBUG - 2013-09-04 02:10:09 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:10:09 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:10:09 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:10:09 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:10:09 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:10:09 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:10:09 --> Final output sent to browser
DEBUG - 2013-09-04 02:10:09 --> Total execution time: 0.3173
DEBUG - 2013-09-04 02:10:19 --> Config Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:10:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:10:19 --> URI Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Router Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Output Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Security Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Input Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:10:19 --> Language Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Loader Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Controller Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:10:19 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Session Class Initialized
DEBUG - 2013-09-04 02:10:19 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:10:19 --> Session routines successfully run
DEBUG - 2013-09-04 02:10:19 --> User Agent Class Initialized
INFO  - 2013-09-04 02:10:19 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 27 AND periodo_id = 8
DEBUG - 2013-09-04 02:10:20 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:10:20 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:10:20 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:10:20 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:10:20 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:10:20 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:10:20 --> Final output sent to browser
DEBUG - 2013-09-04 02:10:20 --> Total execution time: 0.3235
DEBUG - 2013-09-04 02:10:58 --> Config Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:10:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:10:58 --> URI Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Router Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Output Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Security Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Input Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:10:58 --> Language Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Loader Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Controller Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:10:58 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Model Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Session Class Initialized
DEBUG - 2013-09-04 02:10:58 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:10:58 --> Session routines successfully run
DEBUG - 2013-09-04 02:10:58 --> User Agent Class Initialized
INFO  - 2013-09-04 02:10:58 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 34 AND periodo_id = 8
DEBUG - 2013-09-04 02:10:58 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:10:58 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:10:58 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:10:58 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:10:58 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:10:58 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:10:58 --> Final output sent to browser
DEBUG - 2013-09-04 02:10:58 --> Total execution time: 0.3828
DEBUG - 2013-09-04 02:11:09 --> Config Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:11:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:11:09 --> URI Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Router Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Output Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Security Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Input Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:11:09 --> Language Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Loader Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Controller Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:11:09 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Session Class Initialized
DEBUG - 2013-09-04 02:11:09 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:11:09 --> Session routines successfully run
DEBUG - 2013-09-04 02:11:09 --> User Agent Class Initialized
INFO  - 2013-09-04 02:11:09 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 02:11:09 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:11:09 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:11:09 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:11:09 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:11:09 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:11:09 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:11:09 --> Final output sent to browser
DEBUG - 2013-09-04 02:11:09 --> Total execution time: 0.3345
DEBUG - 2013-09-04 02:11:23 --> Config Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:11:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:11:23 --> URI Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Router Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Output Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Security Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Input Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:11:23 --> Language Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Loader Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Controller Class Initialized
DEBUG - 2013-09-04 02:11:23 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:11:24 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Session Class Initialized
DEBUG - 2013-09-04 02:11:24 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:11:24 --> Session routines successfully run
DEBUG - 2013-09-04 02:11:24 --> User Agent Class Initialized
INFO  - 2013-09-04 02:11:24 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 1 AND periodo_id = 8
DEBUG - 2013-09-04 02:11:24 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:11:24 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:11:24 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:11:24 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:11:24 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:11:24 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:11:24 --> Final output sent to browser
DEBUG - 2013-09-04 02:11:24 --> Total execution time: 0.3128
DEBUG - 2013-09-04 02:11:33 --> Config Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:11:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:11:33 --> URI Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Router Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Output Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Security Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Input Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:11:33 --> Language Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Loader Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Controller Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:11:33 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Session Class Initialized
DEBUG - 2013-09-04 02:11:33 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:11:33 --> Session routines successfully run
DEBUG - 2013-09-04 02:11:33 --> User Agent Class Initialized
INFO  - 2013-09-04 02:11:33 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 10 AND periodo_id = 8
DEBUG - 2013-09-04 02:11:33 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:11:33 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:11:33 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:11:33 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:11:33 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:11:33 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:11:33 --> Final output sent to browser
DEBUG - 2013-09-04 02:11:33 --> Total execution time: 0.3133
DEBUG - 2013-09-04 02:11:38 --> Config Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:11:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:11:38 --> URI Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Router Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Output Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Security Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Input Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:11:38 --> Language Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Loader Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Controller Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:11:38 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Session Class Initialized
DEBUG - 2013-09-04 02:11:38 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:11:38 --> Session routines successfully run
DEBUG - 2013-09-04 02:11:38 --> User Agent Class Initialized
INFO  - 2013-09-04 02:11:38 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 10 AND periodo_id = 8
DEBUG - 2013-09-04 02:11:38 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:11:38 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:11:38 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:11:38 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:11:38 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:11:38 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:11:38 --> Final output sent to browser
DEBUG - 2013-09-04 02:11:38 --> Total execution time: 0.3156
DEBUG - 2013-09-04 02:11:53 --> Config Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:11:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:11:53 --> URI Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Router Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Output Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Security Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Input Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:11:53 --> Language Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Loader Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Controller Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:11:53 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Model Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Session Class Initialized
DEBUG - 2013-09-04 02:11:53 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:11:53 --> Session routines successfully run
DEBUG - 2013-09-04 02:11:53 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:11:53 --> File loaded: application/views/be/reportes/prestamos.php
DEBUG - 2013-09-04 02:11:53 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:11:53 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:11:53 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:11:53 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:11:53 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:11:53 --> Final output sent to browser
DEBUG - 2013-09-04 02:11:53 --> Total execution time: 0.0887
DEBUG - 2013-09-04 02:12:05 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:05 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:05 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:05 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:05 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:05 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:05 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:12:05 --> File loaded: application/views/be/reportes/prestamo_desglose.php
DEBUG - 2013-09-04 02:12:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:05 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:05 --> Total execution time: 0.0474
DEBUG - 2013-09-04 02:12:26 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:26 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:26 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:26 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:26 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:26 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:26 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:12:26 --> File loaded: application/views/be/reportes/prestamos.php
DEBUG - 2013-09-04 02:12:26 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:26 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:26 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:26 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:26 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:26 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:26 --> Total execution time: 0.0829
DEBUG - 2013-09-04 02:12:30 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:30 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:30 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:30 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:30 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:30 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:30 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:12:30 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:12:30 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:30 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:30 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:30 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:30 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:30 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:30 --> Total execution time: 0.0491
DEBUG - 2013-09-04 02:12:33 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:33 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:33 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:33 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:33 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:33 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:33 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:12:33 --> File loaded: application/views/be/reportes/prestamos.php
DEBUG - 2013-09-04 02:12:33 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:33 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:33 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:33 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:33 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:33 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:33 --> Total execution time: 0.0877
DEBUG - 2013-09-04 02:12:41 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:41 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:41 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:41 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:41 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:41 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:41 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:12:41 --> File loaded: application/views/be/reportes/prestamo_desglose.php
DEBUG - 2013-09-04 02:12:41 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:41 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:41 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:41 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:41 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:41 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:41 --> Total execution time: 0.0466
DEBUG - 2013-09-04 02:12:47 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:47 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:47 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:47 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:47 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:47 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:47 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:12:47 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 02:12:47 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:47 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:47 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:47 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:47 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:47 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:47 --> Total execution time: 0.0494
DEBUG - 2013-09-04 02:12:50 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:50 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:50 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:50 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:50 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:50 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:50 --> User Agent Class Initialized
INFO  - 2013-09-04 02:12:50 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 02:12:50 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
INFO  - 2013-09-04 02:12:50 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 35
				GROUP BY u.no_emp;
INFO  - 2013-09-04 02:12:50 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-04 02:12:50 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-04 02:12:50 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-04 02:12:50 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:50 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:50 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:50 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:50 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:50 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:50 --> Total execution time: 0.1059
DEBUG - 2013-09-04 02:12:59 --> Config Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:12:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:12:59 --> URI Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Router Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Output Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Security Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Input Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:12:59 --> Language Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Loader Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Controller Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:12:59 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Model Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Session Class Initialized
DEBUG - 2013-09-04 02:12:59 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:12:59 --> Session routines successfully run
DEBUG - 2013-09-04 02:12:59 --> User Agent Class Initialized
DEBUG - 2013-09-04 02:12:59 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:12:59 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:12:59 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:12:59 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:12:59 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:12:59 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:12:59 --> Final output sent to browser
DEBUG - 2013-09-04 02:12:59 --> Total execution time: 0.0538
DEBUG - 2013-09-04 02:13:03 --> Config Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Hooks Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Utf8 Class Initialized
DEBUG - 2013-09-04 02:13:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-04 02:13:03 --> URI Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Router Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Output Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Security Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Input Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-04 02:13:03 --> Language Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Loader Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Controller Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Helper loaded: url_helper
DEBUG - 2013-09-04 02:13:03 --> Database Driver Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Model Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Session Class Initialized
DEBUG - 2013-09-04 02:13:03 --> Helper loaded: string_helper
DEBUG - 2013-09-04 02:13:03 --> Session routines successfully run
DEBUG - 2013-09-04 02:13:03 --> User Agent Class Initialized
INFO  - 2013-09-04 02:13:03 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 35 AND periodo_id = 8
DEBUG - 2013-09-04 02:13:04 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-04 02:13:04 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-04 02:13:04 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-04 02:13:04 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-04 02:13:04 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-04 02:13:04 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-04 02:13:04 --> Final output sent to browser
DEBUG - 2013-09-04 02:13:04 --> Total execution time: 0.3162
