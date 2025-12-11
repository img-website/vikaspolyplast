<?php session_start() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<title>VPPL</title>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/favicon.png">
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body style="background:url('images/contact_back.jpg') repeat fixed 0 0 rgba(0, 0, 0, 0);background-size:cover;">
<div style="background:none repeat scroll 0% 0% ">
<div id="header">
  <div class="container header"> 
    <header>
      <div class="logo"style="width:900px;"><h2 style="margin-top:35px;font-size:20px;color:window">VPPL</h2><a href="index.html" style="height:107px;"><img src="images/slide/logo.png" alt="" />
      <h1 style="float:right;color:white;text-shadow: 1px 1px 1px black;font-weight:bold;font-style:italic;">Vikas Polyplast Pvt. ltd.<br><span style="color: #fff;">Klassic Packaging Pvt. Ltd.</span></h1></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          
        </div>
        
        <!-- Responsive Menu -->
        
        <form id="responsive-menu" action="#" >
          <select>
            <option value="">Navigation</option>
            <option value="index.html">Home</option>
            <option value="about.html">About Us</option>
            <option value="portfolio.html">Products</option>
         
            <option value="blog.html">Infrastructure</option>
    
            <option value="contact.php">Contact Us</option>
          </select>
        </form>
      </div>
    </header>
	
  </div>
</div>
<div style="width:100%;background:#DFE0E7;">
<div style="width:60%;height:40px;margin:auto;">
	<ul class="sf-menu">
            <li ><a href="index.html" ><span class="home"><img src="images/home.png" alt="" /></span>Home</a></li>
            <li><a href="about.html"><span class="home"><img src="images/about.png" alt="" /></span>About Us</a></li>
            <li><a href="product.html"><span class="home"><img src="images/portfolio.png" alt="" /></span>Products</a>
             
            </li>
            <li><a href="infrastructure.html"><span class="home"><img src="images/blog.png" alt="" /></span>Infrastructure</a>
             
            </li>
           
            <li class="current"><a href="contact.php"><span class="home"><img src="images/contact.png" alt="" /></span>Contact Us</a></li>
          </ul>
	</div>
	</div>
<!-- Contact Content Part - GoogleMap ==================================================
================================================== -->


<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<section>
<div class="container contact_block">
<div style="margin-left:20px;">
<ul>
<li><div><h3>Vikas Polyplast Pvt. Ltd.</h3><br>Phone: +91 9309335000 (04,09)<br><br>Email Id : vppl.593@gmail.com</div></li>

<li><div ><h3>Klassic Packaging Private Ltd</h3><br>Director: Richa Data<br>Phone: +91 930 933 5085 (84,05)<br><br>Email Id : klassichags14@gmail.com</div></li>
</ul>
</div>
</div>
</section>
<div class="container">
  <div class="blankSeparator"></div>
  <!-- Contact Sidebar ==================================================
================================================== -->
  <div class="one_third contactsidebar" style="margin:0">
    <section class="first">
      <h2 style="color:white;">Contact Information</h2>
	   <div class="sepContainer"></div>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Vikas Polyplast Pvt. Ltd.<br>
        F-593, Matasya Industrial Area,<br>
        Alwar, 301030<br><br>
        </li>
        <li>Bags Division: Klassic Packaging Private Ltd<br>
        Unit - I: H1-742,743 Matasya Industrial Area,<br>
        Alwar -301030<br>
        Unit - II: H-166 Mator Road, Khairthal,<br>
        district-Khairthal Tijara (Raj.) - 301404<br><br>
        </li>
        <li>Vikas Polyplast Pvt. Ltd.<br>
        Phone: +91 9309335000 (04,09)<br>
        Email: vppl.593@gmail.com <hr>
        Klassic Packaging Private Ltd<br>
        Director: Richa Data<br>
        Phone: +91 930 933 5085 (84,05)<br>
        Email: klassichags14@gmail.com
		</li>
		<li>Website: <a href="http://www.vikaspolyplast.com" title="">http://www.vikaspolyplast.com</a></li>
        
		
		 
      </ul>
    </section>
  
  </div>
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1" style="margin:0px";>
    <div id="contactForm " class="first">
        <h2 style="color:white;">Contact Form</h2>
      <div class="sepContainer"></div>
      <form action="action.php" method="POST"    class="contact-form" >
        <div class="name">
          <label for="name">Your Name:</label>
          <p> Please enter your full name</p>
          <input id=name class="form-control" name=name type=text placeholder="Enter Name" required />
        </div>
        <div class="email">
          <label for="email">Your Email:</label>
          <p> Please enter your email address</p>
          <input id=email  class="form-control" name=email type=email placeholder="Enter Your Email" required />
        </div>
        <div class="message">
          <label for="message">Your Message:</label>
          <p> Please enter your question</p>
          <textarea id=message class="form-control" name=message rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
          <input type="submit" class="submit" name="submit" value="Submit" />
        </div>
      </form>
    </div>
    <!-- end contactForm --> 
  </div>
  
