
<?php session_start(); ?>

<?php
    
    
     $_SESSION['email'] = null;
     $_SESSION['firstname'] = null;
     $_SESSION['lastname'] = null;
     $_SESSION['image'] = null;
     $_SESSION['phone'] = null;

    header("Location:Member-Login.php");


?>
    
     