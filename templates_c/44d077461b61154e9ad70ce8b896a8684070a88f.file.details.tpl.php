<?php /* Smarty version Smarty-3.0.8, created on 2017-05-31 14:56:31
         compiled from "./templates/album/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:817219023592e8c47ec0817-97362642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d077461b61154e9ad70ce8b896a8684070a88f' => 
    array (
      0 => './templates/album/details.tpl',
      1 => 1496222331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '817219023592e8c47ec0817-97362642',
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
                    Album
                  </div>
                         <div class="panel-body">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 list_album_detail_view($_SESSION['album_id']);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
   
                           </div>
                      </div>
             </div>		
   </div>





                    

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
