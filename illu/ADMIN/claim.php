<html>
<head><title>ADMIN
</title>
<link rel="stylesheet" type="text/css" >
<style>
input,select
{
  color:#fff;
 		background-color:#36c8fe;
 		border-color:#36c8fe;
 		border-radius:10px;
 		font-size:18px;
 		padding:10px 20px;
 		width:425px;

}
.btn 
 	{
 		color:#fff;
 		background-color:#36c8fe;
 		border-color:#36c8fe;
 		border-radius:10px;
 		font-size:18px;
 		padding:10px 20px
 	}
</style>

</head>




<body>
<center>

<form action="confirmationclaim.php" method="POST">
<table>
<tr>

<th>
<select name="ID">
<?php

$host='localhost';
$user='root';
$pass='';
$dbname = "illu";
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM laplace";





$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);



echo "<option value='$row[ID]' >$row[NAME]  $row[TDate]  $row[TT]</option>";
	while($row= mysqli_fetch_assoc($result)){
echo "<option value='$row[ID]' >$row[NAME]  $row[TDate]  $row[TT]</option>";
		}

?>
</select>
</th>

</tr>



<tr>
<th><input type="submit" class="btn" value="Claim"></th>
<tr>


</form>
</center>
</body>
</html>

