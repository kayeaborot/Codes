<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products/show_products";
$route['show_products'] = "products/show_products";
$route['add_product'] = "products/add_product";
$route['delete_product/(:num)'] = "products/delete_product/$1";
$route['404_override'] = '';

//end of routes.php