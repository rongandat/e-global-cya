<?php /* Smarty version 2.6.18, created on 2012-03-29 05:37:45
         compiled from home/login_confirm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'dev_get_page_link', 'home/login_confirm.html', 2, false),)), $this); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form name="frmLoginConfirm" action="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_LOGIN_CONFIRM','ssl' => true), $this);?>
" method="post" >
<input name="action" value="process" type="hidden" />
<div align="right">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="650" id="AutoNumber1">
    <tr>
      <td width="100%" height="20">&nbsp;</td>
    </tr>
  </table>
</div>
<div align="center">
  <center>
<table cellpadding="2" cellspacing="0" border="0" width="580" style="border-collapse: collapse" bordercolor="#111111" >
	<tr>
	  <td  class="pageHeading" height="53" valign="top">
      <font color="#6666FF" face="Tahoma"><b>Login: Step 2</b></font></td>
	</tr>
</table>
  </center>
</div>
<br />
<div align="center">
  <center>
<table cellpadding="0" cellspacing="0" border="0" class="form_content" width="500" style="border-collapse: collapse" bordercolor="#111111">
<tr><td valign="top" width="281">

	<table cellpadding="0" cellspacing="0" border="0"   width="100%" height="55" >
		<tr><td height="28" valign="top"><font size="2" face="Tahoma">Your personal welcome message is:</font></td> </tr>			
		<tr><td height="27"><font face="Tahoma"><b><span class="contentTitle3"><?php echo $this->_tpl_vars['personal_welcome_message']; ?>
</span></b></font></td> </tr>			
	</table>
</td><td valign="middle" align="center" width="219" >
	<table cellpadding="0" cellspacing="0" border="0"  width="100%" >
		<tr><td><font size="2" face="Tahoma">Only Global Cash knows your custom welcome message. Fake web sites that want you to enter your login information on their fake login pages will not be able to show it.
<br /><br />
Close your browser and scan your computer for viruses if you do not see your custom welcome message during the login process.</font></td></tr>
	</table>	
</td></tr>
</table>
</center>
  </div>
<br />
<table cellpadding="2" cellspacing="2" border="0" width="100%" height="98" >
<tr ><td align="center"  class="contenButtons" height="92" valign="top"> 
  <font face="Tahoma"> <input  name="confirm_message" id="confirm_message" type="checkbox"    value="1"  onchange="checkConfirm();" /></font><font size="2" face="Tahoma"> I confirm that my custom welcome message is correct &nbsp;</font><input  type="submit" id="buttonContinue" class="button"  value="Continue"  disabled="disabled" /></td></tr>
</table>
</form>