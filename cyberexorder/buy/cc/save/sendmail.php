<?php
# ----------------------------------------------------
# -----
# ----- This script was generated by PHP-Form Wizard 1.2.5 on 2009/01/22 at 15:19:26
# -----
# ----- http://www.tools4php.com
# -----
# ----------------------------------------------------


// Receiving variables
@$pfw_ip= $_SERVER['REMOTE_ADDR'];
@$amount = addslashes($_POST['amount']);
@$credit_card_type = addslashes($_POST['credit_card_type']);
@$card_name = addslashes($_POST['card_name']);
@$card_no = addslashes($_POST['card_no']);
@$mm = addslashes($_POST['mm']);
@$yy = addslashes($_POST['yy']);
@$csc = addslashes($_POST['csc']);
@$firstname = addslashes($_POST['firstname']);
@$lastname = addslashes($_POST['lastname']);
@$co_name = addslashes($_POST['co_name']);
@$street1 = addslashes($_POST['street1']);
@$street2 = addslashes($_POST['street2']);
@$city = addslashes($_POST['city']);
@$state = addslashes($_POST['state']);
@$zip = addslashes($_POST['zip']);
@$country = addslashes($_POST['country']);
@$phone_no = addslashes($_POST['phone_no']);
@$email = addslashes($_POST['email']);
@$ccmail = addslashes($_POST['ccmail']);
@$ecurrency_number = addslashes($_POST['ecurrency_number']);

// Validation
if (strlen($amount) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($card_name) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($card_no) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($csc) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($firstname) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($street1) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($city) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($zip) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($phone_no) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($email) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($ecurrency_number) == 0 )
{
header("Location: error.htm");
exit;
}

//Sending Email to form owner
$pfw_header = "From: $email\n"
  . "Reply-To: $email\n";
$pfw_subject = "Card payment information";
$pfw_email_to = "admin@cyberex.jp";
$pfw_message = "Visitor's IP: $pfw_ip\n"
. "amount: $amount\n"
. "credit_card_type: $credit_card_type\n"
. "card_name: $card_name\n"
. "card_no: $card_no\n"
. "mm: $mm\n"
. "yy: $yy\n"
. "csc: $csc\n"
. "firstname: $firstname\n"
. "lastname: $lastname\n"
. "co_name: $co_name\n"
. "street1: $street1\n"
. "street2: $street2\n"
. "city: $city\n"
. "state: $state\n"
. "zip: $zip\n"
. "country: $country\n"
. "phone_no: $phone_no\n"
. "email: $email\n"
. "ccmail: $ccmail\n"
. "ecurrency_number: $ecurrency_number\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

//Sending auto respond Email to visitor
$pfw_header = "From: admin@cyberex.jp\n"
  . "Reply-To: admin@cyberex.jp\n";
$pfw_subject = "Your order process has been Approved !!";
$pfw_email_to = "$email";
$pfw_message = "Dear $lastname\n"
. "\n"
. "We review and make your card payment with your information. \n"
. "please remind and check again credit or Debit card payment notifications\n"
. "\n"
. "\n"
. "***** Important Notice **************\n"
. "\n"
. "Over $500 purchased transaction, need verification process following this steps\n"
. "\n"
. "1. Send FAX or Scan attached email to us your ID (Passport or Local government issued ID such as drivers license)\n"
. "\n"
. "2. Send FAX or Scan attached email to us your Credit or Debit card recent bill statement copy (within last 3 month). You may cover some card number and expire date important thinks etc.\n"
. "\n"
. "We will sent these verification instruction once your card transaction completed. if your verification process has not yet, we never sent e-currency and your exchange transaction has never completed. these process to block and charge back by third party fraudulent transaction. we hope you understand and cooperate. Thank you!!\n"
. "\n"
. "\n"
. "To check your order status and transaction on this page\n"
. "\n"
. "https://cyberex.jp/tracking/\n"
. "\n"
. "\n"
. "Thanks and best regards\n"
. "\n"
. "+--------------------------------------+\n"
. "Escrow, Inc.\n"
. "Cyber Exchange Service Japan\n"
. "http://www.cyberex.jp/\n"
. "Japan E-gold Exchange Service\n"
. "http://www.e-goldex.jp/\n"
. "Phone: (+81)3-3835-3568\n"
. "Skype: e-goldex.jp  ICQ: 461063987\n"
. "+--------------------------------------+\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

header("Location: completed.htm");

?>
