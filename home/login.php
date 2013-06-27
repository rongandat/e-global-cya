<?php

$smarty->assign('action_login', get_href_link(PAGE_LOGIN, 'action=login'));

if ($_POST['action'] == 'process') {
    $account_number = db_prepare_input($_POST['account_number']);
    $login_password = db_prepare_input($_POST['password']);
    $security_code = db_prepare_input($_POST['security_code']);

    if ($security_code == $secure_image_hash_string) {
        $validator->validateGeneral('Account Number', $account_number, _ERROR_FIELD_EMPTY);
        $validator->validateGeneral('Password', $login_password, _ERROR_FIELD_EMPTY);
    } else {
        $validator->addError('Turing Number', ERROR_SECURE_CODE_WRONG);
    }

    if (count($validator->errors) == 0) {

        $sql_user = "SELECT user_id,  email,password FROM " . _TABLE_USERS . " WHERE account_number='" . $account_number . "'";
        $user_query = db_query($sql_user);
        if (db_num_rows($user_query) > 0) { // email passed
            // check password
            $user_info = db_fetch_array($user_query);


            if (!validate_password($login_password, $user_info['password'])) { // wrong password
                $validator->addError('Account Number/Password', ERROR_INVALID_ACCOUNT);
            } else { // password passed ==> correct account					
                $login_userid = $user_info['user_id'];
                $login_account_number = $account_number;
                $login_useremail = $user_info['email'];


                tep_session_register('login_userid');
                tep_session_register('login_account_number');
                tep_session_register('login_useremail');

                // set cookies for autologin

                if ($_POST['remember_me']) {

                    tep_setcookie("account_number", $account_number, time() + 60 * 60 * 24 * 100, HTTP_COOKIE_PATH, HTTP_COOKIE_DOMAIN);
                    tep_setcookie("password", $login_password, time() + 60 * 60 * 24 * 100, HTTP_COOKIE_PATH, HTTP_COOKIE_DOMAIN);
                }


                if (sizeof($navigation->snapshot) > 0) {

                    $origin_href = get_href_link($navigation->snapshot['page'], tep_array_to_string($navigation->snapshot['get'], array(tep_session_name())), $navigation->snapshot['mode']);
                    $navigation->clear_snapshot();
                    tep_redirect($origin_href);
                } else {
                    tep_redirect(get_href_link(PAGE_LOGIN_CONFIRM));
                }
            }
        } else {
            $validator->addError(ERROR_FIELD_LOGIN, ERROR_INVALID_ACCOUNT);
        }

        if (count($validator->errors) == 0) { // create new user
        } else {
            postAssign($smarty);
            $smarty->assign('validerrors', $validator->errors);
        }
    }
}

$smarty->assign('validerrors', $validator->errors);
$_html_main_content = $smarty->fetch('home/login.html');
?>