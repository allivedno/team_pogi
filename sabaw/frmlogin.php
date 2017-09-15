
<?php require_once("header.php"); ?>

<html>
<br><br><br>
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4 text-center">
    
                    <div class="login-box" >
                            <div class="login-box-body" style="border-radius: 10px;border: #A5A0A4 1px solid;">
                                
                                    <div class="login-logo">
                                        <a href="index.php"><img src="img/ftclogo.png" class='img-responsive center-block' ></a>
                                    </div><!-- /.login-logo -->
                               
                                <h3><p class="text-muted">Login to your Account</p></h3> 
                                               
                                         <div class="col-md-12 text-center">        

                                                 <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                            		<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                             		<input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address or Username" required>
                                                        	</div>
                                                        </div>

                                                        <div class="form-group">
                                                             
                                                             
                                                             <div class="input-group">
      																<span class="input-group-addon"><i class="fa fa-unlock" aria-hidden="true"></i></span>
   																	<input name="password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
   															</div>
                                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                        </div>
                                                        <div class="form-group">
                                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                        </div>
                                                        <div class="checkbox">
                                                             
                                                        </div>
                                                 </form>
                                                  	<div class="bottom text-center">
	                                                		New here ? <a class="ex1" href="frmsignup.php"><b>Join Us</b></a>
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