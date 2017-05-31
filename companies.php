<?php
require_once 'conf/smarty-conf.php';
include 'functions/companies_functions.php';
include 'functions/staff_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';


$module_no = 7;

if ($_SESSION ['login'] == 1) {
    if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
    if ($_REQUEST ['job'] == "company_form") {
        $smarty->assign('page', "Company");
        $smarty->display('company/add_company.tpl');
    } elseif ($_REQUEST ['job'] == "save") {
        if ($_REQUEST ['ok'] == 'Update') {

            $id = $_SESSION ['id'];

            $name = $_POST ['name'];
            $details = $_POST ['details'];
            $telephone = $_POST ['telephone'];
            $contact_person = $_POST ['contact_person'];
            $website = $_POST ['website'];
            $email = $_POST ['email'];
            $marketing_person = $_POST ['marketing_person'];

            update_company($id, $name, $details,$telephone,$contact_person,$website,$email,$marketing_person);
        } else {

            $name = $_POST ['name'];
            $details = $_POST ['details'];
            $telephone = $_POST ['telephone'];
            $contact_person = $_POST ['contact_person'];
            $website = $_POST ['website'];
            $email = $_POST ['email'];
            $marketing_person = $_POST ['marketing_person'];

            $company_id=get_company_id();

            save_company($company_id,$name, $details,$telephone,$contact_person,$website,$email,$marketing_person);
        }

        $smarty->assign('page', 'company');
        $smarty->display('company/add_company.tpl');
    } elseif ($_REQUEST ['job'] == "edit") {
        $_SESSION ['id'] = $id = $_REQUEST ['id'];
        $info = get_company_info_by_id($id);

        $smarty->assign('name', $info ['name']);
        $smarty->assign('details', $info ['details']);
        $smarty->assign('telephone', $info ['telephone']);
        $smarty->assign('contact_person', $info ['contact_person']);
        $smarty->assign('website', $info ['website']);
        $smarty->assign('email', $info ['email']);
        $smarty->assign('marketing_person', $info ['marketing_person']);
        $smarty->assign('edit', 'on');

        $smarty->assign('page', 'company');
        $smarty->display('company/add_company.tpl');
    } elseif ($_REQUEST ['job'] == "delete") {
        cancel_company($_REQUEST ['id']);

        $smarty->assign('page', 'company');
        $smarty->display('company/add_company.tpl');
    } else {
        $smarty->assign('page', 'company');
        $smarty->display('company/add_company.tpl');
    }
}
else {
		$user_name = $_SESSION ['user_name'];
		$smarty->assign ( 'error_report', "on" );
		$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to access Companies." );
		$smarty->assign ( 'page', "Access Error" );
		$smarty->display ( 'user_home/access_error.tpl' );
	}
}

else {

    $smarty->assign ( 'error', "Incorrect Login Details!" );
    $smarty->display('login.tpl');
}