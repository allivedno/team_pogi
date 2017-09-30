<?php
require_once('config.connect.php');

 $BrandName = $_POST['BrandName'];

$CategoryName = $_POST['CategoryName'];


//print_r ($CategoryName);




$querytol=mysqli_query($c1,"SELECT `brand_id` FROM brand WHERE `brand_name`='".$BrandName."'");
$Id=mysqli_fetch_assoc($querytol);

$BrandId=$Id['brand_id'];


for($x=0;$x<=((count($CategoryName))-1);$x++)
{



$querytol1=mysqli_query($c1,"SELECT `category_id` FROM category WHERE `category_name`='".$CategoryName[$x]."'");
$Id1=mysqli_fetch_assoc($querytol1);
	
	

	$CategoryId[]=$Id1['category_id'];
}




for($x=0;$x<=((count($CategoryName))-1);$x++)
{

	



	$table2c = "INSERT INTO assign (category_id,brand_id) VALUES ('$CategoryId[$x]','$BrandId')";
  $run_query2d = mysqli_query($c1,$table2c);


}



   echo"<script>window.open('frm_assign.php','_self')</script>"; 


?>