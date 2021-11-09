
<?php 

if(isset($_SESSION['email'])){
  
  include("include/header.inc1.php");
}else{  
    
  include("include/header.inc.php");
}
?>
<head>
<!--     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7604064736046729",
          enable_page_level_ads: true
     });
</script>
    </head> -->

<?php
require_once("database/dbcontroller.php");
$db_handle = new DBController();
$query = "select * from about";
$result = $db_handle->runquery($query);
?>
<?php
// include language configuration file based on selected language
$lang = "en";
if(isset($_GET['lang'])){ 
	$lang = $_GET['lang']; 
} 
require_once("lang.".$lang.".php");
?>
<style>
.language-link{
	text-align:right;
	padding-top: 15px;
	padding-right: 15px;
	color: #6aa8bf;
}
.language-link-item {
	text-decoration:none;
	color: #6aa8bf;
}
</style>
<!-- /header -->
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
 ?>  > <span>About Us</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- about us -->
	<div class="w3l_about">
		<div class="container">
		<div class="language-header">
<div class="demo-page-title"><?php echo $language["LIST_TITLE"]; ?></div>
	<div class="language-link">
		<a class="language-link-item" href="about.php?lang=en" <?php if($lang == 'en'){?> style="color:#ff9900;" <?php } ?>>English</a> | 
		
		<a class="language-link-item" href="about.php?lang=hi"  <?php if($lang == 'hi'){?> style="color:#ff9900;" <?php } ?>>Hindi</a>
	</div>
</div>
<?php 
	if(!empty($result)){ 
		foreach($result as $k=>$v){
?>
	<div class="demo-row-data">
	<div><strong><?php echo $result[$k][$lang.'_title']; ?></strong></div> 
	<p class="demo-row-text"><?php echo $result[$k][$lang.'_text']; ?>
	</p>
	</div>
<?php 	
		} 
	} else {
?>
	<div class="no-result"><?php echo $language["NOTIFY_NO_RESULT"]; ?></div>
<?php 
	} 
?>
		</div>
	</div>
	

			
	
	
<?php 

if(isset($_SESSION['email'])){
  
  include("include/footer.inc1.php");
}else{  
    
  include("include/footer.inc.php");
}
?>

