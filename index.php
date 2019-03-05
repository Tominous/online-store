<?php

if (!isset($view)) {
    header('Location: /pages/home.php');
}

require $db_connect;
require $session;
require $header;

require $view;

require $footer;
require $db_close;
?>