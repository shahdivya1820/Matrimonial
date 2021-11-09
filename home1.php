	
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


<head>
     <link href="css/hcustom.css" rel="stylesheet" type="text/css" media="all" />
    				<!--	 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7604064736046729",
          enable_page_level_ads: true
     });
</script>-->
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

		
	</div>
</div>
	
<!-- Find your soulmate -->
	<div class="w3l_find-soulmate text-center">
		<h3>Find Your Soulmate</h3>
		
			<div class="container">
			
				
				<?php
include("database/db.php");

$sql = "SELECT * FROM user where gender!= '$_SESSION[gender]' and verify1='1' order by RAND() limit 4 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>	<a href="profile3.php?edit_id=<?php echo $row['id']; ?>">
					<div class="col-md-3 w3_soulgrid">
						<img src="profile/<?php echo $row['image']; ?>"class="img-responsive" alt="" /> 
						<h3>Profile Id: <?php  echo  $row["id"] ;?></h3>
						<p><?php  echo  $row["age"] ;?> Years Old</p>
					</div>
					</a> 
					<?php
    }
} else {
    echo "";
}

$conn->close()
?>
			
				
				
				
				<div class="clearfix"> </div>
				 
			</div>
			
	</div>
	
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