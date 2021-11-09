<?php
//session_start();

//if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {

//header ("Location:login.php");

//}

?>

<?php
 $lifetime=600;
 
session_start();
 setcookie(session_name(),session_id(),time()+$lifetime);
?>
<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]' ";
$result =mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);

$dateTs=strtotime($row['dob']);
 
$now=strtotime('today');
 
$ageDays=floor(($now-$dateTs)/86400);
 
$ageYears=floor($ageDays/365);
$sql1="update user age='$ageYears' where id='$_SESSION[id]'";
$res=mysqli_query($conn, $sql1);

}


?>
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>



<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
 <link href="image/logo.png" rel="icon">
  
 
<!-- Custom Theme files -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->

 <title>Matrimony, Shadi and Marriage, Free Matrimonial Site, Match Making - motwanimatrimonial.com</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<link href="css/custom1.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<!--meta data-->
<link href="image/logo.png" rel="icon">

 <meta name="copyright" content="2018 https://www.motwanimatrimonial.com/">
  <meta name="description" content="The best website for match making over maximum number of user, motwanimatrimonial  help to find perfect life partner. Login Now ! .  ">
 <meta name="keywords" content="Matrimonial, Matrimony, Matrimonial's, Indian Matrimonial, Marriage, motwanimatrimonial.com, motwanimatrimonial.com, motwanimatrimonial.com, motwanimatrimonial.com, motwanimatrimonial.com, motwanimatrimonial.com, motwanimatrimonial.com, Match Making Website, Hastmilap, Gathbandhan, sathphere,mangal vivah, Shubh Mangal Savadhan, Indian Shadi, Madhur Vela .">
<meta name="robots" content="index,follow ">
<meta name="DC.title"content="Matrimony, Shadi and Marriage, Free Matrimonial Site, Match Making - https://www.motwanimatrimonial.com/">
<meta property ="og Column Title" content="Matrimony, Shadi and Marriage, Free Matrimonial Site, Match Making - https://www.motwanimatrimonial.com/">
<meta property ="og Url" content="https://www.motwanimatrimonial.com//">
 
 
 
 
 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->

<!-- nav smooth scroll -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>	
<!-- //nav smooth scroll -->			


	   
<link rel="stylesheet" href="css/intlTelInput.css">
<style>
a.live_chat {
    background-color: #78bcf7;
}
@media (min-width: 1200px)
{
    
    .collapse.navbar-collapse.search-bar {
    width: 32%;
    margin-top: 13px;
    margin-left: 33%;
}
i.fa.fa-search {
    padding: 4px;
}
button.search-bar {
    background-color: #e4c735;
    border-radius: 10px;
       border: 1px solid;
}

input#search {
    padding: 2px;
    width: 64%;
}
}
@media (min-width: 768px)
{
   .collapse.navbar-collapse.search-bar {
    width: 32%;
    margin-top: 12px;
    margin-left: 25%;
}
i.fa.fa-search {
    padding: 4px;
}
button.search-bar {
    background-color: #e4c735;
    border-radius: 10px;
       border: 1px solid;
}

input#search {
    padding: 2px;
    width: 60%;
}
}
a.live_chat {
    background-color: #a79038;
}
</style>
</head>
<!-- //head -->
<!-- body -->
<body>
<?php
error_reporting( ~E_NOTICE );


	include("database/db2.php");
if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM user WHERE id =:uid ');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
	 echo "";
	}
?>

