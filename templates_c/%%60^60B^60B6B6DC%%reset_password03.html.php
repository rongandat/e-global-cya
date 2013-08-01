<?php /* Smarty version 2.6.18, created on 2013-08-01 04:09:48
         compiled from home/reset_password03.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'dev_get_page_link', 'home/reset_password03.html', 1, false),)), $this); ?>
<form name="frmReset" action="<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_RESET_PASSWORD','ssl' => true), $this);?>
" method="post" >
<input name="action" value="process3" type="hidden" />
<input name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" type="hidden" />
<input name="account_number" value="<?php echo $this->_tpl_vars['account_number']; ?>
" type="hidden" />

<table cellpadding="2" cellspacing="2" border="0" width="100%" >
	<tr>
	  <td  class="pageHeading">Account Reset Wizard: Step 3/3</td>
	</tr>
	<tr><td><i>Please make sure this password is different than the one you use in your email. Do not use your email password on any web site!</i>
    <br />Please use strong passwords. Here is an example: Av&amp;6l@3sBp</td></tr>	
</table>
<br />
	<table cellpadding="0" cellspacing="0" border="0" class="form_content">
		<tr>
		  <td  colspan="2"><i><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['_TEMPLATE_SOURCE_DIR'])."/modules/validate_error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></i>
          <br />
          </td>
		</tr>
	<tr>
	  <td class="form_label"><i>*</i>New Password:</td>
	  <td class="form_field"><input  name="Password" type="password"  maxlength="32"  value="<?php echo $this->_tpl_vars['password']; ?>
"  class="inputtext" /></td>
	</tr>	
	<tr>
      <td class="form_label"><i>*</i>Confirm New Password:</td>		
      <td class="form_field"><input  name="Password2" type="password" maxlength="32" value="<?php echo $this->_tpl_vars['password2']; ?>
"  class="inputtext"/></td>
	</tr>	
	
 </table>	    

<font size="2" face="Tahoma">	  
<br />
</font>
<table cellpadding="2" cellspacing="2" border="0" width="100%" >
<tr ><td align="center"  class="contenButtons"><font face="Tahoma">
<input  type="submit" name="buttonNext" class="button"  value="Verify"  onclick="redirect('<?php echo smarty_function_dev_get_page_link(array('page' => 'PAGE_GET_PASSWORD','ssl' => true), $this);?>
')"/></font></td></tr>
</table>
</form>