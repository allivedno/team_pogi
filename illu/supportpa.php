


<?php




$N=$_POST['name'];
$M=$_POST['message'];
$E=$_POST['email'];
$P=$_POST['phone'];

$host='localhost';
$user='root';
$pass='';
$dbname = "illu";
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());



$data="INSERT INTO support(ID, Name, Message, Email, Phone) VALUES ('null', '$N', '$M', '$E', '$P')";
$resultpa = mysqli_query($conn, $data) or die (mysql_error());
echo "<script>
alert('Sent Successfully!');
 
window.location.href='support.php';
</script>";


?>






