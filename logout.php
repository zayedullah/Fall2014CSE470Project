<?php

session_start();

unset($_SESSION['logged in']);
unset($_SESSION['customer']);
unset($_SESSION['username']);
unset($_SESSION['password']);

echo 'You are successfully logged out, please go to <a href="index.php">Home</a>';

?>
