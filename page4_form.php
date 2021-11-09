<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['education'])){
    if (empty($_POST['education'])
	|| empty($_POST['work'])
	|| empty($_POST['cname'])
	|| empty($_POST['salary'])){
		
		//setting error message
        $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: page3_form.php");//redirecting to second page
    
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
    <head>				<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
                        <form class="col s12" action="page41_form.php" method="post">
                           
                           
							<?php
 include ("database/config.php");
 ?>
                             <div class="row">
							   <h4>Personal Details</h4> 
                                <div class="input-field col s12">
                                    <select name="height"required>
    <option value="0">Select Your Height:</option>
    <?php

    $query = mysqli_query($con,"SELECT name FROM height");

while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['name']."'>".$row['name'].'</option>';
}
    ?>
  </select>
                                </div>
                            </div>
							
                             <div class="row">
							
                                 <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="text" name="weight" required class="validate"placeholder="Your Weight">
                                   
                                </div>
                            </div>
                            </div>
                             <div class="row">
                                <div class="input-field col s12">
                                    <select name="body"required>
    <option value="">Body Type:</option>
    <option value="Slim">Slim</option>
    <option value="Fat">Fat</option>
    <option value="Athelatic">Athelatic</option>
    <option value="Average">Average</option>
    <option value="Muscle">Muscle</option>
 
  </select>
                                </div>
                            </div>
                             <div class="row">
                                <div class="input-field col s12">
                                    <select name="skin"required>
    <option value="">Skin Tone:</option>
    <option value="Fair">Fair</option>
    <option value="Very Fair">Very Fair</option>
    <option value="White Skin">White Skin</option>
    <option value="Dark">Dark</option>
    
   
  </select>
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                    <select name="physical"required>
    <option value="">Physically Challanged:</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>

   
  </select>
                                </div>
                            </div>
                             <div class="row">
                                <div class="input-field col s12">
                                    <select name="smoke"required>
    <option value="">Smoking Habbit:</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    <option value="Occasionaly">Occasionaly</option>
    
  </select>
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                    <select name="drink"required>
    <option value="0">Drinking Habbit:</option>
      <option value="Yes">Yes</option>
    <option value="No">No</option>
    <option value="Occasionaly">Occasionaly</option>
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