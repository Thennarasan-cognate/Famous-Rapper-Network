<?php

use \PhpPot\Service\StripePayment;

// require_once "config.php";

if (!empty($_POST["token"])) {
    require_once 'StripePayment.php';
    $stripePayment = new StripePayment();
    
      // $stripeResponse = $stripePayment->chargeAmountFromCard($_POST);
    
      $stripeResponse = "10";

    require_once "DBController.php";
    $dbController = new DBController();
    
    $amount = $stripeResponse["amount"]/100;
    
    $param_type = 'ssdssss';
    $param_value_array = array(
         $_POST['name'],
        $_POST['item_number'],
        $amount,
        $stripeResponse["currency"],
        $stripeResponse["balance_transaction"],
        $stripeResponse["status"],
        json_encode($stripeResponse)
    );
    $query = "INSERT INTO payment (name, item_number, amount, currency_code, txn_id, payment_status, payment_response) values (?, ?, ?, ?, ?, ?, ?)";
    $id = $dbController->insert($query, $param_type, $param_value_array);
    
    if ($stripeResponse['amount_refunded'] == 0 && empty($stripeResponse['failure_code']) && $stripeResponse['paid'] == 1 && $stripeResponse['captured'] == 1 && $stripeResponse['status'] == 'succeeded') {}
        $successMessage = "Stripe payment is completed successfully. The TXN ID is " . $stripeResponse["balance_transaction"];
    
}
// print $stripeResponse ."<br>";
// print $amount ."<br>";
// print $stripeResponse['amount_refunded'] ."<br>";
// print $stripeResponse['failure_code'] ."<br>";
// print $stripeResponse['paid'] ."<br>";
// print $stripeResponse['captured'] ."<br>";
// print $stripeResponse['status'] ."<br>";
// print $customerDetails ."<br>";
// print $cardDetails['currency_code'];
?>

<!-- <style>
.FormFieldInput-Icons, .FormFieldInput-IconsIcon {
    pointer-events: none;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    z-index: 3;
}

.CheckoutInput {
    position: relative;
    width: 100%;
    height: 44px;
    padding: 8px 12px;
    color: rgba(26,26,26,.9);
    font-size: 16px;
    line-height: 1.5;
    border: 0;
    box-sizing: border-box;
    box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgb(0 0 0 / 7%), 0 1px 1.5px 0 rgb(0 0 0 / 5%);
    transition: box-shadow .08s ease-in,color .08s ease-in,filter 50000s;
    background: #fff;
    appearance: none;
}

</style> -->


