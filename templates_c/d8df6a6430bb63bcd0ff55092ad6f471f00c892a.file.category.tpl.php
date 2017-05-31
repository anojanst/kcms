<?php /* Smarty version Smarty-3.0.8, created on 2017-04-04 11:20:49
         compiled from "./templates/category/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99513038058e334397eb5a5-57931311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8df6a6430bb63bcd0ff55092ad6f471f00c892a' => 
    array (
      0 => './templates/category/category.tpl',
      1 => 1491284916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99513038058e334397eb5a5-57931311',
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


<div class="row">
    <div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
	<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                    Add Category
                </div>
                <div class="panel-body">
			<form role="form" action="category.php?job=add" method="post"  enctype="multipart/form-data">
	                    <div class="form-group">
	                        <input class="form-control" name="category" value="<?php echo $_smarty_tpl->getVariable('category')->value;?>
" required placeholder="Category">
	                    </div>
	
			    <div class="form-group">										
				<select class="form-control"  name="parent_category" placeholder="Parent Category" >
					<option disabled selected>--</option>
					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['name'] = 'parent_category';
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('category_names')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['parent_category']['total']);
?>
					<option  value="<?php echo $_smarty_tpl->getVariable('category_names')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent_category']['index']];?>
" ><?php echo $_smarty_tpl->getVariable('category_names')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent_category']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>																														
			  </div>
	
			    <div class="form-group">
	                        <input class="form-control" name="url_name" value="<?php echo $_smarty_tpl->getVariable('url_name')->value;?>
" required placeholder="URL Name">
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
                  Category
                </div>
                <div class="panel-body">
                   <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_category_details();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                </div>
            </div>
	    </div>
</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>