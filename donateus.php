<?php
error_reporting(0);
if(isset($_POST) && $_POST['submit']=='submit'){
	
	//echo"hai";
	
    unset($_POST['submit']);
    $txtName     = $_POST['name'];
	$txtPhone    = $_POST['phone'];
	$txtemail    = $_POST['email'];
	$txtamount    = $_POST['amount'];
    $txtMessage  = $_POST['comments'];
	
	
    $to = "info@shabanafoundations.com";
    $subject = "contactus form  from ishabanafoundations";
    $message = "
    Hi,\n
    You have receive contactus from ishabanafoundations\n
    Request Details\n
    
    
    Name           : $txtName\n
	Phone          : $txtPhone\n
	email          : $txtemail\n
	amount         : $txtamount\n
	Message        : $txtMessage\n
	
    ";
    $from = $txtName." < ".$txtemail." > ";
    $headers = "From: ".$from;
    if(mail($to,$subject,$message,$headers)){
  
      ?>
      <script>alert("Thankyou for Submiting"); window.location="contactus.php";</script>
      <?php }
      else
      {
     
      ?>
      <script>alert("Please try again"); window.location="contactus.php";</script>
      <?php }
      }

?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shabana Foundations</title>

<!-- CSS file links -->

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/jquery.bxslider.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/yamm.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jquery.nouislider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.style1 {
	font-size: 24px
}
-->
</style>
</head>

<body>

<!-- Start Header -->

<header class="navbar yamm navbar-default">
  <div class="topBar">
    <div class="container">
      <p class="topBarText"><img class="icon" src="images/icon-phone.png" alt="" /> +91 9100823370</p>
      <p class="topBarText"><img class="icon" src="images/icon-mail.png" alt="" /> info@shabanafoundations.com</p>
      <ul class="socialIcons">
        <li><a href="https://www.facebook.com/" target="_blank"><img src="images/icon-fb.png" alt="" /></a></li>
        <li><a href="https://twitter.com/login" target="_blank"><img src="images/icon-twitter.png" alt="" /></a></li>
        <li><a href="https://plus.google.com/" target="_blank"><img src="images/icon-google.png" alt="" /></a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li> <a href="index.php">HOME</a> </li>
        <li> <a href="aboutus.php">About Us</a> </li>
        <li > <a href="gallery.php">Gallery</a> </li>
        <li> <a href="donateus.php" class="current">Donate Us</a> </li>
        <li> <a href="contactus.php">Contact Us</a> </li>
      </ul>
    </div>
    <!--/.navbar-collapse --> 
    
  </div>
  
  <!-- end header container --> 
  
</header>
<!-- End Header --> 

<!-- start subheader -->

<section>
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	<li data-target="#carousel-example-generic" data-slide-to="5"></li>
	<li data-target="#carousel-example-generic" data-slide-to="6"></li>
	<li data-target="#carousel-example-generic" data-slide-to="7"></li>
	<li data-target="#carousel-example-generic" data-slide-to="8"></li>
	<li data-target="#carousel-example-generic" data-slide-to="9"></li>
	<li data-target="#carousel-example-generic" data-slide-to="10"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/banner1.jpg" alt="1">
    </div>
    <div class="item">
      <img src="images/banner2.jpg" alt="1">
    </div>
    <div class="item">
      <img src="images/banner3.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner4.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner5.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner6.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner7.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner8.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner9.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner10.jpg" alt="1">
    </div>
	<div class="item">
      <img src="images/banner11.jpg" alt="1">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  </a>
</div>
  
</section>

<!-- start big message -->

<section class="bigMessage">
  <div class="container">
    <h1>Donate <span>us</span></h1>
    <hr>
   <div class="col-md-8">
   <p> <img src="images/donate1.jpg" class="img-responsive pull-right" style="margin-left:15px;"/><strong>Bank Details:</strong></p>
    <p><strong>Name:</strong> Poor People Welfare and Development Society</p>
    <p>      <strong>Account No: </strong>35739544330</p>
    <p>      <strong>Bank Name: </strong>State Bank of India</p>
    <p>      <strong>Address:</strong> Lalaguda, Secunderabad</p>
    <p>      <strong>IFSC Code:</strong> SBIN0007112</p>

   </div>
   <div class="col-md-4">
      <div>
      <p><strong>Donate Form</strong></p>
      </div>
      <form class="form-horizontal" action="" method="post" onSubmit="return valid();">


      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" name="name" id="name" class="form-control email required" placeholder="Full Name">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" name="phone" id="phone" class="form-control number required" placeholder="Phone number">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control required" name="email" id="email" placeholder="Email-id">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control required" name="amount" id="amount" placeholder="Donate Amount">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <textarea class="form-control required" name="comments" id="comments" rows="1" placeholder="Comments"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
		  <button type="reset" class="btn btn-info">Reset</button>
        </div>
      </div>
    </form>
      </div>
   
  </div>
</section>

<!-- end big message --> 

<!-- start recent properties -->



<!-- end recent properties -->

