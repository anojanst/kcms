<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/companies_functions.php';
include 'functions/ad_functions.php';
include 'functions/modules_functions.php';

$module_no = 9;

if ($_SESSION ['login'] == 1) {
    if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
    if ($_REQUEST ['job'] == "ad_form") {
        $smarty->assign('page', "ad");
        $smarty->display('ad/ad.tpl');
    } elseif ($_REQUEST ['job'] == "save") {
        if ($_REQUEST ['ok'] == 'Update') {

            $id = $_SESSION ['id'];

            $company_name = $_POST['company_name'];
            $title = $_POST['title'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $url = $_POST['url'];
            $company_id = $_POST ['company_id'];
            $place_id = $_POST ['place_id'];
            $marketing_person = $_POST ['marketing_person'];

            update_ad($id, $title, $url, $company_id, $place_id, $start_date, $end_date, $marketing_person);
        }
        else{
            $title = $_POST ['title'];
            $file_name = stripslashes ($_FILES['image'] ['name']);
            //get the extension of the file in a lower case format/var/www/laravel/lara19/var/www/laravel/lara19
            $newname="ad/".$file_name;
            move_uploaded_file($_FILES['image'] ['tmp_name'],$newname);
            $url = $_POST ['url'];
            $company_id = $_POST ['company_id'];
            $place_id = $_POST ['place_id'];
            $start_date = $_POST ['start_date'];
            $end_date = $_POST ['end_date'];
            $marketing_person = $_POST ['marketing_person'];

            $ad_id=get_ad_id();

            save_ad($ad_id,$title, $newname,$url,$company_id,$place_id,$start_date,$end_date,$marketing_person);

        }

        $smarty->assign('page', 'ad');
        $smarty->display('ad/ad.tpl');

    } elseif ($_REQUEST ['job'] == "edit") {
        $_SESSION ['id'] = $id = $_REQUEST ['id'];
        $info = get_ad_info_by_id($id);

$smarty->assign('title', $info ['title']);
        $smarty->assign('url', $info ['url']);
        $smarty->assign('company_id', $info ['company_id']);
        $smarty->assign('place_id', $info ['place_id']);
        $smarty->assign('start_date', $info ['start_date']);
        $smarty->assign('end_date', $info ['end_date']);
        $smarty->assign('marketing_person', $info ['marketing_person']);
        $smarty->assign('edit', 'on');

        $smarty->assign('page', 'ad');
        $smarty->display('ad/ad.tpl');
    }
    elseif ($_REQUEST ['job'] == "delete") {
        cancel_ad($_REQUEST ['id']);

        $smarty->assign('page', 'ad');
        $smarty->display('ad/ad.tpl');
    }
    elseif ($_REQUEST ['job'] == "image") {
        $_SESSION['id']=$id=$_REQUEST['id'];

        $smarty->assign('page', 'ad');
        $smarty->display('ad/ad_image.tpl');
    }
    else {
        $smarty->assign('page', 'ad');
        $smarty->display('ad/ad.tpl');
    }
} else {
		$user_name = $_SESSION ['user_name'];
		$smarty->assign ( 'error_report', "on" );
		$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to access Advertisements." );
		$smarty->assign ( 'page', "Access Error" );
		$smarty->display ( 'user_home/access_error.tpl' );
	}
}

else {

    $smarty->assign ( 'error', "Incorrect Login Details!" );
    $smarty->display('login.tpl');
}