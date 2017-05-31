<?php
require_once 'conf/smarty-conf.php';
include 'functions/author_functions.php';
include 'functions/staff_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';

$module_no = 6;
if ($_SESSION ['login'] == 1) {
	if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
		if ($_REQUEST ['job'] == 'add') {
			if ($_REQUEST ['ok'] == 'Save') {
                $author_id=get_author_id();
				$name = $_POST ['name'];
				$full_name = $_POST ['full_name'];
				$detail = $_POST ['detail'];
				

				save_author ($author_id, $name, $full_name, $detail);
				
				$smarty->assign ( 'page', "author" );
				$smarty->display ( 'author/author.tpl' );
			} else {
				
				$id = $_SESSION ['id'];
				$name = $_POST ['name'];
				$full_name = $_POST ['full_name'];
				$detail = $_POST ['detail'];
															
				update_author ( $id, $name, $full_name, $detail);
				
				$smarty->assign ( 'page', "author" );
				$smarty->display ( 'author/author.tpl' );
			}
		} elseif ($_REQUEST ['job'] == 'edit') {
			$info = get_author_info_id ( $_REQUEST ['id'] );
			$_SESSION ['id'] = $_REQUEST ['id'];
			
			$smarty->assign ( 'name', $info ['name'] );
			$smarty->assign ( 'full_name', $info ['full_name'] );
			$smarty->assign ( 'detail', $info ['detail'] );
						
			$smarty->assign ( 'edit', "on" );
            $smarty->assign ( 'page', "author" );
			$smarty->display ( 'author/author.tpl' );
		}
		
		

		elseif ($_REQUEST ['job'] == 'delete') {
			cancel_author ( $_REQUEST ['id'] );
			
			$smarty->assign ( 'page', "author" );
			$smarty->display ( 'author/author.tpl' );
		}

		 else {
				$smarty->assign ( 'page', "author" );
				$smarty->display ( 'author/author.tpl' );
		}
	} else {
		$user_name = $_SESSION ['user_name'];
		$smarty->assign ( 'error_report', "on" );
		$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to access EMPLOYEE." );
		$smarty->assign ( 'page', "Access Error" );
		$smarty->display ( 'user_home/access_error.tpl' );
	}
} else {
	$smarty->assign ( 'error', "Incorrect Login Details!" );
	$smarty->display ( 'login.tpl' );
}