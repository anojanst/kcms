<?php
require_once 'conf/smarty-conf.php';
include 'functions/label_functions.php';
include 'functions/staff_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';

$module_no = 11;
if ($_SESSION ['login'] == 1) {
	if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
		if ($_REQUEST ['job'] == 'add') {
			if ($_REQUEST ['ok'] == 'Save') {

				$label = $_POST ['label'];
				$url_name = $_POST ['url_name'];		

				save_label ($label, $name, $url_name);
				
				$smarty->assign ( 'page', "label" );
				$smarty->display ( 'label/label.tpl' );
			} else {
				
				$id = $_SESSION ['id'];
				$label = $_POST ['label'];
				$url_name = $_POST ['url_name'];
															
				update_label ( $id, $label, $url_name);
				
				$smarty->assign ( 'page', "label" );
				$smarty->display ( 'label/label.tpl' );
			}
		} elseif ($_REQUEST ['job'] == 'edit') {
			$info = get_label_info_id ( $_REQUEST ['id'] );
			$_SESSION ['id'] = $_REQUEST ['id'];
			
			$smarty->assign ( 'label', $info ['label'] );
			$smarty->assign ( 'url_name', $info ['url_name'] );
						
			$smarty->assign ( 'edit', "on" );
            $smarty->assign ( 'page', "label" );
			$smarty->display ( 'label/label.tpl' );
		}
		
		

		elseif ($_REQUEST ['job'] == 'delete') {
			cancel_label ( $_REQUEST ['id'] );
			
			$smarty->assign ( 'page', "label" );
			$smarty->display ( 'label/label.tpl' );
		}

		 else {
				$smarty->assign ( 'page', "label" );
				$smarty->display ( 'label/label.tpl' );
		}
	} else {
		$user_name = $_SESSION ['user_name'];
		$smarty->assign ( 'error_report', "on" );
		$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to access Label." );
		$smarty->assign ( 'page', "Access Error" );
		$smarty->display ( 'user_home/access_error.tpl' );
	}
} else {
	$smarty->assign ( 'error', "Incorrect Login Details!" );
	$smarty->display ( 'login.tpl' );
}