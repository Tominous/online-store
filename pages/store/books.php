<?php
$root = $_SERVER['DOCUMENT_ROOT'];

$routes = ''.$root.'/server/routes.php';
require $routes;

$view=$books;
$title='Books';

require $index;
?>