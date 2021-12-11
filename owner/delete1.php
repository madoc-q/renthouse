<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);


include("../config/config.php"); // Using database connection file here

$property_id = $_GET['property_id']; // get property_id through query string

$del = mysqli_query($db,"delete from property_photo where property_id = '$property_id'"); // delete query


if($del){
	$sql2="DELETE from review where property_id='$property_id'";
$query2=mysqli_query($db,$sql2);

$sql3="DELETE from add_property where property_id='$property_id'";
$query3=mysqli_query($db,$sql3);
if($query3){
			
  header('Location:owner-index.php');




}
}


 ?>