<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/ >
<title>Payment Page</title>
</head>
<body>
    <h4>Pay with card</h4>
     <?php if(!empty($successMessage)) { ?>
    <div id="success-message"><?php echo $successMessage; ?></div>
    <?php  } ?>
    <div id="error-message"></div>
                
            <form id="frmStripePayment" action="" method="post">
                <div class="field-row">
                    <label>Card Holder Name</label> <span
                        id="card-holder-name-info" class="info"></span><br>
                    <input type="text" id="name" name="name"
                        class="demoInputBox">
                </div>
                <!-- <div class="field-row">
                    <label>Email</label> <span id="email-info"
                        class="info"></span><br> <input type="text"
                        id="email" name="email" class="demoInputBox">
                </div> -->
                <div class="field-row">
                    <label>Card Number</label> <span
                        id="card-number-info" class="info"></span><br> <input
                        type="text" id="card-number" name="card-number"
                        class="demoInputBox">
                </div>
                <!-- <div class="FormFieldInput">
                     <label>Card Number</label> 
                    <div class="CheckoutInputContainer">
                        <span class="InputContainer" data-max="">
                            <input class="CheckoutInput CheckoutInput--tabularnums Input Input--empty" autocomplete="cc-number" autocorrect="off" spellcheck="false" id="cardNumber" name="cardNumber" type="text" inputmode="numeric" aria-label="Card number" placeholder="1234 1234 1234 1234" aria-invalid="false" value="">
                        </span>
                    </div>
                    <div class="FormFieldInput-Icons" style="opacity: 1;">
                        <div style="transform: none;">
                            <span class="FormFieldInput-IconsIcon is-visible"><img src="https://js.stripe.com/v3/fingerprinted/img/visa-365725566f9578a9589553aa9296d178.svg" alt="visa" class="BrandIcon">
                            </span>
                        </div>
                        <div style="transform: none;">
                            <span class="FormFieldInput-IconsIcon is-visible">
                                <img src="https://js.stripe.com/v3/fingerprinted/img/mastercard-4d8844094130711885b5e41b28c9848f.svg" alt="mastercard" class="BrandIcon">
                            </span>
                        </div>
                        <div style="transform: none;">
                            <span class="FormFieldInput-IconsIcon is-visible">
                                <img src="https://js.stripe.com/v3/fingerprinted/img/amex-a49b82f46c5cd6a96a6e418a6ca1717c.svg" alt="amex" class="BrandIcon">
                            </span>
                        </div>
                        <div class="CardFormFieldGroupIconOverflow">
                            <span class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--invisible" role="presentation">
                                <span class="FormFieldInput-IconsIcon" role="presentation">
                                    <img src="https://js.stripe.com/v3/fingerprinted/img/unionpay-8a10aefc7295216c338ba4e1224627a1.svg" alt="unionpay" class="BrandIcon">
                                </span>
                            </span>
                            <span class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--visible" role="presentation">
                                <span class="FormFieldInput-IconsIcon" role="presentation">
                                    <img src="https://js.stripe.com/v3/fingerprinted/img/jcb-271fd06e6e7a2c52692ffa91a95fb64f.svg" alt="jcb" class="BrandIcon"></span>
                                </span>
                                <span class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--invisible" role="presentation">
                                    <span class="FormFieldInput-IconsIcon" role="presentation"><img src="https://js.stripe.com/v3/fingerprinted/img/discover-ac52cd46f89fa40a29a0bfb954e33173.svg" alt="discover" class="BrandIcon">
                                    </span>
                                </span>
                                <span class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--invisible" role="presentation">
                                    <span class="FormFieldInput-IconsIcon" role="presentation">
                                        <img src="https://js.stripe.com/v3/fingerprinted/img/diners-fbcbd3360f8e3f629cdaa80e93abdb8b.svg" alt="diners" class="BrandIcon">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div> -->
                <div class="field-row">
                    <div class="contact-row column-right">
                        <label>Expiry Month / Year</label> <span
                            id="userEmail-info" class="info"></span><br>
                        <select name="month" id="month"
                            class="demoSelectBox">
                            <option value="08">08</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select> <select name="year" id="year"
                            class="demoSelectBox">
                            <option value="18">2018</option>
                            <option value="19">2019</option>
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>
                            <option value="25">2025</option>
                            <option value="26">2026</option>
                            <option value="27">2027</option>
                            <option value="28">2028</option>
                            <option value="29">2029</option>
                            <option value="30">2030</option>
                        </select>
                    </div>
                    <div class="contact-row cvv-box">
                        <label>CVC</label> <span id="cvv-info"
                            class="info"></span><br> <input type="text"
                            name="cvc" id="cvc"
                            class="demoInputBox cvv-input">
                    </div>
                </div>
                <div>
                    <input type="submit" name="pay_now" value="Submit"
                        id="submit-btn" class="btnAction"
                        onClick="stripePay(event);">

                    <div id="loader">
                        <img alt="loader" src="LoaderIcon.gif">
                    </div>
                </div>
                <input type='hidden' name='amount' value="10">
                <input type='hidden' name='currency_code'>
                <input type='hidden' name='item_name' value='Test Product'>
                <input type='hidden' name='item_number' value='PHPPOTEG#1'>
            </form>
    <div class="test-data">
        <h3>Test Card Information</h3>
        <!-- <p>Use these test card numbers with valid expiration month
            / year and CVC code for testing with this demo.</p> -->
        <table class="tutorial-table" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <th>CARD NUMBER</th>
                <th>BRAND</th>
            </tr>
            <tr>
                <td>4242424242424242</td>
                <td>Visa</td>
            </tr>
            <tr>
                <td>4000056655665556</td>
                <td>Visa (debit)</td>
            </tr>
            
            <tr>
                <td>5555555555554444</td>
                <td>Mastercard</td>
            </tr>
            
            <tr>
                <td>5200828282828210</td>
                <td>Mastercard (debit)</td>
            </tr>
            
            <!-- <tr>
                <td>378282246310005</td>
                <td>American Express</td>
            </tr>
            
            <tr>
                <td>6011111111111117</td>
                <td>Discover</td>
            </tr>
            
            <tr>
                <td>30569309025904</td>
                <td>Diners Club</td>
            </tr>
            
            <tr>
                <td>3566002020360505</td>
                <td>JCB</td>
            </tr>
            <tr>
                <td>6200000000000005</td>
                <td>UnionPay</td>
            </tr> -->
            
        </table>
    </div>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script> -->
    <script>
function cardValidation () {
    var valid = true;
    var name = $('#name').val();
    // var email = $('#email').val();
    var cardNumber = $('#card-number').val();
    var month = $('#month').val();
    var year = $('#year').val();
    var cvc = $('#cvc').val();

    $("#error-message").html("").hide();

    if (name.trim() == "") {
        valid = false;
    }
    // if (email.trim() == "") {
    // 	   valid = false;
    // }
    if (cardNumber.trim() == "") {
    	   valid = false;
    }

    if (month.trim() == "") {
    	    valid = false;
    }
    if (year.trim() == "") {
        valid = false;
    }
    if (cvc.trim() == "") {
        valid = false;
    }

    if(valid == false) {
        $("#error-message").html("All Fields are required").show();
    }

    return valid;
}
//set your publishable key
Stripe.setPublishableKey("<?php echo pk_test_51JwfjlSJyD0TroTwCqR0Rq0uvCySpYj2GfA7h05fAJubRFPRmV8iTaXdr3rJeT0NDuwYDJmGQzWGNX9blurpuHtN00Wy5R1efB; ?>");

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        //enable the submit button
        $("#submit-btn").show();
        $( "#loader" ).css("display", "none");
        //display the errors on the form
        $("#error-message").html(response.error.message).show();
    } else {
        //get token id
        var token = response['id'];
        //insert the token into the form
        $("#frmStripePayment").append("<input type='hidden' name='token' value='" + token + "' />");
        //submit form to the server
        $("#frmStripePayment").submit();
    }
}
function stripePay(e) {
    e.preventDefault();
    var valid = cardValidation();

    if(valid == true) {
        $("#submit-btn").hide();
        $( "#loader" ).css("display", "inline-block");
        Stripe.createToken({
            number: $('#card-number').val(),
            cvc: $('#cvc').val(),
            exp_month: $('#month').val(),
            exp_year: $('#year').val()
        }, stripeResponseHandler);

        //submit from callback
        return false;
    }
}
</script>
</body>
</html>