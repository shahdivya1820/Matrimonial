<?php
include('database/db5.php');
//This code runs if the form has been submitted
$rsent = "";
if (isset($_POST['submit']))
{
 
// check for valid email address
$email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $error[] = 'Please enter a valid email address';
}
 
// checks if the username is in use
$check = mysqli_query($con,"SELECT email FROM user WHERE email = '$email'");
$check2 =mysqli_num_rows($check);
 
 
//if the name exists it gives an error
if ($check2 == 0) {
$error[] = "Sorry, Your emails doesn't exists in our record";
}
 
 
else {
 
$query = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' ");
$r=mysqli_fetch_object($query);
 
//create a new random password
 
$password = substr(md5(uniqid(rand(),1)),3,10);
$pass = $password; //encrypted version for database entry
 
//send email
	$to = $email;
			$subject = "Password Recovery";
			$message = '
				<html>
				<head>
				<title>Reset password</title>
				</head>
				<body>
				<table style="border:1px solid #3e3e3e3e">
				<tr>
				<td style="padding:10px 18px 22px 22px">
				<img src="https://www.trimesmatrimonial.com/image/logo.png"width="50%"height="130px" alt="Motwani" /><br/>
				<h2>Thank you.</h2>
				<p>Hi '.$r->name.'</p>
				<p></p>
				<p>Current password:<b> '.$password.'</b></p>
				<p></p>
				<p>Please click the link below to reset your password.</p>
				<button type="button" style="background-color: #f2d651;"><a href="https://www.trimesmatrimonial.com/change_password.php?uid='.$r->id.'" style="text-decoration: none;"><strong style="color: black;">Reset My Password</strong></button>
				<p>Regards<br><strong>Motwani Matrimonial</strong><br>www.trimesmatrimonial.com <br></p>
				<a href="https://www.facebook.com/trimesmatrimonial">	<img src="https://www.trimesmatrimonial.com/image/facebook-icon.png"width="25px"height="30px" alt="Motwani" /></a>
			<a href="https://www.instagram.com/trimesmatri">	<img src="https://www.trimesmatrimonial.com/image/insta-logo.png"width="30px"height="33px" alt="Motwani" /></a>
			    	</td></tr>
				</table>
				</body>
				</html>
				';
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: support@motwanimatrimonial.com". "\r\n" ;

		mail($to,$subject,$message,$headers);

//update database
$sql = mysqli_query($con,"UPDATE user SET password='$pass' WHERE email = '$email'");
$rsent = true;
 
 
}// close errors
}// close if form sent
 
//show any errors
if (!empty($error))
{
        $i = 0;
        while ($i < count($error)){
        echo "<div class='error-msg'>".$error[$i]."</div>";
        $i ++;}
}// close if empty errors
 
 

 
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
        </head>
        <body> 
          <div class="container">
   <div class="imagebg"></div>
	
	</div>
 <div class="modal-dialog">
					<!-- Modal content-->
					
					<div class="modal-content">
					     <div class="modal-header">
							 <?php
    if ($rsent == true){
   
    	echo"<script>alert('Just sent an email with your account details to $email')</script>";
        	echo"<script>window.open('index.php','_self')</script>";
    } else {
    echo "<p >Please enter your e-mail address. You will receive a new password via e-mail.</p>";
    }
    ?>
					
					  </div>
					  <div class="modal-body">
					    <div class="login-w3ls">
<form id="signin" action="" method="post">
   
	<label>Your Email: </label> <input type="text" name="email" size="50" maxlength="255" required="">
<br>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Get New Password">
</form>
</div>
</div>
</div>
</body>
</html>