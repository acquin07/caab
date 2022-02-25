
<?php
include("connection/connect.php");


	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>search</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		      <!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- uikit -->

        <!-- Theme -->
    
        <!-- custom css -->
		<link rel="stylesheet" href="style.css" />
		
		
	</head>
	<body class="" id="top"  background='grey'>
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Home</a></li>
								
									<li><a href="car.php">Cars</a></li>
									<li class="current"><a href="result.php">Search</a></li>
									<li><a href="contact.php">Contacts</a></li>
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
							<!-- <a href="index.html"> -->
							<img src="images/logo.png" alt="Your Happy Family" width = "30%", height = "30%">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="hotel_booking_area">
                    <div class="container">
                        <div class="hotel_booking">
						
                     <form id="form1"  action=" " class="" method="post">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="room_book border-right-dark-1">
                                        <h6>Book Your</h6>
                                        <p>TAXI</p>
                                    </div>
                                </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="dist" id="adult">
                                                 <option selected="selected" disabled="disabled">Location</option>
                                                  <option value='KALOOR'>Kaloor</option>
                                                  <option value='PANAMBALLI'>Panamballi</option>
                                                  <option value='KAKKANAD'>Kakkanad</option>
												  <option value='FORTKOCHI'>FortKochi</option>
												  <option value='ALUVA'>Aluva</option>
												  <option value='MATTANCHERRY'>Mattancherry</option>
												      
                                                </select>               
                                            </div>
                                        </div>&nbsp;&nbsp;
                                
                            
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select  class="form-control" name='okaat' id="room">
                                                   <option selected="selected" disabled="disabled">Comfort</option>
                                                  <option value='eco'>Economy</option>
                                                  <option value='standard'>Standard</option>
                                                  <option value='lux'>Lux</option>
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="passenger" id="adult">
                                                  <option selected="selected" disabled="disabled">Passenger</option>
                                                  <option value='3'>3 or less passenger</option>
												      <option value='4'>4 or less passenger</option>
														  <option value='6'>6 or less passenger</option>
                                                </select>               
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <input type='submit' name="submit"  value='submit' class="btn btn-primary floatright"/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- special offer start -->
                            
                            <!-- end offer start -->
                        </div>
                    </div>
                </div>
				
				
				
				
				
				
				
			</header>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h3>Search Results:</h3>
					</div>
					
					
	<?php  

	
	
	 if(isset($_POST['submit']))
		{
 
			$dist = $_POST['dist'];
			$okaat = $_POST['okaat'];
			$passenger = $_POST['passenger'];

					$mql = "SELECT * FROM admin where location='$dist' AND comfort='".$okaat."' AND seat='".$passenger."'";
					
					$res= mysqli_query($db, $mql);
		while($row = mysqli_fetch_array($res))
				{
						$id =  $row['v_id'];
						$cimage =  $row['cimage'];
						$cname =  $row['cname'];
						$seat =  $row['seat'];
						$price =  $row['price'];
						$ctext =  $row['ctext'];
						$loc =  $row['location'];
						$comfort =  $row['comfort'];
						
	  
	
	echo '<div class="grid_4">';
	echo 			'<div class="box">';
		echo 				'<div class="maxheight">';
			echo 				"	<img src='admin/images/".$cimage." '>";
				echo 		'	<div class="text1 color2">';
				echo 			     '<a href="#" style="font-weight:bold;">'.$cname.'</a></br></br>';
						
						 	echo 			     'Seats:<span style="font-weight:bold;">'.$seat.'</span></br></br>';
									 	echo 			     'Location:<span style="font-weight:bold;">'.$loc.'</span></br></br>';
										echo 			     'Comfort:<span style="font-weight:bold;">'.$comfort.'</span></br></br>';
							
							echo 			     'Rs.<span style="color:red;font-weight:bold;font-size:30px;">'.$price.'/-</span>';
				
				echo 			'	</div>';
				echo 		         $ctext ;
				echo 			'	<br>';				
				echo 		 "<a href=booking.php?book=".$id." class='btn'>Book Now</a>";
				echo 		'	</div>';
			echo 			'</div>';
			echo 		'</div>';
					
			
	
				}
					  
					 
				
				
				
		}
	else
		{
	
			$sql = "SELECT * FROM admin ";
			$result = mysqli_query($db, $sql);
		while($row = mysqli_fetch_array($result))
				{
						$id =  $row['v_id'];
						$cimage =  $row['cimage'];
						$cname =  $row['cname'];
						$seat =  $row['seat'];
						$price =  $row['price'];
						$ctext =  $row['ctext'];
	  
	
	echo '<div class="grid_4">';
	echo 			'<div class="box">';
		echo 				'<div class="maxheight">';
			echo 				"<img src='admin/images/".$cimage." '>";
				echo 		'	<div class="text1 color2">';
				echo 			     '<a href="#" style="font-weight:bold;">'.$cname.'</a></br></br>';
						
						 	echo 			     'Seats:<span style="font-weight:bold;">'.$seat.'</span></br></br>';
							
							echo 			     'Rs.<span style="color:red;font-weight:bold;font-size:30px;">'.$price.'/-</span>';
				
				echo 			'	</div>';
				echo 		         $ctext ;
				echo 			'	<br>';				
				echo 		 "<a href=booking.php?book=".$id." class='btn'>Book Now</a>";
				echo 		'	</div>';
			echo 			'</div>';
			echo 		'</div>';
					
				}	
		}
    

?>				
								
					
					
	

<div class="clear"></div>



	
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer style='background:black;'>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> + 1800 559 6580</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Tour<span class="color1">T</span>axi </div>
						&copy; 2017	| <a href="#">Privacy Policy</a> </div> Website designed by <a href="#" rel="nofollow">Navbro</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>