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
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
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
                    <a href="index.html">
                        <strong>BFP-BC MIS</strong>
                    </a>
                    <a href="#" class="x-navigation-control"></a>
                </li>

                <div class="profile">
                    <div class="profile-image">
                        <img src="img/fireman2.png" />
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">John Doe</div>
                        <div class="profile-data-title">Customer Relations Officer</div>
                    </div>
                </div>
                <ul id="navSid">
                    <li>
                        <a href="index.html">
                            <span class="fa fa-desktop"></span>
                            <span class="xn-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-files-o"></span>
                            <span class="xn-text">Data Entries</span>
                        </a>
                        <ul>
                            <li>
                                <a href="DataEntry-EmpProf.html">
                                    <span class="fa fa-user"></span> Employee Profiling</a>
                            </li>
                            <li>
                                <a href="DataEntry-AppReg.html">
                                    <span class="fa fa-user"></span> Applicant Registration</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#">
                            <span class="fa fa-file-text-o"></span>
                            <span class="xn-text">Transaction</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Transaction-Assessment.html"> Assessments & Payments</a>
                            </li>
                            <li>
                                <a href="Transaction-Inspection.html"> Inspection & Compliance</a>
                            </li>
                            <li class="active">
                                <a href="Transaction-BuildEval.html">Building Evaluation</a>
                            </li>
                            <li>
                                <a href="#">Status Monitoring</a>
                            </li>
                            <li>
                                <a href="Transaction-Scheduling.html">Scheduling</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-bar-chart-o"></span>
                            <span class="xn-text">Reports</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Report-Certification.html">
                                    <span class=""></span> Certification</a>
                            </li>
                            <li class="xn-openable">
                                <a href="#">
                                    <span class="fa fa-bar-chart-o"></span>
                                    <span class="xn-text">Master File Report</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="Report-Applicant.html">
                                            <span class=""></span> Applicant Report</a>
                                    </li>
                                    <li>
                                        <a href="Report-Employee.html">
                                            <span class=""></span> Employee Report</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <span class=""></span> Distress Call Report</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class=""></span> Risk & Fire Frequency</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-warning"></span>
                            <span class="xn-text">Distress Call</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Distress-FireRespondents.html">
                                    <span class="fa fa-align-justify"></span> Fire Stations Respondents</a>
                            </li>
                            <li>
                                <a href="Distress-SMSandCall.html">
                                    <span class="fa fa-th-large"></span> SMS & Call Logs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-cogs"></span>
                            <span class="xn-text">Maintenance</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Maintenance-MyAccount.html">
                                    <span class="fa fa-align-justify"></span> My Account</a>
                            </li>
                            <li>
                                <a href="Maintenance-UserManage.html">
                                    <span class="fa fa-sort-alpha-desc"></span> User Management</a>
                            </li>
                            <li>
                                <a href="Maintenance-SystemBackUp.html">
                                    <span class="fa fa-download"></span> System Back Up</a>
                            </li>
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
                    <a href="pages-login.html" class="mb-control" data-box="#mb-signout">
                        <span class="glyphicon glyphicon-off"></span>
                    </a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Transaction</a>
                </li>
                <li>
                    <a href="Transaction-BuildEval.html">Building Evaluation</a>
                </li>
                <li class="active">
                    <a href="Transaction-EvalChecklist.html">Evaluation Checklist</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="AssessForm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form method="post" action="actions/editEvalChecklist.php" onsubmit="return confirm('Are you sure you want to edit this Evaluation Checklist?');"  >
                            <table>
                                <thead>
                                <?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `evaluation_checklist` WHERE `checklist_no` = '$_GET[checklist_no]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$month = date("m", strtotime($fetch['month']));
