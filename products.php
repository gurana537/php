<?php ob_start(); error_reporting(0);
include "cw_admin/lib/config.php";
extract($_GET); extract($_POST);
$req = $url[1];
if(isset($_POST) && $_POST['action']=='ViewModel'){
	$guid=$_POST['id'];
	$sql = $db->query("SELECT * FROM `sub_cat` WHERE `guid`='$guid'");
	if($sql->rowCount() >0){
		$row=$sql->fetch();
		$an = str_replace("^^","'", $row['description']);
		$ans = str_replace("~~",'"', $an); 
		echo $row['name']."^^~~".$ans; exit;
	}
}
 if(isset($_GET) && empty($_GET['id'])){
  //echo "SELECT * FROM `sub_cat`";exit;
	$sql = $db->query("SELECT * FROM `sub_cat`");      
	} else {
	$guid=$_GET['id'];
	$sql = $db->query("SELECT * FROM `sub_cat` WHERE `cid`='$guid'");
	 } 
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="">

<meta name="author" content="">

<title>Unix Surfactants</title>

 

<link href="css/bootstrap.css" rel="stylesheet">

 

<link href="css/font-awesome.css" rel="stylesheet">

<link href="css/plugin.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">

<link href="css/responsive.css" rel="stylesheet">

 <link href="css/menu.css" rel="stylesheet">



<link href="rs-plugin/css/settings.css" rel="stylesheet">

<link href="rs-plugin/css/captions.css" rel="stylesheet">

 

<script src="js/jquery.js"></script>

 <script src="script.js"></script>

<!--[if lt IE 9]>

	<script src="js/html5shiv.js"></script>

	<script src="js/respond.min.js"></script>

	<![endif]-->

</head> 

<body>

<div id="wrap">

<header id="header">

<div id="topbar">

<div class="container">

<div class="row">

<div id="callus" class="col-md-6 col-sm-6">

<div class="clearfix hidden-xs">

<span><i class="fa fa-phone icon-left"></i>Call Us : +91 - 7702260152</span>

<span class="hidden-sm"><i class="fa fa-envelope icon-left"></i>Email : info@unixsurfactants.com</span>

</div>

</div> 

<div id="social" class="col-md-6 col-sm-6 hidden-xs">

<ul class="social bottom-0 list-unstyled clearfix">

<li class="facebook"><a href="https://www.facebook.com/" data-placement="bottom" data-toggle="tooltip" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>

<li class="twitter"><a href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>

<li class="googleplus"><a href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>

<li class="linkedin"><a href="#" data-placement="bottom" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>

</ul>

</div> 



</div> 

</div> 

</div> 

<div id="mainheader">

<div class="container">

<div class="logo-area" align="center">

<h1 class="logo">

<a href="#"><img src="images/logo_new.jpg" alt="" class="img-responsive"></a>

</h1>

<span class="descriptions">Site Desc</span></div> 

<div class="site-menu right-menu visible-lg visible-md top-5">

<nav>

<ul class="sf-menu bottom-0 list-unstyled clearfix">

<li class="menu-normal"><a href="index.php">Home</a></li>

<li class="menu-normal"><a href="about.php">About Us</a></li>

<li class="menu-normal current-menu-item"><a href="products.php">Products</a></li>

<li class="menu-normal"><a href="distributor.php">Distributor Enquiry</a></li>

<li class="menu-normal"><a href="employee.php">Employee Corner</a></li>



<li class="menu-normal"><a href="contact.php">Contact Us</a></li>

</ul>

</nav>

</div> 

 

<a href="#mobile-menu" class="reponsive-menu visible-xs visible-sm button pull-right color"><i class="fa fa-bars"></i></a>

</div> 

</div> 

</header> 

<div id="heading">

<div class="container">

<h2 class="bottom-0 light colorin">Products</h2>

</div> 

</div>

<div class="section" data-margin="0 0 60px"  style="padding:30px 0;">

<div class="container">

<div class="row">



    <div class="col-sm-3">

        <div id='cssmenu'>

<ul>
<?php $a=$db->query("SELECT * FROM `cat`");?>
   <li class='active'><?php while($b=$a->fetch()){?> 
				<a href="products.php?id=<?php echo $b['guid'];?>" class="list-group-item"> <?php echo $b['name'];?> </a>  
				<?php }?></li>

   

</ul>

</div>



    </div> 

    

    <div class="col-sm-9">
<?php
		 if($sql->rowCount() > 0){
		  foreach($sql as $r){
			/*$r= $sql->fetch();*/
			     $an = str_replace("^^","'", $r['description']);
		         $ans = str_replace("~~",'"', $an);
			?>
        <div class="col-sm-4 col-xs-6">

       		<div class="thumbnail">

            	<img src="adminupload/<?php echo $r['image'];?>" style="height:180px; width:100%" class="img-responsive"/>

                <p style="margin-top:8px;">Market Price : <span style="text-decoration:line-through">Rs.<?php echo $r['name'];?>/-</span></p>

                <h3>Our Price : <span style="font-weight:bold">Rs.<?php echo $r ['description']?>/-</span></h3>

                <a href="contact.php" class="btn btn-success">Order Now</a><br>



            </div>

    	</div> 

        

       

        

       

        

       

       

       

        <?php } } else { echo "No Results found "; }  ?>

    </div> 

    

