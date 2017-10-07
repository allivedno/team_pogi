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
      <link rel="stylesheet" href="layout/styles/flexslider.css">
</head>



<!--Navbar-->
<?php require_once("header.php"); ?>
<body>
<br><br>


           <div class="col-md-5 single-top">   
            <div class="flexslider">
  <ul class="slides">
    <li data-thumb="img/multi-turn.jpg">
      <img src="img/multi-turn.jpg"/>
    </li>

  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="layout/scripts/jquery.flexslider.js"></script>
<link rel="stylesheet" href="layout/styles/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
                    </div> 





    <!-- /Start your project here-->
<br><br><br><br>
<!--Footer-->
<?php require_once("footer.html"); ?>
</body>
      <script defer src="layout/scripts/jquery.flexslider.js"></script>
</html>
