<head>
    	<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7604064736046729",
          enable_page_level_ads: true
     });
</script>-->
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />	
    
    </head>
<?php
session_start();

if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {

header ("Location:login.php");

}

?>

<?php 

if(isset($_SESSION['email'])){
  
  include("include/header.inc2.php");
}else{  
    
  include("include/header.inc.php");
}
?>
	<!-- inner banner -->	
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
	<!-- //inner banner -->	
	
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
 ?>  >  <span><?php 
    if(!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
       echo '<a href="home.php">Home</a>';
    }
    else{
        echo '<a href="settings.php" >Privacy Settings</a>';
    }
 ?> </span> >  <span>Change Password</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<div class="w3ls-list">
	    		<div class="container">
	    		    <h2> Change Password</h2>
	  <div class="col-md-3 w3ls-aside setting">
	        	<div class="w3layouts_details setting">
		  <?php include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					 			            <a href="account_update.php?edit_id=<?php echo $row['id']; ?>"  onclick="return confirm('sure to edit ?')">Update Your Details</a>
					 <a href="change_password1.php?edit_id=<?php echo $row['id']; ?>">Change Password</a>
					 <a href="review.php">Delete Account</a>
					 <a href="block_list.php?edit_id=<?php echo $row['id']; ?>">Block List</a>
					 <a href="update_em.php?edit_id=<?php echo $row['id']; ?>">Update Mobile or Email</a>
					 <a href="privacy_setting.php?edit_id=<?php echo $row['id']; ?>">Privacy</a>
					 <?php
					 }
} else {
    echo "";
}

$conn->close();
?> 
					 </div>
					 </div>

    	<div class="col-md-9 w3ls-aside1 settings update">
		   
		    
		
<form action=""method="post"enctype="multipart/form-data">
            <div class="row">
            
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="row privacy">
                                <div class="col-lg-6 update">
                                    <form role="form">
                                        
                                      
                                       
									 <div class="form-group">
                                           <label>Current Password</label>
       <input type="password" name="currentPassword" class="form-control" />
       <span id="currentPassword" class="required"></span>
                                        </div>
                                         
      							 <div class="form-group">
      							    <label>New Password</label>
                  <input type="password" name="newPassword"
                        class="form-control" /><span id="newPassword"
                        class="required"></span>
                                        </div>
                                        		 <div class="form-group">
      							   <label>Confirm Password</label>
                <input type="password" name="confirmPassword"
                    class="form-control" /><span id="confirmPassword"
                    class="required"></span>
                                        </div>
                                        
										
										
									
                                       
                                        <input type="submit" class="btn btn-default1"name="submit"value="Submit">
                                        
                                    </form>
                                </div>
                               
                                
                                        
                                  
                                </div>
                                
                            </div>
                           
                        </div>
                        
                    </div>
                  
                </div>
                  </form>
          
            
            
            
         
        </div>
    </div>
    </div>
    <?php
session_start();
include('database/db5.php');

if (count($_POST) > 0) {
    $id=$_GET['edit_id'];
    $result = mysqli_query($con, "SELECT * from user WHERE id='" . $id . "'");
    $row = mysqli_fetch_array($result);
    $ds_password=$row["password"];
    $password=$_POST["newPassword"];
   $options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		 if (password_verify($_POST["currentPassword"],$row['password'])) {
         mysqli_query($con, "UPDATE user set password='" . $hashPassword . "' WHERE id='" . $id . "'");
     	echo "<script type=\"text/javascript\">
							alert(\"Password Changed\");
							window.location='bride_profile.php';
						</script>";
        
    } else
        
	echo "<script type=\"text/javascript\">
							alert(\"Current Password is not correct\");
						
						</script>";
     
}

    
   

?>


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
   <?php 

if(isset($_SESSION['email'])){
  
  include("include/footer.inc1.php");
}else{  
    
  include("include/footer.inc.php");
}
?>