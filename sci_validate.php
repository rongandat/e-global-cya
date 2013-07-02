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
        echo 'ERROR';
        exit();
    }

    $sql_check = "SELECT * FROM " . _TABLE_TRANSACTIONS_HISTOTY . " WHERE batch_number='" . $fields['batch_number'] . "' AND from_account='" . $fields['from_account'] . "' AND to_account='" . $fields['to_account'] . "' AND transaction_status='" . $fields['transaction_status'] . "' AND transaction_currency='" . $fields['transaction_currency'] . "' AND amount='" . $fields['amount'] . "'";
    $history_check = db_query($sql_check);
    $history = db_fetch_array($history_check);
    if (!empty($history)) {
        echo 'ERROR';
        exit();
    }

    echo 'SUCCESS';
} else {
    echo 'ERROR';
    exit();
}

// MAIN PAGE CONTENT
?>
