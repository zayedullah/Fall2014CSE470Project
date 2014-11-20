<?php

session_start();

unset($_SESSION['logged in']);
unset($_SESSION['customer']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['id']);
unset($_SESSION['cart_id']);

header('Location: index.php');

?>
