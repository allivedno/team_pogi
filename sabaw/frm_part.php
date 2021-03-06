<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>PART</title>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".show-text").click(function(){
      $('#myModal').find(".lots-of-text").toggle();
        $('#myModal').modal('handleUpdate');
    });
});
</script>
<style type="text/css">
.bs-example{
  margin: 20px;
}
.lots-of-text{
    display: none;
}
</style>




  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css'>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <link rel="stylesheet" href="DatatableR/css/css.datatables.css">
<style>
#panel {
    padding-top: 50px;
     padding-bottom: 50px;
    display: none;
}
button 
{
	text-decoration: none !important;
}
table td
{
	
}
</style>


<script>
$(document).ready(function(){

    $("#addbtn").click(function(){
        $("#panel").slideToggle("slow");
    });


});




</script>


</head>
<?php
require_once('config.connect.php');
?>
<body>
  <div class="container">

<br><br><br>



    <h1>PART</h1>
    <hr>
      <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

<button id="addbtn" type='button'  style="width:100%;" class="btn btn-info">Add</button>



<div id="panel">

 
  <form  role="form" action="sub_part.php" method="post"  id="partpost" enctype="multipart/form-data" >
    <div class="form-group">
      <label >Part Name:</label>
      <input type="text" class="form-control" id="partName" name="partName" required>
    </div>
  <div class="form-group">
      <label >Part Picture:</label>
      <input type="file" name="partPic" accept="image/*" class="form-control"  required id="partPic">
    </div> 

    <div class="form-group">
  <label for="AssignName">ASSIGN</label>
  <select class="form-control" name="AssignName" id="AssignName" required>

  <?php

  $table2 = "SELECT assign.assign_id,brand.brand_name,category.category_name FROM ((assign INNER JOIN brand ON assign.brand_id = brand.brand_id) INNER JOIN category ON assign.category_id = category.category_id)";
  $run_query2b = mysqli_query($c1,$table2);         

   while ($row = mysqli_fetch_assoc($run_query2b))
   {

    echo " <option >".$row['brand_name']." | ".$row['category_name']."</option>";
   }

   ?>


  </select>
</div>



 <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit" />  

  </form>




<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
  </div>
  <br>
  <hr>
  <br>

  
  <table id="autoGeneratedID" role="grid" class="table table-striped table-bordered" style="border-collapse:collapse; table-layout:fixed;">
    <caption class="sr-only"></caption>
    <thead>
      <tr>
        <th  role="gridcell">PART ID</th>
        <th  role="gridcell">PART NAME</th>
        <th  role="gridcell">PART PICTURE</th>
        <th  role="gridcell">PART ASSIGN</th>
        <th  >PART ACTION</th>
      </tr>
    </thead>


    <?php 


$query=mysqli_query($c1,'SELECT * FROM part');


echo "<tbody>";






while ($fetch=mysqli_fetch_assoc($query))
	{
	
	echo "<tr>";
	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $fetch['part_id'];  




	echo "</p></center></td>";

	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $fetch['part_name'];
	echo "</p></center></td>";

	echo "<td style='vertical-align: middle;' ><center><p>";
		echo "<img src='".$fetch['part_pic']."'' width='50' height='50'>" ;
	echo "</p></center></td>";


    echo "<td style='vertical-align: middle;' ><center><p>";
    



$query111=mysqli_query($c1,'SELECT assign.assign_id,brand.brand_name,category.category_name FROM ((assign INNER JOIN brand ON assign.brand_id = brand.brand_id) INNER JOIN category ON assign.category_id = category.category_id) WHERE assign.assign_id="'.$fetch['assign_id'].'" ');

$mys=mysqli_fetch_assoc($query111);

echo $mys['brand_name']. " | ".$mys['category_name'];
  echo "</p></center></td>";



	echo "<td style='vertical-align: middle;' >";
  
  $Mymodal="Mymodal".$fetch['part_id'];
$Yourmodal="Yourmodal".$fetch['part_id'];
		echo '<center>



     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#'.$Mymodal.'" ><i class="glyphicon glyphicon-edit"></i></button>
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$Yourmodal.'"><i class="glyphicon glyphicon-remove"></i></button></center>';




	echo "</td>";

	echo "</tr>";

 $table2 = 'SELECT assign.assign_id,brand.brand_name,category.category_name FROM ((assign INNER JOIN brand ON assign.brand_id = brand.brand_id) INNER JOIN category ON assign.category_id = category.category_id)';
  $run_query2b = mysqli_query($c1,$table2); 
   
echo
"
    
    <!-- Modal HTML -->
    <div id='".$Mymodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EDIT FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='edit_part.php' method='post' id='parteditpost' enctype='multipart/form-data'>
    <div class='form-group'>
      <input type='text' class='form-control' id='editpartId' name='editpartId'  style='opacity:0;' value='".$fetch['part_id']."'>
      <label >Part Name:</label>
      <input type='text' class='form-control' id='editpartName' name='editpartName' placeholder='".$fetch['part_name']."' >
    </div>
  <div class='form-group'>
      <label >Part Picture:</label>
      <input type='file' name='editpartPic' accept='image/*' class='form-control'   id='editpartPic' >
    </div> 

        <div class='form-group'>
  <label for='AssignName'>Assign</label>
  <select class='form-control' name='AssignName' id='AssignName' required>
";
     
        
$query1111=mysqli_query($c1,'SELECT assign.assign_id,brand.brand_name,category.category_name FROM ((assign INNER JOIN brand ON assign.brand_id = brand.brand_id) INNER JOIN category ON assign.category_id = category.category_id) WHERE assign.assign_id="'.$fetch['assign_id'].'" ');


$mys1=mysqli_fetch_assoc($query1111);

echo ' <option style="color:#999;">'.$mys1['brand_name']. " | ".$mys1['category_name'].'</option>';

   while ($row = mysqli_fetch_assoc($run_query2b))
   {

    echo ' <option >'.$row['brand_name'].' | '.$row['category_name'].'</option>';
   }

 

echo "  </select>
</div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit' id='submit' class='btn btn-success'>Save</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";


//==========================================================================
echo
"
    
    <!-- Modal HTML -->
    <div id='".$Yourmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EDIT FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='del_part.php' method='post' id='partdelpost' enctype='multipart/form-data'>
    <div class='form-group'>
      <input type='text' class='form-control' id='delpartId' name='delpartId'  style='opacity:0;' value='".$fetch['part_id']."'>
      <label ><center>Are you sure you want to delete '".$fetch['part_name']."' ?</center></label>
      
    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit' id='submit' class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";
	} 
 echo "</tbody>";        



?>








  </table>
<!-- Button trigger modal -->
<div class="bs-example">
    <div class="alert alert-info fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Note!</strong>  bakit ka tinatamad wag ka tamarin loko ka para to sa kinabukasan mo
    </div>
    
    <!-- Button HTML (to Trigger Modal) -->
  
</div>

<script src='http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js'></script>
<script src='http://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js'></script>




    <script src="DatatableR/js/js.datatable.js"></script>

<script type="text/javascript">
// Javascript


</script>
</body>
</html>


