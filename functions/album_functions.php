<?php


function get_album_id(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT MAX(id) FROM album");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        $no=$row['MAX(id)']+1;
        $no = str_pad($no, 5, "0", STR_PAD_LEFT);
        return "Ad-$no";
    }
    include 'conf/closedb.php';
}


function save_album($album_id,$album_name, $description, $cover){
    include 'conf/config.php';
    include 'conf/opendb.php';
    
    mysqli_select_db ( $conn, $dbname );

    $query = "INSERT INTO album (id,album_id,album_name, description, cover)
	VALUES ('','$album_id','$album_name','$description', '$cover')";

    mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );


}
function list_album() {
    include 'conf/config.php';
    include 'conf/opendb.php';

    echo '<div class="box-body">
			<table id="example1"  style="width: 100%;" class="table-responsive table-bordered table-striped dt-responsive">
                  <thead>
                       <tr>
                           <th>Edit</th>
                           <th>Album Id</th>
                           <th>Album</th>
                           <th>Description</th>
                           <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody valign="top">';
    $i = 1;
    $result = mysqli_query ( $conn, "SELECT * FROM album WHERE cancel_status='0'");
    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {

        echo '<td><a href="album.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-edit fa-2x"></i></a></td>

		<td><a href="album.php?job=view&album_id=' . $row ['album_id'] . '">' . $row [album_id] . '</a></td>
		<td>' . $row [album_name] . '</td>
		<td>' . $row [description] . '</td>
		
		<td><a href="album.php?job=delete&id=' . $row [id] . '" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>
		</tr>';
        $i ++;
    }

    echo '</tbody>
          </table>
          </div>';


}
function get_album_info_by_id($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn, "SELECT * FROM album WHERE id='$id'" );

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) )

    {
        return $row;
    }


}
function update_album($id, $album_name, $description) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query=  "UPDATE album SET
    album_name='$album_name',
	description='$description'
    
	WHERE id='$id'";

    mysqli_query ($conn, $query );

}

function cancel_album($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "UPDATE album SET
	cancel_status='1'
	WHERE id='$id'";

    mysqli_query ($conn, $query );


}

function add_album_has_gallery($album_id, $gallery){
	include 'conf/config.php';
	include 'conf/opendb.php';
    
     mysqli_select_db ( $conn, $dbname );
	$query = "INSERT INTO album_has_gallery (id, album_id, gallery)
	VALUES ('', '$album_id', '$gallery')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	include 'conf/closedb.php';
}



function list_album_detail_view($album_id){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	

	$result=mysqli_query($conn, "SELECT * FROM album WHERE cancel_status='0' AND album_id='$album_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		echo '
	<div class="row" class="col-lg-12">
		<div class="col-lg-4" >
				 <img src="'.$row[cover].'" width=100%  style="margin-left: 5px;"/> 
		 </div>
		 
		
		 <div class="col-lg-8" style="border-left: solid 2px black;">

		
							<div class="row">
							<div class="col-lg-3"><b>
							Album ID      :</b> </div><div class="col-lg-9">'.$row[album_id].'
							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Album Name	:</b></div><div class="col-lg-9">'.$row[album_name].'
							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Description	:</b></div><div class="col-lg-9">'.$row[description].'
							</div></div>';
                           
                            $result1=mysqli_query($conn, "SELECT * FROM album_has_gallery WHERE cancel_status='0' AND album_id='$row[album_id]'");
                            while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC))
                                {
                                    echo '                                         
                                                 <img src="'.$row1[gallery].'" width=100%  style="margin-left: 5px;"/> 		 
                                            ';
                                }
		echo'</div>
		
	</div>
					<div class="row" style="margin-top: 10px; margin-left: 50px;">		
                        <a href="album.php" ><div class="btn btn-primary">Back</div></a>
					</div>				
		 
										
		';

	}

	

	include 'conf/closedb.php';
}


function get_album_info_by_album_id($album_id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query($conn, "SELECT * FROM album WHERE album_id='$album_id'");
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		return $row;
	}
	include 'conf/closedb.php';
}