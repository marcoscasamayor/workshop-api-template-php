<?php
    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-8698162945950227-060506-ae0c2b04a50b5ff6b1dcdb7f8039f10b-53340008");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 107;
    $payment->description = "Celular caro";
    $payment->payment_method_id = "rapipago";
    $payment->payer = array("email" => "marcos.casamayor@gmail.com");
  
    $payment->save();
  

    echo($payment);
?>