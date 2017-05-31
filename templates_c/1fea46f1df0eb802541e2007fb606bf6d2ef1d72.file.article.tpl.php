<?php /* Smarty version Smarty-3.0.8, created on 2017-04-06 16:50:45
         compiled from "./templates/article/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174304489758e6248df2bf86-29933719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fea46f1df0eb802541e2007fb606bf6d2ef1d72' => 
    array (
      0 => './templates/article/article.tpl',
      1 => 1491476851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174304489758e6248df2bf86-29933719',
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


                                
 <div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                    Add Article
                </div>
                <div class="panel-body">
                                <form role="ad_form" action="article.php?job=save" method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom: 10px;">
										<div class="col-lg-9">
											<div class="col-lg-12" style="margin-bottom: 10px;">
											
												<input class="form-control" name="title" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" required placeholder="Title">
											</div>
									   
							   
											<div class="col-lg-12" style="margin-bottom: 10px;">  
											
												<textarea name="text" class="form-control" rows="20"><?php echo $_smarty_tpl->getVariable('text')->value;?>
</textarea>
	
											</div>
											
																						
                                            <div class="col-lg-12" style="margin-bottom: 20px;">
                                            
                                                <input id="file-1" name="featured_image" type="file" class="file" data-overwrite-initial="false">
											</div>
											
										</div>


										<div class="col-lg-3">
											
											<div class="row">
												<div class="col-lg-12" style="margin-bottom: 20px;">
													<?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>
															 <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>		
													<?php }else{ ?>
															 <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
													<?php }?>													  
												</div>											  
											</div>
                                       
                                
                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                           
                                            <select class="form-control" name="type" required>
                                                <?php if ($_smarty_tpl->getVariable('type')->value){?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
" selected><?php echo $_smarty_tpl->getVariable('type')->value;?>
</option>
                                                <?php }else{ ?>
                                                    <option value="" disabled selected>Type</option>
                                                    <option value="1" >1</option>
                                                    <option value="2" >2</option>
                                                    <option value="3" >3</option>
                                                <?php }?>
                                            </select>
                                        </div>
                                   
                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                           
                                            <select class="form-control" name="category" >
                                                <?php if ($_smarty_tpl->getVariable('category')->value){?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('category')->value;?>
" selected><?php echo $_smarty_tpl->getVariable('category')->value;?>
</option>
                                                <?php }else{ ?>
                                                    <option value="" disabled selected>Category</option>
                                                <?php }?>
                                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_category();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                            </select>
                                        </div>
                                  

                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                           
                                            <select name="label[]" class="form-control select2" multiple="multiple" data-placeholder="Label" style="width: 100%;">
                                                <?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>
													<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_selected_label();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												<?php }else{ ?>
													<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['label']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['name'] = 'label';
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('label_names')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['label']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['label']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['label']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['label']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['label']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['label']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['label']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['label']['total']);
?>
														<option  value="<?php echo $_smarty_tpl->getVariable('label_names')->value[$_smarty_tpl->getVariable('smarty')->value['section']['label']['index']];?>
"><?php echo $_smarty_tpl->getVariable('label_names')->value[$_smarty_tpl->getVariable('smarty')->value['section']['label']['index']];?>
</option>
													<?php endfor; endif; ?>
												<?php }?>
                                            </select>
                                        </div>


                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                       
                                            <input class="form-control" name="url_text" value="<?php echo $_smarty_tpl->getVariable('url_text')->value;?>
" required placeholder="Url Text">
                                        </div>
                           
                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                        
                                                <select class="form-control" name="author_id" required>
                                                    <?php if ($_smarty_tpl->getVariable('author_id')->value){?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('author_id')->value;?>
" selected><?php echo $_smarty_tpl->getVariable('author_id')->value;?>
</option>
                                                    <?php }else{ ?>
                                                    <option value="" disabled selected>Author ID</option>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_author_id();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                </select>                                         
                                       </div>

                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                 
                                            <input type="text" class="form-control" id="datepicker1" name="publised_date" value="<?php echo $_smarty_tpl->getVariable('publised_date')->value;?>
" placeholder="Publised Date">
                                        </div>


                                    
								</div>
							</div>
                     </form>
                           
                 </div>
            </div>
	    </div>		
   </div>
<!--
<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                  List Articles
                </div>
                <div class="panel-body">
                   <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_articles();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                </div>
            </div>
	    </div>
</div>

 -->                          
                          

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>



<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor().panelInstance('text');
	new nicEditor({fullPanel : true}).panelInstance('text');
	new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('text');
	new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('text');
	new nicEditor({maxHeight : 100}).panelInstance('text');
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
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

        });
    </script>
