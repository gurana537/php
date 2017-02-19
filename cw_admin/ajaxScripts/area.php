<?php
include "../lib/config.php";
$cid=$_GET['cid'];
$aid=$_GET['aid'];

if(!empty($cid) && !empty($aid))
{
?>

  <select name = "area" id="area" class="form-control"  required>
			    <option value="">Select a Area</option>
                             <?php 
							     //echo "SELECT * FROM `area` WHERE `sid`='$cid' AND `cid`='$aid' order by `name` ASC";exit;
	                             $res=$db->query("SELECT * FROM `area` WHERE `sid`='$cid' AND `cid`='$aid' order by `name` ASC");
	                              while($row= $res->fetch()){
								 
	                                $area_id   =   $row['guid'];
	                                $area_name = $row['name'];
	                                echo "<option value='$area_id'>$area_name</option>";
									  //echo '<option value="'.$area_id."'">$area_name</option>";
	                              }
	                         ?>
</select>


<?php } ?>
	
	
	