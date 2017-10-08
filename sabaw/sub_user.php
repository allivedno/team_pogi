 <?php  
 //insert.php  
require_once('config.connect.php');
require_once('support/config.php');


            
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));



		
		if($_POST['action'] == "delete") {
			 $id=$_POST["id"];
			

					 $id=$_POST["id"];

					 $con->myQuery("UPDATE user SET `is_deactivate`='1' WHERE id = ?",array($id));
				            

				 
				  
					 

				   redirect('admin.php?form=user');
			
		}	
		if($_POST['action'] == "activate") {
			 $id=$_POST["id"];
			

					 $id=$_POST["id"];

					 $con->myQuery("UPDATE user SET `is_deactivate`='0' WHERE id = ?",array($id));
				            

				 
				  
					 

				   redirect('admin.php?form=user');
			
		}	
		

 ?>  