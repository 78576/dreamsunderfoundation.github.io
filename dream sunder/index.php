<?php
include('includes/config.php');
session_start();
error_reporting(0);

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dream Sunder Foundation || Home Page</title>
<style>
	.banner-head  h2{
	font-family:'Times New Roman';
	color:green;
	font-size: 3.3em;
	text-transform: uppercase;
	}
	.banner-head h4{
	color: black;
	font-family: 'Lato', sans-serif;
	font-size: 1.1em;
	margin: 1em 0 0 0;
	font-weight: 400;
	line-height: 1.9em;
}

	</style>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--Custom Theme files-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>

 <!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--webfonts-->
<link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">
	<!--webfonts-->
</head>
<body>
<?php include_once('includes/header.php');?>
	</div>	
</div>	
<div class="banner-section">
	<div class="container">
		<div class="banner-head">
			<h2>Dreams Sunder: Empowering Dreams, Building Futures. </h2>
			<h4>The Dream Sunder Foundation: Empowering Dreams, Transforming Lives

Introduction:

The Dream Sunder Foundation is a beacon of hope and transformation, a non-profit organization dedicated to uplifting the lives of those in need. The foundation operates with a vision of creating a world where every individual can achieve their aspirations, regardless of their circumstances. Guided by unwavering determination and a spirit of compassion, the Dream Sunder Foundation endeavors to make dreams come true by providing educational, healthcare, and socio-economic support to vulnerable communities.</h4>		</div>
	</div>
</div>
		<div class="welcome-section">
				<div class="container">
					<div class="welcom-grids">
						<div class="col-md-6 welcom-grid-img">
							<img src="images/v1.png" title="img" />
						</div>
						<div class="col-md-6 welcom-grid-text">
							<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							<h2><?php  echo $row['PageTitle'];?></h2>
							<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
						</div>
						<div class="clearfix"> </div>  
					</div>
				</div>
			</div>
			<!--start-letest-->
			 <div class="letest-section">
	 			<div class="container">
	 				<?php



$ret=mysqli_query($con,"select * from tblpage where PageType='rules' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	 				<h3><?php  echo $row['PageTitle'];?></h3>
	 				<p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
	 				
    </div>
 </div>
 
 <!--/End-services-->
<div class="Events">
	<div class="wmuSlider example1">
		 	<div class="container">
		 		<h3>Gallery</h3>
				 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="client-sections">
						<div class="event-section">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc1.jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc2.jpg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc3.jpg" title="" />
									</div>	
				 				</div>
				 				<div class="clearfix"> </div>  		
				 			</div>
				 			<div class="event-section1">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc4.jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc5.jpg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc6.jpg" title="" />
									</div>	
				 				</div>
				 				</div>
			 				<div class="clearfix"> </div> 
			 		 </div> 		
		 			 </article>
		 			 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="client-sections">
						<div class="event-section">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc6.jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc5.jpg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc4.jpg" title="" />
									</div>	
				 				</div>
				 				<div class="clearfix"> </div>  		
				 			</div>
				 			<div class="event-section1">
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc3.jpg" title="" />
									</div>
					 			</div>
				 				<div class="col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc2.jpg" title="" />
									</div>	
				 				</div>
				 				<div class=" col-md-4">
				 					<div class="client-img">
					 					<img src="images/cc1.jpg" title="" />
									</div>	
				 				</div>
				 				</div>
			 				<div class="clearfix"> </div> 
			 		 </div> 		
		 			 </article>
			
			
				 </div>
		  	</div>
		  	<div class="clearfix"> </div>  	
		</div>
	</div>
  </div>          
   <script src="js/jquery.wmuSlider.js"></script> 
					<script>
       				     $('.example1').wmuSlider();         
   					</script> 	           	      

<!--/new-projects-->
	
	<!--/start-footer-->
	<?php include_once('includes/footer.php');?>
								<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>




</body>
</html>				