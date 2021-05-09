<?php 

$selected_val = $_POST['offertype'];
if('rent'==$selected_val){
		 echo"<option value='0'>-Select property type-</option>
						<option value='Commercial Space'>Commercial Space</option>
		  				<option value='Office'>Office</option>
		  				<option value='Flat'>Flat / Apartment</option>
		  				<option value='Houses'>Houses</option>
		  				<option value='Room'>Room</option>
		  				<option value='Sublet'>Sublet With Family</option>
		  				<option value='Mess'>Mess</option>
		  				<option value='Hostel'>Hostel</option>
		  				<option value='Garage'>Garage</option>
		  				<option value='Other'>Other House</option>";
	}
if('sale'==$selected_val){
		 echo"<option value='0'>-Select property type-</option>
						<option value='Commercial Space'>Commercial Space</option>
		  				<option value='Office'>Office</option>
		  				<option value='Flat'>Flat / Apartment</option>
		  				<option value='Houses'>Houses</option>
		  				
		  				<option value='Land'>Land</option>
		  				<option value='Other'>Other House</option>";
	}
 ?>
                 