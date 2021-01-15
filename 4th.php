<?php
  
         $username = "root";
    $password = "";
    $server = "localhost" ;
    $database = "project_database";

    $connection = mysqli_connect($server, $username, $password ,$database );
    // another method to connect data base is 
    // remove database argument in mysqli_connect() function 
    // pass databse in function mysqli_select_db()

    // $db = mysqli_select_db($connection,$database);

     if ($connection->connect_errno){
       echo "Failed to connect to MySQL: " . $connection -> connect_error;
        exit();
     }
     else{
        ?>
        <script>
           console.log("SEXFUL");
        </script>
        <?php
     }

     ?>
 
     <?php
     if (isset($_POST['placeorder'])){
      $first_name = $_POST['firstname'];
      $last_name = $_POST['lastname'];
      $email = $_POST['email'];
      $phone_no = $_POST['phoneno'];
      $second_phone_no = $_POST['secphoneno'];
      $city = $_POST['city'];
      $province = $_POST['province'];
      $address = $_POST['address'];

      $insert_query = "INSERT INTO customerdata(ID , First_Name , Last_Name , Email , City , Province ,Address ,Phone1 , Phone2)  values ('', '$first_name' , '$last_name' , '$email' , '$city' , '$province' , '$address' , '$phone_no' , '$second_phone_no')";
        // $res= mysqli_query($connection , $insert_query);


    if ($connection->query($insert_query) === TRUE) {
        echo "Table MyGuests created successfully";
        } else {
         echo "Error creating table: " . $connection->error;
        }
     }
    //  header('Location: mainPage.php');
     $connection->close();

?>




<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS styleSheet -->
    <link rel="stylesheet" href="4th.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Form Submission
    </title>
</head>
<body >
    
      <!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Brand -->
    
    <a class="navbar-brand " href="#">ShopUs</a>
   
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
          <a class="dropdown-item" href="#">Fall 2020</a>
          <a class="dropdown-item" href="#">Linen</a>
          <a class="dropdown-item" href="#">Sale 2020</a>
        </div>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Men</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Women</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Children</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Handbags</a>
        </li>

      </ul>

        <!-- Right Items -->
        <ul class="navbar-nav collapse navbar-collapse right-items row" id="navbarSupportedContent">
          <li class="nav-item">
            <a class="nav-link" href="#">SignUp<i class="fas fa-user-plus ml-2"></i></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Login<i class="fas fa-user ml-2"></i></a>
          </li>
      
      </ul>
    </div>
  </div>
</nav>


<!-- FORM  -->






