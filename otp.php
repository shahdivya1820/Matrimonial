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
        echo '<a href="home.php"style="text-decoration: none;" >Motwani Matrimonial</a>';
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
 ?>  > <span>OTP Verification</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- feedback -->
	<div class="feedback">
		<div class="container">
			<h2>Mobile Verification</h2>
			
			<p class="text-right"><span style="color:red;font-weight: 100;">*</span>Mandatory</p>
			<form action="otpprocess.php" method="post">
				<div class="col-md-6">
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>OTP</label>
						<input type="text" name="otpvalue"required="required"/>
					</div>	
				</div>
				
				<div class="w3_submit">
					<input type="submit" name="submit" value="Submit"/>
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
