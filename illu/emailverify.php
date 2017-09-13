<?php
require_once("support/config.php");

if (isset($_POST['submit']))
{

	 $code=$con->myQuery("SELECT * FROM `user` WHERE email=? AND email_code=? AND is_deleted=0 LIMIT 1",array($_GET['email'],$_POST['code']))->fetch(PDO::FETCH_ASSOC);
	 $error = '';
	 if (!empty($code)) {
	 	$con->myQuery("UPDATE user SET email_code='' WHERE email=? AND is_deleted=0",array($_GET['email']));
	 	echo "nays";
	 } else {
	 	echo "wrong";
	 }
}


?>
<html>


	
	<body>


		<h1>Enter code to continue</h1>
	    <form action = 'emailverify.php?email=<?php echo $_GET['email'];
?>' method="post">
	    
	    	<input type="text" id="name" name='code' required>
			<button type="submit" name="submit">Submit</button>	    	

	    </form>


	


	</body>
</html>