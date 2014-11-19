<!DOCTYPE html>
<?php 
    session_start();

    require_once 'idiorm.php';

    ORM::configure('mysql:host=localhost;dbname=test1');
    ORM::configure('username', 'sami');
    ORM::configure('password', '');
    
    // The fourth link in navigation menu
    $link = '';
    // The text to print in user interface
    $print = '';
    $logout = '';
    
    // If no one is logged in, show link for login page and text Log In
    if(!isset($_SESSION['logged in']))
    {
        $link = 'login.php';
        $print = 'Log In';
        $id = 'id="exceptional"'; // Not logged in so make log out invisible
    }
    // If someone is logged in determine who he is
    else
    {
        // If the user is a customer, show the shopping cart link
        if(isset($_SESSION['customer']))
        {
            $link = 'shoppingcart.php';
            $print = 'Go To Cart';
            $logout = 'Logout';
            $id = '';
        }
        // If the user is a admin, show the admin panel link
        elseif (isset ($_SESSION['admin'])) 
        {
            // Will implement in prototype 2
        }
        // If we are here the user must be a employee, show the log store link
        else 
        {
            // Will implement in prototype 2
        }
    }
    
    include 'view/index_template.php';
?>
