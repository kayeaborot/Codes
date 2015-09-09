<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['index'] = "users/index";
$route['login'] = "users/login";
$route['register'] = "users/register";
$route['register_user'] = "users/register_user";
$route['create_user'] = "users/create_user";
$route['add_user'] = "users/add_user";
$route['signin_user'] = "users/signin_user";
$route['show_dashboard'] = "users/show_dashboard";
$route['remove_user/(:num)'] = "users/remove_user/$1";
$route['logout'] = "users/logout";

$route['user_info/(:num)'] = "profiles/user_info/$1";
$route['edit_user/(:num)'] = "profiles/edit_user/$1";
$route['update_userdata'] = "profiles/update_userdata";
$route['show_profile/(:num)'] = "profiles/show_profile/$1";
$route['edit_profile/(:num)'] = "profiles/edit_profile/$1";
$route['update_profile'] = "profiles/update_profile";
$route['update_password'] = "profiles/update_password";
$route['update_userpassword'] = "profiles/update_userpassword";
$route['update_description'] = "profiles/update_description";

$route['post_message'] = "posts/post_message";
$route['post_reply'] = "posts/post_reply";
$route['404_override'] = '';

//end of routes.php