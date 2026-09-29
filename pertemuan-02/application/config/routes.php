<?php
$route = [];
$route['default_controller'] = 'home';
$route['info/(:any)'] = 'home/info/$1';
$route['pasien/(:num)'] = 'home/pasien/$1';