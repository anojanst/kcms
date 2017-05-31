<?php
require_once 'conf/smarty-conf.php';
include 'functions/places_functions.php';
include 'functions/staff_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';

$module_no = 8;
if ($_SESSION ['login'] == 1) {
	if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
		if ($_REQUEST ['job'] == 'add') {
			if ($_REQUEST ['ok'] == 'Save') {
                $place_id=get_place_id();
				$place = $_POST ['place'];
				$rate = $_POST ['rate'];
				$availability_status = $_POST ['availability_status'];
                $occupid_until = $_POST ['occupid_until'];
				
				save_place ($place_id, $place, $rate, $availability_status, $occupid_until);
				
				$smarty->assign ( 'page', "places" );
				$smarty->display ( 'places/places.tpl' );
			} else {
				
				$id = $_SESSION ['id'];
				$place = $_POST ['place'];
				$rate = $_POST ['rate'];
				$availability_status = $_POST ['availability_status'];
                $occupid_until = $_POST ['occupid_until'];
															
				update_place ( $id, $place, $rate, $availability_status, $occupid_until);
				
				$smarty->assign ( 'page', "places" );
				$smarty->display ( 'places/places.tpl' );
			}
		} elseif ($_REQUEST ['job'] == 'edit') {
			$info = get_place_info_id ( $_REQUEST ['id'] );
			$_SESSION ['id'] = $_REQUEST ['id'];
			
			$smarty->assign ( 'place', $info ['place'] );
			$smarty->assign ( 'rate', $info ['rate'] );
			$smarty->assign ( 'availability_status', $info ['availability_status'] );
            $smarty->assign ( 'occupid_until', $info ['occupid_until'] );
						
			$smarty->assign ( 'edit', "on" );
            $smarty->assign ( 'page', "places" );
			$smarty->display ( 'places/places.tpl' );
		}
		
		

		elseif ($_REQUEST ['job'] == 'delete') {
			cancel_place ( $_REQUEST ['id'] );
			
			$smarty->assign ( 'page', "places" );
			$smarty->display ( 'places/places.tpl' );
		}

		 else {
				$smarty->assign ( 'page', "places" );
				$smarty->display ( 'places/places.tpl' );
		}
	} else {
		$user_name = $_SESSION ['user_name'];
		$smarty->assign ( 'error_report', "on" );
		$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to access Places." );
		$smarty->assign ( 'page', "Access Error" );
		$smarty->display ( 'user_home/access_error.tpl' );
	}
} else {
	$smarty->assign ( 'error', "Incorrect Login Details!" );
	$smarty->display ( 'login.tpl' );
}