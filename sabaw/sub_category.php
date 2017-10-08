 <?php  
 //insert.php  
require_once('config.connect.php');
require_once('support/config.php');

$categoryName=$_POST["categoryName"];

      



  $table2c = "INSERT INTO category (category_name) VALUES ('$categoryName')";
   $run_query2d = mysqli_query($c1,$table2c);
   redirect('admin.php?form=categories');
       // echo"<script>window.open('admin.php?form=categories','_self')</script>";	
 ?>  