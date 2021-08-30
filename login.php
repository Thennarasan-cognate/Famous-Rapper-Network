<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cognate</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
</head>
<body> 
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
               $db_email = $row['email'];
               $db_password = $row['password'];
               $db_firstname = $row['firstname'];
               $db_lastname = $row['lastname'];
               $db_image = $row['image'];
              
          }
        
        
        if($email === $db_email){
        if($password === $db_password){
     
            
             $_SESSION['email'] = $db_email;
             $_SESSION['firstname'] = $db_firstname;
             $_SESSION['lastname'] = $db_lastname;
             $_SESSION['image'] = $db_image;

//             header("Location:profile.php");
            echo "login Successful";
           
        }else{
            
            $message_password = "Incorrect password";
        }
         
        }else{
            $message_email = "Invalid email";   
              
        }
        
        }
   ?>  
    
     
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              </div>
              <p class="login-card-description">Sign in into your account</p>
              
               <h5  style="color:darkgreen"> 
               <?php
                
                if(isset($_SESSION['status'])){
                    
                    echo $_SESSION['status'];
                }
                
                ?>
                </h5>
                
                <form action=""method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email address">
                </div>
                    <h6 class="text-center" style="color:#ff0000"><?php echo $message_email; ?></h6> 
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="***********">
                      
                  </div>
                     <h6 class="text-center" style="color:#ff0000"><?php echo $message_password; ?></h6> 
                
                  
                  <span class="input-group-btn">
                        <button class="btn btn-block login-btn mb-4" name="submit" type="submit" id ="submit">login</button>
                  </span>
                </form>
                
                
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                </nav>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
    
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
