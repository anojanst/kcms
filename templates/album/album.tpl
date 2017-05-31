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
                    Add Album
                  </div>
                         <div class="panel-body">
                                <form role="ad_form" action="album.php?job=save" method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Album
                                            <input class="form-control" name="album_name" value="{$album_name}" required placeholder="Album">
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Description
                                           <textarea class="form-control" rows="3" placeholder="Description" name="description">{$description}</textarea>
						
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
                                            {if $edit=='on'}
                                            <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>

                                            {else}
                                            <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
                                        </div>
                                        <div class="col-lg-6">
                                            {/if}
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
                  Album
                </div>
                <div class="panel-body">
                   {php}list_album();{/php} 
                </div>
            </div>
	    </div>
</div>



                    

{include file="user_footer.tpl"}
{literal}
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
{/literal}