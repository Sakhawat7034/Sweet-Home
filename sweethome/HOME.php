<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<html>
<head>
	<title>Find Your Home</title>
	<style>
        #topdiv{
	background-image: url("background.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center ;
	height: 100px;
	text-align: center;
	font-size: 50px;
	
}
ul {
  list-style-type: none;
  margin: 5;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #4CAF50;
}

.active {
  background-color:	#33ff77;
}
select {
  width: 50%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  margin-top: 2px;
}

#rent{
	background-color: #99ffcc;
	height: 250px;
} 


img{
	width: 100%;
}
p{
	font-family: Raleway;
	size: 23px;

}
.list{

	float: left;
	width: 30%;
	margin: 1.6%;
}
    </style>
</head>
<body>
	<div id="topdiv" >
		<span>SWEET HOME</span>
	</div>
	<div>
		 <form action="" method="post">
	    <ul>	  
		  <li><a class="active" href="#home">HOME</a></li>
		  <li><a href="#rent">RENT / TO-LET</a></li>
		  <li><a href="#sale">FOR SALE</a></li>
		  <li><a href="#faq">FAQ (HELP) </a></li>
		  <li><a href="#contact">CONTACT</a></li>
		  <li><a href="#about">ABOUT</a></li>
		  <li><a href="index.php" name="logout">LOGOUT</a></li>
	</ul>
	</form>
	</div>
	<div id="selectplace" >
		<h1 >NOW SEARCH THE PROPERTY VERY EASILY</h1>
		<div id="rent" >
			<label for="select-choice">
			<h3>FOR RENT</h3></label>
            <form action="#" method="post">
			<select id="get_district" name="select-choice" >
				<option value="0" selected disabled>Select District</option>
                 <?php
                    $json = file_get_contents('D:\xampp\htdocs\sweethome\document.json');
                    $json_data = json_decode($json,true);
                    foreach ($json_data as $key1=>$value1) {
                        echo '<option value="'.$json_data[$key1]['pk'].'">'.$json_data[$key1]['fields']['name'].'</option>';
                            
                    }

                    ?>
                    
			</select>
             <input type="submit" name="submit" value="Get Selected Values" />
             </form>  
             
             <select>
             <option value="0" selected disabled>Select thana</option>
            <?php 
            
            
                $selected_val = $_POST['select-choice'];
                echo $selected_val;
                $json = file_get_contents('D:\xampp\htdocs\sweethome\thana.json');
                $json_data = json_decode($json,true);
    
                foreach ($json_data as $key1=>$value1) {
                    if($json_data[$key1]['fields']['district']==$selected_val){
                    echo '<option value="'.$json_data[$key1]['pk'].'">'.$json_data[$key1]['fields']['name'].'</option>';
                    }
                }
                
            
            ?>
            </select> 
			 <select id="get_type" name="select-choice">
				<option value="0" selected disabled>Select Property Type</option>
				<option value="1">Commercial Space</option>
				<option value="2">Office</option>
				<option value="3">Flat / Apartment</option>
				<option value="4">Houses</option>
				<option value="5">Room</option>
				<option value="6">Sublet With Family</option>
				<option value="7">Mess</option>
				<option value="8">Hostel</option>
				<option value="9">Garage</option>
				<option value="10">Other House</option>
			</select>
            
		</div>
	</div>
    
	<div>
		
			<span class="list"><img src="background.jpg">
				<p>dsjdhksdh</p>
			</span>
			<span class="list"><img src="background.jpg">
				<p>dsjdhksdh</p>
			</span>
			<span class="list"><img src="background.jpg">
				<p>dsjdhksdh</p>
			</span>
			<span class="list"><img src="background.jpg">
				<p>dsjdhksdh</p>
			</span>
			<span class="list"><img src="background.jpg">
				<p>dsjdhksdh</p>
			</span>
			<span class="list"><img src="background.jpg">
				<p>dsjdhksdh</p>
			</span>
	    
    </div>

</body>
</html>