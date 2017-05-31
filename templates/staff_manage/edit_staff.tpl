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

		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
				<div class="panel-heading">
                <div class="panel-heading">
                    Edit your Staff
                </div>
	
				<div class="panel-body">
					<form role="form" action="staff_manage.php?job=add" method="post" class="product" enctype="multipart/form-data">

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


			 
			 <div class="row" style="margin-left: 20px;">
					<div class="col-lg-2">
			 
						 {if $edit_mode=='on'}
							<button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>
			
						{else}
							<button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
						</div>
						<div class="col-lg-2">
						{/if}
	                    	<button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
						</div>
					</div>
			 	</form>
			  	</div>
			</div>
              </div>
	</div>
	
	</div>
	
{include file="user_footer.tpl"}
{literal}
   
			 <script>
					$(document).on('ready', function() {
						$("#gallery").fileinput({
							showUpload: false,
								maxFileCount: 10,
								mainClass: "input-group-lg"
							});
						});
			</script>
			 
			 <script>
					$(document).on('ready', function() {
						$("#input-1").fileinput({
							showUpload: false,
								maxFileCount: 1,
								mainClass: "input-group-lg"
							});
						});
			</script>
   

	 <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
	
  });
</script>
	<script>
  $(function () {
    
    $('#datepicker').datepicker({
	  format: 'yyyy-mm-dd',
      autoclose: true
    });
 });
</script>
	{/literal}