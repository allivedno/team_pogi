 <?php  
 //insert.php  
require_once('config.connect.php');


$editcategoryId=$_POST["editcategoryId"];

 $editcategoryName=$_POST["editcategoryName"];





        $table2 = "select * from category where `category_id`='".$editcategoryId."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$category1=$row['category_name'];



if(empty($editcategoryName))
{
	$editcategoryName=$category1;
}



  $table2c = "UPDATE category SET `category_name`='$editcategoryName' where `category_id`='$editcategoryId'";


   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.open('frm_category.php','_self')</script>";	
 ?>  