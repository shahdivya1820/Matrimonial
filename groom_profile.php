<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />	
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
<style>
label.coll h5 {
    border: 1px solid #80808091;
    text-align: -webkit-center;
    padding: 5px;
    background: #ecb32d;
    border-radius: 10px;
        font-weight: 500;
}
label.coll h5:hover {
    border: 1px solid grey;
    text-align: -webkit-center;
    padding: 5px;
    background: #ffed79;
    border-radius: 10px;
        font-weight: 500;
        color:#ff4900;
}
 .modal12 {
z-index:1;
display:none;
padding-top:10px;
position:fixed;
left:0;
top:0;
width:100%;
height:100%;
overflow:auto;
background-color:rgb(0,0,0);
background-color:rgba(0,0,0,0.8)
}

@media (min-width: 768px)
{
  .modal-content{
margin: auto;
display: block;
    position: absolute;
  top: 50%;
  left: 50%;
      transform: translate(-50%, -50%);
}  
}


.modal-hover-opacity {
    width: 100%;
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-backface-visibility: hidden;
    height: 30%;
}

.modal-hover-opacity:hover {
opacity:0.60;
filter:alpha(opacity=60);
-webkit-backface-visibility:hidden
}

.modal-content img#img01 {
    width: 100%;
    height: 60%;
}


}
.close {
text-decoration:none;float:right;font-size:24px;font-weight:bold;color:white
}
.close:hover {
text-decoration:none;float:right;font-size:24px;font-weight:bold;color:white
}
.container1 {
width:200px;
display:inline-block;
}
.modal-content, #caption {   
  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}


@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}
#overlay1 {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
  
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 25px;
  color: black;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
    background-color:white;
  width:25%;
  height:auto;

}
#box{
  position: absolute;
  font-size: 25px;
  color: white;
  background-color: #ecb32d;
  width:100%;
  text-align:center;
  height:43px;
  font-weight:500;
      padding-bottom: 43px;
}
.close{
  position: absolute;
  right:5%;
  font-size: 20px;
  color: white;
}
.close:hover{
  position: absolute;
  right:5%;
  font-size: 20px;
  color: white;
}
.notiy_bell:hover{
    background-color:white;
}
.connect_link1 {
    margin-top: 50px;
        padding: 5px;
}

ul.profile_item.add1 {
    margin: 0;
}

img.img-responsive.add1 {
    height: 8%;
    width: 75%;
}


ul.profile_item li.profile_item-img-add1 {
    float: left;
    width: 30%;
}

ul.profile_item li.profile_item-desc-add1 {
    overflow: hidden;

}

ul.profile_item li.profile_item-desc-add1 p {
        color: #555;
        font-size: 12px;
        line-height: 22px;
            padding: 10px;
}
</style>
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
 ?>  >  <span>Your Profile Details</span></span>
   <?php
 session_start();
include("database/db.php");

                    $count=0;
                    
                   
    $myid=$_SESSION['id'];
$query1 = "SELECT * FROM friendship WHERE receiver='$myid' ";
$res1=mysqli_query($conn,$query1);
	$count  =mysqli_num_rows($res1);
                    ?>

  <span class="container verify">
		     <?php
include("database/db.php");
	$query=mysqli_query($conn,"select * from user where email='$_SESSION[email]'");
	$row=mysqli_fetch_array($query);
				if($row['verify']==0)
				{
				     echo '<a href="register.php" class="verify_acc"><font color="black">Verify Email</font></a>';

                	}
				else{
				echo"";
				}

$conn->close();
?> 
		</span>
<span class="container mobile">
		      <?php
include("database/db.php");
	$query=mysqli_query($conn,"select * from user where email='$_SESSION[email]'");
	$row=mysqli_fetch_array($query);
				if($row['verify2']==0)
				{
				     echo '<a href="process1.php?send=$row[id]" class="verify_mobile" ><font color="black">Verify Mobile Number</font></a>';

                	}
				else{
				echo"";
				}

$conn->close();
?> 
		   
 
		</span>
		</div>
	</div>
	<!-- //breadcrumbs -->

					
	<!-- Bridegroom Profile Details -->
	<div class="w3ls-list">
	    


		<div class="container">
		<h2>Bridegroom Profile Details</h2>
		<div class="col-md-9 similar">
		    		    <div class="col-md-3 w3ls-aside">
		
			 
        	 
        	  	
			<div class="view_profile">
        	<h3>Similar Profiles</h3>
			 <?php
