<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<?php

 if(isset($_GET['Artists_profile'])){

        $the_user_id = $_GET['Artists_profile'];

      $query="SELECT * FROM view_all_artists WHERE user_id = $the_user_id ";

     $select_view_all_artists_Artists_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_view_all_artists_Artists_profile)){

            $user_id=$row['user_id'];
            $Name=$row['Name'];
            $Email=$row['Email'];
            $Roles=$row['Roles'];
            $Offerings=$row['Offerings'];
            $Interview_link=$row['Interview_link'];
            $Location=$row['Location'];
            $Home_town=$row['Home_town'];
            $Birth_place=$row['Birth_place'];
            $Instagram=$row['Instagram'];
            $Youtube=$row['Youtube'];
            $Spotify=$row['Spotify'];
            $Merch_image=$row['Merch_image'];
            $Merch_link=$row['Merch_link'];
            $Headline=$row['Headline'];
            $About=$row['About']; 
            $Featured_song=$row['Featured_song'];
            $Featured_music=$row['Featured_music'];
            $Featured_album=$row['Featured_album'];
            $Soundcloud=$row['Soundcloud'];
            $Twitter=$row['Twitter'];
            $Community=$row['Community'];
            $Facebook=$row['Facebook'];
            $Podcast=$row['Podcast'];
            $Mailing_list=$row['Mailing_list'];
            $Tiktok=$row['Tiktok'];
            $Bandcamp=$row['Bandcamp'];
            $Patreon=$row['Patreon'];
            $LinkedIn=$row['LinkedIn'];
            
           }
         }

  ?>





<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="VR headsets, ​VR's Surprising Benefits, ​VR's Surprising Benefits, 1, 2, 3, ​​The benefits of virtual reality, ​Experts reveal four surprising health benefits of VR gaming, Follow Us!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Artists.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.27.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    

<!-- Profile Icon -->
 <link rel="stylesheet" href="assets/css/shared/style.css">
 <!-- <link rel="stylesheet" href="style.css"> -->

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
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-white"><header class="u-clearfix u-header u-header" id="sec-4ce4"><div class="u-clearfix u-sheet u-sheet-1">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Artists_profile.php?Artists_profile=<?php echo $user_id; ?>" style="padding: 10px 20px;">Artist Profile</a></li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Artists_profile.php?Artists_profile=<?php echo $user_id; ?>" style="padding: 10px 20px;">Artists Profile</a></li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a>

 <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 

</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 10px 20px;">Member Login</a>
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
    <section class="u-clearfix u-section-1" id="sec-f37b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1"><span style="font-weight: 700;"><?php echo $Name ?></span>
        </h2>
        <div class="u-align-left u-expanded-width-sm u-expanded-width-xs u-size-30 u-video u-video-1">
          <div class="embed-responsive embed-responsive-1" style="background-image: url(&quot;https://www.youtube.com/embed/B9YKnNtFqds;);">

            <?php 

                       $Music = preg_replace("/https:\/\/\www.youtube.com\/watch\?v=/" , "", $Featured_music);
                    
                    ?>

