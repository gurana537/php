<?php
include "../lib/config.php";
$cid=$_GET['cid'];

if(!empty($cid))
{
?>
 
  <select name = "sid" id="state" class="form-control"  required>
			    <option value="">Select a State</option>
                             <?php 
							     //echo "SELECT * FROM `states` WHERE `country_id`='$cid' order by `name` ASC";exit;
	                             $res=$db->query("SELECT * FROM `states` WHERE `country_id`='$cid' order by `name` ASC");
	                              while($row= $res->fetch())
								  {
	                                $state_id = $row['id'];
	                                $state_name = $row['name'];
	                                echo "<option value='$state_id'>$state_name</option>";
	                              }
	                         ?>
</select>


<?php } ?>
	
	
	