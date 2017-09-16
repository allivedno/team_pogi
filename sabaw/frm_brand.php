<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>PRODUCTS</title>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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





    <h1>PRODUCTS</h1>
    <hr>
      <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

<button id="addbtn" type='button'  style="width:100%;" class="btn btn-info">Add</button>



<div id="panel">

 
  <form  role="form" action="sub_brand.php" method="post" id="brandpost" enctype="multipart/form-data">
    <div class="form-group">
      <label >Brand Name:</label>
      <input type="text" class="form-control" id="BrandName" name="BrandName" required>
    </div>
  <div class="form-group">
      <label >Brand Picture:</label>
      <input type="file" name="BrandPic" accept="image/*" class="form-control"  required id="BrandPic">
    </div> 
     <div class="form-group">
      <label >Brand Description:</label>
      <textarea style="resize:none;" class="form-control" rows='7' name="BrandDesc" id="BrandDesc" required></textarea>
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
        <th  role="gridcell">BRAND ID</th>
        <th  role="gridcell">BRAND NAME</th>
        <th  role="gridcell">BRAND PICTURE</th>
        <th  role="gridcell">BRAND DESCRIPTION</th>
        <th  >BRAND ACTION</th>
      </tr>
    </thead>


    <?php 


$query=mysqli_query($c1,'SELECT * FROM brand');


echo "<tbody>";






while ($fetch=mysqli_fetch_assoc($query))
	{
	
	echo "<tr>";
	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $fetch['brand_id'];  




	echo "</p></center></td>";

	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $fetch['brand_name'];
	echo "</p></center></td>";

	echo "<td style='vertical-align: middle;' ><center><p>";
		echo "<img src='".$fetch['brand_pic']."'' width='50' height='50'>" ;
	echo "</p></center></td>";

	echo "<td style='vertical-align: middle;' ><center><p>";	

    $exceed=strlen($fetch['brand_desc']);
if($exceed > 20)
{
  echo substr(($fetch['brand_desc']),0,17) . " ...";

}
 else
  {
    echo  $fetch['brand_desc'];
  }

	echo "</p></center></td>";



	echo "<td style='vertical-align: middle;' >";
  
  $Mymodal="Mymodal".$fetch['brand_id'];
$Yourmodal="Yourmodal".$fetch['brand_id'];
		echo '<center>



     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#'.$Mymodal.'" ><i class="glyphicon glyphicon-edit"></i></button>
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$Yourmodal.'"><i class="glyphicon glyphicon-remove"></i></button></center>';




	echo "</td>";

	echo "</tr>";


   
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
                 
 <form  role='form' action='edit_brand.php' method='post' id='brandeditpost' enctype='multipart/form-data'>
    <div class='form-group'>
      <input type='text' class='form-control' id='editBrandId' name='editBrandId'  style='opacity:0;' value='".$fetch['brand_id']."'>
      <label >Brand Name:</label>
      <input type='text' class='form-control' id='editBrandName' name='editBrandName' placeholder='".$fetch['brand_name']."' >
    </div>
  <div class='form-group'>
      <label >Brand Picture:</label>
      <input type='file' name='editBrandPic' accept='image/*' class='form-control'   id='editBrandPic' >
    </div> 
     <div class='form-group'>
      <label >Brand Description:</label>
      <textarea style='resize:none;' class='form-control' rows='7' name='editBrandDesc' id='editBrandDesc' placeholder='".$fetch['brand_desc']."' ></textarea>
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
                 
 <form  role='form' action='del_brand.php' method='post' id='branddelpost' enctype='multipart/form-data'>
    <div class='form-group'>
      <input type='text' class='form-control' id='delBrandId' name='delBrandId'  style='opacity:0;' value='".$fetch['brand_id']."'>
      <label ><center>Are you sure you want to delete '".$fetch['brand_name']."' ?</center></label>
      
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

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js'></script>
<script src='http://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js'></script>




    <script src="DatatableR/js/js.datatable.js"></script>

<script type="text/javascript">
// Javascript

  $(function(){
        $("#brandpost").on("submit", function(event) {
            event.preventDefault();

            var formData = {
                'BrandName': $('input[name=BrandName]').val()  
                 'BrandPic': $('input[name=BrandPic]').val() 
                  'BrandDesc': $('input[name=BrandDesc]').val() 
            };
            console.log(formData);

            $.ajax({
                url: "sub_brand.php",
                type: "post",
                data: formData,
                success: function(d) {
                   
                }
            });
        });
    }); 


    $(function(){
        $("#brandeditpost").on("submit", function(event) {
            event.preventDefault();

            var formData = {
              'editBrandId': $('input[name=editBrandId]').val()  
                'editBrandName': $('input[name=editBrandName]').val()  
                 'editBrandPic': $('input[name=editBrandPic]').val() 
                  'editBrandDesc': $('input[name=editBrandDesc]').val() 
            };
            console.log(formData);

            $.ajax({
                url: "edit_brand.php",
                type: "post",
                data: formData,
                success: function(d) {
                   
                }
            });
        });
    }); 
</script>
</body>
</html>


