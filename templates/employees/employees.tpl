{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
{literal}
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		source: "ajax/query_employees.php",
		minLength: 1
	});				

});
</script>

<script language="JavaScript" type="text/javascript">
  function employee(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox_employee').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox_employee').style.visibility="hidden"; 
    }
  }
</script>
{/literal}

<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                    Add new user
                </div>
                <div class="panel-body">
            
					<form role="form" action="employees.php?job=add" method="post"  enctype="multipart/form-data">
	                    <div class="form-group">
	                        <input class="form-control" name="name" value="{$name}" required placeholder="Name">
	                    </div>
	
						<div class="form-group">
	                        <input class="form-control" name="full_name" value="{$full_name}" required placeholder="Full Name">
	                    </div>
	                    
	                    <div class="form-group">
	                        <input class="form-control" name="email" value="{$email}" required placeholder="E-mail">
	                    </div>
	                    
	                    <div class="form-group">
	                        <input class="form-control" name="mobile" value="{$mobile}" required placeholder="Mobile">
	                    </div>
	                    
	                    <div class="form-group">
	                        <textarea class="form-control" rows="3" name="address" placeholder="Address">{$address}</textarea>
	                    </div>
	                    
	                    <div class="form-group">
	                    	<label>Add username and password if this employee will use the system.</label>
	                        <input class="form-control" name="user_name" value="{$user_name}" placeholder="User Name">
	                    </div>
	                    
	                    <div class="form-group">
	                        <input type="password" class="form-control" name="password" placeholder="New Password">
	                    </div>
					
						<div class="form-group">
		                    	<select class="form-control" name="role" required>
		                    		{if $role}
										<option value="{$role}">{$role}</option>
									{else}
										<option value="" disabled selected>Role</option>
									{/if}
										<option value="Admin">Admin</option>
										<option value="Editer">Editer</option>
										<option value="Marketing Persona">Marketing Persona</option>
										<option value="Management">Management</option>
										<option value="Author">Author</option>
								</select>
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
{include file="footer.tpl"}
{include file="user_footer.tpl"}