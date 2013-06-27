{if count($validerrors)>0 }
<span class="error"><strong>{$langs.ERROR_OCCURED_NOTICE}</strong></span><br /><br />
<table width="100%" cellpadding="0" cellspacing="0"  border="0" id="validErrorPanel">
{section name=error_index loop=$validerrors}
	<tr><td class="validErrors" ><strong>{$validerrors[error_index].field}:</strong> {$validerrors[error_index].message}</td></tr>
{/section}
</table>
{/if}
