<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="view/style1.css">
    </head>
    <body>
    <header>
    <h1>Runner Automobile</h1>
    </header>
    <nav>
        <a href="index.php" class="button">Home</a>
        <a href="products.php" class="button">Products</a>
        <a href="contacts.php" class="button">Contacts</a>
    </nav>
    <br>
    <?php if(!$empty) { ?>
    <?php foreach ($products as $product) { ?>
    <section>
        <img src='<?php echo 'view/' . $product->product_id . '.jpg'; ?>' width="250" height="250">
        <h2>Details</h2>
        <form method="post" action="addtocart.php">
            <?php echo '<h3>Brand Name: ' . $product->brand_name . '</h3>'; ?>
            <?php echo '<h3>Model Number: ' . $product->model_no . '</h3>'; ?>
            <?php echo '<h3>Price: ' . $product->price . '</h3>'; ?>
            <input type="hidden" name="product_id" value=<?php echo $product->product_id; ?>>
        </form>
    </section>
    <br>
    <?php } ?>
    <?php } ?>
    <?php echo $msg; ?>
    </body>
</html>
