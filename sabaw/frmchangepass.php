<?php

require_once("header.php");

if (!empty($_GET['email']) && !empty($_GET['code'])) {
	$validate=$con->myQuery("SELECT * FROM `user` WHERE email=? AND forgot_password_code=? AND is_deleted=0 LIMIT 1",array($_GET['email'],$_GET['code']))->fetch(PDO::FETCH_ASSOC);

	if (!empty($validate)) {
?>
	<html>
		<br><br><br>
		<section id="forgot">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4">
    
                    <div class="login-box" >
                            <div class="login-box-body" >
                                
                                   <!--  <div class="login-logo text-center">
                                        <a href="index.php"><img src="img/ftclogo.png" class='img-responsive center-block' ></a><br><br>
                                    </div> -->
                                    <!-- /.login-logo -->
                              <br>
                                <h3><p class="h5 text-center mb-4">Change Password</p></h3> 
                                               <br>
                                         <!-- <div class="col-md-12 text-center">         -->

                                                 <form class="form" role="form" method="post" action="changepass.php" accept-charset="UTF-8" id="login-nav">
                                                        <input type="hidden" name="email" value=<?php echo $_GET['email']; ?>>
                                                        <div class="md-form">
                                                        
                                                            		 <i class="fa fa-lock prefix grey-text"></i>
                                                             		<input name="pw1" type="password" class="form-control" id="pw1" required>
                                                        	           <label for="pw1">New Password</label>
                                                        </div>
                                                        <div class="md-form">
                                                        
                                                            		 <i class="fa fa-lock prefix grey-text"></i>
                                                             		<input name="pw2" type="password" class="form-control" id="pw2" required>
                                                        	           <label for="pw2">Confirm Password</label>
                                                        </div>

                                                        <div class="form-group">
                                                             <button type="submit" name="submit" class="btn btn-warning btn-block">Submit</button>
                                                        </div>
                                                        <div class="checkbox">
                                                             
                                                        </div>
                                                 </form>
                                                  
	                                     </div>
                            </div>
                                           
                    </div>
                 </div>
            </div>

        </div>
		</section><br><br><br><br><br><br><br>

		<?php   require_once("footer.html"); ?>		
	</html
<?php
	}
	else {
		redirect('index.php');
	}
} else {
	redirect('index.php');
}
?>