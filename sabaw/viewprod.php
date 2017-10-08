<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Products</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

            <link rel="stylesheet" href="layout/styles/products.css">
</head>



<!--Navbar-->
<?php require_once("header.php"); ?>
<body style="background-color: white;">
<br><br>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center page-title">Products</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="product-container">

          <div class="product-image">
            <span class="hover-link"></span>
            <a class="product-link" data-toggle="modal" data-target="#modal-actuator" >view details</a>
            <img class="img-responsive" src="img/productsample/sub-category/multi-turn.jpg" alt="">
          </div>
          <div class="product-description">
            <div class="product-label">
              <div class="product-name">
                <h1>Multi-turn</h1>
                <p class="price"></p>
                <p></p>
              </div>
            </div>
            <div class="product-option">
        <!--      <div class="product-size">
                <h3>Sizes</h3>
                <p>XS,S,M,L,XL,XXL</p>
              </div>
              <div class="product-color">
                <h3>Colors</h3>
                <ul>
                  <li class="red"></li>
                  <li class="blue"></li>
                  <li class="green"></li>
                  <li class="gray"></li>
                  <li class="black"></li>
                  <li class="dark-blue"></li>
                </ul>
              </div>

            </div> -->
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

    <!-- /Start your project here-->
<br><br><br><br>
<!--Footer-->







<?php require_once("footer.html"); ?>
<?php include("modals.php"); ?>
</body>

</html>
