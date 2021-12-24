<?php session_start(); ?>
<?php include "db.php"; ?>
<?php 

if(isset($_POST['submit'])){

require 'PHPMailer/PHPMailerAutoload.php';
require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');

$mail = new PHPMailer();

$email_from='CGBSTech2021@gmail.com';

$link = "http://localhost:8889/demo/Famous-Rapper-Network/email_verification.php";
$rndno=rand(100000, 999999);
// $mail->SMTPDebug = 3;
$headers = "Content-Type: text/html; charset=UTF-8";    
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

$mail->IsSMTP();
$mail->CharSet="SET NAMES UTF8";
$mail->SMTPDebug  = 0;
$mail->CharSet="utf8";
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls';



         $firstname=  $_POST['firstname'];
         $lastname=  $_POST['lastname'];
         $fullname=  $_POST['fullname'];
         $image=  $_POST['image'];
         $phone=  $_POST['phone'];
         $role=  $_POST['role'];
         $email    = $_POST['email'];    
         $password = $_POST['password'];
         $confirm_password = $_POST['confirm_password'];
         $otp = $_POST['otp'];
         $otp=$rndno;
         $instagram =$_POST['instagram'];
         $facebook =$_POST['facebook'];
         $twitter =$_POST['twitter'];
         $youtube =$_POST['youtube'];
         $Location =$_POST['Location'];
         $email_verification_link = $_POST['email_verification_link'];

         
         $error = 0;

      if(!empty($firstname) && !empty($lastname) && !empty($fullname) && !empty($phone) && !empty($email) && !empty($password) && !empty($confirm_password)){
          
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $confirm_password = mysqli_real_escape_string($connection,$_POST['confirm_password']);
      $password = md5($password);              
      $confirm_password = md5($confirm_password);
                   
     
      if(preg_match('/^[\p{L} ]+$/u', $firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $lastname)) {
            
            
        $uppercase  = preg_match('@[A-Z]@', $password);
        $lowercase  = preg_match('@[a-z]@', $password);
        $number     = preg_match('@[0-9]@', $password);
        $character  = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $password);

        if(strlen($password) >= 8) {
            
        if($password == $confirm_password){
        
        if(preg_match("/^[0-9]{10}$/", $phone)) {   



        if(!$error){
        $check_query= "SELECT * FROM register WHERE email = '{$email}' ";
        $check_register_query = mysqli_query($connection,$check_query);

        if(mysqli_num_rows($check_register_query) > 0){

          $row = mysqli_fetch_assoc($check_register_query);

            if($email==$row['email'])
            {
                $message_email= "Email already exists";
            }
        }else {

        
          
         $_SESSION['status'] = "Registration Was Successful Please Sign In"; 

          $_SESSION['otp'] = $otp;
          $_SESSION['email'] = $email;
          $_SESSION['email_verification_link'] = $link;

          $mail->Username   = "CGBSTech2021@gmail.com"; //or domain credentials on google mail
          $mail->Password   = "cgbs@2021";
          $mail->SetFrom('CGBSTech2021@gmail.com');
          $mail->AddAddress($email, $firstname);
          $mail->Subject = "Email Verification";
          $mail->Body = 'Here is the verification link'.' '.$link; //emailbody
          
          if(!$mail->send()) 
            {
                mysqli_close();
                echo "<script>alert('Error: " . $mail->ErrorInfo."');</script>";
            } 
            else 
            {
                mysqli_close();
                echo "<script>alert('Register Done, Please check your mail');</script>";

        $query = "INSERT INTO register (firstname,lastname,fullname,image,phone,role,email,email_verification_link,password,confirm_password,otp,instagram,facebook,twitter,youtube,Location) ";
        $query .= "VALUES ('{$firstname}','{$lastname}','{$fullname}','profile.png','{$phone}','User','{$email}','{$link}','{$password}','{$confirm_password}','{$rndno}','https://instagram.com/','https://facebook.com/','https://twitter.com/','https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp','Srimushnam') ";
             
        $register_query = mysqli_query($connection,$query);
            
            move_uploaded_file($image_tempname,"images/$image");
      
        if(!$register_query) {
             
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
        }

        }

 }
    }
          }else{
              $message_phone = "Invalid Phone No";
            
        }
            
          }else{
            
            $message_cpassword = "password mismatch";
        }
       
          }else{
              $message_strnpassword = "password contain atleast 8 characters";
              
       }
            
          }else{
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }
          else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }
          
          }else{
        $message = "Fields cannot be Empty";
       }  
         
        }else {         
              $message = ""; 
       }
    
  ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Register Member</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Register-Member.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <!-- password Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   
   
    <link rel="stylesheet" href="assets/css/style.css">

<!-- Profile Icon -->
 <link rel="stylesheet" href="assets/css/shared/style.css">
 <!-- <link rel="stylesheet" href="style.css"> -->

<style>

  img {
    border-radius: 50%;
  }

