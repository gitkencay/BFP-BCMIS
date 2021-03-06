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
                <div class="page-sidebar">
                    <!-- START X-NAVIGATION -->
                    <ul class="x-navigation">
                        <li class="xn-logo">
                            <a href="index.html"><strong>BFP-BC MIS</strong></a>
                            <a href="#" class="x-navigation-control"></a>
                        </li>              
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/fireman2.png"/>
                            </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">John Doe</div>
                                        <div class="profile-data-title">Customer Relations Officer</div>
                                            </div>
                        </div>
                            <ul id="navSid">                                                                            
                                <li>
                                    <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                                        </li>                    
                                            <li class="xn-openable">
                                                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Master File</span></a>
                                                <ul>
                                                    <li class="active"><a href="DataEntry-EmpProf.html"><span class="fa fa-user"></span> Employee Profiling</a></li>
                                                    <li><a href="DataEntry-AppReg.html"><span class="fa fa-user"></span> Applicant Registration</a></li>                          
                                                </ul>
                                            </li>
                                            <li class="xn-openable">
                                                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Transaction</span></a>
                                                <ul>
                                                    <li><a href="Transaction-Assessment.html"> Assessments & Payments</a></li>
                                                    <li><a href="Transaction-Inspection.html"> Inspection & Compliance</a></li>
                                                    <li><a href="Transaction-BuildEval.html">Building Evaluation</a></li>
                                                    <li><a href="#">Issuance Of Certificates</a></li>
                                                    <li><a href="#">Status Monitoring</a></li>
                                                    <li><a href="#">Scheduling</a></li>                            
                                                </ul>
                                            </li>
                                            <li class="xn-openable">
                                                <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>                        
                                                <ul>
                                                    <li><a href="Report-Certification.html"><span class=""></span> Certification</a></li>                            
                                                    <li><a href="Report-MasterFile.html"><span class=""></span> Master File Record Report</a></li>
                                                    <li><a href="Report-TransactionRecord.html"><span class=""></span> Transaction Record Report</a></li>
                                                    <li><a href="Report-DistressCall.html"><span class=""></span> Distress Call Report</a></li>                            
                                                    <li><a href="Report-RiskandFire.html"><span class=""></span> Risk & Fire Frequency</a></li>
                                                </ul>
                                            </li>                    
                                            <li class="xn-openable">
                                                <a href="#"><span class="fa fa-warning"></span> <span class="xn-text">Distress Call</span></a>
                                                <ul>
                            <li><a href="Distress-FireRespondents.html"><span class="fa fa-align-justify"></span> Fire Stations Respondents</a></li>
                            <li><a href="Distress-SMSandCall.html"><span class="fa fa-th-large"></span> SMS & Call Logs</a></li>
                        </ul>
                                            </li>
                                            <li class="active">
                                                <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Maintenance</span></a>
                                                <ul>                            
                                                    <li><a href="Maintenance-MyAccount.html"><span class="fa fa-align-justify"></span> My Account</a></li>
                                                    <li><a href="Maintenance-UserManage.html"><span class="fa fa-sort-alpha-desc"></span> User Management</a></li>
                                                    <li class="active"><a href="Maintenance-SystemBackUp.html"><span class="fa fa-download"></span> System Back Up</a></li>                            
                                                </ul>
                                            </li>                                       
                            </ul>
                            <!-- END X-NAVIGATION -->
                </div>
                <!-- END PAGE SIDEBAR -->
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
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Maintenance</a></li>                    
                <li class="active"><a href="Maintenance-SystemBackUp.html">System Back Up</a></li>
            </ul>
            <!-- END BREADCRUMB --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
				    <div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
                                <h3 class="panel-title"><strong>History Log - Export and Import Database</strong></h3>
							        <div class="btn-group pull-right">
								        <div class="pull-right">
											<a class="btn btn-info mb-control" data-box="#message-box-info">Export Database</a>
											<button class="btn btn-warning btn-md" data-toggle="modal" data-target="#modal_basic">Import Database</button>
									    </div>
								    </div>
							    </div>
                            </div>

                        <div class="message-box message-box-info animated fadeIn" data-sound="fail" id="message-box-info">
                            <div class="mb-container">
                                <div class="mb-middle">
                                    <div class="mb-title"><span class="fa fa-cloud-download"></span> Export Database</div>
                                        <div class="mb-content">
                                            <p>You are about to download the database of BFP-BC MIS.</p>
                                        </div>
                                    <div class="mb-footer">
                                        <div class="pull-right">
                                            <a href="export/export.php" class="btn btn-danger btn-lg pull-right">Export Anyway</a>
                                            <button class="btn btn-default btn-lg mb-control-close">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><strong>Upload SQL File</strong></h4>
                                    </div>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <h5>Select from files</h5>
                                            <input type="file" name="database">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info" name="import">Upload</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->

        </div>
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
                      $('#dataTables-example-emp').dataTable();
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