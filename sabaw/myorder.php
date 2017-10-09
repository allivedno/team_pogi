<?php
require_once("support/config.php");

$error = '';

$user_info = getUserDetails($_SESSION[WEBAPP]['user']); 


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once("header.php"); ?>
   <meta charset="utf-8">
    
    
    <!-- Tell the browser to be responsive to screen width -->
    
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    
      <link rel="stylesheet" href="DatatableR/css/css.datatables.css">
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
   
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="sidebar3/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="sidebar3/dist/js/demo.js"></script>

</head>

  <body>
<br><br>

     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">   
               <?php  require_once("myoderquot.php");  ?>
               
               

              
                <?php  require_once("myorderhistory.php");  ?>
               
            </div>
        </div>
      
    <br><br><br>
    </section>


<?php require_once("footer.html"); ?>
</body>

</html>