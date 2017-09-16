<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Illuminate</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/trip.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/login1.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" >

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for beztter mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">Illuminate</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                  </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Hardware</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="store.php">Store</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="support.php">Support</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                 <div class="row">
                                        <div class="col-md-12">
                                         <label class="label">
                                            Login</label>
                                            <br><br><br>
                                             <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                    <div class="form-group">
                                                         <label class="label">Email address or Username</label><br>
                                                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address or Username" required>
                                                    </div><br>
                                                    <div class="form-group">
                                                         <label class="label">Password</label>
                                                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                         <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                    </div>
                                                    <div class="form-group">
                                                         <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                    </div>
                                                    <div class="checkbox">
                                                         
                                                    </div>
                                             </form>
                                        </div>
                                        <div class="bottom text-center">
                                            New here ? <a href="frmsignup.php"><b>Join Us</b></a>
                                        </div>
                                 </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    
    <header>
        <div class="container">
            <div class="intro-text">
              
                
            </div>
        </div>
    </header>
   <section id="home">
   </section>
 <section id="services2">

        <div class="container glowing-border">
         
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>


  <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/5.jpg" style="width:1200px;height:360px;" >
            </div>

        <div class="item">
                 <img src="img/1.jpg" style="width:1200px;height:360px;" >
            </div>

         <div class="item">
                 <img src="img/2.jpg" style="width:1200px;height:360px;" >
            </div>

        <div class="item">
                    <img src="img/3.jpg" style="width:1200px;height:360px;" >
            </div>
  
        </div>

  <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>


  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


                </div>    


        </div>
<div class="spacer">   a</div><div class="spacer">   a</div><div class="spacer">   a</div>
<div class="container">
 <img class="col-lg-8 text-center img-responsive" src="img/down.jpg" style="width:1100px;height:360px;" ></div>
   </section>


    <!-- Services Section -->
    
        
  

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Products</h2>
                    <h3 class="section-subheading text-muted">Order yours today! </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item colora">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-shopping-cart fa-stack-1x fa-inverse colora">Purchase</i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Keyboards</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item colora">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                             <i class="fa fa-shopping-cart fa-stack-1x fa-inverse colora">Purchase</i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Laptops</h4>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item colora">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse colora">Purchase</i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Console Controllers</h4>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item colora">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse colora">Purchase</i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Mice</h4>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item colora">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                               <i class="fa fa-shopping-cart fa-stack-1x fa-inverse colora">Purchase</i>
                            </div>
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Audio/Headsets</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item colora">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                             <i class="fa fa-shopping-cart fa-stack-1x fa-inverse colora">Purchase</i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Mousepads</h4>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Illuminate</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/5.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>See Guidelines</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Can't decide what to buy ? check out our guidelines first to have an idea on what to buy as your gaming peripheral.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/6.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Choose Product</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Pick your weapon of choice for gaming with various well-known brands. Providing you with a prominent manufacturer can give you a 100% guaranteed high quality equipment. </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/7.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mode of Payment</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">After choosing your desired product, proceed to purchasing by requesting amount of quantity and by filling up the other required fields.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/8.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Get your products</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">After you have sent your purchase information to us, We the team of illuminate shall respond to  your request within less than 3 days for the transaction of your item.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Enjoy and
                                    <br>Have a
                                    <br>Good Time!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



   
<footer>
        <div class="container">
            <div class="row">
             
                
                   
                    <center><span class="copyright">Copyright &copy; Your Website 2016</span>
                </center>
               
          
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img width="100%" src="Guide/4.GIF">
                                <a href="keyboard.php"><button type="button" class="btn btn-primary" >Purchase Now </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                              <img width="100%" src="Guide/5.GIF">
                              <a href="laptop.php"><button type="button" class="btn btn-primary" >Purchase Now </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <img width="100%" src="Guide/3.GIF">
                               <a href="controller.php"><button type="button" class="btn btn-primary" >Purchase Now </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                          
                                 <img width="100%" src="Guide/1.GIF">
                                <a href="mouse.php"><button type="button" class="btn btn-primary" >Purchase Now </button></a>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                               <img width="100%" src="Guide/2.GIF">
                                <a href="headphone.php"><button type="button" class="btn btn-primary" >Purchase Now </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img width="100%" src="Guide/6.GIF">
                                <a href="mousepad.php"><button type="button" class="btn btn-primary" >Purchase Now </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
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

</body>

</html>
