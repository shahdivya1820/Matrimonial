<?php
session_start();

if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {

header ("Location:login.php");

}

?>

<?php 

if(isset($_SESSION['email'])){
  
  include("include/header.inc1.php");
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
 ?>  > <span>Cancellation Policy</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- Terms of use-section -->
		<section class="terms-of-use">
			<!--- terms ---->
			<div class="terms">
				<div class="container">
					<h2>Cancellation Policy</h2>
					<h5>The amount which you pay that is non refundable and not Transferable.</h5>
				
	</div>
			</div>
			<!--- /terms ---->
		</section>
		<!-- //Terms of use-section -->
	
<?php 

if(isset($_SESSION['email'])){
  
  include("include/footer.inc1.php");
}else{  
    
  include("include/footer.inc.php");
}
?>