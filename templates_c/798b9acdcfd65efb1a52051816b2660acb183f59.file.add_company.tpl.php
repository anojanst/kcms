<?php /* Smarty version Smarty-3.0.8, created on 2017-04-03 13:05:18
         compiled from "./templates/company/add_company.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183211446158e1fb362d2476-71351606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798b9acdcfd65efb1a52051816b2660acb183f59' => 
    array (
      0 => './templates/company/add_company.tpl',
      1 => 1491204899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183211446158e1fb362d2476-71351606',
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
                    Company
                </div>
                    <div class="panel-body">
                                <form role="company_form" action="companies.php?job=save" method="post">
                                    <div class="row" style="margin-bottom: 10px; margin-left: 20px;">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Name
                                                <input class="form-control" name="name" value="<?php echo $_smarty_tpl->getVariable('name')->value;?>
" required placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Details
                                                <textarea class="form-control" type="text" name="details" placeholder="Details" rows="5" style="font-size:15px"><?php echo $_smarty_tpl->getVariable('details')->value;?>
</textarea>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Telephone No
                                                <input class="form-control" name="telephone" value="<?php echo $_smarty_tpl->getVariable('telephone')->value;?>
" required placeholder="Telephone No">

                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Contact Person
                                                <input class="form-control" name="contact_person" value="<?php echo $_smarty_tpl->getVariable('contact_person')->value;?>
" required placeholder="Contact Person">

                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Website
                                                <input class="form-control" name="website" value="<?php echo $_smarty_tpl->getVariable('website')->value;?>
" required placeholder="Website">

                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Email
                                                <input class="form-control" name="email" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
" required placeholder="Email">

                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Marketing Person
                                                <input class="form-control" name="marketing_person" value="<?php echo $_smarty_tpl->getVariable('marketing_person')->value;?>
" required placeholder="Marketing Person">

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>
                                                <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>

                                                <?php }else{ ?>
                                                <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php }?>
                                                <button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>


<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                  List Companies
                </div>
                <div class="panel-body">
                   <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_companies();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                </div>
            </div>
	    </div>
</div>

                    

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
