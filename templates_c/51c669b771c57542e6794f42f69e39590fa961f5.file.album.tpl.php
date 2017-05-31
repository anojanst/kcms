<?php /* Smarty version Smarty-3.0.8, created on 2017-05-31 15:29:55
         compiled from "./templates/album/album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:897311660592e941b0f54d2-89620984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c669b771c57542e6794f42f69e39590fa961f5' => 
    array (
      0 => './templates/album/album.tpl',
      1 => 1496224774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '897311660592e941b0f54d2-89620984',
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
                    Add Album
                  </div>
                         <div class="panel-body">
                                <form role="ad_form" action="album.php?job=save" method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Album
                                            <input class="form-control" name="album_name" value="<?php echo $_smarty_tpl->getVariable('album_name')->value;?>
" required placeholder="Album">
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Description
                                           <textarea class="form-control" rows="3" placeholder="Description" name="description"><?php echo $_smarty_tpl->getVariable('description')->value;?>
</textarea>
						
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Cover
                                             <input id="cover" name="cover" type="file" multiple class="file-loading"/>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Gallery
                                             <input id="gallery" name="gallery[]" type="file" multiple class="file-loading"/>
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
list_album();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                </div>
            </div>
	    </div>
</div>



                    

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
    <script>
       $(document).on('ready', function() {
           $("#gallery").fileinput({
               showUpload: false,
                   maxFileCount: 5,
                   mainClass: "input-group-lg"
               });
           });
</script>
     <script>
       $(document).on('ready', function() {
           $("#cover").fileinput({
               showUpload: false,
                   maxFileCount: 1,
                   mainClass: "input-group-lg"
               });
           });
</script>
