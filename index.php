<?php
session_start();
                include("include/header.inc.php");
              ?>
<head>

<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7604064736046729",
          enable_page_level_ads: true
     });
</script> -->
			  </head>
			  
			  
			  
			
<!-- /header -->
  <span id="error">
			<!----Initializing Session for errors--->
                    <?php
                    if (!empty($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </span>
<div class="w3layouts-banner" id="home">
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
	<div class="agileits-register">
		<h3>Register NOW!</h3>
		<?php 
  include ("database/db1.php");
  $mobile = "";
  $email = "";
  if (isset($_POST['register'])) {
    
  	$mobile = $_POST['mobile'];
  	$email = $_POST['email'];
  	
   
  
  
    $sql_m = "SELECT * FROM user WHERE mobile='$mobile'";
  	$sql_e = "SELECT * FROM admin WHERE email='$email'";
  	$res_m = mysqli_query($db, $sql_m);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_m) > 0) {
  	  $mobile_error = "Sorry... mobile number already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}
  }
?>



 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
		<form action="page2_form.php" method="post"onsubmit="return checkCheckBox(this)">
				<div class="w3_modal_body_grid">
					<span>Profile For:</span>
					 	<select name="profile" id="w3_country"  class="frm-field required">
						<option value="">Select</option>
						<option value="Myself">Myself</option>   
						<option value="Son">Son</option>   
						<option value="Daughter">Daughter</option>   
						<option value="Brother">Brother</option>   
						<option value="Sister">Sister</option>  
						<option value="Relative">Relative</option>
						<option value="Friend">Friend</option>						
					</select>
				</div>
		
				
				
			

                   <div class="w3_modal_body_grid"   >
					<span>Gender:</span>
		<div class=" w3_gender" >
		    	<div class="colr ert " >
				<label class="radio"><input type="radio"  id="male"  class=" custom-control-input" name="gender" value="Male" ><i></i>Male </label>
				</div>
				<div class="colr " >
					<label class="radio"><input type="radio" id="female"  class="custom-control-input"  name="gender"  value="Female" ><i></i>Female</label>
                        </div> 
                        	<div class="clearfix"> </div>
                     </div>
                     	<div class="clearfix"> </div>
                     </div>
					 
<script type="text/javascript">
$(document).ready(function(){
    $("#w3_country").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            switch(optionValue)
            {
            case "Son":
            // code block
             $("#male").prop("checked", true);
              $("#female").prop("disabled", true);
            break;
          case "Brother":
            // code block
             $("#male").prop("checked", true);
              $("#female").prop("disabled", true);
            break;
             case "Daughter":
            // code block
             $("#female").prop("checked", true);
              $("#male").prop("disabled", true);
            break;
          case "Sister":
            // code block
             $("#female").prop("checked", true);
             $("#male").prop("disabled", true);
            break;
          default:
            // code block
              $("#female").prop("checked", false);
               $("#female").prop("disabled", false);
               $("#male").prop("disabled", false);
              $("#male").prop("checked", false);
            }
        });
    }).change();
});
</script>
				
	
	<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" name="name" placeholder=" " required=""/>
				</div>
			
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
 <fieldset class="date"> 
  <select name="dd">
 <option value="">Date</option>
 <?php
 for($i=1;$i<=31;$i++)
 {
 echo "<option value='$i'>$i</option>";
 }
 
 ?>
 </select> - 
 <select name="mm">
 <option value="">Month</option>
 <?php
 for($i=1;$i<=12;$i++)
 {
 echo "<option value='$i'>$i</option>";
 }
 ?>
 </select>
 - 
 
  
  
  <select name="yy">
 <option value="">Year</option>
         <?php
 for($i=1970;$i<=2001;$i++)
 {
 echo "<option value='$i'>$i</option>";
 }
 ?>
 </select>
  
</fieldset> 

 
  
				</div>
				
				
					
				 
  

				 <?php if (isset($mobile_error)): ?><?php endif ?> 
			
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>Mobile No:</span>
				<!-- country codes (ISO 3166) and Dial codes. -->
					<input id="phone" type="tel"name="mobile"maxlength="10"value="<?php echo $mobile; ?>">
		 <?php if (isset($mobile_error)): ?>
      	<span><?php echo $mobile_error; ?></span>
      <?php endif ?>
				  <script src="js/intlTelInput.js"></script>
				  <script>
					$("#phone").intlTelInput({
					
					  utilsScript: "js/utils.js"
					});
				  </script>
				</div>
				 <?php if (isset($email_error)): ?><?php endif ?> 
	<div class="w3_modal_body_grid w3_modal_body_grid1">
	<span>Email:</span>
      <input type="email" name="email" placeholder="" value="<?php echo $email; ?>"required>
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
	  </div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password:</span>
					<input type="password" name="password" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Confirm Password:</span>
					<input type="password" name="confirm" placeholder=" " required=""/>
				</div>
				<div class="w3-agree">
					<input type="checkbox" value="0" name="agree">
					<label class="agileits-agree">I have read & agree to the <a href="terms.php">Terms and Conditions</a></label>
				</div>
				  <input type="submit" value="Register"name="image">
 
				<div class="clearfix"></div>
				
			</form>
		</div>
		<!-- Modal -->
			
			<!-- //Modal -->
	</div>
</div>
<SCRIPT language=JavaScript>
<!--



function checkCheckBox(f){
if (f.agree.checked == false )
{
alert('Please check the box to continue.');
return false;
}else
return true;
}
-->


</SCRIPT>

<!-- Find your soulmate -->
	<div class="w3l_find-soulmate text-center">
		<h3>Find Your Soulmate</h3>
			<div class="container">
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3>Sign Up</h3>
						<p>Signup for free and Upload your profile</p>
						
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-search" aria-hidden="true"></i>
						<h3>Search</h3>
						<p>Search for your right partner</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>Connect</h3>
						<p>Connect with your perfect Match</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-comments-o" aria-hidden="true"></i>
						<h3>Interact</h3>
						<p>Become a member and start Conversation</p>
					</div>
				</a>
				<div class="clearfix"> </div>
			</div>
	</div>

	
<?php 

  include("include/footer.inc.php");
?>

