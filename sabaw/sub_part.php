 <?php  
 //insert.php  
require_once('config.connect.php');


 $partName=$_POST["partName"];

 $AssignName=$_POST["AssignName"];

$tmp_name1 =$_FILES['partPic']['tmp_name'];

$mystring = $AssignName;
 $findme   = ' | ';
$pos = strpos($mystring, $findme);
 $AssignName1=substr($mystring,0,$pos);


 $AssignName2=substr($mystring,($pos+3));


  $table3 = "SELECT assign.assign_id,brand.brand_name,category.category_name FROM ((assign INNER JOIN brand ON assign.brand_id = brand.brand_id) INNER JOIN category ON assign.category_id = category.category_id) where brand.brand_name='".$AssignName1."'  AND category.category_name='".$AssignName2."'   ";
  $run_query3b = mysqli_query($c1,$table3);  
  $AssignNamerow=mysqli_fetch_assoc($run_query3b);

 $AssignName= $AssignNamerow['assign_id'];




        $table2 = "select MAX(part_id) from part";
            $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_row($run_query2b);
   $IMGID = "P ".$partName.$row[0];


if ($_FILES['partPic']['size'] == 0)
{
 $image = "";
}

else

{
		if($_FILES['partPic']['name'] = "image/jpeg")
		{


		    $filetype1 = ".jpeg";

		}
		elseif($_FILES['partPic']['name'] = "image/jpg")
		{

		    $filetype1 = ".jpg";
		}
		elseif($_FILES['partPic']['name'] = "image/png")
		{

		    $filetype1 = ".png";
		}
		else
		{
		        echo "<script>alert('Error!')</script>";
		        echo"<script>window.open('frm_part.php','_self')</script>";
		        exit();
		}



		$_FILES['partPic']['name'] = $IMGID.$filetype1;
		        $filename1 = $_FILES['partPic']['name'];

		        $tmp_name1 = $_FILES['partPic']['tmp_name'];
		        
		        $local_image = 'imahePART/';
		        move_uploaded_file($tmp_name1,$local_image.$filename1);
		        $partPic = "imahePART/".$_FILES['partPic']['name'];




}
    
      


  $table2c = "INSERT INTO part (part_name,part_pic,assign_id) VALUES ('$partName','$partPic','$AssignName')";
   $run_query2d = mysqli_query($c1,$table2c);
   
      echo"<script>window.open('frm_part.php','_self')</script>";	
 ?>  