<?php /* Smarty version Smarty-3.0.8, created on 2017-04-03 15:06:32
         compiled from "./templates/staff_manage/add_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37101615258e217a0ece3e9-39628345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0827502237131939753430f9582e12ea7ddc91ea' => 
    array (
      0 => './templates/staff_manage/add_new.tpl',
      1 => 1491211857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37101615258e217a0ece3e9-39628345',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	
<div id="contents">
		<?php if ($_smarty_tpl->getVariable('error_report')->value=='on'){?>
		<div class="error_report">
			<strong><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
</strong>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('warning_report')->value=='on'){?>
		<div class="warning_report" style="margin-bottom: 50px;">
			<strong><?php echo $_smarty_tpl->getVariable('warning_message')->value;?>
</strong>
		</div>
		<?php }?>
 	<section class="content">
  		  <div class="nav-tabs-custom">
  			  <div class="tab-content">
   				 <div class="row">
     			   <div class="col-lg-12" align="center">
                     <h2><strong>Employee Management </strong></h2>

               		</div>

					<form role="form" action="staff_manage.php?job=add" method="post" class="product" enctype="multipart/form-data">
								
							<div class="row" style="margin-bottom: 10px; margin-left: 20px;">

								<div class="form-group">
									<input class="form-control" name="name" value="<?php echo $_smarty_tpl->getVariable('name')->value;?>
" required placeholder="Name">
								</div>

								<div class="form-group">
									<input class="form-control" name="full_name" value="<?php echo $_smarty_tpl->getVariable('full_name')->value;?>
" required placeholder="Full Name">
								</div>

								<div class="form-group">
									<input class="form-control" name="email" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
" required placeholder="E-mail">
								</div>

								<div class="form-group">
									<input class="form-control" name="mobile" value="<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
" required placeholder="Mobile">
								</div>

								<div class="form-group">
									<textarea class="form-control" rows="3" name="address" placeholder="Address"><?php echo $_smarty_tpl->getVariable('address')->value;?>
</textarea>
								</div>

								<div class="form-group">
									<label>Add username and password if this employee will use the system.</label>
									<input class="form-control" name="user_name" value="<?php echo $_smarty_tpl->getVariable('user_name')->value;?>
" placeholder="User Name">
								</div>

								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="New Password">
								</div>

								<div class="form-group">
									<select class="form-control" name="role" required>
                                        <?php if ($_smarty_tpl->getVariable('role')->value){?>
											<option value="<?php echo $_smarty_tpl->getVariable('role')->value;?>
"><?php echo $_smarty_tpl->getVariable('role')->value;?>
</option>
                                        <?php }else{ ?>
											<option value="" disabled selected>Role</option>
                                        <?php }?>
										<option value="Admin">Admin</option>
										<option value="Editer">Editer</option>
										<option value="Marketing Persona">Marketing Persona</option>
										<option value="Management">Management</option>
										<option value="Author">Author</option>
									</select>
								</div>

				 <div class="row" style="margin-left: 20px;">
					<div class="col-lg-2">
			 
						 <?php if ($_smarty_tpl->getVariable('edit_mode')->value=='on'){?>
							<button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>
			
						<?php }else{ ?>
							<button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
						</div>
						<div class="col-lg-2">
						<?php }?>
	                    	<button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
						</div>
					</div>
				

								


				</div>

			 	</form>
		 </div>
			  
		
			 
	
			  	</div>
          </div>

	</section>
</div>
	
<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

   
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
    
    $('#datepicker1').datepicker({
	 format: 'yyyy-mm-dd',
      autoclose: true
    });
 });
</script>
	