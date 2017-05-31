<?php
require_once 'conf/smarty-conf.php';
include 'functions/category_functions.php';
include 'functions/staff_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';

$module_no = 10;
if ($_SESSION ['login'] == 1) {
	if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
		if ($_REQUEST ['job'] == 'add') {
			if ($_REQUEST ['ok'] == 'Save') {
           
				$category = $_POST ['category'];
				$parent_category = $_POST ['parent_category'];
				$url_name = $_POST ['url_name'];
				

				save_category ($category, $parent_category, $url_name);
				$smarty->assign ('category_names', list_category_item() );
				$smarty->assign ( 'page', "category" );
				$smarty->display ( 'category/category.tpl' );
			} else {
				
				$id = $_SESSION ['id'];
				$category = $_POST ['category'];
				$parent_category = $_POST ['parent_category'];
				$url_name = $_POST ['url_name'];
															
				update_category ( $id, $category, $parent_category, $url_name);
				$smarty->assign ('category_names', list_category_item() );
				$smarty->assign ( 'page', "category" );
				$smarty->display ( 'category/category.tpl' );
			}
		} elseif ($_REQUEST ['job'] == 'edit') {
			$info = get_category_info_id ( $_REQUEST ['id'] );
			$_SESSION ['id'] = $_REQUEST ['id'];
			
			$smarty->assign ( 'category', $info ['category'] );
			$smarty->assign ( 'parent_category', $info ['parent_category'] );
			$smarty->assign ( 'url_name', $info ['url_name'] );
			$smarty->assign ('category_names', list_category_item() );			
			$smarty->assign ( 'edit', "on" );
            $smarty->assign ( 'page', "category" );
			$smarty->display ( 'category/category.tpl' );
		}
		
		

		elseif ($_REQUEST ['job'] == 'delete') {
			cancel_category ( $_REQUEST ['id'] );
			$smarty->assign ('category_names', list_category_item() );
			$smarty->assign ( 'page', "category" );
			$smarty->display ( 'category/category.tpl' );
		}

		 else {
				$smarty->assign ('category_names', list_category_item() );
				$smarty->assign ( 'page', "category" );
				$smarty->display ( 'category/category.tpl' );
		}
	} else {
		$user_name = $_SESSION ['user_name'];
		$smarty->assign ( 'error_report', "on" );
		$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to access Category." );
		$smarty->assign ( 'page', "Access Error" );
		$smarty->display ( 'user_home/access_error.tpl' );
	}
} else {
	$smarty->assign ( 'error', "Incorrect Login Details!" );
	$smarty->display ( 'login.tpl' );
}