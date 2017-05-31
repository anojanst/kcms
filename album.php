<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/companies_functions.php';
include 'functions/album_functions.php';
include 'functions/modules_functions.php';

$module_no = 12;

if ($_SESSION ['login'] == 1) {
if (check_access ( $module_no, $_SESSION ['user_id'] ) == 1) {
   
    if ($_REQUEST ['job'] == "album") {
        $smarty->assign('page', "album");
        $smarty->display('album/album.tpl');
    }
    
    elseif ($_REQUEST ['job'] == "save") {
        if ($_REQUEST ['ok'] == 'Update') {

            $id = $_SESSION ['id'];

            $album_name = $_POST ['album_name'];
            $description = $_POST ['description'];

            update_album($id, $album_name, $description);
        }
        else{

            $album_id=get_album_id();
            $album_name = $_POST ['album_name'];
            $description = $_POST ['description'];
            
            $filename = stripslashes ($_FILES['cover'] ['name']);
			if($filename){
				$file_name=$album_id.'.'.$filename;
				$cover="cover/".$file_name;
				$copied = copy($_FILES['cover']['tmp_name'],$cover);
			}
			else{
				$cover="";
			}
            

            save_album($album_id,$album_name, $description, $cover);
            
             $ngallery = count($_FILES['gallery'] ['name']);

			for($i=0; $i < $ngallery; $i++)
			{
				$galleryname = stripslashes ($_FILES['gallery'] ['name'][$i]);
					if($galleryname){
						$gallery_name=$album_id.'.'.$galleryname;
						$gallery="gallery/".$gallery_name;
						$copied = copy($_FILES['gallery']['tmp_name'][$i],$gallery);
					}
					else{
						$gallery="";
					}
					
						
				add_album_has_gallery($album_id, $gallery);
				
			}

        }

        $smarty->assign('page', "album");
        $smarty->display('album/album.tpl');

    }
    
    elseif ($_REQUEST ['job'] == "edit") {
        $_SESSION ['id'] = $id = $_REQUEST ['id'];
        $info = get_album_info_by_id($id);

        $smarty->assign('album_name', $info ['album_name']);
        $smarty->assign('description', $info ['description']);

        $smarty->assign('edit', 'on');

        $smarty->assign('page', "album");
        $smarty->display('album/album.tpl');
    }
    
    elseif ($_REQUEST ['job'] == "delete") {
        cancel_album($_REQUEST ['id']);

        $smarty->assign('page', "album");
        $smarty->display('album/album.tpl');
    }
    
    elseif ($_REQUEST ['job'] == "view") {
		$_SESSION ['album_id'] = $_REQUEST ['album_id'];
			
		$info = get_album_info_by_album_id ( $_SESSION ['album_id'] );
			
		$_SESSION ['id'] = $info ['album_id'];

		$smarty->assign('page',"album");
		$smarty->display('album/details.tpl');
	}
	
   
    else {
        $smarty->assign('page', "album");
        $smarty->display('album/album.tpl');
    }
} else {
		$user_name = $_SESSION ['user_name'];
		$smarty->assign ( 'error_report', "on" );
		$smarty->assign ( 'error_message', "Dear $user_name, you don't have permission to access Album." );
		$smarty->assign ( 'page', "Access Error" );
		$smarty->display ( 'user_home/access_error.tpl' );
	}
}

else {

    $smarty->assign ( 'error', "Incorrect Login Details!" );
    $smarty->display('login.tpl');
}