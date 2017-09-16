   <?php  
 //insert.php  
require_once('config.connect.php');


$delcategoryId=$_POST["delcategoryId"];



      

    $table2c = "DELETE FROM category  WHERE `category_id`='$delcategoryId'";

   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.open('frm_category.php','_self')</script>";	
   

   ?>  