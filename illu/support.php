<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Illuminate|Support</title>
<style type="text/css">
    
    iframe
    {
        background: transparent;
        border: transparent;

      
    }

    span,button,h2
    {
        text-shadow: 3px 3px 3px black;
    }
</style>

<script type="text/javascript">


    

function keytype()
{

    var res=/[^A-Z .a-z]/g;
    var rex=/[^0-9]/g;

    var name = document.getElementById("name");
    name.value=name.value.replace(res,"");


    var phone = document.getElementById("phone");
    phone.value=phone.value.replace(rex,"");
}

</script>


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/trip.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
<?php require_once("header.php"); ?>

     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Comments / Suggestions</h2>
                    <h3 class="section-subheading text-muted">Illuminate.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage"  id="contactForm" novalidate >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" onkeyup="keytype()" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                    <span><p class="help-block text-danger"></p></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <span><p class="help-block text-danger"></p></span>
                                </div>
                                <div class="form-group">
                                    <span><input type="tel" class="form-control" placeholder="Your Phone *" onkeyup="keytype()" maxlength="11" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                   <p class="help-block text-danger"></p></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <span><p class="help-block text-danger"></p></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <center>
    <div class="form-group">
    <iframe  src="FEEDBACKTABLE.php" seamless="no" width="100%" height="100%"  >
    </iframe>
    </div>
    </center>
    </section>


</body>

  <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

  <footer>
        <div class="container">
            <div class="row">
             
                
                   
                    <center><span class="copyright">Copyright &copy; Your Website 2016</span>
                </center>
               
          
            </div>
        </div>
    </footer>
</html>