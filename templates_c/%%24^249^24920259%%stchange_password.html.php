<?php /* Smarty version 2.6.18, created on 2013-08-01 04:52:58
         compiled from account/settings/stchange_password.html */ ?>
<?php echo '
<style type="text/css">

    a.linkAction {
        background-color: #009900;
        border: 1px solid #006600;
        color: #FFFFFF;
        font-size: 11px;
        padding: 3px;
        text-decoration: none;
    }
    td.form_field{
        padding: 5px 0
    }
</style>
'; ?>

<form name="frmPersonal" method="post" action="<?php echo $this->_tpl_vars['HREF_PAGE']; ?>
"  >
    <input type="hidden" name="action" value="update_account"  />
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="580" id="AutoNumber36" >
        <tr><td><h3><font size="2" face="Tahoma" color="#800000">Change Password</font></h3></td>
        </tr>
    </table>  
    <table cellpadding="0" cellspacing="0" border="0" class="form_content" width="580" style="border-collapse: collapse" bordercolor="#111111">
        		  
        <tr>
            <td class="form_label" width="200"><font size="2" face="Tahoma">Current Password:</font></td>
            <td class="form_field" ><font face="Tahoma">
                <input  name="curent_password" type="password" autocomplete="off" value="" size="40" class="inputtext" />
                </font>
            </td>
        </tr>		  
        <tr>
            <td class="form_label" width="200"><font size="2" face="Tahoma">New Password:</font></td>
            <td class="form_field" ><font face="Tahoma">
                <input  name="new_password" type="password" autocomplete="off" value="" size="40" class="inputtext" />
                </font>
            </td>
        </tr>		  
        <tr>
            <td class="form_label" width="200"><font size="2" face="Tahoma">Confirm New Password:</font></td>
            <td class="form_field" ><font face="Tahoma">
                <input  name="re_password" type="password" autocomplete="off" value="" size="40" class="inputtext" />
                </font>
            </td>
        </tr>		  
        	  

    </table>

    <table cellpadding="0" cellspacing="0" border="0" class="form_content" width="580" style="border-collapse: collapse" bordercolor="#111111">
        <tr>
            <td class="form_label" width="200"><font size="2" face="Tahoma"><font color="#FF0000">*</font>Master Key</font></td>
            <td class="form_field"><font face="Tahoma">
                <input  type="password" name="master_key" value="" autocomplete="off" class="inputtext" size="5" maxlength="3"  /></font></td>
        </tr>		  

    </table>

    <table border="0" cellSpacing="2" cellPadding="2" width="100%">
        <tr>
            <td class="contenButtons" align="middle">
                <font face="Tahoma">
                <input class="button" value="Updated" type="submit" name="buttonUpdate"></font></td>
        </tr>
    </table>
    <?php echo '
    <script type="text/javascript">
        function checkSecurityQuestion(security_question_id) {
            if (security_question_id==-1) {
                $("#content_custom_question").show();
            } else {
                $("#content_custom_question").hide();	
            }
        }
       
        $(document).ready(function(){
            $(\'#link_api_name\').live(\'click\',function(){
                var currentdate = new Date();
                var currenttime = currentdate.getTime();
                $(\'input[name="api_name"]\').val(crc32(\'"\'+currenttime+\'"\').toString(16))
            })
            $(\'#link_api_key\').live(\'click\',function(){
                var currentdate = new Date();
                var currenttime = currentdate.getTime();
                $(\'input[name="api_key"]\').val(crc32(\'"\'+currenttime+\'"\').toString(8))
            })
            $(\'#link_api_hash\').live(\'click\',function(){
                var currentdate = new Date();
                var currenttime = currentdate.getTime();
                $(\'input[name="api_hask"]\').val(crc32(\'"\'+currenttime+\'"\').toString(32).substring(0,4))
            })
            
            
        })
       

    </script>
    '; ?>

</form>