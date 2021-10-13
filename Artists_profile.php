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
    <title>Artists profile</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.27.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
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
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-4ce4"><div class="u-clearfix u-sheet u-sheet-1">
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
      <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
        <h2 class="u-align-center u-text u-text-1"><span style="font-weight: 700;"><?php echo $Name ?></span>
        </h2>

        <div class="u-align-left u-expanded-width-sm u-expanded-width-xs u-video u-video-1">
          <div class="embed-responsive embed-responsive-1">

           <?php 

                       $Music = preg_replace("/https:\/\/\www.youtube.com\/watch\?v=/" , "", $Featured_music);
                    
                    ?>

<iframe width="420" height="345" src="https://www.youtube.com/embed/<?php echo $Music; ?>?autoplay=0&mute=0"></iframe>

            <!-- <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/L-hm3S1aSnI?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe> -->
          </div>
        </div>
        <br>
        <?php echo "<center><button type='button' class='btn btn-primary' style='width:145px; height: 40px; background-color: #f3f5f6 ;' name='submit'><a href='EditArtists_profile.php?EditArtists_profile={$user_id}'>Edit Artist profile</a></button></center>" ?>

        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h6 class="u-text u-text-default u-text-2"><b><?php echo $Name ?></b>
            </h6>
            <p class="u-text u-text-3"><span style="font-weight: 700;">"<?php echo $Headline; ?>!"
                <span style="font-weight: 400;"></span>
              </span>
            </p>
            <h6 class="u-align-center u-text u-text-4"><span style="font-weight: 700;">About</span>
            </h6>
            <p class="u-text u-text-5"><?php echo $About; ?>
              <!-- Music is my life! I love to create art and I’m here to inspire others! I grew up in Hartford, but moved to Phoenix, AZ shortly after my father died and started a new life. I got into rapping while I was<span class="u-text-body-color"></span> attending Arizona State University. I started getting more into it when I was going to Phoenix College taking music classes. Nowadays I’m involved with various forms of art. My purpose is to have a positive impact on the planet. I will live a life that would make my father proud and help millions of people live better lives. -->
            </p>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h6 class="u-text u-text-6">&nbsp; &nbsp; &nbsp;Location: <span style="font-weight: normal;"><?php echo $Location; ?></span>
            </h6>
            <h6 class="u-text u-text-7"><b>&nbsp; &nbsp; &nbsp;Home town: </b><?php echo $Home_town; ?>
            </h6>
            <h6 class="u-text u-text-8"><b>&nbsp; &nbsp; &nbsp;Birth place: </b><?php echo $Birth_place; ?>
            </h6>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <h6 class="u-text u-text-black u-text-9"><b>&nbsp; &nbsp;Instagram:&nbsp;</b><a class="u-active-none u-border-none u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-15" href="<?php echo $Instagram; ?>">Instagram.com</a>
            </h6>
            <h6 class="u-text u-text-10"><b>&nbsp; &nbsp;Youtube:&nbsp;<span style="font-weight: 400;"> &nbsp;</span></b>
              <span style="font-weight: 400;"><a class="u-active-none u-border-none u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-16" href="<?php echo $Youtube; ?>">youtube.com</a></span>
            </h6>
            <h6 class="u-text u-text-11">&nbsp; &nbsp;Spotify<b>:&nbsp; &nbsp;&nbsp;</b>
              <span style="font-weight: normal;"><a class="u-active-none u-border-none u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-17" href="<?php echo $Spotify; ?>">spotify.com</a></span>
            </h6>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-4">
          <div class="u-container-layout u-container-layout-4">
            <h6 class="u-align-center u-text u-text-12"><b>Merch</b>
            </h6>
            <h6 class="u-align-center u-text u-text-13">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="<?php echo $Merch_image; ?>">Image<span style="font-weight: 700;"></span>
              </a>
            </h6>
            <a href="https://nicepage.com/website-mockup" class="u-btn u-button-style u-btn-2">Shop Now</a>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-5">
          <div class="u-container-layout u-container-layout-5">
            <h6 class="u-text u-text-14"><b>Featured Song:</b>
            </h6>
            <p class="u-align-center u-text u-text-15">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3" href="<?php echo $Featured_song; ?>">Song.link</a>
            </p>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-6">
          <div class="u-container-layout u-container-layout-6">
            <h6 class="u-text u-text-16"><b>Featured Music:</b>
            </h6>
            <p class="u-align-center u-text u-text-17">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4" href="<?php echo $Featured_music; ?>">Youtubemusic.com</a>
            </p>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-7">
          <div class="u-container-layout u-container-layout-7">
            <h6 class="u-text u-text-18"><b>Featured Album:</b>
            </h6>
            <p class="u-align-center u-text u-text-19">
              <a href="<?php echo $Featured_album; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-5">Album.link</a>
            </p>
          </div>
        </div>
        <div class="u-border-2 u-border-grey-5 u-container-style u-expanded-width-xs u-group u-radius-8 u-shape-round u-group-8">
          <div class="u-container-layout u-container-layout-8">
            <h6 class="u-text u-text-20">&nbsp;<b>Dig Deeper!</b>
              <br>
              <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Unlock <?php echo $Name ?> premium&nbsp;Profile and access&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the following:<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: 700;">Email address: </span><?php echo $Email; ?><br>
              <br>
              <br>
              <br>
              <br>
              <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            </h6>
            <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-6">Upgrade Now ($10)<span style="font-weight: 700;"></span>
            </a>
          </div>
        </div>
        <div class="u-align-left u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-9">
          <div class="u-container-layout u-container-layout-9">
            <h6 class="u-text u-text-21">&nbsp; &nbsp; &nbsp; &nbsp; Purchase&nbsp;Time with&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $Name ?> !
            </h6>
            <a href="https://nicepage.com/css-templates" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-50 u-btn-7">30MIN call $50<span style="font-weight: 400;"></a>

            <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-50 u-btn-8">60min call $75</a>
          </div>
        </div>
        <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-9">Add to favorties</a>
        <div class="u-border-2 u-border-grey-5 u-container-style u-group u-radius-8 u-shape-round u-group-10">
          <div class="u-container-layout u-container-layout-10">
            <h6 class="u-text u-text-22">Additional Profile:</h6>
            <h6 class="u-text u-text-23">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-10" href="<?php echo $LinkedIn; ?>">Linkedin</a>
            </h6>
            <h6 class="u-text u-text-24">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-11" href="<?php echo $Soundcloud; ?>">Soundcloud</a>
            </h6>
            <h6 class="u-text u-text-25">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-12" href="<?php echo $Twitter; ?>">Twitter</a>
            </h6>
            <h6 class="u-text u-text-26">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-13" href="<?php echo $Facebook; ?>">Facebook</a>
            </h6>
          </div>
        </div>
        <a href="https://nicepage.com/css-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-14">Share profile</a>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-design" target="_blank">
        <span>Website Design</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Layout generator</span>
      </a>. 
    </section>
  </body>
</html>