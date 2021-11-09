
<?php
session_start();
                
              ?>


			  <!DOCTYPE html>
<html>
<head>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<!--meta data-->
 <meta name="copyright" content="2018 mymarrige.com">
  <meta name="description" content="The best website for match making over maximum number of user, mymarrige.com  help to find perfect life partner. Login Now ! .  ">
 <meta name="keywords" content="Matrimonial, Matrimony, Matrimonial's, Indian Matrimonial, Marriage, Mymarrige.com, mymarriage.com, mymarriage.com, mymarriage.com, Marriage Site, Free Dating Website, Match Making, Match Making Website, Hastmilap, Gathbandhan, sathphere,mangal vivah, Shubh Mangal Savadhan, Indian Shadi, Madhur Vela . ">
 <meta name="robots" content="index,follow ">
<meta name="DC.title"content="Matrimony, Shadi and Marrige, Free Matrimonial Site, Match Making - Mymarrige.com">
<meta property ="og Column Title" content="Matrimony, Shadi and Marrige, Free Matrimonial Site, Match Making - Mymarrige.com">
<meta property ="og Url" content="http://mymarrige.com/">
        <title>Matrimony, Shadi and Marrige, Free Matrimonial Site, Match Making - Trimesmatrimonial.com<</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="image/logo.png" rel="icon">
        <link rel="stylesheet" href="form.css" >
<body> 


<!-- /header -->
       <div class="container">
   <div class="imagebg"></div>
	<div class="modal-dialog">
					<!-- Modal content-->
					
					<div class="modal-content">
					  <div class="modal-header">
							
						<h4 class="modal-title">Login to Continue</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
							<form id="signin" action="" method="post">
								<label>User Id: </label>
								<input type="text" name="username_email" placeholder="Enter Your Email Id Or Mobile Number" required="">
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" required="">	
								<div class="w3ls-loginr"> 
									<input type="checkbox" id="brand" name="checkbox" value="">
									<span> Stay Signed in ?</span> 
									<a href="forget.php">Forgot password ?</a>
								</div>
								<div class="clearfix"> </div>
								<input type="submit"  class="btn btn-default1"value="Login"name="login">
								<Center>OR <a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;Sign Up</a></center>
									
								<div class="clearfix"> </div>
								
							</form>
						</div>
					  </div>
					</div>
				  </div>
	</div>
				
				  
	
<?php

include("database/db3.php");
if(isset($_POST['login'])){
	$name = trim($_POST['username_email']);
	$password = trim($_POST['password']);
	
	$sql = "select * from user where(email = '".$name."' OR mobile = '".$name."') ";
	$rs = mysqli_query($db,$sql);
	$numRows = mysqli_num_rows($rs);
		$row = mysqli_fetch_assoc($rs);
	if(($numRows  == 1))
	{


       
		if(!empty($row["type"]))
		{
		    if($row['verify1']=='1')
		    {
		    	if(password_verify($password,$row['password']))
		{
		         $query1 = "update user set logged_in=now(), active='1' where id='$row[id]'";
             $res=mysqli_query($db,$query1);
            if (mysqli_query($db,$query1)) {
                 echo "Error updating record: " . mysqli_error($db);
               
            } 
               
				echo"<script>window.open('bride_profile.php','_self')</script>";
				 $_SESSION['name']=$row['name'];
				  $_SESSION['email']=$row['email'];
				   $_SESSION['gender']=$row['gender'];
				   $_SESSION['id']=$row['id'];
				   $_SESSION['mobile']=$row['mobile'];
				    $_SESSION['last_logged']=$row['last_logged'];
				     $_SESSION['pay_status']=$row['pay_status'];
		}
		else{
			echo"<script>alert('Incorrect Password')</script>";
			echo"<script>window.open('login.php','_self')</script>";
				
		} 
		}
		else
		{
		     echo"<script>alert('Document verification in progress')</script>"; 
  echo"<script>window.open('login.php','_self')</script>";
		}
		}
		
else {
     	echo"<script>alert('Please Upload Your ID Proof First')</script>";
    	echo"<script>window.open('document.php?edit=$row[id]','_self')</script>";
    }


	
	}
		else{
			echo"<script>alert('Incorrect User Id')</script>";
			echo"<script>window.open('login.php','_self')</script>";
				
		}
	
}
?>