<?php /* Smarty version Smarty-3.0.8, created on 2017-03-31 16:27:52
         compiled from "./templates/employees/employees.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15986149858de3630f2e5d9-32114216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358c8f26b094798bed279f7bc2ff9ccb0ed436fd' => 
    array (
      0 => './templates/employees/employees.tpl',
      1 => 1490957811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15986149858de3630f2e5d9-32114216',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

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


<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                    Add new user
                </div>
                <div class="panel-body">
            
					<form role="form" action="employees.php?job=add" method="post"  enctype="multipart/form-data">
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

						<?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>
							<button type="submit" name="ok" value="Update" class="btn btn-default">Update</button>
						<?php }else{ ?>
							<button type="submit" name="ok" value="Save" class="btn btn-default">Save</button>
						<?php }?>
	                    	<button type="reset" class="btn btn-default">Reset</button>                  
                  
                   </form>
				</div>
            </div>
	    </div>
	    
		
   </div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>