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
        $pids = ORM::for_table('contains')->where('cart_id', $_SESSION['cart_id'])->find_many();
        $products = array();
        for ($j = 0; $j < count($pids); $j++) 
        {
            $products[$j] = ORM::for_table('product')->where('product_id', $pids[$j]->product_id)->find_one();
        }
    } 
    catch (Exception $ex) 
    {
        
    }
    
    $empty = FALSE;
    
    if(empty($products))
    {
        $empty = TRUE;
        $msg = '<h1>Cart is empty</h1>';
    }
    else
        $msg = '<form method="post" action="checkout.php"><input type="submit" value="Check Out"></form>';
    
    
    include 'view/shoppingcart_template.php';
}
else
{
    header('Location: index.php');
}

?>

