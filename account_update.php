<link rel="stylesheet" type="text/css" href="css/custom2.css " />
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
<!-- inner banner -->	


<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'database/dbconfig.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM user WHERE id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		echo"error";
	}
	include ("database/db1.php");
	 
	if(isset($_POST['btn_save_updates']))
	{
	$id = $_GET['edit_id'];	


		$name = $_POST['name'];// user name
		$dob = $_POST['dob'];// user name

		$city = $_POST['city'];// user name
		$village = $_POST['village'];// user text2
		$district = $_POST['district'];// user name
		$time = $_POST['time'];// user text2
		$place = $_POST['place'];// user name
		$marital = $_POST['marital'];// user text2
		$gothra = $_POST['gothra'];// user text2
		
		$mangalik = $_POST['mangalik'];// user name
		$education = $_POST['education'];// user text2
		$work = $_POST['work'];// user name
		$cname = $_POST['cname'];// user text2
		$salary = $_POST['salary'];// user name
		$height = $_POST['height'];// user text2
		$weight = $_POST['weight'];// user name
		$body = $_POST['body'];// user name
		$skin = $_POST['skin'];// user text2
		
		$smoke = $_POST['smoke'];// user text2
		$drink = $_POST['drink'];// user name
		$fname = $_POST['fname'];// user text2
		$mname = $_POST['mname'];// user name
		$brother = $_POST['brother'];// user text2
		$sister = $_POST['sister'];// user name
		$about = $_POST['about'];// user text2
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
	
$dob1 = date("m-d-Y", strtotime($dob1));
 
$arr=explode('-',$dob1);

$dateTs=strtotime($dob);
 
$now=strtotime('today');
 
$ageDays=floor(($now-$dateTs)/86400);
 
$ageYears=floor($ageDays/365);
 
$ageMonths=floor(($ageDays-($ageYears*365))/30);


	if($ageYears<18)
	{
		echo"<script>alert('Required Minimum Age 18')</script>";
	header("location: account_update.php");

	}
else
	{

		if($imgFile)
		{
			$upload_dir = 'profile/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$image = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['image']);
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$image = $edit_row['image']; // old image from database
		}	
		
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE user SET name=:uname,dob=:udob,age=:uage,city=:ucity,village=:uvillage,district=:udistrict,time=:utime,place=:uplace,marital=:umarital,gothra=:ugothra,mangalik=:umangalik,education=:ueducation,work=:uwork,cname=:ucname,salary=:usalary,height=:uheight,weight=:uweight,body=:ubody,skin=:uskin,smoke=:usmoke,drink=:udrink,fname=:ufname,mname=:umname,brother=:ubrother,sister=:usister,about=:uabout,image=:uimage WHERE id=:uid');
			
			$stmt->bindParam(':uname',$name);
			$stmt->bindParam(':udob',$dob);
	$stmt->bindParam(':uage',$ageYears);
		
			$stmt->bindParam(':ucity',$city);
			$stmt->bindParam(':uvillage',$village);
			$stmt->bindParam(':udistrict',$district);
			$stmt->bindParam(':utime',$time);
			$stmt->bindParam(':uplace',$place);
			$stmt->bindParam(':umarital',$marital);
			$stmt->bindParam(':ugothra',$gothra);
			
			$stmt->bindParam(':umangalik',$mangalik);
			$stmt->bindParam(':ueducation',$education);
			$stmt->bindParam(':uwork',$work);
			$stmt->bindParam(':ucname',$cname);
			$stmt->bindParam(':usalary',$salary);
			$stmt->bindParam(':uheight',$height);
			$stmt->bindParam(':uweight',$weight);
			$stmt->bindParam(':ubody',$body);
			$stmt->bindParam(':uskin',$skin);
			$stmt->bindParam(':usmoke',$smoke);
			$stmt->bindParam(':udrink',$drink);
			$stmt->bindParam(':ufname',$fname);
			$stmt->bindParam(':umname',$mname);
			$stmt->bindParam(':ubrother',$brother);
			$stmt->bindParam(':usister',$sister);
			$stmt->bindParam(':uabout',$about);
			$stmt->bindParam(':uimage',$image);
			
			$stmt->bindParam(':uid',$id);
				
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='bride_profile.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		}
	}				

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
 ?>  >  <span><a href="settings.php">Privacy Settings</a></span> >  <span>Your Profile Details</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
<div class="w3ls-list">
		<div class="container">
		<h2>Edit Your Details</h2>
		 <div class="col-md-3 w3ls-aside updated setting">
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
		<div class="col-md-9 profiles-list-agileits setting update">
		   
		    
			<div class="col-md-9 w3ls-aside1 settings update">
<form action=""method="post"enctype="multipart/form-data">
            <div class="row">
            
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 update">
                                    <form role="form">
                                        
                                        <div class="form-group">
                                            <label>Profile Picture</label>
											<p><img src="profile/<?php echo $image; ?>" height="150" width="150" /></p>
                                            <input class="form-control" type="file"accept="image/*"name="user_image">
                                        </div>
                                       
									 <div class="form-group">
                                            <label>Your Name</label>
                                            <input class="form-control" type="text"name="name"value="<?php echo $name; ?>">
											
                                        </div>
      							 <div class="form-group">
                                            <label>Birthday</label>
                                            <input class="form-control" type="date"name="dob"value="<?php echo $dob; ?>">
                                        </div>
										
										
										 <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" type="text"name="city"value="<?php echo $city; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>Village</label>
                                            <input class="form-control" type="text"name="village"value="<?php echo $village; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>District</label>
                                            <input class="form-control" type="text"name="district"value="<?php echo $district; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>Birth Time</label>
                                            <input class="form-control" type="text"name="time"value="<?php echo $time; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>Birth Place</label>
                                            <input class="form-control" type="text"name="place"value="<?php echo $place; ?>">
                                        </div>
										<div class="form-group">
										  <label>Marital Status</label>
                                    <select class="form-control" name="marital">
									<option value="<?php echo $marital; ?>"><?php echo $marital; ?></option>
     <option value="Single">Single</option>
    <option value="Divorced">Divorced</option>
    <option value="Widow">Widow</option>
  </select>
                              
                            </div>
										 <div class="form-group">
										  <label>Gothra</label>
                                    <select class="form-control" name="gothra">
									<option value="<?php echo $gothra; ?>"><?php echo $gothra; ?></option>
									<option value="No Belief">No Belief</option>
     <?php
include ("database/config.php");
    $query = mysqli_query($con,"SELECT name FROM gothra");

while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['name']."'>".$row['name'].'</option>';
}
    ?>
  </select>
                              
                            </div>
										
										<div class="form-group">
										  <label>Mangalik</label>
                                    <select class="form-control" name="mangalik">
									<option value="<?php echo $mangalik; ?>"><?php echo $mangalik; ?></option>
      
   
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    <option value="No Belief">No Belief</option>
  
  
  </select>
                              
                            </div>
										 <div class="form-group">
                                            <label>Highest Education</label>
                                            <input class="form-control" type="text"name="education"value="<?php echo $education; ?>">
                                        </div>
										 
										 <div class="form-group">
										  <label>Occupation</label>
                                    <select class="form-control" name="work">
									<option value="<?php echo $work; ?>"><?php echo $work; ?></option>
     <?php
