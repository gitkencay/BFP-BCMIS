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
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Data Entries</span></a>
                        <ul>
                            <li><a href="DataEntry-EmpProf.html"><span class="fa fa-user"></span> Employee Profiling</a></li>
                            <li><a href="DataEntry-AppReg.html"><span class="fa fa-user"></span> Applicant Registration</a></li>                          
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Transaction</span></a>
                        <ul>
                            <li><a href="Transaction-Assessment.html"> Assessments & Payments</a></li>
                            <li><a href="Transaction-Inspection.html"> Inspection & Compliance</a></li>
                            <li class="active"><a href="Transaction-BuildEval.html">Building Evaluation</a></li>
                            <li><a href="#">Status Monitoring</a></li>
                            <li><a href="Transaction-Scheduling.html">Scheduling</a></li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>                        
                        <ul>
                            <li><a href="Report-Certification.html"><span class=""></span> Certification</a></li>                            
                            <li class="xn-openable">
                               <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Master File Report</span></a>
                               <ul>
                                   <li><a href="Report-Applicant.html"><span class=""></span> Applicant Report</a></li>
                                   <li><a href="Report-Employee.html"><span class=""></span> Employee Report</a></li>
                               </ul> 
                            </li>
                            <li><a href=""><span class=""></span> Distress Call Report</a></li>                            
                            <li><a href=""><span class=""></span> Risk & Fire Frequency</a></li>
                        </ul>
                    </li>                                        
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-warning"></span> <span class="xn-text">Distress Call</span></a>
                        <ul>
                            <li><a href="Distress-FireRespondents.html"><span class="fa fa-align-justify"></span> Fire Stations Respondents</a></li>
                            <li><a href="Distress-SMSandCall.html"><span class="fa fa-th-large"></span> SMS & Call Logs</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Maintenance</span></a>
                        <ul>                            
                            <li><a href="Maintenance-MyAccount.html"><span class="fa fa-align-justify"></span> My Account</a></li>
                            <li><a href="Maintenance-UserManage.html"><span class="fa fa-sort-alpha-desc"></span> User Management</a></li>
                            <li><a href="Maintenance-SystemBackUp.html"><span class="fa fa-download"></span> System Back Up</a></li>                            
                        </ul>
                    </li>                                      
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
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
                    <li><a href="Transaction-BuildEval.html">Building Evaluation</a></li>                    
                    <li class="active"><a href="Transaction-EvalChecklist.html">Evaluation Checklist</a></li>
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
                                            <label for="plan-eval" class="col-sm-5 control-label">Plan Evaluator&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="plan-eval" placeholder="SP01 Robert Robillo, BFP" disabled="">  
                                            </div>
                                        </th>
                                        <th>
                                            <label for="eval-checkid" class="col-sm-5 control-label">Checklist No. &nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="eval-checkid" placeholder="BFP-QWE-ERTY-023-23-2018" disabled="">  
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="own-name" class="col-sm-5 control-label"><br>Owner Name&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="own-name" placeholder="Puatu Pep" disabled="">  
                                            </div>
                                        </th>
                                        <th>
                                            <label for="eval-checkid" class="col-sm-5 control-label"><br>Business Name &nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="eval-checkid" placeholder="PP Company" disabled="">  
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="proj-title" class="col-md-8 control-label"><br>Project Title&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="proj-title">  
                                            </div>
                                        </th>
                                        <th>
                                            <label for="loc-const" class="col-md-8 control-label"><br>Location of Construction&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="loc-const">  
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="occu-class" class="col-md-8 control-label"><br>Occupancy Classification&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="occu-class">  
                                            </div>
                                        </th>
                                        <th>
                                            <label for="date-rec" class="col-md-8 control-label"><br>Date Received&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="date-rec">  
                                            </div>
                                        </th>
                                    </tr>
                                    <!--start of button-->
                                    <tr>
                                        <th>
                                            <label for="means-egress" class="col-md-8 control-label">&nbsp;&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#means-egress"><i class="fa fa-plus"> Means of Egress</i></button>
                                            </div>
                                            <label for="compart-modal" class="col-md-8 control-label">&nbsp;&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#compart-modal"><i class="fa fa-plus"> Compartmentation</i></button>
                                            </div>
                                        </th>
                                        <th>
                                            <label for="walls-id" class="col-md-8 control-label">&nbsp;&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#walls-id"><i class="fa fa-plus"> Walls</i></button>
                                            </div>
                                            <label for="warn-sys" class="col-md-8 control-label">&nbsp;&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="button" class="btn btn-info control-label" data-toggle="modal" data-target="#warn-sys"><i class="fa fa-plus"> Warning Systems</i></button>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="fire-protect" class="col-md-8 control-label">&nbsp;&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fire-protect"><i class="fa fa-plus"> Fire Protection</i></button>
                                            </div>
                                        </th>
                                        <th>
                                            <label for="misc-id" class="col-md-8 control-label">&nbsp;&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="button" class="btn btn-info control-label" data-toggle="modal" data-target="#misc-id"><i class="fa fa-plus"> Miscellaneous</i></button>
                                            </div>
                                        </th>
                                    </tr>
                                    <!--end of button-->
                                    <br>
                                </thead>

                                <!--Start Modal Means of Egress-->
                                <div id="means-egress" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Means of Egress</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide at least two (2) means of egree for each floor and room.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Enclose all stairways and fire escapes with walls having hours of fire resistance with access thru self-closing fire doors.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide (2) two doors as exit ways from all rooms.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide protected/enclosed horizontal exits with self-closing fire doors.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Travel distance to an exit shall not be more than the given meters.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Exit doors shall swing in the direction of exit travel.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;A floor or landing is required not less than the width of the exit door.</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Ramp slopes should have be roughened or with nonslip surface.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-6">
                                                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!--End Modal Means of Egress-->

                                <!--Start Modal Compartmentation-->
                                <div id="compart-modal" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Compartmentation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide fire break up to the roof for ceiling areas</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide smoke partition at enclosed areas of 2,, 083 m2 (22,500 ft2 ) or less with the length of 45.7m (150ft) or less, with self-closing fire doors.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide smoke partition of two (2) hour fire resistance from floor to underside of floor above.</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide stopping for all concealed spaces.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-6">
                                                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!--End Modal Compartmentation-->

                                <!--Start Modal Walls-->
                                <div id="walls-id" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Walls</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide standard fire wall with at least 100 cm (39.38 in) high parapets on all portion of the building on the property line.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Extend exterior masonry walls to form parapets or wings.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide protection of all exterior walls. All exterior walls facing approved alleys which are dead-ended must have a fire resistance of the given hours.</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide automatic fire dampers on wall openings.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-6">
                                                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!--End Modal Walls-->

                                <!--Start Modal Warning Systems-->
                                <div id="warn-sys" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Warning Systems</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide approved emergency alarm bell system on each floor with adequate number of sending stations.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide approved type heat and smoke detection system.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide efficient communication system for warning occupants and calling fire department.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-6">
                                                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!--End Modal Warning Systems-->

                                <!--Start Modal Fire Protection-->
                                <div id="fire-protect" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Fire Protection</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide Fire Service connection with a standard outlet of 64 mm, and 102 mm dry standpipe, and shall located on a street front.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide automatic fire extinguishing system where kitchen equipment is located (Kitchenhood).</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide automatic chemical extinguishing system on all areas where electronic/electrical equipment are located.</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide approved-type automatic fire extinguishing system in accordance with NFPA 13. Approval of system plan is required prior to installation.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-6">
                                                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!--End Modal Fire Protection-->

                                <!--Start Modal Miscellaneous-->
                                <div id="misc-id" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Miscellaneous</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Air conditioning ducts must be provided with approved fire dampers. </label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide fire escape ladder/s.</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide fire escape stair/s.</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide fire protection/suppression during construction.</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide/post "DO NOT USE ELEVATOR IN CASE OF FIRE" sign/s</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="check"><input type="checkbox" class="icheckbox"> &emsp;Provide fire resistive walls between stair and kitchen area.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="col-md-6">
                                                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!--End Modal Fire Protection-->


                            </table>

                            <div class="panel-footer">  
                                     <!-- <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>  -->                                      
                                        <button class="btn btn-success pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
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






