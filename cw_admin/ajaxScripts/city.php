<?php
include "../lib/config.php";
$did=$_GET['did'];

if(!empty($did))
{
?>
 
  <select name = "city" id="city" class="form-control" onChange="get_area(this.value);" required>
			    <option value="">Select City</option>
                             <?php 
							     //echo "SELECT * FROM `states` WHERE `state_id`='$did' order by `name` ASC";exit;
	                             $res=$db->query("SELECT * FROM `cities` WHERE `state_id`='$did' order by `name` ASC");
	                              while($row= $res->fetch())
								  {
	                                $city_id = $row['id'];
	                                $city_name = $row['name'];
	                                echo "<option value='$city_id'>$city_name</option>";
	                              }
	                         ?>
</select>


<?php } ?>
	
	
	