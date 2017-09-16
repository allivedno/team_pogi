   <?php  
 //insert.php  
require_once('config.connect.php');


$delBrandId=$_POST["delBrandId"];



        $table2 = "select * from brand where `brand_id`='".$delBrandId."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);


$brand1=$row['brand_pic'];

	unlink($brand1);

    $table2c = "DELETE FROM brand  WHERE `brand_id`='$delBrandId'";

   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.open('frm_brand.php','_self')</script>";	
   

   ?>  