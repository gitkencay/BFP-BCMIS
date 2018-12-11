<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>BFP BACOLOD MIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->      
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <?php require 'require/sidebar.php'?>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="pages-login.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Transaction</a></li>                    
                    <li class="active"><a href="Transaction-Assessment.html">Assessment & Payment</a></li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">FSEC</a></li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">FSIC</a></li>
                                    </ul>
                                    <div class="panel-body tab-content">

                                        <!--Start FSEC TAB-->
                                        <div class="tab-pane active" id="tab-first">

                                            <!--Start Default Table-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">                                
                                                    <ul class="panel-controls">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#View-FSEC-Reg"><i class="fa fa-plus"></i>Create Assessment</button>
                                                        <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#View-FSEC-Reg">Create Assessment<i class="fa fa-plus"></i>-->
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table datatable">
                                                        <thead>
                                                            <tr>
                                                                <th>OPS No</th>
                                                                <th>Applicant No</th>
                                                                <th>Owner Name</th>
                                                                <th>Business Name</th>
                                                                <th>Status</th>
                                                                <th>Date Applied</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
    require 'require/databaseconnection.php';
            $query = $conn->query("select * from `application` where application_type = 'FSEC'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $month = date("m", strtotime($fetch['month']));
                                                            ?>                                      
                                                            <tr>
                                                                <td><?php echo "OPS-". $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></td>
                                                                <td><?php echo $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></td>
                                                                <td><?php echo $fetch['owner_name']?></td>
                                                                <td><?php echo $fetch['business_name']?></td>
                                                                <td><?php  if ($fetch['status'] == 'Complete') echo "<span class='badge badge-success'>Complete</span>";
                if ($fetch['status'] == 'Pending') echo "<span class='badge badge-danger'>".$fetch['status']."</span>";
                if ($fetch['status'] == 'Incomplete') echo "<span class='badge badge-danger'>".$fetch['status']."</span>";
                if ($fetch['status'] == 'Assessed') echo "<span class='badge badge-info'>".$fetch['status']."</span>";
                                                                    ?></td>
                                                                <td><?php echo $fetch['date_applied']?></td>
                                                                <td>
                                                                    <a href="#updatefsec<?php echo $fetch['application_no'];?>" data-target="#updatefsec<?php echo $fetch['application_no'];?>" data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
                                                                </td>
                                                            </tr>
                                                            <?php
            }
            $conn->close();
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END DEFAULT DATATABLE -->

                                        </div>

                                        <!--Start FSIC-->
                                        <div class="tab-pane" id="tab-second">
                                            <!--Start Default Table-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">                                
                                                    <!-- <ul class="panel-controls">
<button class="btn btn-info"><i class="fa fa-plus"></i></button>
</ul>-->
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table datatable">
                                                        <thead>
                                                            <tr>
                                                                <th>OPS No</th>
                                                                <th>Applicant No</th>
                                                                <th>Owner Name</th>
                                                                <th>Business Name</th>
                                                                <th>Status</th>
                                                                <th>Date Applied</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            require 'require/databaseconnection.php';
                                                            $query = $conn->query("select * from `application` where application_type = 'FSIC'") or die(mysqli_error());
                                                            while($fetch = $query->fetch_array()){
                                                                $month = date("m", strtotime($fetch['month']));
                                                            ?>                                      
                                                            <tr>
                                                                <td><?php echo "OPS-". $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></td>
                                                                <td><?php echo $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></td>
                                                                <td><?php echo $fetch['owner_name']?></td>
                                                                <td><?php echo $fetch['business_name']?></td>
                                                                <td><?php  if ($fetch['status'] == 'Complete') echo "<span class='badge badge-success'>Complete</span>";
                                                                if ($fetch['status'] == 'Pending') echo "<span class='badge badge-danger'>".$fetch['status']."</span>";
                                                                if ($fetch['status'] == 'Incomplete') echo "<span class='badge badge-danger'>".$fetch['status']."</span>";
                                                                if ($fetch['status'] == 'Assessed') echo "<span class='badge badge-info'>".$fetch['status']."</span>";
                                                                    ?></td>
                                                                <td><?php echo $fetch['date_applied']?></td>
                                                                <td>
                                                                    <a href="#updatefsic<?php echo $fetch['application_no'];?>" data-target="#updatefsic<?php echo $fetch['application_no'];?>" data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            $conn->close();
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- END DEFAULT DATATABLE -->

                                        </div>                                        

                                    </div>
                                    <div class="panel-footer">                                                                        
                                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                    </div>
                                </div>                                

                            </form>

                        </div>
                    </div>       

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <?php require 'modals/editfsec.php'?>
        <?php require 'modals/editfsic.php'?>
        <!--Start Modal View FSEC-REG-->
        <div class="modal fade" id="View-FSEC-Reg" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Pending List(Assessment)</h3>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class=col-md-4>
                                        <input type="text" class="form-control" id="assessSearch" placeholder="Search">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Application No.</th>
                                            <th>Owner Name</th>
                                            <th>Date Applied</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
    require 'require/databaseconnection.php';
        $query = $conn->query("select * from `application` where assessment_status = 'Unassessed' && status = 'Complete'") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
            $month = date("m", strtotime($fetch['month']));
                                        ?>                                      
                                        <tr>
                                            <td><?php echo $fetch['year']. '-' . $month. '-' .$fetch['application_no']?></td>
                                            <td><?php echo $fetch['owner_name']?></td>
                                            <td><?php echo $fetch['date_applied']?></td>
                                            <td>
                                                <a href="transaction-overviewassess.php?application_no=<?php echo $fetch['application_no']?>" class="btn btn-sm btn-info">Proceed</a>
                                            </td>
                                        </tr>
                                        <?php
        }
        $conn->close();
                                        ?>
                                    </tbody>
                                </table>                      
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                </div>
                            </div>                                                              
                        </div>                                                            
                    </div> 
                </div>
                <!--End Modal View FSEC REG-->

                <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
                <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
                <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
                <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
                <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
                <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="js/plugins.js"></script>
                <script type="text/javascript" src="js/actions.js"></script>
                <script type="text/javascript" src="js/settings.js"></script>
                </body>
            </html>






