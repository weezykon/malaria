<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Dashboard/index';
// $route['week'] = 'Dashboard/merchant';
// $route['assign'] = 'Dashboard/assign';
// $route['reps'] = 'Dashboard/reps';
// $route['addrep'] = 'Dashboard/addrep';
// $route['call'] = 'Dashboard/call';
// $route['calls'] = 'Dashboard/calls';
// $route['addnote'] = 'Dashboard/addnote';
// $route['addmerchant'] = 'Dashboard/addmerchant';
// $route['upload'] = 'Dashboard/upload';
$route['login'] = 'Auth/login';
$route['logout'] = 'Auth/logout';
// $route['password'] = 'Auth/password';
$route['test/(:any)'] = 'Auth/test/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
