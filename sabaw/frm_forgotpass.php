
<?php require_once("header.php"); ?>

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
                                <h3><p class="h5 text-center mb-4">Forgot Password</p></h3> 
                                               <br>
                                         <!-- <div class="col-md-12 text-center">         -->

                                                 <form class="form" role="form" method="post" action="forgotpass.php" accept-charset="UTF-8" id="login-nav">
                                                        <div class="md-form">
                                                        
                                                            		<i class="fa fa-envelope prefix grey-text"></i>
                                                             		<input name="email" type="email" class="form-control" id="defaultForm-email" required>
                                                        	           <label for="defaultForm-email">Your email</label>
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
</section>
<br><br><br><br><br><br><br><br><br><br>
<?php   require_once("footer.html"); ?>		
</html>