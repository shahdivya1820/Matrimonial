<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />	
<?php 
session_start();
$result = mysqli_query($conn,"SELECT * FROM user where id='$_SESSION[id]' ");
					

                 $row = mysqli_fetch_array($result);
if($row['pay_status'] != "1"){
  
  include("include/header.inc1.php");
}else{  
    
  include("include/header.inc2.php");
}
?>
<?php

include("database/db.php");
$pay_status=$_POST['STATUS'];
	if ($pay_status == "TXN_SUCCESS") 
	{
	         
       
        $query1 = mysqli_query($conn,"update user set pay_status='1' where id='$_SESSION[id]'");
            if (mysqli_query($conn,$query1)) {
                 echo "Error updating record: " . mysqli_error($conn);
               
            } 
            else{
                	$result1 = mysqli_query($conn,"SELECT * FROM user where id='$_SESSION[id]' ");
					

                 $row = mysqli_fetch_array($result1);
             
                 $email=$row['email'];
                 $name=$row['name'];
	                $tnx_id=$row['ORDER_ID'];
	                $amount=$row['TXN_AMOUNT'];
	                $to = $email;
			$subject = "Payment";
			$message = '
				<html>
				<head>
				<title>Payment</title>
				</head>
				<body>
					<table style="border:1px solid #3e3e3e3e">
				<tr>
				<td style="padding:10px 18px 22px 22px">
				<img src="https://www.trimesmatrimonial.com/image/logo.png"width="50%"height="130px" alt="Hotel" /><br/>
				<p> Dear <b>'.$name.'</b>,</p>
				<p style="font-size:15px;"><b>Thank You For Payment!</b></p>
				<p></p>
				<p>We have Recieced payment of Rs. '.$amount.' .<br> Your Transaction ID for this transation is '.$tnx_id.'.<br>Now enjoy our premium service.</p><br>
					<p>Regards<br><strong>Trimes Matrimonial</strong><br>www.trimesmatrimonial.com <br></p>
					<a href="https://www.facebook.com/trimesmatrimonial">	<img src="https://www.trimesmatrimonial.com/image/facebook-icon.png"width="25px"height="30px" alt="Trimes" /></a>
			<a href="https://www.instagram.com/Trimes_matrimonial">	<img src="https://www.trimesmatrimonial.com/image/insta-logo.png"width="30px"height="33px" alt="Trimes" /></a>
			    	</td></tr>
				</table>
				</body>
				</html>
				';
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: support@trimesmatrimonial.com". "\r\n" ;

		mail($to,$subject,$message,$headers);    

                
            }
            
                    ?>

	    



		    <div class="col-md-3 w3ls-aside-pay">
	<center>	<div class="status_pay">	<h1 class="site-header__title" data-lead-id="site-header-title">Thank You For Payment!</h1>


	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">We have Recieced payment of Rs.<?php echo $row['TXN_AMOUNT'];?>.<br> Your Transaction ID for this transation is <?php echo $row['ORDER_ID'];?>.<br>Now enjoy our premium service.</p>
	</div>
	</div>	</center>
	</div>


            <?php
   
         
	}
	else
	{
	   
            	$result = mysqli_query($conn,"SELECT * FROM user where id='$_SESSION[id]' ");
					

                 $row = mysqli_fetch_array($result);
                 $email=$row['email'];
                 $name=$row['name'];
	                $tnx_id=$row['ORDER_ID'];
	                
	                $to = $email;
			$subject = "Payment";
			$message = '
				<html>
				<head>
				<title>Payment</title>
				</head>
				<body>
					<table style="border:1px solid #3e3e3e3e">
				<tr>
				<td style="padding:10px 18px 22px 22px">
				<img src="https://www.trimesmatrimonial.com/image/logo.png"width="50%"height="130px" alt="Hotel" /><br/>
				<p> Dear <b>'.$name.'</b>,</p>
				<p style="font-size:15px;"><b>Sorry Transaction Failed!</b></p>
				<p></p>
				<p>Your Transaction ID for this transation is <b>'.$tnx_id.'</b>
				<br>Please try again later.</p><br>
					<p>Regards<br><strong>Trimes Matrimonial</strong><br>www.trimesmatrimonial.com <br></p>
					<a href="https://www.facebook.com/trimesmatrimonial">	<img src="https://www.trimesmatrimonial.com/image/facebook-icon.png"width="25px"height="30px" alt="Trimes" /></a>
			<a href="https://www.instagram.com/Trimes_matrimonial">	<img src="https://www.trimesmatrimonial.com/image/insta-logo.png"width="30px"height="33px" alt="Trimes" /></a>
			    	</td></tr>
				</table>
				</body>
				</html>
				';
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: support@trimesmatrimonial.com". "\r\n" ;

		mail($to,$subject,$message,$headers);     
	
	  ?>

	    


  <div class="col-md-3 w3ls-aside-pay">
	<center>	<div class="status_pay">	<h1 class="site-header__title" data-lead-id="site-header-title">Sorry Transaction Failed!</h1>


	<div class="main-content">
		<i class="fa fa-times main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Your Transaction ID for this transation is <?php echo $row['ORDER_ID'];?>.<br>Please try again.</p>
	</div>
	</div>
	</center>
		</div>



       <?php
         
	}
	
?>
<?php 
session_start();
if($row['pay_status'] != "1"){
  
  include("include/footer.inc1.php");
}else{  
    
  include("include/footer.inc2.php");
}
?>