<!-- header -->
<header>
	<!--  Navigation Start -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
         
			
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		   </div> 
		   <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
		       	        				<ul class="nav navbar-nav nav_1">
				    
				   
		          
				   <li>
					
					
					<a href="home.php?edit_id=<?php echo $row['id']; ?>">Home</a>

					</li>
					 <li><a href="bride_profile.php?edit_id=<?php echo $row['id']; ?>">Profile</a></li>
					 
					 <li><a href="payment.php" class="live_chat">Live Chat</a></li>
		           <li><a href="kundali.php?edit_id=<?php echo $row['id']; ?>">Match Making</a></li>
		           
		          &nbsp;&nbsp;&nbsp;&nbsp;
					  <button type="button" class="btn btn-primary btn-lg"><a href="logout.php"><font color="white">Logout!</font></a></button>
		        </ul>
									 
		     </div>
		    </nav>
		   </div> <!-- end pull-right -->
		      <div class="collapse navbar-collapse search-bar" id="bs-megadropdown-tabs">
		  <div class="search-box">
     <form action="search-res.php" method="post">
 <input type="text" id="search" placeholder="Search by Name" name="term" required />
 
<button type="submit" class="search-bar"  name="search"><i class="fa fa-search" aria-hidden="true"></i>
</button>


 
 
 </form>
   
   </div>
   </div>
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<?php
    }
} else {
    echo "";
}

$conn->close();
?> 
</header>

<head>
    				<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7604064736046729",
          enable_page_level_ads: true
     });
</script>-->
    
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<script src="js1/jquery-1.11.1.min.js"></script> 
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css1/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
	<div class="w3layouts-inner-banner">
		<div class="container">
			<div class="logo">
				<h1>
				<?php 
    if(!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
       echo '<a href="index.php"style="text-decoration: none;" >Motwani Matrimonial</a>';
    }
    else{
        echo '<a href="home.php" style="text-decoration: none;" >Motwani Matrimonial</a>';
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
 ?>  > <span>Payment</span></span>
		</div>
	</div>
</head>

	<div class="main">

		<h1>Our Pricing Plans </h1>

		<div class="w3l_main_grids">
			<div class="w3l_main_grid">
				<div class="w3l_main_grid_top">
					<h3>3 Months <br> <span>Membership</span></h3>
					<img src="images1/1.png" alt=" " />
				</div>
				<div class="w3l_main_grid_middle">
					<ul>	
					
						<li>Connect with Your Perfect Match</li>
						<li>Start Conversation With Your Connection </li>
					    <li>Update / Delete Your Details</li>
						<li>Manage Your Privacy</li>
						<li>Get Notification About New Registration</li>
					</ul>
				</div>
				<div class="w3ls_order">
					<h3>800 INR</h3>
					<a class="popup-with-zoom-anim" href="TxnTest.php?price=800">Book Now</a>
				</div>
			</div>
			<div class="w3l_main_grid">
				<div class="w3l_main_grid_top w3l_main_grid_top1">
					<h3>6 Months <br> <span>Membership</span></h3>
					<img src="images1/2.png" alt=" " />
				</div>
				<div class="w3l_main_grid_middle w3l_main_grid_middle1">
					<ul>	
						<li>Connect with Your Perfect Match</li>
						<li>Start Conversation With Your Connection </li>
						<li>Update / Delete Your Details</li>
						<li>Manage Your Privacy</li>
						<li>Get Notification About New Registration</li>
					</ul>
				</div>
				<div class="w3ls_order w3ls_order1">
					<h3>1200 INR</h3>
					<a class="popup-with-zoom-anim" href="TxnTest.php?price=1200">Book Now</a>
				</div>
			</div>
			<div class="w3l_main_grid">
				<div class="w3l_main_grid_top w3l_main_grid_top2">
					<h3>1 Year  <br> <span>Membership</span></h3>
					<img src="images1/3.png" alt=" " />
				</div>
				<div class="w3l_main_grid_middle w3l_main_grid_middle2">
					<ul>	
						<li>Connect with Your Perfect Match</li>
						<li>Start Conversation With Your Connection </li>
						<li>Update / Delete Your Details</li>
						<li>Manage Your Privacy</li>
						<li>Get Notification About New Registration</li>
					</ul>
				</div>
				<div class="w3ls_order w3ls_order2">
					<h3>2000 INR</h3>
					<a class="popup-with-zoom-anim" href="TxnTest.php?price=2000">Book Now</a>
				</div>
			</div>
			<div class="clear"> </div>
		</div>


	</div>

