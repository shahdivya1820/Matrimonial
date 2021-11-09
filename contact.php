
<?php 

if(isset($_SESSION['email'])){
  
  include("include/header.inc1.php");
}else{  
    
  include("include/header.inc.php");
}
?>

<div class="w3layouts-inner-banner">
<div class="container">
	<div class="logo">
		<h1>
				<?php 
    if(!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
       echo '<a href="index.php" style="text-decoration: none;" >Motwani Matrimonial</a>';
    }
    else{
        echo '<a href="home.php" style="text-decoration: none;" >Motwani Matrimonial</a>';
    }
 ?></h1>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><?php 
    if(!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
       echo '<a href="index.php">Home</a>';
    }
    else{
        echo '<a href="home.php" >Home</a>';
    }
 ?>  > <span>Contact</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<div class="w3ls_contact_section">
		<div class="container">
			<div class="w3_C_headquarters text-center">
				<h4>Motwani Matrimonial Headquarters</h4>
				<div class="agileits_address">
					<div class="col-md-4 agile_address">
						<i class="fa fa-home" aria-hidden="true"></i>
						<p>4th floor, Manor Building, daliseth Agiyari lane, kalbadevi road, Mumbai 400-002</p>
					</div>
					<div class="col-md-4 agile_address">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<p><a href="tel:9372818312">+91-937-281-8312</a></p>
						
					</div>
					<div class="col-md-4 agile_address">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						 <a href="mailto:support@trimesmatrimonial.com"> support@motwanimatrimonial.com</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		
		
		</div>
	</div>
	<!-- feedback -->
	<div class="feedback">
		<div class="container">
			<h2>For Any Doubts Mail Us</h2>
			
			<p class="text-right"><span style="color:red;font-weight: 100;">*</span>Mandatory</p>
			<form action="#" method="post">
				<div class="col-md-6">
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>User name:</label>
						<input type="text"name="name" placeholder="User Name" required="required"/>
					</div>
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>Your Email:</label>
						<input type="email"name="email" placeholder="Email" required="required"/>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="agileits">
					<label>Phone no:</label>
						<input type="tel"name="phone" placeholder="Phone no"maxlength="10" required="required"/>
					</div>
				
					
					
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12 w3_feedbacktextmessage">
					<label><span style="color:red;font-weight: 100;">*</span>Message:</label>
					<textarea name="message" placeholder=""></textarea>
				</div>
				<div class="clearfix"></div>
				<div class="w3_submit">
					<input type="submit" value="Submit"/>
				</div>
			</form>
		</div>
	</div>
	<!-- //feedback -->
	
	<!-- browse profiles -->
<?php 

if(isset($_SESSION['email'])){
  
  include("include/footer.inc1.php");
}else{  
    
  include("include/footer.inc.php");
}
?>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "support@motwanimatrimonial.com";
    $email_subject = "Contact Form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
	!isset($_POST['email']) ||
        !isset($_POST['phone']) ||
       
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required

    $email_from = $_POST['email']; // required
    	 $phone = $_POST['phone']; // not required

    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The  Name you entered does not appear to be valid.<br />';
  }
 
 if(strlen($phone) < 10) {
    $error_message .= 'The number you entered do not appear to be valid.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "User Name: ".clean_string($name)."\n";
  
	 $email_message .= "Email: ".clean_string($email_from)."\n";
	   $email_message .= "Mobile: ".clean_string($phone)."\n";
	
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
 echo"<script>alert('Thank you for contacting us. We will be in touch with you very soon. ...')</script>";

}
?>