</div> 

</div> 

</div> 





<!-- <div class="container top-30 bottom-30" >

<div class="row">

<div class="col-md-4 col-lg-4 bottom-xs-30">

<div class="servicebox text-center">

<div class="servicebox-icon">

<i class="fa fa-lightbulb-o"></i>

</div> 

<div class="servicebox-content">

<h3 class="bottom-10">ABOUT US</h3>

<p style="text-align:justify">

                                    Vizag School of Tourism and Management (formerly Coromandel Institute of Hotel Management and Catering Technology) is one of the first hotel management college, established in 1994...

<a href="#" style="float:right">more...</a>

</p>



</div> 

</div> 

</div> 

<div class="col-md-4 col-lg-4 bottom-xs-30">

<div class="servicebox text-center">

<div class="servicebox-icon">

<i class="fa fa-lightbulb-o"></i>

</div>

<div class="servicebox-content">

<h3 class="bottom-10">YESTERDAY'S PROFIT</h3>

<p><marquee onMouseOver="this.scrollAmount=1" onMouseOut="this.scrollAmount=3" scrollamount="4"  direction="up" loop="true" height="80px" style="color:#000000; text-align:justify;">

                                    HNI PROFITS <br>

GOLD = 50,000 (5 LOTS)<br>

SILVER =16,000 (2 LOTS)<br>



TOTAL<br>

PROFITS   = 76,000/-</marquee>

<a href="#" style="float:right">more...</a>

</p>

</div> 

</div> 

</div> 

<div class="col-md-4 col-lg-4 bottom-xs-30">

<div class="servicebox text-center">

<div class="servicebox-icon">

<i class="fa fa-lightbulb-o"></i>

</div>

<div class="servicebox-content">

<h3 class="bottom-10">LATEST NEWS</h3>

<p><marquee onMouseOver="this.scrollAmount=1" onMouseOut="this.scrollAmount=3" scrollamount="4"  direction="up" loop="true" height="80px" style="color:#000000; text-align:justify;">

                                    NEW YEAR OFFER SUBSCRIBE ANY NORMAL PACK FOR 2 MONTHS AND GET 1 MONTH FREE (31ST DEC TO JAN 4TH)</marquee>

									<a href="#" style="float:right">more...</a>

									</p>

</div> 

</div> 

</div> 

</div> 

</div> -->

 





<footer id="footer">

<div class="widget-area">

<div class="container">

<div class="row">

<div class="col-md-4 col-sm-6 bottom-sm-30">

<div class="widget">

<h5 class="widget-title">

<span>About Us</span>

</h5> 

<p>Unix Surfactants is committed to supporting sustainability and providing our consumers around the world with the products they need to look good, feel good and get more out of life.</p>
	<p>Five key priorities provide the foundation for our brand’s campaigns. Read some examples of how different brands are upholding these principles.</p>

</div> 

</div> 



<div class="col-md-4 col-sm-6 bottom-sm-30">

<div class="widget widget-twitter">

<h5 class="widget-title">

<span>Location</span>

</h5> 



<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d35198.60424694106!2d78.51296782572904!3d17.353633210514367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRoad+No.+2%2C+Alkapuri%2C+Saroornagar%2C+Hyderabad-5000035!5e0!3m2!1sen!2sin!4v1469511639743" width="100%" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>

</div> 



</div> 

<div class="col-md-4 col-sm-6">

<div class="widget enews">

<h5 class="widget-title">

<span>Contact Us</span>

</h5> 

<p class="bottom-20">

	<strong>Unix Surfactants Pvt. Ltd</strong><br/>

    H.No.: 11-13-82/1, Plot No.: 10, <br>
       Road No. 2, Alkapuri,<br>
       Saroornagar, Hyderabad-35,<br>
       Telangana, India.<br>



	Mobile : +91 - 7702260152<br/>

	Email : info@unixsurfactants.com

</p>

 

</div> 

</div> 

</div> 

</div> 

</div> 

<div class="credit">

<div class="container">

<div class="row">

<div class="col-md-6">

<p>Copyright by Unix Surfactants</p>

</div> 

<div class="col-md-6 text-right">

<ul class="list-unstyled bottom-0 links">

<li><a href="https://catchway.com/home.php" target="_blank">Powered by CatchWAY.com</a></li>



</ul>

</div>

</div> 

</div>

</div> 

</footer> 

<div id="mobile-menu">

<span class="menu-content"></span>

</div> 

</div> 

 

<script src="js/easing.js"></script>

<script src="js/hoverIntent.js"></script>

<script src="js/superfish.js"></script>

<script src="js/bootstrap.js"></script>

<script src="js/fitvids.js"></script>

<script src="js/caroufredsel.js"></script>

<script src="js/magnificpopup.js"></script>

<script src="js/isotope.js"></script>

<script src="js/scrollreveal.js"></script>

<script src="js/nivosliderpack.js"></script>

<script src="js/easypiechart.js"></script>

<script src="js/mmenu.js"></script>

<script src="js/countto.js"></script>

<script src="js/twitter/tweet.js"></script>

<script src="js/functions.js"></script>

 

<script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>

<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</body>



</html>