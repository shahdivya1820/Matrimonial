<?php
include("database/db.php");
	session_start();



		$query=mysqli_query($conn,"select * from user where email='$_SESSION[email]'");
	
		//depends on how you set your verification code
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 12);

		mysqli_query($conn,"update user set code='$code' where email='$_SESSION[email]'");
		$row=mysqli_fetch_array($query);
		$uid=$row['id'];
		$email=$row['email'];
		$name=$row['name'];
		//default value for our verify is 0, means it is unverified

		//sending email verification
		$to = $email;
			$subject = "Email Verification ";
			$message = '
				<html>
				<head>
				<title>Email Verification Code</title>
				</head>
				<body>
					<table style="border:1px solid #3e3e3e3e">
				<tr>
				<td style="padding:10px 18px 22px 22px">
				<img src="https://www.Motwanimatrimonial.com/image/logo.png"width="50%"height="130px" alt="Motwani" /><br/>
				<h2>Thank you for Registering.</h2>
				<p>Your Account:</p>
				<p>Email: '.$email.'</p>
				<p>Name: '.$name.'</p>
				<p>Please click the link below to activate your account.<br>Link valid for 2 hours only.</p>
				<button type="button" style="background-color: #f2d651;"><a href="https://www.Motwanimatrimonial.com/activate.php?uid='.$uid.'&code='.$code.'" tyle="text-decoration: none;"><strong style="color: black;">Verify Account</strong></a></button>
				<p>Regards<br><strong>Motwani Matrimonial</strong><br>www.Motwanimatrimonial.com <br></p>
			<a href="https://www.facebook.com/Motwanimatrimonial">	<img src="https://www.Motwanimatrimonial.com/image/facebook-icon.png"width="25px"height="30px" alt="Motwani" /></a>
			<a href="https://www.instagram.com/Motwani_matrimonial">	<img src="https://www.Motwanimatrimonial.com/image/insta-logo.png"width="30px"height="33px" alt="Motwani" /></a>
			    	</td></tr>
			    		</table>
				</body>
				</html>
				';
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: support@Motwanimatrimonial.com". "\r\n" ;

		mail($to,$subject,$message,$headers);

	
		echo"<script>alert('Verification code sent to your email.')</script>";
		echo"<script>window.open('bride_profile.php','_self')</script>";
  		

	
?>