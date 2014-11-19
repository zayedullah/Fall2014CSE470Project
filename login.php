<?php

session_start();

require_once 'idiorm.php';

ORM::configure('mysql:host=localhost;dbname=test1');
ORM::configure('username', 'sami');
ORM::configure('password', '');

$msg = '';

// If someone is already logged in, redirect the user to index.php
if(isset($_SESSION['logged in']))
{
    header('Location: index.php');
}
else
{
    // If the user has posted the form
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $person = ORM::for_table('person')->where('username', $_POST['username'])->where('password', $_POST['password'])->find_one();
        if($person != null)
        {
            $_SESSION['logged in'] = 'set';
            $_SESSION['customer'] = 'set';
            $msg = 'Hi ' . $_POST['username'] . ', You are sucessfully logged in, go to <a href="index.php">Home</a>';
            header('Location: index.php');
        }
        else
        {
            $msg = 'Wrong username or password, please try again';
        }
    }
}
include 'view/login_template.php';

?>

