   <?php  
 //insert.php  
require_once('config.connect.php');


$delpartId=$_POST["delpartId"];



        $table2 = "select * from part where `part_id`='".$delpartId."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);


$part1=$row['part_pic'];

	unlink($part1);

    $table2c = "DELETE FROM part  WHERE `part_id`='$delpartId'";

   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.open('frm_part.php','_self')</script>";	
   

   ?>  