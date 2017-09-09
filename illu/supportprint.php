
<style type="text/css">
	
	table
	{
		background:transparent;
		border-top-color: transparent;
		border-left-color: transparent;
		border-right-color: transparent;
		color: white;
	}

	th
	{
			
		border-left-color: transparent;
		border-right-color: transparent;
		text-shadow: 3px 3px 3px black;
		font-size: 25px;
		font-family:  sans-serif;
	}


</style>


<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "illu";
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM support";




$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);



echo "
 <table width=100% border=1 align=center>";


	  echo "<tr>

	<th>
	
	<center>$row[Name]</center>
	
	</th>
	<th> <center>'' $row[Message] ''</center>
	
	</th>

	</tr>"; 
    
	while($row= mysqli_fetch_assoc($result)){
  
   echo "<tr>

	<th>
	
	<center>$row[Name]</center>
	
	</th>
	<th> <center>'' $row[Message] ''</center>
	
	</th>

	</tr>"
	; 
	 }

	 echo "</table>";

?>