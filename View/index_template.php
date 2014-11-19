<html>
    <head>
        <title>Runner Automobile</title>
        <link rel="stylesheet" href="view/style.css">
    </head>
    <body>
    <header>
    <h1>Runner Automobile</h1>
    </header>
    <nav>
        <a href="index.php">Home</a><br>
        <a href="products.php">Products</a><br>
        <a href="contacts.php">Contacts</a><br>
        <a href=<?php echo $link ?>><?php echo $print ?></a><br>
        <a href='logout.php' <?php echo $id ?>><?php echo $logout ?></a><br>
    </nav>
    </body>
</html>
