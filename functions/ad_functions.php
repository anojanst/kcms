<?php
function save_ad($ad_id,$title, $newname,$url,$company_id,$place_id,$start_date,$end_date,$marketing_person){
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ( $conn, $dbname );

    $query = "INSERT INTO ad (id,ad_id,title, image, url,company_id,place_id,start_date,end_date,marketing_person)
	VALUES ('','$ad_id','$title','$newname', '$url','$company_id','$place_id','$start_date','$end_date','$marketing_person')";

    mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );


}
function list_ads() {
    include 'conf/config.php';
    include 'conf/opendb.php';

    echo '<div class="box-body">
			<table id="example1"  style="width: 100%;" class="table-responsive table-bordered table-striped dt-responsive">
                  <thead>
                       <tr>
                           <th>Edit</th>
                           <th>Ad Id</th>
                           <th>Title</th>
                           <th>Url</th>
                           <th>Marketing Person</th>
                           <th>Delete</th>
                       </tr>
                  </thead>
                  <tbody valign="top">';
    $i = 1;
    $result = mysqli_query ( $conn, "SELECT * FROM ad WHERE cancel_status='0'");
    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {

        echo '<td><a href="ad.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-edit fa-2x"></i></a></td>

		<td><a href="ad.php?job=image&id='.$row[id].'">' . $row [ad_id] . '</a></td>
		<td>' . $row [title] . '</td>
		<td>' . $row [url] . '</td>
		<td>' . $row [marketing_person] . '</td>
		
		<td><a href="ad.php?job=delete&id=' . $row [id] . '" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>
		</tr>';
        $i ++;
    }

    echo '</tbody>
          </table>
          </div>';


}
function get_ad_info_by_id($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn, "SELECT * FROM ad WHERE id='$id'" );

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) )

    {
        return $row;
    }


}
function update_ad($id, $title,$url,$company_id,$place_id,$start_date,$end_date,$marketing_person) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    echo  "UPDATE ad SET
    title='$title',
	url='$url',
    company_id='$company_id',
	place_id='$place_id',
	start_date='$start_date',
	end_date='$end_date',
    marketing_person='$marketing_person'
	WHERE id='$id'";
    $query = "UPDATE ad SET
    title='$title',
	url='$url',
    company_id='$company_id',
	place_id='$place_id',
	start_date='$start_date',
	end_date='$end_date',
    marketing_person='$marketing_person'
	WHERE id='$id'";

    mysqli_query ($conn, $query );

}

function cancel_ad($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "UPDATE ad SET
	cancel_status='1'
	WHERE id='$id'";

    mysqli_query ($conn, $query );


}



function list_company_id(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM ad_companies  ORDER BY id ASC");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo'   <option value="'.$row[company_id].'">'.$row[company_id].'</option>';
    }
    include 'conf/closedb.php';

}
function list_place_id(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM ad_place  ORDER BY id ASC");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo'   <option value="'.$row[place_id].'">'.$row[place_id].'</option>';
    }
    include 'conf/closedb.php';

}

function get_ad_id(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT MAX(id) FROM ad");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        $no=$row['MAX(id)']+1;
        $no = str_pad($no, 5, "0", STR_PAD_LEFT);
        return "Ad-$no";
    }
    include 'conf/closedb.php';
}

function list_image($id){
    include 'conf/config.php';
    include 'conf/opendb.php';



    $result=mysqli_query($conn, "SELECT * FROM ad WHERE id='$id'");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        echo '
	<div class="row" class="col-lg-12">
		<div class="col-lg-4" >
				 <img src="'.$row[image].'" width=250px height=250px style="margin-left: 5px;"/> 
		</div>
        <div class="col-lg-8" style="border-left: solid 2px black;">
            <div class="row">
            <div class="col-lg-3"><b>
            ID      :</b> </div><div class="col-lg-9">'.$row[ad_id].'
            </div></div>
            
            <div class="row">
            <div class="col-lg-3"><b>
            Title	:</b></div><div class="col-lg-9">'.$row[title].'
            </div></div>
            
            <div class="row">
            <div class="col-lg-3"><b>
            Url	:</b></div><div class="col-lg-9">'.$row[url].'
            </div></div>
            
            <div class="row">
            <div class="col-lg-3"><b>
            Company ID	:</b></div><div class="col-lg-9">'.$row[company_id].'
            </div></div>
            
            <div class="row">
            <div class="col-lg-3"><b>
            Place ID	:</b></div><div class="col-lg-9">'.$row[place_id].'
            </div></div>
            
            <div class="row">
                <div class="col-lg-3"><b>
                Start Date	:</b>
                </div>
                <div class="col-lg-9">'.$row[start_date].'
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3"><b>
                End Date       :</b>
                </div>
                <div class="col-lg-9">'.$row[end_date].'
                </div>
            </div>
		</div>
	</div>
		<div class="row col-lg-3"  style="margin-top: 10px; margin-left: 1px;">
			   <a href="ad.php" ><div class="btn btn-primary">Add</div></a>
		</div>';
    }



    include 'conf/closedb.php';
}