.head-btn1 {
    margin-right: 5px;
}
.btn {
    background: #fb246a;
    -moz-user-select: none;
    text-transform: capitalize;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    line-height: 0;
    margin-bottom: 0;
    padding: 27px 44px;
    border-radius: 0px;
    margin: 10px;
    cursor: pointer;
    transition: color 0.4s linear;
    position: relative;
    z-index: 1;
    border: 0;
    overflow: hidden;
    margin: 0;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.head-btn2 {
    background: none;
    border: 1px solid #fb246a;
    color: #fb246a;
}

</style>


    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Site2",
    "logo": "images/default-logo.png",
    "sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Register Member">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-3ee6"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.php" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View_All_Artists.php" style="padding: 10px 20px;">View All Artists</a></li>

<?php

    if($_SESSION['role'] == "Admin"){

?>

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="List_All_Users.php" style="padding: 10px 20px;">View All Users</a>
</li>

<?php } ?>

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li>

  <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 

<li class="u-nav-item">

  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base btn head-btn2" href="Member-Login.php">Login</a>

  <!-- <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Member-Login.php" style="padding: 10px 20px;">Member Login</a> -->

</li>


          <?php 
                      
              }else{
                      
            ?> 


        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
                      <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <img class="" style="width:40px" src ='images/<?php echo $_SESSION['image'] ?>' alt=""></a>
         <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">

          <img class="" style="width:60px" src ='images/<?php echo $_SESSION['image'] ?>' alt="">

                      <p class="mb-1 mt-3 font-weight-semibold" style="color:darkblue;">
                          <?php
                          
                          if(isset($_SESSION['firstname'])){
                              
                            echo $_SESSION['firstname']; 
                             
                          }
                          
                          ?>
                          
                        </p>
                              
                </div>
                <a class="dropdown-item" href="profile.php">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                 
                <a class="dropdown-item"href="Logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              
              </div>
          </li>

<?php 
              
     }
              
    ?> 

</ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="View_All_Artists.php" style="padding: 10px 20px;">View All Artists</a></li>

<?php

    if($_SESSION['role'] == "Admin"){

?>

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="List_All_Users.php" style="padding: 10px 20px;">View All Users</a></li>

<?php 

   } 

?>

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a></li>


  <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 


<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 10px 20px;">Login</a>
</li>

    <?php 
                
        }
                
      ?> 

</ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-gradient u-section-1" id="sec-6065">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-radius-50 u-white u-form-1">
          <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true">
            
             <div class="u-form-group u-form-name u-form-group">
              <h6 class="text-center" style="color:#00b300"><?php echo $error_mail; ?></h6>
               <h6 class="text-center" style="color:#00b300"><?php echo $message; ?></h6>
            </div>

            <div class="u-form-group u-form-name u-form-group-1">
              <label for="name-cd60" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Enter your First Name" id="name-cd60" name="firstname" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>" class="u-border-1 u-border-grey-5 u-input u-input-rectangle u-text-black" required="">
              <h6 class="text-center" style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="text-0253" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Enter your Last Name" id="text-0253" name="lastname" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>" class="u-border-1 u-border-grey-5 u-input u-input-rectangle u-text-black">
              <h6 class="text-center" style="color:#ff0000"><?php echo $message_Lastname; ?></h6>
            </div>
             <div class="u-form-group u-form-group-3">
              <label for="text-0253" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Enter your Full Name" id="text-0253" name="fullname" value="<?php echo isset($_POST["fullname"]) ? $_POST["fullname"] : ''; ?>" class="u-border-1 u-border-grey-5 u-input u-input-rectangle u-text-black">
              <h6 class="text-center" style="color:#ff0000"><?php echo $message_fullname; ?></h6>
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-cd60" class="u-form-control-hidden u-label"></label>
              <input type="email" placeholder="Enter a valid email address" id="email-cd60" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" class="u-border-1 u-border-grey-5 u-input u-input-rectangle u-text-black" required="">
              <h6 class="text-center" style="color:#ff0000"><?php echo $message_email; ?></h6>
            </div>
            <div class="u-form-group u-form-group-5">
              <label for="text-871f" class="u-form-control-hidden u-label"></label>
              <input type="text" id="text-871f" name="phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>" class="u-border-1 u-border-grey-5 u-input u-input-rectangle u-text-black" placeholder="Enter Your Mobile Number">
              <h6 class="text-center" style="color:#ff0000"><?php echo $message_phone; ?></h6>
            </div>
            <div class="u-form-group u-form-group-6">
              <label for="text-03eb" class="u-form-control-hidden u-label"></label>
              <input type="password" placeholder="Enter New Passord" id="id_password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" class="u-border-1 u-border-grey-5 u-input u-input-rectangle u-text-black">
              <span class="far fa-eye" id="togglePassword" style="margin-left: 430px; cursor: pointer;"></span>
              <h6 class="text-center" style="color:#ff0000"><?php echo $message_strnpassword; ?></h6>
            </div>
            <div class="u-form-group u-form-group-7">
              <label for="text-a7ff" class="u-form-control-hidden u-label"></label>
              <input type="password" placeholder="Confirm New Password" id="c_password" name="confirm_password" value="<?php echo isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : ''; ?>" class="u-border-1 u-border-grey-5 u-input u-input-rectangle u-text-black">
              <h6 class="text-center" style="color:#ff0000"><?php echo $message_cpassword; ?></h6>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="" class="btn head-btn2">Register<br>
              </a>
              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your Registraion is Successful</div>
            <div class="u-form-send-error u-form-send-message">Registraion Unsuccesful.</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0ecf"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0ecf"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d80a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d80a"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5d38"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5d38"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-ff43"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-12fb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-12fb"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a27c"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a27c"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7849"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7849"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fb82"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-fb82"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>
  </body>
</html>

<script>

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script>
