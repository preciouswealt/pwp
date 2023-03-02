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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['aboutpage'] = 'Home/aboutpage';

$route['Consignment'] = 'Home/consignment';
$route['Consignmentpage/(:num)'] = 'Home/consignment/$1';
$route['Detail_Consignment/(:num)'] = 'Home/detail_consignment/$1';

$route['Mortgage'] = 'Home/Mortgage';
$route['Detail_Mortgage/(:num)'] = 'Home/detail_mortgage/$1';

$route['Rentproperty'] = 'Home/rentproperty';
$route['Detail_Rentproperty/(:num)'] = 'Home/detail_rentproperty/$1';

$route['Propertysale'] = 'Home/propertysale';
$route['Detail_Propertysale/(:num)'] = 'Home/detail_propertysale/$1';

$route['Propertyproject'] = 'Home/propertyproject';
$route['Propertyproject/(:num)'] = 'Home/propertyproject/$1';
$route['Detail_Propertyproject/(:num)'] = 'Home/detail_propertyproject/$1';

$route['Touchtomoney'] = 'Home/touchtomoney';
$route['News'] = 'Home/news';
// $route['Detail_news'] = 'Home/detail_news/';
$route['Detail_news/(:num)'] = 'Home/detail_news/$1';

$route['Contract'] = 'Home/contract';

$route['Even'] = 'Home/even';
$route['Detail_even/(:num)'] = 'Home/detail_even/$1';

$route['Contract'] = 'Home/contract';
$route['Register'] = 'Home/Register';
$route['Consignor'] = 'Home/Registerconsignor';
$route['Investor'] = 'Home/Registerinvestor';
