<?php
include("connection/connect.php");

																								   
if(isset($_POST['submit']))                  //if post btn is pressed
{   


    
	$name = $_POST['Name'];      
	$email = $_POST['Email'];      
	$Dfrom = $_POST['From'];      
	$Dto = $_POST['To'];      
	$date = $_POST['Date'];      
	$time = $_POST['Time'];      
	$Adult = $_POST['Adults'];      
	$child = $_POST['Children'];      
	$text = $_POST['Message'];  
   	$pack = $_POST['Comfort'];    	
	
	if(!$name==' '||$email==' '||$Dfrom==' '||$Dto==' '||$date==' '||$time==' '||$Adult==' '||$child==' '||$text==' '||$pack=='')
	{
	
	               echo '<div class="alert alert-dismissable fade in">';
                    echo	'<a href="#"  data-dismiss="alert" ></a>';				
				    echo ' All Text Field must be required!';
					echo  	'</div>';	
	
	}
	else
	{
	  
					
	$sql = "INSERT INTO user_info(name,email,Dfrom,Dto,date,time,adult,child,text,pack) VALUES ('$name', '$email','$Dfrom','$Dto','$date','$time','$Adult','$child','$text','$pack')";
	mysqli_query($db, $sql);
		header("refresh:1;url=result.php");
	
  echo '<div class="alert alert-success alert-dismissable fade in">';
 echo	'<a href="#" data-dismiss="alert" ></a>';
 echo 'Your Booking submit Successfully. Details are send to your Registered E-mail Address.';
echo  	'</div>';
	}
	
	
	
	
	
	
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.html">
		<link rel="shortcut icon" href="images/favicon.html" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
			<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.php">Home</a></li>
									
									<li><a href="car.php">Cars</a></li>
									<li><a href="result.php" >Search</a></li>
									<li><a href="contact.php" >Contacts</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			
			<div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>+91 9999999999
						<span>BOOK NOW!</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon1.png" alt="">
								<div class="extra_wrapper">Fast&amp;
									<div class="color1">Safe</div>
								</div>
							</div>
							ZAC Cab Service offers the fastest, most convenient cab service in Ernakulam, and beyond. ZAC Cab drivers believe safety, and courtesy are amongst our highest concerns.
							
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon2.png" alt="">
								<div class="extra_wrapper">Best
									<div class="color1">Prices</div>
								</div>
							</div>
							ZAC Cab promises to provide the best cab service value for your money. We pride ourselves in being knowledgeable about the quickest routes to and from destinations.
							
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img id="icon" src="images/icon3.png" alt="">
								<div class="extra_wrapper">Quality
									<div class="color1">Service</div>
								</div>
							</div>
							Your enthusiasm is our happiness.

Best assistance, perfect time, perfect people.

Surely, we can assist you better.

We can bring a smile to your face.

We see the happiness of assisting you best.
							
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			
<!--==============================Content=================================-->
			<div class="content"><div class="ic">all right recived :@2022-23</div>
				<div class="container_12">
					<div class="grid_5">
						<h3>Booking Form</h3>
						
						<form id="bookingForm" action=""  method="post">
							<div class="fl1">
							
								<div class="tmInput">
									<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
								</div>
								
								<div class="tmInput">
									<input name="From" placeHolder="From:(location)" type="text" data-constraints="@NotEmpty @Required ">
								</div>
							</div>
							
							<div class="fl1">
								<div class="tmInput">
									<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								
								<div class="tmInput mr0">
									<input name="To" placeHolder="To:(location)" type="text" data-constraints="@NotEmpty @Required">
								</div>
							</div>
							
							<div class="clear"></div>
							<strong>Pick Time</strong>
							
							<div class="tmInput">
								<input name="Time" placeHolder="hh:mm" type="text" data-constraints="@NotEmpty @Required">
							</div>
							
							<div class="clear"></div>
							<strong>Pick Date</strong>
		</br>
							<label class="tmDatepicker">
								<input type="text" name="Date"	placeHolder='dd/mm/yyyy' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div>
		                    </br>
							</div>
							<div class="clear"></div>
							<div class="tmRadio">
								<input name="Comfort" type="radio" value='Eco' id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
								<span>Economy</span>
								<input name="Comfort" type="radio"  value='standard'  id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Standard</span>
								<input name="Comfort" type="radio"   value='lux'  id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Luxuary</span>
							</div>
							<div class="clear"></div>
							<div class="fl1 fl2">
								<em>Adults</em>
								<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option value='0'>0</option>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
								</select>
								<div class="clear height1"></div>
		</br>
		</br>
							</div>
						
							<input class="btn btn-primary" type="submit" value="Submit">
						</form>
						
						
					</div>
					<div class="grid_6 prefix_1">
						<a href="index2.html" class="type"><img src="images/page1_img1.jpg" alt=""><span class="type_caption">Economy</span></a>
						<a href="index2.html" class="type"><img src="images/page1_img2.jpg" alt=""><span class="type_caption">Standard</span></a>
						<a href="index2.html" class="type"><img src="images/page1_img3.jpg" alt=""><span class="type_caption">Luxuary</span></a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> +91 9999999999</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">ZAC<span class="color1"> C</span>abs </div>
						&copy; 2022| <a href="#">Privacy Policy</a> </div> all right recived
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
		<script>
			<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
		</script>
	</body>
</html>