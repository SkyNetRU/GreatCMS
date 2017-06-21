<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Assets JS and CSS
| -------------------------------------------------------------------
| This file specifies which CSS and JS should be loaded by default.
*/

//Assets CSS
$config['css'] = array(
    '/assets/vendor/metisMenu/metisMenu.min.css',
    '/assets/vendor/datatables-plugins/dataTables.bootstrap.css',
    '/assets/vendor/datatables-responsive/dataTables.responsive.css',
//    '/assets/dist/css/sb-admin-2.css',
    '/assets/css/jquery.windoze.css',
    '/assets/vendor/font-awesome/css/font-awesome.min.css',
    '/assets/css/app.css'
);


//Assets Top JS
$config['top_js'] = array();

//Assets Bottom JS
$config['bottom_js'] = array(
    '/assets/vendor/bootstrap/js/bootstrap.min.js',
    '/assets/vendor/metisMenu/metisMenu.min.js',
    '/assets/vendor/datatables/js/jquery.dataTables.min.js',
    '/assets/js/jquery.windoze.js',
    '/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js',
    '/assets/vendor/datatables-responsive/dataTables.responsive.js',
    '/assets/dist/js/sb-admin-2.js'
);


$config['bottom_js_ie9'] = array(
    'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
    'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'
);
