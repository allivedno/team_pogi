<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "illu";



$ID=$_POST['ID'];
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM laplace WHERE ID='$ID'";
$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);
$PN=$row['PN'];
$down=$row['MSTK'];

$query1 = "SELECT * FROM inventory WHERE PN='$PN'";
$result1 = mysqli_query($conn, $query1) or die (mysql_error());
$row1 = mysqli_fetch_assoc($result1);
$up=$row1['STK'];

if( $up<$down)
{


}
else
{

	$tuts=$up-$down;

$upa= "UPDATE inventory SET STK='$tuts' WHERE PN='$PN'";
$crapa = mysqli_query($conn, $upa) or die (mysql_error());



$del="DELETE FROM laplace WHERE ID='$ID'";
$delna=mysqli_query($conn, $del) or die (mysql_error());

echo "<script>
	alert('Process Successful');
window.location.href=action.php';
	</script>";




}



?>
