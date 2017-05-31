<?php
function save_company($company_id,$name, $details,$telephone,$contact_person,$website,$email,$marketing_person){
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ( $conn, $dbname );
    $query = "INSERT INTO ad_companies (id,company_id, name, details,telephone,contact_person,website,email,marketing_person)
	VALUES ('','$company_id','$name', '$details','$telephone','$contact_person','$website','$email','$marketing_person')";

    mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );


}
function list_companies() {
    include 'conf/config.php';
    include 'conf/opendb.php';

    echo '<div class="box-body">
			<table  style="width: 100%;" class="table-responsive table-bordered table-striped dt-responsive">
                  <thead>
                       <tr>
                           <th>Edit</th>
                           <th>Name</th>
                           <th>Details</th>
                           <th>Telephone No</th>
                           <th>Contact Person</th>
                           <th>Website</th>
                           <th>Email</th>
                           <th>Marketing Person</th>
                           <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody valign="top">';
    $i = 1;
    $result = mysqli_query ( $conn, "SELECT * FROM ad_companies WHERE cancel_status='0' " );
    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {

        echo '<td><a href="companies.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-edit fa-2x"></i></a></td>

		<td>' . $row [name] . '</td>
		<td>' . $row [details] . '</td>
		<td>' . $row [telephone] . '</td>
		<td>' . $row [contact_person] . '</td>
		<td>' . $row [website] . '</td>
		<td>' . $row [email] . '</td>
		<td>' . $row [marketing_person] . '</td>
		
		<td><a href="companies.php?job=delete&id=' . $row [id] . '" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>
		</tr>';
        $i ++;
    }

    echo '</tbody>
          </table>
          </div>';


}
function get_company_info_by_id($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn, "SELECT * FROM ad_companies WHERE id='$id'" );

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) )

    {
        return $row;
    }


}
function update_company($id, $name, $details,$telephone,$contact_person,$website,$email,$marketing_person) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "UPDATE ad_companies SET
    name='$name',
	details='$details',
    telephone='$telephone',
	contact_person='$contact_person',
    website='$website',
	email='$email',
    marketing_person='$marketing_person'
	WHERE id='$id'";

    mysqli_query ($conn, $query );

}

function cancel_company($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "UPDATE ad_companies SET
	cancel_status='1'
	WHERE id='$id'";

    mysqli_query ($conn, $query );


}
function get_company_id(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT MAX(id) FROM ad_companies");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        $no=$row['MAX(id)']+1;
        $no = str_pad($no, 5, "0", STR_PAD_LEFT);
        return "C-$no";
    }
    include 'conf/closedb.php';
}

