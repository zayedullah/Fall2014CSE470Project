<?php

session_start();

require_once 'idiorm.php';

ORM::configure('mysql:host=localhost;dbname=runner');
ORM::configure('username', 'root');
ORM::configure('password', '');

$products = array();

if(isset($_POST['color_s']))
{
    $c = ORM::for_table('color')->where('color', $_POST['by_color'])->find_many();
    for($j = 0; $j < count($c); $j++)
    {
        $products[$j] = ORM::for_table('product')->where('product_id', $c[$j]->product_id)->find_one();
    }
    unset($_POST['color_s']);
}
elseif (isset ($_POST['brand_s'])) 
{
    $products = ORM::for_table('product')->where('brand_name', $_POST['by_brand_name'])->find_many();
    unset($_POST['brand_s']);
}
elseif(isset ($_POST['model_s']))
{
    $products = ORM::for_table('product')->where('model_no', $_POST['by_model_no'])->find_many();
    unset($_POST['model_s']);
}
elseif(isset ($_POST['price_s']))
{
    $products = ORM::for_table('product')->where_raw('price between ' . $_POST['min_price'] . ' and ' . $_POST['max_price'])->find_many();
    unset($_POST['price_s']);
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

