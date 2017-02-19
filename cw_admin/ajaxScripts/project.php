<?php
include "../lib/config.php";
$did=$_GET['did'];

if(!empty($did))
{
?>
 
  <select name = "title" id="title" class="form-control" required>
			    <option value="">Select Project</option>
                             <?php 
							     //echo "SELECT * FROM `states` WHERE `state_id`='$did' order by `name` ASC";exit;
	                             $res=$db->query("SELECT * FROM `m_cat` WHERE `area`='$did' order by `area` ASC");
	                              while($row= $res->fetch())
								  {
	                                $project_id = $row['guid'];
	                                $project_name = $row['name'];
	                                echo "<option value='$project_name'>$project_name</option>";
	                              }
	                         ?>
</select>


<?php } ?>
	
	
	