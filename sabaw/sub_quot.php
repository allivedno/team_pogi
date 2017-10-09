 <?php  
 //insert.php  
require_once('config.connect.php');
require_once('support/config.php');


            
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));


				// var_dump($_POST);
				// die;
			
		
		if(!empty($_POST['quot_id'])) {
			if($_POST['action'] == "price") {

					 $id=$_POST['quot_id'];
					
					 $price = $_POST['price'];
					$status = $_POST['status'];

					 $con->myQuery("UPDATE quotation SET `price`='$price',`status`='$status' WHERE id = ?",array($id));
				            

				 
				  
					 

				

				 	echo "<script>alert('Successful Saved'); window.location = 'admin.php?form=quotation';</script>";
			}
		}	
		

 ?>  