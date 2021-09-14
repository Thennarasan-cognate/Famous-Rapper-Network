<?php session_start(); ?>
<?php include "db.php"; ?>

<?php

   if(isset($_REQUEST['email'])){

     $email =  $_REQUEST['email'];  
           
     $query="SELECT * FROM register WHERE email = '{$email}' ";
     $select_register_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_register_profile)){

            $id=$row['id'];
            $title=$row['title'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $image=$row['image'];
            $phone=$row['phone'];
            $email=$row['email'];
            $password=$row['password'];
            $confirm_password=$row['confirm_password'];
            $instagram=$row['instagram'];
            $facebook=$row['facebook'];
            $twitter=$row['twitter'];
            $youtube=$row['youtube'];
            
           }
         }
    
    if(isset($_POST['confirm'])){
             
         $password = $_POST['password'];
         $confirm_password = $_POST['confirm_password'];

     if(!empty($password) && !empty($confirm_password)){

      if($password == $confirm_password){
          
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $confirm_password = mysqli_real_escape_string($connection,$_POST['confirm_password']);
      $password = md5($password);              
      $confirm_password = md5($confirm_password);

      $query="UPDATE register SET password='{$password}', confirm_password='{$confirm_password}' WHERE email= 'Ramya1999@gmail.com' ";

      $register_query = mysqli_query($connection,$query);

      if(!$register_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }

        header("Location:Member-Login.php"); 

        
        }else{

          $message_cpassword = "password mismatch";

        }

     }else{

        $message = "Fields cannot be Empty";

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
    <title>Member Login</title>
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
            <h3 class="text-center">Create New Password</h3>
            
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">

                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Enter your New Password" id="id_password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                  <span class="far fa-eye" id="togglePassword" style="margin-left: 350px; cursor: pointer;"></span>
                  <!-- <h6 class="text-center" style="color:#ff0000"><?php echo $message_password; ?></h6> -->
                </div>

                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Confirm Password" id="id_password" name="confirm_password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                  <h6 class="text-center" style="color:#ff0000"><?php echo $message_cpassword; ?></h6>
                </div>

                <div class="u-align-center u-form-group u-form-submit">
                  <a href="" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Submit</a>
                  <input type="submit" name="confirm" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
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