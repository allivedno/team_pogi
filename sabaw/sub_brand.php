 <?php  
 //insert.php  
require_once('config.connect.php');


$BrandName=$_POST["BrandName"];

$BrandDesc=$_POST["BrandDesc"];

$tmp_name1 =$_FILES['BrandPic']['tmp_name'];






        $table2 = "select MAX(brand_id) from brand";
            $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_row($run_query2b);
   $IMGID = "P ".$BrandName.$row[0];


if ($_FILES['BrandPic']['size'] == 0)
{
 $image = "";
}

else

{
		if($_FILES['BrandPic']['name'] = "image/jpeg")
		{


		    $filetype1 = ".jpeg";

		}
		elseif($_FILES['BrandPic']['name'] = "image/jpg")
		{

		    $filetype1 = ".jpg";
		}
		elseif($_FILES['BrandPic']['name'] = "image/png")
		{

		    $filetype1 = ".png";
		}
		else
		{
		        echo "<script>alert('Error!')</script>";
		        echo"<script>window.open('frm_brand.php','_self')</script>";
		        exit();
		}



		$_FILES['BrandPic']['name'] = $IMGID.$filetype1;
		        $filename1 = $_FILES['BrandPic']['name'];

		        $tmp_name1 = $_FILES['BrandPic']['tmp_name'];
		        
		        $local_image = 'imahe/';
		        move_uploaded_file($tmp_name1,$local_image.$filename1);
		        $BrandPic = "imahe/".$_FILES['BrandPic']['name'];




}
      



  $table2c = "INSERT INTO brand (brand_name,brand_pic,brand_desc) VALUES ('$BrandName','$BrandPic','$BrandDesc')";
   $run_query2d = mysqli_query($c1,$table2c);
   
       echo"<script>window.open('frm_brand.php','_self')</script>";	
 ?>  