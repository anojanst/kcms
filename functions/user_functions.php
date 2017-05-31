<?php
function check_login($login, $password) {
		//$password=md5($password);

		include 'conf/config.php';
		include 'conf/opendb.php';

		if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM admins WHERE user_name = '$login' AND password= '$password' AND cancel_status='0'"))){
			return 1;
		}
		else{
			return 0;
		}

		include 'conf/closedb.php';
}

function get_user_info($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM admins WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function save_user($name, $full_name, $email, $mobile, $address, $user_name, $password, $role) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	mysqli_select_db ($conn, $dbname );
	$query = "INSERT INTO admins (id, name, full_name, email, mobile, address, user_name, password, role)
	VALUES ('', '$name', '$full_name', '$email', '$mobile', '$address', '$user_name', '$password', '$role')";
	mysqli_query ( $conn,$query ) or die ( mysqli_connect_error () );
	
	
}

function get_user_info_id($user_id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM admins WHERE id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function get_module_info($module_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn, "SELECT * FROM modules WHERE module_no='$module_no'" );
    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
        return $row;
    }


}

function update_user($id, $name, $full_name, $email, $mobile, $address, $user_name, $password, $role){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "UPDATE admins SET
	name='$name',
	full_name='$full_name',
	email='$email',
	mobile='$mobile',
	address='$address',
	user_name='$user_name',
	password='$password',
	role='$role'
	
	WHERE id='$id'";

	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}

