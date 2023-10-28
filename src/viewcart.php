<?php 
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS styleSheet -->
    <link rel="stylesheet" href="3rdpage.css">
    <link rel="stylesheet" href="viewcart.css">
    <link rel="stylesheet" href="mainPageCSS.css">
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Cart View
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
            <a href="#" class="nav-link"><i class="fas fa-shopping-cart "></i></a>
          </li>
      
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron">
    <p class="deliver-everything display-4">We Deliver you everything!!! </p>
    <p class="display-4 cart-products">CART PRODUCTS</p>

  
</div>
<div class="container">
  <table class="table">
        <thead>
            <tr>
                <th>
                    Sno
                </th>
                <th>
                    Name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Size
                </th>
                <th>
                    Total Price
                </th>
                <th>
                    Update
                </th>
                <th>
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $sno = 1 ;
            $qty ;
            $pri;
                foreach ($_SESSION as $products){
                    echo"<tr>";
                        echo "<td>".($sno++) ."</td>";
                       echo "<form action='editcart.php' method='post'>";
                         foreach($products as $key => $value){
                            // name
                            if ($key == 0){
                                echo "<input type='hidden' name='name$key' value='".$value."' '<td>''</td>'";
                                echo "<td>".$value."</td> ";
                            }
                            // price
                             if ($key == 1){
                                 echo "<input type='hidden' name='name$key' value='".$value."' '<td>''</td>'";
                                echo "<td>".$value."</td> ";
                                $pri=$value;
                            }
                            // quantity
                             if ($key == 2){
                                echo "<td> <input type='text' name='name$key' value= '".$value."'></td> ";
                                $qty=$value;
                            }
                            // size
                             if ($key == 3){
                                  echo "<input type='hidden' name='name$key' value='".$value."''<td>''</td>'";
                                    echo "<td>".$value."</td> ";
                                // echo "<td>".$value. "</td> ";
                            }
                            
                        }
                       
                        $qty = (float)$qty;
                        // use of ltrim function to remove dollar sign from price
                        $pri= ltrim($pri,"$");
                        // use of float function to make price from String to float
                        $pri = (float)$pri;
                        $bill = (float)($qty*$pri);
                        echo "<td>$$bill</td>";
                        echo" <td><input type='submit' name='event' value='Update' class='btn btn-warning'  </td>";
                        echo" <td><input type='submit' name='event' value='Delete' class='btn btn-danger'></i>  </td>";
                        echo "</form>";
                    echo"</tr>";

                }
            ?>
        </tbody>
    </table>

    <a href="mainpage.php" class="btn btn-primary col-lg-3 my-3">Continue Shopping</a>
    <a href="orderno.php" class="btn btn-success col-lg-3 float-right my-3">ORDER</a>
    <div class="col-lg-6"></div>
    
</div>






<?php
  include 'footer.php';
?>
</body>
</html>


<?php
    // foreach($_SESSION as $val){
    //     print_r($val);
        
    // } 
    
?>