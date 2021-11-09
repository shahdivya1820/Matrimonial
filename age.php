  <?php
   $ageYears="";
    if (isset($_POST['image'])) 
  {
          
$mm=$_POST['mm'];
 
$dd=$_POST['dd'];
 
$yy=$_POST['yy'];

$gender=$_POST['gender'];
 
$dob=$mm."/".$dd."/".$yy;
 
$arr=explode('/',$dob);
 

$dateTs=strtotime($dob);
 
$now=strtotime('today');
 
$ageDays=floor(($now-$dateTs)/86400);
 
$ageYears=floor($ageDays/365);
 
$ageMonths=floor(($ageDays-($ageYears*365))/30);


	if($ageYears<18)
	{
		echo"<script>alert('Required Minimum Age 18')</script>";
	header("location: index.php");
	}

	
  }
  ?>