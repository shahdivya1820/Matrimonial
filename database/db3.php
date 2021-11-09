  <?php 
  
  $db = mysqli_connect('localhost', 'root', '', 'trimesma_trimes');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

mysqli_select_db($db,"trimesma_trimes") or
 die('No database selected!');
 ?>