<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51JwfjlSJyD0TroTwCqR0Rq0uvCySpYj2GfA7h05fAJubRFPRmV8iTaXdr3rJeT0NDuwYDJmGQzWGNX9blurpuHtN00Wy5R1efB";

$secretKey="sk_test_51JwfjlSJyD0TroTwhE9S27g5Tl8b7aXzD7ohUpsIiRP1hG1qCVXSUUlui8WrR1EpBcfqjusk8eZMZr0lP7ScquI400f7mmaPIy";

\Stripe\Stripe::setApiKey($secretKey);
?>