

<?php 
require_once('support/config.php');


                      


  if(empty($_SESSION[WEBAPP]['user'])){
    redirect("index.php");
    die();
  }

$admin_info = getAdminDetails($_SESSION[WEBAPP]['user']); 

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flowtork | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="sidebar3/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="sidebar3/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="sidebar3/dist/css/skins/_all-skins.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <link rel="stylesheet" href="DatatableR/css/css.datatables.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  <body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"> 
            
              <img src="img/favicon-32x32.png" class="img-circle" alt="User Image">
            
           </span>
          <!-- logo for regular state and mobile devices -->

          <span class="logo-lg"><img src="img/favicon-32x32.png" class="img-circle" alt="User Image"><b>Flowtork</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <?php $recordsTotal=$con->myQuery("SELECT COUNT(id) FROM `feedback`")->fetchColumn(); 
                  $feed = $con->myQuery("SELECT * FROM feedback"); ?>
                  <span class="label label-success"><?php echo $recordsTotal; ?></span>
                </a>
                <ul class="dropdown-menu">
                  
 
                  <li class="header">You have <?php echo $recordsTotal; ?> feedback/s</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <?php while($rows = $feed->fetch(PDO::FETCH_ASSOC)): 
                      

                      ?>
                      <li><!-- start message -->
                        <a href="admin.php?form=feedback">
                          <div class="pull-left">
                            <img src="defUser.png" class="img-circle">
                          </div>
                          <h4>
                            <?php echo $rows['name']; ?> 
                          
                            <small><i class="fa fa-clock-o"></i> 60 mins</small>
                          </h4>
                          <p><?php echo $rows['message']; ?> </p>
                        </a>
                      </li><!-- end message -->
                    <?php endwhile; ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                   <?php $userTotal=$con->myQuery("SELECT COUNT(id) FROM `user`")->fetchColumn(); 
                  $user = $con->myQuery("SELECT * FROM user"); ?>
                  <span class="label label-warning"><?php echo $userTotal; ?></span>
                </a>
                <ul class="dropdown-menu">
                  
                  <li class="header">You have <?php echo $userTotal; ?> notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="admin.php?form=user">
                          <i class="fa fa-users text-aqua"></i> <?php echo $userTotal; ?> new members joined today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  

                  <span class="hidden-xs"><?php echo $admin_info['full_name']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $admin_info['picture']; ?>" class="img-circle" alt="User Image">
                    <p>
                     <?php echo $admin_info['full_name']; ?> - Admin
                      <small> <?php echo $admin_info['contact_no']; ?> </small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
           
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>DASHBOARD</span> 
              </a>
              
            </li>
            <li class="treeview">
              <a href="admin.php?form=auditlog">
                <i class="fa fa-files-o"></i>
                <span>ACTIVITY LOGS</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>USERS</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin.php?form=user"><i class="fa fa-circle-o"></i> USERS</a></li>
                <li><a href="admin.php?form=adminuser"><i class="fa fa-circle-o"></i> ADMIN USERS</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>COMPANIES</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
            <li class="treeview ">
              <a href="admin.php?form=categories">
                <i class="fa fa-files-o"></i>
                <span>CATEGORIES</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
             <li class="treeview">
              <a href="admin.php?form=assigning">
                <i class="fa fa-files-o"></i>
                <span>ASSIGNING</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
             <li class="treeview">
              <a href="admin.php?form=product">
                <i class="fa fa-files-o"></i>
                <span>PRODUCTS</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>REPORTS</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>QUOTATION</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
             <li class="treeview">
              <a href="admin.php?form=feedback">
                <i class="fa fa-files-o"></i>
                <span>FEEDBACK</span>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
             
            </li>
            <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="admin.php?form=profile"><i class="fa fa-circle-o text-red"></i> <span>PROFILE</span></a></li>
            <li><a href="admin.php?form=changepass"><i class="fa fa-circle-o text-yellow"></i> <span>CHANGE PASSWORD</span></a></li>
            <li><a href="admin.php?form=defaultpass"><i class="fa fa-circle-o text-aqua"></i> <span>DEFAULT PASSWORD</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      

      <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="sidebar3/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="sidebar3/dist/js/demo.js"></script>
  </body>

  <?php 
    if (!empty($_GET['form'])) {
      if ($_GET['form'] == "auditlog") {

          require_once("audit_log.php"); 

      }
       if ($_GET['form'] == "profile") {

          require_once("adminprofile.php"); 

      }
       if ($_GET['form'] == "user") {

          require_once("frm_userlist.php"); 

      }
      if ($_GET['form'] == "adminuser") {

          require_once("frm_adminuser.php"); 

      }
      if ($_GET['form'] == "categories") {

          require_once("frm_category.php"); 

      }
       if ($_GET['form'] == "assigning") {

          require_once("frm_assign.php"); 

      }
      if ($_GET['form'] == "product") {

          require_once("frm_brand.php"); 

      
      }
      if ($_GET['form'] == "feedback") {

          require_once("frm_feedback.php"); 

      }
      if ($_GET['form'] == "changepass") {

          require_once("adminchangepass.php"); 

      }
      if ($_GET['form'] == "defaultpass") {

          require_once("defaultpass.php"); 

      }
    }
  ?>
</html>
