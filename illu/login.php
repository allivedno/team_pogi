
<?php


    require_once("support/config.php");

    if (isset($_POST["username"]) && isset($_POST["password"]))
    {
        $user=$con->myQuery("SELECT * FROM `user` WHERE username=? AND password=? AND is_deleted=0 LIMIT 1",array($_POST['username'],$_POST['password']))->fetch(PDO::FETCH_ASSOC);
                    $is_login=1;
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        
        if (!empty($user)) {

            echo "wew";
        }else {
            echo "wewewew";
        }

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
        
        <button type="submit" id="LoginBtn" class="btn btn-block btn-large">Sign In</button>
    </form>
    <h5><center><a href='forgot.php' STYLE="text-decoration: none"><font color = 'red'>Forgot Password?</font></a></h5>
	<h4><center><font color = 'black'>Don't have an account yet? </font><a href='signup.php' STYLE="text-decoration: none"><font color = 'red'>Register now</h4>
</div>

</table>


</body>
</html>