<?php
# ----------------------------------------------------
# -----
# ----- This script was generated by PHP-Form Wizard 1.2.6 on 2010/07/17 at 19:39:38
# -----
# ----- http://www.tools4php.com
# -----
# ----------------------------------------------------


// Receiving variables
@$pfw_ip= $_SERVER['REMOTE_ADDR'];
@$Name = addslashes($_POST['Name']);
@$email = addslashes($_POST['email']);
@$ctl00cp1dlCateg = addslashes($_POST['ctl00$cp1$dlCateg']);
@$Account = addslashes($_POST['Account']);
@$Subject = addslashes($_POST['Subject']);
@$Comment = addslashes($_POST['Comment']);

// Validation
if (strlen($Name) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($email) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($Subject) == 0 )
{
header("Location: error.htm");
exit;
}

if (strlen($Comment) == 0 )
{
header("Location: error.htm");
exit;
}

//Sending Email to form owner
$pfw_header = "From: $email\n"
  . "Reply-To: $email\n";
$pfw_subject = "Contact Form";
$pfw_email_to = "admin@e-globalcash.com";
$pfw_message = "Visitor's IP: $pfw_ip\n"
. "Name: $Name\n"
. "email: $email\n"
. "ctl00cp1dlCateg: $ctl00cp1dlCateg\n"
. "Account: $Account\n"
. "Subject: $Subject\n"
. "Comment: $Comment\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

header("Location: completad.htm");

?>
