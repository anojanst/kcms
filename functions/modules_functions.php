<?php
function save_module($module_name, $module_no) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ( $conn, $dbname );
	$query = "INSERT INTO modules (id, module_name, module_no)
	VALUES ('', '$module_name', '$module_no')";
	
	mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );
	
	
}
function list_modules() {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	echo '<div class="box-body">
			<table  style="width: 100%;" class="table-responsive table-bordered table-striped dt-responsive">
                  <thead>
                       <tr>
                           <th>Edit</th>
                           <th>Module Name</th>
                           <th>Module No</th>
                           <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody valign="top">';
	$i = 1;
	$result = mysqli_query ( $conn, "SELECT * FROM modules WHERE cancel_status='0' ORDER BY module_no ASC" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		
		echo '<td><a href="modules.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-edit fa-2x"></i></a></td>

		<td>' . $row [module_name] . '</td>
					
		<td>' . $row [module_no] . '</td>
					
		<td><a href="modules.php?job=delete&id=' . $row [id] . '" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>
	
		</tr>';
		
		$i ++;
	}
	
	echo '</tbody>
          </table>
          </div>';
	
	
}
function get_modules_info_by_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$result = mysqli_query ($conn, "SELECT * FROM modules WHERE id='$id'" );
	
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) 

	{
		return $row;
	}
	
	
}
function update_module($id, $module_name, $module_no) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "UPDATE modules SET
	module_name='$module_name',
	module_no='$module_no'
	WHERE id='$id'";
	
	mysqli_query ($conn, $query );
	
}

function delete_module($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "DELETE FROM modules WHERE id='$id'";
	
	mysqli_query ($conn, $query );
	
	
}
function cancel_module($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "UPDATE modules SET
	cancel_status='1'
	WHERE id='$id'";
	
	mysqli_query ($conn, $query );
	
	
}

function check_access($module_no, $user_id) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	$result = mysqli_query ( $conn, "SELECT count(id) FROM user_has_module WHERE user_id='$user_id' AND module_no='$module_no'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		if ($row ['count(id)'] >= 1) {
			return 1;
		} else {
			return 0;
		}
	}

}

function list_user_module($user_id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ( $conn, "SELECT * FROM user_has_module WHERE user_id='$user_id'" );

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
        $module_info = get_module_info ( $row ['module_no'] );
        $module_name = $module_info ['module_name'];

        echo '<div class="col-lg-9">' . $module_name . '</div>
              <div class="col-lg-3"><a href="staff_manage.php?job=remove_access&module_no=' . $row [module_no] . '"> <i class="fa fa-times fa-2x"></i></a></div>';
    }


}

function list_not_user_module($user_id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn , "SELECT * FROM modules WHERE modules.cancel_status='0' AND modules.module_no NOT IN (SELECT user_has_module.module_no FROM user_has_module WHERE user_has_module.user_id='$user_id' )");

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
        echo '<div class="col-lg-9">' . $row [module_name] . '</div>
              <div class="col-lg-3"><a href="staff_manage.php?job=add_access&module_no=' . $row [module_no] . '"> <i class="fa fa-check fa-2x"></i></a></div>';
    }


}

function add_user_module($user_id, $module_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "INSERT INTO user_has_module (user_id, module_no)
	VALUES ('$user_id', '$module_no')";
    mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );


}
function remove_user_module($user_id, $module_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    echo $user_id;
    mysqli_select_db ($conn, $dbname );
    $query = "DELETE FROM user_has_module WHERE user_id='$user_id' AND module_no='$module_no'";
    mysqli_query ($conn, $query );


}