include("database/db.php");

		$result = mysqli_query($conn,"SELECT * FROM user where gender!='$_SESSION[gender]'AND id!='$id' and verify1='1'  order by RAND() limit 8 ");
					

                 while($row = mysqli_fetch_array($result))
                    {
							 $userid = $row["id"];
                             /* below check if the friend is already your friend */
							
							$user_id=$_SESSION["id"];	
							 $posts = mysqli_query($conn,"SELECT * FROM blocked_user WHERE blocked_by = '$user_id' AND blocked_to='$userid' OR blocked_to = '$user_id' AND blocked_by='$userid' ")or die(mysql_error());
								
							$num_rows1  =mysqli_num_rows($posts);
							
					if ($num_rows1 == 0 )
						{
						    
                             /* below check if the friend is already your friend */
							
							$id=$_SESSION["id"];							
						    $post = mysqli_query($conn,"SELECT * FROM myfriends WHERE myid = '$id' AND myfriends='$userid' OR myfriends = '$id' AND myid='$userid' ")or die(mysql_error());
								
							$num_rows  =mysqli_num_rows($post);
							
							if ($num_rows != 0 )
							{
								while($row = mysqli_fetch_array($post))
								{
									$myfriend = $userid;
									$member_id=$_SESSION["id"];
										
									if($myfriend == $member_id)
									{
											
										$myfriend1 = $row['myfriends'];
										$friends = mysqli_query($conn,"SELECT * FROM user WHERE id = '$myfriend1'")or die(mysqli_error($bd));
										$friendsa = mysqli_fetch_array($friends);
										echo"";		  
										//echo" <div id='button_style'>Friends $memberid</div> ";
										//echo'<hr class="line_1"> ';
												
									}
									else
									{
													
										$friends = mysqli_query($conn,"SELECT * FROM user WHERE id = '$myfriend'")or die(mysql_error());
										$friendsa = mysqli_fetch_array($friends);
										
										/* If the person is your friend the div having this id button_style will be seen. */
										
										//echo" <div id='button_style'>Friends$memberid</div> ";
										 //echo'<hr class="line_1"> ';
											
									}
										
								}
									
								}
								else
								{
?>
								   	<ul class="profile_item">
        		<a href="profile1.php?edit_id=<?php echo $row['id']; ?>"></a>
        	   
        	   <li class="profile_item-img">
        	   	  <a href="profile1.php?edit_id=<?php echo $row['id']; ?>"><img src="profile/<?php echo $row['image']; ?>"class="img-responsive" alt="" /> </a>	
				  
        	   </li>
			   
        	  
        	   <li class="profile_item-desc">
        	       <a href="profile1.php?edit_id=<?php echo $row['id']; ?>">
        	   	  <h6>ID : 	<?php  echo  $row["id"] ;?></h6>
        	   	  <p><?php  echo  $row["gender"] ;?>;
				 	<?php  echo  $row["education"] ;?>,
				  Rs 	<?php  echo  $row["salary"] ;?> Mark...</p> </a>
			<a href="payment.php"  class="connect"> Connect</a>
				 
        	   </li>
			    
        	   <div class="clearfix"> </div>
        	  
           </ul>
									
								<?php
								} 
                             
                        }
						else
						{
							echo"";
						}
					}
					


$conn->close();
?>
        	
       </div>
		</div>
		    
		    </div>
		<div class="col-md-9 profiles-list-agileits">

		
		<?php
include("database/db.php");

$sql = "SELECT id,image FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			<div class="single_w3_profile">
				<div class="agileits_profile_image">
				<img src="profile/<?php  echo $row['image'];?>"  onclick="onClick(this)" class="modal-hover-opacity">
					
				</div>
				<div id="modal01" class="modal12" onclick="this.style.display='none'">
  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <div class="modal-content">
    <img id="img01" >
  </div>
</div><?php
    }
} else {
    echo "";
}

$conn->close();
?>
				
				<div class="w3layouts_details">
					<?php
include("database/db.php");

$sql = "SELECT * FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					
<h4><?php  echo  $row["name"] ;?></h4>

<p><?php  echo  $row["gender"] ;?>,<?php  echo  $row["age"] ;?> Years,<?php  echo  $row["education"] ;?>,  <?php  echo  $row["work"] ;?>.</p>
	
	 <?php	$query = mysqli_query($conn,"SELECT * FROM friendship WHERE  `receiver`='$_SESSION[id]'");
            $count=mysqli_num_rows($query);
             if($count>0) {
			 
             ?>
					<a href="payment.php"  >Received Requests  ( <?php  echo $count; ?> )</a>
					<?php
			 }
			 else {
			 ?>
                 <a href="payment.php"  >No Request</a>
                 <?php
            }
            ?>
							
						<a href="account_update.php?edit_id=<?php echo $row['id']; ?>"  onclick="return confirm('sure to edit ?')">Update Your Details</a>
			
						<a href="payment.php"  > Privacy Settings</a>
						<a href="review.php">Delete Account</a>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?> 
				</div>
				<div class="clearfix"></div>
			</div>
				<div class="profile_w3layouts_details">
				<div class="agileits_aboutme">
					<h4>About me</h4>
				<label class="coll" for="_7"><h5>Brief About Me</h5></label>
