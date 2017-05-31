<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/companies_functions.php';
include 'functions/ad_functions.php';
include 'functions/article_functions.php';


if ($_SESSION ['login'] == 1) {
   if ($_REQUEST ['job'] == "ad_form") {

       $smarty->assign ( 'label_names', list_label() );
        $smarty->assign('page', "article");
        $smarty->display('article/article.tpl');
  }
elseif ($_REQUEST ['job'] == "save") {
        if ($_REQUEST ['ok'] == 'Update') {

            $id = $_SESSION ['id'];
            $title = addslashes ( $_POST['title']);
            $highlighted_text =  addslashes ($_POST ['highlighted_text']);
            $text =  addslashes ($_POST ['text']);
            $type = $_POST ['type'];
            $category = $_POST ['category'];
            
            $ar_id=$_SESSION['ar_id'];
            delete_artical_has_label($_SESSION['ar_id']);
            $label = $_POST ['label'];
            $nlabel=count($label);
            for($i=0; $i < $nlabel; $i++)
            {
                $label_text=$label[$i].', '.$label_text;
                add_label($ar_id, $label[$i]);
            }
            
            $url_text = $_POST ['url_text'];
            $author_id = $_POST ['author_id'];
            $publised_date = $_POST ['publised_date'];

            update_article($id, $title,$text,$type,$category,$url_text,$author_id,$publised_date);
        }
        else{

            $ar_id=get_artical_id();
            $file_name = stripslashes ($_FILES['featured_image'] ['name']);
            //get the extension of the file in a lower case format/var/www/laravel/lara19/var/www/laravel/lara19
            $newname="article/".$file_name;
            move_uploaded_file($_FILES['featured_image'] ['tmp_name'],$newname);
            $title = addslashes ( $_POST['title']);
            $highlighted_text =  addslashes ($_POST ['highlighted_text']);
            $text =  addslashes ($_POST ['text']);
            $type = $_POST ['type'];
            $category = $_POST ['category'];
            $label = $_POST ['label'];
            $nlabel=count($label);
            for($i=0; $i < $nlabel; $i++)
            {
                $label_text=$label[$i].', '.$label_text;
                add_label($ar_id, $label[$i]);
            }



            $url_text = $_POST ['url_text'];
            $author_id = $_POST ['author_id'];
            $publised_date = $_POST ['publised_date'];

            save_article($ar_id,$title, $newname,$text,$type,$category,$label_text,$url_text,$author_id,$publised_date);

        }

        $smarty->assign ( 'label_names', list_label() );
        $smarty->assign('page', 'article');
        $smarty->display('article/article.tpl');

    } elseif ($_REQUEST ['job'] == "edit") {
        $_SESSION ['id'] = $id = $_REQUEST ['id'];
        $_SESSION ['ar_id'] = $ar_id = $_REQUEST ['ar_id'];
        $info = get_article_info_by_id($id);
        $label_info=get_label_info_by_ar_id($ar_id);
        $label=$label_info['label'];



      //  $smarty->assign('label', $label_info ['label']);
        $smarty->assign('title', $info ['title']);
        $smarty->assign('highlighted_text', $info ['highlighted_text']);
        $smarty->assign('text', $info ['text']);
        $smarty->assign('type', $info ['type']);
        $smarty->assign('author_id', $info ['author_id']);
        $smarty->assign('category', $info ['category']);
        $smarty->assign('url_text', $info ['url_text']);
        $smarty->assign('publised_date', $info ['publised_date']);
        $smarty->assign('edit', 'on');

        $smarty->assign ( 'label_names', list_label() );
        $smarty->assign('page', 'article');
        $smarty->display('article/article.tpl');
    }
    elseif ($_REQUEST ['job'] == "delete") {
        cancel_article($_REQUEST ['id']);
        delete_artical_has_label($_REQUEST ['id']);

        $smarty->assign ( 'label_names', list_label() );
        $smarty->assign('page', 'article');
        $smarty->display('article/article_view.tpl');
    }
    
    elseif ($_REQUEST ['job'] == "view") {

        $smarty->assign('page', 'article');
        $smarty->display('article/article_view.tpl');
    }

    else {
        $smarty->assign ( 'label_names', list_label() );
        $smarty->assign('page', 'article');
        $smarty->display('article/article.tpl');
    }

}

else {

    $smarty->assign ( 'error', "Incorrect Login Details!" );
    $smarty->display('login.tpl');
}