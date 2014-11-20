<html>
    <head>
        <title>Runner Automobile Ltd</title>
        <link rel="stylesheet" href="view/style1.css">
    </head>
    <body>
        <header>
            <img src="view/runner_logo.jpg" id="logo">
            
        </header>
        <nav id="sidebar">
        <a href="index.php" class="button">Home</a>
        <a href="products.php" class="button">Products</a>
        <a href="contacts.php" class="button">Contacts</a>
        <a href=<?php echo $link ?> class="button"><?php echo $print ?></a>
        <a href='logout.php' <?php echo $id ?>><?php echo $logout ?></a>
    </nav>
        <br>
        <section class="balloon">
            <h1>Runner Automobile</h1>
            <img src="view/homepage.jpg" width="950" height="300">
            <h1>A SHORT BRIEF ON RUNNER AUTOMOBILES LTD</h1>
            <p>Runner Automobiles Limited (RAL), the flagship company of Runner Group manufacturing motorcycles, 
               started its journey in the year 2000. The organization has over 700 employees. In the past 10 years, 
               the company has invested a large amount of capital to introduce complete set of advanced production 
               technology and equipment. Till now, the company's production capacity has reached 500 motorcycles per day. 
               RAL's products cover 4 series of motorcycles ranging from 50 cc to 150 cc, and about 12 models of motorcycles.
            </p>
        </section>
    </body>
</html>
