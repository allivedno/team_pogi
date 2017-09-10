<html>
<head><title>wew
</title>
<link rel="stylesheet" type="text/css" >
<style>
input,select
{
  width: 500px;

color:#fff;
 		background-color:#36c8fe;
 		border-color:#36c8fe;
 		border-radius:10px;
 		font-size:18px;
 		padding:10px 20px;
 		text-shadow: 2px 2px 2px black;
}
b{
	color:white;
	font-size: 24px;
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

<form action="ADMINconfirmationadd.php" method="POST">
<table>
<tr>
<td><b>Select an Item</b></td>
<th>
<select name="PN">
<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "acgos";



$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM acgos_inventory";
$result = mysqli_query($conn, $query) or die (mysql_error());
while($row = mysqli_fetch_assoc($result))
{
echo "<option value='$row[PRONAM]'>$row[PRONAM]</option>";
}
?>
</select>
</th>
</tr>
<tr>
<td><b>To be Added From Stock</b></td>
<td><input type="number" min='0' value="0" name="tobeadd"></td>
</tr>
<tr>
<td><input class="btn" type="submit"></td>
<td><input class="btn" type="reset"></td>
<tr>


</form>
</center>
</body>
</html>

