 <?php  
 //insert.php  
require_once('config.connect.php');


$editBrandId=$_POST["editBrandId"];

 $editBrandName=$_POST["editBrandName"];

 $editBrandDesc=$_POST["editBrandDesc"];

 $tmp_name1 =$_FILES['editBrandPic']['tmp_name'];





        $table2 = "select * from brand where `brand_id`='".$editBrandId."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$brand1=$row['brand_name'];
$brand2=$row['brand_pic'];
$brand3=$row['brand_desc'];


if (empty($editBrandDesc))
{
	$editBrandDesc=$brand3;
}
if(empty($editBrandName))
{
	$editBrandName=$brand1;
}





if (!empty($tmp_name1))
{
	unlink($brand2);



		if ($_FILES['editBrandPic']['size'] == 0)
		{
		 $image = "";
		}

		else

		{
				if($_FILES['editBrandPic']['name'] = "image/jpeg")
				{


				    $filetype1 = ".jpeg";

				}
				elseif($_FILES['editBrandPic']['name'] = "image/jpg")
				{

				    $filetype1 = ".jpg";
				}
				elseif($_FILES['editBrandPic']['name'] = "image/png")
				{

				    $filetype1 = ".png";
				}
				else
				{
				        echo "<script>alert('Error!')</script>";
				        echo"<script>window.open('frm_brand.php','_self')</script>";
				        exit();
				}



				$_FILES['editBrandPic']['name'] = "P ".$editBrandName.$row['brand_id'].$filetype1;
				        $filename1 = $_FILES['editBrandPic']['name'];

				        $tmp_name1 = $_FILES['editBrandPic']['tmp_name'];
				        
				        $local_image = 'imahe/';
				        move_uploaded_file($tmp_name1,$local_image.$filename1);

				        $editBrandPic = "imahe/".$_FILES['editBrandPic']['name'];





		}
      
}

else
{
	$editBrandPic=$brand2;
}







  $table2c = "UPDATE brand SET `brand_name`='$editBrandName',`brand_pic`='$editBrandPic',`brand_desc`='$editBrandDesc' where `brand_id`='$editBrandId'";


   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.open('frm_brand.php','_self')</script>";	
 ?>  