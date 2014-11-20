<?php

session_start();

require_once 'idiorm.php';

ORM::configure('mysql:host=localhost;dbname=runner');
ORM::configure('username', 'root');
ORM::configure('password', '');

$products = ORM::for_table('product')->find_many();

include 'view/product_template.php';

?>

