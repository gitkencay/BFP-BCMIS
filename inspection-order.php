
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>

        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active"><strong><mark>Inspection Order and Compliance</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                    <?php
                    require 'require/databaseconnection.php';
                    $query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[application_no]'") or die(mysqli_error());
                    $fetch = $query->fetch_array();
                    $month2 = date("m", strtotime($fetch['month']));

                    $query2 = $conn->query("SELECT * FROM `inspection` order by io_no DESC limit 1") or die(mysqli_error());
                    $fetch2 = $query->fetch_array();

                    $month = date("m");
                    $year = date('Y');
                    $io_no = $fetch2['io_no'] + 1;

                    $today = date("y-d-m");

                    $query3 = $conn->query("SELECT * FROM `inspection_report` order by ir_no DESC limit 1") or die(mysqli_error());
                    $fetch3 = $query->fetch_array();
                    $ir_no = $fetch3['ir_no'] + 1;
                    ?>
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Inspection Order</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Issue Notice</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                                <div class="panel panel-default">
                                                <form method="post" action="actions/addInspection.php" onsubmit="return confirm('Are you sure you want to add this Inspection Information?');"  >
                                                        <div class="panel-body">
                                                        <div class="row">
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">IO No.</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="io_no" value="<?php echo 'IO' . '-' . $year . '-' . $month . '-' . $io_no ?>">
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                                            <div class="col-sm-10">
                                                            <input type="hidden" name="application_number" value="<?php echo $fetch['application_no']?>"/>
                                                                <input type="text" class="form-control" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="bldg-code" class="col-sm-5 control-label">Inspectors</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" name="inspector_name">
                                                            <option value="Select">Select</option>
                                                            <option value="Inspector Dalisay0">Inspector Dalisay</option>
                                                            <option value="Inspector Dionisio">Inspector Dionisio</option>
                                                            <option value="Inspector Henry">Inspector Henry</option>
                                                            </select>
                                                        </div> 
                                                        </div><br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="owner_name" value="<?php echo $fetch['owner_name'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>                                                      
                                                        </div>
                                                        
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Business Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="business_name" value="<?php echo $fetch['business_name'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Establishment Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="establishment_address" value="<?php echo $fetch['establishment_address'] ?>" >
                                                            </div>
                                                        </div> <br><br><br> 

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Date Applied</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="date_applied" value="<?php echo $today ?>" >
                                                            </div>
                                                        </div> <br><br><br>  
                                                        </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_inspection"> <i class="fa fa-plus"></i>Add Schedule</button>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Inspection Report No</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="ir_no" value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' . $ir_no ?>">
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="owner_name" value="<?php echo $fetch['owner_name'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>     

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="owner_address">
                                                            </div>
                                                        </div> <br><br><br>     
                                                        </div>
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Building Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="building_name">
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Building Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="building_address">
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Height of Building</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="bldg_height">
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Lot Size</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="lot_size">
                                                            </div>
                                                        </div> <br><br><br>                                                        
                                                        </div>
                                                        <div class="col-md-2">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Number of Floors</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="number_of_floors">
                                                            </div>
                                                        </div> <br><br><br>  
                                                        </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Bldg_Const"> <i class="fa fa-plus"></i>Add Building Construction</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="col-sm-10">
                                                            <select class="form-control" name="ir_checklist">
                                                            <option value="Select">Select</option>
                                                            <option value="Classification">Classification</option>
                                                            <option value="Exit Details">Exit Details</option>
                                                            <option value="Lightings and Signs">Lightings and Signs</option>
                                                            <option value="Features of Fire Protection">Features of Fire Protection</option>
                                                            <option value="Building Service Equipment">Building Service Equipment</option>
                                                            <option value="Hazardous Areas">Hazardous Areas</option>
                                                            <option value="Operating Features">Operating Features</option>
                                                            </select>
                                                            </div> 
                                                            </div><br><br><br>
                                                        </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="recommend" class="col-md-12 control-label">Recommendation: </label>
                                                        <br>
                                                        <div class="col-md-10">
                                                            <textarea rows="3" cols="60" placeholder="Recommend for Deficiences" name="recommendation"></textarea>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Specify Deficiency</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="deficiency">
                                                            </div>
                                                        </div> <br><br><br> 
                                                        
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                            <label for="bldg-code" class="col-sm-12 control-label">Type of Notice</label>
                                                            <select class="form-control" name="type_of_notice">
                                                            <option value="Select">Select</option>
                                                            <option value="Comply">Comply</option>
                                                            <option value="Correct Violation">Correct Violation</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <hr>
                                                        <button type="submit" class="btn btn-info" name="save_inspection"><span class="fa fa-check"></span>Save</button>
                                                </div>
                                                </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab-second">
                                        
                                                <div class="panel panel-default">
                                                        <div class="panel-body">
                                                        <div class="row">
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Type of Notice</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="type_of_notice" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Amount</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="amount" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="owner_name" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Inspector Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="inspector_name" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Business Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="business_name" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Deficiences</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="deficiency" >
                                                            </div>
                                                        </div> <br><br><br>
                                                        </div>
                                                        
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Date Issued</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="date_issued" >
                                                            </div>
                                                        </div> <br><br><br>
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Air Date</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="air_date" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="application_no" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Inspection Order</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="inspection_order" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Business Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="business_address" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Grace Period</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="grace_period" >
                                                            </div>
                                                        </div> <br><br><br>                                                      

                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button type="submit" class="btn btn-info" name="save_notice"><span class="fa fa-check"></span>Save</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'modals/addBuildingConst.php'?>
            <?php require 'modals/addInspectionSchedule.php'?>
            <?php require 'require/logout.php'?>
        </div>
        
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






