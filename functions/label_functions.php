<?php

function save_label($label, $name, $url_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "INSERT INTO label (id, label, url_name)
	VALUES ('', '$label', '$url_name')";
	mysqli_query ( $conn,$query ) or die ( mysqli_connect_error () );
	
	
}

function update_label( $id, $label, $url_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE label SET
	label='$label',
	url_name='$url_name'
    
	WHERE id='$id'";
	
	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}


function get_label_info_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM label WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function cancel_label($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE label SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);


	include 'conf/closedb.php';
}


function list_label_details(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>
							<th>Edit</th>
                          <th>Label</th>
			               <th>Url Name</th>
                            <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody>';


	$result=mysqli_query($conn, "SELECT * FROM label WHERE cancel_status='0'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '<td><a href="label.php?job=edit&id='.$row[id].'" ><i class="fa fa-edit fa-2x"></i></a></td>

		<td>'.$row[label].'</td>
		
		<td>'.$row[url_name].'</td>
		
		<td><a href="label.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

	}

	echo '</tbody>
          </table>
          </div>';

	include 'conf/closedb.php';
}