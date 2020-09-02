<?php
    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-8698162945950227-060506-ae0c2b04a50b5ff6b1dcdb7f8039f10b-53340008");

    echo("objeto creado");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 100;
    $payment->description = "Título del producto";
    $payment->payment_method_id = "rapipago";
    $payment->payer = array(
      "email" => "test_user_19653727@testuser.com"
    );

    $payment->save();
    
    echo($payment);
?>