<!DOCTYPE html>
<?php require_once 'idiorm.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Runner Group</title>
    </head>
    <body>
        <?php
        ORM::configure('mysql:host=localhost;dbname=test1');
        ORM::configure('username', 'sami');
        ORM::configure('password', '');
        
        $persons = ORM::for_table('person')->find_many();
        
        foreach ($persons as $person) 
        {
            echo $person->name . '<br>';
        }
        ?>
    </body>
</html>