<form action="" id="basic_form" method="post">
    <div class="container">
        <div class="form-row">
            
            <div class="col-md-4 my-2  ">
                <div class="display-4 bill mb-2">
                BILLING 
                 </div> 
                <label for="validationDefault01">First name</label>
                <input type="text" class="form-control form_first_name" name="firstname" id="validationDefault01" placeholder="First Name" value="Fatima" required>
                 <div class="error"id="error_first_name">Error</div>
                <div class="w-100">
        
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" class="form-control" name="email" id="validationDefaultUsername form_email" placeholder="Email Address" aria-describedby="inputGroupPrepend2" required>
                        
                      </div>
                      <div class="error" id="error_email error">error</div>
                <div class="w-100">
         
                    <label for="validationDefault04">Province</label>
                    <!-- <input type="text" class="form-control" id="validationDefault04 form_province" placeholder="State" required> -->
                      <select class="browser-default custom-select" name="province">
                        <option value="">Federal</option>
                        <option value="">Punjab</option>
                        <option value="">Sindh</option>
                        <option value="">KPK</option>
                        <option value="">Balochistan</option>
                      </select>
                    <div class="error" id="error_province">error</div>
                 </div>
                <div class="w-100">
                    <label for="validationDefault03">Phone no.</label>
                    <input type="text" class="form-control form_phone_no" name="phoneno" id="validationDefault03 " placeholder="+923xxxxxxxxx" value="+92" required>
                    <div class="error" id="error_phone_no">error</div>
                </div>
               
            
                </div>
            </div>
            <div class="col-md-4 my-2 ">
                <div class="invisible display-4  mb-2">
                   ADDRESS
                 </div> 
                <label for="validationDefault02">Last name</label>
                <input type="text" class="form-control form_last_name" name="lastname" id="validationDefault02 " placeholder="Last name" value="Naeem" required>
                 <div class="error" id="error_last_name">error</div>
                <label for="validationDefault03">City</label>
                <!-- <input type="text" class="form-control" id="validationDefault03 form_city" placeholder="City" required> -->

              <select class="browser-default custom-select" name="city" >
                <option value="" disabled selected>Select The City</option>
                <option value="Islamabad">Islamabad</option>
                <option value="" disabled>Punjab Cities</option>
                <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                <option value="Ahmadpur East">Ahmadpur East</option>
                <option value="Ali Khan Abad">Ali Khan Abad</option>
                <option value="Alipur">Alipur</option>
                <option value="Arifwala">Arifwala</option>
                <option value="Attock">Attock</option>
                <option value="Bhera">Bhera</option>
                <option value="Bhalwal">Bhalwal</option>
                <option value="Bahawalnagar">Bahawalnagar</option>
                <option value="Bahawalpur">Bahawalpur</option>
                <option value="Bhakkar">Bhakkar</option>
                <option value="Burewala">Burewala</option>
                <option value="Chillianwala">Chillianwala</option>
                <option value="Chakwal">Chakwal</option>
                <option value="Chichawatni">Chichawatni</option>
                <option value="Chiniot">Chiniot</option>
                <option value="Chishtian">Chishtian</option>
                <option value="Daska">Daska</option>
                <option value="Darya Khan">Darya Khan</option>
                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                <option value="Dhaular">Dhaular</option>
                <option value="Dina">Dina</option>
                <option value="Dinga">Dinga</option>
                <option value="Dipalpur">Dipalpur</option>
                <option value="Faisalabad">Faisalabad</option>
                <option value="Fateh Jhang">Fateh Jang</option>
                <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                <option value="Gojra">Gojra</option>
                <option value="Gujranwala">Gujranwala</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Gujar Khan">Gujar Khan</option>
                <option value="Hafizabad">Hafizabad</option>
                <option value="Haroonabad">Haroonabad</option>
                <option value="Hasilpur">Hasilpur</option>
                <option value="Haveli">Haveli</option>
                <option value="Lakha">Lakha</option>
                <option value="Jalalpur">Jalalpur</option>
                <option value="Jattan">Jattan</option>
                <option value="Jampur">Jampur</option>
                <option value="Jaranwala">Jaranwala</option>
                <option value="Jhang">Jhang</option>
                <option value="Jhelum">Jhelum</option>
                <option value="Kalabagh">Kalabagh</option>
                <option value="Karor Lal Esan">Karor Lal Esan</option>
                <option value="Kasur">Kasur</option>
                <option value="Kamalia">Kamalia</option>
                <option value="Kamoke">Kamoke</option>
                <option value="Khanewal">Khanewal</option>
                <option value="Khanpur">Khanpur</option>
                <option value="Kharian">Kharian</option>
                <option value="Khushab">Khushab</option>
                <option value="Kot Adu">Kot Adu</option>
                <option value="Jauharabad">Jauharabad</option>
                <option value="Lahore">Lahore</option>
                <option value="Lalamusa">Lalamusa</option>
                <option value="Layyah">Layyah</option>
                <option value="Liaquat Pur">Liaquat Pur</option>
                <option value="Lodhran">Lodhran</option>
                <option value="Malakwal">Malakwal</option>
                <option value="Mamoori">Mamoori</option>
                <option value="Mailsi">Mailsi</option>
                <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                <option value="mian Channu">Mian Channu</option>
                <option value="Mianwali">Mianwali</option>
                <option value="Multan">Multan</option>
                <option value="Murree">Murree</option>
                <option value="Muridke">Muridke</option>
                <option value="Mianwali Bangla">Mianwali Bangla</option>
                <option value="Muzaffargarh">Muzaffargarh</option>
                <option value="Narowal">Narowal</option>
                <option value="Okara">Okara</option>
                <option value="Renala Khurd">Renala Khurd</option>
                <option value="Pakpattan">Pakpattan</option>
                <option value="Pattoki">Pattoki</option>
                <option value="Pir Mahal">Pir Mahal</option>
                <option value="Qaimpur">Qaimpur</option>
                <option value="Qila Didar Singh">Qila Didar Singh</option>
                <option value="Rabwah">Rabwah</option>
                <option value="Raiwind">Raiwind</option>
                <option value="Rajanpur">Rajanpur</option>
                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                <option value="Rawalpindi">Rawalpindi</option>
                <option value="Sadiqabad">Sadiqabad</option>
                <option value="Safdarabad">Safdarabad</option>
                <option value="Sahiwal">Sahiwal</option>
                <option value="Sangla Hill">Sangla Hill</option>
                <option value="Sarai Alamgir">Sarai Alamgir</option>
                <option value="Sargodha">Sargodha</option>
                <option value="Shakargarh">Shakargarh</option>
                <option value="Sheikhupura">Sheikhupura</option>
                <option value="Sialkot">Sialkot</option>
                <option value="Sohawa">Sohawa</option>
                <option value="Soianwala">Soianwala</option>
                <option value="Siranwali">Siranwali</option>
                <option value="Talagang">Talagang</option>
                <option value="Taxila">Taxila</option>
                <option value="Toba Tek  Singh">Toba Tek Singh</option>
                <option value="Vehari">Vehari</option>
                <option value="Wah Cantonment">Wah Cantonment</option>
                <option value="Wazirabad">Wazirabad</option>
                <option value="" disabled>Sindh Cities</option>
                <option value="Badin">Badin</option>
                <option value="Bhirkan">Bhirkan</option>
                <option value="Rajo Khanani">Rajo Khanani</option>
                <option value="Chak">Chak</option>
                <option value="Dadu">Dadu</option>
                <option value="Digri">Digri</option>
                <option value="Diplo">Diplo</option>
                <option value="Dokri">Dokri</option>
                <option value="Ghotki">Ghotki</option>
                <option value="Haala">Haala</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Islamkot">Islamkot</option>
                <option value="Jacobabad">Jacobabad</option>
                <option value="Jamshoro">Jamshoro</option>
                <option value="Jungshahi">Jungshahi</option>
                <option value="Kandhkot">Kandhkot</option>
                <option value="Kandiaro">Kandiaro</option>
                <option value="Karachi">Karachi</option>
                <option value="Kashmore">Kashmore</option>
                <option value="Keti Bandar">Keti Bandar</option>
                <option value="Khairpur">Khairpur</option>
                <option value="Kotri">Kotri</option>
                <option value="Larkana">Larkana</option>
                <option value="Matiari">Matiari</option>
                <option value="Mehar">Mehar</option>
                <option value="Mirpur Khas">Mirpur Khas</option>
                <option value="Mithani">Mithani</option>
                <option value="Mithi">Mithi</option>
                <option value="Mehrabpur">Mehrabpur</option>
                <option value="Moro">Moro</option>
                <option value="Nagarparkar">Nagarparkar</option>
                <option value="Naudero">Naudero</option>
                <option value="Naushahro Feroze">Naushahro Feroze</option>
                <option value="Naushara">Naushara</option>
                <option value="Nawabshah">Nawabshah</option>
                <option value="Nazimabad">Nazimabad</option>
                <option value="Qambar">Qambar</option>
                <option value="Qasimabad">Qasimabad</option>
                <option value="Ranipur">Ranipur</option>
                <option value="Ratodero">Ratodero</option>
                <option value="Rohri">Rohri</option>
                <option value="Sakrand">Sakrand</option>
                <option value="Sanghar">Sanghar</option>
                <option value="Shahbandar">Shahbandar</option>
                <option value="Shahdadkot">Shahdadkot</option>
                <option value="Shahdadpur">Shahdadpur</option>
                <option value="Shahpur Chakar">Shahpur Chakar</option>
                <option value="Shikarpaur">Shikarpaur</option>
                <option value="Sukkur">Sukkur</option>
                <option value="Tangwani">Tangwani</option>
                <option value="Tando Adam Khan">Tando Adam Khan</option>
                <option value="Tando Allahyar">Tando Allahyar</option>
                <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                <option value="Thatta">Thatta</option>
                <option value="Umerkot">Umerkot</option>
                <option value="Warah">Warah</option>
                <option value="" disabled>Khyber Cities</option>
                <option value="Abbottabad">Abbottabad</option>
                <option value="Adezai">Adezai</option>
                <option value="Alpuri">Alpuri</option>
                <option value="Akora Khattak">Akora Khattak</option>
                <option value="Ayubia">Ayubia</option>
                <option value="Banda Daud Shah">Banda Daud Shah</option>
                <option value="Bannu">Bannu</option>
                <option value="Batkhela">Batkhela</option>
                <option value="Battagram">Battagram</option>
                <option value="Birote">Birote</option>
                <option value="Chakdara">Chakdara</option>
                <option value="Charsadda">Charsadda</option>
                <option value="Chitral">Chitral</option>
                <option value="Daggar">Daggar</option>
                <option value="Dargai">Dargai</option>
                <option value="Darya Khan">Darya Khan</option>
                <option value="dera Ismail Khan">Dera Ismail Khan</option>
                <option value="Doaba">Doaba</option>
                <option value="Dir">Dir</option>
                <option value="Drosh">Drosh</option>
                <option value="Hangu">Hangu</option>
                <option value="Haripur">Haripur</option>
                <option value="Karak">Karak</option>
                <option value="Kohat">Kohat</option>
                <option value="Kulachi">Kulachi</option>
                <option value="Lakki Marwat">Lakki Marwat</option>
                <option value="Latamber">Latamber</option>
                <option value="Madyan">Madyan</option>
                <option value="Mansehra">Mansehra</option>
                <option value="Mardan">Mardan</option>
                <option value="Mastuj">Mastuj</option>
                <option value="Mingora">Mingora</option>
                <option value="Nowshera">Nowshera</option>
                <option value="Paharpur">Paharpur</option>
                <option value="Pabbi">Pabbi</option>
                <option value="Peshawar">Peshawar</option>
                <option value="Saidu Sharif">Saidu Sharif</option>
                <option value="Shorkot">Shorkot</option>
                <option value="Shewa Adda">Shewa Adda</option>
                <option value="Swabi">Swabi</option>
                <option value="Swat">Swat</option>
                <option value="Tangi">Tangi</option>
                <option value="Tank">Tank</option>
                <option value="Thall">Thall</option>
                <option value="Timergara">Timergara</option>
                <option value="Tordher">Tordher</option>
                <option value="" disabled>Balochistan Cities</option>
                <option value="Awaran">Awaran</option>
                <option value="Barkhan">Barkhan</option>
                <option value="Chagai">Chagai</option>
                <option value="Dera Bugti">Dera Bugti</option>
                <option value="Gwadar">Gwadar</option>
                <option value="Harnai">Harnai</option>
                <option value="Jafarabad">Jafarabad</option>
                <option value="Jhal Magsi">Jhal Magsi</option>
                <option value="Kacchi">Kacchi</option>
                <option value="Kalat">Kalat</option>
                <option value="Kech">Kech</option>
                <option value="Kharan">Kharan</option>
                <option value="Khuzdar">Khuzdar</option>
                <option value="Killa Abdullah">Killa Abdullah</option>
                <option value="Killa Saifullah">Killa Saifullah</option>
                <option value="Kohlu">Kohlu</option>
                <option value="Lasbela">Lasbela</option>
                <option value="Lehri">Lehri</option>
                <option value="Loralai">Loralai</option>
                <option value="Mastung">Mastung</option>
                <option value="Musakhel">Musakhel</option>
                <option value="Nasirabad">Nasirabad</option>
                <option value="Nushki">Nushki</option>
                <option value="Panjgur">Panjgur</option>
                <option value="Pishin valley">Pishin Valley</option>
                <option value="Quetta">Quetta</option>
                <option value="Sherani">Sherani</option>
                <option value="Sibi">Sibi</option>
                <option value="Sohbatpur">Sohbatpur</option>
                <option value="Washuk">Washuk</option>
                <option value="Zhob">Zhob</option>
                <option value="Ziarat">Ziarat</option>
              </select>
                 <div class="error" id="error_city">erro</div>
                <label for="validationDefault03">Address</label>
                <input type="text" class="form-control form_address" name="address" id="validationDefault03 " placeholder="Address" required>
                <div class="error" id="error_address">error</div>
                <div class="w-100">
                    <label for="validationDefault03">Alternate Mobile</label>
                    <input type="text" class="form-control form_alternate_mobile" name="secphoneno" id="validationDefault03 " value="+92" placeholder="Alternate Mobile" >
                    <div class="error" id="error_alternate_ph_no">error</div>
                </div>
            
               
            </div>
            <div class="col-md-4 my-2 cart-container ">
                <div class="display-4 cart-heading">
                        YOUR CART
                </div>
                <!-- PRODUCT DETAILS -->
                <div class="products-in-cart my-4">
                     
                    <span class="product-name ml-2">
                        BOOM BOX SHOE             
                    </span>
                    <span class="product-price ">
                        $1150.00
                    </span>
                    <div class="product-quantity ml-2">
                        2 pieces

                <!-- TOTAL BUTTON -->
                    </div>
                      <div class="total mx-2">
                     <span class="total-heading ml-2">
                         Total Amount
                     </span>
                     <span class="total-price">
                         $1500.00
                     </span>
                     <div>
                         <button class="place-order-btn" name="placeorder">
                             PLACE ORDER
                         </button>
                     </div>

                 </div>
                </div>

               
            </div>
               
        </div>
        
    <hr>

        <div class="form-row">
            <div class="col-8 my-2">
                <label for="exampleFormControlTextarea1">Any Optional Comments</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type Here..."></textarea>
            </div>
            <div class="col-4 ">

            </div>
        </div>

        <hr>
        <div class="form-row">
            <div class="col-8">
                    <div>PAYMENT METHOD</div>
            
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">MASTERCARD</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">HBL</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">EASYPAISA</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">CASH ON DELIVERY</label>
                    </div>
            </div>
            <div class="col-4">

               <input type="text" class="form-control" name="identity" placeholder="REDEEM CODE"   autocomplete="off">
               <div>
                 <button class="btn btn-success redeem-button my-2">CODE REDEEM</button>
               </div>

            </div>
        </div>
        <hr>
    </div>



