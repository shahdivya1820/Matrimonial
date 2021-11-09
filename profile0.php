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
 ?>  >  <span>Bridegroom Profile Details</span> </span>
   <?php
 session_start();
include("database/db.php");

                    $count=0;
                    
                   
    $myid=$_SESSION['id'];
$query1 = "SELECT * FROM friendship WHERE receiver='$myid' ";
$res1=mysqli_query($conn,$query1);
	$count  =mysqli_num_rows($res1);
                    ?>
		<span class="container upload">
 		    
<button class="notification-icon" id="myBtn"><i class="fa fa-user" aria-hidden="true"></i><?php if($count>0) { echo $count; } ?></button>

<!-- The Modal -->
<div id="myModal" class="modal notification">

  <!-- Modal content -->
  <div class="modal-content notification">
    <div class="modal-header notification">
      <span class="close notification">&times;</span>
      <h2 class="conncetion">Connection Request</h2>
    </div>
    <div class="modal-body notification">
    <?php
   session_start();
include("database/db.php");
$id=$_SESSION["id"];


$query1 = "SELECT * FROM friendship WHERE receiver='$myid' ";
$res1=mysqli_query($conn,$query1);
	$num_rows1  =mysqli_num_rows($res1);
      $row1 = mysqli_fetch_array($res1);                       
$query="Select * from user where id='$row1[sender]'";
$res=mysqli_query($conn,$query);

$row = mysqli_fetch_array($res);

    if ($num_rows1 > 0 )
{
	?>
    <div class="connect_link">
        
       <ul class="profile_item add">
                            	 	<a href="profile3.php?edit_id=<?php echo $row['id']; ?>" ></a>
                            	   <li class="profile_item-img add">
                            	   	  <a href="profile3.php?edit_id=<?php echo $row['id']; ?>" >	
                    				  <img src="profile/<?php echo $row['image']; ?>"class="img-responsive add" alt="" /> 
                    				  </a>
                            	   </li>
                    			  
                            	   <li class="profile_item-desc add">
                            	       
                            	   	  
                            	   	  <p>	<?php  echo  $row["name"] ;?></p>
                    				 
                    				   <a href="add_friend.php?accept=<?php echo $row["id"]; ?>" class="connect" > Accept</a>&nbsp;
                    				   <a href="delete_friend_request.php?accept=<?php echo $row["id"]; ?>" class="connect" > Reject</a>
                    				   
                            	   </li>
                    			    
                            	   <div class="clearfix"> </div>
                            	  
                               </ul>
        	
    </div>
    <hr class="connection">
    <?php
}

 else
    {
         ?>
   <div class="connect_link">
        
       <ul class="profile_item add">
                            	 
                    			  
                            	   <li class="profile_item-desc add">
                            	       
                            	   	  
                            	   	  <p>No request</p>
                    				 
                    				   
                    				   
                            	   </li>
                    			    
                            	   <div class="clearfix"> </div>
                            	  
                               </ul>
        	
    </div>
    <?php
    }




?>
    </div>
   
  </div>

</div>

<!--Creates the popup body-->
<div class="popup-overlay">
  <!--Creates the popup content-->
   <div class="popup-content">
       <h5 class="message">Message
       <button class="close">x</button>   </h5> 
      <?php

include("database/db.php");


 
$query = "SELECT * FROM user WHERE id != '".$_SESSION['id']."' ";
$res=mysqli_query($conn,$query);

while($row = mysqli_fetch_array($res))
{
    $id=$row['id'];
    $myid=$_SESSION['id'];
$query1 = "SELECT * FROM myfriends WHERE myid = '$myid' AND myfriends='$id' OR myid='$id' AND myfriends='$myid' ";
$res1=mysqli_query($conn,$query1);
	$num_rows1  =mysqli_num_rows($res1);
if ($num_rows1 > 0 )
{
    $query2 = "SELECT * FROM chat_message WHERE to_id = '$myid' AND from_id='$id' AND status='1'";
$res2=mysqli_query($conn,$query2);
	$count1  =mysqli_num_rows($res2);
  $row1 = mysqli_fetch_array($res2);
  if ($count1 > 0 )
{
    ?>
    <div class="chat_link">
        
        	<a href="chat.php" class=""  ><?php echo"$row[name]"; ?> </a>
        	<p><?php echo"$row1[chat_message]"; ?></p>
        	
    </div>
    <?php
    }
     else
    {
         ?>
    <div class="chat_link">
        

        	<p>No message</p>
        	
    </div>
    <?php
    }
}

}
    
    ?>
     <!--popup's close button-->
      </div>
