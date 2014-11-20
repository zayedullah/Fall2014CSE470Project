<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="view/style1.css">
    </head>
    <body>
    <head>
    <h1>Runner Automobile</h1>
    </head>
    <nav id="sidebar">
        <a href="index.php" class="button">Home</a>
        <a href="products.php" class="button">Products</a>
        <a href="contacts.php" class="button">Contacts</a>
    </nav>
    <br>
    <section>
        <form method="post" action="login.php">
            Username
            <input type="text" name="username">
            <br>
            Password
            <input type="password" name="password">
            <br>
            <input type="submit" value="Log In">
        </form>
        <br>
        <?php echo $msg ?>
    </section>
    </body>
</html>


