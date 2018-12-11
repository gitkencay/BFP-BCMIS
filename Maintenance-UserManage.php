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
                                                    <li class="active"><a href="Maintenance-UserManage.html"><span class="fa fa-sort-alpha-desc"></span> User Management</a></li>
                                                    <li><a href="Maintenance-SystemBackUp.html"><span class="fa fa-download"></span> System Back Up</a></li>                            
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
                <li class="active"><a href="Maintenance-UserManage.html">User Management</a></li>
            </ul>
            <!-- END BREADCRUMB --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
            
                    <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <div class="panel panel-default tabs">                            
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="active"><a href="#tab-apply" role="tab" data-toggle="tab">Applicant</a></li>
                                            <li><a href="#tab-employ" role="tab" data-toggle="tab">Employee</a></li>
                                        </ul>
                                        <div class="panel-body tab-content">
                                            <div class="tab-pane active" id="tab-apply">
    
                                               <!--Start Default Table-->
                                                 <div class="panel panel-default">
                                                    
                                                    <div class="panel-body">
                                                        <table class="table datatable" id="dataTables-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Applicant No</th>
                                                                    <th>Owner Name</th>
                                                                    <th>Username</th>
                                                                    <th>Password</th>
                                                                    <th>Last Login</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2018-01-01</td>
                                                                    <td>Kenneth Cayetano</td>
                                                                    <td>kenken12</td>
                                                                    <td>********</td>
                                                                    <td>August 24, 2018</td>
                                                                    <td><span class="badge badge-info">Active</span></td>
                                                                    <td align="center"><button type="button" data-toggle="modal" class="btn btn-success" data-target="#Edit-Apply">Edit</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-01-01</td>
                                                                    <td>Kenneth Cayetano</td>
                                                                    <td>kenken12</td>
                                                                    <td>********</td>
                                                                    <td>August 24, 2018</td>
                                                                    <td><span class="badge badge-info">Active</span></td>
                                                                    <td align="center"><button type="button" data-toggle="modal" class="btn btn-success" data-target="#Edit-Apply">Edit</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-01-021</td>
                                                                    <td>Puat Puat</td>
                                                                    <td>pp2018</td>
                                                                    <td>********</td>
                                                                    <td>July 24, 2018</td>
                                                                    <td><span class="badge badge-danger">Inactive</span></td>
                                                                    <td align="center"><button type="button" data-toggle="modal" class="btn btn-success" data-target="#Edit-Apply">Edit</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-01-01</td>
                                                                    <td>Puat Puat</td>
                                                                    <td>pp2018</td>
                                                                    <td>********</td>
                                                                    <td>July 24, 2018</td>
                                                                    <td><span class="badge badge-danger">Inactive</span></td>
                                                                    <td align="center"><button type="button" data-toggle="modal" class="btn btn-success" data-target="#Edit-Apply">Edit</button></td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            <!--Start modal edit applicant-->
                                             <div id="Edit-Apply" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Edit Applicant</h4>
                                                            </div>
       
                                                            <div class="modal-body">
                                                               <div class="row">
                                                                   <div class="col-md-12">
                                                                       <div class="form-group">
                                                                               <label for="officer-type" class="col-sm-2 control-label">Applicant No.</label>
                                                                               <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" id="2018-04-024" value="2018-01-01" disabled="">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                                <label for="officer-type" class="col-sm-2 control-label">Owner Name</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" id="2018-04-024" value="Kenneth Cayetano">
                                                                                </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Username</label>
                                                                               <div class="col-sm-8">
                                                                                   <input type="text" class="form-control" id="officer" value="kenken12">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Password</label>
                                                                               <div class="col-sm-8">
                                                                                   <input type="text" class="form-control" id="officer" disabled="" value="********">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Last Login</label>
                                                                               <div class="col-sm-8">
                                                                                   <input type="text" class="form-control" id="officer" disabled="" value="August 24, 2018">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Status</label>
                                                                               <div class="col-sm-8">
                                                                                <select class="form-control" id="firestation">
                                                                                    <option value="0">Select</option>
                                                                                    <option value="0">Active</option>
                                                                                    <option value="1">Inactive</option>
                                                                                </select>
                                                                               </div>
                                                                       </div>
                                                                </div>
                                                            </div>
                                                           </div>
                                                            <div class="modal-footer">
                                                                   <div class="col-sm-6">
                                                                           <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                                   </div>
                                                               <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                               <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                                   </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <!--End modal edit applicant-->
                                                <!-- END DEFAULT DATATABLE -->
    
                                            </div>
                                            <div class="tab-pane" id="tab-employ">
                                                 <!--Start Default Table-->
                                                <div class="panel panel-default">
                                                    
                                                    <div class="panel-body">
                                                        <table class="table datatable" id="dataTables-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Officer ID</th>
                                                                    <th>Officer Name</th>
                                                                    <th>Username</th>
                                                                    <th>Password</th>
                                                                    <th>Last Login</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2018-04-024</td>
                                                                    <td>Lito Lit</td>
                                                                    <td>LLG2017</td>
                                                                    <td>********</td>
                                                                    <td>September 4, 2018</td>
                                                                    <td><span class="badge badge-info">Active</span></td>
                                                                    <td align="center"><button type="button" data-toggle="modal" class="btn btn-success" data-target="#Edit-Employee">Edit</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-06-04</td>
                                                                    <td>Peer Poe</td>
                                                                    <td>PeerSeven12</td>
                                                                    <td>********</td>
                                                                    <td>July 30, 2018</td>
                                                                    <td><span class="badge badge-info">Active</span></td>
                                                                    <td align="center"><button class="btn btn-success">Edit</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-04-024</td>
                                                                    <td>Lito Lit</td>
                                                                    <td>LLG2017</td>
                                                                    <td>********</td>
                                                                    <td>September 4, 2018</td>
                                                                    <td><span class="badge badge-danger">Inactive</span></td>
                                                                    <td align="center"><button class="btn btn-success">Edit</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-06-04</td>
                                                                    <td>Peer Poe</td>
                                                                    <td>PeerSeven12</td>
                                                                    <td>********</td>
                                                                    <td>July 30, 2018</td>
                                                                    <td><span class="badge badge-danger">Inactive</span></td>
                                                                    <td align="center"><button class="btn btn-success">Edit</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                             <!--Start modal edit employee-->
                                             <div id="Edit-Employee" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Edit Employee</h4>
                                                            </div>
       
                                                            <div class="modal-body">
                                                               <div class="row">
                                                                   <div class="col-md-12">
                                                                       <div class="form-group">
                                                                               <label for="officer-type" class="col-sm-2 control-label">Officer ID</label>
                                                                               <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" id="2018-04-024" value="2018-04-024" disabled="">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                                <label for="officer-type" class="col-sm-2 control-label">Officer Name</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" id="2018-04-024" value="Lito Lit">
                                                                                </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Username</label>
                                                                               <div class="col-sm-8">
                                                                                   <input type="text" class="form-control" id="officer" value="LLG2017">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Password</label>
                                                                               <div class="col-sm-8">
                                                                                   <input type="text" class="form-control" id="officer" disabled="" value="********">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Last Login/label>
                                                                               <div class="col-sm-8">
                                                                                   <input type="text" class="form-control" id="officer" disabled="" value="	September 4, 2018">
                                                                               </div>
                                                                       </div>
                                                                       <div class="form-group">
                                                                               <label for="officer" class="col-sm-2 control-label">Status</label>
                                                                               <div class="col-sm-8">
                                                                                <select class="form-control" id="firestation">
                                                                                    <option value="0">Select</option>
                                                                                    <option value="0">Active</option>
                                                                                    <option value="1">Inactive</option>
                                                                                </select>
                                                                               </div>
                                                                       </div>
                                                                </div>
                                                            </div>
                                                           </div>
                                                            <div class="modal-footer">
                                                                   <div class="col-sm-6">
                                                                           <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                                   </div>
                                                               <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                               <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                                   </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <!--End modal edit employee-->
                                                </div>
                                                <!-- END DEFAULT DATATABLE -->
    
                                            </div>                                        
                                            
                                        </div>
                                        
                                    </div>                                
    
                                </form>
    
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