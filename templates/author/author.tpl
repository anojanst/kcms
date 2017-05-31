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
                    Add Author
                </div>
                <div class="panel-body">
            
					<form role="form" action="author.php?job=add" method="post"  enctype="multipart/form-data">
	                    <div class="form-group">
	                        <input class="form-control" name="name" value="{$name}" required placeholder="Name">
	                    </div>
	
						<div class="form-group">
	                        <input class="form-control" name="full_name" value="{$full_name}" required placeholder="Full Name">
	                    </div>
	                    
	                    <div class="form-group">
	                      <textarea class="form-control" rows="3" placeholder="Details" name="detail">{$detail}</textarea>
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
                  Author
                </div>
                <div class="panel-body">
                   {php}list_author_details();{/php} 
                </div>
            </div>
	    </div>
</div>

{include file="footer.tpl"}
{include file="user_footer.tpl"}