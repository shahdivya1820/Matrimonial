<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<link rel="stylesheet" type="text/css" href="css/custom2.css " />
<?php
session_start();

if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {

header ("Location:login.php");

}

?>

   <?php 

if(isset($_SESSION['email'])){
    if($_SESSION['pay_status']=='1')
    {
        include("include/header.inc2.php");
    }
  else
  {
      include("include/header.inc1.php");
  }
  
}else{  
    
  include("include/header.inc.php");
}
?>
<!-- /header -->
<span id="error">
			<!----Initializing Session for errors--->
                    <?php
                    if (!empty($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </span>
	<!-- inner banner -->	
	<div class="w3layouts-inner-banner">
		<div class="container">
			<div class="logo">
			
			<h1>
				<?php 
    if(!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
       echo '<a href="index.php" style="text-decoration: none;" >Motwani Matrimonial</a>';
    }
    else{
        echo '<a href="home.php"  style="text-decoration: none;">Motwani Matrimonial</a>';
    }
 ?></h1>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //inner banner -->	
	
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><?php 
    if(!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
       echo '<a href="index.php">Home</a>';
    }
    else{
        echo '<a href="home.php" >Home</a>';
    }
 ?>  > <span>Ages here</span></span>
		</div>
	</div>

	<div class="w3ls-list">
		<div class="container">
		<h2>Age Matrimonial Profiles list</h2>
		<div class="col-md-9 profiles-list-agileits update">
		    <div class="col-md-3 w3ls-aside">
			<h4>Filter Profiles by</h4>
			<div class="fltr-w3ls">
				<h5>Your Age</h5>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<li><a href="ages.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["age"] ;?></a> </li><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?> 
				</ul>
			</div>
				<div class="fltr-w3ls">
				<h5>Your Occupations</h5>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<li><a href="o_list.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["work"] ;?></a> </li><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?> 
				</ul>
			</div>
			<div class="fltr-w3ls">
				<h5>Your Education</h5>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<li><a href="education.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["education"] ;?></a> </li><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?> 
				</ul>
			</div>
			<div class="fltr-w3ls">
				<h5>Your Current City</h5>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<li><a href="l_list.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["city"] ;?></a> </li><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?> 
				</ul>
			</div>
			<div class="fltr-w3ls">
				<h5>Your Village</h5>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<li><a href="village.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["village"] ;?></a> </li><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?> 
				</ul>
			</div>
			<div class="fltr-w3ls">
				<h5>Your District</h5>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<li><a href="district_list.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["district"] ;?></a> </li><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?> 
				</ul>
			</div>
			<div class="fltr-w3ls">
				<h5>Your Height</h5>
				<ul>
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
				<li><a href="height.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["height"] ;?></a></li><?php
    }
} else {
    echo "No Match Founds";
}

$conn->close();
?>  
				
				</ul>
			</div>
			<div class="fltr-w3ls">
				<h5>Your Body Type</h5>
				<ul>
								<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<li><a href="body.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["body"] ;?></a> </li><?php
    }
} else {
   echo "No Match Founds";
}

$conn->close();
?> 
					
				</ul>
			</div>
		</div>
		<!--Horizontal Tab-->
			<div id="parentHorizontalTab">
				<ul class="resp-tabs-list hor_1">
					<li>User's Profile</li>
					
				</ul>
				<div class="resp-tabs-container hor_1">
					<div>			
						<div class="match-profile">
							
							
							<?php
include("database/db.php");
$sql ="select * from user where email='$_SESSION[email]' AND pay_status='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each rowS
    while($row = $result->fetch_assoc()) {
$sql = "SELECT * FROM user where gender!='$_SESSION[gender]'AND age='$age' AND pay_status='1' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each rowS
    while($row = $result->fetch_assoc()) {
		?>
		<div class="col-md-6 one-w3-profile">
								<div class="profile-details">
								<a href="profile3.php?edit_id=<?php echo $row['id']; ?>" >
									<h5>Profile ID : <?php echo  $row["id"]; ?></h5>
									<img src="profile/<?php echo  $row["image"]; ?>" class="prf-img img-responsive" alt="profile image" />

									<div class="w3-prfr">
										<p><?php echo  $row["age"]; ?> Years,<?php echo  $row["gender"]; ?>, <?php echo  $row["height"]; ?>" , <?php echo  $row["religion"]; ?>,<?php echo  $row["education"]; ?>, Rs. <?php echo  $row["salary"]; ?>, <?php echo  $row["work"]; ?></p>
										<h4>Contact Now:</h4>
										
									
									</div>
									<div class="clearfix"></div>
									<p class="light">
									<?php

$position=14; // Define how many character you want to display.

$message=$row["about"];  
$post = substr($message, 0, $position); 

echo $post;
echo "..."; 

?>
									</p>	</a>
								</div>
							</div>
						
							<?php
    }
} else {
    echo "No Match Founds";
}
}
}
else
{
    $sql = "SELECT * FROM user where gender!='$_SESSION[gender]'AND age='$age' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each rowS
    while($row = $result->fetch_assoc()) {
		?>
		<div class="col-md-6 one-w3-profile">
								<div class="profile-details">
								<a href="profile1.php?edit_id=<?php echo $row['id']; ?>" >
									<h5>Profile ID : <?php echo  $row["id"]; ?></h5>
									<img src="profile/<?php echo  $row["image"]; ?>" class="prf-img img-responsive" alt="profile image" />

									<div class="w3-prfr">
										<p><?php echo  $row["age"]; ?> Years,<?php echo  $row["gender"]; ?>, <?php echo  $row["height"]; ?>" , <?php echo  $row["religion"]; ?>,<?php echo  $row["education"]; ?>, Rs. <?php echo  $row["salary"]; ?>, <?php echo  $row["work"]; ?></p>
										<h4>Contact Now:</h4>
										
									
									</div>
									<div class="clearfix"></div>
									<p class="light">
									<?php

$position=14; // Define how many character you want to display.

$message=$row["about"];  
$post = substr($message, 0, $position); 

echo $post;
echo "..."; 

?>
									</p>	</a>
								</div>
							</div>
						
							<?php
    }
} else {
    echo "No Match Founds";
}
}
$conn->close();
?>			
							
							
							
							<div class="clearfix"></div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		

		
	<div class="clearfix"></div>
	</div>
	<!-- Modal -->
				
				<!-- //Modal -->
	</div>
	<script src="js/easyResponsiveTabs.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
		
					$name.text($tab.text());
		
					$info.show();
				}
			});
	 
		});
	</script>
	<!-- /List of brides and grooms-->
	
	<!-- browse profiles -->
<?php 

if(isset($_SESSION['email'])){
    if($_SESSION['pay_status']=='1')
    {
        include("include/footer.inc2.php");
    }
  else
  {
      include("include/footer.inc1.php");
  }
  
}else{  
    
  include("include/footer.inc.php");
}
?>
