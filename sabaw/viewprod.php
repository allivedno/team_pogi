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

<?php require_once("config.connect.php");


$product=$_GET["x"];
 ?>




<div class="container">
    <div class="row">
      <div class="col-md-12">
<?php

$query1=mysqli_query($c1,'SELECT * FROM brand where `brand_id` ="'.$product.'" ');
$row1 =mysqli_fetch_assoc($query1);


 ?>

      <h1 class="text-center page-title"><?php echo $row1['brand_name'];?> Products</h1>
      </div>
    </div>
  
  



    <?php 

$query=mysqli_query($c1,'SELECT * FROM assign where `brand_id` ="'.$product.'" ');
while($row =mysqli_fetch_assoc($query))
{



echo "<br>";
//echo $row['assign_id'];

$querycat=mysqli_query($c1,'SELECT * FROM category where `category_id` ="'.$row['assign_id'].'" ');
$rowcat =mysqli_fetch_assoc($querycat);

?>

<div class="card">
    <div class="card-header lighten-1 white-text" style="background-color:#0d47a1;">
       <?php echo $rowcat['category_name']; ?>
    </div>
 </div>
<?php

echo "<br>";
 echo '<div class="row">';
$query2=mysqli_query($c1,'SELECT * FROM part where `assign_id` ="'.$row['assign_id'].'" ');
  while($row =mysqli_fetch_assoc($query2))
  {
  //echo"->". $row['part_id'];

 echo '<div class="col-md-3">
                <div class="product-container">


                  <div class="product-image">
                    <span class="hover-link"></span>
                    <a class="product-link" data-toggle="modal" data-target="#m'.$row['part_id'].'" >view details</a>
                    <img class="img-responsive" src="'.$row['part_pic'].'" alt="">

                  </div>

                  <div class="product-description">
                    <div class="product-label">
                      <div class="product-name">
                        <span>'.$row['part_name'].'</span>
                      
                    
                      </div>
                    </div>
                    <div class="product-option">
  
                  </div>
                </div>
           

      </div>
  </div>






  ';
$arraypic[]=$row['part_pic'];
$arrayname[]=$row['part_name'];
$array[]=$row['part_id'];

  }
  echo '</div>';

}

?>

<!--
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
                     <div class="product-size">
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

                    </div> 
                  </div>
                </div>
              </div>
-->
            </div>
          </div>
          </div>

    <!-- /Start your project here-->
<br><br><br><br>
<!--Footer-->







<?php require_once("footer.html"); ?>
<?php 


foreach ($array as $value) {

echo '
<div class="modal fade" id="m'.$value.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <br>
            <br>

            <!--Body-->
            <div class="modal-body">

<div class="row">


<div class="col-md-6">

<img src="'.$arraypic[array_search($value,$array)].'" class="img-fluid"> 
</div>

<div class="col-md-6">

<h2>'.$arrayname[array_search($value,$array)].'</h2>
<h5>Product Description</h5>
<br>


</div>

</div>

            <!--Footer-->
        
           
            <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> Close </span>
                </button>
            </div>
        </div>
        <!--/.Content-->
    </div>

</div>
  </div>
';


}





  ?>




</body>

</html>
