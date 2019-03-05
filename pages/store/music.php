<?php
$root = $_SERVER['DOCUMENT_ROOT'];

$routes = ''.$root.'/server/routes.php';
require $routes;

$view=$music;
$title='Music';

require $index;
?>