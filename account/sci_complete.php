<?php
error_reporting(1);
userLoginCheck();
if (!tep_session_is_registered('payee_account') && tep_not_null($payee_account))
    tep_redirect(get_href_link(PAGE_TRANSFER));

$history_id = $_GET['transaction'];

$currency = get_currency($checkout_currency);
$balance = get_currency_value_format($checkout_amount, $currency);
$transfer_info['fees_text'] = get_currency_value_format($fees, $currency);

$smarty->assign('amount', $balance);
$smarty->assign('fees_text', $fees_text);
$smarty->assign('success_url', $success_url);
$smarty->assign('fail_url', $fail_url);
$smarty->assign('cancel_url', $cancel_url);
$smarty->assign('status_url', $status_url);
$smarty->assign('extra_fields', $extra_fields);

$sql_check = "SELECT account_name, firstname, lastname FROM " . _TABLE_USERS . " WHERE user_id='" . $login_userid . "' and account_number='" . $login_account_number . "'";
$user_check = db_query($sql_check);
$user_transfer = db_fetch_array($user_check);
$smarty->assign('user_transfer', $user_transfer);

$sql_user = "SELECT user_id,account_number,account_name FROM " . _TABLE_USERS . " WHERE account_number='" . $payee_account . "'";
$user_query = db_query($sql_user);

if (db_num_rows($user_query) == 0) {
    tep_redirect(get_href_link(PAGE_TRANSFER));
}

$user_to_info = db_fetch_array($user_query);
$smarty->assign('user_to_info', $user_to_info);

$history_query = db_query("SELECT * FROM " . _TABLE_TRANSACTIONS_HISTOTY . " WHERE history_id='" . $history_id . "'");

$history = db_fetch_array($history_query);

if (empty($history) || $history['transaction_status'] == 'error') {
    $smarty->assign('url', $fail_url);
} else {
    $smarty->assign('url', $success_url);
    $sql_transaction = "SELECT * FROM " . _TABLE_TRANSACTIONS . " WHERE transaction_id='" . $history['transaction_id'] . "'";
    $transaction_query = db_query($sql_transaction);
    $transaction = db_fetch_array($transaction_query);
    $smarty->assign('transaction', $transaction);
    $smarty->assign('history', $history);
}
$_html_main_content = $smarty->fetch('account/sci_complete.html');

