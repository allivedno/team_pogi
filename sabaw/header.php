
<?php

    require_once("support/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Flowtork</title>
<link rel="icon" type="image/png" sizes="32x32" href="img/minicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
   <!--  <link href="css/mdb.min.css" rel="stylesheet" -->
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/arnold.css" rel="stylesheet">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link href="css/login.css" rel="stylesheet">

</head>
<div class="bgded" style="background-image:url('img/banner2.png'); height: 220px; "> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1" >
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
     
      </div>
      <nav id="mainav" class="fl_right" >
        <ul class="clear">
          <li><a href="index.php">Home</a></li>
    
          <li><a href="index.php#aboutflowtork">About Flowtork</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="index.php#contactus">Contact Us</a></li>


            <?php if(!isLoggedIn()): ?>
                <li class="nav-item dropdown">
                    <a href="frmlogin.php">Login</a>      
                </li>
            <?php else: ?>



          <li><a class="drop" href="#"><?php echo $_SESSION[WEBAPP]['user']; ?>Dropdown</a>
            <ul>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li>     <a class="dropdown-item" href="#">Another action</a></li>



              <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
            </ul>
          </li>
              <?php endif; ?>

 

        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
</div>


</html>