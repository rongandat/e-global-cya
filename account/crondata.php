<?php

$sql_history = "SELECT * FROM " . _TABLE_TRANSACTIONS_HISTOTY . " WHERE transaction_status='completed'";
$history_query = db_query($sql_history);
while ($history = db_fetch_array($history_query)) {
    $history_id = $history['history_id'];
    $currency = get_currency($history['transaction_currency']);
    $balance = get_currency_value_format($history['amount'], $currency);
    $transfer_info['fees_text'] = get_currency_value_format($history['fee'], $currency);

    $sql_check = "SELECT account_name, firstname, lastname FROM " . _TABLE_USERS . " WHERE user_id='" . $history['from_userid'] . "'";
    $user_check = db_query($sql_check);
    $user_transfer = db_fetch_array($user_check);
    $smarty->assign('user_transfer', $user_transfer);

    $sql_user = "SELECT user_id,account_number,account_name FROM " . _TABLE_USERS . " WHERE user_id='" . $history['to_userid'] . "'";
    $user_query = db_query($sql_user);
    if (db_num_rows($user_query) > 0) {
        if (!empty($history['status_url'])) {
            $dataPost = array(
                'payee_account' => $history['to_account'],
                'payer_account' => $history['from_account'],
                'checkout_amount' => $history['amount'],
                'checkout_currency' => $history['transaction_currency'],
                'batch_number' => $history['batch_number'],
                'transaction_status' => $history['transaction_status'],
                'transaction_currency' => $history['transaction_currency'],
            );
            $extra_fields = unserialize($history['extra_fields']);
            $dataPost = array_merge($extra_fields, $dataPost);
            if ($history['status_method'] == 'GET')
                $results = curl_get($history['status_url'], $dataPost);
            else
                $results = curl_post($history['status_url'], $dataPost);
            if ($results) {
                $sql_delete = "DELETE  FROM " . _TABLE_TRANSACTIONS_HISTOTY . " WHERE history_id='" . $history_id . "'";
                db_query($sql_delete);
            } else {
               
                if (strtotime($history['transaction_time']) < strtotime("-2 day")) {
                    $sql_delete = "DELETE  FROM " . _TABLE_TRANSACTIONS_HISTOTY . " WHERE history_id='" . $history_id . "'";
                    db_query($sql_delete);
                }
            }
        } else {
            $sql_delete = "DELETE  FROM " . _TABLE_TRANSACTIONS_HISTOTY . " WHERE history_id='" . $history_id . "'";
            db_query($sql_delete);
            if (!empty($history['success_url']))
                $smarty->assign('url', $history['success_url']);
        }
    }
}

function curl_post($url, $fields) {
    //url-ify the data for the POST
    $fields_string = '';
    foreach ($fields as $key => $value) {
        $fields_string .= $key . '=' . $value . '&';
    }
    rtrim($fields_string, '&');

//open connection
    $ch = curl_init();

//set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute post
    $result = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//close connection
    curl_close($ch);
    if ($httpcode >= 200 && $httpcode < 300) {
        return $result;
    } else {
        return false;
    }
}

function curl_get($url, $fields) {
    //url-ify the data for the POST
    $fields_string = '';
    foreach ($fields as $key => $value) {
        $fields_string .= $key . '=' . $value . '&';
    }
    rtrim($fields_string, '&');

//open connection
    $ch = curl_init();
    $url .= '?' . $fields_string;
//set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute post
    $result = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//close connection
    curl_close($ch);
    if ($httpcode >= 200 && $httpcode < 300) {
        return $result;
    } else {
        return false;
    }
}

?>