</div>
<div class="blankSeparator2"></div>
<section class="map"> 
  <!-- google map -->
  <div class="map-holder">
    <div class="map-container" style="height:250px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14155.000181315774!2d76.694325!3d27.508148000000023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x470234ce851719a9!2sVikas+Polyplast+Pvt.+Ltd!5e0!3m2!1sen!2sin!4v1415473253042" width="600" height="450" frameborder="0" style="border:0"></iframe>
      <!-- end google map --> 
    </div>
    <!--map-container ends here--> 
  </div>
  <!--map-holder ends here--> 
</section>
<!--Footer ==================================================
================================================== -->
<div id="footer">
  <div class="container footer">
    <div class="one_fourth">
      <h3>CONTACT ADDRESS</h3>
      <div class="footer_address">
        <p>Vikas Polyplast Pvt. Ltd.<br>
            F-593, Matasya Industrial Area,<br>
            Alwar, 301030<br>
        </p>
        <p>Bags Division: Klassic Packaging Private Ltd<br>
            Unit - I: H1-742,743 Matasya Industrial Area,<br>
            Alwar -301030<br>
            Unit - II: H-166 Mator Road, Khairthal,<br>
            district-Khairthal Tijara (Raj.) - 301404
        </p>
      </div>
    </div>
    
    <div class="one_fourth">
      <h3>CONTACT INFORMATION</h3>
	  <ul class="footer_contact">
          <li>Phone: +91 9309335000 (04,09)<br></li>
          <li>Email Id: vppl.593@gmail.com</li>
          <li><br>Klassic Packaging:<br>
          Phone: +91 930 933 5085 (84,05)<br>
          Email: klassichags14@gmail.com</li>
      </ul>
    </div>
	<div class="one_fourth">
      <h3>Menu</h3>
    <ul>
            <li><a href="index.html"><img src="images/home.png" alt="" />Home</a></li>
            <li><a href="about.html"><img src="images/about.png" alt="" />About Us</a></li>
            <li><a href="product.html"><img src="images/portfolio.png" alt="" />Products</a>
             
            </li>
            <li><a href="infrastructure.html"><img src="images/blog.png" alt="" />Infrastructure</a>
             
            </li>
           
            <li><a href="contact.php"><img src="images/contact.png" alt="" />Contact Us</a></li>
          </ul>
    </div>
    <div class="one_fourth lastcolumn">
      <h3>About Us</h3>
      <p>Vikas Polyplast Pvt. Ltd. is situated at Alwar district of Rasjasthan and manufacturing PP/HDPE, woven fabric and sack with a processing capacity of manufacturing one lakh bags per day.</p>
    </div>
  </div>
  <!-- container ends here --> 
</div>
</div>

