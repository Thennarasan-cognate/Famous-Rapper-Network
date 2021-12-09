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

	// if($data['status']=='unsucceeded'){

		// Set your secret key. Remember to switch to your live secret key in production.
		// See your keys here: https://dashboard.stripe.com/apikeys

		// \Stripe\Stripe::setApiKey('sk_test_51JwfjlSJyD0TroTwhE9S27g5Tl8b7aXzD7ohUpsIiRP1hG1qCVXSUUlui8WrR1EpBcfqjusk8eZMZr0lP7ScquI400f7mmaPIy');

		// $re = \Stripe\Refund::create([
		//   'amount' => 1000,
		//   'payment_intent' => 'pi_Aabcxyz01aDfoo',
		// ]);

       // header( "Location: index.php?Artists_profile.php=1" );

	 // }else{

	echo "<pre>";
	print_r($data);
	// print_r($data['status']);
	// }
}
?>