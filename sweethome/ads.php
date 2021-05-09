<?php include 'db.php'; ?>
<?php
if(isset($_POST['ads'])){
	
$type=$_POST['offertype'];
$propertytype=$_POST['propertytype'];
$title=$_POST['title'];
$description=$_POST['description'];
$floor_size=$_POST['floor_size'];
$floor_no=$_POST['floor_no'];
$floor_type=$_POST['floor_type'];
$bed_room=$_POST['bed_room'];
$bath=$_POST['bath'];
$balconies=$_POST['balconies'];
$dining_positon=$_POST['dining_positon'];
$car_parking=$_POST['car_parking'];
$drawing_room=false;
$gas=false;
$lift=false;
$cctv=false;
$wasa=false;
$hall=false;
$generator=false;
$negotiable=false;
$rent=$_POST['rent'];
$district=$_POST['district'];
$thana=$_POST['thana'];
$address=$_POST['address'];
if(isset($_POST['drawing_room']))
	$drawing_room=true;
if(isset($_POST['gas']))
	$gas=true;
if(isset($_POST['lift']))
	$lift=true;
if(isset($_POST['generator']))
	$generator=true;
if(isset($_POST['wasa']))
	$wasa=true;
if(isset($_POST['cctv']))
	$cctv=true;
if(isset($_POST['hall']))
	$hall=true;
if(isset($_POST['negotiable']))
	$negotiable=true;
$query="INSERT INTO house_details (type,price,district,thana,bedroom,bathroom,size,gas_conn,wasa_conn,cctv,lift,floor_no,title,description,belcony,floor_type,car_parking,generator,hall,nagotiable,address,propertytype,drawing) values ('$type','$rent','$district','$thana','$bed_room','$bath','$floor_size','$gas','$wasa','$cctv','$lift','$floor_no','$title','$description','$balconies','$floor_type','$car_parking','$generator','$hall','$negotiable','$address','$propertytype','$drawing_room')";
mysqli_query($conn, $query);
}
?>
