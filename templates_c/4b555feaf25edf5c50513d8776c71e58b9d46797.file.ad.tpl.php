<?php /* Smarty version Smarty-3.0.8, created on 2017-04-04 10:41:39
         compiled from "./templates/ad/ad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93214813658e32b0b69a3c3-02527165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b555feaf25edf5c50513d8776c71e58b9d46797' => 
    array (
      0 => './templates/ad/ad.tpl',
      1 => 1491282697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93214813658e32b0b69a3c3-02527165',
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
                    Add Advertisement
                  </div>
                         <div class="panel-body">
                                <form role="ad_form" action="ad.php?job=save" method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Title
                                            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" required placeholder="Title">
                                        </div>
                                    </div>

                                    <?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>

                                    <?php }else{ ?>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Image
                                            <input id="file-1" name="image" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
                                        </div>
                                    </div>
                                    <?php }?>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Url
                                            <input class="form-control" name="url" value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" required placeholder="Url">

                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">
                                            Company Id
                                            <select class="form-control" name="company_id" required>
                                                <?php if ($_smarty_tpl->getVariable('company_id')->value){?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('company_id')->value;?>
" selected><?php echo $_smarty_tpl->getVariable('company_id')->value;?>
</option>
                                                <?php }else{ ?>
                                                    <option value="" disabled selected>Company Id</option>
                                                <?php }?>
                                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_company_id();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                            </select>
                                        </div>
                              
                                         <div class="col-lg-3">
                                            Place Id
                                            <select class="form-control" name="place_id" >
                                                <?php if ($_smarty_tpl->getVariable('place_id')->value){?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('place_id')->value;?>
" selected><?php echo $_smarty_tpl->getVariable('place_id')->value;?>
</option>
                                                <?php }else{ ?>
                                                    <option value="" disabled selected>Place Id</option>
                                                <?php }?>
                                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_place_id();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                            </select>
                                         </div>
                                   
                                        <div class="col-lg-3">
                                            Start Date
                                            <input type="text" class="form-control" id="datepicker1" name="start_date" value="<?php echo $_smarty_tpl->getVariable('start_date')->value;?>
" placeholder="Start Date">
                                        </div>
                                   
                                
                                        <div class="col-lg-3">
                                            End Date
                                            <input type="text" class="form-control" id="datepicker2" name="end_date" value="<?php echo $_smarty_tpl->getVariable('end_date')->value;?>
" placeholder="EndDate">
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
                                </form>
                           </div>
                      </div>
             </div>		
   </div>

<div class="row">
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;">
			<div class="panel panel-info" style="margin-top: 10px;">
                <div class="panel-heading">
                  Advertisements
                </div>
                <div class="panel-body">
                   <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_ads();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                </div>
            </div>
	    </div>
</div>



                    

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
    <script>
        $(function () {

            $('#datepicker2').datepicker({
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
