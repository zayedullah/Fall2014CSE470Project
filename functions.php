<?php

//global variables for database connection
$db_hostname = 'localhost';
$db_database = 'test1';
$db_username = 'sami';
$db_password = '';

// function for connecting to database
function connectToDB()
{
    global $db_database, $db_hostname, $db_password, $db_username;

    $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

    if($connection->connect_error)
    {
        echo 'Database error occured!<br>';
        die($connection->connect_error);
    }
    
    return $connection;
}

// function for printing all the rows of a database table
function printTable($tablename)
{
    $connection = connectToDB();
    $query  = 'select * from ' . $tablename;
    $result = $connection->query($query);
    
    if (!$result) 
    {
        die($connection->connect_error);
    }

    $num_of_row = $result->num_rows;
    
    for($j = 0; $j < $num_of_row; $j++)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        // if this is the first row
        // initialize the html table and
        // print attributes
        if($j == 0)
        {
            echo '<table border="1" style="width:100%">';
            echo '<tr>';
            foreach ($row as $key => $value) 
            {
                echo '<td>' . $key . '</td>';
            }
            echo '</tr>';
            echo '<tr>';
            foreach ($row as $key => $value) 
            {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        else
        {
            echo '<tr>';
            foreach ($row as $key => $value) 
            {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
    }
    echo '</table>';
}

?>

