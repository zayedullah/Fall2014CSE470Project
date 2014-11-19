<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <head>
    <h1>Runner Automobile</h1>
    </head>
    <nav>
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="contacts.php">Contacts</a>
    </nav>
    <section>
        <form method="post" action="login.php">
            Username
            <input type="text" name="username">
            <br>
            Password
            <input type="password" name="password">
            <input type="submit" value="Log In">
        </form>
        <br>
        <?php echo $msg ?>
    </section>
    </body>
</html>


