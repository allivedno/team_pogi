<?php
require_once("support/config.php");
$error = '';
if (isset($_POST['submit']))
{
	if ($_POST['password'] == $_POST['password1']) {
		$user_check=$con->myQuery("SELECT * FROM `user` WHERE username=? AND is_deleted=0 LIMIT 1",array($_POST['username']))->fetch(PDO::FETCH_ASSOC);

		$email_check=$con->myQuery("SELECT * FROM `user` WHERE email=? AND is_deleted=0 LIMIT 1",array($_POST['email']))->fetch(PDO::FETCH_ASSOC);
                   
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));
        if (!empty($user_check) || !empty($email_check)) {
        	echo "You have a following error.";
        }
        if (!empty($user_check)) {

            echo $error = "<li>Username is not available</li>";
        }
        if (!empty($email_check)) {

            echo $error = "<li>Email is not available</li>";
        }
        if (empty($error)) {
        	
			$con->beginTransaction();	
			$date = new DateTime();
				
				$inputs = $_POST;
				// var_dump($inputs);
				// die;
				$date_applied=date_format($date, 'Y-m-d');
				unset($inputs['password1']);
				unset($inputs['submit']);
				$email_code=rand(1000,9999);
				$params=array(
					'full_name'=>$inputs['name'],
					'username'=>$inputs['username'],
					'password'=>decryptIt($inputs['password']),
					'contact'=>$inputs['contact'],
					'email'=>$inputs['email'],
					'sq'=>$inputs['SQ1'],
					'ans'=>$inputs['Ans1'],
					'email_code'=>$email_code
					
					

				);

				$con->myQuery("INSERT INTO user (full_name,username,password,email,contact_no,password_question,password_answer,email_code) VALUES 
					(:full_name,:username,:password,:email,:contact,:sq,:ans,:email_code)",$params);
				$last_id = $con->lastInsertId();
				

				$con->commit();	
				
		


					//var_dump($supervisor);
				if (!empty($inputs['email']))  {
						$header="Email Verification";
						$message="Hi ".$inputs['name'].",\n this is to verify your email address.\nyour verification code is ".$email_code;
						$message=email_template($header,$message);
						//var_dump($email_settings);
						//emailer($username,$password,$from,$to,$subject,$body,$host='tls://smtp.gmail.com',$port=465
						PHPemailer('cjayconocono@gmail.com','cJay1996',"glypp@flowtork.com",$inputs['email'],"Verify your email address",$message,'tls://smtp.gmail.com',587);

						redirect('emailverify.php?email='.$inputs['email']);

				} 
				
				
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


	


	</body>
</html>