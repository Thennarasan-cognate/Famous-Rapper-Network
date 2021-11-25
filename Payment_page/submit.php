<?php
session_start();
include "../db.php";
// require('config.php');
?>

<?php
require('config.php');

// $_SESSION['Name'] = $Name;

if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>1000,
		"currency"=>"inr",
		"description"=>"Upgrade with".' '. $Name ,
		"source"=>$token,

	));

	if($data['status']=='unsucceeded'){

       header( "Location: index.php?Artists_profile.php=1" );

	}else{

	echo "<pre>";
	print_r($data);
	// echo json_encode($data['status']);
	// print_r($data['status']);
	}
}
?>