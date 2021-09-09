<?php ob_start (); ?>
<?php session_start(); ?>
<?php include "db.php"; ?>


<?php

if(isset($_SESSION['firstname'])){

     $firstname =  $_SESSION['firstname'];  
           
     $query="SELECT * FROM register WHERE firstname = '{$firstname}' ";
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

      if(isset($_POST['edit_profile'])){

            $title  =  $_POST['title'];   
            $firstname =  $_POST['firstname'];
            $lastname =  $_POST['lastname'];
            $image = $_FILES['image']['name'];
            $image_tempname = $_FILES['image']['tmp_name'];
            $phone=$_POST['phone'];        
            $email =  $_POST['email'];
            $password =  $_POST['password'];      
            $confirm_password =  $_POST['confirm_password'];
            $instagram =  $_POST['instagram'];
            $facebook =  $_POST['facebook'];
            $twitter =  $_POST['twitter'];
            $youtube =  $_POST['youtube'];
        
          
            $password = mysqli_real_escape_string($connection,$_POST['password']);
            $confirm_password = mysqli_real_escape_string($connection,$_POST['confirm_password']);
            $password = md5($password);      
            $confirm_password = md5($confirm_password); 
          
        move_uploaded_file($image_tempname,"images/$image");
        
        if(empty($user_image)){
            
            $query = "SELECT * FROM register WHERE id = $id ";
            $select_image = mysqli_query($connection,$query);
                
            while($row = mysqli_fetch_array($select_image)){
                
            $image = $row['image'];
              
               }
            
          } 
       
        if(preg_match('/^[\p{L} ]+$/u', $firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $lastname)) {
          
         
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $character = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $password);
            

        if(strlen($password) >= 8) { 
          
        if($password==$confirm_password){
              
    $query="UPDATE register SET title='{$title}', firstname= '{$firstname}', lastname= '{$lastname}',image= '{$image}', email= '{$email}',phone= '{$phone}',instagram='{$instagram}', facebook='{$facebook}',twitter='{$twitter}',youtube='{$youtube}'  WHERE firstname= '{$firstname}' ";  
                      
        $update_profile_query=mysqli_query($connection,$query);

         if(!$update_profile_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }
            
          
           header("Location:profile.php"); 
              
         }else{
             
           $message_confirm="password did not match";
             
         }
         }else{
              $message_strnpassworad = "password contain atleast 8 characters";
              
       }
  
          
        }else{
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }   
          
            
       }



?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>EditProfilePage</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="ProfilePage.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.24.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    

    <style>
img {
  border-radius: 50%;
}
</style>

    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="ProfilePage">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-6baa"><div class="u-clearfix u-sheet u-sheet-1">
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
</li>

  <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 


<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Member-Login.php" style="padding: 10px 20px;">Member-Login</a>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 10px 20px;">Member-Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <div class="u-image u-image-circle u-image-2" alt="" data-image-width="400" data-image-height="265"></div>
      </div></header>
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_83e4">
      <form action="" method="post" enctype="multipart/form-data">
       <!-- <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true"> -->
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1"><?php echo $_SESSION['firstname'] ?></h1>
        <p class="u-large-text u-text u-text-variant u-text-2">I'm a creative graphic designer</p>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-1">
               <div class="u-container-layout u-valign-middle u-container-layout-1">
                   <!-- <div alt="" class="u-image u-image-circle u-image-1" data-image-width="626" data-image-height="417"></div>  -->
                   <div class="form-group">
                <img class="round-circle" style="width:550px" src ='images/<?php echo $_SESSION['image'] ?>' alt="">
                <center><input type="file" name="image" value="Edit"></center></div>
            </div>

              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-4-base u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h3 class="u-text u-text-default u-text-3">About me</h3>
                  <p class="u-text u-text-4">I am creative graphic designer. I am&nbsp;an expert in the Adobe Creative Suit and have worked with a varied myriad of clients.&nbsp;Connecting your ideas to customer perception &amp; all the digital dots in between...</p>
                  <p class="u-text u-text-5">Image from <a href="https://www.freepik.com/photos/business" class="u-active-none u-border-1 u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1" target="_blank">Freepik</a>
                  </p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <h3 class="u-text u-text-default u-text-6">Details</h3>
                  <p class="u-text u-text-7">
                    <span style="font-weight: 700;">Gender: </span>
                    <div class="col-sm-9">
                     <input type="text" value="<?php echo $title; ?>" class="form-control" name="title">
                    </div>

                    <span style="font-weight: 700;">Name: </span>
                    <div class="form-control"><input type="text" value="<?php echo $firstname; ?>" class="form-control" name="firstname">
                    <h6 class="text-center" style="color:#ff0000"><?php echo $message_Firstname; ?></h6></div>

                    <span style="font-weight: 700;">Name: </span>
                    <div class="form-control"><input type="text" value="<?php echo $lastname; ?>" class="form-control" name="lastname">
                    <h6 class="text-center" style="color:#ff0000"><?php echo $message_Lastname; ?></h6></div>
                    
                    <span style="font-weight: 700;">Email: </span>
                    <div class="form-control"><input type="text" value="<?php echo $email; ?>" class="form-control" name="email">
                    <h6 class="text-center" style="color:#ff0000"><?php echo $message_email; ?></h6></div>

                    <!-- <span style="font-weight: 700;">Password: </span>
                    <div class="form-control"><input type="password" value="<?php echo $password; ?>" class="form-control" name="password">
                    <h6 class="" style="color:#ff0000"><?php echo $message_strnpassworad; ?></h6>
                    <h6 class="" style="color:#ff0000"><?php echo $message_password; ?></h6></div>

                    <span style="font-weight: 700;">Confirm: </span>
                    <div class="form-control"><input type="password" value="<?php echo $confirm_password; ?>" class="form-control" name="confirm_password">
                    <h6 class="" style="color:#ff0000"><?php echo $message_confirm; ?></h6></div> -->

                    <span style="font-weight: 700;">Mobile: </span>
                    <div class="form-control"><input type="text" value="<?php echo $phone; ?>" class="form-control" name="phone">
                    <h6 class="text-center" style="color:#ff0000"><?php echo $message_phone; ?></h6></div>

                    <span style="font-weight: 700;">Instagram: </span>
                    <div class="form-control"><input type="text" value="<?php echo $instagram; ?>" class="form-control" name="instagram"></div>

                    <span style="font-weight: 700;">Facebook: </span>
                    <div class="form-control"><input type="text" value="<?php echo $facebook; ?>" class="form-control" name="facebook"></div>

                    <span style="font-weight: 700;">Twitter: </span>
                    <div class="form-control"><input type="text" value="<?php echo $twitter; ?>" class="form-control" name="twitter"></div>

                    <span style="font-weight: 700;">Youtube: </span>
                    <div class="form-control"><input type="text" value="<?php echo $youtube; ?>" class="form-control" name="youtube"></div>

                    <span style="font-weight: 700;">Age: </span>
                    <br>22 years <span style="font-weight: 700;">
                      <br>Location: 
                    </span>
                    <br>'s-Hertogenbosch, The Netherlands, Earth
                  </p>
                  
           <!-- <div class="u-align-center u-form-group u-form-submit">
              <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Update profile<br>
              </a>
              <input type="submit" name="edit_profile" value="submit" class="u-form-control-hidden">
            </div> -->
         <div class="input-group-btn">
          <input class="btn btn-primary" type="submit" name="edit_profile" value="Update profile">
        </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </section>
    
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