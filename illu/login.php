
<?php


    session_start();
	$error = "";
	$error1 = "";
	$status = "";

    $db = new mysqli('localhost', 'root', '', 'mydb') or die ("Unable to connect");
    $Username = $db->query("SELECT * FROM username");
    while($rows = $Username -> fetch_assoc()) {



    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $rows['Username'] && $_POST['password'] == $rows['Password']) {
        if ($_POST['username'] == 'Admin') {
        	$_SESSION['log'] = 'true';
        	
        	 $_SESSION['Username'] = $rows['Username'];
        	 $_SESSION['Name'] = $rows['Name'];
        	 header('Location: Admin.php');
        }


        if ( $rows['Status'] == 'Banned')  {
			$status = $rows['Status'];
        }
        else if ( $rows['Status'] == "Active") {
            $_SESSION['log'] = 'true';
            $_SESSION['Number'] = $rows['Number'];
            $num = $rows['Number'];
            $_SESSION['Name'] = $rows['Name'];
            $_SESSION['Username'] = $rows['Username'];
            $_SESSION['Password'] = $rows['Password'];
            $_SESSION['Contact'] = $rows['Contact'];
            $_SESSION['Location'] = $rows['Location'];
			$_SESSION['SQ1'] = $rows['SQ1'];
			$_SESSION['Ans1'] = $rows['Ans1'];
			$_SESSION['SQ2'] = $rows['SQ2'];
        	$_SESSION['Ans2'] = $rows['Ans2'];
        	$_SESSION['ProfilePic'] = $rows['ProfilePic'];

        	$db1 = new mysqli('localhost', 'root', '', 'mydb') or die ("Unable to connect");
        	$query = "UPDATE username SET `Online`='Online' WHERE `Number` = '$num'";
			$result = mysqli_query($db1, $query);

            header('Location: index.php');

        }


        }else {

            $error = "Invalid username and password!";
        }
    }
    }

    if ( $status == 'Banned')  {
			        	 $error = "Your Account is Banned! Please Contact Admin for more information";
        }

?>

<html>


<body>


<h1 class="welcomeMsg"></h1>
<div class="login">

	<h1>Sign In</h1>
    <form action = 'login.php' method="post">
    <script src="login.js"></script>
    	<input type="text" id="username" placeholder="Enter Username" name='username' required/>
        <input type="password" id="password" placeholder="Enter Password" name='password' required/>
        <?php echo "<font color = 'red'><center>" .$error. "</font></center><br><br><br><br>";?>
        <button type="submit" id="LoginBtn" class="btn btn-block btn-large">Sign In</button>
    </form>
    <h5><center><a href='forgot.php' STYLE="text-decoration: none"><font color = 'red'>Forgot Password?</font></a></h5>
	<h4><center><font color = 'black'>Don't have an account yet? </font><a href='signup.php' STYLE="text-decoration: none"><font color = 'red'>Register now</h4>
</div>

</table>


</body>
</html>