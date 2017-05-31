{include file="user_header.tpl"}
{include file="user_navigation.tpl"}

<div id="contents">
    {if $error_report=='on'}
        <div class="error_report">
            <strong>{$error_message}</strong>
        </div>
    {/if}
    {if $warning_report=='on'}
        <div class="warning_report" style="margin-bottom: 50px;">
            <strong>{$warning_message}</strong>
        </div>
    {/if}


<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                  Advertisements
                </div>
                <div class="panel-body">
                   {php}list_image($_SESSION['id']);{/php} 
                </div>
            </div>
	    </div>
</div>

</div>

{include file="user_footer.tpl"}