<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS styleSheet -->
    <link rel="stylesheet" href="3rdpage.css">
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Product Details
    </title>
</head>
<body>

  <!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Brand -->
    
    <a class="navbar-brand " href="mainpage.php">ShopUs</a>
   
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
          <a class="nav-link" href="./products/selectproductpractice.php">Sneakers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./products/shades.php">Shades</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Handbags</a>
        </li>

      </ul>

        <!-- Right Items -->
        <ul class="navbar-nav collapse navbar-collapse right-items row" id="navbarSupportedContent">
          <li class="nav-item">
            <a class="nav-link" href="4thv2.php"><i class="fas fa-user-plus"></i></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
          </li>
          <li>
            <a href="viewcart.php" class="nav-link"><i class="fas fa-shopping-cart "></i></a>
          </li>
      
      </ul>
    </div>
  </div>
</nav>


<!-- PRODUCT BIG IMAGE -->
<div class="container">
    <div class="row align-items-center">
        <div class="col-xs-12 col-md-8 col-product-img">
            <img class="product-detail-image" src="products/1.JPG" alt="">

        </div>
<!-- PRODUCT NAME AND PRICE SECTION -->
        <div class="col-xs-12 col-md-4">
          <form action="cart.php" method="POST">
              <div class="product-name">
                <input type="hidden" name="name" value="BOOM BOX SNEAKERS">
                  BOOM BOX SNEAKERS
              </div>
              
              <hr class="section-divider">
              <div class="product-size">
                  SIZES
                  <span class="product-size-dropdown">
                      <select class="size-dropdown" name="sizes" id="" >
                          <option value="">41</option>
                          <option value="">42</option>
                          <option value="">43</option>
                          <option value="">44</option>
                      </select>
                  </span>
              </div>

              <hr class="section-divider">
              <div class="" style="font-family:'Times New Roman' ; font-size:20px;"  >
                Quantity 
                <div class="mt-2">
                  <input type="number" name="Quantity" value="1" min="1" > 
                </div>
              </div>
              <hr class="section-divider">
              <div class="product-price">
                 <input type="text" name="price" value="$1000.00" class="input-price" style="border-top-style: hidden;border-right-style: hidden;border-left-style: hidden; border-bottom-style: groove;"> 
              </div>
              <div class="cart-button-container">
                  
                  <input type="submit" name="add_cart" value="Place to Cart" id="" class="add-cart-button">
              </div>
          </div>
        </form>
    </div>
</div>




<!-- MORE PICTURES OF PRODUCT -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 more-image-container">
            <img class="product-more-images" src="products/1.1.JPG" alt="">  
        </div>

        <div class="col-xs-12 col-md-4 more-image-container">
                 <img class="product-more-images" src="products/1.2.JPG" alt="">
        </div>   
 <!--PRODUCT DESCRIPTION  -->
        <div class="col-xs-12 col-md-4 product-desc">
            Complimentary delivery or collect in stores
            To preserve the beauty of your product, please prevent any contact with oil or 
            alcohol-based substances such as hand sanitizers, cosmetics, perfumes, or disinfectants.
            <div class="in-stock">
                <span class="dot"> </span>
                <span>In Stock</span>
                
            </div>
        </div>
    </div>
</div>


<!-- NEW ARRIVAL -->
<div>
    <!-- Here we will make a Slider using JS -->
</div>




<?php
  include 'footer.php';
?>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
</body>
</html>

<?php

?>