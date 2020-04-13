<?php
//fetch.php
include("config.php");
$column = array("reserverestaurant_serial_no","reserverestaurant_code", "reserverestaurant_desc", "reserverestaurant_personne", "reserverestaurant_date","reserverestaurant_time");
$query = "SELECT * FROM reserverestaurant ORDER BY reserverestaurant_serialno ASC";
//mysqli_set_charset($mysqli,"utf8");
pg_set_client_encoding($mysqli, "utf8");
$number_filter_row = pg_num_rows(pg_query($mysqli, $query));
$result = pg_query($mysqli, $query);



$data = array();

while($row = pg_fetch_array($result))
{
	$sub_array = array();
	//$sub_array[] = "<img src='data:image/jpeg;base64,".base64_encode($row['name'] )."' height='100' width='100' /> ";
	$sub_array[] = $row["reserverestaurant_serialno"];
	$sub_array[] = $row["reserverestaurant_code"];
	$sub_array[] = $row["reserverestaurant_desc"];
	$sub_array[] = $row["reserverestaurant_personne"];
	$sub_array[] = $row["reserverestaurant_date"];
	$sub_array[] = $row["reserverestaurant_time"];
	
	//$sub_array[] = $row["acno"].'<br>'.$row["bank_name"].'<br>'.$row["owner_name"].'<br>'.$row["ac_type"].'<br>'.$row["ifsc"];

	 $data[] = $sub_array;
}
$output = array(
// "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($mysqli),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);
echo json_encode($output);

function get_all_data($mysqli)
{
 $query = "SELECT * FROM reserverestaurant ";
 $result = pg_query($mysqli, $query);
 
 return pg_num_rows($result);
}


?>