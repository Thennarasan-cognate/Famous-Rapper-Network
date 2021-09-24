<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>
<?php include "connection.php"; ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Profile</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Profile.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
      
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Profile Icon -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    
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
    <meta property="og:title" content="Profile">
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
            <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View_All_Artists.php" style="padding: 10px 20px;">View All Artists</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li>

  <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Member-Login.php" style="padding: 10px 20px;">Member Login</a>
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
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">View All Artists</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.html" style="padding: 10px 20px;">Profile</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="ProfilePage.html" style="padding: 10px 20px;">ProfilePage</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.html" style="padding: 10px 20px;">Member-Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <div class="u-image u-image-circle u-image-2" alt="" data-image-width="400" data-image-height="265"></div>
      </div></header>
    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-section-1" id="carousel_261b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Artist Discovery&nbsp;</h3>

<form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true">
<div class="card">
      <div id="bulkOptionContainer" class="col-xs-4">
          <select class="form-control" name="bulk_options" id="">
                   
                <option value="">Roles</option>
                <option value="Rapper">Rapper</option>
                <option value="Singer">Singer</option>
                <option value="Producer">Producer</option>
                <option value="Invester">Invester</option>
                <option value="Software Engineer">Software Engineer</option>
                     
          </select>
        <!-- <input type="submit" name="submit" class="btn btn-success" value="Submit"> -->
       </div> 
    </div>
</form>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h6 class="u-text u-text-2">Sample Headline</h6>
                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="images/ome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall.jpg" alt="" data-image-width="626" data-image-height="417">
                <h6 class="u-text u-text-3">Sample Headline</h6>
                <p class="u-small-text u-text u-text-variant u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h6 class="u-text u-text-5">Sample Headline</h6>
                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-2" src="images/ome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall.jpg" alt="" data-image-width="626" data-image-height="417">
                <h6 class="u-text u-text-6">Sample Headline</h6>
                <p class="u-small-text u-text u-text-variant u-text-7">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h6 class="u-text u-text-8">Sample Headline</h6>
                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-3" src="images/ome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall.jpg" alt="" data-image-width="626" data-image-height="417">
                <h6 class="u-text u-text-9">Sample Headline</h6>
                <p class="u-small-text u-text u-text-variant u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h6 class="u-text u-text-11">Sample Headline</h6>
                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-4" src="images/ome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall.jpg" alt="" data-image-width="626" data-image-height="417">
                <h6 class="u-text u-text-12">Sample Headline</h6>
                <p class="u-small-text u-text u-text-variant u-text-13">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <h6 class="u-text u-text-14">Sample Headline</h6>
                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-5" src="images/ome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall.jpg" alt="" data-image-width="626" data-image-height="417">
                <h6 class="u-text u-text-15">Sample Headline</h6>
                <p class="u-small-text u-text u-text-variant u-text-16">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <h6 class="u-text u-text-17">Sample Headline</h6>
                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-6" src="images/ome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall.jpg" alt="" data-image-width="626" data-image-height="417">
                <h6 class="u-text u-text-18">Sample Headline</h6>
                <p class="u-small-text u-text u-text-variant u-text-19">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6d92"><div class="u-clearfix u-sheet u-sheet-1">
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

       <!-- Profile Icon -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html>