<!-- footer ends here --> 
<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <div class="container">
    <div class="eleven columns alpha">
      <p class="copyright">Copyright 2021. by <a>Vikas Polyplast</a>. All rights reserved.</p>
    </div>
	<div class="five columns omega">
      <section class="socials">
        <ul class="socials fr">
          <li><a href="http://www.twitter.com" target="_blank"><img src="images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li>
          <li><a href="http://www.facebook.com" target="_blank"><img src="images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li>
          <li><a href="http://www.google.com" target="_blank"><img src="images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li>
          
        </ul>
      </section>
    </div>
	<div class="copy" style="vertical-align:middle;padding-top:10px;" >
								Copyrights 2021: Site Maintained By
			    <a target="_blank" href="http://www.imgglobalinfotech.com"> <img src="images/img.png"style="vertical-align:middle"></a>
		    </div>	 
    
  </div>
  <!-- container ends here --> 
</div>



<!-- Scripts ==================================================
================================================== --> 
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
    

<style>
 .width12{float:left;width:100%; position:relative;}
    .width4{float:left;width:33.33%;position:relative;}
    .text-center{text-align:center;}
.main-panel {
    position: fixed;
    z-index: 100;
    height: 100%;
    background: rgba(0,0,0,0.5);
    top: 0;
    left: 0;
	z-index:1000;
}
.center-panel {
    padding: 0px;
    left: 33%;
    top: 50%;
	transform:translateY(-50%);
	background: #f8f8f8;
	box-shadow: 0px 1px 7px 1px #333;
	border-bottom: 5px solid #666;
	border-radius: 4px;
}
.al-box {
    color: #333;
    background-color: #f8f8f8;
    font-size: 20px;
	border:0px solid;
	font-weight: bold;
    padding: 30px 30px;
	text-align: center;
	margin-bottom: 0px;
}
.close-icon {
    cursor: pointer;
    color: #fff;
    opacity: 1;
    left: auto;
    bottom: auto;
    position: absolute !important;
	top: 0px !important;
    right: 0px !important;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;		
	text-shadow: none;
}
.close.close-icon{
	color: #333;
}
.close:focus, .close:hover {
    color: #d8302b;
    opacity:1;
}
.msg-title h3 {
    text-align: center;
    padding: 37px 0 0;
    margin: 0;
    color: #58C0AA;
    line-height: 40px;
    font-size: 20px;
}
.symbol-circle{
	background:#f8f8f8;
	color:#333;
	position: absolute ;
	top: 0px ;
    left: 50% ;
	transform: translate(-50%, -50%);
    height: 50px;
    width: 50px;
    border-radius: 50%;
	display: flex;
    align-items: center;
    justify-content: center;
	font-size:40px;
}
.symbol-circle i{
	font-size:40px;
}
.pop-up-close{
	background:#58C0AA;
	border:1px solid #58C0AA;
	color:#fff;
	border-radius: 20px;
	padding: 8px 60px;
	font-weight: bold;
	margin-bottom:40px;
	transition:all 0.3s;
}
.pop-up-close:hover{
	background:#000;
	border:1px solid #000;
}
.myfonticon{background: #58C0AA;
    border-radius: 50%;
    color: #fff;
    width: 45px;
    height: 45px;
    text-align: center;
    padding: 8px;
    font-size: 30px !important;}
   
</style>


<?php
				if(isset($_SESSION['message'])){ ?>
<div id="mainpanel" class="width12 main-panel" >										
		<div class="width4 center-panel">
			<div class="width12 msg-title"><h3>Thank You</h3>
			<div class="symbol-circle"><img src="images/about.png" /></div>
			</div>
			<div class="width12">
			<div class="alert alert-success alert-dismissable al-box" role="alert" >
				
				<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				?>
				
				
			</div>
			</div>
			<div class="width12 msg-title text-center">
			<button onclick="closeAlert()" type="button"class="pop-up-close">Close</button>
			</div>
			<a onclick="closeAlert()" class="close close-icon"  data-dismiss="alert" aria-label="close">&times;</a>
		</div>
	</div>
	 <?php } ?>
	 	<script>
	function closeAlert() {
		document.getElementById("mainpanel").style.display = "none";
	}
</script> 
	 
</body>
</html>