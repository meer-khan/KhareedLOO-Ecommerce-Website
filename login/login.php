<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">
	 <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
	<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email='$email' ";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);
    
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "Login successfully";
            ?>
            <script>
                location.replace("home.php");
            </script>
            <?php
        }
        else{
            echo "password incorrect";
        }
    }else{
        echo "invalid email";
    }
}


?>

  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mt-0">
  <!-- logo -->
  <a class="navbar-brand" href="home.html"> <img id="logo" src="logo1.png"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse center-items" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"> Men <span class="sr-only">(current)</span></a>
        <ul class="submenu">
          <li><a href="#"> Polo </a></li>
          <li><a href="#"> Dress </a></li>
          <li><a href="#"> Trousers </a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Women </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Boys & Girls </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Footwear </a>
      </li>
    </ul>
    <ul class="navbar-nav right-items">
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fa fa-search fa-lg"></i></a>
      </li>
      <li class="nav-item">
        <a href="login.html" class="nav-link"><i class="fas fa-user fa-lg"></i> </a>
      </li>
      <li class="nav-item">
        <a href="cart1.html" class="nav-link"><i class="fa fa-shopping-cart fa-lg"></i></i> </a>
      </li>
    </ul>
    <hr style="height: 1px solid black">
  </div>
</nav>
<hr>

  <!--Login -->
          <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-4"></div>
           <div class="login-wrap col-lg-4 col-md-6 col-sm-4">
            <!-- <form class="login_form"  name = form > -->

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1 style="text-align: center"> <img id="logo1" src="logo1.png"> </h1>
                	
               <input type="text" class="form-control" name="email" id="email" placeholder="abc@example.com" autofocus autocomplete="off"  >
               <div id="email_error" style="margin-top: 5px; width: 100%; font-size: 12px; color: #C62828 ; background-color: rgba(225,0,0,0.1); 
               text-align: center; padding: 5px 8px; border-radius: 3px; border: 1px solid #ef9a9a; display: none;">Please Enter valid Email e.g abc@example.com </div>
<p></p>
               <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" >
               <div id="pass_error" style="margin-top: 5px; width: 100%px; font-size: 12px; color: #C62828 ; background-color: rgba(225,0,0,0.1); 
               text-align: center; padding: 5px 8px; border-radius:3px; border: 1px solid #ef9a9a; display: none;">Please fill up your Password </div> 
               
               <p><a href="auth/forgot_password" style="text-decoration: none; font-size:16px; color:#75be73;"> Forgot Password?</a></p>
                    
               <!-- <input type="submit" value="Sign In" class="btn btn-block btn-lg btn-basic" style="background-color:#70a2d5 ; color: white; font-weight: 60;" {
                background-color: #4CAF50;
                color: white;> -->

               <button  type="submit" name="submit" class="btn btn-1 btn-block"  onclick="validated()" onsubmit="home.html" style="background:#70a2d5; color: white; font-size:20px; font-weight:60 " 
               id="btnLogin" >Sign in</button>
               
               <p><a href="signup.php" style="text-decoration: none; font-size:16px; color:#75be73;"> Don't have an account?</a></p>
           </div>
           </form>    
       <!-- </form> -->
  </br>
  <div class="col-lg-4 col-md-3 col-sm-4"></div>
  </div>
  </div>
</body>
<script type = "text/javascript">
    
     var email = document.getElementById('email');
     var password = document.getElementById('password');

    var email_error = document.getElementById('email_error');
    var pass_error = document.getElementById('pass_error');

    // const patterns = {
    //   password: /^[a-z0-9-]{8-16}$/,
    //   email: /^([a-z0-9\.-]+)@ ([a-z0-9-]+)\.([a-z]{2,5})(\.[a-z]{2,8})?$/,
    // };
    // email.addEventListener('textInput', email_Verify());
    // password.addEventListener('passwordInput', pass_Verify());

     email.addEventListener('textInput', email_Verify());
     password.addEventListener('passwordInput', pass_Verify());   
     

    function validated(){
      if (email.value.length < 9) {
        email.style.border = "1px solid red "
        email_error.style.display = "block"
        email.focus();
        return false;
      }else{
        email.style.border = "1px solid silver "
        email_error.style.display = "none"
      }
      if (password.value.length < 8) {
        password.style.border = "1px solid red "
        pass_error.style.display = "block"
        password.focus();
        return false;
      }else{
        password.style.border = "1px solid silver "
        pass_error.style.display = "none"

      }
    }


    function email_Verify(){
      if(email.value.length >= 8) {
        email.style.border = "1px solid silver "
        email_error.style.display = "none"
        return true;  
      }
    }
    function pass_Verify(){
      if(password.value.length >= 8) {
        password.style.border = "1px solid silver "
        pass_error.style.display = "none"
        return true;
      }
    }

      // function field_Verify(field){
      //   console.log(email.value);
      // console.log(password.value);
      //   if (patterns[field.name].test(field.value)) {
      //     field_Verify.className = 'valid'
      //     // return true;
      //   }
      //   else{
      //     field_Verify.className = 'invalid'
      //     // return false;
      //   }

</script>
</html>