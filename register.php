<?php include "db.php"; ?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title>cognate</title>
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
     <script src="JsLocalSearch.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrap.com/bootstrap/4.0.0/css/bootstrap.min.css" />
     <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">  
    </head>

<body>

    
    <?php 

     if(isset($_POST['submit'])){
         
         $title =  $_POST['title'];
         $username =  $_POST['username'];
         $firstname=  $_POST['firstname'];
         $lastname=  $_POST['lastname'];
         $image=  $_POST['image'];
         $phone=  $_POST['phone'];
         $email    = $_POST['email'];    
         $password = $_POST['password'];
         $instagram =$_POST['instagram'];
         $facebook =$_POST['facebook'];
         $twitter =$_POST['twitter'];
         $youtube =$_POST['youtube'];
         
         
      if(!empty($title) && !empty($username) && !empty($firstname) && !empty($lastname) && !empty($phone) && !empty($email) && !empty($password)){
          
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $password = md5($password);              
     
      if(preg_match('/^[\p{L} ]+$/u', $firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $lastname)) {
            
            
        $uppercase  = preg_match('@[A-Z]@', $password);
        $lowercase  = preg_match('@[a-z]@', $password);
        $number     = preg_match('@[0-9]@', $password);
        $character  = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $password);

        if(strlen($password) >= 8) {
        
        if(preg_match("/^[0-9]{10}$/", $phone)) {   
        
        $query = "INSERT INTO register (title,username,firstname,lastname,image,phone,email,password,instagram,facebook,twitter,youtube) ";
        $query .= "VALUES ('{$title}','{$username}','{$firstname}','{$lastname}','profile.jfif','{$phone}','{$email}','{$password}','instagram.com','facebook.com','twitter.com','youtube.com') ";
             
        $register_query = mysqli_query($connection,$query);
            
            move_uploaded_file($image_tempname,"images/$image");
      
        if(!$register_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
        }
            
          $_SESSION['status'] = "Registration Was Successful Please Sign In";   
            
            header("Location:login.php"); 
            
          }else{
              $message_phone = "Invalid Phone No";
            
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
          
          }else{
			  $message = "Fields cannot be Empty";
       }  
         
          }else {         
              $message = ""; 
       }

  ?>
  
    <!-- Navigation  -->
   <div class="card-body">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              </div>
              <center>
              <h2><p class="login-card-description">Register your account</p></h2>
        
            <form role="form" action="register.php" method="post" id="login-form" autocomplete="on">
                <h6 class="text-center" style="color:#ff0000"><?php echo $message; ?></h6>
            
       <div class="row">
          <div class="col-md-6">
             <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="title">Title</label>
                <input type="text" class="form-control" name="title">
             </div>  
          </div>
       </div>
       <br> 
       <div class="row">
          <div class="col-md-6">
             <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="title">Username</label>
                <input type="text" class="form-control" name="username">
             </div>  
          </div>
        </div>
         <br>
          <div class="form-group">
                <label for="title">Firstname</label>
                <input type="text" class="form-control" name="firstname">
          </div>
                <h6 class="text-center" style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
            <div class="form-group">
                <label for="title">Lastname</label>
                <input type="text" class="form-control" name="lastname">
            </div>
                <h6 class="text-center" style="color:#ff0000"><?php echo $message_Lastname; ?></h6>  
             <div class="form-group">
                <label for="phone">Phone no</label>
                <input type="phone no" class="form-control" name="phone">
            </div>   
                 <h6 class="text-center" style="color:#ff0000"><?php echo $message_phone; ?></h6> 
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@gmail.com">
            </div>
                <br>
            <div class="form-group">
                 <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="***********">
            </div>
                <h6 class="text-center" style="color:#ff0000"><?php echo $message_strnpassworad; ?></h6>
                <h6 class="text-center" style="color:#ff0000"><?php echo $message_password; ?></h6>
               <br>
               <span class="input-group-btn">  
                  <input type="submit" name="submit" id="btn-login" class="btn btn-block login-btn mb-4" value="Register">
              </span>
        </form> 
                <p class="login-card-footer-text">Already have an account? <a href="login.php" class="text-reset">Sign In</a></p>
                <nav class="login-card-footer-nav">
                </nav>
            </center> 
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>


		

