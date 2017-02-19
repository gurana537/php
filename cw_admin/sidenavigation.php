<?php $sths = $db->query ("SELECT * FROM `login` WHERE `guid` = '1'");
 $details = $sths-> fetch();?>
<nav class="navbar-side" role="navigation">
  <div class="navbar-collapse sidebar-collapse collapse">
    <div class="media-search">&nbsp; </div>
    <ul id="side" class="nav navbar-nav side-nav">
      <!-- BEGIN SIDE NAV MENU --> 
      <li><a class="active" href="<?php echo URL; ?>home.php"> <i class="fa fa-dashboard"></i> Admin Home </a></li>
    <!--  <li><a href="<?php //echo URL; ?>banners.php"><i class="glyphicon glyphicon-th-list"></i> Banners </a></li>-->
	  
	  <!--<li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms2"> <i class="fa fa-cogs"></i> Home <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms2">
           <li><a href="<?php //echo URL; ?>banners.php">    <i class="glyphicon glyphicon-th-list"></i> Banners         </a></li>
          <li><a href="<?php //echo URL; ?>home_gallery.php"><i class="glyphicon glyphicon-th-list"></i> Home Gallery   </a></li>
          <li> <a href="<?php //echo URL; ?>pics.php"> <i class="glyphicon glyphicon-user"></i> User Pictures </a> </li>
		</ul>
      </li>-->
	  
	  <!--<li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms3"> <i class="fa fa-cogs"></i> About Us <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms3">
          <li> <a href="<?php //echo URL; ?>profile.php">     <i class="glyphicon glyphicon-list"></i> Profile      </a> </li>
          <li> <a href="<?php //echo URL; ?>futureplans.php"> <i class="glyphicon glyphicon-list"></i> Future Plans </a> </li>
          <li> <a href="<?php //echo URL; ?>pics.php"> <i class="glyphicon glyphicon-user"></i> User Pictures </a> </li>
		</ul>
      </li>-->
	  
	  <li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms4"> <i class="fa fa-cogs"></i> Products <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms4">
		<li> <a href="<?php echo URL; ?>cat.php">   <i class="glyphicon glyphicon-list"></i> Main Products</a> </li>
		<li> <a href="<?php echo URL; ?>s_cat.php">   <i class="glyphicon glyphicon-list"></i> Sub Products      </a> </li>
		<!--<li><a href="<?php //echo URL; ?>projects.php">   <i class="glyphicon glyphicon-th-list"></i> Details             </a></li>-->
          
      </ul>
	  
      </li>
	  <!--<li> <a href="<?php echo URL; ?>reg.php">   <i class="glyphicon glyphicon-list"></i>Contact Us Persons</a> </li>-->
	</ul>
  </div>
 
  
</nav>
