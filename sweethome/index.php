<?php 
  session_start(); 
?>
<html>
<head>
	<title>Find Your Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap1.min.css">
 <?php include "js-jq.php" ?>
</head>
<body>
	<?php include "topView.php" ?>
	<div >
   <div class="badge badge-primary text-wrap" >
  <h3>NOW SEARCH THE PROPERTY VERY EASILY</h3>
</div>
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3500">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <h5>SEARCH THE BEST PROPERTY IN YOUR AREA</h5>
    </div>
    <div class="carousel-item">
      <h5>SAVE TIME</h5>
    </div>
    <div class="carousel-item">
      <h5>SWEET HOME ADVANCED SEARCH </h5>
    </div>
  </div>
</div>
		<div id="rent" >
			
  <h3>FOR RENT</h3>
         <form action="index.php" method="POST">
          <div class="row">
            <div class="col-md-3">
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
    <div class="col-md-3">
            <?php include "search.php" ?>
     </div>
     <div class="col-md-3">
			 <select class="custom-select" name="property">
  				    <option value="0" selected disabled>Select Property Type</option>
  				    <option value="1">Commercial Space</option>
              <option value="2">Office</option>
              <option value="3">Flat / Apartment</option>
              <option value="4">Houses</option>
              <option value="5">Room(for rent)</option>
              <option value="6">Sublet With Family(for rent)</option>
              <option value="7">Mess(for rent)</option>
              <option value="8">Hostel(for rent)</option>
              <option value="9">Garage(for rent)</option>
              <option value="10">Other House</option>
			</select>
    </div>
    </div>
        <button type="submit" class="btn btn-primary" name="search1">Search</button>
      </form>    
		</div>

	</div>
	<div class="container">
 <div class="d-flex p-2 bd-highlight">
   <h3 ><u class="text-info">Top Submitted To-Let</u></h3>
   </div>
  <div class="row">
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

     $sql="SELECT * FROM house_details LIMIT $page_1, 15 ";

     $result=mysqli_query($conn,$sql);
     if($result)
     {
       while($row= mysqli_fetch_assoc($result))
       {
        $hid=$row['id'];
        $hprice=$row['price'];
        $hdis=$row['district'];
        $hthana=$row['thana'];
        $hbed=$row['bedroom'];
        $hbath=$row['bathroom'];
        $hsize=$row['size'];

        echo " <div class='col-6'><img src='background.jpg' height='75%' width='100%'> <br>
        <div class='row' height='25%' textsize=2rem>
        <div class='col-sm-6'>price: {$hprice} tk</div>
        <div class='col-sm-6'>{$hbed} bedroom</div>
        <div class='col-sm-6'>{$hbath} bathroom</div>
        <div class='col-sm-6'>size:{$hsize}sqfeet</div>
        </div>
         </div>";
       }
     }
 ?>
 </div>
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

</body>
</html>
