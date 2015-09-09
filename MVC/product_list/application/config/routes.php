<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products/index";
$route['products'] = "products/index";
$route['show_product/(:num)'] = "products/show_product/$1";
$route['add_product'] = "products/add_product";
$route['update_product/(:num)'] = "products/update_product/$1";
$route['delete_product/(:num)'] = "products/delete_product/$1";
$route['delete_product'] = "products/delete_product";
$route['404_override'] = '';

//end of routes.php