<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(0);
include('includes/page_init.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fields = $_POST;
    if (empty($fields['batch_number'])) {
        echo 'ERROR : Bath number is not exists';
        exit();
    }

    $sql_check = "SELECT * FROM " . _TABLE_TRANSACTIONS_HISTOTY . " WHERE batch_number='" . $fields['batch_number'] . "'";
    $history_check = db_query($sql_check);
    $history = db_fetch_array($history_check);
    if (empty($history)) {
        echo 'ERROR : Bath number id not exists';
        exit();
    }
   
    if($history['from_account'] != $fields['payer_account']){
        echo 'ERROR : Transfer acount invalid';
        exit();
    }
    
    if($history['to_account'] != $fields['payee_account']){
        echo 'ERROR : To acount invalid';
        exit();
    }
    
    if($history['amount'] != $fields['checkout_amount']){
        echo 'ERROR : Amount error';
        exit();
    }
    if($history['transaction_status'] != $fields['transaction_status']){
        echo 'ERROR : Tranasction status invalid';
        exit();
    }
    if($history['transaction_currency'] != $fields['transaction_currency']){
        echo 'ERROR : Tranasction currency invalid';
        exit();
    }

    echo 'SUCCESS';
} else {
    echo 'ERROR';
    exit();
}

// MAIN PAGE CONTENT
?>