$checklist_no = $fetch['checklist_no'];
?>

                                            <tr>
                                            <th>
                                                <label for="plan-eval" class="col-sm-5 control-label">Plan Evaluator&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                <input type="hidden" id="checklist_no" name="checklist_no"  value="<?php echo $fetch['checklist_no']?>"  />
                                                    <input type="text" class="form-control" required id="plan_evaluator" name="plan_evaluator" value="<?php echo $fetch['plan_evaluator']?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="eval-checkid" class="col-sm-5 control-label">Checklist No. &nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="checklist_no" name="checklist_no" value="<?php echo 'ECN' . '-' .$fetch['year'] . '-' .$month . '-' . $checklist_no ?>">
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="own-name" class="col-sm-5 control-label">
                                                    <br>Owner Name&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="owner_name" name="owner_name" readonly value="<?php echo $fetch['owner_name'] ?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="eval-checkid" class="col-sm-5 control-label">
                                                    <br>Business Name &nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="business_name" name="business_name" readonly value="<?php echo $fetch['business_name'] ?>">
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="proj-title" class="col-md-8 control-label">
                                                    <br>Project Title&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" required id="project_title" name="project_title" value="<?php echo $fetch['project_title']?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="loc-const" class="col-md-8 control-label">
                                                    <br>Location of Construction&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" required id="location" name="location"  value="<?php echo $fetch['location']?>">
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="occu-class" class="col-md-8 control-label">
                                                    <br>Occupancy Classification&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" required id="occupancy_classification" name="occupancy_classification"  value="<?php echo $fetch['occupancy_classification']?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="date-rec" class="col-md-8 control-label">
                                                    <br>Date Received&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control datepicker" required id="date_received" name="date_received" value="<?php echo $fetch['date_received']?>"> 
                                                </div>
                                            </th>
                                        </tr>
                                </thead>
                            </table>
                            <br>
                            <br>
                            <br>
                            <h3>
                                <label>Building Evaluation Checklist</label>
                            </h3>
                            <br>

                            <!--Row accordion starts-->
                            <div class="row">

                                <div class="col-md-5">
                                    <!-- START ACCORDION -->
                                    <div class="panel-group accordion">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#means_egress_acddg">
                                                        Means of Egress
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body panel-body" id="means_egress_acddg">
                                            <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$means_of_egrees = $fetch['means_of_egrees'];
$check = explode(",", $means_of_egrees);
?>

                                                    <label><input type="checkbox" class="icheckbox" value="Means_Egrees_Req_1" name="means_of_egrees[]"
                                                    <?php
if (in_array("Means_Egrees_Req_1", $check)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide fire break up to the roof for ceiling areas </label> <br>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                        <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_2" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_2", $check)) {
    echo "checked";
}
?>                                                             >&nbsp;Provide smoke partition at enclosed areas of 2083
                                                                m2 (22,500 ft2 ) or less with the length of 45.7m (150ft)
                                                                or less, with self-closing fire doors.
                                                            </label> <br>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_3" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_3", $check)) {
    echo "checked";
}
?>                                                        >&nbsp;Provide smoke partition of two (2) hour fire resistance
                                                                from floor to underside of floor above.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_4" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_4", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Provide stopping for all concealed spaces.
                                                            </label>
                                                            <?php
$means_of_egrees = $fetch['means_of_egrees'];
$check = explode(",", $means_of_egrees);
?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#compart_accdg">
                                                        Compartmentation
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="compart_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$compartmentation = $fetch['compartmentation'];
$check2 = explode(",", $compartmentation);
?>
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_1" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_1", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide fire break up to the roof for ceiling areas
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_2" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_2", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide smoke partition at enclosed areas of 2,, 083 m2 (22,500 ft2 ) or less with the length of 45.7m (150ft) or less, with self-closing fire doors.
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_3" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_3", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide smoke partition of two (2) hour fire resistance from floor to underside of floor above.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_4" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_4", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide stopping for all concealed spaces.
                                                        </label>
                                                        <?php
