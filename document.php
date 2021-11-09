

 <!DOCTYPE html>
<html>
<head>
				<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7604064736046729",
          enable_page_level_ads: true
     });
</script>-->


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
<body> 


<!-- /header -->
       <div class="container">
   <div class="imagebg"></div>
	<div class="modal-dialog">
					<!-- Modal content-->
					
					<div class="modal-content">
					  <div class="modal-header">
							
						<h4 class="modal-title">Please Upload Your Identity Proof</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
<form action="" method="post" enctype="multipart/form-data">
     <label><span style="color:red;font-weight: 100;">*</span>Document Type:</label>
						<select name="types" class="document"required>
						<option value="">Select Document Type</option>
						<option value="Aadhar Card">Aadhar Card</option>   
						<option value="Pan Card">Pan Card</option>   
						<option value="Voter Id">Voter Id</option>   
						<option value="Driving Licence">Driving Licence</option>   
						<option value="Passport">Passport</option>  					
					</select>
					<label><span style="color:red;font-weight: 100;">*</span>Document File:   </label>

<input type="file" name="document" size="50" />

<br />

<input type="submit" name="submit" value="Upload" />

</form>
	</div>
					  </div>
					</div>
				  </div>
	</div>
				
				  
	

<?php
session_start();
include("database/db.php");
if (isset($_POST['submit']))
{
    $types = $_POST['types'];
$id=$_SESSION['id'];
 $targetfolder = "Document/";

 $targetfolder = $targetfolder . basename( $_FILES['document']['name']) ;

 $ok=1;
     $document=$_FILES['document']['name'];

$file_type=$_FILES['document']['type'];
if($imgSize < 2000000)
				{

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/png"|| $file_type=="image/jpg"|| $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['document']['tmp_name'], $targetfolder))

 {

$query = mysqli_query($conn,"update user set document='$document' where id='$id'");
 $query1 = mysqli_query($conn,"update user set type='$types' where id='$id'");
            if (mysqli_query($conn,$query,$query1)) {
                 echo "Error updating record: " . mysqli_error($conn);
               
            } 
            else 
            {
                
                echo "<script>alert('Document Uploaded Successfully. Your account will be activated within 2-3 working hours')</script>";
              
            echo"<script>window.open('login.php','_self')</script>";
            }

 }

 else {
 echo "<script>alert('Problem uploading file.')</script>";
 echo"<script>window.open('document.php','_self')</script>";

 }

}

else {

  echo "<script>alert('Sorry, only PDFs, JPG, JPEG, PNG & GIF files are allowed.')</script>";
 echo"<script>window.open('document.php','_self')</script>";
}
}
	else
				{
				     echo "<script>alert('Sorry, your file is too large it should be less then 2MB')</script>";
				 echo"<script>window.open('document.php','_self')</script>";
				}
}
?>