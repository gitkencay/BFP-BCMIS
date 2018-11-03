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
                            <li><a href="DataEntry-EmpProf.html"><span class="fa fa-user"></span> Employee Profiling</a></li>
                            <li><a href="DataEntry-AppReg.html"><span class="fa fa-user"></span> Applicant Registration</a></li>                          
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Transaction</span></a>
                        <ul>
                            <li><a href="Transaction-Assessment.html"> Assessments & Payments</a></li>
                            <li class="active"><a href="Transaction-Inspection.html"> Inspection & Compliance</a></li>
                            <li><a href="Transaction-BuildEval.html">Building Evaluation</a></li>
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
                            <li><a href="#"><span class="fa fa-align-justify"></span> My Account</a></li>
                            <li><a href="#"><span class="fa fa-sort-alpha-desc"></span> User Management</a></li>
                            <li><a href="#"><span class="fa fa-download"></span> System Back Up</a></li>                            
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
                    <li class="active"><a href="Transaction-Inspection.html">Inspection Order and Compliance</a></li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                     <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#io-tab" role="tab" data-toggle="tab">Inspection Order</a></li>
                            <li><a href="#air-tab" role="tab" data-toggle="tab">After Inspection Report</a></li>
                            <li><a href="#ntc-tab" role="tab" data-toggle="tab">Issue Notice</a></li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="io-tab">

                                           <!--Start Default Table-->
                                             
                                    <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">IO No.</label>
                                                <div class="col-md-5">                                            
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" disabled="" value="123456789" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">App No.</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" value="123456789" disabled="" />
                                                    </div>            
                                                    
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Inspectors</label>
                                                             <div class="col-md-4 col-xs-12"> 
                                                                    <select class="form-control" id="brgy-no">
                                                                        <option value="0">Select</option>
                                                                        <option value="0">Inspector Dalisay</option>
                                                                        <option value="1">Inspector Dionisio</option>
                                                                        <option value="1">Inspector Henry</option>
                                                                    </select>
                                                         </div>
                                                         </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Owner Name:</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" value="Kenneth Cayetano" disabled="" />
                                                    </div>            
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Business Name:</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" value="HyperX Industries" disabled="" />
                                                    </div>            
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Est. Address:</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" value="Brgy. 35 Bacolod City" disabled="" />
                                                    </div>            
                                                    
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_inspection"><i class="fa fa-plus"></i>Add Schedule</button>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date:</label>
                                                <div class="col-md-9">
                                                   <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" value="12-24-2018" disabled="" />
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                     <div class="panel-footer">  
                                      <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>                                       
                                        <button class="btn btn-info pull-right">Proceed to After Inspection Report
                                        </button>
                                    </div>
                                   </div>

                                     <!--second tab-->

                                     <div class="tab-pane" id="air-tab">
                                        

                                    <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Inspection Report No. :</label>
                                                <div class="col-md-6 col-md-12">        
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="" value="123456789" />
                                                    </div>                                            
                                                    
                                            </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Inspection Order No. :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="" value="123456789" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Application No. :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="" value="123456789" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Owner Name :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="" value="00000000" />
                                                    </div>   
                                                </div>                                                
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-4 control-label">Address :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="" value="00000000" />
                                                    </div>   
                                                </div>                                                
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Bldg_Const"><i class="fa fa-plus"></i> Add Building Construction</button>
                                                </div>
                                                <div class="col-md-6">
                                                        <select class="form-control" id="bldg-code">
                                                                <option value="0">Select</option>
                                                                <option value="1">Classification</option>
                                                                <option value="2">Exit Details</option>
                                                                <option value="3">Lightings and Signs</option>
                                                                <option value="4">Features of Fire Protection</option>
                                                                <option value="5">Building Service Equipment</option>
                                                                <option value="6">Hazardous Areas</option>
                                                                <option value="7">Operating Features</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="recommend" class="col-md-3 control-label">Recommendation: </label>
                                                    <br>                                                    
                                                    <div class="col-md-10">
                                                        <textarea rows="3" cols="80" placeholder="Recommend for Deficiences"></textarea>
                                                    </div>
                                            </div>
                                            
                                            
                                            <!--Start Modal Building Construction-->
                                            <div id="Bldg_Const" class="modal fade" tabindex="-1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title">Building Construction</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="beams" class="col-md-3 control-label">Beams</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="beams_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="columns" class="col-md-3 control-label">Columns</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="columns_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="flooring" class="col-md-3 control-label">Flooring</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="floor_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="ex_walls" class="col-md-3 control-label">Exterior Walls</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="exterior_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="cor_walls" class="col-md-3 control-label">Corridor Walls</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="corridor_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="room_part" class="col-md-3 control-label">Room Partitions</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="partition_id">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="main_stair" class="col-md-3 control-label">Main Stair</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="stair_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="windows" class="col-md-3 control-label">Windows</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="windows_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="ceiling" class="col-md-3 control-label">Ceiling</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="ceiling_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="main_door" class="col-md-3 control-label">Main Door</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="door_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="trusses" class="col-md-3 control-label">Trusses</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="trusses_id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="roof" class="col-md-3 control-label">Roof</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="roof_id">
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
                                         <!--End Modal Building Construction-->
                                         
                                    </div>


                                        <!--second row-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Building Name :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                    </div>   
                                                </div>                                                
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Address :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                    </div>   
                                                </div>                                                
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Height of Bldg :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                    </div>   
                                                </div>                                                
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-4 control-label">Lot Size :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="" value="00000000" />
                                                    </div>   
                                                </div>                                                
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-4 control-label">Number of Floors :</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" disabled="" value="00000000" />
                                                    </div>   
                                                </div>                                                
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input id="specify_id"type="text" class="form-control" placeholder="Specify Deficiency"/>
                                                </div>
                                                <button type="button" class="btn btn-info" data-target="#New_Defects"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                     <div class="panel-footer">
                                        <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-11">
                                                <select class="btn btn-info pull-right"class="form-control" id="type-notice">
                                                    <option>Issue Notice</option>
                                                    <option value="1">Comply</option>
                                                    <option value="2">Correct Violation</option>
                                                </select>
                                            <br>
                                            </div>
                                            <button class="btn btn-success pull-right">Save <span class="fa fa-floppy-o fa-right"></span></button>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="ntc-tab">
                                           <div class="panel-body">
                                               <div class="row">
                                                   <div class="form-group">
                                                        <label for="type-notice" class="col-md-2 control-label">Type of Notice: &nbsp;</label>
                                                        <div class="col-md-2"><select class="form-control" id="type-notice" disabled="">
                                                            <option value="1">Comply</option>
                                                            <option value="2">Correct Violation</option>
                                                        </select>
                                                        </div>
                                                        <label for="date-issue" class="col-md-2 control-label">Date Issued: </label>
                                                        <div class="col-md-2">
                                                            <input type="date" class="form-control" id="date-issue">
                                                        </div>
                                                   </div>
                                               </div>
                                               <br>
                                               <div class="row">
                                                   <div class="form-group">
                                                       <label for="amt-def" class="col-md-2 control-label">Amount: &nbsp;</label>
                                                       <div class="col-md-2">
                                                           <input type="text" class="form-control" disabled="" id="amt-def" value="0.00">
                                                       </div>
                                                       <label for="air-date" class="col-md-2 control-label">AIR Date </label>
                                                       <div class="col-md-2">
                                                           <input type="text" class="form-control" id="air-date" disabled="" placeholder="12-12-2018">
                                                       </div>
                                                   </div>
                                               </div>
                                               <br> 
                                               <div class="row">
                                                    <div class="form-group">
                                                         <label for="own-name" class="col-md-2 control-label">Owner Name: &nbsp;</label>
                                                         <div class="col-md-2">
                                                            <input type="text" class="form-control" id="own-name" disabled="" placeholder="Puatu Pep">
                                                         </div>
                                                         <label for="app-no" class="col-md-2 control-label">Application No. : </label>
                                                         <div class="col-md-2">
                                                             <input type="text" class="form-control" id="app-no" disabled="" placeholder="00000000000">
                                                         </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="ins-name" class="col-md-2 control-label">Inspector Name: &nbsp;</label>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" id="ins-name" disabled="" placeholder="Inspector poppy">
                                                        </div>
                                                        <label for="ins-no" class="col-md-2 control-label">Inspection Order: </label>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" id="ins-no" disabled="" placeholder="00000000000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="bus-name" class="col-md-2 control-label">Business Name: &nbsp;</label>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" id="bus-name" disabled="" placeholder="PP Company">
                                                        </div>
                                                        <label for="bus-add" class="col-md-2 control-label">Business Address: </label>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" id="bus-add" disabled="" placeholder="DP Street, City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="spec-def" class="col-md-2 control-label">Deficiencies: &nbsp;</label>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" id="spec-def" disabled="" placeholder="Horizontal Exit">
                                                        </div>
                                                        <label for="grace-per" class="col-md-2 control-label">Grace Period: </label>
                                                        <div class="col-md-2">
                                                            <input type="date" class="form-control" id="grace-per">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="spec-def" disabled="" placeholder="Vertical Exit">
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-2">
                                                        <input type="date" class="form-control" id="grace-per">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-footer">
                                                <div class="col-sm-6">
                                                    <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-success pull-right">Save <span class="fa fa-floppy-o fa-right"></span></button>
                                                </div>
                                            </div>
                                    </div>

                                    </div>
                                </div>
                            </form>

                             
                    
                 
                 
                        
        <!-- END PAGE CONTAINER -->

        <!--Start MODAL-->
            <!--Start Modal Add Schedule-->
                <div class="modal fade" id="add_inspection" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h3 class="modal-title">Inspection Schedule</h3>
                                                    </div>

                                                    <div class="modal-body">
                                                     <div class="row">
                                                       <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class=col-md-4>
                                                            <input type="text" class="form-control" id="inspectSearch" placeholder="Search">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Inspector :</label>
                                                            <div class="col-md-6">                                            
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" disabled="" placeholder="Cardo Dalisay" />
                                                            </div>   
                                                            </div>                                                
                                                         </div>

                                                         <div class="cold-md-4">
                                                         <div class="form-group">
                                                            <label for="date" class="col-sm-4 control-label">Date of Inspection</label>
                                                            <div class="col-sm-4">
                                                                <input type="date" class="form-control" id="date" name="date">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Time of Inspection :</label>
                                                            <div class="col-md-4">                                            
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="--:--:--" />
                                                            </div>   
                                                            </div>                                                
                                                         </div>
                                                     </div>
                                                               <table class="table table-hover">
                                                                <br>
                                                                <br>
                                                                <h3>List of Inspectors Schedule</h3>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Time</th>
                                                                        <th>Business Name</th>
                                                                        <th>Location</th>
                                                                        <th>Expected Duration</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>21/9/2018</td>
                                                                        <td>9:00 AM</td>
                                                                        <td>Joey Express</td>
                                                                        <td>Regent, Brgy Alijis</td>
                                                                        <td>9:00 AM - 12:00 PM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>21/10/2018</td>
                                                                        <td>9:00 AM</td>
                                                                        <td>Puat Kalan-an</td>
                                                                        <td>Regent, Brgy Alijis</td>
                                                                        <td>9:00 AM - 12:00 PM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>21/10/2018</td>
                                                                        <td>2:00 PM</td>
                                                                        <td>Gamotin Kapehan</td>
                                                                        <td>Magsungay, Brgy Singcang</td>
                                                                        <td>2:00 PM - 5:00 PM</td>
                                                                    </tr>
                                                                </tbody>
                                                               </table>                      
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times"></span>Save</button>
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-check"></span>Close</button>
                                                            </div>
                                                            </div>                                                              
                                                        </div>                                                            
                                                    </div> 
                                                </div>
            <!--End modal Add Schedule-->
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






