			<div class="w3layouts-browse text-center">
		<div class="container">
			<h3>Browse Matchmaking Profiles by</h3>
				<div class="col-md-4 w3-browse-grid">
				<h4>By City Name</h4>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT DISTINCT city FROM user order by id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
					<li><a href="l_list.php?edit_city=<?php echo $row['city']; ?>"><?php  echo  $row["city"] ;?></a><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?>  </li>
					
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>By Village Name</h4>
				<ul>
					<?php
include("database/db.php");

$sql = "SELECT DISTINCT village FROM user order by id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
					<li><a href="village.php?edit_village=<?php echo $row['village']; ?>"><?php  echo  $row["village"] ;?></a><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?>  </li></li>
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>By District</h4>
				<ul>
					<?php
include("database/db.php");

$sql = "SELECT DISTINCT district FROM user order by id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
					<li><a href="district_list.php?edit_district=<?php echo $row['district']; ?>"><?php  echo  $row["district"] ;?></a><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?>  </li></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="w3layous-story text-center">
		<div class="container">
			<h4>Your story is waiting to happen!  <a href="index.php">Get started</a></h4>
		</div>
	</div>
	<!-- //Get started -->
	
<!-- footer -->
<footer>
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h6>Get in Touch.</h6>
					</div>
					<ul>
						
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:support@motwanimatrimonial.com"> support@motwanimatrimonial.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Motwani</h3>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="feedback.php">Feedback</a></li>  
								<li><a href="contact.php">Contact</a></li>  
							
							
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Quick links</h3>
						<ul>
							<li><a href="terms.php">Terms of use</a></li>
							<li><a href="privacy_policy.php">Privacy Policy</a></li>
								<li><a href="cancel1.php">Cancellation Policy</a></li>
							
						
						</ul> 
					</div>
				
					<!-- footer -->
<?php function getUserIpAddr(){
    if(!empty($_SERVER['HTTPS_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTPS_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTPS_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTPS_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

 $ip = getUserIpAddr();
 echo "<br>";
?>
  <?php
		include 'dbconfig.php';
		$qry = "SELECT * FROM `ipdb` WHERE `ip` = '$ip'";
		$result = mysqli_query($con,$qry);
		$num = mysqli_num_rows($result);
		if ($num == 0){
			$qry3 = "INSERT INTO `ipdb`(`ip`) VALUES ('$ip')";
			mysqli_query($con,$qry3);
			//echo "new ip register";	
			$qry1 = "SELECT * FROM `counter` WHERE `id` = 0";
			$result1 = mysqli_query($con,$qry1);
			$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
			$count = $row1['visiters'];
			$count = $count + 1;
			//echo "<br>";
			//echo "number of unique visiters is $count";
			$qry2 = "UPDATE `counter` SET `visiters`='$count' WHERE `id`=0";
			$result2=mysqli_query($con,$qry2);
}else{
			$qry1 = "SELECT * FROM `counter` WHERE `id` = 0";
			$result1 = mysqli_query($con,$qry1);
			$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
			$count = $row1['visiters'];
			//echo "<br>";
			//echo "number of unique visiters is $count";
}
  ?>
					<div class="col-md-4 footer-grids">
						<h3>Follow Us on</h3>
						<section class="social">
                        <ul>
							<li><a class="icon fb" href="https://www.facebook.com/motwanimatrimonial"><i class="fa fa-facebook"></i></a></li>
						<li><a class="icon tw" href="https://www.instagram.com/motwani_matrimonial"><i class="fa fa-instagram"></i></a></li>	
						<font color="#ffeac4">	<?php echo $count;?></font>
						</ul>
						</section>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	
	</div>
<div class="copy-right"> 
		<div class="container">
			<p>© 2019-2020 Motwani Matrimonial. All rights reserved | <span id="siteseal"></span> </p>
		</div>
	</div>
	
	
</footer>
<!-- //footer -->	
<link href="css/custom1.css" rel="stylesheet" type="text/css" media="all" />
<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
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
	<!-- //for smooth scrolling -->

</body>
<!-- //body -->
</html>
<!-- //html -->
