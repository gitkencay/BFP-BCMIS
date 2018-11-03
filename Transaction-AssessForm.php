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
                    <div class="AssessForm">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <label for="app-name" class="col-sm-5 control-label">Applicant Name&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="app-nme" placeholder="Kenneth Cayetano" disabled="">  
                                            </div>
                                        </th>
                                        <th>
                                            <label for="bus-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="bus-name" placeholder="Kenneth Salon" disabled="">  
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="location" class="col-md-8 control-label"><br>Location&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="location" placeholder="Magsungay, Brgy. Singcang Airport" disabled="">  
                                            </div>
                                        </th>
                                        <th>
                                            <label for="cert" class="col-md-8 control-label"><br>Certificate Applying For&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cert" placeholder="FSIC" disabled="">  
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><h4><br>Applicable Fees</h4></th>
                                        <th><h4><br>Amount</h4></th>
                                    </tr>
                                    <tr>
                                        <td><label>Fire Code Construction Tax</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Fire Code Reality Tax</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Fire Code Premium Tax</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Fire Code Sales Tax</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Fire Code Proceeds Tax</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Fire Safety Inspection Fee</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Storage Clearance</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Conveyance Clearance</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Installation Clearance</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Other Clearance Fee</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="amt" placeholder="Enter Amount">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Total Amount of Fire Code Fees</label></td>
                                        <td>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="totalamt" placeholder="Total Amount" disabled="">  
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="panel-footer">  
                                     <!-- <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>  -->                                     
                                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
        <!-- END PAGE CONTAINER -->

        <!--Start MODAL-->

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






