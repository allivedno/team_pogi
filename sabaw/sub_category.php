 <?php  
 //insert.php  
require_once('config.connect.php');


$categoryName=$_POST["categoryName"];

      



  $table2c = "INSERT INTO category (category_name) VALUES ('$categoryName')";
   $run_query2d = mysqli_query($c1,$table2c);
   
       echo"<script>window.open('frm_category.php','_self')</script>";	
 ?>  