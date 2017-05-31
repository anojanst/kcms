{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
	<div id="contents">
		{include file="user_navigation.tpl"}
		<div class="main_user_home" style="min-height: 300px;">
			<div style="width: 99%; margin-right: 10px;">
				<h4 style="margin-top: -10px;">Add or Remove Permissions</h4>
				<a href="employees.php"><p style="color: orange; margin-top: -45px; margin-left: 720px;" >Back To Employees Page.</p></a>
			</div>
			<div style="width: 99%; background-color: #eee; color: black; text-align: center; height: 30px; margin-top: -20px; margin-bottom: 10px; border-radius: 10px; padding-top: 2px;">
				<strong>User Name : </strong>{$full_name}
			</div>
			<div style="width: 49%; float: left; margin-right: 27px;">
				{php}list_not_user_module($_SESSION['id']);{/php}
			</div>
			<div style="width: 47%; float: left;">
				{php}list_user_module($_SESSION['id']);{/php}				
			</div>
		</div>
	</div>

{include file="user_footer.tpl"}