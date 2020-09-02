<?php
    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-8698162945950227-060506-ae0c2b04a50b5ff6b1dcdb7f8039f10b-53340008");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = (float)$_POST['transactionAmount'];
    $payment->token = $_POST['token'];
    $payment->description = $_POST['description'];
    $payment->installments = 1;
    $payment->payment_method_id = $_POST['paymentMethodId'];
    $payment->issuer_id = (int)$_POST['issuer'];

    $payer = new MercadoPago\Payer();
    $payer->email = $_POST['email'];
    $payer->identification = array( 
        "type" => $_POST['docType'],
        "number" => $_POST['docNumber']
    );
    $payment->payer = $payer;

    $payment->save();

    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id,
        'codigo' => 10
    );
    echo json_encode($response);

?>