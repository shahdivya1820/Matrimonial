<?php
session_start();

if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {

header ("Location:login.php");

}

?>

<?php 

if(isset($_SESSION['email'])){
    if($_SESSION['pay_status']=='1')
    {
        include("include/header.inc2.php");
    }
  else
  {
      include("include/header.inc1.php");
  }
  
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
 ?>  > <span>Kundali</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
										    <?php
								    	include("database/db2.php");
if(isset($_SESSION['id']) && !empty($_SESSION['id']))
	{
		$id = $_SESSION['id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM user WHERE id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		echo"";
	}
?>
	<!-- feedback -->
	<div class="feedback">
		<div class="container">
		
			
		
			<form action="#" method="post">
			    	<h2>Kundali Match Making</h2>
				<p class="text-right"><span style="color:red;font-weight: 100;">*</span>Mandatory</p>
				<div class="col-md-6">
				   <center><h4>Groom Details</h4></center> <br>
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>Name:</label>
						<input type="text"name="gname" placeholder="Groom Name" value="<?php if($_SESSION["gender"]=="Male") {echo $name;}?>"required="required"/>
					</div>
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>Birth-Date:</label>
						<input type="date"name="gdate" placeholder="Birth-Date"  value="<?php if($_SESSION["gender"]=="Male") { echo $dob;}?>" required="required"/>
					</div>
						<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>Birth-time:</label>
						<input type="time"name="gtime"  value="<?php if($_SESSION["gender"]=="Male"){ echo $time;}?>" placeholder="Birth-Time" required="required"/>
					</div>
						<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>Birth-Place:</label>
						<input type="text"name="gplace"  value="<?php if($_SESSION["gender"]=="Male"){ echo $place;}?>" placeholder="Birth-Place" required="required"/>
					</div>
					
				</div>
			
				<div class="col-md-6">
				    	   <center><h4>Bride Details</h4></center> <br>
					<div class="agileits">
					<label><span style="color:red;font-weight: 100;">*</span>Name:</label>
						<input type="text"name="bname" placeholder="Bride Name" value="<?php if($_SESSION["gender"]=="Female") {echo $name;}?>"required="required"/>
					</div>
					<div class="agileits">
					<label><span style="color:red;font-weight: 100;">*</span>Birth-Date:</label>
						<input type="date"name="bdate" placeholder="Birthdate"  value="<?php if($_SESSION["gender"]=="Female") {echo $dob;}?>"required="required"/>
					</div>
						<div class="agileits">
					<label><span style="color:red;font-weight: 100;">*</span>Birth-Time:</label>
						<input type="time"name="btime" placeholder="Birth-Time"  value="<?php if($_SESSION["gender"]=="Female") {echo $time;}?>"required="required"/>
					</div>
					<div class="agileits">
					<label><span style="color:red;font-weight: 100;">*</span>Birth-Place:</label>
						<input type="text"name="bplace"  value="<?php if($_SESSION["gender"]=="Female") {echo $place;}?>" placeholder="Birth-Place"required="required"/>
					</div>
					
				</div>
			
				<div class="clearfix"></div>
				<div class="col-md-12 w3_feedbacktextmessage">
					<label><span style="color:red;font-weight: 100;">+</span>Message:</label>
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
	<?php 

if(isset($_SESSION['email'])){
    if($_SESSION['pay_status']=='1')
    {
        include("include/footer.inc2.php");
    }
  else
  {
      include("include/footer.inc1.php");
  }
  
}else{  
    
  include("include/footer.inc.php");
}
?>
	<!-- browse profiles -->


<?php
if(isset($_SESSION['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "support@motwanimatrimonial.com";
   $email_subject = "Match Making";
 
  
 
    // validation expected data exists
    if(!isset($_POST['gname']) ||
    	!isset($_SESSION['email']) ||
	!isset($_POST['gdate']) ||
	!isset($_POST['gtime']) ||
	!isset($_POST['gplace']) ||
	!isset($_POST['bname']) ||
        !isset($_POST['bdate']) ||
       !isset($_POST['btime']) ||
       !isset($_POST['bplace']) ||
        !isset($_POST['message'])) {
        //died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $gname = $_POST['gname']; // required

    $email_from = $_SESSION['email']; // required
    $gdate = $_POST['gdate']; // required
    $gtime = $_POST['gtime']; // required$gname = $_POST['gname']; // required
    $gplace = $_POST['gpalce']; // required
    $banme = $_POST['bname']; // required
    $bdate = $_POST['bdate']; // required
    $btime = $_POST['btime']; // required
$bplace = $_POST['bplace']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
 
 
 

    $email_message = "Kundali Details.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Groom Name: ".clean_string($gname)."\n";
    $email_message .= "Groom Date: ".clean_string($gdate)."\n";
      $email_message .= "Groom Time: ".clean_string($gtime)."\n";
        $email_message .= "Groom Place: ".clean_string($gplace)."\n";
          $email_message .= "Bride Name: ".clean_string($banme)."\n";
            $email_message .= "Bride Date: ".clean_string($bdate)."\n";
              $email_message .= "Bride Time: ".clean_string($btime)."\n";
                $email_message .= "Bride Place: ".clean_string($bplace)."\n";
	
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
 echo"<script>alert('Thank you for Choosing our Match Making Service. Will send you your result with in 2 -3 working hours. ...')</script>";

}
?>
