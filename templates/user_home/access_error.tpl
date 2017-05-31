{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<div class="row">
		<div class="col-lg-12" style="margin-top: 10px;">
			<div class="panel panel-info">
                <div class="panel-heading">
					<div id="contents">
						{if $error_report=='on'}
							<div class="error_report" style="margin-top: 10px;">
								<strong>{$error_message}</strong>
							</div>
						{/if}
		
					</div>
					</div>
				</div>
			</div>
		</div>
{include file="footer.tpl"}