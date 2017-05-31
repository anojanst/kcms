<?php /* Smarty version Smarty-3.0.8, created on 2017-04-03 13:09:16
         compiled from "./templates/user_home/access_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8038451158e1fc24e72259-49801379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142a204b0f16fab3720f7bb3a2e10c8704f75275' => 
    array (
      0 => './templates/user_home/access_error.tpl',
      1 => 1490944580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8038451158e1fc24e72259-49801379',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="row">
		<div class="col-lg-12" style="margin-top: 10px;">
			<div class="panel panel-info">
                <div class="panel-heading">
					<div id="contents">
						<?php if ($_smarty_tpl->getVariable('error_report')->value=='on'){?>
							<div class="error_report" style="margin-top: 10px;">
								<strong><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
</strong>
							</div>
						<?php }?>
		
					</div>
					</div>
				</div>
			</div>
		</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>