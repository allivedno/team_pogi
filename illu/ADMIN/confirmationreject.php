<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "illu";



$ID=$_POST['ID'];
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM laplace WHERE ID='$ID'";
$result = mysqli_query($conn, $query) or die (mysql_error());




$del="DELETE FROM laplace WHERE ID='$ID'";
$delna=mysqli_query($conn, $del) or die (mysql_error());

echo "<script>
	alert('Process Successful');
window.location.href=action.php';
	</script>";




?>
