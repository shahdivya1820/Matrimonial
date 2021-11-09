<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
 ?>  >  <span>Final Payment</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<div class="w3ls-list">	
<form method="post" action="pgRedirect.php">
    <Center>
        <table>
            <tbody>
                <tr>
                    <th>S.No</th>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label>ORDER-ID:*</label></td>
                    <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                       type="text" name="ORDER_ID" autocomplete="off"
                        value="<?php echo  "TRIMES" . rand(10000,99999999)?>" readonly>
                    </td>
                </tr>
               
             <input id="CUST_ID"type="hidden" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['id']; ?>" readonly>
                
             <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
                
              <input id="CHANNEL_ID" tabindex="4" maxlength="12"type="hidden" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
           
                <tr>
                    <td>2</td>
                    <td><label>Transaction Date*</label></td>
                    <td><input title="TXN_DATE" tabindex="10"
                        type="text" name="TXN_DATE"
                        value="<?php  echo date("Y/m/d"); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><label>Expiry date*</label></td>
                    <td><input title="EXP_DATE" tabindex="10"
                        type="text" name="EXP_DATE"
                        value="<?php $price=$_GET['price'];
                        if($price=='800') 
                        {
                            $d=strtotime("+3 Months");
                        echo date("Y/m/d",$d);
                        }
                        else if($price=='1200')
                        {
                            $d=strtotime("+6 Months");
                            echo date("Y/m/d",$d);
                        }
                        else
                        {
                            $d=strtotime("+12 Months");
                            echo date("Y/m/d",$d);
                        }
                        ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><label>Amount*</label></td>
                    <td><input title="TXN_AMOUNT" tabindex="10"
                        type="text" name="TXN_AMOUNT"
                        value="<?php  echo $price ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td></td>
             <td></td>
                    <td><input value="CheckOut"class="btn btn-success" type="submit" name="checkout'"  onclick=""></td>
                </tr>
            </tbody>
        </table>
        
      
        </Center>
        
</form>
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

<style>
input[type=text]{
  width: 100%;
  padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 80%;
}
th{
  padding: 15px;
   background-color: #f1cf91;
   text-align:center;
}
td {
  padding: 15px;
   background-color: #ffeac4;
   text-align:center;
}
</style>