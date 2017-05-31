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
                    Add Category
                </div>
                <div class="panel-body">
			<form role="form" action="category.php?job=add" method="post"  enctype="multipart/form-data">
	                    <div class="form-group">
	                        <input class="form-control" name="category" value="{$category}" required placeholder="Category">
	                    </div>
	
			    <div class="form-group">										
				<select class="form-control"  name="parent_category" placeholder="Parent Category" >
					<option disabled selected>--</option>
					{section name=parent_category loop=$category_names}
					<option  value="{$category_names[parent_category]}" >{$category_names[parent_category]}</option>
					{/section}
				</select>																														
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
                  Category
                </div>
                <div class="panel-body">
                   {php}list_category_details();{/php} 
                </div>
            </div>
	    </div>
</div>

{include file="footer.tpl"}
{include file="user_footer.tpl"}