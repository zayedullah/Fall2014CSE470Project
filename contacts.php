<html>
    
    <head>  
        <title>Runner Group of Companies</title>
        <link rel="stylesheet" href="view/style1.css">
    </head>

    <body>
    <nav id="sidebar">
        <a href="index.php" class="button">Home</a>
        <a href="products.php" class="button">Products</a>
        <a href="contacts.php" class="button">Contacts</a>
    </nav>
    <br>

    <p>
    Head Office:<br>
    Runner Group of Companies<br>
    138/1, Tejgaon I/A <br>
    Dhaka-1208 <br>
    Hotline: 09611222000, 16273(Mobile Only) <br>
    Phone- 8870160,8870161,8870162,8870163 <br>
    Fax- 880-2-8826333 <br>
    E-mail:admin@runnerbd.com<br>
    </p>

    <table border="2" cellpadding="10px" cellspacing="10px">
        <tr>
            <td>
                <img src="view/runner_logo.jpg" id="logo" width="340" border="0" />
            </td>

            <td>
                Hotline: 09611222000, 16273(Mobile Only) <br>
                Phone- 8870160,8870161,8870162,8870163 <br>
                Fax- 880-2-8826333 <br>
                E-mail:admin@runnerbd.com
            </td>
        </tr>

        <tr>
            <td>
                RUNNER MOTORS LTD.
            </td> 

            <td>
                Hotline: 09611222000, 16273(Mobile Only)<br>
                <br>
                Fax :880-2-8829150
            </td>
        </tr>

    </table>

    <form method="post" action="contacts.php" name="contact_form">
        <table width="400px;">
            <tr>
                <td width="19%" class="text_in">Name *</td>
                <td><input class="con_text" type="text" name="name" size="50"  ></td>
            </tr>  
            <tr>
                <td class="text_in"> Phone *</td>
                <td><input class="con_text" type="text" name="phone"size="50"  ></td>
            </tr>
            <tr>
                <td class="text_in">Address *</td>
                <td><textarea class="con_text" cols="38" rows="4" name="address"></textarea></td>
            </tr>  
            <tr>
                <td class="text_in">Subject *</td>
                <td><input class="con_text" type="text" name="subject"size="50"  ></td>
            </tr>
            <tr>
                <td class="text_in">Email *</td>
                <td><input class="con_text" type="text" name="email"size="50" ></td>
            </tr>
            <tr>
                <td class="text_in">Message *</td>
                <td><textarea class="con_text" cols="38" rows="4" name="sms"></textarea></td>
            </tr>
        </table>
        <div>
            <input class="show_b"  type="submit"  value="Send">
        </div>
        <input type="hidden" name="formsubmit" value="formToken" />
    </form>
    
    <iframe width="450" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" img src="view/runner_map.jpg">
    Runner Group Of Companies</a> in a larger map</small>

    </body>

</html>