<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<?php 

   if(isset($_POST['CheckBoxArray'])){
       
       foreach($_POST['CheckBoxArray'] as $uservalueId){
        
          $bulk_options = $_POST['bulk_options'];
           
          
  switch($bulk_options){

           case 'Admin':

             $query = "UPDATE register SET role='{$bulk_options}' WHERE id={$uservalueId} " ;                  
             $update_to_admin_status = mysqli_query($connection,$query);

               if(!$update_to_admin_status){
              die("Query Failed" . mysqli_error($connection));
}
             break; 


            case 'User':

              $query = "UPDATE register SET role='{$bulk_options}' WHERE id={$uservalueId} " ;                  
              $update_to_supplier_status = mysqli_query($connection,$query);

                   // confirmQuery($update_to_supplier_status);

              if(!$update_to_supplier_status){
              die("Query Failed" . mysqli_error($connection));
}
             break; 

            case 'delete':

              $query = "DELETE FROM register WHERE id={$uservalueId} " ;   

              $update_to_delete_status = mysqli_query($connection,$query);

                   // confirmQuery($update_to_delete_status);

              if(!$update_to_delete_status){
              die("Query Failed" . mysqli_error($connection));
}
             break;  
                 
          }
           
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
    <title>All Users</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="View_All_Artists.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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

<style>

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    line-height: 1;
    border-radius: 0.1875rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

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
            <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View_All_Artists.php" style="padding: 10px 20px;">View All Artists</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="List_All_Users.php" style="padding: 10px 20px;">View All Users</a></li>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="View_All_Artists.php" style="padding: 10px 20px;">View All Artists</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="List_All_Users.php" style="padding: 10px 20px;">View All Users</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a>

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
        <div class="u-image u-image-circle u-image-2" alt="" data-image-width="400" data-image-height="265"></div>
      </div></header>


    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-section-1" id="carousel_261b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Users&nbsp;</h3><br>


<form action="" method='post'>
    <div class="card">
       
      <div id="bulkOptionContainer" class="col-md-3">
         <div class="input-group">
          <select class="form-control" name="bulk_options" id="">
                   
                <option value="">Select Options</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
                <option value="delete">Delete</option>
                     
          </select>
          <span class="input-group-btn">
        <input type="submit" name="submit" class="btn head-btn2" value="Apply">
      </span>
       </div> 
   </div>
    </div><br>
 <div class="card">
  <div class="table-responsive">
        <table class="table table-bordered table-hover">
               <div class="col-xs-4">
                   
                
                   
               </div>
              
               
                <thead>
                    <tr>
                        <th><input id="SelectAllBoxes" type="CheckBox"></th>
                        <th style="color:blue">Id</th>
                        <th style="color:blue">Firstname</th>
                        <th style="color:blue">Lastname</th>
                        <th style="color:blue">Phone No</th>
                        <th style="color:blue">Email</th>
                        <th style="color:blue">Role</th>
                        <!-- <th style="color:blue">Action</th> -->
                        <th style="color:blue">Action</th>
                    </tr>
                </thead>
                <tbody>
                            
     <?php 

            $query = "SELECT * FROM register";
       $artist_id = mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($artist_id)){

            $id=$row['id'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $phone=$row['phone'];
            $email=$row['email'];
            $role=$row['role'];

                   

                    echo "<tr>";
                 
                 ?>
                 
                 <td><input class='CheckBoxes' type="CheckBox" name='CheckBoxArray[]' value='<?php echo $id; ?>'></td>
                  
             <?php
                 
                    echo "<td>$id</td>";
                    echo "<td>$firstname</td>";
                    echo "<td>$lastname</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$email</td>";
                    echo "<td>$role</td>";

                   // echo "<td><input type='image' src='assets/icons/edit.svg' width='13' height ='13'><a href='users.php?source=edit_user&edit_user={$id}'>Edit</a></td>";
                    echo "<td><input type='image' src='assets/icons/delete.svg' width='15' height ='15'><a onClick=\"javascript:return confirm('Are you Sure you want to delete');\"href='List_All_Users.php?delete={$id}'>Delete</a></td>";
                    echo "</tr>";

                    }

                    ?>
                   
            </tbody>
         </table>
      </div>
     </div>
  </form>

             <?php

                 if(isset($_GET['delete'])){
                     $the_user_id=$_GET['delete'];
                     $query="DELETE FROM register WHERE id={$the_user_id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:List_All_Users.php");
                 }
             ?>  


<!--  <section class="u-clearfix u-section-1" id="sec-6468">
        <div class="u-expanded-width u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1"> -->

<?php

  //      $query = "SELECT * FROM view_all_artists";
  //      $artist_id = mysqli_query($connection,$query);

  //       while($row=mysqli_fetch_array($artist_id)){

  //           $user_id=$row['user_id'];
  //           $Name=$row['Name'];
  //           $Email=$row['Email'];
  //           $Roles=$row['Roles'];
  //           $Offerings=$row['Offerings'];
  //           $Interview_link=$row['Interview_link'];
  //           $Location=$row['Location'];
  //           $About=$row['About'];
  //           $Youtube=$row['Youtube'];
  //           $Featured_music=$row['Featured_music'];

  // $Music = preg_replace("/https:\/\/\www.youtube.com\/watch\?v=/" , "", $Featured_music);


?>

           <!--  <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-video u-video-contain u-video-1">
                  <div class="embed-responsive embed-responsive-1">
                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/B9YKnNtFqds?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Music; ?>?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
                <h4 class="u-text u-text-default u-text-1"><?php echo $Name; ?></h4>
              </div>
            </div> -->
<?php

 // }

 ?>


         <!--  </div>
        </div>
    </section> -->


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