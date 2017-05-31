<?php

function get_place_id(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT MAX(id) FROM ad_place" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$max_id=$row['MAX(id)']+1;
		$place_id='PL00-'.$max_id;
		return $place_id;
	}

	include 'conf/closedb.php';
}


function save_place ($place_id, $place, $rate, $availability_status, $occupid_until){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "INSERT INTO ad_place (id, place_id, place, rate, availability_status, occupid_until)
	VALUES ('', '$place_id', '$place', '$rate', '$availability_status', '$occupid_until')";
	mysqli_query ( $conn,$query ) or die ( mysqli_connect_error () );
	
	
}

function update_place ( $id, $place, $rate, $availability_status, $occupid_until){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE ad_place SET
	place='$place',
	rate='$rate',
	availability_status='$availability_status',
    occupid_until='$occupid_until'
    
	WHERE id='$id'";
	
	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}


function get_place_info_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM ad_place WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function cancel_place($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE ad_place SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);


	include 'conf/closedb.php';
}


function list_place_details(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>
							<th>Edit</th>
                          <th>Place ID</th>
			               <th>place</th>
                           <th>Rate</th>
                           <th>Availability Status</th>
                            <th>Occupid Until</th>
                            <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody>';


	$result=mysqli_query($conn, "SELECT * FROM ad_place WHERE cancel_status='0'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '<td><a href="places.php?job=edit&id='.$row[id].'" ><i class="fa fa-edit fa-2x"></i></a></td>

		<td>'.$row[place_id].'</td>
		
		<td>'.$row[place].'</td>
		
		<td>'.$row[rate].'</td>

		<td>'.$row[availability_status].'</td>
        
        <td>'.$row[occupid_until].'</td>
		
		<td><a href="places.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

	}

	echo '</tbody>
          </table>
          </div>';

	include 'conf/closedb.php';
}