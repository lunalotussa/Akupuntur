<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'Main';
$route['regisTerapis'] = 'Main/registerCust';
$route['regisCustomer'] = 'Main/registerCust';
$route['default_controller'] = 'Landing';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
