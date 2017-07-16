<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Assets JS and CSS
| -------------------------------------------------------------------
| This file specifies which CSS and JS should be loaded by default.
*/


//For Admin Panel
$config['admin']['css'] = array(
    '/assets/layouts/layout4/css/layout.min.css',
    array ('id' => 'style_color', 'file' => '/assets/layouts/layout4/css/themes/default.min.css'),
    '/assets/layouts/layout4/css/custom.css',
    '/assets/global/plugins/bootstrap-toastr/toastr.min.css'
);

$config['admin']['top_js'] = array();

$config['admin']['bottom_js'] = array(
    '/assets/layouts/layout4/scripts/layout.min.js',
    '/assets/layouts/global/scripts/quick-sidebar.min.js',
    '/assets/layouts/global/scripts/quick-nav.min.js',
    '/assets/global/plugins/bootstrap-toastr/toastr.min.js',
    '/assets/global/scripts/custom.js',
    '/assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
    '/assets/global/plugins/jquery-validation/js/additional-methods.min.js'
);

//For Site Front
$config['site']['css'] = array();

$config['site']['top_js'] = array();

$config['site']['bottom_js'] = array();


//Global
$config['global']['css'] = array(
    'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
    '/assets/global/plugins/font-awesome/css/font-awesome.min.css',
    '/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
    '/assets/global/plugins/bootstrap/css/bootstrap.min.css',
    '/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
    '/assets/global/plugins/bootstrap-select/css/bootstrap-select.css',
    '/assets/global/plugins/jquery-ui/jquery-ui.min.css',
    array('id' => 'style_components', 'file' => '/assets/global/css/components-rounded.min.css'),
    '/assets/global/css/plugins.min.css'
);

$config['global']['top_js'] = array();

$config['global']['bottom_js'] = array(
    '/assets/global/plugins/jquery.min.js', //v1.12.4
    '/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    '/assets/global/plugins/jquery.blockui.min.js',
    '/assets/global/plugins/jquery-ui/jquery-ui.min.js',
    '/assets/global/plugins/bootstrap/js/bootstrap.min.js',
    '/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
    '/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js',
    '/assets/global/plugins/js.cookie.min.js',
    '/assets/global/scripts/app.min.js',
    '/assets/global/scripts/components-bootstrap-select.min.js',
);

//Scripts for IE 9
$config['global']['bottom_js_ie9'] = array(
    '/assets/global/plugins/respond.min.js',
    '/assets/global/plugins/excanvas.min.js',
    '/assets/global/plugins/ie8.fix.min.js'
);