<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS styleSheet -->
    <!-- <link rel="stylesheet" href="mainPageCSS.css"> -->
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

    <style>
        @media only screen and (min-width: 992px) {
    /* styling navbar */
   .right-items{
        margin-left: 25%;
    }
    .center-items{
      margin-left: 15%;
    }
  


}


/* outside Large */
  .navbar-brand{
        font-family: 'Cutive Mono', monospace;
        font-weight: 800;
        font-size: 35px;
    }
    </style>
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
            <a class="nav-link" href="#"><i class="fas fa-user-plus"></i></a>
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



 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>