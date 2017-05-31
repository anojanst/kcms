<?php
require_once 'conf/smarty-conf.php';
include 'functions/staff_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';

$module_no = 2;
if ($_SESSION ['login'] == 1) {
	if (check_access ( $module_no, $_SESSION ['user_id'] )== 1) {
		if ($_REQUEST ['job'] == 'add') {
			if ($_REQUEST ['ok'] == 'Save') {
				$name = $_POST ['name'];
				$full_name = $_POST ['full_name'];
				$email = $_POST ['email'];
				$mobile = $_POST ['mobile'];
				$address = addslashes ( $_POST ['address'] );
				$user_name = $_POST ['user_name'];
				$password = $_POST ['password'];
				$role = $_POST ['role'];
				echo $password;
				save_user ( $name, $full_name, $email, $mobile, $address, $user_name, $password, $role );
				
				$smarty->assign ( 'page', "employees" );
				$smarty->display ( 'employees/employees.tpl' );
			} else {
				
				$id = $_SESSION ['id'];
				$name = $_POST ['name'];
				$full_name = $_POST ['full_name'];
				$email = $_POST ['email'];
				$mobile = $_POST ['mobile'];
				$address = addslashes ( $_POST ['address'] );
				$user_name = $_POST ['user_name'];
				$password = $_POST ['password'];
				$role = $_POST ['role'];
											
				update_user ( $id, $name, $full_name, $email, $mobile, $address, $user_name, $password, $role );
				
				$smarty->assign ( 'page', "employees" );
				$smarty->display ( 'employees/employees.tpl' );
			}
		} elseif ($_REQUEST ['job'] == 'edit') {
			$info = get_user_info_id ( $_REQUEST ['id'] );
			$_SESSION ['id'] = $_REQUEST ['id'];
			
			$smarty->assign ( 'name', $info ['name'] );
			$smarty->assign ( 'full_name', $info ['full_name'] );
			$smarty->assign ( 'email', $info ['email'] );
			$smarty->assign ( 'mobile', $info ['mobile'] );
			$smarty->assign ( 'address', $info ['address'] );
			$smarty->assign ( 'user_name', $info ['user_name'] );
			$smarty->assign ( 'password', $info ['password'] );
			$smarty->assign ( 'role', $info ['role'] );
			
			$smarty->assign ( 'edit', "on" );
			$smarty->assign ( 'page', "employees" );
			$smarty->display ( 'employees/employees.tpl' );
		}
		
		elseif ($_REQUEST ['job'] == 'search') {
			
			$_SESSION ['search'] = $_POST ['search'];
			
			$smarty->assign ( 'search', "$_SESSION[search]" );
			$smarty->assign ( 'search_mode', "on" );
			$smarty->assign ( 'page', "user" );
			$smarty->display ( 'users/list_users.tpl' );
		} 

		elseif ($_REQUEST ['job'] == 'list') {
			
			$smarty->assign ( 'page', "user" );
			$smarty->display ( 'users/list_users.tpl' );
		} elseif ($_REQUEST ['job'] == 'delete') {
			cancel_user ( $_REQUEST ['id'] );
			
			$smarty->assign ( 'page', "user" );
			$smarty->display ( 'users/list_users.tpl' );
		} elseif ($_REQUEST ['job'] == 'access') {
			$module_no = 3;
			if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
				$_SESSION ['id'] = $_REQUEST ['id'];
				$info = get_user_info_id ( $_REQUEST ['id'] );
				
				$smarty->assign ( 'full_name', "$info[full_name]" );
				$smarty->assign ( 'page', "User Access Management" );
				$smarty->display ( 'users/access.tpl' );
			} else {
				$user_name = $_SESSION ['user_name'];
				$smarty->assign ( 'error_report', "on" );
				$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to USER ACCESS MANAGEMENT." );
				$smarty->assign ( 'page', "Access Error" );
				$smarty->display ( 'user_home/access_error.tpl' );
			}
		} elseif ($_REQUEST ['job'] == "remove_access") {
			$id = $_SESSION ['id'];
			$module_no = $_REQUEST ['module_no'];
			
			remove_user_module ( $id, $module_no );
			
			$info = get_user_info_id ( $id );
			
			$smarty->assign ( 'full_name', "$info[full_name]" );
			$smarty->assign ( 'page', "User Access Management" );
			$smarty->display ( 'users/access.tpl' );
		} elseif ($_REQUEST ['job'] == "add_access") {
			$id = $_SESSION ['id'];
			$module_no = $_REQUEST ['module_no'];
			
			add_user_module ( $id, $module_no );
			
			$info = get_user_info_id ( $id );
			
			$smarty->assign ( 'full_name', "$info[full_name]" );
			$smarty->assign ( 'page', "User Access Management" );
			$smarty->display ( 'users/access.tpl' );
		} else {
				$smarty->assign ( 'page', "employees" );
				$smarty->display ( 'employees/employees.tpl' );
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