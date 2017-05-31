{include file="user_header.tpl"}
{include file="user_navigation.tpl"}


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
                    Add Label
                </div>
                <div class="panel-body">
            
					<form role="form" action="label.php?job=add" method="post"  enctype="multipart/form-data">
	                    <div class="form-group">
	                        <input class="form-control" name="label" value="{$label}" required placeholder="Label">
	                    </div>
	
						<div class="form-group">
	                        <input class="form-control" name="url_name" value="{$url_name}" required placeholder="URL Name">
	                    </div>
     

						{if $edit=='on'}
							<button type="submit" name="ok" value="Update" class="btn btn-default">Update</button>
						{else}
							<button type="submit" name="ok" value="Save" class="btn btn-default">Save</button>
						{/if}
	                    	<button type="reset" class="btn btn-default">Reset</button>                  
                  
                   </form>
				</div>
            </div>
	    </div>
	    
		
   </div>

<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                  Label
                </div>
                <div class="panel-body">
                   {php}list_label_details();{/php} 
                </div>
            </div>
	    </div>
</div>

{include file="footer.tpl"}
{include file="user_footer.tpl"}