<?php
require_once("support/config.php");
$error = '';
if (isset($_POST['submit']))
{
	if ($_POST['password'] == $_POST['password1']) {
		$user_check=$con->myQuery("SELECT * FROM `user` WHERE username=? AND is_deleted=0 LIMIT 1",array($_POST['username']))->fetch(PDO::FETCH_ASSOC);
                   
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        
        if (!empty($user_check)) {

            $error = "Username is not available";
        }
        
        else {
			$con->beginTransaction();	
			$date = new DateTime();
				
				$inputs = $_POST;
				// var_dump($inputs);
				// die;
				$date_applied=date_format($date, 'Y-m-d');
				unset($inputs['password1']);
				unset($inputs['submit']);
				$params=array(
					'full_name'=>$inputs['name'],
					'username'=>$inputs['username'],
					'password'=>$inputs['password'],
					'contact'=>$inputs['contact'],
					'email'=>$inputs['email'],
					'sq'=>$inputs['SQ1'],
					'ans'=>$inputs['Ans1']
					
					

				);

				$con->myQuery("INSERT INTO user (full_name,username,password,email,contact_no,security_question,answer) VALUES 
					(:full_name,:username,:password,:email,:contact,:sq,:ans)",$params);

				$con->commit();	
		//var_dump($con);

			
			redirect("login.php");
		}


	}else {
		$error = "Password does not match";
	}	
}
 ?>
<html>


	
	<body>


	<h1>Sign Up</h1>
    <form action = 'signup.php' method="post">
    <script src="login.js"></script>
    	<input type="text" id="name" placeholder="Name" name='name' required>
    	<input type="text" id="username" placeholder="Username" name='username' required>
    	<input type="password" id="password" placeholder="Password" name='password' required>
    	<input type="text" id="contact" placeholder="Contact Number" name='contact' pattern="[0-9]{11}" required>
    	<input type="email" id="email" placeholder="Email" name='email' required>
    	
        
        <input type="password" id="password" placeholder="Confirm Password" name='password1' required>
        <select id='color' style="height: 33px; width: 320px;" name='SQ1' required>
		  <option value=""><font size='150'>Security Question 1&nbsp</h1></option>
		  <option value="What is your Dream job?">What is your Dream job?</option>
		  <option value="Who was your first crush?">Who was your first crush?</option>
		  <option value="What was the name of your first pet?">What was the name of your first pet?</option>
		</select>
		<input type="text" placeholder="Answer" name='Ans1' required>
		       <br><br><br>
        <button type="submit" id="LoginBtn" class="btn btn-block btn-large" name="submit">Create</button>

    </form>

</div>

</table>


</body>
</html>