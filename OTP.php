<?php session_start(); ?>
<?php include "db.php"; ?>


<?php
// session_start();
// if(isset($_POST['save']))
// {
// $rno=$_SESSION['otp'];
// $urno=$_POST['otpvalue'];
// if(!strcmp($rno,$urno))
// {
// $firstname=$_SESSION['firstname'];
// $email=$_SESSION['email'];
// $phone=$_SESSION['phone'];
// //For admin if he want to know who is register
// $to="reshmasamy21@gmail.com";
// $subject = "Thank you!";
// $txt = "Some one show your demo Email id: ".$email." Mobile number : ".$phone."";
// $headers = "From: 07.ramyar@gmail.com" . "\r\n" .
// "CC: thennarasan1988.com";
// mail($to,$subject,$txt,$headers);
// echo "<p>Thank you for show our Demo.</p>";
// //For admin if he want to know who is register


// // header( "Location:Member-Login.php" );

// }
// else{
// echo "<p>Invalid OTP</p>";
// }
// }
// //resend OTP
// if(isset($_POST['resend']))
// {
// $message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
// $rno=$_SESSION['otp'];
// $to=$_SESSION['email'];
// $subject = "OTP";

// $txt = "OTP: ".$rno."";
// $headers = "From: 07.ramyar@gmail.com" . "\r\n" .
// "CC: thennarasan1988@gmail.com";
// mail($to,$subject,$txt,$headers);
// $message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
// }
?>

<?php

    if(isset($_REQUEST['verify'])){  

        $email    = $_SESSION['email'];
        $otp = $_REQUEST['otp']; 
    
        $query = "SELECT * FROM register WHERE email = '{$email}' ";
        $select_register_query = mysqli_query($connection, $query);
        
        if(!$select_register_query){
            
            die("Query Failed" . mysqli_error($connection));
            
        }
          
          while($row = mysqli_fetch_array($select_register_query)){
              
               $db_id = $row['id'];
               $db_title = $row['title'];
               $db_firstname = $row['firstname'];
               $db_lastname = $row['lastname'];
               $db_image = $row['image'];
               $db_phone = $row['phone'];
               $db_email = $row['email'];
               $db_otp = $row['otp'];
               $db_instagram = $row['instagram'];
               $db_facebook = $row['facebook'];
               $db_twitter = $row['twitter'];
               $db_youtube = $row['youtube'];         
              
          }

          if($otp === $db_otp){
            
             $_SESSION['email'] = $db_email;
             $_SESSION['otp'] = $db_otp;

          header("Location:Member-Login.php");
           
         
        }else{
            $message_otp = "Incorrect OTP";   
              
        }
        
        
        }
?>  


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Register Member</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Member-Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Member Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-3ee6"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Member-Login.php" style="padding: 10px 20px;">Member Login</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 10px 20px;">Member Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-357b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="text-center">Enter OTP</h3>
            
           <p class="font-weight-light text-muted mb-0">

            Enter the OTP that we sent to your email.

           </p>
            
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="email-cd60" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter your OTP" id="" name="otp" value="<?php echo isset($_REQUEST["otp"]) ? $_REQUEST["otp"] : ''; ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                  <h6 style="color:#ff0000"><?php echo $message_otp ?></h6>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Next</a>
                  <input type="submit" name="verify" value="submit" class="u-form-control-hidden">
                </div>

            <!--  <p class="u-align-center u-form-group u-form-submit"><button class="w3-btn w3-green w3-round" style="width:50%;height:40px" name="resend">Resend</button></p> -->

                <input type="hidden" value="" name="recaptchaResponse">
              </form>

             <div><?php if(isset($message)) { echo $message; } ?></div>

            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>
  </body>
</html>
