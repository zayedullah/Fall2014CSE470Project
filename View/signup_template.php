<html>
    <head>
        <title>Sign Up</title>
        <script src="view/validate_form.js"></script>
        <link rel="stylesheet" href="view/style3.css">
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
    <section>
        <form method="post" action="signup.php" onsubmit="return validate(this)">
            Name
            <input type="text" name="name">
            <br>
            Username
            <input type="text" name="username">
            <br>
            Password
            <input type="password" name="password">
            <br>
            Email
            <input type="text" name="email">
            <br>
            Phone
            <input type="text" name="phone">
            <br>
            Credit Card Number
            <input type="text" name="ccn">
            <br>
            <input type="submit" value="Sign Up">
        </form>
        <br>
    </section>
    </body>
</html>



