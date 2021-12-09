<?php

$stripe = new \Stripe\StripeClient(
  'sk_test_51JwfjlSJyD0TroTwhE9S27g5Tl8b7aXzD7ohUpsIiRP1hG1qCVXSUUlui8WrR1EpBcfqjusk8eZMZr0lP7ScquI400f7mmaPIy'
);
$stripe->paymentIntents->cancel(
  '$id',
  []
);

?>