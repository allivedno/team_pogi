
<?php require_once("header.php"); ?>

<html>

<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <p class="h2 text-center mb-4">Login to your account</p><br><br>
                </div>
                <div class="col-md-6 offset-3">
                    <div class="login-box" >
                            <div class="login-box-body" >
                                
                                   <!--  <div class="login-logo text-center">
                                        <a href="index.php"><img src="img/ftclogo.png" class='img-responsive center-block' ></a><br><br>
                                    </div> -->
                                    <!-- /.login-logo -->
                              <br>
                            
                                               
                                         <!-- <div class="col-md-12 text-center">         -->

                                                 <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                                        <div class="md-form">
                                                        
                                                            		<i class="fa fa-envelope prefix grey-text"></i>
                                                             		<input name="email" type="email" class="form-control" id="defaultForm-email" required>
                                                        	           <label for="defaultForm-email">Your email</label>
                                                        </div>

                                                        <div class="form-group">
                                                             
                                                             
                                                             <div class="md-form">
                                                                    <i class="fa fa-lock prefix grey-text"></i>
   																	<input name="password" type="password" class="form-control" id="defaultForm-pass" required>
   															          <label for="defaultForm-pass">Your password</label>
                                                            </div>
                                                             <div class="help-block text-right"><a href="frm_forgotpass.php">Forget the password ?</a></div>

                                                        </div>
                                                        <div class="form-group">
                                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                        </div>
                                                        <div class="checkbox">
                                                             
                                                        </div>
                                                 </form>
                                                  	<div class="bottom text-center">
	                                                		New here ? <a class="ex1" href="frmsignup.php"><b>Join Us</b></a><br><br><br>
                                                            
	                                            	</div>
	                                     </div>
                            </div>
                                           
                    </div>
                 </div>
            </div>

        </div>
</section>
<br><br><br><br><br><br>
<?php   require_once("footer.html"); ?>		
</html>