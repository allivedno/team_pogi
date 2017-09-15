
<?php

    require_once("support/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Flowtork</title>
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
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




<link href="css/login.css" rel="stylesheet">

</head>


<body>



<nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5">

    <!-- Navbar brand -->
  

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php#aboutflowtork">About Flowtork</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="projects.php ">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php#contactus">Contact Us</a>
            </li>
            <li>
         
            </li>
            </li>
            <!-- Dropdown -->
            <?php if(!isLoggedIn()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link page-scroll" href="frmlogin.php">Login</a>      
                </li>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION[WEBAPP]['user']; ?></a>
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Log-out</a>
                    </div>
               
                   
                </li>
            <?php endif; ?>


        </ul>
        <!-- Links -->

        <!-- Search form 
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </form>-->
    </div>
    <!-- Collapsible content -->

</nav>

</body>
</html>