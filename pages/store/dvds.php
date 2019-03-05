<?php
$root = $_SERVER['DOCUMENT_ROOT'];

$routes = ''.$root.'/server/routes.php';
require $routes;

$view=$dvds;
$title='DVDs';

require $index;
?>