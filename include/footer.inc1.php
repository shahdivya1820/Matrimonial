			 		<?php
	session_start();
	include("database/db3.php");
  $query1 = "update user set last_logged=now() where id='$_SESSION[id]'";
             $res=mysqli_query($db,$query1);
            if (mysqli_query($db,$query1)) {
                
               
            } 
            
            
	?>

			<div class="w3layouts-browse text-center">
		<div class="container">
			<h3>Browse Matchmaking Profiles By</h3>
				<div class="col-md-4 w3-browse-grid">
				<h4>City Name</h4>
				<ul>
				<?php
error_reporting( ~E_NOTICE );


	include("database/db2.php");
if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM user WHERE id=:uid ');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
	echo "";
	}
?>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user WHERE gender!= '$_SESSION[gender]' group by city";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
					<li><a href="l_list.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["city"] ;?></a><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?>  </li>
					
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>Village Name</h4>
				<ul>
					<?php
include("database/db.php");

$sql = "SELECT * FROM user where  gender!= '$_SESSION[gender]' group by village";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
					<li><a href="village.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["village"] ;?></a><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?>  </li></li>
				</ul>
			</div>
			<div class="col-md-4 w3-browse-grid">
				<h4>District</h4>
				<ul>
					<?php
include("database/db.php");

$sql = "SELECT * FROM user where  gender!= '$_SESSION[gender]' group by district";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
					<li><a href="district_list.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["district"] ;?></a><?php
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
	 
	<!-- //Get started -->
	
<!-- footer -->
<div class="w3layous-story text-center">
		<div class="container">
			<h4>Your story is waiting to happen!  <a href="home.php">Get started</a></h4>
		</div>
	</div>
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
							<li><a href="about1.php">About Us</a></li>
							<li><a href="feedback.php">Feedback</a></li>  
								<li><a href="contact1.php">Contact</a></li>  
							
							
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Quick links</h3>
						<ul>
							<li><a href="terms1.php">Terms of use</a></li>
							<li><a href="policy.php">Privacy Policy</a></li>
						<li><a href="cancel.php">Cancellation Policy</a></li>
						<li><a href="payment.php">Payment</a></li>
						
						
						</ul> 
					</div>

					<div class="col-md-4 footer-grids">
						<h3>Follow Us on</h3>
						<section class="social">
                        <ul>
								<li><a class="icon fb" href="https://www.facebook.com/motwanimatrimonial"><i class="fa fa-facebook"></i></a></li>
									<li><a class="icon tw" href="https://www.instagram.com/motwani_matrimonial"><i class="fa fa-instagram"></i></a></li>	
							
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

