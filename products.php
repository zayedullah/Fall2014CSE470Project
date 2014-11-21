<?php

session_start();

require_once 'idiorm.php';

ORM::configure('mysql:host=localhost;dbname=runner');
ORM::configure('username', 'root');
ORM::configure('password', '');

$products = array();

if(isset($_POST['by_color']) || isset($_POST['by_brand_name']) || isset($_POST['by_model_no']))
{
    if(isset($_POST['by_color']))
    {
        $c = ORM::for_table('color')->where('color', $_POST['by_color'])->find_many();
        for($j = 0; $j < count($c); $j++)
        {
            $products[$j] = ORM::for_table('product')->where('product_id', $c[$j]->product_id)->find_one();
        }
    }
}
else
{
    $products = ORM::for_table('product')->find_many();
}

function getColor($id)
{
    $c = ORM::for_table('color')->where('product_id', $id)->find_one();
    return $c->color;
}

include 'view/product_template.php';

?>

