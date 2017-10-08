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
</head>

<style type="text/css">
    
.robotuh

{
font-family: Roboto !important;
font-weight: 600 !important;
}

.semipic
{
background-repeat: no-repeat;
 background-size: cover;
 opacity:0.7;
border-radius:100%; 
height:500px;

}


.bg
{
background-repeat: no-repeat;
background-size: cover;
background-image: url(img/nproducts/3.png);
}


.diva {
  display: table;
  height: 100%;
  width: 100%;
  text-align: center;
    padding:20px;
}

span {
  display: table-cell;
  vertical-align: middle;
}

</style>

<!--Navbar-->
<?php require_once("header.php"); ?>
<?php require_once("config.connect.php"); ?>

<body>


<?php
$query=mysqli_query($c1,'SELECT * FROM brand');
while($row=mysqli_fetch_assoc($query))
{
   // echo $row['brand_id'];
if(($row['brand_id']%2)==0)
{
echo '
<div class="bg">
<div class="row col-md-12 robotuh">

<div class="col-md-6 semipic" style="background-image: url(img/nproducts/'.rand(10,15).'.jpg)" >
<div class="diva"><span>
<img class="animated fadeInUp img-fluid" style="padding:20px;background-color:white;border-radius:10px;border:5px double black;" src="'.$row['brand_pic'].'">
</span>
</div>
</div>

<div class="col-md-6">
<div class="diva"><span>
    <div class="animated fadeInUp">
    <p style="font-size:1.5em;text-align: justify;">'.$row['brand_desc'].'</p>

    <a href="viewprod.php?x='.$row['brand_id'].'" style="color : white;background-color:#0d47a1; padding:10px;"> View Products  &nbsp;
    <i class="fa fa-chevron-right"> </i> </a> 

    </div>
    </span>
</div>
</div>

</div>

</div>

';
}
else
{
echo '
<div class="bg">
<div class="row col-md-12 robotuh" style="padding:20px;">



<div class="col-md-6">
<div class="diva"><span>
    <div class="animated fadeInUp">
    <p style="font-size:1.5em;text-align: justify;">'.$row['brand_desc'].'</p>

    <a href="viewprod.php?x='.$row['brand_id'].'" style="color : white; background-color:#0d47a1; padding:10px;"> View Products  &nbsp;
    <i class="fa fa-chevron-right"> </i> </a> 


    </div>
</span>
</div>
</div>



<div class="col-md-6 semipic" style="background-image: url(img/nproducts/'.rand(10,15).'.jpg)" >
<div class="diva"><span>
<img class="animated fadeInUp img-fluid"  style="padding:20px;background-color:white;border-radius:10px;border:5px double black;" src="'.$row['brand_pic'].'">
</span>
</div>
</div>

</div>

</div>


';
}
}
?>




</body>



    <!-- /Start your project here-->

<!--Footer-->
<?php require_once("footer.html"); ?>

</html>
