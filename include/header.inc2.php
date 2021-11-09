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
<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>
<!-- //Calendar -->	

	   
<link rel="stylesheet" href="css/intlTelInput.css">
<style>
a.live_chat {
    background-color: #a79038;
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
        border-radius: 10px;
    text-align: center;
}
}
@media (min-width: 768px)
{
   .collapse.navbar-collapse.search-bar {
    width: 32%;
    margin-top: 13px;
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
        border-radius: 10px;
    text-align: center;
    background:#f7e5c4;
}
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
          <div class="menu">
		 
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Browse Profiles by</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
									<li class="has-children">
									<a href="#">Age</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										 <?php
include("database/db.php");

$sql = "SELECT * FROM user where  gender!= '$_SESSION[gender]' group by age";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
												<li><a href="ages.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["age"] ;?>  Year</a><?php
    }
} else {
    echo "No Match Founds";
}

$conn->close();
?>  </li>
																		
												
											
									</ul> <!-- .cd-secondary-dropdown --> 
									
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">City</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										 <?php
include("database/db.php");

$sql = "SELECT * FROM user where gender!= '$_SESSION[gender]'group by city";
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
																		
												
											
									</ul> <!-- .cd-secondary-dropdown --> 
									
								</li> <!-- .has-children -->
								
						
			<li class="has-children">
									<a href="#">Village</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										 <?php
include("database/db.php");

$sql = "SELECT * FROM user where  gender!= '$_SESSION[gender]'group by village";
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
?>  </li>
																		
												
											
									</ul> <!-- .cd-secondary-dropdown --> 
									
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">District</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										 <?php
include("database/db.php");

$sql = "SELECT * FROM user where gender!= '$_SESSION[gender]'group by district";
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
?>  </li>

									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								
								<li class="has-children">
									<a href="#">Occupation</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<?php
include("database/db.php");

$sql = "SELECT * FROM user where  gender!= '$_SESSION[gender]'group by work";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
												<li><a href="o_list.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["work"] ;?></a><?php
    }
} else {
    echo "No Match Founds";
}

$conn->close();
?>  </li>
												</li>
												
									</ul><!-- .cd-secondary-dropdown --> 
								</li> 

<!-- .has-children -->  
		<li class="has-children">
									<a href="#">Education</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										 <?php
include("database/db.php");

$sql = "SELECT * FROM user where  gender!= '$_SESSION[gender]'group by village";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
												<li><a href="education.php?edit_id=<?php echo $row['id']; ?>"><?php  echo  $row["education"] ;?></a><?php
    }
} else {
    echo "No Match Founds";
}

$conn->close();
?>  </li>
																		
												
											
									</ul> <!-- .cd-secondary-dropdown --> 
									
								</li>
									</ul><!-- .cd-secondary-dropdown --> 
								</li>
								
									</ul><!-- .cd-secondary-dropdown --> 
								</li>
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
			
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
					
					
					<a href="home1.php?edit_id=<?php echo $row['id']; ?>">Home</a>

					</li>
					 <li><a href="bride_profile1.php?edit_id=<?php echo $row['id']; ?>">Profile</a></li>
					 <li><a href="about1.php">About</a></li>
					 
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
