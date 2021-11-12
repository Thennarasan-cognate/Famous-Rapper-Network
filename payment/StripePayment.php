<?php
namespace PhpPot\Service;

 require_once 'vendor/stripe/autoload.php';

use \Stripe\Stripe;
use \Stripe\Customer;
use \Stripe\ApiOperations\Create;
use \Stripe\Charge;

// pk_live_51JupjFHjrwW0KMlJBovAaTLAdhLFg6D4rmAkFinvAoQj8oVogVKpZoeLXxaY9ZS13SfmdhTpTL49yNDtT6vMUjZH008roeTKGc

class StripePayment
{

    private $apiKey;

    private $stripeService;

    public function __construct()
    {
        require_once "config.php";
        $this->apiKey = sk_test_tR3PYbcVNZZ796tH88S4VQ2u;
        $this->stripeService = new \Stripe\Stripe();
        $this->stripeService->setVerifySslCerts(false);
        $this->stripeService->setApiKey($this->apiKey);
    }

    public function addCustomer($customerDetailsAry)
    {
        
        $customer = new Customer();
        
        $customerDetails = $customer->create($customerDetailsAry);
        
        return $customerDetails;
    }

    public function chargeAmountFromCard($cardDetails)
    {
        $customerDetailsAry = array(
            'email' => $cardDetails['email'],
            'source' => $cardDetails['token']
        );
        $customerResult = $this->addCustomer($customerDetailsAry);
        $charge = new Charge();
        $cardDetailsAry = array(
            'customer' => $customerResult->id,
            'amount' => $cardDetails['amount']*100 ,
            'currency' => $cardDetails['currency_code'],
            'description' => $cardDetails['item_name'],
            'metadata' => array(
                'order_id' => $cardDetails['item_number']
            )
        );
        $result = $charge->create($cardDetailsAry);

        return $result->jsonSerialize();
    }
}
