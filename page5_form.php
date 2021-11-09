<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['fname'])){
    if (empty($_POST['fname'])
	|| empty($_POST['mname'])
	|| empty($_POST['brother'])
	|| empty($_POST['sister'])){
		
		//setting error message
        $_SESSION['error_page41'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: page41_form.php");//redirecting to second page
    
	} else {
		//fetching all values posted from second page and storing it in variable
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>			<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
		<link href="image/logo.png" rel="icon">
        <script src="form.js"></script>
    </head>
    <body >
	<span id="error">

                </span>
        <div class="container">
            <div class="imagebg"></div>
            <div class="container">
                <div class="form-container z-depth-5">
                    <h3></h3> 
                    <div class="row">
                        <form class="col s12" action="page4_insertdata.php" method="post"enctype="multipart/form-data">
                           
                         
                            <h5>Upload Your Latest Photo</h5>
                             <div class="row">
							  <div class="row">
								 
                                <div class="input-field col s12">
								
                                    <textarea height="150"  name="about" required class="validate"placeholder="Describe Yourself"></textarea>
                                   
                                </div>
                            </div>
                                 <div class="row">
								 
                                <div class="input-field col s12">
								
                                    <input id="email" type="file" name="image" required class="validate"placeholder="Upload Image"accept="image/*"onchange="preview_image(event)"alt="Matrimony">
                                   
                                </div>
								<center><img id="output_image"/height="100"width=="100"></center>
                            </div>
                            </div>
                            <div>
							
                    <input type="submit"class="waves-effect waves-light btn submitbtn"  value="Submit"name="image" />
                               
                            </div>
                        </form>
                       
                       
                    </div>
                </div>
            </div>
          
           
        </div>
    </body>
</html>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
