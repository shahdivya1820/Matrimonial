<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />	
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
    .display-res {
    background: #f1cf91;
    margin-left: 17%;
    width: 60%;
    
}

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
 ?>  >  <span>Search Results</span> </span>
 
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
<div id="display" class="display-res" >
       <?php
       session_start();
include("database/db.php");
if (isset($_POST['search']))
{
$Name = $_POST['term'];
 
   $Query = "SELECT * FROM user WHERE gender!='$_SESSION[gender]' and name like '%$Name%' and verify='1' and id not IN (SELECT blocked_to  FROM blocked_user  WHERE blocked_by='$_SESSION[id]')";
   $ExecQuery = mysqli_query($conn, $Query);
 $num_row=mysqli_num_rows($ExecQuery);
   echo '
 
<table id="result">
 
   ';
 if($num_row != 0)
 {

if($_SESSION['pay_status']=='1')
{
    while ($Result = mysqli_fetch_array($ExecQuery)) 
   {
 
      
 
  

 
 

  echo '


 <tr>
    <td><a href="profile0.php?edit_id='.$Result['id'].'">
<img src="profile/'.$Result['image'].'" width="100px" height="100px"  style="padding: 10px;">
   
   
</a></td>
<td><a href="profile2.php?edit_id='.$Result['id'].'">'.$Result['name'].'</a></td>
   
	
  </tr>
  

 
    ';
 
}
}
 else
 {
   while ($Result = mysqli_fetch_array($ExecQuery)) 
   {
 
      
 
  

 
 

  echo '


 <tr>
    <td><a href="profile0.php?edit_id='.$Result['id'].'">
<img src="profile/'.$Result['image'].'" width="100px" height="100px"  style="padding: 10px;">
   
   
</a></td>
<td><a href="profile0.php?edit_id='.$Result['id'].'">'.$Result['name'].'</a></td>
   
	
  </tr>
  

 
    ';
 
}
}
 }
 else
 {
     echo "No match found";
 }
   echo '
 
</table>
 
   ';
 

}

?>
 
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