$compartmentation = $fetch['compartmentation'];
$check2 = explode(",", $compartmentation);
?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#walls_accdg">
                                                        Walls
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="walls_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$walls = $fetch['walls'];
$check3 = explode(",", $walls);
?>
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_1" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_1", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide fire break up to the roof for ceiling areas.
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_2" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_2", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide smoke partition at enclosed areas of 2,, 083 m2 (22,500 ft2 ) or less with the length of 45.7m (150ft) or less, with self-closing fire doors.
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_3" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_3", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide smoke partition of two (2) hour fire resistance from floor to underside of floor above.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_4" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_4", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide stopping for all concealed spaces.
                                                        </label>
                                                        <?php
$walls = $fetch['walls'];
$check3 = explode(",", $walls);
?>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END ACCORDION -->
                                </div>

                                <div class="col-md-5">

                                    <!-- START ACCORDION -->
                                    <div class="panel-group accordion accordion-dc">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#warning_accdg">
                                                        Warning Systems
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body panel-body" id="warning_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$warning_systems = $fetch['warning_systems'];
$check4 = explode(",", $warning_systems);
?>
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_1" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_1", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide fire break up to the roof for ceiling areas.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_2" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_2", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide smoke partition at enclosed areas of 2,, 083 m2 (22,500 ft2 ) or less with the length of 45.7m (150ft) or less, with self-closing fire doors.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_3" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_3", $check4)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide smoke partition of two (2) hour fire resistance from floor to underside of floor above.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_5" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_5", $check4)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide stopping for all concealed spaces.
                                                    </label>
                                                    <?php
$warning_systems = $fetch['warning_systems'];
$check4 = explode(",", $warning_systems);
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#FirePro_accdg">
                                                        Fire Protection
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="FirePro_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$fire_protection = $fetch['fire_protection'];
$check5 = explode(",", $fire_protection);
?>
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_1" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_1", $check5)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide fire break up to the roof for ceiling areas.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_2" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_2", $check5)) {
    echo "checked";
}
?>
                                                        >&nbsp;Provide smoke partition at enclosed areas of 2,, 083 m2 (22,500 ft2 ) or less with the length of 45.7m (150ft) or less, with self-closing fire doors.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_3" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_3", $check5)) {
    echo "checked";
}
?>
                                                        >&nbsp;Provide smoke partition of two (2) hour fire resistance from floor to underside of floor above.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_4" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_4", $check5)) {
    echo "checked";
}
?>
                                                        >&nbsp;Provide stopping for all concealed spaces.
                                                    </label>
                                                    <?php
$fire_protection = $fetch['fire_protection'];
$check5 = explode(",", $fire_protection);
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#miscell_accdg">
                                                        Miscellaneous
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="miscell_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$miscellaneous = $fetch['miscellaneous'];
$check6 = explode(",", $miscellaneous);
?>
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_1" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_1", $check6)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide fire break up to the roof for ceiling areas.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_2" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_2", $check6)) {
    echo "checked";
}
?>                                                  
                                                    >&nbsp;Provide smoke partition at enclosed areas of 2,, 083 m2 (22,500 ft2 ) or less with the length of 45.7m (150ft) or less, with self-closing fire doors.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_3" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_3", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Provide smoke partition of two (2) hour fire resistance from floor to underside of floor above.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_4" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_4", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Provide stopping for all concealed spaces.
                                                    </label>
                                                    <?php
$miscellaneous = $fetch['miscellaneous'];
$check6 = explode(",", $miscellaneous);
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END ACCORDION -->

                                </div>

                            </div>



                            <div class="panel-footer">
                                <!-- <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>  -->
                                <button type="submit" class="btn btn-info" name="save_eval_checklist"><span class="fa fa-check"></span>Save Changes</button>
                            </div>
                            </form>
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
                        <div class="mb-title">
                            <span class="glyphicon glyphicon-off"></span> Log
                            <strong>Out</strong> ?</div>
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
            <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>

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