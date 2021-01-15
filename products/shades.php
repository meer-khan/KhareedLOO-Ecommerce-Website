<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../2ndpage.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Sneakers You LIKE!!!</title>
    
</head>
<body>
  <!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Brand -->
    
    <a class="navbar-brand " href="../mainpage.php">ShopUs</a>
   
    <!-- Hamburger Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
    
        

      <ul class="navbar-nav collapse navbar-collapse center-items" id="navbarSupportedContent">
        <!-- DropDown Menu -->
         <li class="nav-item dropdown center-items">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          What' N E W
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../shades.php">Fall 2020</a>
          <a class="dropdown-item" href="../selectproductpractice.php">Linen</a>
          <a class="dropdown-item" href="#">Sale 2020</a>
        </div>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="selectproductpractice.php">Sneakers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shades.php">Shades</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Handbags</a>
        </li>

      </ul>

        <!-- Right Items -->
        <ul class="navbar-nav collapse navbar-collapse right-items row" id="navbarSupportedContent">
          <li class="nav-item">
            <a class="nav-link" href="../4thv2.php"><i class="fas fa-user-plus"></i></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
          </li>
          <li>
            <a href="#" class="nav-link"><i class="fas fa-shopping-cart "></i></a>
          </li>
      
      </ul>
    </div>
  </div>
</nav>


<!-- BootStrap Coursel -->

<div id="carouselExampleIndicators" class="carousel slide container-fluid" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../carousel/cs4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../carousel/cs2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../carousel/cs5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <div class="container">
            <div class="row">

           
    <?php

    $connection = mysqli_connect('localhost' , 'root' , '' , 'project_database');
    //  if ($connection->connect_errno){
    //    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    //     exit();
    //  }
    //  else{
    //     echo("SEXFUL");
    //  }

     $query ="SELECT image , name  , price FROM shadesdata ORDER BY id ASC";
     $queryfire = mysqli_query($connection , $query);
     $num = mysqli_num_rows($queryfire);

     if ($num>0){
        while($product = mysqli_fetch_array($queryfire)){
            // print_r($product);

            ?>
            <!-- <div class="row"> -->
            <div class="col-xs-6 col-md-4 row1-col1 product-items-layout">
                <img class="prodcts-images" src=" <?php echo $product['image'];?>" alt="shoes">
                <div class="produtc-desc" >
                    <?php echo $product['name'];?>
                    <hr >
                </div>
                <div class="product-price" style="color: #636d70;">
                   <b> $<?php echo $product['price'];?></b>
                </div>
                <a href="../3rdpage.php" class="btn btn-outline-success my-3" style="width: 100%;  ">Shop</a>
            </div>
        <!-- </div> -->
            <?php
        }
     }
?>

 </div>
 
</div>





<?php
  include '../footer.php';
?>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>