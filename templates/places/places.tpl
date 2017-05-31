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
                    Add Places
                </div>
                <div class="panel-body">
            
					<form role="form" action="places.php?job=add" method="post"  enctype="multipart/form-data">
	                    <div class="form-group">
	                        <input class="form-control" name="place" value="{$place}" required placeholder="Place">
	                    </div>
	
						<div class="form-group">
	                        <input class="form-control" name="rate" value="{$rate}" required placeholder="Rate">
	                    </div>
	                    
	                   <div class="form-group">
		                    	<select class="form-control" name="availability_status" required>
		                    		{if $availability_status}
										<option value="{$availability_status}">{$availability_status}</option>
									{else}
										<option value="" disabled selected>Availability Status</option>
									{/if}
										<option value="Available">Available</option>
										<option value="Not Available">Not Available</option>
									</select>
		                    </div>
                       
                       <div class="form-group">
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										 <input type="text" class="form-control pull-right" id="datepicker1" name="occupid_until" value="{$occupid_until}" placeholder="Occupid Until">
									</div>
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
                  Places
                </div>
                <div class="panel-body">
                   {php}list_place_details();{/php} 
                </div>
            </div>
	    </div>
</div>

{include file="footer.tpl"}
{include file="user_footer.tpl"}
{literal}
        <script>
          $(function () {
            
            $('#datepicker1').datepicker({
             format: 'yyyy-mm-dd',
              autoclose: true
            });
         });
        </script>
	{/literal}