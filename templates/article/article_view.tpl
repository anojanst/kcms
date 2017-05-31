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
		<div class="col-lg-10" style="margin-top: 10px; margin-left: 50px;  ">
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