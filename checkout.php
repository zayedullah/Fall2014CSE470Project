<?php

session_start();

require_once 'idiorm.php';

ORM::configure('mysql:host=localhost;dbname=runner');
ORM::configure('username', 'root');
ORM::configure('password', '');

if(isset($_SESSION['logged in']))
{
    ORM::for_table('contains')->where('cart_id', $_SESSION['cart_id'])->delete_many();
    header('Location: shoppingcart.php');
}
else
{
    header('Location: index.php');
}

?>
