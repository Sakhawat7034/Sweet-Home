
             <select class="custom-select" name="thana" id="thana">
             <option value="0" >Select thana</option>
       </select> 
       <script src="jquery.min.js"></script>
<script>

               $(document).ready(function(){
                $('#district').change(function(){

                  var district_id=$(this).val();
                  $.ajax({
                    url:"fatch_thana.php",
                    method:"POST",
                    data:{district_id:district_id},
                    dataType:"text",
                    success:function(data){
                      $('#thana').html(data);
                    }

                  });

                });

               });
   </script>
    