<?php  
session_start(); 
include("database/db3.php");
  $query1 = "update user set last_logged=now(), active='0' where id='$_SESSION[id]'";
             $res=mysqli_query($db,$query1);
            if (mysqli_query($db,$query1)) {
                
               
            } 
session_destroy();  
	echo"<script>window.open('index.php','_self')</script>";
?>  

