<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>PRODUCTS</title>

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
require_once('support/config.php');
?>
<body>
  <div class="container">



    <h1>TRANSACTION HISTORY</h1>
    <hr>
      <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


  </form>




<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
  </div>
  
  <br>

  
  <table id="autoGeneratedID" role="grid" class="table table-striped table-bordered" style="border-collapse:collapse; table-layout:fixed;">
    <caption class="sr-only"></caption>
    <thead>
      <tr>
        <th  role="gridcell">REPORT ID</th>
        <th  role="gridcell">EMAIL</th>
        <th  role="gridcell">PRODUCT</th>
        <th  role="gridcell">QUANTITY</th>
        <th  role="gridcell">PRICE(PHP)</th>
        <th  role="gridcell">DATE</th>
        
      </tr>
    </thead>


    <?php 

$id=$_SESSION[WEBAPP]['user'];
$query=mysqli_query($c1,'SELECT * FROM quotation WHERE status=1 AND customer_id ='.$id);


echo "<tbody>";






while ($fetch=mysqli_fetch_assoc($query))
	{
	$user_info = getUserDetails($fetch['customer_id']); 
  $prod_info = getProductDetails($fetch['product_id']); 
	echo "<tr>";
  echo "<form action='sub_quot.php' method='post'>";
	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $fetch['id'];  
	echo "</p></center></td>";

	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $user_info['email'];
	echo "</p></center></td>";
  echo "<td style='vertical-align: middle;' ><center><p>";
    echo $prod_info['part_name'];
  echo "</p></center></td>";
  echo "<td style='vertical-align: middle;' ><center><p>";
    echo $fetch['quantity'];
  echo "</p></center></td>";
  echo "<td style='vertical-align: middle;' ><center><p>";

    echo $fetch['price']." PHP" ;
  echo "</p></center></td>";
  echo "<td style='vertical-align: middle;' ><center><p>";
    echo $fetch['date_applied'];
  echo "</p></center></td>";




	echo "</tr>";


   

    
   


//==========================================================================
// echo
// "
    
//     <!-- Modal HTML -->
//     <div id='".$Yourmodal."' class='modal fade'>
//         <div class='modal-dialog'>
//             <div class='modal-content'>
//                 <div class='modal-header'>
//                     <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
//                     <h4 class='modal-title'>EDIT FORM </h4>
//                 </div>
//                 <div class='modal-body'>
                 
//  <form  role='form' action='sub_user.php' method='post' enctype='multipart/form-data'>
//     <div class='form-group'>
//        <input type='hidden' class='form-control' name='action'  value='delete'>
//       <input type='hidden' class='form-control' id='delassignId' name='id'  value='".$fetch['id']."'>

//       <label ><center>Are you sure you want to deactivate '".$fetch['id']."' ?</center></label>
      
//     </div>
//                 </div>
//                 <div class='modal-footer'>
//                     <button type='submit' name='submit' id='submit' class='btn btn-success'>Yes</button>
//                     <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
//   </form>
//                 </div>
//             </div>
//         </div>
//     </div>
// ";
// echo
// "
    
//     <!-- Modal HTML -->
//     <div id='".$Yourmodal2."' class='modal fade'>
//         <div class='modal-dialog'>
//             <div class='modal-content'>
//                 <div class='modal-header'>
//                     <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
//                     <h4 class='modal-title'>EDIT FORM </h4>
//                 </div>
//                 <div class='modal-body'>
                 
//  <form  role='form' action='sub_user.php' method='post' enctype='multipart/form-data'>
//     <div class='form-group'>
//        <input type='hidden' class='form-control' name='action'  value='activate'>
//       <input type='hidden' class='form-control' name='id'  value='".$fetch['id']."'>

//       <label ><center>Are you sure you want to activate '".$fetch['email']."' ?</center></label>
      
//     </div>
//                 </div>
//                 <div class='modal-footer'>
//                     <button type='submit' name='submit' id='submit' class='btn btn-success'>Yes</button>
//                     <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
//   </form>
//                 </div>
//             </div>
//         </div>
//     </div>
// ";
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



</script>
</body>
</html>