<iframe width="420" height="345" src="https://www.youtube.com/embed/<?php echo $Music; ?>?autoplay=0&mute=0"></iframe>

            <!-- <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/L-hm3S1aSnI?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe> -->
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h6 class="u-text u-text-default u-text-2"><span style="font-weight: 700;"><?php echo $Name; ?></span></h6>
            <p class="u-text u-text-default u-text-3"><span style="font-weight: 600;">"<?php echo $Headline; ?>!"</span></p><br>
            <h6 class="u-text u-text-default u-text-4"><span style="font-weight: 600;">About</span></h6>
            <p class="u-text u-text-default u-text-5">
             <!--  Music is my life! I love to create art and I’m here to inspire others! I grew up in Hartford, but moved to Phoenix, AZ shortly after my father died and started a new life. I got into rapping while I was<span class="u-text-body-color"></span> attending Arizona State University. I started getting more into it when I was going to Phoenix College taking music classes. Nowadays I’m involved with various forms of art. My purpose is to have a positive impact on the planet. I will live a life that would make my father proud and help millions of people live better lives. -->
              <?php echo $About; ?>
            </p>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h6 class="u-text u-text-6">Location: <span style="font-weight: normal;"><?php echo $Location; ?></span>
            </h6>
            <h6 class="u-text u-text-7"><b>Home town: </b><?php echo $Home_town; ?>
            </h6>
            <h6 class="u-text u-text-8"><b>Birth place: </b><?php echo $Birth_place; ?>
            </h6>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <h6 class="u-text u-text-black u-text-9"><b>Instagram : </b><a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" href="<?php echo $Instagram; ?>">Instagram.com</a>
            </h6>
            <h6 class="u-text u-text-10"><b>Youtube   :   </b><a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" href="<?php echo $Youtube; ?>">youtube.com</a>
            </h6>
            <h6 class="u-text u-text-10"><b>Spotify : </b><a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" href="<?php echo $Spotify; ?>">spotify.com</a>
            </h6>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-4">
          <div class="u-container-layout u-container-layout-4">
            <h6 class="u-text u-text-12"><b>Merch</b>
            </h6><a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-11" href="<?php echo $Merch_image; ?>">Image</a>
            <a href="https://nicepage.com/website-mockup" class="u-btn u-button-style u-btn-1">Shop Now</a>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-5">
          <div class="u-container-layout u-container-layout-5">
            <h6 class="u-text u-text-13"><b>Featured Song:</b><br><br><a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" href="<?php echo $Featured_song; ?>"><?php echo $Featured_song; ?></a>
            </h6>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-6">
          <div class="u-container-layout u-container-layout-6">
            <h6 class="u-text u-text-14"><b>Featured Music:</b><br><br><a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" href="<?php echo $Featured_music; ?>"><?php echo $Featured_music; ?></a>
            </h6>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-7">
          <div class="u-container-layout u-container-layout-7">
            <h6 class="u-text u-text-15"><b>Featured Album:</b><br><br><a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" href="<?php echo $Featured_album; ?>"><?php echo $Featured_album; ?></a>
            </h6>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-8">
          <div class="u-container-layout u-container-layout-8">
            <h6 class="u-text u-text-16">&nbsp;<b>Dig Deeper!</b><br>
              <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Unlock <?php echo $Name; ?> premium&nbsp;Profile and access the following:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: 700;">Email address: </span><?php echo $Email; ?><br>
              <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            </h6>
            <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Upgrade Now ($10)<span style="font-weight: 700;"></span>
            </a>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-radius-8 u-shape u-shape-round u-shape-1"></div>
        <a href="https://nicepage.com/css-templates" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-50 u-btn-3">30MIN<span style="font-weight: 400;">
            <span style="font-weight: 700;">
              <span style="font-weight: 400;"> call $50</span>
            </span>
          </span>
        </a>
        <h6 class="u-text u-text-17">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Purchase&nbsp;Time with&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $Name; ?> !
        </h6>
        <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-50 u-btn-4">60min call $75</a>
        <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-5">Add to favorties</a>
        <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-6">Share profile</a>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-9">
          <div class="u-container-layout u-container-layout-9">
            <div class="fr-view u-clearfix u-rich-text u-text u-text-18"></div>
            <div class="fr-view u-clearfix u-rich-text u-text u-text-19">
              <p>
                <span style="font-weight: 700;">Additional Profile</span>
              </p>
            </div>
            <h6 class="u-text u-text-20">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" href="<?php echo $LinkedIn; ?>">Linkedin</a>
            </h6>
            <h6 class="u-text u-text-21">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-8" href="<?php echo $Soundcloud; ?>">Soundcloud</a>
            </h6>
            <h6 class="u-text u-text-22">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-9" href="<?php echo $Twitter; ?>">Twitter</a>
            </h6>
            <h6 class="u-text u-text-23">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-10" href="<?php echo $Facebook; ?>">Facebook</a>
            </h6>
          </div>
        </div>
      </div>
    </section>
    
 <footer class="u-clearfix u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
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
    <section class="u-backlink u-clearfix">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>


       <!-- Profile Icon -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html>