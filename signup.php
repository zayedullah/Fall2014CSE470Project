<?php

session_start();

require_once 'idiorm.php';

ORM::configure('mysql:host=localhost;dbname=runner');
ORM::configure('username', 'root');
ORM::configure('password', '');

// If someone is already logged in, redirect the user to index.php
if(isset($_SESSION['logged in']))
{
    header('Location: index.php');
}
else
{
    // If the user has posted the form
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['ccn']))
    {
        $id = ORM::for_table('person')->count() + 1;
        
        $person = ORM::for_table('person')->create();
        $person->id = $id;
        $person->name = $_POST['name'];
        $person->username = $_POST['username'];
        $person->password = $_POST['password'];
        $person->email = $_POST['email'];
        $person->phone = $_POST['phone'];
        $person->save();
        
        $cart_id = ORM::for_table('shopping_cart')->count() + 1;
        
        $s_cart = ORM::for_table('shopping_cart')->create();
        $s_cart->cart_id = $cart_id;
        $s_cart->count = 0;
        $s_cart->save();
        
        $customer = ORM::for_table('customer')->create();
        $customer->customer_id = $id;
        $customer->credit_card_no = $_POST['ccn'];
        $customer->cart_id = $cart_id;
        $customer->save();
        
            
        header('Location: login.php');
     
    }
    else 
    {
        include 'view/signup_template.php';
    }
}

?>

