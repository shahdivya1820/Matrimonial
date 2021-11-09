<?php
include("database/db.php");
	session_start();
	if(isset($_GET['code'])){
	$user=$_GET['uid'];
	$code=$_GET['code'];

	$query=mysqli_query($conn,"select * from user where id='$user'");
	$row=mysqli_fetch_array($query);
if($row['verify']!=1)
{
	if($row['code']==$code){
		//activate account
		mysqli_query($conn,"update user set verify='1' where id='$user'");
		echo"<script>alert('Account Verified')</script>";
		echo"<script>window.open('bride_profile.php','_self')</script>";
	
	}
	else{
			echo"<script>alert('Something went wrong. Please sign up again.')</script>";
		echo"<script>window.open('bride_profile.php','_self')</script>";

	}
	}
	else{
	echo"<script>alert('Link Expired')</script>";
	echo"<script>window.open('login.php','_self')</script>";
	}
	}
?>