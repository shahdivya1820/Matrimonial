<?php
session_start();
include('database/db5.php');

if (count($_POST) > 0) {
    $id=$_GET['uid'];
    $result = mysqli_query($con, "SELECT * from user WHERE id='" . $id . "'");
    $row = mysqli_fetch_array($result);
    $password=$_POST["newPassword"];
   $options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		 if ($_POST["currentPassword"] == $row["password"]) {
         mysqli_query($con, "UPDATE user set password='" . $hashPassword . "' WHERE id='" . $id . "'");
     	echo "<script type=\"text/javascript\">
							alert(\"Password Changed\");
							window.location='login.php';
						</script>";
        
    } else
        
	echo "<script type=\"text/javascript\">
							alert(\"Current Password is not correct\");
							window.location='login.php';
						</script>";
     
}

    
   

?>
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

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body>
     <div class="container">
   <div class="imagebg"></div>
	
	</div>
				
				  <div class="modal-dialog">
					<!-- Modal content-->
					
					<div class="modal-content">
					  <div class="modal-header">
							
						<h4 class="modal-title">Change Password</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
    
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
       <label>Current Password</label>
       <input type="password" name="currentPassword" class="txtField" />
       <span id="currentPassword" class="required"></span>
               <label>New Password</label>
                  <input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span>
                <label>Confirm Password</label>
                <input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span>
               &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="submit"
                        value="Submit" class="btnSubmit">
               
       
       
    </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>