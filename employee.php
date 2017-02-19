<?php ini_set( 'error_reporting', E_ALL ^ E_NOTICE );?>
<?php ini_set( 'display_errors', '0' );?>
<?php
ob_start();
error_reporting(0);
if(isset($_POST) && $_POST['submit']=='submit'){
  $name           = $_POST['name'];
  $email          = $_POST['email'];
  $mobile         = $_POST['mobile'];
  $Qualification  = $_POST['qul'];
  $Experience     = $_POST['exp'];
  $Message        = $_POST['message'];
	
   $to="info@unixsurfactants.com";
    $subject="Employee Corner";
    $message="
Name              =   $name\n
Email             =   $email\n
Mobile No         =   $mobile\n
Qualification     =   $Qualification\n
Experience        =   $Experience\n
Message           =   $Message\n
";
    /* GET File Variables */
    $tmpName = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];
    $fileName = $_FILES['image']['name'];

    /* Start of headers */
    $headers = "From: $name<$email>";

    if(file($tmpName)) {
        /* Reading file ('rb' = read
		
		
		 binary)  */
        $file = fopen($tmpName,'rb');
        $data = fread($file,filesize($tmpName));
        fclose($file);

        /* a boundary string */
        $randomVal = md5(time());
        $mimeBoundary = "==Multipart_Boundary_x{$randomVal}x";

        /* Header for File Attachment */
        $headers .= "\nMIME-Version: 1.0\n";
        $headers .= "Content-Type: multipart/mixed;\n" ;
        $headers .= " boundary=\"{$mimeBoundary}\"";

        /* Multipart Boundary above message */
        $message = "This is a multi-part message in MIME format.\n\n" .
            "--{$mimeBoundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
            $message . "\n\n";

        /* Encoding file data */
        $data = chunk_split(base64_encode($data));

        /* Adding attchment-file to message*/
        $message .= "--{$mimeBoundary}\n" .
            "Content-Type: {$fileType};\n" .
            " name=\"{$fileName}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
            $data . "\n\n" .
            "--{$mimeBoundary}--\n";
    }
    if(mail($to,$subject,$message,$headers)){
        ?>
      <script>alert("Thankyou for submit"); window.location="employee.php";</script>
      <?php }
      else
      {
       //
      ?>
      <script>alert("Please try again"); window.location="employee.php";</script>
      <?php }
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

<link href="css/responsive.css" rel="stylesheet">

 

<link href="rs-plugin/css/settings.css" rel="stylesheet">

<link href="rs-plugin/css/captions.css" rel="stylesheet">

 

<script src="js/jquery.js"></script>

 

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

<li class="menu-normal"><a href="products.php">Products</a></li>

<li class="menu-normal"><a href="distributor.php">Distributor Enquiry</a></li>

<li class="menu-normal current-menu-item"><a href="employee.php">Employee Corner</a></li>


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

<h2 class="bottom-0 light colorin">Employee Corner</h2>

</div> 

</div>

<div class="section" data-margin="0 0 60px"  style="padding:30px 0;">

<div class="container">

<div class="row">



<div class="col-md-6 col-lg-6" >

		<form action="#" method="post" class="contact form" id="contactform" enctype="multipart/form-data" onsubmit="return validate();">

<div class="row">

<div class="field col-lg-6 col-md-6">

<label for="name" accesskey="U">Name :</label>

<input class="fullwidth" name="name" type="text" id="name">

</div> 

<div class="field col-lg-6 col-md-6">

<label for="email" accesskey="E">Email :</label>

<input class="fullwidth" name="email" type="email" id="email">

</div> 

<div class="field col-lg-6 col-md-6">

<label for="url">Mobile No :</label>

<input class="fullwidth" type="text" name="phone" id="phone">

</div> 

<div class="field col-lg-6 col-md-6">

<label for="subject">Qualification :</label>

<input class="fullwidth" type="text" name="qul" id="qul">

</div> 

<div class="field col-lg-6 col-md-6">

<label for="url">Experience :</label>

<input class="fullwidth" type="text" name="exp" id="exp">

</div> 

<div class="field col-lg-6 col-md-6">

<label for="subject">Resume :</label>

<input class="fullwidth" type="file" name="image" id="image">

</div> 

</div> 

<div class="field">

<label for="comments" accesskey="C">Message :</label>

<textarea class="fullwidth" name="message" cols="40" rows="3" id="message" spellcheck="true"></textarea>

</div> 

<button class="button color" id="submit" name="submit" value="submit">Send Message</button>

</form>

</div>



<div class="col-md-6 col-lg-6" >

	<div align="center">

	<img src="images/enquiry_img.png" class="img-responsive"/>

</div>

</div>







 

</div> 

</div> 

</div> 







 





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
<script type="text/javascript">
      function validate(){
		  //alert("hai");
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var numbers = /^[0-9]+$/; 
        
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
         var phone = document.getElementById('phone').value;
         var qul = document.getElementById('qul').value;
		 var exp = document.getElementById('exp').value;
         var image = document.getElementById('image').value;
		 var message = document.getElementById('message').value;
         
		 
		 if(name == ''){
            alert("Please enter your  Name");
            document.getElementById('name').focus();
            
            return false;
        }
		 else if(email == ''){
            alert(" Please Enter Your Email");
            document.getElementById('email').focus();
            return false;
            }    
         else if(!filter.test(email)){
            
            alert("Enter valid email format");
            document.getElementById('email').focus();
            return false;
        } 
		 else if(phone == ''){
            alert("Plase Enter Your Mobile Number");
            document.getElementById('phone').focus();
            return false;


       } else if(isNaN(phone)){
            
            alert("Enter valid number format");
            document.getElementById('phone').focus();
            return false;
      }
           else if(phone.length !=10 ){
            
            alert("Enter 10 characters length");
            document.getElementById('phone').focus();
            return false;
        }
		if(qul == ''){
            alert("Please enter your  Qualification");
            document.getElementById('qul').focus();
            
            return false;
        }
		if(exp == ''){
            alert("Please enter your  Experience");
            document.getElementById('exp').focus();
            
            return false;
        }if(image == ''){
            alert("Please choose your Resume");
            document.getElementById('image').focus();
            
            return false;
        }if(message == ''){
            alert("Please enter your  Message");
            document.getElementById('message').focus();
            
            return false;
        }
	  }
	  </script>
</body>



</html>