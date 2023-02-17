<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ------ Employee Routes ----------
$route['default_controller'] = 'employee';
//$route['employee'] = 'Employee/index';
$route['employee/create'] = 'Employee/create';
$route['employee/edit/(:any)'] = 'Employee/edit/$1';
$route['employee/update/(:any)'] = 'Employee/update/$1';
$route['employee/view/(:any)'] = 'Employee/view/$1';
$route['employee/delete/(:any)'] = 'Employee/delete/$1';
$route['employee/(:any)']['DELETE'] = 'Employee/delete/$1';
$route['employee/store'] = 'Employee/store';

// ------ Register & Login Routes --------
$route['register']['GET'] = 'Register/index';
$route['register']['POST'] = 'Register/reg';

$route['login']['GET'] = 'Login/index';
$route['login']['POST'] = 'Login/log';

// ------ Userpage Routes -----------
$route['user_page']['GET'] = 'User/user_page';
$route['admin_page']['GET'] = 'Admin/admin_page';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
