<?php
 session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

?>



<!DOCTYPE html>
<html>
<head>
	<title>SALE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap1.min.css">

</head>
<body>
<?php include 'topView.php' ?>

<div class="container">
	
	<div class="row">
		<div class="col-lg-12">
			<div class="container row">
				<div >
					<h3>Post Your Ads</h3>
				    <hr >
				</div>
	            <form action="sale.php" method='post'>
			<div class="row">
				<div class="col-md">
					<label>Select offer type *</label>
					<select class="custom-select" name="offertype" id="offertype">
						<option value="0">-Select offer type-</option>
		    			<option value="rent">Rent</option>
		    			<option value="sale">Sale</option>
		    		</select>
				</div>
				<div class="col-md">
					<label>Select property type *</label>
					<select class="custom-select" name="propertytype" id="propertytype">
						<option value="0">-Select property type-</option>
					
		    		</select>
				</div> 
			</div>
				
						 <div class="form-group">
						 	<label>Title / Heading *</label>
					      <input type="text" name="title" class="form-control" placeholder="Title / Heading" />
					     </div>
					     <div >
					     	<label>Description *</label>
					     	<textarea name="description" id="description" placeholder="description*" style="font-size:1em; width: 100%; ">
					     	</textarea>
					     </div>
			     <div class="row">
			      <div class="form-group col-md">
			      	<label>floor size (sq ft)</label>
			      <input type="number" name="floor_size" class="form-control"  />
			     </div>
			     <div class="form-group col-md">
			     	<label>floor no</label>
					<select class="custom-select" name="floor_no" id="floor_no">
						<option value="-1">Choose</option>
						<option value="0">Ground</option>
		    			<?php 
		    			for ($i=1; $i <= 20; $i++) { 
		    				 echo "<option value='{$i}'>{$i}th</option>"; 
		    			}
		    			 ?>
		    		</select>
				</div>
				<div class="form-group col-md">
			     	<label>Bed Room</label>
					<select class="custom-select" name="bed_room" id="bed_room">
						<option value="-1">Choose</option>
		    			<?php 
		    			for ($i=1; $i <= 10; $i++) { 
		    				 echo "<option value='{$i}'>{$i}</option>"; 
		    			}

		    			 ?>
		    			 <option value="11">10+</option>
		    		</select>
				</div>
				<div class="form-group col-md">
			     	<label>Bath room</label>
					<select class="custom-select" name="bath" id="bath">
						<option value="-1">Choose</option>
		    			<?php 
		    			for ($i=1; $i <= 5; $i++) { 
		    				 echo "<option value='{$i}'>{$i}</option>"; 
		    			}

		    			 ?>
		    			 <option value="6">5+</option>
		    		</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md">
			     	<label>Balconies</label>
					<select class="custom-select" name="balconies" id="balconies">
						<option value="0">N/A</option>
						<?php 
		    			for ($i=1; $i <= 5; $i++) { 
		    				 echo "<option value='{$i}'>{$i}</option>"; 
		    			}
		    			 ?>
		    			 <option value="6">5+</option>
		    		</select>
				</div>
				<div class="form-group col-md">
					<label>Floor Type</label>
					<select class="custom-select" name='floor_type' id='floor_type'>
						<option value="0"> Floor Type </option>
						<option value="Tiled">Tiled</option>
						<option value="Mosai">Mosaic</option>
						<option value="Marble">Marble</option>
						<option value="Other">Other</option>
					</select>
				</div>
				<div class="form-group col-md">
					<label>Dining Position</label>
					<select class="custom-select" name='dining_positon' id='dining_positon'>
						<option value="null"> Choose </option>
						<option value="Space">Space</option>
						<option value="room">Room</option>
						<option value="no room or space">No Room or Space</option>
					</select>
				</div>
				<div class="form-group col-md">
			     	<label>Car Parking</label>
					<select class="custom-select" name="car_parking" id="car_parking">
						<option value="0">Choose</option>
						<?php 
		    			for ($i=1; $i <= 5; $i++) { 
		    				 echo "<option value='{$i}'>{$i}</option>"; 
		    			}
		    			 ?>
		    			 <option value="6">5+</option>
		    		</select>
				</div>
			</div>
				<div>
					<h3><u>Facilities</u></h3>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<input type="checkbox" name="drawing_room" > 
                        <label for="drawing_room">  Drawing Room </label>
					</div>
					<div class="col-md-3 col-sm-6">
						<input type="checkbox" name="lift" > 
                        <label for="lift"> Lift </label>
					</div>
					<div class="col-md-3 col-sm-6">
						<input type="checkbox" name="gas" > 
                        <label for="lift"> Gas </label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<input type="checkbox" name="generator" > 
                        <label for="generator"> Generator </label>
					</div>
					<div class="col-md-3 col-sm-6">
						<input type="checkbox" name="wasa" > 
                        <label for="wasa"> Wasa connection </label>
					</div>
					<div class="col-md-3 col-sm-6">
						<input type="checkbox" name="hall" > 
                        <label for="hall"> Community Hall </label>
					</div>
				</div>
				<div >
				   <input type="checkbox" name="cctv" > 
                   <label for="cctv">CC TV </label>
				</div>
				<div >
					<div>
					<label>Rent(tk)/month *</label>
			       <input type="number" name="rent" class="form-control"  />
					</div>
				   <input type="checkbox" name="negotiable" > 
                   <label for="negotiable">Nagotiable </label>
				</div>
				<div>
					<h3><u>Property</u> Location</h3>
				</div>
				<div class="row">
					<div class="col-md-6" >
					<label>Select District*</label>
		    		<select class="custom-select" name="district" id="district"  >
					<option value="0">Select District</option>
	                 <?php
	                    $json = file_get_contents('document.json');
	                    $json_data = json_decode($json,true);
	                    foreach ($json_data as $key1=>$value1) {
	                        echo '<option value="'.$json_data[$key1]['fields']['name'].'">'.$json_data[$key1]['fields']['name'].'</option>';        
	                    }
	                    ?>             
				</select>
		    	</div>
			    <div class="col-md-6">
			    	<label>Select thana*</label>
			    <?php include "search.php" ?>
			    </div>
				</div>
				 <div >
			     	<label>Address *</label>
			     	<textarea name="address" id="address" placeholder="address*" style="font-size:1em; width: 100%; ">
			     	</textarea>
			     </div>
			     <div>
			     	<label>Add image</label>
			     	<input type="file" name="image">
			     </div>
			      <input type="submit" value="Post Ads" class="btn" name="ads">
				</form>
				</div>
			</div>
		</div>
		</div>

		<div class="col-lg-8">	
		</div>
	</div>

</div>



<?php include 'js-jq.php' ?>
</body>
</html>
<script src="jquery.min.js"></script> 
<script>

               $(document).ready(function(){
                $('#offertype').change(function(){

                  var offertype=$(this).val();
                  $.ajax({
                    url:"offertype.php",
                    method:"POST",
                    data:{offertype:offertype},
                    dataType:"text",
                    success:function(data){
                      $('#propertytype').html(data);
                    }

                  });

                });

               });
   </script>

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
$image="skajd";
if(isset($_FILES['image'])){
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
}
$query="INSERT INTO house_details (type,price,district,thana,bedroom,bathroom,size,gas_conn,wasa_conn,cctv,lift,floor_no,title,description,belcony,floor_type,car_parking,generator,hall,nagotiable,address,propertytype,drawing,image) values ('$type','$rent','$district','$thana','$bed_room','$bath','$floor_size','$gas','$wasa','$cctv','$lift','$floor_no','$title','$description','$balconies','$floor_type','$car_parking','$generator','$hall','$negotiable','$address','$propertytype','$drawing_room','$image')";
mysqli_query($conn, $query);
}
?>

