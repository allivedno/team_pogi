 <?php  
 //insert.php  
require_once('config.connect.php');
require_once('support/config.php');


            
                    // $con->myQuery("UPDATE users SET is_login='$is_login' where username=?",array($_POST['username']));



		if($_POST['action'] == "add") {
			$username=$_POST["username"];
			$name = $_POST["fullname"];
			$contact = $_POST["contact"];
			$user_check=$con->myQuery("SELECT * FROM `admin_account` WHERE email=? AND is_deleted=0 LIMIT 1",array($username))->fetch(PDO::FETCH_ASSOC);
 
			if (!empty($user_check)) {

           		echo "<script>alert('Username is not available'); window.location ='admin.php?form=adminuser' </script>";
			}
			else {
					$tmp_name1 =$_FILES['userPic']['tmp_name'];
							 $table2 = "select MAX(id) from admin_account";
							            $run_query2b = mysqli_query($c1,$table2);         

							 		$row = mysqli_fetch_row($run_query2b);
							   $IMGID = "P ".$username.$row[0];

							if ($_FILES['userPic']['size'] == 0)
							{
							 	$image = "";
							}

							else

							{
									if($_FILES['userPic']['name'] = "image/jpeg")
									{


									    $filetype1 = ".jpeg";

									}
									elseif($_FILES['userPic']['name'] = "image/jpg")
									{

									    $filetype1 = ".jpg";
									}
									elseif($_FILES['userPic']['name'] = "image/png")
									{

									    $filetype1 = ".png";
									}
									else
									{
									        echo "<script>alert('Error!')</script>";
									        redirect('admin.php?form=adminuser');
									       
									        exit();
									}



											$_FILES['userPic']['name'] = $IMGID.$filetype1;
									        $filename1 = $_FILES['userPic']['name'];

									        $tmp_name1 = $_FILES['userPic']['tmp_name'];
									        
									        $local_image = 'adminpic/';
									        move_uploaded_file($tmp_name1,$local_image.$filename1);
									        $userPic = "adminpic/".$_FILES['userPic']['name'];




							}
							    

							$defpassword = $con->myQuery("SELECT * FROM `defaultpass` LIMIT 1")->fetch(PDO::FETCH_ASSOC);
							$def = $defpassword['password'];

							  $table2c = "INSERT INTO admin_account (email,password,full_name,contact_no,picture) VALUES ('$username','$def','$name','$contact','$userPic')";
							   $run_query2d = mysqli_query($c1,$table2c);

							       redirect('admin.php?form=adminuser');
				}
		}
		if($_POST['action'] == "edit") {
			$username=$_POST["username"];
			$name = $_POST["fullname"];
			$contact = $_POST["contact"];
			 $id=$_POST["id"];
			$user_check=$con->myQuery("SELECT * FROM `admin_account` WHERE email=? AND id!=? AND is_deleted=0 LIMIT 1",array($username,$id))->fetch(PDO::FETCH_ASSOC);

			if (!empty($user_check)) {

           		echo "<script>alert('Username is not available'); window.location ='admin.php?form=adminuser' </script>";
			}else{

					 $id=$_POST["id"];

					 $con->myQuery("UPDATE admin_account SET `email`='$username',`full_name`='$name',`contact_no`='$contact' WHERE id = ?",array($id));
				            

				 
				  


				   redirect('admin.php?form=adminuser');
			}
		}	
		if($_POST['action'] == "delete") {
			 $id=$_POST["id"];
			

					 $id=$_POST["id"];

					 $con->myQuery("UPDATE admin_account SET `is_deactivate`='1' WHERE id = ?",array($id));
				            

				 
				  


				   redirect('admin.php?form=adminuser');
			
		}	
		if($_POST['action'] == "activate") {
			 $id=$_POST["id"];
			

					 $id=$_POST["id"];

					 $con->myQuery("UPDATE admin_account SET `is_deactivate`='0' WHERE id = ?",array($id));
				            

				 
				  
					 

				   redirect('admin.php?form=adminuser');
			
		}	
		

 ?>  