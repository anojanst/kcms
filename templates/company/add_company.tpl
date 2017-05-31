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
                    Company
                </div>
                    <div class="panel-body">
                                <form role="company_form" action="companies.php?job=save" method="post">
                                    <div class="row" style="margin-bottom: 10px; margin-left: 20px;">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Name
                                                <input class="form-control" name="name" value="{$name}" required placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Details
                                                <textarea class="form-control" type="text" name="details" placeholder="Details" rows="5" style="font-size:15px">{$details}</textarea>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Telephone No
                                                <input class="form-control" name="telephone" value="{$telephone}" required placeholder="Telephone No">

                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Contact Person
                                                <input class="form-control" name="contact_person" value="{$contact_person}" required placeholder="Contact Person">

                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Website
                                                <input class="form-control" name="website" value="{$website}" required placeholder="Website">

                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                Email
                                                <input class="form-control" name="email" value="{$email}" required placeholder="Email">

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
                   {php}list_companies();{/php} 
                </div>
            </div>
	    </div>
</div>

                    

{include file="user_footer.tpl"}
