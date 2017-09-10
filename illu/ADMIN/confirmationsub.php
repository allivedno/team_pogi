<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "illu";


$tobesub=$_POST['tobesub'];
$PN=$_POST['PN'];
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM inventory WHERE PN='$PN'";
$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);

if($row['STK']<$tobesub)
{
	echo "<script>
alert('Process Unsuccessful you subtracted higher than the Stock.');
window.location.href=confirmation.php';
</script>"; 
}
else
{
	$subtracted=$row['STK']-$tobesub;

$upa= "UPDATE inventory SET STK='$subtracted' WHERE PN='$PN'";
$crapa = mysqli_query($conn, $upa) or die (mysql_error());
echo "<script>
	alert('Process Successful');
window.location.href=confirmation.php';
	</script>";
}








?>
