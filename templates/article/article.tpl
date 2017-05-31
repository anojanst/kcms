{include file="user_header.tpl"}
{include file="user_navigation.tpl"}

<div id="contents">
    {if $error_report=='on'}
        <div class="error_report">
            <strong>{$error_message}</strong>
        </div>
    {/if}
    {if $warning_report=='on'}
        <div class="warning_report" style="margin-bottom: 50px;">
            <strong>{$warning_message}</strong>
        </div>
    {/if}


                                
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
											
												<input class="form-control" name="title" value="{$title}" required placeholder="Title">
											</div>
									   
							   
											<div class="col-lg-12" style="margin-bottom: 10px;">  
											
												<textarea name="text" class="form-control" rows="20">{$text}</textarea>
	
											</div>
											
																						
                                            <div class="col-lg-12" style="margin-bottom: 20px;">
                                            
                                                <input id="file-1" name="featured_image" type="file" class="file" data-overwrite-initial="false">
											</div>
											
										</div>


										<div class="col-lg-3">
											
											<div class="row">
												<div class="col-lg-12" style="margin-bottom: 20px;">
													{if $edit=='on'}
															 <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>		
													{else}
															 <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
													{/if}													  
												</div>											  
											</div>
                                       
                                
                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                           
                                            <select class="form-control" name="type" required>
                                                {if $type}
                                                    <option value="{$type}" selected>{$type}</option>
                                                {else}
                                                    <option value="" disabled selected>Type</option>
                                                    <option value="1" >1</option>
                                                    <option value="2" >2</option>
                                                    <option value="3" >3</option>
                                                {/if}
                                            </select>
                                        </div>
                                   
                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                           
                                            <select class="form-control" name="category" >
                                                {if $category}
                                                    <option value="{$category}" selected>{$category}</option>
                                                {else}
                                                    <option value="" disabled selected>Category</option>
                                                {/if}
                                                {php}list_category();{/php}
                                            </select>
                                        </div>
                                  

                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                           
                                            <select name="label[]" class="form-control select2" multiple="multiple" data-placeholder="Label" style="width: 100%;">
                                                {if $edit=='on'}
													{php}list_selected_label();{/php}
												{else}
													{section name=label loop=$label_names}
														<option  value="{$label_names[label]}">{$label_names[label]}</option>
													{/section}
												{/if}
                                            </select>
                                        </div>


                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                       
                                            <input class="form-control" name="url_text" value="{$url_text}" required placeholder="Url Text">
                                        </div>
                           
                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                        
                                                <select class="form-control" name="author_id" required>
                                                    {if $author_id}
                                                    <option value="{$author_id}" selected>{$author_id}</option>
                                                    {else}
                                                    <option value="" disabled selected>Author ID</option>
                                                    {/if}
                                                    {php}list_author_id();{/php}
                                                </select>                                         
                                       </div>

                                        <div class="col-lg-12" style="margin-bottom: 20px;">
                                 
                                            <input type="text" class="form-control" id="datepicker1" name="publised_date" value="{$publised_date}" placeholder="Publised Date">
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
                   {php}list_articles();{/php} 
                </div>
            </div>
	    </div>
</div>

 -->                          
                          

{include file="user_footer.tpl"}
{literal}


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
{/literal}