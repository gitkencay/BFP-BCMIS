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
                    <li><a href="#">Data Entry</a></li>                    
                    <li class="active"><a href="DataEntry-AppReg.html">Applicant Registration</a></li>
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
                                        <div class="tab-pane active" id="tab-first">

                                            <!--Start Default Table-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">                                
                                                    <ul class="panel-controls">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#FSEC-Reg"><i class="fa fa-plus"></i>Add FSEC</button>
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table datatable" id="dataTables-example">
                                                        <thead>
                                                            <tr>
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
            $query = $conn->query("select * from `fsec_application`") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $month = date("m", strtotime($fetch['month']));
                                                            ?>                                      
                                                            <tr>
                                                                <td><?php echo $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></td>
                                                                <td><?php echo $fetch['owner_name']?></td>
                                                                <td><?php echo $fetch['business_name']?></td>
                                                                <td><?php echo $fetch['status']?></td>
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
                                        <div class="tab-pane" id="tab-second">
                                            <!--Start Default Table-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">                                
                                                    <ul class="panel-controls">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#FSIC-Reg"><i class="fa fa-plus"></i>Add FSIC</button>

                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table datatable" id="dataTables-example">
                                                        <thead>
                                                            <tr>
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
                                                            $query = $conn->query("select * from `fsic_application`") or die(mysqli_error());
                                                            while($fetch = $query->fetch_array()){
                                                                $month = date("m", strtotime($fetch['month']));
                                                            ?>                                      
                                                            <tr>
                                                                <td><?php echo $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></td>
                                                                <td><?php echo $fetch['owner_name']?></td>
                                                                <td><?php echo $fetch['business_name']?></td>
                                                                <td><?php echo $fetch['status']?></td>
                                                                <td><?php echo $fetch['date_applied']?></td>
                                                                <td>
                                                                    <a href="#updatefsic <?php echo $fetch['application_no'];?>" data-target="#updatefsic<?php echo $fetch['application_no'];?>" data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
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
                                        <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>                                                                         
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
        <!-- END PAGE CONTAINER -->

        <!--Start MODAL-->

        <!--Start Modal Message add FSEC-REG-->

        <!--End Modal Message FSEC-REG-->


        <?php require 'modals/addfsec.php'?>
        <?php require 'modals/editfsec.php'?>
        <?php require 'modals/addfsic.php'?> 
        <?php require 'modals/editfsic.php'?>
        <!--Start Modal Message FSIC-REG-->

        <!--End Modal Message FSIC-REG-->

        <!--Start Modal View FSEC-REG-->
        <div class="modal fade" id="View-FSEC-Reg" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">FSEC Applicant</h3>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="app-no" class="col-sm-5 control-label">Application No.&nbsp;&nbsp;&nbsp;</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="app-no" placeholder="2018-01-01" disabled="">
                                    </div>

                                    <div class="col-sm-1">
                                        <input type="checkbox" id="chkAssociation" onclick="enableTextBox();" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="app-name" class="col-sm-5 control-label">Applicant Name&nbsp;&nbsp;</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="app-nme" placeholder="Kenneth Cayetano" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="busi-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;&nbsp;</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="busi-nme" placeholder="Kenneth Salon" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="estab-add" class="col-sm-7 control-label">Establishment Address&emsp;&nbsp;</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="estab-add" placeholder="Prk 4 Magsungay" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bldg-code" class="col-sm-5 control-label">Building Type&emsp;&nbsp;&nbsp;</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="estab-add" placeholder="Small-Business" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="brgy-no" class="col-sm-3 control-label">&nbsp;Barangay</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="estab-add" placeholder="Brgy Singcang Airport" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date" class="col-sm-4 control-label">Date Applied</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="date" name="date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user-id" class="col-sm-3 control-label">&nbsp;Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user-id" placeholder="kencay1811" disabled="">
                                    </div>                                                                                            
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">&nbsp;Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user-id" placeholder="8080" disabled="">
                                    </div>                                                                                            
                                </div>
                                <div class="form-group">
                                    <label for="owner-name" class="col-sm-5 control-label">Owner Name&emsp;&nbsp;&nbsp;&nbsp;</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="owner-name" name="owner-name" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="floor-number" class="col-sm-6 control-label">Number of Floors&emsp;&nbsp;&nbsp;&nbsp;</label>
                                    <label for="lot-size" class="col-sm-3 control-label">Lot Size&nbsp;&nbsp;</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="floor-number" name="floor-number" placeholder="4" disabled="">
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="lot-size" name="lot-size" placeholder="500sqm" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-12 control-label"><br>Initial Requirements</label>
                                    <div class="col-sm-12">
                                        <label><input type="checkbox" value="" checked disabled>&nbsp;Endorsement from building Official</label>
                                        <label><input type="checkbox" value="" checked disabled>&nbsp;Set of Building Plans (3)</label>
                                        <label><input type="checkbox" value="" checked disabled>&nbsp;Bill of Materials and Cost Estimate (1)</label>
                                        <label><input type="checkbox" value="" checked disabled>&nbsp;FALAR-1 (3)</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">&nbsp;Status</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="lot-size" name="lot-size" placeholder="Complete" disabled="">                                                                                                </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <SCRIPT LANGUAGE="JavaScript">
                        function enableTextBox()
                        {
                            if (document.getElementById("chkAssociation").checked == true)
                                document.getElementById("owner-name").disabled = false;
                            else
                                document.getElementById("owner-name").disabled = true;

                        }
                        </script>
                    <div class="modal-footer">
                        <div class="col-sm-6">
                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                        </div> 
                        <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Edit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                    </div>
                </div>                                                              
            </div>                                                            
        </div> 
        <!--End Modal View FSEC REG-->


        <!--End MODAL-->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>


        <!--<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>-->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>

        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->

        <!-- END SCRIPTS -->         
    </body>
</html>






