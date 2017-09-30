   <?php  
 //insert.php  
require_once('config.connect.php');


$delassignId=$_POST["delassignId"];






    $table2c = "DELETE FROM assign  WHERE `assign_id`='$delassignId'";

   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.open('frm_assign.php','_self')</script>"; 
   

   ?>  