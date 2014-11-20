<?php

session_start();

require_once 'idiorm.php';

ORM::configure('mysql:host=localhost;dbname=runner');
ORM::configure('username', 'root');
ORM::configure('password', '');

if(isset($_SESSION['logged in']))
{
    try 
    {
        $contains = ORM::for_table('contains')->create();
        $contains->product_id = $_POST['product_id'];
        $contains->cart_id = $_SESSION['cart_id'];
        $contains->save();
    } 
    catch (Exception $ex) 
    {
        
    }
    
    header('Location: shoppingcart.php');
}
else 
{
    header('Location: login.php');
}

?>
