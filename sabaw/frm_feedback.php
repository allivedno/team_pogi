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
?>
<body>
  <div class="container">


<br><br><br>


    <h1>FEEDBACK/S</h1>
    <hr>

  <br>

  
  <table id="autoGeneratedID" role="grid" class="table table-striped table-bordered" style="border-collapse:collapse; table-layout:fixed;">
    <caption class="sr-only"></caption>
    <thead>
      <tr>
        <th  role="gridcell">EMAIL</th>
        <th  role="gridcell">NAME</th>
        <th  role="gridcell">SUBJECT</th>
        <th  role="gridcell">MESSAGE</th>
       
      </tr>
    </thead>


    <?php 


$query=mysqli_query($c1,'SELECT * FROM feedback');


echo "<tbody>";






while ($fetch=mysqli_fetch_assoc($query))
	{
	
	echo "<tr>";
	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $fetch['email'];  
	echo "</p></center></td>";

	echo "<td style='vertical-align: middle;' ><center><p>";
		echo $fetch['name'];
	echo "</p></center></td>";
  echo "<td style='vertical-align: middle;' ><center><p>";
    echo $fetch['subject'];
  echo "</p></center></td>";
    echo "<td style='vertical-align: middle;' ><center><p>";
    echo $fetch['message'];


	echo "</tr>";


   }

    
   


//==========================================================================
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




    <script src="DatatableR/js/js.datatableass.js"></script>

<script type="text/javascript">
// Javascript

 
</script>
</body>
</html>

