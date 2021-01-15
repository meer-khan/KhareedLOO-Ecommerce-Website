<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS styleSheet -->
    <link rel="stylesheet" href="mainPageCSS.css">
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>ShopUs</title>
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
            <a href="#" class="nav-link"><i class="fas fa-shopping-cart "></i></a>
          </li>
      
      </ul>
    </div>
  </div>
</nav>


<!-- WE Deliver You Everything -->

<div class=" jumbotron">
  <p class="deliver-everything display-4">We Deliver you everything!!! </p>
</div>

<!-- GRIDS -->

<div class="container">
  <div class="row ">
    <div class=" col-xs-12 col-md-6  row1-col1-border">
      <img class="model1" src="images/Model1.jpg" alt="">
    </div>
    
    <div class="col-xs-12 col-md-6   row1-col2-row1-border">
      <div class="row">
      <p class="model1-heading display-4">SHADES YOU LIKE</p>
      <p class="model1-description">Lorem ipsum dolor sit amet,
         consectetur adipisicing elit. Distinctio dolor
          voluptatem id temporibus totam possimus voluptas adipisci,
           natus ex corrupti commodi accusamus, laboriosam laborum quas quasi!
            Quidem recusandae laborum ducimus!</p>
      
          <a href="products/shades.php" class="model1-desc-button btn btn-dark"><i>S H A D E S</i> </a> 
          <div class="w-100"></div>
       <div class="row row1-col2-row2-border my-container"> 
         <div class="col-xs-12 col-md-6"></div>
          <img class="model2" src="images/model8.png" alt="">
          <a href="products/selectproductpractice.php" class="model2-dec-button btn btn-dark"><i>S N E A K E R S</i></a> 
          
       </div>
      </div>
      </div>

    </div>
  </div>
  
    
  </div>

</div>

<!-- Cover Above Stories -->


<div class="container">
  <div class="row row2-col1-border">
    <div class="col12">
      <img class=" model5" 
      src="images/model5.jpg" alt="">
    </div>
  </div>
</div>


<!-- STORIES -->


<div class="container jumbotron story-jumbo">
  <p class="display-4 stories">
    STORIES
    <hr class="story-underline">
  </p>
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-md-4 story-container">
        <div>
          <img class="story-images" src="images/model9.jpg" alt="">
          <p class="story-heading">Fashion week Online</p>
          <a class="story-links" href="https://www.nytimes.com/2020/07/09/fashion/digital-couture-fashion-week-dior-chanel.html">
            Classic Fashion Items You’ll Adore and Wear Regularly >
          </a>
        </div>
      </div>
      <div class="col-xs-6 col-md-4 story-container">
          <div>
            <img class="story-images" src="images/model10.jpg" alt="">
            <p class="story-heading">Artist Brian Rochefort, the ‘Bad Boy of Ceramics’</p>
            <a class="story-links" href="https://www.vogue.com/article/berluti-spring-2021-menswear">
              Joins Kris Van Assche at Berluti >
            </a>
        </div>
      </div>
      <div class="col-xs-6 col-md-4 story-container">
          <div>
            <img class="story-images nourie-flayhan" src="images/model11.jpg" alt="">
            <p class="story-heading">nourie flayhan illustrates GUCCI Beauty</p>
            <a class="story-links" href="https://www.gucci.com/us/en/st/stories/article-category-beauty/article/beauty-illustrations-nourie-flayhan">
              Nourie Flayhan—who created a series of artworks for 
              Gucci Beauty featuring imaginary characters pictured at home >
            </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include 'footer.php';
?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>