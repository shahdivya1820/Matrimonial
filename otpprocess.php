<?php
session_start();
include("database/db.php");

$query=mysqli_query($conn,"select * from user where email='$_SESSION[email]'");
	$row=mysqli_fetch_array($query);
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
$mobileno=$row['mobile'];
if($rno==$urno)
{
mysqli_query($conn,"update user set verify2='1' where mobile='$mobileno'");
   echo"<script>alert('Your Mobile Number is verified')</script>";
   echo"<script>window.open('bride_profile.php','_self')</script>";




} 
else {
   echo"<script>alert('Please Enter Valid OTP')</script>";
   echo"<script>window.open('otp.php','_self')</script>";
}

mysqli_close($conn);
	return true;

?>