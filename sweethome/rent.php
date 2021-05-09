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
	<title>RENT</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<?php include 'js-jq.php' ?>
</head>
<body>
<?php include 'topView.php' ?>
<div class="container">
	<div class="row" > 

		<div class="col-lg-4 col-sm-4">
			<div class="card">
			<div class="card-hearder" style="background-color: #006EB7 ; color: #ffffff;
			padding: 2px 2px 2px 5px; ">
			<h3>Filter Property</h3>
		    </div>
		    <div class="card-body bg-secondary ">
		    	<form action="rent.php" method="POST">
		    	<div >
		    		<select class="custom-select" name="type" id="type">
		    			<option value="1">Rent</option>
		    			<option value="2">Sale</option>
		    			
		    		</select>
		    	</div>
		    	<div style="padding-top: 10px;">
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
			    <div style="padding-top: 10px;">
			    <?php include "search.php" ?>
			    </div>
				<div style="padding-top: 10px;">
					<select class="custom-select" name="bed" id="bed">
		    			<option value="0">BEDS</option>
		    			<?php 
		    			for ($i=1; $i <= 10; $i++) { 
		    				 echo "<option value='{$i}'>{$i}</option>"; 
		    			}

		    			 ?>
		    			
		    			
		    		</select>
				</div>
				<div style="padding-top: 10px;">
					<select class="custom-select" name="bath" id="bath">
		    			<option value="0">BATHS</option>
		    			<?php 
		    			for ($i=1; $i <= 5; $i++) { 
		    				 echo "<option value='{$i}'>{$i}</option>"; 
		    			}

		    			 ?>
		    			
		    			
		    		</select>
				</div>
				<div style="padding-top: 10px;">

					 <button type="submit" class="btn btn-primary btn-block" name="search2">Search</button>

				</div>


				</form>
		    </div>
		</div>

		</div>
		<div class="col-lg-8 col-sm-8 ">
			<div class="row" >
			<?php include "db.php" ?>
    <?php $pre_sql = "SELECT * FROM house_details ";
     $find_count = mysqli_query($conn,$pre_sql);
     $count=mysqli_num_rows($find_count);
     $count=ceil($count/15);


     if(isset($_GET['page'])){
      $page=$_GET['page'];

     }
     else{
      $page="";
     }

     if($page==""|| $page==1)
     {
      $page_1=0;
     }
     else{
      $page_1=($page * 15)- $page;
     }

     $sql="SELECT * FROM house_details WHERE 1  LIMIT $page_1, 15 ";

     $result=mysqli_query($conn,$sql);
     if($result)
     {
       while($row= mysqli_fetch_assoc($result))
       {
       	echo "<div class='col-sm-5'style='margin-top: 5px;'>
					<a href='ads.php?adsid={$row['id']}'> <img src='data:image/jpeg;base64,".base64_encode($row['image'])."' width='100%' height='240px'> </a>
				</div>
				<div class='col-7' style='margin-top: 5px;'>
					<div class='card-hearder'><h5><b>{$row['title']}</b></h5></div>
					<div class='card-body' ><div></strong>{$row['description']}</div><br> 01 Sep, 2019</span> <br> <strong>BDT : {$row['price']} TK/month</strong><br> <strong> Location : </strong><span>{$row['district']},{$row['thana']}</span> <br></div>
					
						<div>
							<samp >{$row['bedroom']} bed room</samp>
							<samp>{$row['bathroom']} baths</samp>
							<samp>{$row['size']} sq-ft total</samp>
						</div>
					<div class='card-footer'>
					<a href='ads.php?adsid={$row['id']}' class='btn'>details</a>	
					</div>
				</div>";
       }
     }

 ?>
  <br>
<ul class="pagination" mar>
<?php 
for($i=1; $i<=$count ;$i++)
{

  echo "<li class='page-item' > <a class='page-link' href='index.php?page={$i}'>{$i} </a></li>";
}

 ?>
</ul>
 </div>
 </div>
			

		

</div>
</body>
</html>


