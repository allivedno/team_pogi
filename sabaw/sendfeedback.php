 <?php  
 //insert.php  

require_once('support/config.php');


            
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));




		if(!empty($_POST['name'])) {

			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];

			 $con->myQuery("INSERT INTO feedback (name,email,message,subject) VALUES 
                    ('$name','$email','$message','$subject')");
				

			echo "<script>alert('Feedback sent'); window.location = 'index.php';</script>";
		}
		
		

 ?>  