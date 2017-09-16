<?php

$host='localhost';
$user='root';
$pass='';
$dbname = "illu";


$PN=$_POST['PN'];
$phone=$_POST['phone'];
$addr=$_POST['addr'];
$name=$_POST['name'];
$quan=$_POST['quan'];





$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM inventory WHERE PN='$PN'";
$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);






if($name=="")
{
	echo "<script>
  	alert('Requires a name');
window.history.back(-1);
  	</script>";
}
else if($phone=="")
{
	echo "<script>
  	alert('Requires a phone');
window.history.back(-1);
  	</script>";
}

else if($addr=="")
{
	echo "<script>
  	alert('Requires an address');
window.history.back(-1);
  	</script>";
}

else if($quan=="0")
{
	echo "<script>
  	alert('Requires a quantity');
window.history.back(-1);
  	</script>";
}


else if($row['STK']<$quan)
{
	echo "<script>
  	alert('Sorry we have only  $row[STK] We dont have  $quan  of  $PN');
window.history.back(-1);
  	</script>";

}
else
{
date_default_timezone_set("Asia/manila");
$TD=date("F j, Y");
$TT=date("g:i a");

$pro=$row['RP']*$quan;
$BASTA="INSERT INTO laplace(ID, PN, MSTK, NAME, ADDR, CNT, Total, TDate, TT) VALUES ('NULL','$PN','$quan','$name','$addr','$phone','$pro','$TD','$TT')";
$wew = mysqli_query($conn, $BASTA) or die (mysql_error());

	echo "<script>
  	alert('Purchase successful!!!!');
window.history.back(-1);
  	</script>";

	

}


?>