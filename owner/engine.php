<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_WARNING);

$property_id='';
$country='';
$province='';
$zone='';
$city='';
$contact_no='';
$property_type='';
$estimated_price='';
$description='';
$latitude='';
$longitude='';
$booked='';
$owner_id='';




include("../config/config.php");

if(isset($_POST['add_property'])){
	add_property();
}

if(isset($_POST['owner_update'])){
	owner_update();
}

if(isset($_POST['Update'])){
	property_update();
}

function add_property(){

	global $property_id,$country,$province,$zone,$city,$contact_no,$property_type,$estimated_price,$description,$latitude,$path,$p_photo,$property_photo_id,$longitude,$owner_id,$booked,$db;
	$country=validate($_POST['country']);
	$province=validate($_POST['province']);
	$zone=validate($_POST['zone']);
	$city=validate($_POST['city']);
	$contact_no=validate($_POST['contact_no']);
	$property_type=validate($_POST['property_type']);
	$estimated_price=validate($_POST['estimated_price']);
	$description=validate($_POST['description']);
	$latitude=validate($_POST['latitude']);
   	$longitude=validate($_POST['longitude']);
   	$booked='No';
   	$u_email=$_SESSION['email'];
        $sql1="SELECT * from owner where email='$u_email'";
        $result1=mysqli_query($db,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($rowss=mysqli_fetch_assoc($result1)){
            $owner_id=$rowss['owner_id'];

     	$sql = "INSERT INTO add_property(country,province,zone,city,contact_no,property_type,estimated_price,description,latitude,longitude,booked,owner_id) VALUES('$country','$province','$zone','$city','$contact_no','$property_type','$estimated_price','$description','$latitude','$longitude','$booked','$owner_id')";
		$query=mysqli_query($db,$sql);
	

		$property_id = mysqli_insert_id($db);

		$countfiles = count($_FILES['p_photo']['name']);
	
	for($i=0;$i<$countfiles;$i++){
	$paths = $_FILES['p_photo']['tmp_name'][$i];
		  if($paths!="")
			{
		    	$path="product-photo/" . $_FILES['p_photo']['name'][$i];
				if(move_uploaded_file($paths, $path)) {
		        $sql2 = "INSERT INTO property_photo(p_photo,property_id) VALUES('$path','$property_id')";
				$query=mysqli_query($db,$sql2);
			

			}}
 
 }
		if(!empty($query)){
			
?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style> 
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Product has been uploaded.</strong></center>
</div></div>


<?php
		}
		else{

		 echo "error";

			

		}

}
}}

function property_update(){
	global $property_id,$country,$province,$zone,$city,$contact_no,$property_type,$estimated_price,$description,$latitude,$path,$p_photo,$property_photo_id,$longitude,$owner_id,$booked,$db;
	$property_id = $_POST['property_id'];
	$country=validate($_POST['country']);
	$province=validate($_POST['province']);
	$zone=validate($_POST['zone']);
	$city=validate($_POST['city']);
	$contact_no=validate($_POST['contact_no']);
	$property_type=validate($_POST['property_type']);
	$estimated_price=validate($_POST['estimated_price']);
	$description=validate($_POST['description']);
	$latitude=validate($_POST['latitude']);
   	$longitude=validate($_POST['longitude']);

	 
   	
		$sql = "UPDATE add_property SET country='$country',province='$province',zone='$zone',contact_no='$contact_no', 
		city='$city',property_type='$property_type',estimated_price='$estimated_price', description='$description', latitude='$latitude',longitude='$longitude' WHERE property_id='$property_id'";
		
		$query=mysqli_query($db,$sql);
		if($query == true){
			
		
			echo 'Data has successfully been updated';
     
	}


}




function owner_update(){
	global $owner_id,$full_name,$email,$password,$phone_no,$address,$id_type,$id_photo,$errors,$db;
	$owner_id=validate($_POST['owner_id']);
	$full_name=validate($_POST['full_name']);
	$email=validate($_POST['email']);
	$phone_no=validate($_POST['phone_no']);
	$address=validate($_POST['address']);
	$id_type=validate($_POST['id_type']);
	$password = md5($password); // Encrypt password
		$sql = "UPDATE owner SET full_name='$full_name',email='$email',phone_no='$phone_no',address='$address',id_type='$id_type' WHERE owner_id='$owner_id'";
		$query=mysqli_query($db,$sql);
		if(!empty($query)){
			?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Information has been updated.</strong></center>
</div></div>


<?php
	}
}



function validate($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}




 ?>