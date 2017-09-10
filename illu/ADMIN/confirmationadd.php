<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "illu";

$tobeadd=$_POST['tobeadd'];

$PN=$_POST['PN'];
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM inventory WHERE PN='$PN'";
$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);

$added=$row['STK']+$tobeadd;

$up= "UPDATE inventory SET STK='$added' WHERE PN='$PN'";
$crap = mysqli_query($conn, $up) or die (mysql_error());


echo "<script>
	alert('Process Successful');
	window.location.href='confirmation.php';
	</script>";



?>
