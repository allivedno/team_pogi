<?php

require_once("support/config.php");

// var_dump($_POST);
// die;
if (!empty($_POST['prod_id']))
{
   
        	$date = new DateTime();

    		$date_applied=date_format($date, 'Y-m-d');
  			$customer_id = $_POST['customer_id'];
  			$prod_id = $_POST['prod_id'];
  			$qty = $_POST['qty'];


                $con->myQuery("INSERT INTO quotation (customer_id,product_id,quantity,date_applied) VALUES 
                    ('$customer_id','$prod_id','$qty','$date_applied')");
               
                

              	
				$user_info = getUserDetails($_SESSION[WEBAPP]['user']); 

                insertAuditLog($user_info['email'],"{$user_info['full_name']} add a quotation.");
        		
               echo "<script>alert('Successfully Added'); window.location = 'products.php';</script>";

                    //var_dump($supervisor);
                

}
?>