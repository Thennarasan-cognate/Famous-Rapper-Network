<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="assests/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="assests/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <!-- <link rel="stylesheet" href="assets/css/shared/style.css"> -->
 <link rel="stylesheet" href="assests/styles.css">

    <style>
img {
  border-radius: 50%;
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
    <meta property="og:title" content="Home">
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
            <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li>

  <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Member-Login.php" style="padding: 10px 20px;">Member Login</a>
</li>

  <?php 
              
      }
              
    ?> 

           <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="" style="width:40px" src ='images/<?php echo $_SESSION['image'] ?>' alt=""></a>
 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">

  <img class="" style="width:60px" src ='images/<?php echo $_SESSION['image'] ?>' alt="">

                  <p class="mb-1 mt-3 font-weight-semibold" style="color:#ff0000">
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
    <section class="u-align-right u-clearfix u-gradient u-section-1" id="carousel_8813">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-custom-font u-text u-text-body-alt-color u-text-font u-text-1">Become a Creator</h3>
            <h1 class="u-text u-text-body-alt-color u-title u-text-2">
              <a href="https://mim.org/galleries/special-exhibitions/the-electric-guitar-inventing-an-american-icon/" ping="/url?sa=t&amp;source=web&amp;rct=j&amp;url=https://mim.org/galleries/special-exhibitions/the-electric-guitar-inventing-an-american-icon/&amp;ved=2ahUKEwjL-aj21PXlAhWhw6YKHYk3CGIQFjALegQIABAB">S</a>hare<br>Your<br>Passion 
            </h1>
            <a href="Register-Member.php" data-page-id="867430778" class="u-btn u-btn-round u-button-style u-palette-4-base u-radius-27 u-text-body-alt-color u-btn-1">Become a creator</a>
          </div>
        </div>
        <img class="u-image u-image-default u-image-1" src="images/4ce0350cf08d3dd58eedeff0e68bed2cdf468ac7a746a7d6192cb370c35b4e70618d38d0af42f2c0f5767141389bf59e6f76e04488869cad68a2a8_1280.jpg" alt="" data-image-width="1280" data-image-height="853" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-af57">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="900" data-image-height="900" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"></div>
                <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-1">David Prorok</h1>
                <p class="u-text u-text-body-alt-color u-text-2"> An Ex-Facebook Software Engineer exploring the peaks of human experience through connection and collaboration. The most authentic and genuine person you'll meet online. On a mission to teach a billion people how to freestyle rap.</p>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">learn more</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-2" data-image-width="900" data-image-height="900" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"></div>
                <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-3"> David Prorok</h1>
                <p class="u-text u-text-body-alt-color u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2">learn more</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <div alt="" class="u-image u-image-circle u-image-3" data-image-width="900" data-image-height="900" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"></div>
                <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-5"> David Prorok</h1>
                <p class="u-text u-text-body-alt-color u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3">learn more</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <div alt="" class="u-image u-image-circle u-image-4" data-image-width="900" data-image-height="900" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"></div>
                <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-7"> David Prorok</h1>
                <p class="u-text u-text-body-alt-color u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-alt-color u-btn-4">learn more</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <div alt="" class="u-image u-image-circle u-image-5" data-image-width="900" data-image-height="900" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"></div>
                <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-9"> David Prorok</h1>
                <p class="u-text u-text-body-alt-color u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-alt-color u-btn-5">learn more</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                <div alt="" class="u-image u-image-circle u-image-6" data-image-width="900" data-image-height="900" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"></div>
                <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-11"> David Prorok</h1>
                <p class="u-text u-text-body-alt-color u-text-12">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-alt-color u-btn-6">learn more</a>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-body-alt-color u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-body-alt-color u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-3" id="sec-d468">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-size-xs-60 u-layout-cell-1" src="">
                <div class="u-container-layout u-container-layout-1"><span class="u-icon u-icon-circle u-palette-1-base u-spacing-10 u-icon-1">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 32 32" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1755"></use></svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 32 32" id="svg-1755"><g><path d="M20.388,10.918L32,12.118l-8.735,7.749L25.914,31.4l-9.893-6.088L6.127,31.4l2.695-11.533L0,12.118 l11.547-1.2L16.026,0.6L20.388,10.918z"></path>
</g></svg>
              </span>
                  <h2 class="u-text u-text-body-alt-color u-text-1"> Broadcast your passion with ease</h2>
                  <h2 class="u-subtitle u-text u-text-body-alt-color u-text-2"> One platform to host your content, smart-schedule live sessions, and securely accept payments with a personal landing page.</h2>
                  <a href="" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">learn more</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2" src="">
                <div class="u-container-layout u-container-layout-2" src="">
                  <div class="u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="854"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-4" id="sec-af9a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1" src="">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1280" data-image-height="807"></div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-40 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-text u-text-body-alt-color u-text-1"> Join a thriving community</h2>
                  <p class="u-text u-text-body-alt-color u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
                  <a href="#" class="u-btn u-button-style u-btn-1">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-5" id="sec-3a1d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-video u-video-1">
                <div class="u-background-video u-expanded" style="">
                  <div class="embed-responsive embed-responsive-1">
                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-left u-expanded u-video">
                    <div class="embed-responsive embed-responsive-2">
                      <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="2222" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-video u-video-3">
                <div class="u-background-video u-expanded" style="">
                  <div class="embed-responsive embed-responsive-3">
                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-align-left u-expanded u-video">
                    <div class="embed-responsive embed-responsive-4">
                      <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="1111" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

    <!-- <script src="assets/vendors/js/vendor.bundle.base.js"></script> -->
    <script src="assests/vendor.js"></script>

  </body>
</html>



