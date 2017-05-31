<?php
function save_article($ar_id,$title, $newname,$text,$type,$category,$label_text,$url_text,$author_id,$publised_date){
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ( $conn, $dbname );

    $query = "INSERT INTO article (id,ar_id,title,featured_image, text,type,category,label,url_text,author_id,publised_date)
	VALUES ('','$ar_id','$title', '$newname','$text','$type','$category','$label_text','$url_text','$author_id','$publised_date')";

    mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );


}
function list_articles() {
    include 'conf/config.php';
    include 'conf/opendb.php';

    echo '<div class="box-body">
			<table id="example1"  style="width: 100%;" class="table-responsive table-bordered table-striped dt-responsive">
                  <thead>
                       <tr>
                           <th>Edit</th>
                           <th>Title</th>
                           <th>Type</th>
                           <th>Category</th>
                           <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody valign="top">';
    $i = 1;
    $result = mysqli_query ( $conn, "SELECT * FROM article WHERE cancel_status='0'");
    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {

        echo '<td><a href="article.php?job=edit&id=' . $row [id] . '&ar_id=' . $row [ar_id] . '"  ><i class="fa fa-edit fa-2x"></i></a></td>

		<td><a href="article.php?job=image&id='.$row[id].'">' . $row [title] . '</a></td>
		<td>' . $row [type] . '</td>
		<td>' . $row [category] . '</td>
		<td><a href="article.php?job=delete&id=' . $row [ar_id] . '" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>
		</tr>';
        $i ++;
    }

    echo '</tbody>
          </table>
          </div>';


}
function get_article_info_by_id($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn, "SELECT * FROM article WHERE id='$id'" );

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) )

    {
        return $row;
    }


}
function update_article($id, $title,$text,$type,$category,$url_text,$author_id,$publised_date) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );

    $query = "UPDATE article SET
    title='$title',
    text='$text',
	type='$type',
	url_text='$url_text',
	category='$category',
	author_id='$author_id',
    publised_date='$publised_date'
	WHERE id='$id'";

    mysqli_query ($conn, $query );

}

function cancel_article($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "UPDATE article SET
	cancel_status='1'
	WHERE ar_id='$id'";

    mysqli_query ($conn, $query );


}

function list_category(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM category WHERE cancel_status='0'  ORDER BY id ASC");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo'   <option value="'.$row[category].'">'.$row[category].'</option>';
    }
    include 'conf/closedb.php';

}

function list_author_id(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM author WHERE cancel_status='0'  ORDER BY id ASC");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo'   <option value="'.$row[author_id].'">'.$row[author_id].'</option>';
    }
    include 'conf/closedb.php';

}

function list_label() {
	include 'conf/config.php';
	include 'conf/opendb.php';
	$result = mysqli_query ( $conn, "SELECT * FROM label Where cancel_status='0'");
	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
        $label_names [$i] = $row ['label'];
		$i++;
	}
    return $label_names;

}

function list_selected_label() {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	
	$result = mysqli_query ( $conn, "SELECT * FROM article_has_label Where  ar_id='$_SESSION[ar_id]'");
	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {

		 echo'   <option value="'.$row[label].'" selected>'.$row[label].'</option>';
	}
	
	$result1=mysqli_query($conn, "SELECT * FROM label WHERE label.cancel_status='0' AND label.label NOT IN (SELECT label FROM article_has_label WHERE ar_id='$_SESSION[ar_id]') ORDER BY label ASC");
	while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC))
	{
		echo'<option value="'.$row1[label].'">'.$row1[label].'</option>';
	}
}

function add_label($ar_id, $label){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $query = "INSERT INTO article_has_label(id, ar_id, label)
	VALUES ('', '$ar_id','$label')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    include 'conf/closedb.php';
}

function get_artical_id(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT MAX(id) FROM article");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        $no=$row['MAX(id)']+1;
        $no = str_pad($no, 5, "0", STR_PAD_LEFT);
        return "AR-$no";
    }
    include 'conf/closedb.php';
}
function delete_artical_has_label($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );

    $query = "DELETE  FROM article_has_label WHERE ar_id='$id'";

    mysqli_query ($conn, $query );


}


function get_label_info_by_ar_id($ar_id) {
    include 'conf/config.php';
    include 'conf/opendb.php';
	
    $result = mysqli_query ($conn, "SELECT label FROM article_has_label WHERE ar_id='$ar_id'" );
    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) )

    {
        return $row;
    }
	

}