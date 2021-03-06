<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['gc-admin'] = 'GreatCms/auth';
$route['gc-admin/login'] = 'GreatCms/auth/login';
$route['gc-admin/logout'] = 'GreatCms/auth/logout';
$route['gc-admin/dashboard'] = 'GreatCms/dashboard';
$route['gc-admin/modules'] = 'GreatCms/GC_Modules';
$route['gc-admin/modules/(:any)'] = 'GreatCms/GC_Modules/$1';
$route['gc-admin/modules/(:any)/(:num)'] = 'GreatCms/GC_Modules/$1/$2';
//$route['gc-admin/pages/edit'] = 'GreatCms/Pages/edit';
//$route['gc-admin/pages/save'] = 'GreatCms/Pages/save';
$route['gc-admin/pages/list'] = 'Pages';
$route['gc-admin/pages/edit_page/(:num)'] = 'Pages/edit_page/$1';
$route['gc-admin/pages/update_page/(:num)'] = 'Pages/update_page/$1';
$route['gc-admin/pages/save_page/(:num)'] = 'Pages/save_page/$1';
$route['gc-admin/pages/create_page'] = 'Pages/edit_page';
$route['gc-admin/pages/create_page_ajax'] = 'Pages/save_page';
