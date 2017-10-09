<?php
	require_once("support/config.php");

?>

<?php


?>
 	<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          	<div class="page-header text-center">
				<h1>Dashboard</h1>
	        </div>
        </section>

        <!-- Main content -->
        <section class="content">
       <section class="content">

          
          <!-- =========================================================== -->

          <div class="row">
           <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $con->myQuery("SELECT COUNT(id) FROM `feedback`")->fetchColumn(); ?></h3>
                  <p>Messages</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <a href="admin.php?form=feedback" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              
                </div><!-- ./col -->
             
              <!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $con->myQuery("SELECT COUNT(id) FROM `audit_log`")->fetchColumn(); ?><sup style="font-size: 20px"></sup></h3>
                  <p>ACTIVITY LOGS</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-o"></i>
                </div>
                <a href="admin.php?form=auditlog" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>0</h3>
                  <p>Events</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
           <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $con->myQuery("SELECT COUNT(id) FROM `quotation` WHERE status=1")->fetchColumn(); ?></h3>
                  <p>DELIVERED PRODUCTS</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="admin.php?form=report" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            
          </div><!-- /.row -->

          <!-- =========================================================== -->

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $con->myQuery("SELECT COUNT(id) FROM `quotation` WHERE status=0")->fetchColumn(); ?></h3>
                  <p>QUOTATION</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="admin.php?form=quotation" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $con->myQuery("SELECT COUNT(brand_id) FROM `brand`")->fetchColumn(); ?><sup style="font-size: 20px"></sup></h3>
                  <p>COMPANY</p>
                </div>
                <div class="icon">
                  <i class="fa fa-building-o"></i>
                </div>
                <a href="admin.php?form=company" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $con->myQuery("SELECT COUNT(id) FROM `user`")->fetchColumn(); ?></h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="admin.php?form=user" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $con->myQuery("SELECT COUNT(part_id) FROM `part`")->fetchColumn(); ?></h3>
                  <p>PRODUCTS</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="admin.php?form=product" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <!-- =========================================================== -->


        </section><!-- /.content -->
  </div>



<div class="modal fade" id="LeaveModal" tabindex="-1" role="dialog" aria-labelledby="LeaveyModal">
  <div class="modal-dialog">
    <div class="modal-content">
     
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Leave Entitlement</h4>
        </div>
        

    </div>
  </div>
</div>
