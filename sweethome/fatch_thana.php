<?php 
     $selected_val = $_POST["district_id"];
      $json = file_get_contents('document.json');
                    $json_data = json_decode($json,true);
                    foreach ($json_data as $key1=>$value1) {
                       if($selected_val==$json_data[$key1]['fields']['name'])
                       {
                        $selected_val=$json_data[$key1]['pk'];
                    }
                       }

	$json = file_get_contents('thana.json');
	$json_data = json_decode($json,true);
	$output .= '<option value="0">Select thana</option>';

	foreach ($json_data as $key1=>$value1) {
	    if($json_data[$key1]['fields']['district']==(int)$selected_val){
	    $output .= '<option value="'.$json_data[$key1]['fields']['name'].'">'.$json_data[$key1]['fields']['name'].'</option>';
	    }
	}
	echo $output;

 ?>
