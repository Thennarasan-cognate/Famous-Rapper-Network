<?php session_start(); ?>
<?php include "db.php"; ?>

<?php
    
    if(isset($_REQUEST['submit'])){
         
        $email    = $_REQUEST['email'];
        $password = $_REQUEST['password'];
                        
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $password = md5($password);  
    
        $query = "SELECT * FROM register WHERE email = '{$email}' ";
        $select_register_query = mysqli_query($connection, $query);
        
        if(!$select_register_query){
            
            die("Query Failed" . mysqli_error($connection));
            
        }
          
          while($row = mysqli_fetch_array($select_register_query)){
              
               $db_id = $row['id'];
               $db_phone = $row['phone'];
               $db_role = $row['role'];
               $db_premium = $row['premium'];
               $db_email = $row['email'];
               $db_email_status = $row['email_status'];
               $db_password = $row['password'];
               $db_firstname = $row['firstname'];
               $db_lastname = $row['lastname'];
               $db_fullname = $row['fullname'];
               $db_image = $row['image'];
              
          }
        
        
        if($email === $db_email){
        if($password === $db_password){
         if($db_email_status === 'Verified'){
          
             $_SESSION['id'] = $db_id;
             $_SESSION['email'] = $db_email;
             $_SESSION['email_status'] = $db_email_status;
             $_SESSION['firstname'] = $db_firstname;
             $_SESSION['lastname'] = $db_lastname;
             $_SESSION['fullname'] = $db_fullname;
             $_SESSION['image'] = $db_image;
             $_SESSION['phone'] = $db_phone;
             $_SESSION['role'] = $db_role;
             $_SESSION['premium'] = $db_premium;

        

            header("Location:Home.php");

        }else{
            
            $message_emailstatus = "Your email is not verified, first verify your email";
        }

        }else{
            
            $message_password = "Incorrect password";
        }
         
        }else{
            $message_email = "Invalid Email";   
              
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
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Member Login">
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
    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-357b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-default u-text-1">Sign In</h3>
            
            <?php
                
                if(isset($_SESSION['status'])){
                    
                    // echo $_SESSION['status'];
                }
                
                ?><br>
            <h7 class="text-center" style="color:#ff0000"><?php echo $message_emailstatus; ?></h7>

            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="email-cd60" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter your Email" id="email-cd60" name="email" value="<?php echo isset($_REQUEST["email"]) ? $_REQUEST["email"] : ''; ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                  
                  <h6 class="text-center" style="color:#ff0000"><?php echo $message_email; ?></h6>
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Enter your Password" id="id_password" name="password" value="<?php echo isset($_REQUEST["password"]) ? $_REQUEST["password"] : ''; ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                  <span class="far fa-eye" id="togglePassword" style="margin-left: 350px; cursor: pointer;"></span>
                  <h6 class="text-center" style="color:#ff0000"><?php echo $message_password; ?></h6>
                </div>
                <div class="u-form-checkbox u-form-group">
                  <input type="checkbox" id="checkbox-708d" name="remember" value="On">
                  <label for="checkbox-708d" class="u-label">Remember me</label>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="" class="btn head-btn2">Login</a>
                  <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <a href="Forgot_Password.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-2">Forgot password?</a>
          </div>
        </div>
      </div>
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