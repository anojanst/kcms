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
                    Add Advertisement
                  </div>
                         <div class="panel-body">
                                <form role="ad_form" action="ad.php?job=save" method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Title
                                            <input class="form-control" name="title" value="{$title}" required placeholder="Title">
                                        </div>
                                    </div>

                                    {if $edit=='on'}

                                    {else}

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Image
                                            <input id="file-1" name="image" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
                                        </div>
                                    </div>
                                    {/if}
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Url
                                            <input class="form-control" name="url" value="{$url}" required placeholder="Url">

                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">
                                            Company Id
                                            <select class="form-control" name="company_id" required>
                                                {if $company_id}
                                                    <option value="{$company_id}" selected>{$company_id}</option>
                                                {else}
                                                    <option value="" disabled selected>Company Id</option>
                                                {/if}
                                                {php}list_company_id();{/php}
                                            </select>
                                        </div>
                              
                                         <div class="col-lg-3">
                                            Place Id
                                            <select class="form-control" name="place_id" >
                                                {if $place_id}
                                                    <option value="{$place_id}" selected>{$place_id}</option>
                                                {else}
                                                    <option value="" disabled selected>Place Id</option>
                                                {/if}
                                                {php}list_place_id();{/php}

                                            </select>
                                         </div>
                                   
                                        <div class="col-lg-3">
                                            Start Date
                                            <input type="text" class="form-control" id="datepicker1" name="start_date" value="{$start_date}" placeholder="Start Date">
                                        </div>
                                   
                                
                                        <div class="col-lg-3">
                                            End Date
                                            <input type="text" class="form-control" id="datepicker2" name="end_date" value="{$end_date}" placeholder="EndDate">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-12">
                                            Marketing Person
                                            <input class="form-control" name="marketing_person" value="{$marketing_person}" required placeholder="Marketing Person">

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
                  Advertisements
                </div>
                <div class="panel-body">
                   {php}list_ads();{/php} 
                </div>
            </div>
	    </div>
</div>



                    

{include file="user_footer.tpl"}
{literal}
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
{/literal}