</form>
    



<!-- Footer -->
<footer>
  <div class="container footer-container">
    <div class="row">
      <div class="col-3">
          Exclusive Services
          
            <li class="footer-items" >
              <i class="fas fa-gift"></i>
              <a class="footer-links" href="#">Our Services

              </a>
            </li>
             <li class="footer-items" >
              <i class="fas fa-gift"></i>
              <a class="footer-links" href="#"> Gift Wrapping

              </a>
            </li>
             <li class="footer-items" >
              <i class="fas fa-shipping-fast"></i>
              <a class="footer-links" href="#">Shipping and returns

              </a>
            </li>
          
        
      </div>
      <div class="col-3 ">
        NEED HELP?
         <li class="footer-items" >
              <i class="fas fa-phone-square"></i>
              <a class="footer-links" href="#">Contact Us

              </a>
            </li>
             <li class="footer-items" >
              <i class="far fa-credit-card"></i>
              <a class="footer-links" href="#"> Payment Options

              </a>
            </li>
             <li class="footer-items" >
             <i class="fas fa-question-circle"></i>
              <a class="footer-links" href="#">FAQs

              </a>
            </li>
             <li class="footer-items" >
              <i class="fas fa-exchange-alt"></i>
              <a class="footer-links" href="#">Return and Exchange

              </a>
            
      </div>
      <div class="col-3 ">
        
        FIND US ON
        <li class="footer-items" >
              <i class="fab fa-facebook-square"></i>
              <a class="footer-links" href="https://web.facebook.com/?_rdc=1&_rdr">Facebook
              </a>
            </li>
             <li class="footer-items" >
              <i class="fab fa-instagram"></i>
              <a class="footer-links" href="#"> Instagram

              </a>
            </li>
             <li class="footer-items" >
             <i class="fab fa-twitter-square"></i>
              <a class="footer-links" href="#">Twitter

              </a>
            </li>
             <li class="footer-items" >
              <i class="fab fa-snapchat-square"></i>
              <a class="footer-links" href="#">Snapchat
              </a>
      </div>
      <div class="col-3  ">
        NEWSLETTER
        <li class="footer-items">
          
          <br>
          Be the First to know about,
          <br>
          exciting new designs, and,
          <br>
          offers 
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Enter Email Address" aria-label="Search">
            <button class="footer-email-button" type="submit">
              Search

            </button>
          </form>
      </li>
       
        
      </div>
    </div>
  </div>
</footer>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="lib/jQuery.js"></script>
<script src="4th.js"></script>


</body>
</html>