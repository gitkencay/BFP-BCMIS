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
                    <li class="active"><a href="Transaction-BuildEval">Building Evaluation</a></li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                     <div class="row">
                        <div class="col-md-12">

                                           <!--Start Default Table-->
                                             <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <ul class="panel-controls">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#buildModal"><i class="fa fa-plus"></i>Evaluation Checklist</button>   
                                                    </ul>                                 
                                                 </div>
                                             </div>
                                                <div class="panel-body">
                                                    <table class="table datatable" id="dataTables-inspection">
                                                        <thead>
                                                            <tr>
                                                                <th>Evaluation Checklist No.</th>
                                                                <th>Evaluator</th>
                                                                <th>Business Name</th>
                                                                <th>Location</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>11-22-33</td>
                                                                <td>Cardo Dalisay</td>
                                                                <td>Kenneth Salon</td>
                                                                <td>Araneta Street</td>
                                                                <td>Approved</td>
                                                                <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>22-33-44</td>
                                                                <td>Cardo Dalisay</td>
                                                                <td>Puatu Bar</td>
                                                                <td>Golden Field</td>
                                                                <td>Disapproved</td>
                                                                <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>33-44-55</td>
                                                                <td>Lito Lapid</td>
                                                                <td>Maximus</td>
                                                                <td>Araneta Street</td>
                                                                <td>Disapproved</td>
                                                                <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11-22-33</td>
                                                                <td>Cardo Dalisay</td>
                                                                <td>Kenneth Salon</td>
                                                                <td>Araneta Street</td>
                                                                <td>Inspection Order</td>
                                                                <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>22-33-44</td>
                                                                <td>Cardo Dalisay</td>
                                                                <td>Puatu Bar</td>
                                                                <td>Golden Field</td>
                                                                <td>Approved</td>
                                                                <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>33-44-55</td>
                                                                <td>Lito Lapid</td>
                                                                <td>Maximus</td>
                                                                <td>Araneta Street</td>
                                                                <td>Approved</td>
                                                                <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END DEFAULT DATATABLE -->

                                        </div>
                                       

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
        <!-- END PAGE CONTAINER -->

        <!--Start MODAL-->
            <div class="modal fade" id="buildModal" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h3 class="modal-title">Pending List(Evaluation Checklist)</h3>
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
                                                                        <th>Date Applied</th>
                                                                        <th>Time-In</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2018-1-1</td>
                                                                        <td>1-2-2018</td>
                                                                        <td>1-3-18/11:30am</td>
                                                                        <td><a href="Transaction-EvalChecklist.html"><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2018-1-1</td>
                                                                        <td>1-2-2018</td>
                                                                        <td>1-3-18/11:30am</td>
                                                                        <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2018-1-1</td>
                                                                        <td>1-2-2018</td>
                                                                        <td>1-3-18/11:30am</td>
                                                                        <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2018-1-1</td>
                                                                        <td>1-2-2018</td>
                                                                        <td>1-3-18/11:30am</td>
                                                                        <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                                                    </tr>
                                                                </tbody>
                                                               </table>                      
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                            </div>
                                                            </div>                                                              
                                                        </div>                                                            
                                                    </div> 
                                                </div>
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


         <script src="assets/js/dataTables/jquery.dataTables.js"></script>
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






