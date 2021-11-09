<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['marital'])){
    if (empty($_POST['marital'])
	|| empty($_POST['gothra'])
	|| empty($_POST['mangalik'])){
		
		//setting error message
        $_SESSION['error_page21'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: page21_form.php");//redirecting to second page
    
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
		<link href="image/logo.png" rel="icon">
        <script src="form.js"></script>
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
					 <h4>Education Qualification</h4> 
                        <form class="col s12" action="page4_form.php" method="post">
                           
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="text" name="education" required class="validate"placeholder="Heighest Education">
                                   
                                </div>
                            </div>
                            
                              <?php
include ("database/config.php");
 
 ?>
                             <div class="row">
                                <div class="input-field col s12">
                                    <select name="work"required>
									<option value="">select Your Occupation:</option>
     <?php

    $query = mysqli_query($con,"SELECT name FROM occupation");

while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['name']."'>".$row['name'].'</option>';
}
    ?>
  </select>
                                </div>
                            </div>
                             <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="text" name="cname" required class="validate"placeholder="Your Company Name">
                                   
                                </div>
                            </div>
								
                             <div class="row">
                                <div class="input-field col s12">
                                    <select name="salary"required>
									<option value="">Select Salary:</option>
     <?php

    $query = mysqli_query($con,"SELECT name FROM salary");

while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['name']."'>".$row['name'].'</option>';
}
    ?>
  </select>
                                </div>
                            </div>
                            
							
							 
                             
                            <div>
							<br>
                    <input name="submit" type="submit"class="waves-effect waves-light btn submitbtn"  value="Submit" />
                               
                            </div>
                        </form>
                       
                       
                    </div>
                </div>
            </div>
          
           
        </div>
    </body>
</html>