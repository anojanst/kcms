<?php

function get_author_id(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT MAX(id) FROM author" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$max_id=$row['MAX(id)']+1;
		$author_id='AU16000-'.$max_id;
		return $author_id;
	}

	include 'conf/closedb.php';
}


function save_author($author_id, $name, $full_name, $detail) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "INSERT INTO author (id, author_id, name, full_name, detail)
	VALUES ('', '$author_id', '$name', '$full_name', '$detail')";
	mysqli_query ( $conn,$query ) or die ( mysqli_connect_error () );
	
	
}

function update_author ( $id, $name, $full_name, $detail){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE author SET
	name='$name',
	full_name='$full_name',
	detail='$detail'
    
	WHERE id='$id'";
	
	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}


function get_author_info_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM author WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function cancel_author($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE author SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);


	include 'conf/closedb.php';
}


function list_author_details(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>
							<th>Edit</th>
                          <th>Author ID</th>
			               <th>Name</th>
                           <th>Full Name</th>
                            <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody>';


	$result=mysqli_query($conn, "SELECT * FROM author WHERE cancel_status='0'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '<td><a href="author.php?job=edit&id='.$row[id].'" ><i class="fa fa-edit fa-2x"></i></a></td>

		<td>'.$row[author_id].'</td>
		
		<td>'.$row[name].'</td>
		
		<td>'.$row[full_name].'</td>

		<td>'.$row[detail].'</td>
		
		<td><a href="author.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

	}

	echo '</tbody>
          </table>
          </div>';

	include 'conf/closedb.php';
}