include ("database/config.php");
    $query = mysqli_query($con,"SELECT name FROM occupation");

while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['name']."'>".$row['name'].'</option>';
}
    ?>
  </select>
                              
                            </div>
										
										
										
										
										 <div class="form-group">
                                            <label>Company Name</label>
                                            <input class="form-control" type="text"name="cname"value="<?php echo $cname; ?>">
                                        </div>
										 <div class="form-group">
										  <label>Annual Salary</label>
                                    <select class="form-control" name="salary">
									<option value="<?php echo $salary; ?>"><?php echo $salary; ?></option>
     <?php
include ("database/config.php");
    $query = mysqli_query($con,"SELECT name FROM salary");

while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['name']."'>".$row['name'].'</option>';
}
    ?>
  </select>
                              
                            </div>
										 <div class="form-group">
										  <label>Your Height</label>
                                    <select class="form-control" name="height">
									<option value="<?php echo $height; ?>"><?php echo $height; ?></option>
     <?php
include ("database/config.php");
    $query = mysqli_query($con,"SELECT name FROM height");

while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['name']."'>".$row['name'].'</option>';
}
    ?>
  </select>
                              
                            </div>
										 <div class="form-group">
                                            <label>Your Weight</label>
                                            <input class="form-control" type="text"name="weight"value="<?php echo $weight; ?>">
                                        </div>
										<div class="form-group">
										  <label>Body Type</label>
                                    <select class="form-control" name="body">
									<option value="<?php echo $body; ?>"><?php echo $body; ?></option>
      
   
    <option value="Slim">Slim</option>
    <option value="Fat">Fat</option>
    <option value="Athelatic">Athelatic</option>
    <option value="Average">Average</option>
    <option value="Muscle">Muscle</option>
  
  
  </select>
                              
                            </div>
										 <div class="form-group">
										  <label>Skin Type</label>
                                    <select class="form-control" name="skin">
									<option value="<?php echo $skin; ?>"><?php echo $skin; ?></option>
      
   
    <option value="Fair">Fair</option>
    <option value="Very Fair">Very Fair</option>
    <option value="White Skin">White Skin</option>
    <option value="Dark">Dark</option>
  
  
  </select>
                              
                            </div>
										
										 <div class="form-group">
										  <label>Smoking Habbits</label>
                                    <select class="form-control" name="smoke">
									<option value="<?php echo $smoke; ?>"><?php echo $smoke; ?></option>
      
   
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    <option value="Occasionaly">Occasionaly</option>
  
  
  </select>
                              
                            </div>
										  <div class="form-group">
										  <label>Drinking Habbits</label>
                                    <select class="form-control" name="drink">
									<option value="<?php echo $drink; ?>"><?php echo $drink; ?></option>
      
   
     <option value="Yes">Yes</option>
    <option value="No">No</option>
    <option value="Occasionaly">Occasionaly</option>
  
  
  </select>
                              
                            </div>
										 <div class="form-group">
                                            <label>Father Name</label>
                                            <input class="form-control" type="text"name="fname"value="<?php echo $fname; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>Mother Name</label>
                                            <input class="form-control" type="text"name="mname"value="<?php echo $mname; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>Number of Brothers</label>
                                            <input class="form-control" type="text"name="brother"value="<?php echo $brother; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>Number Of Sisters</label>
                                            <input class="form-control" type="text"name="sister"value="<?php echo $sister; ?>">
                                        </div>
										 <div class="form-group">
                                            <label>About Yourself</label>
                                            <textarea class="form-control"name="about"><?php echo $about; ?></textarea>
                                        </div>
                                       
                                        <input type="submit" class="btn btn-default1"name="btn_save_updates"value="Update">
                                        
                                    </form>
                                </div>
                               
                                
                                        
                                    </form>
                                </div>
                                
                            </div>
                           
                        </div>
                        
                    </div>
                  
                </div>
                </form>
            </div>
            
            
            
         
        </div>
			
		</div></div>
		
<?php 

if(isset($_SESSION['email'])){
  
  include("include/footer.inc1.php");
}else{  
    
  include("include/footer.inc.php");
}
?>