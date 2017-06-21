<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['gc-admin/pages/list'] = 'Pages';
$route['Pages/gc-admin/edit_page/(:num)'] = 'Pages/edit_page/$1';
$route['gc-admin/pages/update_page/(:num)'] = 'Pages/update_page/$1';
$route['gc-admin/pages/save_page/(:num)'] = 'Pages/save_page/$1';
