<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-09-03 01:32:53 --> Config Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:32:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:32:53 --> URI Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Router Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Output Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Security Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Input Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:32:53 --> Language Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Loader Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Controller Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:32:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Session Class Initialized
DEBUG - 2013-09-03 01:32:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:32:53 --> Session routines successfully run
DEBUG - 2013-09-03 01:32:53 --> User Agent Class Initialized
INFO  - 2013-09-03 01:32:53 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:32:53 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
DEBUG - 2013-09-03 01:32:54 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:32:54 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:32:54 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:32:54 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:32:54 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:32:54 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:32:54 --> Final output sent to browser
DEBUG - 2013-09-03 01:32:54 --> Total execution time: 0.1096
DEBUG - 2013-09-03 01:34:17 --> Config Class Initialized
DEBUG - 2013-09-03 01:34:17 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:34:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:34:18 --> URI Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Router Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Output Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Security Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Input Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:34:18 --> Language Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Loader Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Controller Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:34:18 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Model Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Session Class Initialized
DEBUG - 2013-09-03 01:34:18 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:34:18 --> Session routines successfully run
DEBUG - 2013-09-03 01:34:18 --> User Agent Class Initialized
INFO  - 2013-09-03 01:34:18 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:34:18 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:34:18 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:34:18 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:34:18 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:34:18 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:34:18 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:34:18 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:34:18 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:34:18 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:34:18 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:34:18 --> Final output sent to browser
DEBUG - 2013-09-03 01:34:18 --> Total execution time: 0.1039
DEBUG - 2013-09-03 01:35:21 --> Config Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:35:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:35:21 --> URI Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Router Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Output Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Security Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Input Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:35:21 --> Language Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Loader Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Controller Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:35:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Session Class Initialized
DEBUG - 2013-09-03 01:35:21 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:35:21 --> Session routines successfully run
DEBUG - 2013-09-03 01:35:21 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:35:21 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:35:21 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:35:21 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:35:21 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:35:21 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:35:21 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:35:21 --> Final output sent to browser
DEBUG - 2013-09-03 01:35:21 --> Total execution time: 0.0847
DEBUG - 2013-09-03 01:35:25 --> Config Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:35:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:35:25 --> URI Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Router Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Output Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Security Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Input Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:35:25 --> Language Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Loader Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Controller Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:35:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Session Class Initialized
DEBUG - 2013-09-03 01:35:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:35:25 --> Session routines successfully run
DEBUG - 2013-09-03 01:35:25 --> User Agent Class Initialized
INFO  - 2013-09-03 01:35:25 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:35:25 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:35:25 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:35:25 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:35:25 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:35:25 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:35:25 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:35:25 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:35:25 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:35:25 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:35:25 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:35:25 --> Final output sent to browser
DEBUG - 2013-09-03 01:35:25 --> Total execution time: 0.1062
DEBUG - 2013-09-03 01:36:14 --> Config Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:36:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:36:14 --> URI Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Router Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Output Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Security Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Input Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:36:14 --> Language Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Loader Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Controller Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:36:14 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Session Class Initialized
DEBUG - 2013-09-03 01:36:14 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:36:14 --> Session routines successfully run
DEBUG - 2013-09-03 01:36:14 --> User Agent Class Initialized
INFO  - 2013-09-03 01:36:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:36:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
DEBUG - 2013-09-03 01:36:14 --> DB Transaction Failure
ERROR - 2013-09-03 01:36:14 --> Query error: Unknown column 'pr.week' in 'on clause'
DEBUG - 2013-09-03 01:36:14 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-09-03 01:37:05 --> Config Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:37:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:37:05 --> URI Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Router Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Output Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Security Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Input Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:37:05 --> Language Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Loader Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Controller Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:37:05 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Session Class Initialized
DEBUG - 2013-09-03 01:37:05 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:37:05 --> Session routines successfully run
DEBUG - 2013-09-03 01:37:05 --> User Agent Class Initialized
INFO  - 2013-09-03 01:37:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:37:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:37:05 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 36
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:37:05 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:37:05 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:37:05 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:37:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:37:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:37:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:37:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:37:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:37:05 --> Final output sent to browser
DEBUG - 2013-09-03 01:37:05 --> Total execution time: 0.1055
DEBUG - 2013-09-03 01:37:23 --> Config Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:37:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:37:23 --> URI Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Router Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Output Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Security Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Input Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:37:23 --> Language Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Loader Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Controller Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:37:23 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Session Class Initialized
DEBUG - 2013-09-03 01:37:23 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:37:23 --> Session routines successfully run
DEBUG - 2013-09-03 01:37:23 --> User Agent Class Initialized
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `ahorro` SET `status` = 1 WHERE `id` =  '227'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '42'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `ahorro` SET `status` = 1 WHERE `id` =  '223'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '110'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `ahorro` SET `status` = 1 WHERE `id` =  '252'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '111'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1590'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '109'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1581'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '112'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1578'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '113'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1496'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '114'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1595'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '115'
INFO  - 2013-09-03 01:37:23 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:37:23 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:37:23 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:37:23 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:37:23 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:37:23 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:37:23 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:37:23 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:37:23 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:37:23 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:37:23 --> Final output sent to browser
DEBUG - 2013-09-03 01:37:23 --> Total execution time: 0.6355
DEBUG - 2013-09-03 01:37:33 --> Config Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:37:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:37:33 --> URI Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Router Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Output Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Security Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Input Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:37:33 --> Language Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Loader Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Controller Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:37:33 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Session Class Initialized
DEBUG - 2013-09-03 01:37:33 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:37:33 --> Session routines successfully run
DEBUG - 2013-09-03 01:37:33 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:37:33 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:37:33 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:37:33 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:37:33 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:37:33 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:37:33 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:37:33 --> Final output sent to browser
DEBUG - 2013-09-03 01:37:33 --> Total execution time: 0.0485
DEBUG - 2013-09-03 01:37:34 --> Config Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:37:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:37:34 --> URI Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Router Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Output Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Security Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Input Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:37:34 --> Language Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Loader Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Controller Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:37:34 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Session Class Initialized
DEBUG - 2013-09-03 01:37:34 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:37:34 --> Session routines successfully run
DEBUG - 2013-09-03 01:37:34 --> User Agent Class Initialized
INFO  - 2013-09-03 01:37:34 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:37:34 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:37:34 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:37:34 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:37:34 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:37:34 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:37:34 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:37:34 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:37:34 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:37:34 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:37:34 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:37:34 --> Final output sent to browser
DEBUG - 2013-09-03 01:37:34 --> Total execution time: 0.1481
DEBUG - 2013-09-03 01:40:41 --> Config Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:40:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:40:41 --> URI Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Router Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Output Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Security Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Input Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:40:41 --> Language Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Loader Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Controller Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:40:41 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Session Class Initialized
DEBUG - 2013-09-03 01:40:41 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:40:41 --> Session routines successfully run
DEBUG - 2013-09-03 01:40:41 --> User Agent Class Initialized
INFO  - 2013-09-03 01:40:41 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:40:41 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
DEBUG - 2013-09-03 01:40:41 --> DB Transaction Failure
ERROR - 2013-09-03 01:40:41 --> Query error: Table 'ahorro_temp' already exists
DEBUG - 2013-09-03 01:40:41 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-09-03 01:41:55 --> Config Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:41:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:41:55 --> URI Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Router Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Output Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Security Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Input Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:41:55 --> Language Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Loader Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Controller Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:41:55 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Session Class Initialized
DEBUG - 2013-09-03 01:41:55 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:41:55 --> Session routines successfully run
DEBUG - 2013-09-03 01:41:55 --> User Agent Class Initialized
INFO  - 2013-09-03 01:41:55 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:41:55 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:41:55 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:41:55 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:41:55 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:41:55 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:41:55 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:41:55 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:41:55 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:41:55 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:41:55 --> Final output sent to browser
DEBUG - 2013-09-03 01:41:55 --> Total execution time: 0.1058
DEBUG - 2013-09-03 01:42:06 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:06 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:06 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:06 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:06 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:06 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:06 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:06 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:06 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:06 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 37
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:06 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:06 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:06 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:06 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:06 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:06 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:06 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:06 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:06 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:06 --> Total execution time: 0.1015
DEBUG - 2013-09-03 01:42:09 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:09 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:09 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:09 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:09 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:09 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:09 --> Total execution time: 0.0606
DEBUG - 2013-09-03 01:42:09 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:09 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:09 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:09 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:09 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:09 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:09 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:09 --> Total execution time: 0.0552
DEBUG - 2013-09-03 01:42:11 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:11 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:11 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:11 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:11 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:11 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:42:11 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:42:11 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:11 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:11 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:11 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:11 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:11 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:11 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:11 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:11 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:11 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:11 --> Total execution time: 0.1481
DEBUG - 2013-09-03 01:42:14 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:14 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:14 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:14 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:14 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:14 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:14 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:14 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 37
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:14 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:14 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:14 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:14 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:14 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:14 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:14 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:14 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:14 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:14 --> Total execution time: 0.1055
DEBUG - 2013-09-03 01:42:20 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:20 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:20 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:20 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:20 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 37
		
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1410')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1410
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2300', `status` = 3, `week_end` = '37' WHERE `id` =  '1410'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1413')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1413
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2750', `status` = 3, `week_end` = '37' WHERE `id` =  '1413'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1415')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1415
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1415'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '37', '2013', '1', '1438')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1438
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4600', `status` = 3, `week_end` = '37' WHERE `id` =  '1438'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '37', '2013', '1', '1440')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2369.21994018555' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1441')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1441
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1725', `status` = 3, `week_end` = '37' WHERE `id` =  '1441'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1442')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1442
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '37' WHERE `id` =  '1442'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1443')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1443
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '37' WHERE `id` =  '1443'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1444')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1444
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1444'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1445')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1445
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1445'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1446')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1446
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1446'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1448')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1448
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1448'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1449')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1449
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '37' WHERE `id` =  '1449'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('402.50', '37', '2013', '1', '1450')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1450
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3220' WHERE `id` =  '1450'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1451')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1451
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '37' WHERE `id` =  '1451'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '37', '2013', '1', '1452')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1452
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400', `status` = 3, `week_end` = '37' WHERE `id` =  '1452'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1453')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1453
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1150', `status` = 3, `week_end` = '37' WHERE `id` =  '1453'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '37', '2013', '1', '1454')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1454
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660', `status` = 3, `week_end` = '37' WHERE `id` =  '1454'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1455')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1455
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1455'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1457')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1457
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1457'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1459')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1459
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1459'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1460')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1460
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1460'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1462')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1462
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1462'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1465')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1465
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1465'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1466')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1466
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1466'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1467')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1467
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1467'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1471')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1471
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1221' WHERE `id` =  '1471'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('286.00', '37', '2013', '1', '1478')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1478
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2288' WHERE `id` =  '1478'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1479')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1479
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1479'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1480')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1480
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1480'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1482')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1482
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1482'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1483')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1483
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1840' WHERE `id` =  '1483'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '37', '2013', '1', '1484')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1484
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '528' WHERE `id` =  '1484'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1486')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1486
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1486'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1488')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1488
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1488'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1491')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1491
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200' WHERE `id` =  '1491'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '37', '2013', '1', '1494')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2933.36010742188' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('194.35', '37', '2013', '1', '1496')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1496
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1166.10003662109' WHERE `id` =  '1496'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '37', '2013', '1', '1500')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4600.75' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1501')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '924' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1502')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1503')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1207.5' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '37', '2013', '1', '1504')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1505')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1506')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '37', '2013', '1', '1507')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1509')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '37', '2013', '1', '1510')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '616' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1511')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '37', '2013', '1', '1512')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1001' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1513')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1514')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '37', '2013', '1', '1515')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3003' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1516')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1517')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1519')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '37', '2013', '1', '1520')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5313' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1521')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1523')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '37', '2013', '1', '1524')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1524
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1524'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1525')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1526')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1527')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1529')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1531')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1532')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1533')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '37', '2013', '1', '1537')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '37', '2013', '1', '1538')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1870' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1539')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1540')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1541')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1542')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1542
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100' WHERE `id` =  '1542'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '37', '2013', '1', '1543')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1437.5' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '37', '2013', '1', '1544')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2750' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1545')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1545
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '37' WHERE `id` =  '1545'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1546')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '37', '2013', '1', '1548')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2062.5' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1550')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '37', '2013', '1', '1553')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4125' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1555')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '862.5' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1557')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '37', '2013', '1', '1558')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '572' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1559')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1559
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1559'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1560')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1560
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1560'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '37', '2013', '1', '1561')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2772' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '37', '2013', '1', '1562')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1243' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '37', '2013', '1', '1563')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '352' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1564')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '37', '2013', '1', '1565')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '37', '2013', '1', '1566')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '255.559997558594' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '37', '2013', '1', '1567')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1568')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1569')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1570')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1572')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1573')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1573
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1573'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1574')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1575')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1576')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1577')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1578')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1578
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '172.5' WHERE `id` =  '1578'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '37', '2013', '1', '1579')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1195.58999633789' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '37', '2013', '1', '1580')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2178' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('495.00', '37', '2013', '1', '1581')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1581
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1581'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '37', '2013', '1', '1582')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '37', '2013', '1', '1583')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1584')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '37', '2013', '1', '1585')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1586')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1587')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1587
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1587'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '37', '2013', '1', '1588')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '412.5' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '37', '2013', '1', '1589')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '445.5' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1590')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1590
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1590'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '37', '2013', '1', '1591')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1592')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1593')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1593
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1593'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1594')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '37', '2013', '1', '1595')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1595
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1595'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '37', '2013', '1', '1596')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '412.5' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1597')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1598')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '37', '2013', '1', '1599')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '276' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1600')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1600
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1600'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1601')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1602')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1602
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690', `status` = 3, `week_end` = '37' WHERE `id` =  '1602'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '37', '2013', '1', '1603')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.659973144531' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1604')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1605')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '37', '2013', '1', '1606')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.340026855469' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '37', '2013', '1', '1607')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.659973144531' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '37', '2013', '1', '1608')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '122.220001220703' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1609')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '37', '2013', '1', '1610')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '408.579986572266' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '37', '2013', '1', '1611')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '171.119995117188' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1612')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1613')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1614')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '37', '2013', '1', '1615')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '157.139999389648' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1616')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1616
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1616'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '37', '2013', '1', '1617')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.780029296875' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1618')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '37', '2013', '1', '1619')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '894.440002441406' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1620')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '37', '2013', '1', '1621')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '598' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1622')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '37', '2013', '1', '1623')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '412.5' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '37', '2013', '1', '1624')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '127.779998779297' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '37', '2013', '1', '1625')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1626')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '37', '2013', '1', '1627')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1507.57995605469' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '37', '2013', '1', '1628')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '37', '2013', '1', '1629')
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '122.220001220703' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:42:20 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:20 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:20 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:20 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:20 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:20 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:20 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:20 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:20 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:20 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:20 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:20 --> Total execution time: 0.7378
DEBUG - 2013-09-03 01:42:38 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:38 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:38 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:38 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:38 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:38 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:38 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:38 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:38 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:38 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:38 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:38 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:38 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:38 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:38 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:38 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:38 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:38 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:38 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:38 --> Total execution time: 0.1495
DEBUG - 2013-09-03 01:42:47 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:47 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:47 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:47 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:47 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:47 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:47 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:47 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:42:47 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:42:47 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 39
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:47 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:47 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:47 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:47 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:47 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:47 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:47 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:47 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:47 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:47 --> Total execution time: 0.1132
DEBUG - 2013-09-03 01:42:52 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:52 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:52 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:52 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:52 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:52 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:42:52 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:42:52 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:52 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:52 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:52 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:52 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:52 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:52 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:52 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:52 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:52 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:52 --> Total execution time: 0.1441
DEBUG - 2013-09-03 01:42:59 --> Config Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:42:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:42:59 --> URI Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Router Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Output Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Security Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Input Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:42:59 --> Language Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Loader Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Controller Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:42:59 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Model Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Session Class Initialized
DEBUG - 2013-09-03 01:42:59 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:42:59 --> Session routines successfully run
DEBUG - 2013-09-03 01:42:59 --> User Agent Class Initialized
INFO  - 2013-09-03 01:42:59 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:59 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:42:59 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:59 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:42:59 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:42:59 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:42:59 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:42:59 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:42:59 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:42:59 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:42:59 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:42:59 --> Final output sent to browser
DEBUG - 2013-09-03 01:42:59 --> Total execution time: 0.1531
DEBUG - 2013-09-03 01:43:04 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:04 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:04 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:04 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:04 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:04 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 38
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:04 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:04 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:04 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:04 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:04 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:04 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:04 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:04 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:04 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:04 --> Total execution time: 0.1057
DEBUG - 2013-09-03 01:43:09 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:09 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:09 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:09 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:09 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 38
		
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1415')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1415
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1415'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '38', '2013', '1', '1440')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2707.67993164062' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('402.50', '38', '2013', '1', '1450')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1450
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3622.5' WHERE `id` =  '1450'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1455')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1455
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1455'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1457')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1457
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1457'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1459')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1459
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '38' WHERE `id` =  '1459'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1460')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1460
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200', `status` = 3, `week_end` = '38' WHERE `id` =  '1460'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1462')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1462
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '38' WHERE `id` =  '1462'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1465')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1465
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '38' WHERE `id` =  '1465'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1466')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1466
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '38' WHERE `id` =  '1466'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1467')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1467
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1467'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES (99, '38', '2013', '1', '1471')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1471
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '38' WHERE `id` =  '1471'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('286.00', '38', '2013', '1', '1478')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1478
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2574' WHERE `id` =  '1478'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1479')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1479
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1479'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1480')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1480
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1480'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1482')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1482
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1482'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '38', '2013', '1', '1483')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1483
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2070' WHERE `id` =  '1483'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '38', '2013', '1', '1484')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1484
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '594' WHERE `id` =  '1484'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1486')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1486
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1486'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1488')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1488
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2970' WHERE `id` =  '1488'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '38', '2013', '1', '1491')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1491
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1491'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '38', '2013', '1', '1494')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300.03012084961' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('194.35', '38', '2013', '1', '1496')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1496
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1360.45004272461' WHERE `id` =  '1496'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '38', '2013', '1', '1500')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5258' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '38', '2013', '1', '1501')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1056' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1502')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '38', '2013', '1', '1503')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1380' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '38', '2013', '1', '1504')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1505')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1506')
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:43:09 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '38', '2013', '1', '1507')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1509')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '38', '2013', '1', '1510')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '704' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1511')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '38', '2013', '1', '1512')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1144' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1513')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1514')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '38', '2013', '1', '1515')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3503.5' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1516')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1517')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1519')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '38', '2013', '1', '1520')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '6198.5' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1521')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1523')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '38', '2013', '1', '1524')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1524
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2887.5' WHERE `id` =  '1524'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1525')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1526')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1527')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1529')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1531')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1532')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1533')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1155' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '38', '2013', '1', '1537')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '594' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '38', '2013', '1', '1538')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2244' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1539')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1540')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1541')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1542')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1542
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '38' WHERE `id` =  '1542'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '38', '2013', '1', '1543')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1725' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '38', '2013', '1', '1544')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1546')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '38', '2013', '1', '1548')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1550')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '38', '2013', '1', '1553')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4950' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '38', '2013', '1', '1555')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1557')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '38', '2013', '1', '1558')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '715' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1560')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1560
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1560'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '38', '2013', '1', '1561')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3465' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '38', '2013', '1', '1562')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1553.75' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '38', '2013', '1', '1563')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1564')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '38', '2013', '1', '1565')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '38', '2013', '1', '1566')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '319.449996948242' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '38', '2013', '1', '1567')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1925' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1568')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1569')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1570')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1572')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1573')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1573
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '38' WHERE `id` =  '1573'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1574')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1575')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1576')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '287.5' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1577')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1578')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1578
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1578'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '38', '2013', '1', '1579')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1594.11999511719' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '38', '2013', '1', '1580')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2904' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('495.00', '38', '2013', '1', '1581')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1581
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1581'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '38', '2013', '1', '1582')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3080' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '38', '2013', '1', '1583')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1584')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '38', '2013', '1', '1585')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1380' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '38', '2013', '1', '1586')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1587')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1587
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1587'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '38', '2013', '1', '1588')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '38', '2013', '1', '1589')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '594' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '38', '2013', '1', '1590')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1590
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1590'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '38', '2013', '1', '1591')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1592')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1593')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1593
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1593'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '38', '2013', '1', '1594')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES (191.66, '38', '2013', '1', '1595')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1595
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '38' WHERE `id` =  '1595'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '38', '2013', '1', '1596')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1597')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1598')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '38', '2013', '1', '1599')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '368' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1600')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1600
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1600'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1601')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '38', '2013', '1', '1603')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1149.9899597168' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1604')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1605')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '38', '2013', '1', '1606')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100.0100402832' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '38', '2013', '1', '1607')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1149.9899597168' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '38', '2013', '1', '1608')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '183.330001831055' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1609')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '38', '2013', '1', '1610')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '612.869979858398' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '38', '2013', '1', '1611')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '256.679992675781' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1612')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1613')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1614')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '38', '2013', '1', '1615')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '235.709999084473' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1616')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1616
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1616'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '38', '2013', '1', '1617')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1466.67004394531' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1618')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '38', '2013', '1', '1619')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1341.66000366211' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1620')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '38', '2013', '1', '1621')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '897' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1622')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '38', '2013', '1', '1623')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '618.75' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '38', '2013', '1', '1624')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '191.669998168945' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '38', '2013', '1', '1625')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575.009994506836' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1626')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '38', '2013', '1', '1627')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2261.36993408203' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '38', '2013', '1', '1628')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575.009994506836' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '38', '2013', '1', '1629')
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '183.330001831055' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:43:10 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:10 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =38
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:10 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =38
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:10 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:10 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:10 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:10 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:10 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:10 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:10 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:10 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:10 --> Total execution time: 0.6995
DEBUG - 2013-09-03 01:43:17 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:17 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:17 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:17 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:17 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:17 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:17 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:17 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:43:17 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
DEBUG - 2013-09-03 01:43:17 --> DB Transaction Failure
ERROR - 2013-09-03 01:43:17 --> Query error: Table 'ahorro_temp' already exists
DEBUG - 2013-09-03 01:43:17 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-09-03 01:43:25 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:25 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:25 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:25 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:25 --> User Agent Class Initialized
ERROR - 2013-09-03 01:43:25 --> Severity: Notice  --> Undefined variable: report_week /Applications/XAMPP/xamppfiles/htdocs/hogue/application/views/be/reportes/main.php 31
DEBUG - 2013-09-03 01:43:25 --> File loaded: application/views/be/reportes/main.php
DEBUG - 2013-09-03 01:43:25 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:25 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:25 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:25 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:25 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:25 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:25 --> Total execution time: 0.0899
DEBUG - 2013-09-03 01:43:29 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:29 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:29 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:29 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:29 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:29 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:29 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:29 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:43:29 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:43:29 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:29 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:29 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:29 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:29 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:29 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:29 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:29 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:29 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:30 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:30 --> Total execution time: 0.1494
DEBUG - 2013-09-03 01:43:33 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:33 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:33 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:33 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:33 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:33 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:33 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:33 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:33 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:33 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =38
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:33 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =38
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:33 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:33 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:33 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:33 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:33 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:33 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:33 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:33 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:33 --> Total execution time: 0.1459
DEBUG - 2013-09-03 01:43:36 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:36 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:36 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:36 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:36 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:36 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:36 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:36 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:43:36 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:43:36 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 39
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:36 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:36 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:36 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:36 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:36 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:36 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:36 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:36 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:36 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:36 --> Total execution time: 0.1040
DEBUG - 2013-09-03 01:43:42 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:42 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:42 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:42 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:42 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:42 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:42 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 39
		
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1415')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1415
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '39' WHERE `id` =  '1415'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '39', '2013', '1', '1440')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3046.1399230957' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('402.50', '39', '2013', '1', '1450')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1450
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4025', `status` = 3, `week_end` = '39' WHERE `id` =  '1450'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('286.00', '39', '2013', '1', '1478')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1478
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2860', `status` = 3, `week_end` = '39' WHERE `id` =  '1478'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1479')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1479
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '39' WHERE `id` =  '1479'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1480')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1480
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200', `status` = 3, `week_end` = '39' WHERE `id` =  '1480'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1482')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1482
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '39' WHERE `id` =  '1482'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '39', '2013', '1', '1483')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1483
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2300', `status` = 3, `week_end` = '39' WHERE `id` =  '1483'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '39', '2013', '1', '1484')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1484
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660', `status` = 3, `week_end` = '39' WHERE `id` =  '1484'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1486')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1486
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200', `status` = 3, `week_end` = '39' WHERE `id` =  '1486'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1488')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1488
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300', `status` = 3, `week_end` = '39' WHERE `id` =  '1488'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '39', '2013', '1', '1491')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1491
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2750', `status` = 3, `week_end` = '39' WHERE `id` =  '1491'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '39', '2013', '1', '1494')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3666.70013427734' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('194.35', '39', '2013', '1', '1496')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1496
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1554.80004882812' WHERE `id` =  '1496'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '39', '2013', '1', '1500')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5915.25' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '39', '2013', '1', '1501')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1188' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1502')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '39', '2013', '1', '1503')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1552.5' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '39', '2013', '1', '1504')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4950' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1505')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1506')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '39', '2013', '1', '1507')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1509')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '39', '2013', '1', '1510')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '792' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1511')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '39', '2013', '1', '1512')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1287' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1513')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1514')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '39', '2013', '1', '1515')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4004' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1516')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1517')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1519')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '39', '2013', '1', '1520')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '7084' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1521')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1523')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '39', '2013', '1', '1524')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1524
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300', `status` = 3, `week_end` = '39' WHERE `id` =  '1524'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1525')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1526')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1527')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1529')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1531')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1532')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1533')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '39', '2013', '1', '1537')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '693' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '39', '2013', '1', '1538')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2618' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1539')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1540')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1541')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '39', '2013', '1', '1543')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2012.5' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '39', '2013', '1', '1544')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1546')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '39', '2013', '1', '1548')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2887.5' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1550')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '39', '2013', '1', '1553')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5775' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '39', '2013', '1', '1555')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1207.5' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1557')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '39', '2013', '1', '1558')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '858' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '39', '2013', '1', '1561')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4158' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '39', '2013', '1', '1562')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1864.5' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '39', '2013', '1', '1563')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '528' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1564')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '39', '2013', '1', '1565')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '39', '2013', '1', '1566')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '39', '2013', '1', '1567')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1568')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1569')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1570')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1572')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1574')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1575')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1576')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1577')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1578')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1578
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '287.5' WHERE `id` =  '1578'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '39', '2013', '1', '1579')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1992.64999389648' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '39', '2013', '1', '1580')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3630' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('495.00', '39', '2013', '1', '1581')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1581
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1581'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '39', '2013', '1', '1582')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '39', '2013', '1', '1583')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4125' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1584')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '39', '2013', '1', '1585')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1840' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '39', '2013', '1', '1586')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1375' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1587')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1587
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '39' WHERE `id` =  '1587'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '39', '2013', '1', '1588')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '687.5' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '39', '2013', '1', '1589')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '742.5' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '39', '2013', '1', '1590')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1590
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1590'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '39', '2013', '1', '1591')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5500' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1592')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1593')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1593
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '39' WHERE `id` =  '1593'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '39', '2013', '1', '1594')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '862.5' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '39', '2013', '1', '1596')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '687.5' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1597')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1598')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '39', '2013', '1', '1599')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1600')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1600
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '39' WHERE `id` =  '1600'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1601')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '39', '2013', '1', '1603')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1533.31994628906' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1604')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1605')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '39', '2013', '1', '1606')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1466.68005371094' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '39', '2013', '1', '1607')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1533.31994628906' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '39', '2013', '1', '1608')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1609')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '39', '2013', '1', '1610')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '817.159973144531' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '39', '2013', '1', '1611')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '342.239990234375' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1612')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1613')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1614')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '39', '2013', '1', '1615')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '314.279998779297' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1616')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1616
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460', `status` = 3, `week_end` = '39' WHERE `id` =  '1616'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '39', '2013', '1', '1617')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1955.56005859375' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1618')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '39', '2013', '1', '1619')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1788.88000488281' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1620')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '39', '2013', '1', '1621')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1196' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1622')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '39', '2013', '1', '1623')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '39', '2013', '1', '1624')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '255.559997558594' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '39', '2013', '1', '1625')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.679992675781' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1626')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '39', '2013', '1', '1627')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3015.15991210938' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '39', '2013', '1', '1628')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.679992675781' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '39', '2013', '1', '1629')
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:43:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:43:43 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =39
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:43 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =39
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:43 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:43 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:43 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:43 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:43 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:43 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:43 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:43 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:43 --> Total execution time: 0.7163
DEBUG - 2013-09-03 01:43:49 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:49 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:50 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:50 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:50 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:50 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:50 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:50 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:50 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:43:50 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:43:50 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:50 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:50 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:50 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:50 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:50 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:50 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:50 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:50 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:50 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:50 --> Total execution time: 0.4507
DEBUG - 2013-09-03 01:43:52 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:52 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:52 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:52 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:52 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:52 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:43:52 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:43:52 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:52 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:52 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:52 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:52 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:52 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:52 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:52 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:52 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:52 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:52 --> Total execution time: 0.1499
DEBUG - 2013-09-03 01:43:54 --> Config Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:43:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:43:54 --> URI Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Router Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Output Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Security Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Input Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:43:54 --> Language Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Loader Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Controller Class Initialized
DEBUG - 2013-09-03 01:43:54 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:43:55 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Model Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Session Class Initialized
DEBUG - 2013-09-03 01:43:55 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:43:55 --> Session routines successfully run
DEBUG - 2013-09-03 01:43:55 --> User Agent Class Initialized
INFO  - 2013-09-03 01:43:55 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:55 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:43:55 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =38
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:55 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =38
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:43:55 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:43:55 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:43:55 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:43:55 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:43:55 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:43:55 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:43:55 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:43:55 --> Final output sent to browser
DEBUG - 2013-09-03 01:43:55 --> Total execution time: 0.1686
DEBUG - 2013-09-03 01:44:00 --> Config Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:44:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:44:00 --> URI Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Router Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Output Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Security Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Input Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:44:00 --> Language Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Loader Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Controller Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:44:00 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Session Class Initialized
DEBUG - 2013-09-03 01:44:00 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:44:00 --> Session routines successfully run
DEBUG - 2013-09-03 01:44:00 --> User Agent Class Initialized
INFO  - 2013-09-03 01:44:00 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:44:00 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:44:00 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =39
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:44:00 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =39
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:44:00 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:44:00 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:44:00 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:44:00 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:44:00 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:44:00 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:44:00 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:44:00 --> Final output sent to browser
DEBUG - 2013-09-03 01:44:00 --> Total execution time: 0.1900
DEBUG - 2013-09-03 01:44:05 --> Config Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:44:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:44:05 --> URI Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Router Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Output Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Security Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Input Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:44:05 --> Language Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Loader Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Controller Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:44:05 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Session Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:44:05 --> Session routines successfully run
DEBUG - 2013-09-03 01:44:05 --> User Agent Class Initialized
INFO  - 2013-09-03 01:44:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:44:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:44:05 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 40
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:44:05 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:44:05 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:44:05 --> Final output sent to browser
DEBUG - 2013-09-03 01:44:05 --> Total execution time: 0.1049
DEBUG - 2013-09-03 01:44:05 --> Config Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:44:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:44:05 --> URI Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Router Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Output Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Security Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Input Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:44:05 --> Language Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Loader Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Controller Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:44:05 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Model Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Session Class Initialized
DEBUG - 2013-09-03 01:44:05 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:44:05 --> Session routines successfully run
DEBUG - 2013-09-03 01:44:05 --> User Agent Class Initialized
INFO  - 2013-09-03 01:44:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:44:05 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:44:05 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 40
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:44:05 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:44:05 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:44:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:44:05 --> Final output sent to browser
DEBUG - 2013-09-03 01:44:05 --> Total execution time: 0.1491
DEBUG - 2013-09-03 01:50:09 --> Config Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:50:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:50:09 --> URI Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Router Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Output Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Security Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Input Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:50:09 --> Language Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Loader Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Controller Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:50:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Session Class Initialized
DEBUG - 2013-09-03 01:50:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:50:09 --> Session routines successfully run
DEBUG - 2013-09-03 01:50:09 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:50:09 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 01:50:09 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:50:09 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:50:09 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:50:09 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:50:09 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:50:09 --> Final output sent to browser
DEBUG - 2013-09-03 01:50:09 --> Total execution time: 0.0619
DEBUG - 2013-09-03 01:50:12 --> Config Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:50:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:50:12 --> URI Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Router Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Output Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Security Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Input Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:50:12 --> Language Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Loader Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Controller Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:50:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Session Class Initialized
DEBUG - 2013-09-03 01:50:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:50:12 --> Session routines successfully run
DEBUG - 2013-09-03 01:50:12 --> User Agent Class Initialized
ERROR - 2013-09-03 01:50:12 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:50:12 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:50:12 --> Final output sent to browser
DEBUG - 2013-09-03 01:50:12 --> Total execution time: 0.0442
DEBUG - 2013-09-03 01:50:13 --> Config Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:50:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:50:13 --> URI Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Router Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Output Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Security Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Input Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:50:13 --> Language Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Loader Class Initialized
DEBUG - 2013-09-03 01:50:13 --> Controller Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:50:14 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Session Class Initialized
DEBUG - 2013-09-03 01:50:14 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:50:14 --> Session routines successfully run
DEBUG - 2013-09-03 01:50:14 --> User Agent Class Initialized
ERROR - 2013-09-03 01:50:14 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:50:14 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:50:14 --> Final output sent to browser
DEBUG - 2013-09-03 01:50:14 --> Total execution time: 0.1860
DEBUG - 2013-09-03 01:51:02 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:02 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:02 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:02 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:02 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:02 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:02 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:02 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:02 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:02 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:02 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:02 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:02 --> File loaded: application/views/be/dashboard.php
DEBUG - 2013-09-03 01:51:02 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:51:02 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:51:02 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:51:02 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:51:02 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:51:02 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:02 --> Total execution time: 0.0498
DEBUG - 2013-09-03 01:51:03 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:03 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:03 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:03 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:03 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:03 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 01:51:03 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:51:03 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:51:03 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:51:03 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:51:03 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:51:03 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:03 --> Total execution time: 0.0806
DEBUG - 2013-09-03 01:51:11 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:11 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:11 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:11 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:11 --> User Agent Class Initialized
ERROR - 2013-09-03 01:51:11 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:51:11 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:51:11 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:11 --> Total execution time: 0.0422
DEBUG - 2013-09-03 01:51:13 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:13 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:13 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:13 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:13 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:13 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:13 --> User Agent Class Initialized
ERROR - 2013-09-03 01:51:13 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:51:13 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:51:13 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:13 --> Total execution time: 0.0497
DEBUG - 2013-09-03 01:51:19 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:19 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:19 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:19 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:19 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:19 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:19 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:19 --> File loaded: application/views/be/prestamos/nuevo.php
DEBUG - 2013-09-03 01:51:19 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:51:19 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:51:19 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:51:19 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:51:19 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:51:19 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:19 --> Total execution time: 0.0456
DEBUG - 2013-09-03 01:51:22 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:22 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:22 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:22 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:22 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:22 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:22 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:22 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:22 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:22 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:22 --> Total execution time: 0.0503
DEBUG - 2013-09-03 01:51:22 --> Total execution time: 0.0502
DEBUG - 2013-09-03 01:51:25 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:25 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:25 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:25 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:25 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:25 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:25 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:25 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:25 --> User Agent Class Initialized
ERROR - 2013-09-03 01:51:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:51:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:51:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:51:25 --> Final output sent to browser
ERROR - 2013-09-03 01:51:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:51:25 --> Total execution time: 0.0523
DEBUG - 2013-09-03 01:51:25 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:25 --> Total execution time: 0.0520
DEBUG - 2013-09-03 01:51:34 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:34 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:34 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:34 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:34 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:34 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:34 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:34 --> File loaded: application/views/be/prestamos/nuevo.php
DEBUG - 2013-09-03 01:51:34 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:51:34 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:51:34 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:51:34 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:51:34 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:51:34 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:34 --> Total execution time: 0.0852
DEBUG - 2013-09-03 01:51:41 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:41 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:41 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:41 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:41 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:41 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:41 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:41 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 01:51:41 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:51:41 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:51:41 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:51:41 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:51:41 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:51:41 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:41 --> Total execution time: 0.0595
DEBUG - 2013-09-03 01:51:43 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:43 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:43 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:43 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:43 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:43 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:43 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:43 --> Total execution time: 0.0419
DEBUG - 2013-09-03 01:51:52 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:52 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:52 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:52 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:52 --> User Agent Class Initialized
ERROR - 2013-09-03 01:51:52 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:51:52 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:51:52 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:52 --> Total execution time: 0.0421
DEBUG - 2013-09-03 01:51:53 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:53 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:53 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:53 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:53 --> User Agent Class Initialized
ERROR - 2013-09-03 01:51:53 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:51:53 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:51:53 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:53 --> Total execution time: 0.0455
DEBUG - 2013-09-03 01:51:58 --> Config Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:51:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:51:58 --> URI Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Router Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Output Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Security Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Input Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:51:58 --> Language Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Loader Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Controller Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:51:58 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Session Class Initialized
DEBUG - 2013-09-03 01:51:58 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:51:58 --> Session routines successfully run
DEBUG - 2013-09-03 01:51:58 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:51:58 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-03 01:51:58 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-03 01:51:58 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:51:58 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:51:58 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:51:58 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:51:58 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:51:58 --> Final output sent to browser
DEBUG - 2013-09-03 01:51:58 --> Total execution time: 0.0532
DEBUG - 2013-09-03 01:52:02 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:02 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:02 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:02 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:02 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:02 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:02 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:52:02 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:02 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:02 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:02 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:02 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:02 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:02 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:02 --> Total execution time: 0.0501
DEBUG - 2013-09-03 01:52:04 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:04 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:04 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:04 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:04 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:52:04 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:52:04 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 36
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:04 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:04 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:04 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:04 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:04 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:04 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:04 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:04 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:04 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:04 --> Total execution time: 0.1060
DEBUG - 2013-09-03 01:52:10 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:10 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:10 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:10 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:10 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:10 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:10 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 36
		
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('138.00', '36', '2013', '1', '1384')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1384
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1380', `status` = 3, `week_end` = '36' WHERE `id` =  '1384'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '36', '2013', '1', '1410')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1410
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2070' WHERE `id` =  '1410'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1411')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1411
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300', `status` = 3, `week_end` = '36' WHERE `id` =  '1411'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1412')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1412
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '36' WHERE `id` =  '1412'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '36', '2013', '1', '1413')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1413
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1413'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1415')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1415
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1155' WHERE `id` =  '1415'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('155.25', '36', '2013', '1', '1416')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1416
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1552.5', `status` = 3, `week_end` = '36' WHERE `id` =  '1416'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1418')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1418
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '36' WHERE `id` =  '1418'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '36', '2013', '1', '1419')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1419
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5500', `status` = 3, `week_end` = '36' WHERE `id` =  '1419'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1424')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1424
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '36' WHERE `id` =  '1424'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '36', '2013', '1', '1427')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1427
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2300', `status` = 3, `week_end` = '36' WHERE `id` =  '1427'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '36', '2013', '1', '1435')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1435
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5500', `status` = 3, `week_end` = '36' WHERE `id` =  '1435'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '36', '2013', '1', '1438')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1438
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4140' WHERE `id` =  '1438'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('153.33', '36', '2013', '1', '1439')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1439
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1379.97001647949', `status` = 3, `week_end` = '36' WHERE `id` =  '1439'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '36', '2013', '1', '1440')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2030.75994873047' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '36', '2013', '1', '1441')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1441
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1552.5' WHERE `id` =  '1441'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1442')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1442
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1442'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '36', '2013', '1', '1443')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1443
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1188' WHERE `id` =  '1443'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1444')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1444
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1444'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1445')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1445
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1445'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1446')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1446
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1446'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1448')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1448
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1448'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '36', '2013', '1', '1449')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1449
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1188' WHERE `id` =  '1449'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('402.50', '36', '2013', '1', '1450')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1450
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2817.5' WHERE `id` =  '1450'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1451')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1451
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1451'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '36', '2013', '1', '1452')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1452
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3960' WHERE `id` =  '1452'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1453')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1453
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1453'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '36', '2013', '1', '1454')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1454
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '594' WHERE `id` =  '1454'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1455')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1455
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1455'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1457')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1457
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1457'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1459')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1459
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1459'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '36', '2013', '1', '1460')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1460
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1460'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1462')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1462
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1462'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1465')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1465
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1465'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1466')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1466
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1466'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1467')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1467
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1467'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('82.50', '36', '2013', '1', '1468')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1468
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660', `status` = 3, `week_end` = '36' WHERE `id` =  '1468'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '36', '2013', '1', '1471')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1471
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1089' WHERE `id` =  '1471'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '36', '2013', '1', '1477')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1477
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '36' WHERE `id` =  '1477'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('286.00', '36', '2013', '1', '1478')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1478
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2002' WHERE `id` =  '1478'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1479')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1479
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1479'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '36', '2013', '1', '1480')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1480
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1480'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1482')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1482
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1482'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '36', '2013', '1', '1483')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1483
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1610' WHERE `id` =  '1483'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '36', '2013', '1', '1484')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1484
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '462' WHERE `id` =  '1484'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('322.00', '36', '2013', '1', '1485')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1485
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805', `status` = 3, `week_end` = '36' WHERE `id` =  '1485'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '36', '2013', '1', '1486')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1486
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1486'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1487')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1487
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690', `status` = 3, `week_end` = '36' WHERE `id` =  '1487'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1488')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1488
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1488'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '36', '2013', '1', '1491')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1491
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1925' WHERE `id` =  '1491'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '36', '2013', '1', '1494')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2566.69009399414' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '36', '2013', '1', '1499')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1499
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035', `status` = 3, `week_end` = '36' WHERE `id` =  '1499'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '36', '2013', '1', '1500')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3943.5' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '36', '2013', '1', '1501')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '792' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1502')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '36', '2013', '1', '1503')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '36', '2013', '1', '1504')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '36', '2013', '1', '1505')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1506')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '36', '2013', '1', '1507')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2750' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1509')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '36', '2013', '1', '1510')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '528' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1511')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '36', '2013', '1', '1512')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '858' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1513')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '36', '2013', '1', '1514')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '36', '2013', '1', '1515')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2502.5' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1516')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1517')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1519')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '36', '2013', '1', '1520')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4427.5' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1521')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1523')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '36', '2013', '1', '1524')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1524
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2062.5' WHERE `id` =  '1524'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1525')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '36', '2013', '1', '1526')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '287.5' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '36', '2013', '1', '1527')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '287.5' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1529')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '36', '2013', '1', '1531')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1532')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1533')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('345.00', '36', '2013', '1', '1535')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1535
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1725', `status` = 3, `week_end` = '36' WHERE `id` =  '1535'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '36', '2013', '1', '1537')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '396' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '36', '2013', '1', '1538')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1496' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1539')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1540')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1541')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '36', '2013', '1', '1542')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1542
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1542'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '36', '2013', '1', '1543')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1150' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '36', '2013', '1', '1544')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1545')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1545
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1545'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1546')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '36', '2013', '1', '1548')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1550')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '36', '2013', '1', '1553')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '36', '2013', '1', '1555')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1557')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '36', '2013', '1', '1558')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '429' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '36', '2013', '1', '1559')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1559
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1559'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1560')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1560
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1560'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '36', '2013', '1', '1561')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2079' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '36', '2013', '1', '1562')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '932.25' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '36', '2013', '1', '1563')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '264' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1564')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '165' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '36', '2013', '1', '1565')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '36', '2013', '1', '1566')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '191.669998168945' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '36', '2013', '1', '1567')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1155' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1568')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1569')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1570')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '36', '2013', '1', '1572')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1573')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1573
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1573'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1574')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1575')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '36', '2013', '1', '1576')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '172.5' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '36', '2013', '1', '1577')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '165' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '36', '2013', '1', '1579')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '797.059997558594' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '36', '2013', '1', '1580')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1452' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '36', '2013', '1', '1582')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '36', '2013', '1', '1583')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1584')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '36', '2013', '1', '1585')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '36', '2013', '1', '1586')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '36', '2013', '1', '1587')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1587
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1587'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '36', '2013', '1', '1588')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '36', '2013', '1', '1589')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '297' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '36', '2013', '1', '1591')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1592')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1593')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1593
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1593'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '36', '2013', '1', '1594')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '36', '2013', '1', '1596')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1597')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1598')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '36', '2013', '1', '1599')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '184' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1600')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1600
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1600'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1601')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '36', '2013', '1', '1602')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1602
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1602'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '36', '2013', '1', '1603')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.329986572266' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1604')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '110' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '36', '2013', '1', '1605')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '165' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '36', '2013', '1', '1606')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '366.670013427734' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '36', '2013', '1', '1607')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.329986572266' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '36', '2013', '1', '1608')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '61.1100006103516' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '36', '2013', '1', '1609')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '36', '2013', '1', '1610')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '204.289993286133' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '36', '2013', '1', '1611')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '85.5599975585938' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1612')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '115' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '36', '2013', '1', '1613')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '36', '2013', '1', '1614')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '36', '2013', '1', '1615')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '78.5699996948242' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1616')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1616
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '115' WHERE `id` =  '1616'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '36', '2013', '1', '1617')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.890014648438' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '36', '2013', '1', '1618')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '36', '2013', '1', '1619')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '447.220001220703' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '36', '2013', '1', '1620')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '36', '2013', '1', '1621')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '299' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '36', '2013', '1', '1622')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '115' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '36', '2013', '1', '1623')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '206.25' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '36', '2013', '1', '1624')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '63.8899993896484' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '36', '2013', '1', '1625')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '191.669998168945' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '36', '2013', '1', '1626')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '110' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '36', '2013', '1', '1627')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '753.789978027344' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '36', '2013', '1', '1628')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '191.669998168945' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '36', '2013', '1', '1629')
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '61.1100006103516' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `ahorro` SET `status` = 1 WHERE `id` =  '227'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '42'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `ahorro` SET `status` = 1 WHERE `id` =  '223'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '110'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `ahorro` SET `status` = 1 WHERE `id` =  '252'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '111'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1590'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '109'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1581'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '112'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1578'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '113'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1496'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '114'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `prestamo` SET `status` = 1 WHERE `id` =  '1595'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::revisar_excentos: UPDATE `excento` SET `status` = 0 WHERE `id` =  '115'
INFO  - 2013-09-03 01:52:10 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 01:52:10 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:10 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:10 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:10 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:10 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:10 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:10 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:10 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:10 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:10 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:10 --> Total execution time: 0.7856
DEBUG - 2013-09-03 01:52:14 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:14 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:14 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:14 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:14 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:14 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:14 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:52:14 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:52:14 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 37
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:14 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:14 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:14 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:14 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:14 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:14 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:14 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:14 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:14 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:14 --> Total execution time: 0.1329
DEBUG - 2013-09-03 01:52:20 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:20 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:20 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:20 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:20 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 37
		
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1410')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1410
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2300', `status` = 3, `week_end` = '37' WHERE `id` =  '1410'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1413')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1413
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2750', `status` = 3, `week_end` = '37' WHERE `id` =  '1413'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1415')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1415
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1415'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '37', '2013', '1', '1438')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1438
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4600', `status` = 3, `week_end` = '37' WHERE `id` =  '1438'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '37', '2013', '1', '1440')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2369.21994018555' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1441')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1441
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1725', `status` = 3, `week_end` = '37' WHERE `id` =  '1441'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1442')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1442
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '37' WHERE `id` =  '1442'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1443')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1443
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '37' WHERE `id` =  '1443'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1444')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1444
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1444'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1445')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1445
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1445'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1446')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1446
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1446'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1448')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1448
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1448'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1449')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1449
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '37' WHERE `id` =  '1449'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('402.50', '37', '2013', '1', '1450')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1450
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3220' WHERE `id` =  '1450'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1451')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1451
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '37' WHERE `id` =  '1451'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '37', '2013', '1', '1452')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1452
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400', `status` = 3, `week_end` = '37' WHERE `id` =  '1452'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1453')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1453
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1150', `status` = 3, `week_end` = '37' WHERE `id` =  '1453'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '37', '2013', '1', '1454')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1454
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660', `status` = 3, `week_end` = '37' WHERE `id` =  '1454'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1455')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1455
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1455'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1457')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1457
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1457'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1459')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1459
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1459'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1460')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1460
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1460'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1462')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1462
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1462'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1465')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1465
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1465'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1466')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1466
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1466'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1467')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1467
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1467'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1471')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1471
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1221' WHERE `id` =  '1471'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('286.00', '37', '2013', '1', '1478')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1478
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2288' WHERE `id` =  '1478'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1479')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1479
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1479'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1480')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1480
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1480'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1482')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1482
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1482'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1483')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1483
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1840' WHERE `id` =  '1483'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '37', '2013', '1', '1484')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1484
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '528' WHERE `id` =  '1484'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1486')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1486
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1486'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1488')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1488
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1488'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1491')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1491
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200' WHERE `id` =  '1491'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '37', '2013', '1', '1494')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2933.36010742188' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('194.35', '37', '2013', '1', '1496')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1496
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1166.10003662109' WHERE `id` =  '1496'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '37', '2013', '1', '1500')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4600.75' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '37', '2013', '1', '1501')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '924' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1502')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1503')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1207.5' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '37', '2013', '1', '1504')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1505')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1506')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '37', '2013', '1', '1507')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1509')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '37', '2013', '1', '1510')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '616' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1511')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '37', '2013', '1', '1512')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1001' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1513')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1514')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '37', '2013', '1', '1515')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3003' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1516')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1517')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1519')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '37', '2013', '1', '1520')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5313' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1521')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1523')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '37', '2013', '1', '1524')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1524
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1524'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1525')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1526')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1527')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1529')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1531')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1532')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1533')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '37', '2013', '1', '1537')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '37', '2013', '1', '1538')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1870' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1539')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1540')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1541')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1542')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1542
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100' WHERE `id` =  '1542'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '37', '2013', '1', '1543')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1437.5' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '37', '2013', '1', '1544')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2750' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1545')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1545
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '37' WHERE `id` =  '1545'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1546')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '37', '2013', '1', '1548')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2062.5' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1550')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '37', '2013', '1', '1553')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4125' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1555')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '862.5' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1557')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '37', '2013', '1', '1558')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '572' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1559')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1559
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '37' WHERE `id` =  '1559'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1560')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1560
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1560'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '37', '2013', '1', '1561')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2772' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '37', '2013', '1', '1562')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1243' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '37', '2013', '1', '1563')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '352' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1564')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '37', '2013', '1', '1565')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '37', '2013', '1', '1566')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '255.559997558594' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '37', '2013', '1', '1567')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1568')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1569')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1570')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '37', '2013', '1', '1572')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1573')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1573
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1573'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1574')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1575')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1576')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '37', '2013', '1', '1577')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '37', '2013', '1', '1578')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1578
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '172.5' WHERE `id` =  '1578'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '37', '2013', '1', '1579')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1195.58999633789' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '37', '2013', '1', '1580')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2178' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('495.00', '37', '2013', '1', '1581')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1581
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1581'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '37', '2013', '1', '1582')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '37', '2013', '1', '1583')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1584')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '37', '2013', '1', '1585')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '37', '2013', '1', '1586')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '37', '2013', '1', '1587')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1587
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1587'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '37', '2013', '1', '1588')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '412.5' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '37', '2013', '1', '1589')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '445.5' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1590')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1590
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1590'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '37', '2013', '1', '1591')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1592')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1593')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1593
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1593'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '37', '2013', '1', '1594')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '37', '2013', '1', '1595')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1595
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1595'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '37', '2013', '1', '1596')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '412.5' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1597')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1598')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '37', '2013', '1', '1599')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '276' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1600')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1600
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1600'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1601')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '37', '2013', '1', '1602')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1602
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690', `status` = 3, `week_end` = '37' WHERE `id` =  '1602'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '37', '2013', '1', '1603')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.659973144531' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1604')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '37', '2013', '1', '1605')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '37', '2013', '1', '1606')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.340026855469' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '37', '2013', '1', '1607')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.659973144531' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '37', '2013', '1', '1608')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '122.220001220703' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1609')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '37', '2013', '1', '1610')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '408.579986572266' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '37', '2013', '1', '1611')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '171.119995117188' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1612')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1613')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1614')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '37', '2013', '1', '1615')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '157.139999389648' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1616')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1616
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1616'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '37', '2013', '1', '1617')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.780029296875' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1618')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '37', '2013', '1', '1619')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '894.440002441406' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '37', '2013', '1', '1620')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '488.880004882812' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '37', '2013', '1', '1621')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '598' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '37', '2013', '1', '1622')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '37', '2013', '1', '1623')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '412.5' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '37', '2013', '1', '1624')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '127.779998779297' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '37', '2013', '1', '1625')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '37', '2013', '1', '1626')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '220' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '37', '2013', '1', '1627')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1507.57995605469' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '37', '2013', '1', '1628')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '37', '2013', '1', '1629')
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '122.220001220703' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:52:20 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:52:20 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:20 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:20 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:20 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:20 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:20 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:20 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:20 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:20 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:20 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:20 --> Total execution time: 0.7283
DEBUG - 2013-09-03 01:52:28 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:28 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:28 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:28 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:28 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:28 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:28 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:28 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:52:28 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:52:28 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:28 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:28 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:28 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:28 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:28 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:28 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:28 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:28 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:28 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:28 --> Total execution time: 0.1484
DEBUG - 2013-09-03 01:52:36 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:36 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:36 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:36 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:36 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:36 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:36 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:36 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:52:36 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:52:36 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 38
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:36 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:36 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:36 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:36 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:36 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:36 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:36 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:36 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:36 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:36 --> Total execution time: 0.1039
DEBUG - 2013-09-03 01:52:42 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:42 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:42 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:42 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:42 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:42 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:42 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 38
		
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1415')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1415
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1415'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '38', '2013', '1', '1440')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2707.67993164062' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('402.50', '38', '2013', '1', '1450')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1450
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3622.5' WHERE `id` =  '1450'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1455')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1455
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1455'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1457')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1457
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1457'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1459')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1459
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '38' WHERE `id` =  '1459'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1460')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1460
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200', `status` = 3, `week_end` = '38' WHERE `id` =  '1460'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1462')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1462
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '38' WHERE `id` =  '1462'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1465')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1465
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '38' WHERE `id` =  '1465'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1466')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1466
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '38' WHERE `id` =  '1466'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1467')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1467
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1467'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES (99, '38', '2013', '1', '1471')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1471
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '38' WHERE `id` =  '1471'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('286.00', '38', '2013', '1', '1478')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1478
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2574' WHERE `id` =  '1478'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1479')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1479
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1479'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1480')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1480
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1480'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1482')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1482
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1482'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '38', '2013', '1', '1483')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1483
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2070' WHERE `id` =  '1483'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '38', '2013', '1', '1484')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1484
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '594' WHERE `id` =  '1484'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1486')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1486
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1486'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1488')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1488
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2970' WHERE `id` =  '1488'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '38', '2013', '1', '1491')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1491
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1491'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '38', '2013', '1', '1494')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300.03012084961' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('194.35', '38', '2013', '1', '1496')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1496
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1360.45004272461' WHERE `id` =  '1496'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '38', '2013', '1', '1500')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5258' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '38', '2013', '1', '1501')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1056' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1502')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '38', '2013', '1', '1503')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1380' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '38', '2013', '1', '1504')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1505')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1506')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '38', '2013', '1', '1507')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1509')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '38', '2013', '1', '1510')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '704' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1511')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '38', '2013', '1', '1512')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1144' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1513')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1514')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '38', '2013', '1', '1515')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3503.5' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1516')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1517')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1519')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '38', '2013', '1', '1520')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '6198.5' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1521')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1523')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '38', '2013', '1', '1524')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1524
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2887.5' WHERE `id` =  '1524'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1525')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1526')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1527')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1529')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1531')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1532')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1533')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1155' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '38', '2013', '1', '1537')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '594' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '38', '2013', '1', '1538')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2244' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1539')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1540')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1541')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1542')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1542
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '38' WHERE `id` =  '1542'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '38', '2013', '1', '1543')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1725' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '38', '2013', '1', '1544')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1546')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '38', '2013', '1', '1548')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1550')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '38', '2013', '1', '1553')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4950' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '38', '2013', '1', '1555')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1557')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '38', '2013', '1', '1558')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '715' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1560')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1560
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '38' WHERE `id` =  '1560'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '38', '2013', '1', '1561')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3465' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '38', '2013', '1', '1562')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1553.75' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '38', '2013', '1', '1563')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1564')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '38', '2013', '1', '1565')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '38', '2013', '1', '1566')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '319.449996948242' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '38', '2013', '1', '1567')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1925' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1568')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1569')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1570')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '38', '2013', '1', '1572')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1573')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1573
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '38' WHERE `id` =  '1573'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1574')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1575')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1576')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '287.5' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '38', '2013', '1', '1577')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '275' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '38', '2013', '1', '1578')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1578
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '230' WHERE `id` =  '1578'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '38', '2013', '1', '1579')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1594.11999511719' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '38', '2013', '1', '1580')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2904' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('495.00', '38', '2013', '1', '1581')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1581
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1581'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '38', '2013', '1', '1582')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3080' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '38', '2013', '1', '1583')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1584')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '38', '2013', '1', '1585')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1380' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '38', '2013', '1', '1586')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '38', '2013', '1', '1587')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1587
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1587'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '38', '2013', '1', '1588')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '38', '2013', '1', '1589')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '594' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '38', '2013', '1', '1590')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1590
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1590'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '38', '2013', '1', '1591')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1592')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1593')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1593
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1593'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '38', '2013', '1', '1594')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES (191.66, '38', '2013', '1', '1595')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1595
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '38' WHERE `id` =  '1595'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '38', '2013', '1', '1596')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1597')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1598')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '38', '2013', '1', '1599')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '368' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1600')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1600
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1600'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1601')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '38', '2013', '1', '1603')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1149.9899597168' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1604')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '38', '2013', '1', '1605')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '38', '2013', '1', '1606')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100.0100402832' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '38', '2013', '1', '1607')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1149.9899597168' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '38', '2013', '1', '1608')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '183.330001831055' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1609')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '38', '2013', '1', '1610')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '612.869979858398' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '38', '2013', '1', '1611')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '256.679992675781' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1612')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1613')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1614')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '38', '2013', '1', '1615')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '235.709999084473' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1616')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1616
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1616'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '38', '2013', '1', '1617')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1466.67004394531' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1618')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '38', '2013', '1', '1619')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1341.66000366211' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '38', '2013', '1', '1620')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '733.320007324219' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '38', '2013', '1', '1621')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '897' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '38', '2013', '1', '1622')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '38', '2013', '1', '1623')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '618.75' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '38', '2013', '1', '1624')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '191.669998168945' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '38', '2013', '1', '1625')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575.009994506836' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '38', '2013', '1', '1626')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '38', '2013', '1', '1627')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2261.36993408203' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '38', '2013', '1', '1628')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575.009994506836' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '38', '2013', '1', '1629')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '183.330001831055' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '38', '2013', '1', '1630')
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1630
					AND status <> 0
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1630'
INFO  - 2013-09-03 01:52:42 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:52:42 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =38
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:42 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =38
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:42 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:42 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:42 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:42 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:42 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:42 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:42 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:42 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:42 --> Total execution time: 0.6666
DEBUG - 2013-09-03 01:52:45 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:45 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:45 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:45 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:45 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:45 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:45 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:45 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:52:45 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 38 AND periodo_id = 8
INFO  - 2013-09-03 01:52:45 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =38
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:45 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =38
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:46 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:46 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:46 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:46 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:46 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:46 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:46 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:46 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:46 --> Total execution time: 0.1532
DEBUG - 2013-09-03 01:52:54 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:54 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:54 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:54 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:54 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:54 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:54 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:54 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:52:54 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:52:54 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 39
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:54 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:54 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:54 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:54 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:54 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:54 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:54 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:54 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:54 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:54 --> Total execution time: 0.1219
DEBUG - 2013-09-03 01:52:58 --> Config Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:52:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:52:58 --> URI Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Router Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Output Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Security Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Input Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:52:58 --> Language Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Loader Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Controller Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:52:58 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Model Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Session Class Initialized
DEBUG - 2013-09-03 01:52:58 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:52:58 --> Session routines successfully run
DEBUG - 2013-09-03 01:52:58 --> User Agent Class Initialized
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 39
		
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1415')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1415
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '39' WHERE `id` =  '1415'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '39', '2013', '1', '1440')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3046.1399230957' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('402.50', '39', '2013', '1', '1450')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1450
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4025', `status` = 3, `week_end` = '39' WHERE `id` =  '1450'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('286.00', '39', '2013', '1', '1478')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1478
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2860', `status` = 3, `week_end` = '39' WHERE `id` =  '1478'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1479')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1479
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '39' WHERE `id` =  '1479'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1480')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1480
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200', `status` = 3, `week_end` = '39' WHERE `id` =  '1480'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1482')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1482
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '39' WHERE `id` =  '1482'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '39', '2013', '1', '1483')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1483
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2300', `status` = 3, `week_end` = '39' WHERE `id` =  '1483'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('66.00', '39', '2013', '1', '1484')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1484
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660', `status` = 3, `week_end` = '39' WHERE `id` =  '1484'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1486')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1486
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200', `status` = 3, `week_end` = '39' WHERE `id` =  '1486'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1488')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1488
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300', `status` = 3, `week_end` = '39' WHERE `id` =  '1488'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '39', '2013', '1', '1491')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1491
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2750', `status` = 3, `week_end` = '39' WHERE `id` =  '1491'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '39', '2013', '1', '1494')
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3666.70013427734' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:52:58 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('194.35', '39', '2013', '1', '1496')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1496
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1554.80004882812' WHERE `id` =  '1496'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '39', '2013', '1', '1500')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5915.25' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '39', '2013', '1', '1501')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1188' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1502')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '39', '2013', '1', '1503')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1552.5' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '39', '2013', '1', '1504')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4950' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1505')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1506')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '39', '2013', '1', '1507')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1509')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '39', '2013', '1', '1510')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '792' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1511')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '39', '2013', '1', '1512')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1287' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1513')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1514')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '39', '2013', '1', '1515')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4004' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1516')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1517')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1519')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '39', '2013', '1', '1520')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '7084' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1521')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1523')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '39', '2013', '1', '1524')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1524
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300', `status` = 3, `week_end` = '39' WHERE `id` =  '1524'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1525')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1526')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1527')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1529')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1531')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1760' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1532')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1533')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '39', '2013', '1', '1537')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '693' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '39', '2013', '1', '1538')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2618' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1539')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1540')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1541')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '39', '2013', '1', '1543')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2012.5' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '39', '2013', '1', '1544')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1546')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '39', '2013', '1', '1548')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2887.5' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1550')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '39', '2013', '1', '1553')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5775' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '39', '2013', '1', '1555')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1207.5' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1557')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '39', '2013', '1', '1558')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '858' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '39', '2013', '1', '1561')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4158' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '39', '2013', '1', '1562')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1864.5' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '39', '2013', '1', '1563')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '528' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1564')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '39', '2013', '1', '1565')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2200' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '39', '2013', '1', '1566')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '383.339996337891' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '39', '2013', '1', '1567')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2310' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1568')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1569')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1570')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '39', '2013', '1', '1572')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1574')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1575')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1576')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '39', '2013', '1', '1577')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '330' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '39', '2013', '1', '1578')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1578
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '287.5' WHERE `id` =  '1578'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '39', '2013', '1', '1579')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1992.64999389648' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '39', '2013', '1', '1580')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3630' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('495.00', '39', '2013', '1', '1581')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1581
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1581'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '39', '2013', '1', '1582')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3850' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '39', '2013', '1', '1583')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4125' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1584')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '39', '2013', '1', '1585')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1840' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '39', '2013', '1', '1586')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1375' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '39', '2013', '1', '1587')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1587
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650', `status` = 3, `week_end` = '39' WHERE `id` =  '1587'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '39', '2013', '1', '1588')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '687.5' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '39', '2013', '1', '1589')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '742.5' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '39', '2013', '1', '1590')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1590
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1590'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '39', '2013', '1', '1591')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5500' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1592')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1593')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1593
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '39' WHERE `id` =  '1593'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '39', '2013', '1', '1594')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '862.5' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '39', '2013', '1', '1596')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '687.5' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1597')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1598')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '39', '2013', '1', '1599')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1600')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1600
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '39' WHERE `id` =  '1600'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1601')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '39', '2013', '1', '1603')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1533.31994628906' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1604')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '39', '2013', '1', '1605')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '39', '2013', '1', '1606')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1466.68005371094' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '39', '2013', '1', '1607')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1533.31994628906' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '39', '2013', '1', '1608')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1609')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '39', '2013', '1', '1610')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '817.159973144531' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '39', '2013', '1', '1611')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '342.239990234375' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1612')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1613')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1614')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '39', '2013', '1', '1615')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '314.279998779297' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1616')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1616
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460', `status` = 3, `week_end` = '39' WHERE `id` =  '1616'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '39', '2013', '1', '1617')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1955.56005859375' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1618')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '39', '2013', '1', '1619')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1788.88000488281' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '39', '2013', '1', '1620')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '977.760009765625' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '39', '2013', '1', '1621')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1196' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '39', '2013', '1', '1622')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '460' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '39', '2013', '1', '1623')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '39', '2013', '1', '1624')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '255.559997558594' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '39', '2013', '1', '1625')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.679992675781' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '39', '2013', '1', '1626')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '39', '2013', '1', '1627')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3015.15991210938' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '39', '2013', '1', '1628')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '766.679992675781' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '39', '2013', '1', '1629')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '244.440002441406' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '39', '2013', '1', '1630')
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1630
					AND status <> 0
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '39' WHERE `id` =  '1630'
INFO  - 2013-09-03 01:52:59 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:52:59 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =39
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:59 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =39
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:52:59 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:52:59 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:52:59 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:52:59 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:52:59 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:52:59 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:52:59 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:52:59 --> Final output sent to browser
DEBUG - 2013-09-03 01:52:59 --> Total execution time: 0.6599
DEBUG - 2013-09-03 01:53:03 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:03 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:03 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:03 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:03 --> User Agent Class Initialized
INFO  - 2013-09-03 01:53:03 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:53:03 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:53:03 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =39
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:03 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =39
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:03 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:53:03 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:53:03 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:53:03 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:53:03 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:53:03 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:53:03 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:53:03 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:03 --> Total execution time: 0.1499
DEBUG - 2013-09-03 01:53:12 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:12 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:12 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:12 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:12 --> User Agent Class Initialized
INFO  - 2013-09-03 01:53:12 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:53:12 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 37 AND periodo_id = 8
INFO  - 2013-09-03 01:53:12 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =37
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:12 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =37
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:12 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:53:12 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:53:12 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:53:12 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:53:12 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:53:12 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:53:12 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:53:12 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:12 --> Total execution time: 0.1508
DEBUG - 2013-09-03 01:53:19 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:19 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:19 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:19 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:19 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:19 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:19 --> User Agent Class Initialized
INFO  - 2013-09-03 01:53:19 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:53:19 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 39 AND periodo_id = 8
INFO  - 2013-09-03 01:53:19 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =39
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:19 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =39
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:20 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:53:20 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:53:20 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:53:20 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:53:20 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:53:20 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:53:20 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:53:20 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:20 --> Total execution time: 0.1489
DEBUG - 2013-09-03 01:53:25 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:25 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:25 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:25 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:25 --> User Agent Class Initialized
INFO  - 2013-09-03 01:53:25 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:53:25 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:53:25 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
                	IFNULL(GROUP_CONCAT(p.monto_pago SEPARATOR ', '),0)  AS prestamos,
                	SUM( IFNULL( p.monto_pago, 0 ) ) AS total
				FROM user u
				LEFT JOIN prestamo p ON p.user_id = u.id
				AND p.periodo_id = 8 AND p.status = 1 AND p.week <= 40
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:25 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( a.monto, 0 ) AS total
				FROM user u
				LEFT JOIN ahorro a ON a.user_id = u.id
				AND a.periodo_id =8 AND a.status = 1
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:25 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:53:25 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:53:25 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:53:25 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:53:25 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:53:25 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:53:25 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:53:25 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:25 --> Total execution time: 0.1064
DEBUG - 2013-09-03 01:53:29 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:29 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:29 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:29 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:29 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:29 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:29 --> User Agent Class Initialized
ERROR - 2013-09-03 01:53:29 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:53:29 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:53:29 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:29 --> Total execution time: 0.0443
DEBUG - 2013-09-03 01:53:30 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:30 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:30 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:30 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:30 --> User Agent Class Initialized
ERROR - 2013-09-03 01:53:30 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:53:30 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:53:30 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:30 --> Total execution time: 0.0447
DEBUG - 2013-09-03 01:53:31 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:31 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:31 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:31 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:31 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:31 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:31 --> User Agent Class Initialized
DEBUG - 2013-09-03 01:53:31 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 01:53:31 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:53:31 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:53:31 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:53:31 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:53:31 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:53:31 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:31 --> Total execution time: 0.0601
DEBUG - 2013-09-03 01:53:33 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:33 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:33 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:33 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:33 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:33 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:33 --> User Agent Class Initialized
ERROR - 2013-09-03 01:53:33 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:53:33 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:53:33 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:33 --> Total execution time: 0.0424
DEBUG - 2013-09-03 01:53:34 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:34 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:34 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:34 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:34 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:34 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:34 --> User Agent Class Initialized
ERROR - 2013-09-03 01:53:34 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 01:53:34 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 01:53:34 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:34 --> Total execution time: 0.0456
DEBUG - 2013-09-03 01:53:46 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:46 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:46 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:46 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:46 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:46 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:46 --> User Agent Class Initialized
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
		SELECT monto_pago, monto_total, year, status, id, monto_abonado
			FROM prestamo
			WHERE periodo_id = 8
				AND (status =1)
				AND week <= 40
		
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('338.46', '40', '2013', '1', '1440')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1440
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3384.59991455078' WHERE `id` =  '1440'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '40', '2013', '1', '1494')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1494
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4033.37014770508' WHERE `id` =  '1494'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('194.35', '40', '2013', '1', '1496')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1496
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1749.15005493164' WHERE `id` =  '1496'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('657.25', '40', '2013', '1', '1500')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1500
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '6572.5', `status` = 3, `week_end` = '40' WHERE `id` =  '1500'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('132.00', '40', '2013', '1', '1501')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1501
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1320', `status` = 3, `week_end` = '40' WHERE `id` =  '1501'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1502')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1502
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '40' WHERE `id` =  '1502'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '40', '2013', '1', '1503')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1503
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1725', `status` = 3, `week_end` = '40' WHERE `id` =  '1503'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '40', '2013', '1', '1504')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1504
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '5500', `status` = 3, `week_end` = '40' WHERE `id` =  '1504'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '40', '2013', '1', '1505')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1505
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '40' WHERE `id` =  '1505'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1506')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1506
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1150', `status` = 3, `week_end` = '40' WHERE `id` =  '1506'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '40', '2013', '1', '1507')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1507
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4950' WHERE `id` =  '1507'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1509')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1509
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1150', `status` = 3, `week_end` = '40' WHERE `id` =  '1509'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '40', '2013', '1', '1510')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1510
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '880', `status` = 3, `week_end` = '40' WHERE `id` =  '1510'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1511')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1511
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1100', `status` = 3, `week_end` = '40' WHERE `id` =  '1511'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '40', '2013', '1', '1512')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1512
					AND status <> 0
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1430', `status` = 3, `week_end` = '40' WHERE `id` =  '1512'
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1513')
INFO  - 2013-09-03 01:53:46 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1513
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '40' WHERE `id` =  '1513'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '40', '2013', '1', '1514')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1514
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '40' WHERE `id` =  '1514'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('500.50', '40', '2013', '1', '1515')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1515
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4504.5' WHERE `id` =  '1515'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '40', '2013', '1', '1516')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1516
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2970' WHERE `id` =  '1516'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '40', '2013', '1', '1517')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1517
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2970' WHERE `id` =  '1517'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1519')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1519
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1519'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('885.50', '40', '2013', '1', '1520')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1520
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '7969.5' WHERE `id` =  '1520'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1521')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1521
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '990' WHERE `id` =  '1521'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1523')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1523
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '495' WHERE `id` =  '1523'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '40', '2013', '1', '1525')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1525
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2970' WHERE `id` =  '1525'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '40', '2013', '1', '1526')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1526
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1526'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '40', '2013', '1', '1527')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1527
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '517.5' WHERE `id` =  '1527'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '40', '2013', '1', '1529')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1529
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2970' WHERE `id` =  '1529'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '40', '2013', '1', '1531')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1531
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1980' WHERE `id` =  '1531'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('330.00', '40', '2013', '1', '1532')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1532
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2970' WHERE `id` =  '1532'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '40', '2013', '1', '1533')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1533
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1485' WHERE `id` =  '1533'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('99.00', '40', '2013', '1', '1537')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1537
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '792' WHERE `id` =  '1537'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('374.00', '40', '2013', '1', '1538')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1538
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2992' WHERE `id` =  '1538'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1539')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1539
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1539'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1540')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1540
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1540'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1541')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1541
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1541'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('287.50', '40', '2013', '1', '1543')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1543
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2300' WHERE `id` =  '1543'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('550.00', '40', '2013', '1', '1544')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1544
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4400' WHERE `id` =  '1544'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1546')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1546
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1546'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('412.50', '40', '2013', '1', '1548')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1548
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3300', `status` = 3, `week_end` = '40' WHERE `id` =  '1548'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1550')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1550
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '920' WHERE `id` =  '1550'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '40', '2013', '1', '1553')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1553
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '6600' WHERE `id` =  '1553'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '40', '2013', '1', '1555')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1555
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1380' WHERE `id` =  '1555'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1557')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1557
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '440' WHERE `id` =  '1557'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('143.00', '40', '2013', '1', '1558')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1558
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1001' WHERE `id` =  '1558'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('693.00', '40', '2013', '1', '1561')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1561
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4851' WHERE `id` =  '1561'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('310.75', '40', '2013', '1', '1562')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1562
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2175.25' WHERE `id` =  '1562'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('88.00', '40', '2013', '1', '1563')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1563
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '616' WHERE `id` =  '1563'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1564')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1564
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1564'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('440.00', '40', '2013', '1', '1565')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1565
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2640' WHERE `id` =  '1565'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '40', '2013', '1', '1566')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1566
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '447.229995727539' WHERE `id` =  '1566'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('385.00', '40', '2013', '1', '1567')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1567
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2695' WHERE `id` =  '1567'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '40', '2013', '1', '1568')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1568
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1155' WHERE `id` =  '1568'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1569')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1569
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '770' WHERE `id` =  '1569'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '40', '2013', '1', '1570')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1570
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1155' WHERE `id` =  '1570'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('220.00', '40', '2013', '1', '1572')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1572
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1540' WHERE `id` =  '1572'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1574')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1574
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1574'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1575')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1575
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '805' WHERE `id` =  '1575'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '40', '2013', '1', '1576')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1576
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '402.5' WHERE `id` =  '1576'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('55.00', '40', '2013', '1', '1577')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1577
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '385' WHERE `id` =  '1577'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('57.50', '40', '2013', '1', '1578')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1578
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '345' WHERE `id` =  '1578'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('398.53', '40', '2013', '1', '1579')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1579
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2391.17999267578' WHERE `id` =  '1579'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('726.00', '40', '2013', '1', '1580')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1580
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4356' WHERE `id` =  '1580'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('495.00', '40', '2013', '1', '1581')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1581
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2475' WHERE `id` =  '1581'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('770.00', '40', '2013', '1', '1582')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1582
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4620' WHERE `id` =  '1582'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('825.00', '40', '2013', '1', '1583')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1583
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '4950' WHERE `id` =  '1583'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1584')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1584
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1584'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('460.00', '40', '2013', '1', '1585')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1585
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2300' WHERE `id` =  '1585'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('275.00', '40', '2013', '1', '1586')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1586
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1650' WHERE `id` =  '1586'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '40', '2013', '1', '1588')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1588
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1588'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('148.50', '40', '2013', '1', '1589')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1589
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '891' WHERE `id` =  '1589'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('230.00', '40', '2013', '1', '1590')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1590
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1150' WHERE `id` =  '1590'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('1100.00', '40', '2013', '1', '1591')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1591
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '6600' WHERE `id` =  '1591'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1592')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1592
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '690' WHERE `id` =  '1592'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('172.50', '40', '2013', '1', '1594')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1594
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1035' WHERE `id` =  '1594'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('137.50', '40', '2013', '1', '1596')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1596
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1596'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1597')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1597
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1597'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1598')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1598
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1598'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('92.00', '40', '2013', '1', '1599')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1599
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '552' WHERE `id` =  '1599'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1601')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1601
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '660' WHERE `id` =  '1601'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '40', '2013', '1', '1603')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1603
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1916.64993286133' WHERE `id` =  '1603'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1604')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1604
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550' WHERE `id` =  '1604'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('165.00', '40', '2013', '1', '1605')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1605
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '825' WHERE `id` =  '1605'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('366.67', '40', '2013', '1', '1606')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1606
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1833.35006713867' WHERE `id` =  '1606'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('383.33', '40', '2013', '1', '1607')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1607
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1916.64993286133' WHERE `id` =  '1607'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '40', '2013', '1', '1608')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1608
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '305.550003051758' WHERE `id` =  '1608'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '40', '2013', '1', '1609')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1609
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1222.20001220703' WHERE `id` =  '1609'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('204.29', '40', '2013', '1', '1610')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1610
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1021.44996643066' WHERE `id` =  '1610'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('85.56', '40', '2013', '1', '1611')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1611
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '427.799987792969' WHERE `id` =  '1611'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1612')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1612
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '40' WHERE `id` =  '1612'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '40', '2013', '1', '1613')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1613
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1222.20001220703' WHERE `id` =  '1613'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '40', '2013', '1', '1614')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1614
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1222.20001220703' WHERE `id` =  '1614'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('78.57', '40', '2013', '1', '1615')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1615
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '392.849998474121' WHERE `id` =  '1615'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('488.89', '40', '2013', '1', '1617')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1617
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2444.45007324219' WHERE `id` =  '1617'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '40', '2013', '1', '1618')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1618
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1222.20001220703' WHERE `id` =  '1618'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('447.22', '40', '2013', '1', '1619')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1619
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '2236.10000610352' WHERE `id` =  '1619'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('244.44', '40', '2013', '1', '1620')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1620
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1222.20001220703' WHERE `id` =  '1620'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('299.00', '40', '2013', '1', '1621')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1621
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1495', `status` = 3, `week_end` = '40' WHERE `id` =  '1621'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('115.00', '40', '2013', '1', '1622')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1622
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '575', `status` = 3, `week_end` = '40' WHERE `id` =  '1622'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('206.25', '40', '2013', '1', '1623')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1623
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '1031.25' WHERE `id` =  '1623'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('63.89', '40', '2013', '1', '1624')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1624
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '319.449996948242' WHERE `id` =  '1624'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '40', '2013', '1', '1625')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1625
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '958.349990844727' WHERE `id` =  '1625'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('110.00', '40', '2013', '1', '1626')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1626
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '550', `status` = 3, `week_end` = '40' WHERE `id` =  '1626'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('753.79', '40', '2013', '1', '1627')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1627
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '3768.94989013672' WHERE `id` =  '1627'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('191.67', '40', '2013', '1', '1628')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1628
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '958.349990844727' WHERE `id` =  '1628'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: INSERT INTO `prestamo_registro` (`monto`, `week`, `year`, `status`, `prestamo_id`) VALUES ('61.11', '40', '2013', '1', '1629')
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: 
					SELECT SUM(monto) as total_registro 
					FROM prestamo_registro
					WHERE prestamo_id = 1629
					AND status <> 0
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::registrarPrestamos: UPDATE `prestamo` SET `monto_abonado` = '305.550003051758' WHERE `id` =  '1629'
INFO  - 2013-09-03 01:53:47 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:53:47 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =40
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:47 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =40
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:47 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:53:47 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:53:47 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:53:47 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:53:47 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:53:47 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:53:47 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:53:47 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:47 --> Total execution time: 0.6727
DEBUG - 2013-09-03 01:53:52 --> Config Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 01:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 01:53:52 --> URI Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Router Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Output Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Security Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Input Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 01:53:52 --> Language Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Loader Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Controller Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 01:53:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Model Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Session Class Initialized
DEBUG - 2013-09-03 01:53:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 01:53:52 --> Session routines successfully run
DEBUG - 2013-09-03 01:53:52 --> User Agent Class Initialized
INFO  - 2013-09-03 01:53:52 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:53:52 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 40 AND periodo_id = 8
INFO  - 2013-09-03 01:53:52 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =40
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:52 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =40
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 01:53:52 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 01:53:52 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 01:53:52 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 01:53:52 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 01:53:52 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 01:53:52 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 01:53:52 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 01:53:52 --> Final output sent to browser
DEBUG - 2013-09-03 01:53:52 --> Total execution time: 0.1579
DEBUG - 2013-09-03 23:39:58 --> Config Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:39:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:39:58 --> URI Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Router Class Initialized
DEBUG - 2013-09-03 23:39:58 --> No URI present. Default controller set.
DEBUG - 2013-09-03 23:39:58 --> Output Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Security Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Input Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:39:58 --> Language Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Loader Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Controller Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:39:58 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Session Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:39:58 --> A session cookie was not found.
DEBUG - 2013-09-03 23:39:58 --> Session routines successfully run
DEBUG - 2013-09-03 23:39:58 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Config Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:39:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:39:58 --> URI Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Router Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Output Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Security Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Input Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:39:58 --> Language Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Loader Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Controller Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:39:58 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Model Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Session Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:39:58 --> Session routines successfully run
DEBUG - 2013-09-03 23:39:58 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Helper loaded: form_helper
DEBUG - 2013-09-03 23:39:58 --> Form Validation Class Initialized
DEBUG - 2013-09-03 23:39:58 --> Language file loaded: language/spanish/form_validation_lang.php
DEBUG - 2013-09-03 23:39:58 --> File loaded: application/views/be/login.php
DEBUG - 2013-09-03 23:39:58 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:39:58 --> File loaded: application/views/be/layout/login_header.php
DEBUG - 2013-09-03 23:39:58 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:39:58 --> File loaded: application/views/be/layout/login.php
DEBUG - 2013-09-03 23:39:58 --> Final output sent to browser
DEBUG - 2013-09-03 23:39:58 --> Total execution time: 0.0999
DEBUG - 2013-09-03 23:39:59 --> Config Class Initialized
DEBUG - 2013-09-03 23:39:59 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:39:59 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:39:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:39:59 --> URI Class Initialized
DEBUG - 2013-09-03 23:39:59 --> Router Class Initialized
ERROR - 2013-09-03 23:39:59 --> 404 Page Not Found --> favicon.ico
DEBUG - 2013-09-03 23:41:50 --> Config Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:41:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:41:50 --> URI Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Router Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Output Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Security Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Input Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:41:50 --> Language Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Loader Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Controller Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:41:50 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Session Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:41:50 --> Session routines successfully run
DEBUG - 2013-09-03 23:41:50 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Helper loaded: form_helper
DEBUG - 2013-09-03 23:41:50 --> Form Validation Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Language file loaded: language/spanish/form_validation_lang.php
DEBUG - 2013-09-03 23:41:50 --> XSS Filtering completed
DEBUG - 2013-09-03 23:41:50 --> Config Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:41:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:41:50 --> URI Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Router Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Output Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Security Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Input Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:41:50 --> Language Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Loader Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Controller Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:41:50 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Session Class Initialized
DEBUG - 2013-09-03 23:41:50 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:41:50 --> Session routines successfully run
DEBUG - 2013-09-03 23:41:50 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:41:50 --> File loaded: application/views/be/dashboard.php
DEBUG - 2013-09-03 23:41:50 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:41:50 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:41:50 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:41:50 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:41:50 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:41:50 --> Final output sent to browser
DEBUG - 2013-09-03 23:41:50 --> Total execution time: 0.0724
DEBUG - 2013-09-03 23:42:54 --> Config Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:42:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:42:54 --> URI Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Router Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Output Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Security Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Input Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:42:54 --> Language Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Loader Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Controller Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:42:54 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Model Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Session Class Initialized
DEBUG - 2013-09-03 23:42:54 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:42:54 --> Session routines successfully run
DEBUG - 2013-09-03 23:42:54 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:42:54 --> File loaded: application/views/be/periodos/validar_nomina.php
DEBUG - 2013-09-03 23:42:54 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:42:54 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:42:54 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:42:54 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:42:54 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:42:54 --> Final output sent to browser
DEBUG - 2013-09-03 23:42:54 --> Total execution time: 0.1013
DEBUG - 2013-09-03 23:43:05 --> Config Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:43:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:43:05 --> URI Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Router Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Output Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Security Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Input Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:43:05 --> Language Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Loader Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Controller Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:43:05 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Session Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:43:05 --> Session routines successfully run
DEBUG - 2013-09-03 23:43:05 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:43:05 --> Pagination Class Initialized
DEBUG - 2013-09-03 23:43:05 --> File loaded: application/views/be/periodos/main.php
DEBUG - 2013-09-03 23:43:05 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:43:05 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:43:05 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:43:05 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:43:05 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:43:05 --> Final output sent to browser
DEBUG - 2013-09-03 23:43:05 --> Total execution time: 0.1455
DEBUG - 2013-09-03 23:43:09 --> Config Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:43:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:43:09 --> URI Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Router Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Output Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Security Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Input Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:43:09 --> Language Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Loader Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Controller Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:43:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Session Class Initialized
DEBUG - 2013-09-03 23:43:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:43:09 --> Session routines successfully run
DEBUG - 2013-09-03 23:43:09 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:43:09 --> File loaded: application/views/be/periodos/editar.php
DEBUG - 2013-09-03 23:43:09 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:43:09 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:43:09 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:43:09 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:43:09 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:43:09 --> Final output sent to browser
DEBUG - 2013-09-03 23:43:09 --> Total execution time: 0.0691
DEBUG - 2013-09-03 23:43:24 --> Config Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:43:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:43:24 --> URI Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Router Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Output Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Security Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Input Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:43:24 --> Language Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Loader Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Controller Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:43:24 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Model Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Session Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:43:24 --> Session routines successfully run
DEBUG - 2013-09-03 23:43:24 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:43:24 --> Pagination Class Initialized
DEBUG - 2013-09-03 23:43:24 --> File loaded: application/views/be/periodos/main.php
DEBUG - 2013-09-03 23:43:24 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:43:24 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:43:24 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:43:24 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:43:24 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:43:24 --> Final output sent to browser
DEBUG - 2013-09-03 23:43:24 --> Total execution time: 0.0514
DEBUG - 2013-09-03 23:45:53 --> Config Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:45:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:45:53 --> URI Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Router Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Output Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Security Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Input Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:45:53 --> Language Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Loader Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Controller Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:45:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Model Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Session Class Initialized
DEBUG - 2013-09-03 23:45:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:45:53 --> Session routines successfully run
DEBUG - 2013-09-03 23:45:53 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:45:53 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 23:45:53 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:45:53 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:45:53 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:45:53 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:45:53 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:45:53 --> Final output sent to browser
DEBUG - 2013-09-03 23:45:53 --> Total execution time: 0.2183
DEBUG - 2013-09-03 23:47:31 --> Config Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:47:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:47:31 --> URI Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Router Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Output Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Security Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Input Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:47:31 --> Language Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Loader Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Controller Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:47:31 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Model Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Session Class Initialized
DEBUG - 2013-09-03 23:47:31 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:47:31 --> Session routines successfully run
DEBUG - 2013-09-03 23:47:31 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:47:31 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-03 23:47:31 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-03 23:47:31 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:47:31 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:47:31 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:47:31 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:47:31 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:47:31 --> Final output sent to browser
DEBUG - 2013-09-03 23:47:31 --> Total execution time: 0.1943
DEBUG - 2013-09-03 23:49:11 --> Config Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:49:11 --> URI Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Router Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Output Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Security Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Input Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:49:11 --> Language Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Loader Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Controller Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:49:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Model Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Session Class Initialized
DEBUG - 2013-09-03 23:49:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:49:11 --> Session routines successfully run
DEBUG - 2013-09-03 23:49:11 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:49:11 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 23:49:11 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:49:11 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:49:11 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:49:11 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:49:11 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:49:11 --> Final output sent to browser
DEBUG - 2013-09-03 23:49:11 --> Total execution time: 0.0680
DEBUG - 2013-09-03 23:50:25 --> Config Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:50:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:50:25 --> URI Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Router Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Output Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Security Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Input Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:50:25 --> Language Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Loader Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Controller Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:50:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Session Class Initialized
DEBUG - 2013-09-03 23:50:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:50:25 --> Session routines successfully run
DEBUG - 2013-09-03 23:50:25 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:50:25 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 23:50:25 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:50:25 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:50:25 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:50:25 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:50:25 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:50:25 --> Final output sent to browser
DEBUG - 2013-09-03 23:50:25 --> Total execution time: 0.0604
DEBUG - 2013-09-03 23:50:28 --> Config Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:50:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:50:28 --> URI Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Router Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Output Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Security Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Input Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:50:28 --> Language Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Loader Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Controller Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:50:28 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Session Class Initialized
DEBUG - 2013-09-03 23:50:28 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:50:28 --> Session routines successfully run
DEBUG - 2013-09-03 23:50:28 --> User Agent Class Initialized
ERROR - 2013-09-03 23:50:28 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 23:50:28 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 23:50:28 --> Final output sent to browser
DEBUG - 2013-09-03 23:50:28 --> Total execution time: 0.1358
DEBUG - 2013-09-03 23:50:29 --> Config Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:50:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:50:29 --> URI Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Router Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Output Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Security Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Input Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:50:29 --> Language Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Loader Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Controller Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:50:29 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Session Class Initialized
DEBUG - 2013-09-03 23:50:29 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:50:29 --> Session routines successfully run
DEBUG - 2013-09-03 23:50:29 --> User Agent Class Initialized
ERROR - 2013-09-03 23:50:29 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 23:50:29 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 23:50:29 --> Final output sent to browser
DEBUG - 2013-09-03 23:50:29 --> Total execution time: 0.0484
DEBUG - 2013-09-03 23:55:12 --> Config Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:55:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:55:12 --> URI Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Router Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Output Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Security Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Input Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:55:12 --> Language Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Loader Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Controller Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:55:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Session Class Initialized
DEBUG - 2013-09-03 23:55:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:55:12 --> Session routines successfully run
DEBUG - 2013-09-03 23:55:12 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:55:12 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-03 23:55:12 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-03 23:55:12 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:55:12 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:55:12 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:55:12 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:55:12 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:55:12 --> Final output sent to browser
DEBUG - 2013-09-03 23:55:12 --> Total execution time: 0.1098
DEBUG - 2013-09-03 23:55:28 --> Config Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:55:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:55:28 --> URI Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Router Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Output Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Security Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Input Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:55:28 --> Language Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Loader Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Controller Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:55:28 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Session Class Initialized
DEBUG - 2013-09-03 23:55:28 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:55:28 --> Session routines successfully run
DEBUG - 2013-09-03 23:55:28 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:55:28 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 23:55:28 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:55:28 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:55:28 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:55:28 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:55:28 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:55:28 --> Final output sent to browser
DEBUG - 2013-09-03 23:55:28 --> Total execution time: 0.0940
DEBUG - 2013-09-03 23:55:29 --> Config Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:55:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:55:29 --> URI Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Router Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Output Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Security Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Input Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:55:29 --> Language Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Loader Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Controller Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:55:29 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Session Class Initialized
DEBUG - 2013-09-03 23:55:29 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:55:29 --> Session routines successfully run
DEBUG - 2013-09-03 23:55:29 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:55:29 --> File loaded: application/views/be/prestamos/nuevo.php
DEBUG - 2013-09-03 23:55:29 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:55:29 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:55:29 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:55:29 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:55:29 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:55:29 --> Final output sent to browser
DEBUG - 2013-09-03 23:55:29 --> Total execution time: 0.1164
DEBUG - 2013-09-03 23:55:34 --> Config Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:55:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:55:34 --> URI Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Router Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Output Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Security Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Input Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:55:34 --> Language Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Loader Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Controller Class Initialized
DEBUG - 2013-09-03 23:55:34 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:55:35 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Session Class Initialized
DEBUG - 2013-09-03 23:55:35 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:55:35 --> Session routines successfully run
DEBUG - 2013-09-03 23:55:35 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:55:35 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 23:55:35 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:55:35 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:55:35 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:55:35 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:55:35 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:55:35 --> Final output sent to browser
DEBUG - 2013-09-03 23:55:35 --> Total execution time: 0.0669
DEBUG - 2013-09-03 23:55:40 --> Config Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:55:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:55:40 --> URI Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Router Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Output Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Security Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Input Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:55:40 --> Language Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Loader Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Controller Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:55:40 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Session Class Initialized
DEBUG - 2013-09-03 23:55:40 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:55:40 --> Session routines successfully run
DEBUG - 2013-09-03 23:55:40 --> User Agent Class Initialized
ERROR - 2013-09-03 23:55:40 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 23:55:40 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 23:55:40 --> Final output sent to browser
DEBUG - 2013-09-03 23:55:40 --> Total execution time: 0.0427
DEBUG - 2013-09-03 23:55:41 --> Config Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:55:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:55:41 --> URI Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Router Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Output Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Security Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Input Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:55:41 --> Language Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Loader Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Controller Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:55:41 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Session Class Initialized
DEBUG - 2013-09-03 23:55:41 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:55:41 --> Session routines successfully run
DEBUG - 2013-09-03 23:55:41 --> User Agent Class Initialized
ERROR - 2013-09-03 23:55:41 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 23:55:41 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 23:55:41 --> Final output sent to browser
DEBUG - 2013-09-03 23:55:41 --> Total execution time: 0.0479
DEBUG - 2013-09-03 23:55:47 --> Config Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:55:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:55:47 --> URI Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Router Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Output Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Security Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Input Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:55:47 --> Language Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Loader Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Controller Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:55:47 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Model Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Session Class Initialized
DEBUG - 2013-09-03 23:55:47 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:55:47 --> Session routines successfully run
DEBUG - 2013-09-03 23:55:47 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:55:47 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-03 23:55:47 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-03 23:55:47 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:55:47 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:55:47 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:55:47 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:55:47 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:55:47 --> Final output sent to browser
DEBUG - 2013-09-03 23:55:47 --> Total execution time: 0.0623
DEBUG - 2013-09-03 23:56:22 --> Config Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:56:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:56:22 --> URI Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Router Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Output Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Security Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Input Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:56:22 --> Language Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Loader Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Controller Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:56:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Session Class Initialized
DEBUG - 2013-09-03 23:56:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:56:22 --> Session routines successfully run
DEBUG - 2013-09-03 23:56:22 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:56:22 --> File loaded: application/views/be/prestamos/main.php
DEBUG - 2013-09-03 23:56:22 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:56:22 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:56:22 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:56:22 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:56:22 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:56:22 --> Final output sent to browser
DEBUG - 2013-09-03 23:56:22 --> Total execution time: 0.0682
DEBUG - 2013-09-03 23:56:27 --> Config Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:56:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:56:27 --> URI Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Router Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Output Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Security Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Input Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:56:27 --> Language Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Loader Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Controller Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:56:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Session Class Initialized
DEBUG - 2013-09-03 23:56:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:56:27 --> Session routines successfully run
DEBUG - 2013-09-03 23:56:27 --> User Agent Class Initialized
ERROR - 2013-09-03 23:56:27 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 23:56:27 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/controllers/users.php:230) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 23:56:27 --> Final output sent to browser
DEBUG - 2013-09-03 23:56:27 --> Total execution time: 0.0433
DEBUG - 2013-09-03 23:56:28 --> Config Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:56:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:56:28 --> URI Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Router Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Output Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Security Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Input Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:56:28 --> Language Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Loader Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Controller Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:56:28 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Model Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Session Class Initialized
DEBUG - 2013-09-03 23:56:28 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:56:28 --> Session routines successfully run
DEBUG - 2013-09-03 23:56:28 --> User Agent Class Initialized
ERROR - 2013-09-03 23:56:28 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
ERROR - 2013-09-03 23:56:28 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Applications/XAMPP/xamppfiles/htdocs/hogue/application/models/prestamo.php:122) /Applications/XAMPP/xamppfiles/htdocs/hogue/system/core/Output.php 391
DEBUG - 2013-09-03 23:56:28 --> Final output sent to browser
DEBUG - 2013-09-03 23:56:28 --> Total execution time: 0.0477
DEBUG - 2013-09-03 23:57:38 --> Config Class Initialized
DEBUG - 2013-09-03 23:57:38 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:57:38 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:57:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:57:38 --> URI Class Initialized
DEBUG - 2013-09-03 23:57:38 --> Router Class Initialized
DEBUG - 2013-09-03 23:57:38 --> Output Class Initialized
DEBUG - 2013-09-03 23:57:38 --> Security Class Initialized
DEBUG - 2013-09-03 23:57:38 --> Input Class Initialized
DEBUG - 2013-09-03 23:57:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:57:38 --> Language Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Loader Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Controller Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:57:39 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Session Class Initialized
DEBUG - 2013-09-03 23:57:39 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:57:39 --> Session routines successfully run
DEBUG - 2013-09-03 23:57:39 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:57:39 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 23:57:39 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:57:39 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:57:39 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:57:39 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:57:39 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:57:39 --> Final output sent to browser
DEBUG - 2013-09-03 23:57:39 --> Total execution time: 0.4487
DEBUG - 2013-09-03 23:57:41 --> Config Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:57:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:57:41 --> URI Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Router Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Output Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Security Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Input Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:57:41 --> Language Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Loader Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Controller Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:57:41 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Session Class Initialized
DEBUG - 2013-09-03 23:57:41 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:57:41 --> Session routines successfully run
DEBUG - 2013-09-03 23:57:41 --> User Agent Class Initialized
INFO  - 2013-09-03 23:57:41 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 23:57:41 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 23:57:41 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 23:57:41 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 23:57:41 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 23:57:41 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 23:57:41 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:57:41 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:57:41 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:57:41 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:57:41 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:57:41 --> Final output sent to browser
DEBUG - 2013-09-03 23:57:41 --> Total execution time: 0.2146
DEBUG - 2013-09-03 23:57:48 --> Config Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:57:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:57:48 --> URI Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Router Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Output Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Security Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Input Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:57:48 --> Language Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Loader Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Controller Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:57:48 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Session Class Initialized
DEBUG - 2013-09-03 23:57:48 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:57:48 --> Session routines successfully run
DEBUG - 2013-09-03 23:57:48 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:57:48 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-03 23:57:48 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:57:48 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:57:48 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:57:48 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:57:48 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:57:48 --> Final output sent to browser
DEBUG - 2013-09-03 23:57:48 --> Total execution time: 0.0619
DEBUG - 2013-09-03 23:57:50 --> Config Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:57:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:57:50 --> URI Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Router Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Output Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Security Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Input Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:57:50 --> Language Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Loader Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Controller Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:57:50 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Session Class Initialized
DEBUG - 2013-09-03 23:57:50 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:57:50 --> Session routines successfully run
DEBUG - 2013-09-03 23:57:50 --> User Agent Class Initialized
INFO  - 2013-09-03 23:57:50 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
DEBUG - 2013-09-03 23:57:50 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-03 23:57:50 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:57:50 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:57:50 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:57:50 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:57:50 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:57:50 --> Final output sent to browser
DEBUG - 2013-09-03 23:57:50 --> Total execution time: 0.3234
DEBUG - 2013-09-03 23:57:59 --> Config Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:57:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:57:59 --> URI Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Router Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Output Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Security Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Input Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:57:59 --> Language Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Loader Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Controller Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:57:59 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Model Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Session Class Initialized
DEBUG - 2013-09-03 23:57:59 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:57:59 --> Session routines successfully run
DEBUG - 2013-09-03 23:57:59 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:57:59 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-03 23:57:59 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-03 23:57:59 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:57:59 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:57:59 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:57:59 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:57:59 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:57:59 --> Final output sent to browser
DEBUG - 2013-09-03 23:57:59 --> Total execution time: 0.0602
DEBUG - 2013-09-03 23:58:04 --> Config Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:58:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:58:04 --> URI Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Router Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Output Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Security Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Input Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:58:04 --> Language Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Loader Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Controller Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:58:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Session Class Initialized
DEBUG - 2013-09-03 23:58:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:58:04 --> Session routines successfully run
DEBUG - 2013-09-03 23:58:04 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:58:04 --> File loaded: application/views/be/layout/submenu_prestamos.php
DEBUG - 2013-09-03 23:58:04 --> File loaded: application/views/be/prestamos/ver.php
DEBUG - 2013-09-03 23:58:04 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:58:04 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:58:04 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:58:04 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:58:04 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:58:04 --> Final output sent to browser
DEBUG - 2013-09-03 23:58:04 --> Total execution time: 0.1020
DEBUG - 2013-09-03 23:58:08 --> Config Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:58:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:58:08 --> URI Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Router Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Output Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Security Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Input Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:58:08 --> Language Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Loader Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Controller Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:58:08 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Session Class Initialized
DEBUG - 2013-09-03 23:58:08 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:58:08 --> Session routines successfully run
DEBUG - 2013-09-03 23:58:08 --> User Agent Class Initialized
ERROR - 2013-09-03 23:58:08 --> Severity: Notice  --> Undefined variable: report_week /Applications/XAMPP/xamppfiles/htdocs/hogue/application/views/be/reportes/main.php 31
DEBUG - 2013-09-03 23:58:08 --> File loaded: application/views/be/reportes/main.php
DEBUG - 2013-09-03 23:58:08 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:58:08 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:58:08 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:58:08 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:58:08 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:58:08 --> Final output sent to browser
DEBUG - 2013-09-03 23:58:08 --> Total execution time: 0.0822
DEBUG - 2013-09-03 23:58:12 --> Config Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:58:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:58:12 --> URI Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Router Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Output Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Security Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Input Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:58:12 --> Language Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Loader Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Controller Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:58:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Session Class Initialized
DEBUG - 2013-09-03 23:58:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:58:12 --> Session routines successfully run
DEBUG - 2013-09-03 23:58:12 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:58:12 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 23:58:12 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:58:12 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:58:12 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:58:12 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:58:12 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:58:12 --> Final output sent to browser
DEBUG - 2013-09-03 23:58:12 --> Total execution time: 0.0543
DEBUG - 2013-09-03 23:58:15 --> Config Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:58:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:58:15 --> URI Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Router Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Output Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Security Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Input Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:58:15 --> Language Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Loader Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Controller Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:58:15 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Session Class Initialized
DEBUG - 2013-09-03 23:58:15 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:58:15 --> Session routines successfully run
DEBUG - 2013-09-03 23:58:15 --> User Agent Class Initialized
INFO  - 2013-09-03 23:58:15 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 23:58:15 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
INFO  - 2013-09-03 23:58:15 --> ##### models::nomina::executeNomina: INSERT INTO prestamo_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, 
					IFNULL(GROUP_CONCAT(pr.monto SEPARATOR ', '),0)  AS prestamos,
					SUM( IFNULL( pr.monto, 0 ) ) AS total
				FROM prestamo_registro pr
				LEFT JOIN prestamo p ON pr.prestamo_id = p.id AND pr.status <> 0
				RIGHT JOIN user u ON p.user_id = u.id
				AND pr.week =36
				AND p.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 23:58:15 --> ##### models::nomina::executeNomina: INSERT INTO ahorro_temp
				SELECT u.no_emp AS No_Emp, u.name AS Nombre, IFNULL( ar.monto, 0 ) AS total
				FROM ahorro_registro ar
				LEFT JOIN ahorro a ON ar.ahorro_id = a.id AND ar.status <> 0
				RIGHT JOIN user u ON a.user_id = u.id
				AND ar.week =36
				AND a.periodo_id = 8
				GROUP BY u.no_emp;
