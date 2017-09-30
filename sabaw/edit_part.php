 <?php  
 //insert.php  
require_once('config.connect.php');


$editpartId=$_POST["editpartId"];

 $editpartName=$_POST["editpartName"];


$AssignName=$_POST["AssignName"];




$mystring = $AssignName;
 $findme   = ' | ';
$pos = strpos($mystring, $findme);
 $AssignName1=substr($mystring,0,$pos);


 $AssignName2=substr($mystring,($pos+3));


  $table3 = "SELECT assign.assign_id,brand.brand_name,category.category_name FROM ((assign INNER JOIN brand ON assign.brand_id = brand.brand_id) INNER JOIN category ON assign.category_id = category.category_id) where brand.brand_name='".$AssignName1."'  AND category.category_name='".$AssignName2."'   ";
  $run_query3b = mysqli_query($c1,$table3);  
  $AssignNamerow=mysqli_fetch_assoc($run_query3b);

 $AssignName= $AssignNamerow['assign_id'];







 $tmp_name1 =$_FILES['editpartPic']['tmp_name'];





        $table2 = "select * from part where `part_id`='".$editpartId."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$part1=$row['part_name'];
$part2=$row['part_pic'];




if(empty($editpartName))
{
	$editpartName=$part1;
}





if (!empty($tmp_name1))
{
	unlink($part2);



		if ($_FILES['editpartPic']['size'] == 0)
		{
		 $image = "";
		}

		else

		{
				if($_FILES['editpartPic']['name'] = "image/jpeg")
				{


				    $filetype1 = ".jpeg";

				}
				elseif($_FILES['editpartPic']['name'] = "image/jpg")
				{

				    $filetype1 = ".jpg";
				}
				elseif($_FILES['editpartPic']['name'] = "image/png")
				{

				    $filetype1 = ".png";
				}
				else
				{
				        echo "<script>alert('Error!')</script>";
				        echo"<script>window.open('frm_part.php','_self')</script>";
				        exit();
				}



				$_FILES['editpartPic']['name'] = "P ".$editpartName.$row['part_id'].$filetype1;
				        $filename1 = $_FILES['editpartPic']['name'];

				        $tmp_name1 = $_FILES['editpartPic']['tmp_name'];
				        
				        $local_image = 'imahePART/';
				        move_uploaded_file($tmp_name1,$local_image.$filename1);

				        $editpartPic = "imahePART/".$_FILES['editpartPic']['name'];





		}
      
}

else
{
	$editpartPic=$part2;
}







  $table2c = "UPDATE part SET `part_name`='$editpartName',`part_pic`='$editpartPic',`assign_id`='$AssignName' where `part_id`='$editpartId'";


   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.open('frm_part.php','_self')</script>";	
 ?>  