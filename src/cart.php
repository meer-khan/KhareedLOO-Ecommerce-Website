<?php
    session_start();
    $name = $_POST['name'];
    $size = $_POST['sizes'];
    $quantity =  $_POST['Quantity'];
    $price = $_POST['price'];

    $product_array = array($name  , $price  , $quantity  , $size );
    // print_r($product_array);
    $_SESSION['name'] = $product_array;
    header('location:3rdpage.php');
  
?>