INFO  - 2013-09-03 23:58:15 --> ##### models::nomina::executeNomina: SELECT ahorro_temp.no_emp as no_emp, ahorro_temp.name as name,
				ahorro_temp.total as ahorro, prestamo_temp.prestamos as prestamos,
				ROUND((ahorro_temp.total + prestamo_temp.total),2) as total
				FROM      ahorro_temp
				JOIN      prestamo_temp ON (ahorro_temp.no_emp = prestamo_temp.no_emp)
				where (ahorro_temp.total + prestamo_temp.total)  > 0
				group by ahorro_temp.no_emp
				order by ahorro_temp.no_emp
				LIMIT 0,10000;
DEBUG - 2013-09-03 23:58:15 --> File loaded: application/views/be/reportes/nomina.php
DEBUG - 2013-09-03 23:58:15 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:58:15 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:58:15 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:58:15 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:58:15 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:58:15 --> Final output sent to browser
DEBUG - 2013-09-03 23:58:15 --> Total execution time: 0.1536
DEBUG - 2013-09-03 23:58:23 --> Config Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:58:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:58:23 --> URI Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Router Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Output Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Security Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Input Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:58:23 --> Language Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Loader Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Controller Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:58:23 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Session Class Initialized
DEBUG - 2013-09-03 23:58:23 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:58:23 --> Session routines successfully run
DEBUG - 2013-09-03 23:58:23 --> User Agent Class Initialized
DEBUG - 2013-09-03 23:58:23 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-03 23:58:23 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:58:23 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:58:23 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:58:23 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:58:23 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:58:23 --> Final output sent to browser
DEBUG - 2013-09-03 23:58:23 --> Total execution time: 0.0514
DEBUG - 2013-09-03 23:58:25 --> Config Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 23:58:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 23:58:25 --> URI Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Router Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Output Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Security Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Input Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 23:58:25 --> Language Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Loader Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Controller Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 23:58:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Model Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Session Class Initialized
DEBUG - 2013-09-03 23:58:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 23:58:25 --> Session routines successfully run
DEBUG - 2013-09-03 23:58:25 --> User Agent Class Initialized
INFO  - 2013-09-03 23:58:25 --> ###### model::nomina::isWeekRegistered: SELECT ifnull(status,0) as status FROM nomina WHERE week = 36 AND periodo_id = 8
DEBUG - 2013-09-03 23:58:25 --> File loaded: application/views/be/reportes/nomina2.php
DEBUG - 2013-09-03 23:58:25 --> File loaded: application/views/be/layout/head.php
DEBUG - 2013-09-03 23:58:25 --> File loaded: application/views/be/layout/admin_menu.php
DEBUG - 2013-09-03 23:58:25 --> File loaded: application/views/be/layout/header.php
DEBUG - 2013-09-03 23:58:25 --> File loaded: application/views/be/layout/footer.php
DEBUG - 2013-09-03 23:58:25 --> File loaded: application/views/be/layout/main.php
DEBUG - 2013-09-03 23:58:25 --> Final output sent to browser
DEBUG - 2013-09-03 23:58:25 --> Total execution time: 0.3452
