<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['height'])){
    if (empty($_POST['height'])

	|| empty($_POST['weight'])
	|| empty($_POST['body'])
	|| empty($_POST['skin'])
	|| empty($_POST['physical'])
	|| empty($_POST['smoke'])
	|| empty($_POST['drink'])){
		
		//setting error message
        $_SESSION['error_page4'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: page4_form.php");//redirecting to second page
    
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

        <div class="container">
            <div class="imagebg"></div>
            <div class="container">
                <div class="form-container z-depth-5">
                    
                    <div class="row">
					<h4>Family Details</h4> 
                        <form class="col s12" action="page5_form.php" method="post">
                           
                            <div class="input-field col s12">
                                    <input id="email" type="text" name="fname" required class="validate"placeholder="Father Name">
                                   
                                </div>
							
                            <div class="input-field col s12">
                                    <input id="email" type="text" name="mname" required class="validate"placeholder="Mother Name">
                                   
                                </div>
                             
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="brother"required>
									<option value="">No. Of Brother:</option>
									<option value="00">0</option>
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
     
  </select>
                                </div>
                            </div>
                          <div class="row">
                                <div class="input-field col s12">
                                    <select name="sister"required>
									<option value="">No. Of Sister:</option>
									<option value="00">0</option>
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
     
  </select>
                                </div>
                            </div>
							
                            
							
							 
                             <br>
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