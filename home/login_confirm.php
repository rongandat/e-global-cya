<?php
	if (!tep_session_is_registered('login_account_number') && tep_not_null($login_account_number)) tep_redirect(get_href_link(PAGE_LOGIN));
	// get persional Welcome Message
	$welcome_message	=	db_fetch_array(db_query("SELECT welcome_message FROM "._TABLE_USERS." WHERE account_number='".$login_account_number."'"));
	$smarty->assign('personal_welcome_message', $welcome_message['welcome_message']);
	
	if ($_POST['action']=='process') {
		if ($_POST['confirm_message']==1) {	//make sure correct personal welcome message 
			tep_redirect(get_href_link(PAGE_LOGIN_BALANCE));
		}
	}
	
	$smarty->assign('validerrors',$validator->errors);		
	$_html_main_content = $smarty->fetch('home/login_confirm.html');
?>