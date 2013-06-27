<?php /* Smarty version 2.6.18, created on 2012-03-28 22:20:35
         compiled from home/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'dev_get_page_link', 'home/login.html', 2, false),)), $this); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form name="frmLogin" action="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_LOGIN','ssl' => true), $this);?>
" method="post" >
<input name="action" value="process" type="hidden" />
          <div align="right">
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="650" id="AutoNumber35">
              <tr>
                <td width="100%" height="20">&nbsp;</td>
              </tr>
              </table>
          </div>
          <div align="center">
            <center>
            <table border="0" cellPadding="2" width="580" style="border-collapse: collapse" bordercolor="#111111" cellspacing="0" height="160">
              <tr>
                <td class="pageHeading" height="53" valign="top"><b>
                <font face="Tahoma" color="#6666FF">Login: Step 1</font></b></td>
              </tr>
              <tr>
                <td height="49" valign="top"><font size="2" face="Tahoma">You 
                are now on the login page of your Global Cash account. 
                Please provide your login details to see your custom welcome 
                message and to continue login process.</font></td>
              </tr>
              <tr>
                <td  valign="top"><font size="2" face="Tahoma">Fields 
                marked with asterisk (<font color="#FF0000">*</font>) are 
                required.</font></td>
              </tr>
			<tr>
		  <td ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['_TEMPLATE_SOURCE_DIR'])."/modules/validate_error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>			  
            </table>
            </center>
          </div>
          <div align="center">
            <center>
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="580" id="AutoNumber36" height="136">
              <tr>
                <td width="138" valign="top" height="32"><font face="Tahoma">
                <font size="2"><font color="#FF0000">*</font>Account Number:<br>
                </font>
                <a href="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_ACCOUNT_REMIND','ssl' => true), $this);?>
">
                <font size="2">(forgot it?)</font></a></font></td>
                <td width="442" valign="top" height="32"><font face="Tahoma">
                <input class="inputtext" type="text" name="account_number" size="20"></font></td>
              </tr>
              <tr>
                <td width="138" valign="top" height="48">&nbsp;</td>
                <td width="442" valign="top" height="48"><font face="Tahoma">
                <input value="1" type="checkbox" name="remember_me"></font><font size="2" face="Tahoma"> 
                remember my account on this computer (not recommended for public 
                computers)</font></td>
              </tr>
              <tr>
                <td width="138" valign="top" height="56"><font face="Tahoma">
                <font size="2"><font color="#FF0000">*</font>Password:<br>
                </font>
                <a href="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_RESET_PASSWORD','ssl' => true), $this);?>
">
                <font size="2">(forgot it?)</font></a></font></td>
                <td width="442" valign="top" height="56">
                <input class="inputtext" value type="password" name="password" size="20"></td>
              </tr>
            </table>
            </center>
          </div>
          <div align="center">
            <center>
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="580" id="AutoNumber37" height="41">
              <tr>
                <td width="100%" height="41" valign="top"><font face="Tahoma">
                <font size="2">Do not have account yet? </font>
                <a href="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_SIGNUP','ssl' => true), $this);?>
">
                <font size="2">Please Register</font></a></font></td>
              </tr>
            </table>
            </center>
          </div>
          <div align="center">
            <center>
            <table border="0" cellPadding="2" width="580" style="border-collapse: collapse" bordercolor="#111111" cellspacing="0" height="176">
              <tr>
                <td height="172" valign="top">
                <p align="left"><font face="Tahoma"><strong><font size="2">Enter 
                the code (turing number) shown on the image</font></strong><font size="2">
                <br>
                Cannot read the numbers? Click on it to get a new one.<br>
                <a href="javascript: refreshSecureImage();">
                <img id="secure_image" border="0" src="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_SECUREIMAGE','ssl' => true), $this);?>
"></a><br>
                </font><input class="inputtext" name="security_code" size="20"></font><font size="2" face="Tahoma">
                <br>
                <a class="link" href="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_CONTACT_US','ssl' => true), $this);?>
">
                Cannot see Turing number at all?</a> </font></td>
              </tr>
            </table>
            </center>
          </div>
          <table border="0" cellSpacing="2" cellPadding="2" width="100%">
            <tr>
              <td class="contenButtons" align="middle">
              <input class="button" value="Next" type="submit" name="buttonNext"></td>
            </tr>
          </table>
          <div align="center">
            <center>
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="650" id="AutoNumber34">
              <tr>
                <td width="100%">&nbsp;</td>
              </tr>
            </table>
            </center>
          </div>
          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber14">
            <tr>
              <td width="100%">&nbsp;</td>
            </tr>
          </table>
</form>