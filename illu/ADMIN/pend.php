<style type="text/css">
	
	table
	{
		background:transparent;
		border-color: white;
		border-radius: 20px;
		color: white;
	}

	th
	{
			
		border-left-color: transparent;
		border-right-color: transparent;
		text-shadow: 3px 3px 3px black;
		font-size: 15px;
		font-family:  sans-serif;
	}
	h2
	{
		padding: 10px;
		color:yellow;	
	}

</style>



<?php
$host='localhost';
$user='root';
$pass='';
$dbname = "illu";
$conn = mysqli_connect($host, $user, $pass, $dbname ) or die (mysql_error());
$query = "SELECT * FROM laplace";





$result = mysqli_query($conn, $query) or die (mysql_error());
$row = mysqli_fetch_assoc($result);


echo "
 <table width=80% border=1 align=center>";


echo "<th> 
	<center><h2>Procduct Name</h2></center>
	</th>
	<th> 
	<center><h2>Quantity</h2></center>
	</th>
	<th> 
	<center><h2>Total Amount</h2></center>
	</th>
	<th>
	<center><h2>Name</h2></center>
	</th>
	<th>
	<center><h2>Address</h2></center>
	</th>
	<th>
	<center><h2>Phone</h2></center>
	</th>
	<th>
	<center><h2>Date</h2></center>
	</th>
	<th>
	<center><h2>Time</h2></center>
	</th>";




	  echo "<tr>
	<th> 
	<center>$row[PN]</center>
	</th>
	<th> 
	<center>$row[MSTK]</center>
	</th>
	<th> 
	<center>$row[Total]</center>
	</th>
	<th>
	<center>$row[NAME]</center>
	</th>
	<th>
	<center>$row[ADDR]</center>
	</th>
	<th>
	<center>$row[CNT]</center>
	</th>
	<th>
	<center>$row[TDate]</center>
	</th>
	<th>
	<center>$row[TT]</center>
	</th>





	</tr>"; 
    
	while($row= mysqli_fetch_assoc($result)){
  
   echo "<tr>

	
	
		<th> 
	<center>$row[PN]</center>
	</th>
	<th> 
	<center>$row[MSTK]</center>
	</th>
	<th> 
	<center>$row[Total]</center>
	</th>
	<th>
	<center>$row[NAME]</center>
	</th>
	<th>
	<center>$row[ADDR]</center>
	</th>
	<th>
	<center>$row[CNT]</center>
	</th>
	<th>
	<center>$row[TDate]</center>
	</th>
	<th>
	<center>$row[TT]</center>
	</th>


	</tr>"
	; 
	 }

	 echo "</table>";

?>


