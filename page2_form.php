<?php
session_start();
include ("database/db1.php");
include ("age.php");

  
  $email = "";
  if (isset($_POST['image'])) 
  {
    
  	$email = $_POST['email'];
$sql_e = "SELECT * FROM user WHERE email='$email'";
  
  	$res_e = mysqli_query($db, $sql_e);

  	 if(mysqli_num_rows($res_e) > 0){
  	 	
	 
	    $_SESSION['error'] = "<script>alert('Sorry... Email Id already taken!.')</script>
";

	   header("location: index.php");
  	}
  	
  }
?>
<?php

include ("database/db1.php");
  
  $mobile = "";
  if (isset($_POST['image'])) {
    
  	$mobile = $_POST['mobile'];
$sql_e = "SELECT * FROM user WHERE mobile='$mobile'";
  
  	$res_e = mysqli_query($db, $sql_e);

  	 if(mysqli_num_rows($res_e) > 0){
  	 	
	 
	    $_SESSION['error'] = "<script>alert('Sorry... Mobile Number already taken!.')</script>
";

	   header("location: index.php");
  	}
  }?>

  
  <?php



//checking first page values for empty,If it finds any blank field then redirected to first page
if (isset($_POST['name'])){
    if (empty($_POST['profile'])
	|| empty($_POST['name'])
	|| empty($_POST['gender'])
    || empty($_POST['dd'])
      || empty($_POST['mm'])
        || empty($_POST['yy'])
 
	|| empty($_POST['mobile'])
	|| empty($_POST['email'])
	|| empty($_POST['password'])
	|| empty($_POST['confirm'])){
        
		
		
	//Setting error for page 3
						//setting error message
		$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: index.php"); //redirecting to first page
    
	} 
			

	else {
	//Sanitizing email field to remove unwanted characters
        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	
	//After sanitization Validation is performed
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		
	//Validating mobile Field	using regex
            if (!preg_match("/^[0-9]{10}$/", $_POST['mobile'])){
			
                $_SESSION['error'] = "10 digit mobile number is required.";
                header("location: index.php");
            } else {
                if (($_POST['password']) === ($_POST['confirm'])) {
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                } else {
                    $_SESSION['error'] = "Password does not match with Confirm Password.";
                    header("location: index.php"); //redirecting to first page
                }
            }
        } else {
            $_SESSION['error'] = "Invalid Email Address";
            header("location: index.php");//redirecting to first page
        }
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        				<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7604064736046729",
          enable_page_level_ads: true
     });
</script>-->
         <meta name="copyright" content="2018 mymarrige.com">
  <meta name="description" content="The best website for match making over maximum number of user, mymarrige.com  help to find perfect life partner. Login Now ! .  ">
 <meta name="keywords" content="Matrimonial, Matrimony, Matrimonial's, Indian Matrimonial, Marriage, Mymarrige.com, mymarriage.com, mymarriage.com, mymarriage.com, Marriage Site, Free Dating Website, Match Making, Match Making Website, Hastmilap, Gathbandhan, sathphere,mangal vivah, Shubh Mangal Savadhan, Indian Shadi, Madhur Vela . ">
 <meta name="robots" content="index,follow ">
<meta name="DC.title"content="Matrimony, Shadi and Marrige, Free Matrimonial Site, Match Making - Mymarrige.com">
<meta property ="og Column Title" content="Matrimony, Shadi and Marrige, Free Matrimonial Site, Match Making - Mymarrige.com">
<meta property ="og Url" content="http://mymarrige.com/">
        <title>Matrimony, Shadi and Marrige, Free Matrimonial Site, Match Making - Mymarrige.com<</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
		<link href="image/logo.png" rel="icon">
    </head>
    <body >
	<span id="error">
<?php
//To show error of page 2
if (!empty($_SESSION['error_page2'])) {
    echo $_SESSION['error_page2'];
    unset($_SESSION['error_page2']);
}
?>
                </span>
        <div class="container">
            <div class="imagebg"></div>
            <div class="container">
                <div class="form-container z-depth-5">
                    
                    <div class="row">
					<h4>Basic Information</h4> 
                        <form class="col s12" action="page21_form.php" method="post">
                          
                            
                            
                            
<div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="text" name="city" required class="validate"placeholder="Current City Name">
                                   
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="text" name="village" required class="validate"placeholder="Enter Village Name">
                                   
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="text" name="district" required class="validate"placeholder="Your District">
                                   
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">Birth Time
                                    <input id="email" type="time" name="time" required class="validate"placeholder="Enter Pincode">
                                   
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="text" name="place" required class="validate"placeholder="Place Of Birth">
                                   
                                </div>
                            </div>
						
                           
					
 
                        
							
							
                             
                            <div>
							
                    <input name="submit" type="submit"class="waves-effect waves-light btn submitbtn"  value="Submit" />
                               
                            </div>
                        </form>
                       
                       
                    </div>
                </div>
            </div>
          
           
        </div>
    </body>
</html>