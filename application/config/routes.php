<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['card'] = 'home/card';
$route['login'] = 'home/login';
$route['show_detail/(.*)'] = 'home/show_detail/$1';
$route['brend/(.*)'] = 'home/brend/$1';
$route['category/(.*)'] = 'home/category/$1';
$route['pagination'] = 'home/pagination';
$route['adress/(.*)'] = 'home/adress/$1';
$route['select_pay'] = 'home/select_pay';
$route['order'] = 'home/order';
$route['kompaniya'] = 'home/kompaniya';
$route['bookmark'] = 'home/bookmark';
$route['unregistered_page/(.*)'] = 'home/unregistered_page/$1';

$route['pagination/(:num)'] = 'home/pagination';





$route['home'] = 'admin/home';
$route['archiv/(:any)'] = 'pages/$1';




$route['home'] = 'mobile/home';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
