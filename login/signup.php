<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
   <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
   <script type="text/javascript" src="signup.js"></script>
   <link rel="stylesheet" type="text/css" href="signup.css">
  <?php
  include 'links.php';
  ?>
</head>
<body>

<?php   

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']); 

  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = "select * from registration where email='$email'";
  $query= mysqli_query($con, $emailquery);

  $emailcount= mysqli_num_rows($query);
  if($emailcount>0){
    echo "email already exist";
  }else{
    if($password === $cpassword){

      $insertquery = "insert into registration( username, email, password, cpassword) 
      values('$username','$email','$pass','$cpass')";

      $iquery = mysqli_query($con, $insertquery);

      if($iquery){
        ?>

                <script>
                location.replace("login.php");
                </script>
            <?php
         }else{
            ?>

            <script>
                alert("connect unsuccessfull");
            </script>
<?php

      }

    }else{
      echo "password is not matching";
    }
  }
}
?>



	  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mt-0">
  <!-- logo -->
  <a class="navbar-brand" href="home.php"> <img id="logo" src="logo1.png"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse center-items" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"> Men <span class="sr-only">(current)</span></a>
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
        <a href="login.php" class="nav-link"><i class="fas fa-user fa-lg"></i> </a>
      </li>
      <li>
      	<a href="#"><i class="fas fa-sign-out-alt"></i></a>
      </li>
      <li class="nav-item">
        <a href="cart1.html" class="nav-link"><i class="fa fa-shopping-cart fa-lg"></i></i> </a>
      </li>

    </ul>
    <hr style="height: 1px solid black">
  </div>
</nav>
<hr>

  <!--SignUp -->
    <div class="container">
      <div class="row justify-content-center">
	  <div class="Signup-wrap col-lg-4 col-md-4 col-sm-4 ">
                	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <h1 style="text-align: center"> <img id="logo1" src="logo1.png"> </h1>
                  
                    <input  class="form-control" type="text" name="username" placeholder="Username" autocomplete="off" required>
                    <p>Username must contain 5-12 characters</p>
                    <p></p>
                    <input id="txtEmail" type="text" class="form-control" name="email" placeholder="Email"  autofocus autocomplete="off" required="">
					          <p>Email must be a valid address, e.g. abc@example.com</p>
                    <p></p>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password"  autocomplete="off">
                    <p>Password must be alphanumberic (@, _ and - are also allowed) and be 8-20 characters</p>
                    <p></p>
                    <input id="conpassword" type="password" class="form-control" name="cpassword" placeholder=" Confirm Password"  autocomplete="off">
                    <p>Password and Comfirm Password does not match</p>
                    <p></p>
                    <button id="submitbtn" class="btn btn-block btn-lg btn-basic" style="background:#70a2d5; color:white; font-size:20px; font-weight:600; " type="submit" name="submit">
                      <!--<a href="login.html"  style="text-decoration: none; color: white">--> Sign Up </a></button>

                    <p></p>
                    
                </div>
                
            </form>
          </div>
      </div>
	</div>
</body>
<!--
 <script type="text/javascript">
 $(document).ready(function(){
 $('#emailcheck').hide();
 $('#passcheck').hide();
 $('#conpasscheck').hide();
 var email_err = true;
 var pass_err = true;
 var conpass_err = true;
 $('#txtEmail').keyup(function(){
 email_check();
 });
 function email_check(){
 var email_val = $('#txtEmail').val();
 if(email_val.length == ''){
 $('#emailcheck').show();
 $('#emailcheck').html("**Please Fill the email");
 $('#emailcheck').focus();
 $('#emailcheck').css("color","red");
 email_err = false;
 return false;
 }else{
 $('#emailcheck').hide();
 }
 if((email_val.length < 3 ) || (email_val.length > 30 ) ){
 $('#emailcheck').show();
 $('#emailcheck').html("**Username length must be between 3 and 10");
 $('#emailcheck').focus();
 $('#emailcheck').css("color","red");
 email_err = false;
 return false;
 }else{
 $('#emailcheck').hide();
 }
 }
 $('#password').keyup(function(){
 password_check();
 });
 function password_check(){
 var passwrdstr = $('#password').val();
 if(passwrdstr.length == ''){
 $('#passcheck').show();
 $('#passcheck').html("**Please Fill the password");
 $('#passcheck').focus();
 $('#passcheck').css("color","red");
 pass_err = false;
 return false;
 }else{
 $('#passcheck').hide();
 } 
 if((passwrdstr.length < 3 ) || (passwrdstr.length > 10 ) ){
 $('#passcheck').show();
 $('#passcheck').html("**password length must be between 3 and 10");
 $('#passcheck').focus();
 $('#passcheck').css("color","red");
 pass_err = false;
 return false;
 }else{
 $('#passcheck').hide();
 }
 }
 $('#conpassword').keyup(function(){
 con_passwrd();
 });
 function con_passwrd(){
 var conpass = $('#conpassword').val();
 var passwrdstr = $('#password').val();
 if(passwrdstr != conpass){
 $('#conpasscheck').show();
 $('#conpasscheck').html("** Password are not Matching");
 $('#conpasscheck').focus();
 $('#conpasscheck').css("color","red");
 conpass_err = false;
 return false;
 }else{
 $('#conpasscheck').hide();
 } 
 }
 $('#submitbtn').click(function(){
  email_err = true;
  pass_err = true;
  conpass_err = true;
  email_check();
  password_check();
  con_passwrd();
  if((email_err == true ) && (pass_err == true) && (conpass_err == true)  ){
   return true;
  }else{
   return false;
  }
 });
});
 </script>
-->
</html>