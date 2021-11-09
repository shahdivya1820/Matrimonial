<!DOCTYPE HTML>
<html>
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
        <link rel="stylesheet" href="style.css" />
		<link href="image/logo.png" rel="icon">
    </head>
    <body>
        <div class="container">
            <div class="main">
                <h2>Motwani Matrimonial</h2><hr/>

                <?php
                session_start();
                $age="";
                if (isset($_POST['image'])) {
		$imgFile = $_FILES['image']['name'];
		$tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

				if (!empty($_SESSION['post'])){

                         if (empty($_POST['about'])
							 || empty($_POST['image'])){
							//Setting error for page 3
							$_SESSION['error_page5'] = "Mandatory field(s) are missing, Please fill it again";
                            header("location: page5_form.php"); //redirecting to third page
                        } else {
                            foreach ($_POST as $key => $value) {
                                $_SESSION['post'][$key] = $value;
                            }
							//function to extract array
                            extract($_SESSION['post']);  
							
							//Storing values in database
                          $conn = new mysqli('localhost','root','' ,'trimesma_trimes');
                            if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

							if(empty($imgFile)){
			
		}

		else

		{
			$upload_dir = 'profile/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$image = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
     $options = array("cost"=>4);
  $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
   $dob=$yy."-".$mm."-".$dd;
   $dob1=$mm."/".$dd."/".$yy;
     $arr=explode('/',$dob1);
  
  $dateTs=strtotime($dob1);
 
$now=strtotime('today');
 
if(sizeof($arr)!=3) die('ERROR:please entera valid date');
 
if(!checkdate($arr[0],$arr[1],$arr[2])) die('PLEASE: enter a valid dob');
 
if($dateTs>=$now) die('ENTER a dob earlier than today');

$ageDays=floor(($now-$dateTs)/86400);
 
$age=floor($ageDays/365);
 

$sql="insert into user (profile,name,gender,dob,age,mobile,email,password,city,village,district,time,place,marital,gothra,mangalik,education,work,cname,salary,height,weight,body,skin,physical,smoke,drink,fname,mname,brother,sister,about,image)
values('$profile','$name','$gender','$dob','$age','$mobile','$email','$hashPassword','$city','$village','$district','$time','$place','$marital','$gothra','$mangalik','$education','$work','$cname','$salary','$height','$weight','$body','$skin','$physical','$smoke','$drink','$fname','$mname','$brother','$sister','$about','$image')";

                            	$to = $email;
		$subject = "Welcome to Motwani Matrimonial";
			 
			$message = '
			
				<html>
				<head>
				<title>Welcome to Motwani Matrimonial</title>
				</head>
				
				<body>
				<table style="border:1px solid #3e3e3e3e">
				<tr>
				<td style="padding:10px 18px 22px 22px">
				<img src="https://www.motwanimatrimonial.com/image/logo.png"width="50%"height="130px" alt="Hotel" /><br/>
				<p>Dear Motwani Users,</p>
				<p><b>Your registration is sucessful </b>on www.motwanimatrimonial.com</p>
				<p>To find your perfect match please upload your
				<br>valid Id proof and enjoy our services.</p><br>
				<p>Regards<br><strong>Motwani Matrimonial</strong><br>www.motwanimatrimonial.com <br></p>
				<a href="https://www.facebook.com/motwanimatrimonial">	<img src="https://www.motwanimatrimonial.com/image/facebook-icon.png"width="50px"height="50px" alt="Motwani" /></a>
		<a href="https://www.instagram.com/Motwani_matrimonial">	<img src="https://www.motwanimatrimonial.com/image/insta-logo.png"width="42px"height="43px" alt="Motwani" /></a>
				</td></tr>
				</table>
				</body>
				</html>'
				;
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: support@motwanimatrimonial.com". "\r\n" ;

		mail($to,$subject,$message,$headers);
                            
                            if ($conn->query($sql) === TRUE) {
	include("database/db.php");
$sql = "SELECT * from user where email='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_SESSION['id']=$row['id'];
$sql1="insert into notification (user_id,name,image,gender)values('$row[id]','$name','$image','$gender')";
if ($conn->query($sql1) === TRUE) {
}
$sql2="Update user set notify='1'";
if ($conn->query($sql2) === TRUE) {
}
echo "<script>alert('Your Registration Is Successfully Completed!')</script>";
 echo "<script>window.open('document.php','_self')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

							//destroying session
                            unset($_SESSION['post']);
                        }
                    } else {
                        header("location: index.php"); //redirecting to first page
                    }
                } else {
                    header("location: index.php"); //redirecting to first page
                }
                ?>
				<?php

	
	
					
?>
 
            </div>

        </div>
        <form method="post" action="">
 	
                    <input type="hidden" name="age" class="form-control" id="exampleInputEmail1" value="<?php echo"$age"?>">
 
 
 </form>
    </body>
</html>