<input id="_7" type="radio" name="c1"> 
<div class="about_me">

				
					<?php
include("database/db.php");

$sql = "SELECT id,about FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<p><?php  echo  $row["about"] ;?></p>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?> 

</div>
	<label class="coll" for="_8"><h5>Contact Details</h5></label>
<input id="_8" type="radio" name="c1">
<div class="about_me">
	<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Email : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,email FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["email"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Contact No. : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,mobile FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["mobile"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					
				</div>		

		</div>
<label class="coll" for="_1"><h5>Family Details</h5></label>
<input id="_1" type="radio" name="c1"> 
<div class="about_me">
	<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Father Name : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,fname FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["fname"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Mother Name : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,mname FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["mname"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">No.Of Sister's : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,sister FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["sister"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">No.Of Brother's : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,brother FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["brother"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
				

		</div>	

				<label class="coll" for="_3"><h5>Basic Details</h5></label>
<input id="_3" type="radio" name="c1">
<div class="about_me">
<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Address : </label>
						
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,city FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<?php  echo  $row["city"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?> 
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Marital Status : </label>
						<div class="col-sm-9 w3_details">
					<?php
include("database/db.php");

$sql = "SELECT id,marital FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["marital"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>

						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Village Name: </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,village FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["village"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
						<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">District : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,district FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["district"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
						</div>
					
			<label class="coll" for="_4"><h5>Kundali Details</h5></label>
<input id="_4" type="radio" name="c1">
<div class="about_me">
<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Marital Status : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,marital FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["marital"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Birth Date : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,dob FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["dob"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Birth Time : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,time FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["time"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Birth Place : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,place FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["place"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Gothra : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,gothra FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["gothra"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Mangalik : </label>
						<div class="col-sm-9 w3_details">
						<?php
include("database/db.php");

$sql = "SELECT id,mangalik FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["mangalik"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
						<label class="coll" for="_5"><h5>Education Details</h5></label>
				
<input id="_5" type="radio" name="c1">
<div class="about_me">
				
	<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Heighest Education : </label>
						
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,education FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
			
					<?php  echo  $row["education"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?> 
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Occupation : </label>
						<div class="col-sm-9 w3_details">
					<?php
include("database/db.php");

$sql = "SELECT id,work FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["work"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Company Name: </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,cname FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["cname"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Annual Income : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,salary FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["salary"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
					<label class="coll" for="_6"><h5>Personal Details</h5></label>
<input id="_6" type="radio" name="c1">
<div class="about_me">
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Height : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,height FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["height"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Weight : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,weight FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["weight"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Body Type : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,body FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["body"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Skin Tone : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,skin FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["skin"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Smoking Habbit : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,smoke FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["smoke"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Drinking Habbit : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,drink FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["drink"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
						<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Physical Challanged : </label>
						<div class="col-sm-9 w3_details">
							<?php
include("database/db.php");

$sql = "SELECT id,physical FROM user where email='$_SESSION[email]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>									
			
				<?php  echo  $row["physical"] ;?>
					<?php
    }
} else {
    echo "";
}

$conn->close();
?>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div></div>
					
					
				
				
				
					
				
				
					
				</div>
					
					
				
			
			</div>
			
			
			
			
		</div>

			<div class="clearfix"></div>
	</div>
	<!-- Modal -->
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Login to Continue</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
							<form id="signin" action="#" method="post">
								<label>User Name </label>
								<input type="text" name="User Name" placeholder="Username" required="">
								<label>Password</label>
								<input type="password" name="Password" placeholder="Password" required="">	
								<div class="w3ls-loginr"> 
									<input type="checkbox" id="brand" name="checkbox" value="">
									<span> Remember me ?</span> 
									<a href="#">Forgot password ?</a>
								</div>
								<div class="clearfix"> </div>
								<input type="submit" name="submit" value="Login">
								<div class="clearfix"> </div>
								<div class="social-icons">
									<ul>  
										<li><a href="#"><span class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="text">Facebook</span></a></li> 
										<li class="twt"><a href="#"><span class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="text">Twitter</span></a></li>  
									</ul> 
									<div class="clearfix"> </div>
								</div>	
							</form>
						</div>
					  </div>
					</div>

				  </div>
				</div>
				<!-- //Modal -->
	</div>
		 <script>
    function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
   </script>
	<script src="js/easyResponsiveTabs.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
		
					$name.text($tab.text());
		
					$info.show();
				}
			});
	 
		});
	</script>
	<style>
	.coll{
  cursor: pointer;
  display: block;

}
.coll + input{
  display: none; /* hide the checkboxes */
}
.coll + input + div{
  display:none;
}
.coll + input:checked + div{
  display:block;
}
	</style>
	
	<!-- //Bridegroom Profile Details -->
	
	<!-- browse profiles -->
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