</div>
<!--Content shown when popup is not displayed-->
<?php 
$count1=0;

    $myid=$_SESSION['id'];
$query1 = "SELECT * FROM chat_message WHERE  to_id='$myid' AND status='1'";
$res1=mysqli_query($conn,$query1);
	$count1  =mysqli_num_rows($res1);


?>
<button class="open" id="myBtn1" ><i class="fa fa-commenting" aria-hidden="true"></i>  <?php if($count1>0) { echo $count1; } ?></button>

<div id="overlay1" onclick="off()">
  <div id="text">
  
  <div id="box"><span>Notification</span> <span class="close">x</span> </div>
  <div class="connect_link1">
      <?php
   session_start();
include("database/db.php");
$id=$_SESSION["id"];

$sql="select * from user where id='$_SESSION[id]' and notify='1' and verify1='1'";
$result=mysqli_query($conn,$sql);
$num_rows2  =mysqli_num_rows($result);
   if ($num_rows2 > 0 )
{
$query1 = "SELECT * FROM notification WHERE gender!='$_SESSION[gender]'";
$res1=mysqli_query($conn,$query1);
	$num_rows1  =mysqli_num_rows($res1);
                             


    if ($num_rows1 > 0 )
{
    while($row = mysqli_fetch_array($res1))
{
    $querys = "SELECT * FROM user WHERE id='$row[user_id]'";
$res4=mysqli_query($conn,$querys);
	$row4 = mysqli_fetch_array($res4);
	if($row4['verify1']=='1')
	{
	?>
    
        
       <ul class="profile_item add1">
                            	 	<a href="profile4.php?edit_id=<?php echo $row['user_id']; ?>" ></a>
                            	   <li class="profile_item-img-add1">
                            	   	  <a href="profile4.php?edit_id=<?php echo $row['user_id']; ?>" >	
                    				  <img src="profile/<?php echo $row['image']; ?>"class="img-responsive add1" alt="" /> 
                    				  </a>
                            	   </li>
                    			  
                            	   <li class="profile_item-desc-add1">
                            	       
                            	   	  
                            	   	  <p>	<?php  echo  $row["name"]."  newly registered profile" ;?></p>
                    				 
                            	   </li>
                    			    
                            	   <div class="clearfix"> </div>
                            	  
                               </ul>
        	
    
    <hr class="connection">
    <?php
	}
}
}
else
{
    ?>
     <ul class="profile_item add1">
                            	 
                    			  
                            	   <li class="profile_item-desc-add1">
                            	       
                            	   	  
                            	   	  <p style="font-size:20px;"> No Notifications</p>
                    				 
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



?>
  </div>
 </div>
</div>
<?php 


    $myid=$_SESSION['id'];
    
$query1 = "SELECT * FROM notification WHERE  gender!='$_SESSION[gender]'";
$res1=mysqli_query($conn,$query1);
	$count2  ='';
	 while($row = mysqli_fetch_array($res1))
{
    $querys = "SELECT * FROM user WHERE id='$row[user_id]'";
$res4=mysqli_query($conn,$querys);
	$row4 = mysqli_fetch_array($res4);
	if($row4['verify1']=='1')
	{
	    $count2=$count2+1;
	}
}

?>
<button  class="notiy_bell" onclick="on()" style="border:none"><i class="fa fa-bell" aria-hidden="true"></i><?php include("database/db.php"); $query2 = "SELECT * FROM user WHERE id='$_SESSION[id]' and notify='1'";
$res2=mysqli_query($conn,$query2);
	$num_count  =mysqli_num_rows($res2);
	$row=mysqli_fetch_array($res2);
if($num_count>0)
{
  
if($count2>0) { echo $count2; }

else
{
    echo "";
}
}
else
{
    echo "";
}?></button>

</span>


<script>
function on() {
  document.getElementById("overlay1").style.display = "block";
}

function off() {
  document.getElementById("overlay1").style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script> 
//appends an "active" class to .popup and .popup-content when the "Open" button is clicked
$(".open").on("click", function(){
  $(".popup-overlay, .popup-content").addClass("active");
});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".close, .popup-overlay").on("click", function(){
  $(".popup-overlay, .popup-content").removeClass("active");
});

</script>
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
        	 	<a href="profile0.php?edit_id=<?php echo $row['id']; ?>"></a>
        	   <li class="profile_item-img">
        	   	  	
				  <a href="profile0.php?edit_id=<?php echo $row['id']; ?>"><img src="profile/<?php echo $row['image']; ?>"class="img-responsive" alt="" /> </a>
        	   </li>
			  
        	   <li class="profile_item-desc">
        	   	 <a href="profile0.php?edit_id=<?php echo $row['id']; ?>"> <h6>ID : 	<?php  echo  $row["id"] ;?></h6>
        	   	  <p>	<?php  echo  $row["age"] ;?>,<?php  echo  $row["gender"] ;?>, 	<?php  echo  $row["religion"] ;?>,
				 	<?php  echo  $row["education"] ;?>,
				  Rs 	<?php  echo  $row["salary"] ;?> Mark...</p></a>
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
			    	include("database/db2.php");
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
		echo"";
	}
?>	
			<div class="single_w3_profile">
				<div class="agileits_profile_image">
				<img src="profile/<?php  echo $image;?>"  onclick="onClick(this)" class="modal-hover-opacity">
				</div>	
					<div id="modal01" class="modal12" onclick="this.style.display='none'">
  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <div class="modal-content">
    <img id="img01" >
  </div>
</div>
				<div class="w3layouts_details">
					<h4>Profile ID : <?php echo $id; ?></h4>
				
				
                    <p style="font-size: 16px;color: #715c53;"><?php 
                    $logged_in1=$logged_in;
                    $last_logged1=$last_logged;
                     $active1=$active;
                     $date1 = date('M j/y  ',strtotime($logged_in));
                     $date2 = date('M j/y  ',strtotime($last_logged));
                     $dbdate = strtotime($logged_in);
                      $time1 = date('g:i A',strtotime($logged_in));
                     $time2 = date('g:i A',strtotime($last_logged));
                     
                   
                  
                        if (date("Y-m-d", $dbdate) != date("Y-m-d")) {
                        // different date
                        echo "<b>Last Seen  ".$date1." at ".$time1."</b><br>";
                    }
                     else
                    {
                         echo "<b>Last Seen today at  ".$time2."</b><br>";
                    }
                    
                   
                    
                    ?> </p>
					<a href="payment.php"  > Connect</a>
						<a href="payment.php">Photos</a>
						<a href="payment.php"  > Block</a>
				<?php	
				include("database/db.php");
				$query = mysqli_query($conn,"SELECT * FROM myfriends WHERE `myid`='$_SESSION[id]' AND `myfriends`='$id' OR`myid`='$id' AND `myfriends`='$_SESSION[id]'");
             $num_rows  =mysqli_num_rows($query);
			 if($num_rows > 0)
			 {
	         ?>
	       
	         
			
			   
			
				<?php
				}
			
			 else
			 {
                    ?>
				  
				    <?php
				}
				
				?>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="profile_w3layouts_details">
				<div class="agileits_aboutme">
					<h4>About me</h4>
					<label class="coll" for="_7"><h5>Brief About Me:</h5></label>
<input id="_7" type="radio" name="c1"> 
<div class="about_me">
				
				<?php echo $about; ?>
			
					
					
				
					
</div>
<label class="coll" for="_1"><h5>Family Details:</h5></label>
<input id="_1" type="radio" name="c1"> 
<div class="about_me">
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Father Name : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $fname; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Mother Name : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $mname; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">No.Of Sister's : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $sister; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">No.Of Brother's : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $brother; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					</div>	

				<label class="coll" for="_3"><h5>Basic Details</h5></label>
<input id="_3" type="radio" name="c1">
<div class="about_me">
					
				
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Current City : </label>
						
						<div class="col-sm-9 w3_details">
							<?php echo $city; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Village Name: </label>
						<div class="col-sm-9 w3_details">
							<?php echo $village; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
						<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">District Name: </label>
						<div class="col-sm-9 w3_details">
							<?php echo $district; ?>
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
					<?php echo $marital; ?>

						</div>
						<div class="clearfix"> </div>
					</div>
					
							<?php if($dprivacy=='Only friend')
								{
								    include('database/db5.php');
								    $sql="select * from myfriends where myid=$id and myfriends=$_SESSION[id]";
								    $res=mysqli_query($con,$sql);
								    $num_row=mysqli_num_rows($res);
								    if($num_row>0)
								    {
								        ?>
								        	<div class="form_but1">
								        <label class="col-sm-3 control-label1" for="Relation">Birthdate : </label>
								        	<div class="col-sm-9 w3_details">
								        <?php
								echo $dob;
								?>
								    		</div>
								    		<div class="clearfix"> </div>
					</div>
								    	<?php
								    }
								}
								else if($dprivacy=='Me')
								{
								    echo "";
								}
								else
								{
								    ?>
								    <div class="form_but1">
								    <label class="col-sm-3 control-label1" for="Relation">Birthdate : </label>
								    	<div class="col-sm-9 w3_details">
								    <?php
								    	echo $dob;
								    	?>
								    		</div>
								    		<div class="clearfix"> </div>
					</div>
								    	<?php
								}
								?>
					
					
				
						
					
							<?php if($tprivacy=='Only friend')
								{
								    include('database/db5.php');
								    $sql="select * from myfriends where myid=$id and myfriends=$_SESSION[id]";
								    $res=mysqli_query($con,$sql);
								    $num_row=mysqli_num_rows($res);
								    if($num_row>0)
								    {
								        ?>
								        	<div class="form_but1">
								        <label class="col-sm-3 control-label1" for="Relation">Birth Time : </label>
								        	<div class="col-sm-9 w3_details">
								        <?php
								        ?>;
								?>
								    		</div>
								    		<div class="clearfix"> </div>
					</div>
								    	<?php
								    }
								}
								else if($tprivacy=='Me')
								{
								    echo "";
								}
								else
								{
								    ?>
								    <div class="form_but1">
								    <label class="col-sm-3 control-label1" for="Relation">Birth Time : </label>
								    	<div class="col-sm-9 w3_details">
								    <?php
								    	echo $time;
								    	?>
								    		</div>
								    		<div class="clearfix"> </div>
					</div>
								    	<?php
								}
								?>
					
						
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Birth Place : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $place; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Gothra : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $gothra; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
				
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Mangalik : </label>
						<div class="col-sm-9 w3_details">
						<?php echo $mangalik; ?>
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
							<?php echo $education; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Occupation : </label>
						<div class="col-sm-9 w3_details">
					<?php echo $work; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Company Name: </label>
						<div class="col-sm-9 w3_details">
								<?php echo $cname; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Annual Income : </label>
						<div class="col-sm-9 w3_details">
								<?php echo $salary; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
				<label class="coll" for="_6"><h5>Personal Details:</h5></label>
<input id="_6" type="radio" name="c1">
<div class="about_me">
					
				
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Height : </label>
						<div class="col-sm-9 w3_details">
								<?php echo $height; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Weight : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $weight; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Body Type : </label>
						<div class="col-sm-9 w3_details">
						<?php echo $body; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Skin Tone : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $skin; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Smoking Habbit : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $smoke; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="form_but1">
						<label class="col-sm-3 control-label1" for="Relation">Drinking Habbit : </label>
						<div class="col-sm-9 w3_details">
							<?php echo $drink; ?>
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
				</div>
				
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