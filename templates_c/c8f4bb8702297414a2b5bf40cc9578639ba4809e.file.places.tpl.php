<?php /* Smarty version Smarty-3.0.8, created on 2017-05-31 12:31:09
         compiled from "./templates/places/places.tpl" */ ?>
<?php /*%%SmartyHeaderCode:796622150592e6a35c23c43-00864486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f4bb8702297414a2b5bf40cc9578639ba4809e' => 
    array (
      0 => './templates/places/places.tpl',
      1 => 1491285922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '796622150592e6a35c23c43-00864486',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/news_paper/libs/plugins/block.php.php';
?><?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


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
    
    
<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                    Add Places
                </div>
                <div class="panel-body">
            
					<form role="form" action="places.php?job=add" method="post"  enctype="multipart/form-data">
	                    <div class="form-group">
	                        <input class="form-control" name="place" value="<?php echo $_smarty_tpl->getVariable('place')->value;?>
" required placeholder="Place">
	                    </div>
	
						<div class="form-group">
	                        <input class="form-control" name="rate" value="<?php echo $_smarty_tpl->getVariable('rate')->value;?>
" required placeholder="Rate">
	                    </div>
	                    
	                   <div class="form-group">
		                    	<select class="form-control" name="availability_status" required>
		                    		<?php if ($_smarty_tpl->getVariable('availability_status')->value){?>
										<option value="<?php echo $_smarty_tpl->getVariable('availability_status')->value;?>
"><?php echo $_smarty_tpl->getVariable('availability_status')->value;?>
</option>
									<?php }else{ ?>
										<option value="" disabled selected>Availability Status</option>
									<?php }?>
										<option value="Available">Available</option>
										<option value="Not Available">Not Available</option>
									</select>
		                    </div>
                       
                       <div class="form-group">
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										 <input type="text" class="form-control pull-right" id="datepicker1" name="occupid_until" value="<?php echo $_smarty_tpl->getVariable('occupid_until')->value;?>
" placeholder="Occupid Until">
									</div>
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

<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                  Places
                </div>
                <div class="panel-body">
                   <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_place_details();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                </div>
            </div>
	    </div>
</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

        <script>
          $(function () {
            
            $('#datepicker1').datepicker({
             format: 'yyyy-mm-dd',
              autoclose: true
            });
         });
        </script>
	