<footer id="footer">
  <div class="container">
    <div class="row" style="padding-top:20px; padding-bottom:20px">
      <div class="col-lg-3 col-md-3 col-sm-6" style="line-height:1.8; text-align:justify">
        <h4>About Us</h4>
        <p> Ms. Shabana begum is actively involved in social service since 11 years. She is a fashion designer by profession  & also an active women right member. M/s best enterprises in lalaguda is the supportive firm to the foundation.  <a href="aboutus.php">Read More..</a> </p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <h4>Latest News</h4>
        <marquee direction="up" behavior="scroll" onMouseOver="this.stop();" onMouseOut="this.start();" height="150">
        <p style="text-align:justify">Welcome to Shabana Foundations </p>
        </marquee>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <h4>Location</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d826.4565599018566!2d78.530986488065!3d17.44014027870444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDI2JzI0LjUiTiA3OMKwMzEnNTMuNSJF!5e1!3m2!1sen!2sin!4v1467101067824" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <h4>Contact Us</h4>
        <ul class="contactList">
          <li><img class="icon" src="images/icon-pin.png" alt="" /> Shabana Foundations<br>
          #12-1-1061/3/1, Near Jamai Masjid,<br>
North Lalaguda, Hyderabad,<br>
Telangana, India. </li>
          <li><img class="icon" src="images/icon-phone.png" alt="" /> +91 9100823370</li>
          <li><img class="icon" src="images/icon-mail.png" alt="" /> info@shabanafoundations.com </li>
        </ul>
      </div>
    </div>
    <!-- end row --> 
    
  </div>
  <!-- end footer container --> 
  
</footer>
<div class="bottomBar">
  <div class="container">
    <p>&copy; Copyright 2016 Shabana Foundations</p>
    <ul class="socialIcons">
      <li><a href="https://www.facebook.com/" target="_blank"><img src="images/icon-fb.png" alt="" /></a></li>
        <li><a href="https://twitter.com/login" target="_blank"><img src="images/icon-twitter.png" alt="" /></a></li>
        <li><a href="https://plus.google.com/" target="_blank"><img src="images/icon-google.png" alt="" /></a></li>
    </ul>
  </div>
</div>

<!-- JavaScript file links --> 

<script src="js/jquery.js"></script> <!-- Jquery --> 

<script src="js/bootstrap.min.js"></script> <!-- bootstrap 3.0 --> 

<script src="js/respond.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> <!-- bxslider --> 

<script src="js/tabs.js"></script> <!-- tabs --> 

<script src="js/jquery.nouislider.min.js"></script> <!-- price slider --> 

<script>

//call bxslider for sub header section

$(document).ready(function(){

    $('.bxslider').bxSlider({

        auto: true,

        pager: false,

        nextSelector: '.slider-next',

        prevSelector: '.slider-prev',

        nextText: '<img src="images/slider-next.png" alt="slider next" />',

        prevText: '<img src="images/slider-prev.png" alt="slider prev" />'

    });

});

</script> 
<script>

//Setup price slider 

var Link = $.noUiSlider.Link;



$(".priceSlider").noUiSlider({

     range: {

      'min': 0,

      'max': 800000

    }

    ,start: [150000, 550000]

    ,step: 1000

    ,margin: 100000

    ,connect: true

    ,direction: 'ltr'

    ,orientation: 'horizontal'

    ,behaviour: 'tap-drag'

    ,serialization: {

        lower: [

            new Link({

                target: $("#price-min")

            })

        ],



        upper: [

            new Link({

                target: $("#price-max")

            })

        ],



        format: {

        // Set formatting

            decimals: 0,

            thousand: ',',

            prefix: '$'

        }

    }

});

</script>
<<script type="text/javascript">
      function valid(){
		 // alert("hai");
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var numbers = /^[0-9]+$/;  
        var name    = document.getElementById('name').value;
		var phone    = document.getElementById('phone').value;
		var email    = document.getElementById('email').value;
		var amount    = document.getElementById('amount').value;
		var comments    = document.getElementById('comments').value;
		if(name == ''){
            alert("Please enter the  name");
            document.getElementById('name').focus();
            return false;
        }
		else if(phone == ''){
            alert("Please enter the  phone");
            document.getElementById('phone').focus();
            return false;
        }
		else if(isNaN(phone)){
            
            alert("Enter valid number format");
            document.getElementById('phone').focus();
            return false;
      }
           else if(phone.length !=10 ){
            alert("Enter 10 characters length");
            document.getElementById('phone').focus();
            return false;
        }
	
				else if(email == ''){
            alert("Please enter the Email");
            document.getElementById('email').focus();
            return false;
         }
		 
		 else if(!filter.test(email)){
            alert("Enter valid email format");
            document.getElementById('email').focus();
            return false;
        }
		else if (amount == ''){
		 alert("Enter valid email amount");
           document.getElementById('amount').focus();
            return false;
		} 
		else if(isNaN(amount)){
            
            alert("Enter valid number format");
            document.getElementById('amount').focus();
            return false;
      }
		else if (comments == '') {
		  alert("plase enter your comments");
		  document.getElementById('comments').focus();
		  return false;
	  }		
}
</script>

</body>
</html>
