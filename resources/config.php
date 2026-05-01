<?php  

ob_start();

session_start();

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('TEMPLATE_FRONT') ? null : define('TEMPLATE_FRONT', __DIR__ . DS . 'templates/front');

// Universal variables
$company = "Kinetiq";

// Localhost settings
$path = '/kinetiq/public/';

?>