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
            $Location=$row['Location'];
            
           }
         }

      if(isset($_POST['edit_profile'])){
   
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
            $Location = $_POST['Location'];


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
              
    $query="UPDATE register SET firstname= '{$firstname}', lastname= '{$lastname}',image= '{$image}', email= '{$email}',phone= '{$phone}',instagram='{$instagram}', facebook='{$facebook}',twitter='{$twitter}',youtube='{$youtube}',Location='{$Location}'  WHERE firstname= '{$firstname}' ";  
                      
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


     <?php 

       if(isset($_POST['youtube'])){

      $youtube =  $_POST['youtube'];

       $text = $youtube;
       // echo "youtube link : " . $text . "<br>";
       $text = preg_replace("#. *youtube\.com/watch\?v=#" , "", $text);
        echo "the Location Id : " . $text . "<br>";
       // $text = <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/'.$text.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     echo $text;

      }
      // $text="text";

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
    <meta property="og:title" content="ProfilePage">
    <meta property="og:type" content="website">


<!-- <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500"> 

   <script>

    var autocomplete;
    function initialize() { 
      autocomplete = new google.maps.places.Autocomplete( 
        /** @type {HTMLInputElement} */ (document.getElementById('autocomplete')), 
        { types: ['geocode'] } ); 
      google.maps.event.addListener(autocomplete, 'place_changed', function(){

       });

       // autocomplete.addListener('place_changed', function());

    }

   </script> 


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUMPvjQWQclHKnvDd-moWrD7QIOceWyc0&libraries=places" async defer></script> --> 


  </head>
  <body class="u-body" onload="initialize()"><header class="u-clearfix u-header u-header" id="sec-6baa"><div class="u-clearfix u-sheet u-sheet-1">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li>

  <?php

    if(isset($_SESSION['email']) == $db_email){

  ?>

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 10px 20px;">Member-Login</a>
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
        <div class="u-image u-image-circle u-image-2" alt="" data-image-width="400" data-image-height="265"></div>
      </div></header>
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_83e4">
      <form action="" autocomplete="off" method="post" enctype="multipart/form-data">
       <!-- <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true"> -->
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1"><?php echo $_SESSION['firstname'] ?></h1>
        <p class="u-large-text u-text u-text-variant u-text-2">I'm a creative graphic designer</p>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">

              <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-video u-video-1">
                <!-- <div class="u-background-video u-expanded" style=""> -->
                  <div class="embed-responsive embed-responsive-1">

                   
                   <?php 

                     //  if(isset($_POST['youtube'])){

                     // $youtube =  $_POST['youtube'];

                     //  echo "youtube link : " . $youtube . "<br>";
                     //  $youtube = preg_replace("#. *youtube\.com/watch\?v=#" , "", $youtube);
                     //   echo "the Location Id : " . $youtube . "<br>";
                     //   $youtube = <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/'.$text.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     // echo $youtube;
                     // $text ='tgbNymZ7vqY';
                     // $text ='79DijItQXMM';
                     // $text ='B9YKnNtFqds';

                     // }
                    

                    ?>

<!-- <iframe width="420" height="345" src="https://www.youtube.com/embed/B9YKnNtFqds?autoplay=1&mute=1"></iframe> -->
<iframe width="420" height="345" src="https://www.youtube.com/embed/B9YKnNtFqds?autoplay=1"></iframe>


<!-- <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src='https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1;frameborder="0" allowfullscreen="" '></iframe> -->

                    <!--  <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="<?php echo $youtube ?>;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>  -->
                  </div>
                </div>
                <!-- <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-top u-expanded u-video">
                    <div class="embed-responsive embed-responsive-2">
                      <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div> -->
              <!-- </div> -->

              <br>


            <div class="u-align-center u-container-style u-layout-cell u-palette-4-base u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h3 class="u-text u-text-default u-text-3">About me</h3>
                  <p class="u-text u-text-4">I am creative graphic designer. I am&nbsp;an expert in the Adobe Creative Suit and have worked with a varied myriad of clients.&nbsp;Connecting your ideas to customer perception &amp; all the digital dots in between...</p>
                  <p class="u-text u-text-5">Image from <a href="https://www.freepik.com/photos/business" class="u-active-none u-border-1 u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1" target="_blank">Freepik</a>
                  </p>
                </div>
              </div>
            </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <h3 class="u-text u-text-default u-text-6">Details</h3>
                  <p class="u-text u-text-7">
                    
                    <h6 style="font-weight: 700;">First Name: </h6>
                    <div><input type="text" value="<?php echo $firstname; ?>" class="form-control" name="firstname">
                    <h6 style="color:#ff0000"><?php echo $message_Firstname; ?></h6></div>

                    <span style="font-weight: 700;">Last Name: </span>
                    <div><input type="text" value="<?php echo $lastname; ?>" class="form-control" name="lastname">
                    <h6 style="color:#ff0000"><?php echo $message_Lastname; ?></h6></div>
                    
                    <span style="font-weight: 700;">Email: </span>
                    <div><input type="text" value="<?php echo $email; ?>" class="form-control" name="email">
                    <h6 style="color:#ff0000"><?php echo $message_email; ?></h6></div>

                    <span style="font-weight: 700;">Mobile: </span>
                    <div><input type="text" value="<?php echo $phone; ?>" class="form-control" name="phone">
                    <h6 style="color:#ff0000"><?php echo $message_phone; ?></h6></div>

                    <span style="font-weight: 700;">Instagram: </span>
                    <div><input type="text" value="<?php echo $instagram; ?>" class="form-control" name="instagram"></div>
                    
                    <span style="font-weight: 700;">Facebook: </span>
                    <div><input type="text" value="<?php echo $facebook; ?>" class="form-control" name="facebook"></div>
                    
                    <span style="font-weight: 700;">Twitter: </span>
                    <div><input type="text" value="<?php echo $twitter; ?>" class="form-control" name="twitter"></div>
                    
                    <span style="font-weight: 700;">Youtube: </span>
                    <div><input type="text" id="vid" value="<?php echo $youtube; ?><?php echo $text;?>"class="form-control" name="youtube"></div>
                    
                    <span style="font-weight: 700;">Age: </span>
                    <br>22 years<br>
                    
                    <span style="font-weight: 700;">Location: </span>
                    <div id="locationField"><input id="myInput" type="text" value="<?php echo $Location; ?>" class="form-control" onFocus="geolocate()" name="Location"></div>
                    <!-- <br>'s-Hertogenbosch, The Netherlands, Earth -->
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
    
    <section class="u-backlink u-clearfix">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>


<!DOCTYPE html>
<!-- <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9;
  /*height:45px;
  overflow: scroll;*/
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff;
  max-height: 100px;
  overflow-y: scroll;
  /* prevent horizontal scrollbar */
  overflow-x: hidden;
  /* add padding to account for vertical scrollbar */
  padding-right: 20px;


}
</style>


<style>
       .autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        } 
</style>


<!-- </head>      -->
<body>

<!-- <h2>Autocomplete</h2>

<p>Start typing:</p>

--------------------Make sure the form has the autocomplete function switched off:-------------
<form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="myCountry" placeholder="Country">
  </div>
  <input type="submit">
</form>  -->

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","America","Albania","Australia","Azerbaijan","Bangladesh","Belgium","Bermuda","Bhutan","Brazil","Canada","China","Colombia","Congo","Cook Islands","Denmark","Djibouti","Dominica","Dominican Republic","Egypt","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Fiji","Finland","France","French","Gabon","Gambia","Georgia","Germany","Ghana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Latvia","Lebanon","Lesotho","Liberia","Libya","Malaysia","Maldives","Mali","Malta","Mauritania","Namibia","Nauro","Nepal","Netherlands","New Zealand","Oman","Pakistan","Palestine","Panama","Poland","Portugal","Qatar","Reunion","Romania","Russia","Rwanda","Serbia","Singapore","Somalia","Sri Lanka","Switzerland","Taiwan","Togo","Tonga","Tunisia","Turkey","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
</body>
</html>

      <!-- Dropdown Profile -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html>