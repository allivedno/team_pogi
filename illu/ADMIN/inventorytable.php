
<style type="text/css">
	
	table
	{
		background:white;
		padding-left: 5%;
		padding-right:5%;
		padding-top:2.5%;
		padding-bottom:2.5%;
		border-radius: 	2.5%;
	}
</style>
<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "illu";
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM inventory";
$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);

echo "
 <table width=50% border=1 align=center>

 <tr>
 
 <th bgcolor=yellow>Product Name</th>
 <th bgcolor=orange>Stock</th>

 </tr>";


	  echo "<tr>

	<td> <center>$row[PN]</center></td>
	<td> <center>$row[STK]</center></td>
	</tr>"; 
    
	while($row= mysqli_fetch_assoc($result)){
  
   echo "<tr>

	<td> <center>$row[PN]</center></td>
	<td> <center>$row[STK]</center></td>
	</tr>"; 
	 }

	 echo "</table>";

?>