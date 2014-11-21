<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="view/style1.css">
    </head>
    <body>
    <header>
    <h1>Runner Automobile</h1>
    <form method="post" action="products.php">
        <h3>Search by color:</h3> 
        <input type="search" name="by_color">
        <br><br>
        <input type="submit" name="color_s" value="Search By Color">
        <br>
        <h3>Search by brand name:</h3> 
        <input type="search" name="by_brand_name">
        <br><br>
        <input type="submit" name="brand_s" value="Search By Brand">
        <br>
        <h3>Search by model no:</h3> 
        <input type="search" name="by_model_no">
        <br><br>
        <input type="submit" name="model_s" value="Search By Model">
        <br>
        <h3>Min price:</h3> 
        <input type="search" name="min_price">
        <h3>Max price:</h3> 
        <input type="search" name="max_price">
        <br><br>
        <input type="submit" name="price_s" value="Search By Price Range">
    </form>
    <br>
    </header>
    <nav>
        <a href="index.php" class="button">Home</a>
        <a href="products.php" class="button">Products</a>
        <a href="contacts.php" class="button">Contacts</a>
    </nav>
    <br>
    <?php foreach ($products as $product) { ?>
    <section>
        <img src='<?php echo 'view/' . $product->product_id . '.jpg'; ?>' width="250" height="250">
        <h2>Details</h2>
        <form method="post" action="addtocart.php">
            <?php echo '<h3>Brand Name: ' . $product->brand_name . '</h3>'; ?>
            <?php echo '<h3>Model Number: ' . $product->model_no . '</h3>'; ?>
            <?php echo '<h3>Price: ' . $product->price . '</h3>'; ?>
            <?php echo '<h3>Color: ' . getColor($product->product_id) . '</h3>'; ?>
            <input type="hidden" name="product_id" value=<?php echo $product->product_id; ?>>
            <input type="submit" value="Add to cart">
        </form>
    </section>
    <br>
    <?php } ?>
    </body>
</html>
