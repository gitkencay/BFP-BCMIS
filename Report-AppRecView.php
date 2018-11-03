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
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Applicant Record Report</a></li>                    
                    <li class="active"><a href="#">Kenneth Cayetano</a></li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap"> 
                    <div class="AppRecOverView">
                        <h2 id="appRec"><label>Applicant No: 2018-2-24</label></h2>
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th><h3><label>Overview</label></h3></th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="app-name" class="col-sm-5 control-label">Owner Name&nbsp;&nbsp;</label>
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
                                            <label for="location" class="col-md-8 control-label"><br>Establishment Address&nbsp;&nbsp;</label>
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
                                        <td>
                                            <label for="cert" class="col-md-8 control-label"><br>UserName&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cert" placeholder="KenCay24218" disabled="">  
                                            </div> 
                                        </td>
                                        <td>
                                            <label for="cert" class="col-md-8 control-label"><br>Date Applied&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cert" placeholder="24/2/2018" disabled="">  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="cert" class="col-md-8 control-label"><br>Purpose&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cert" placeholder="Business Permit" disabled=""> 
                                            </div>
                                        </td>
                                        <td>
                                            <label for="cert" class="col-md-8 control-label"><br>Building Type&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cert" placeholder="Small Business" disabled=""> 
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--<div class="panel-footer">  
                                     <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>                                    
                                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                    </div>
                                -->
                        </div>
                        </div>
                    </div>

                    <div class="appRecTransac">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <label><h3>Transaction</h3></label>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>File Location</th>
                                            <th>Officer Type</th>
                                            <th>Officer Incharge</th>
                                            <th>In</th>
                                            <th>Out</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Applicant Registration</td>
                                            <td>Customer Relations Officer</td>
                                            <td>Puatu Puatu</td>
                                            <td>24/2/18 8:45 AM</td>
                                            <td>24/2/18 9:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Assessment & Payment</td>
                                            <td>Fire Code Assessor</td>
                                            <td>John Rey</td>
                                            <td>24/2/18 9:00 AM</td>
                                            <td>26/2/18 3:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>Inspection Order Form</td>
                                            <td>Customer Relations Officer</td>
                                            <td>Renz Owen</td>
                                            <td>27/2/2018 8:00 AM</td>
                                            <td>27/2/2018 8:05 AM</td>
                                        </tr>
                                        <tr>
                                            <td>After Inspection Report</td>
                                            <td>Inspector</td>
                                            <td>Kenny Mistahverygood</td>
                                            <td>1/3/2018 2:00 PM</td>
                                            <td>1/3/2018 2:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>Certificate Issued</td>
                                            <td>Customer Relations Officer</td>
                                            <td>Arim Torr</td>
                                            <td>1/3/2018 2:00 PM</td>
                                            <td>5/3/2018 3:00 PM</td>
                                        </tr>
                                    </tbody>
                                </table>
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

