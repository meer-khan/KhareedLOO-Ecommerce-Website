<?php 

    $username = "root";
    $password = "";
    $server = "localhost" ;
    $database = "mydata";

    $connection = mysqli_connect($server, $username, $password ,$database );
    // another method to connect data base is 
    // remoce database argument in mysqli_connect() function 
    // pass databse in function mysqli_select_db()

    // $db = mysqli_select_db($connection,$database);

     if ($connection->connect_errno){
       echo "Failed to connect to MySQL: " . $connection -> connect_error;
        exit();
     }

    
?>

