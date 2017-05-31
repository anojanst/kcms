<?php

function save_category ($category, $parent_category, $url_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "INSERT INTO category (id, category, parent_category, url_name)
	VALUES ('', '$category', '$parent_category', '$url_name')";
	mysqli_query ( $conn,$query ) or die ( mysqli_connect_error () );
	
	
}

function list_category_item(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT DISTINCT category FROM category WHERE cancel_status='0' " );
	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$category_names [$i] = $row ['category'];

		$i ++;
	}


	return $category_names;

}

function update_category ( $id, $category, $parent_category, $url_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE category SET
	category='$category',
	parent_category='$parent_category',
	url_name='$url_name'
    
	WHERE id='$id'";
	
	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}


function get_category_info_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM category WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function cancel_category($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE category SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);


	include 'conf/closedb.php';
}


function list_category_details(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>
							<th>Edit</th>
                          <th>Category</th>
			               <th>Parent Category</th>
                           <th>Url Name</th>
                            <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody>';


	$result=mysqli_query($conn, "SELECT * FROM category WHERE cancel_status='0'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '<td><a href="category.php?job=edit&id='.$row[id].'" ><i class="fa fa-edit fa-2x"></i></a></td>

		<td>'.$row[category].'</td>
		
		<td>'.$row[parent_category].'</td>
		
		<td>'.$row[url_name].'</td>
	
		<td><a href="category.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

	}

	echo '</tbody>
          </table>
          </div>';

	include 'conf/closedb.php';
}