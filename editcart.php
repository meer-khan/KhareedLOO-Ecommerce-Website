<?php
    session_start();
        $name = $_POST['name0'];
        $price = $_POST['name1'];
        $quantity =  $_POST['name2'];
        $size = $_POST['name3'];
        $event = $_POST['event'];

        $product_array = array($name  , $price  , $quantity  , $size );

        if ($event == "Update"){
            $_SESSION[$name]= $product_array;
        }
        else if ($event == "Delete"){
            unset($_SESSION[$name]);
        }
        // exit;
        header('location:viewcart.php');
    
?>