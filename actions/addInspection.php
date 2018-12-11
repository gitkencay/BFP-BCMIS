<?php
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['save_inspection'])){
    $application_no = $_POST['application_no'];
    $inspector_name = $_POST['inspector_name'];
    $owner_name = $_POST['owner_name'];
    $business_name = $_POST['business_name'];
    $establishment_address = $_POST['establishment_address'];
    //$date = $_POST['date'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");

    $io_no = $_POST['io_no'];
    $application_no = $_POST['application_no'];
    $application_number = $_POST['application_number'];
    $owner_name = $_POST['owner_name'];
    $owner_address = $_POST['owner_address'];
    $building_name = $_POST['building_name'];
    $building_address = $_POST['building_address'];
    $bldg_height = $_POST['bldg_height'];
    $lot_size = $_POST['lot_size'];
    $number_of_floors = $_POST['number_of_floors'];
    $ir_checklist = $_POST['ir_checklist'];
    $recommendation = $_POST['recommendation'];
    $deficiency = $_POST['deficiency'];
    $type_of_notice = $_POST['type_of_notice'];

    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
    $conn->query("INSERT INTO `inspection` VALUES('', '$application_no', '$inspector_name', '$owner_name', '$business_name', '$establishment_address', '$date_applied', '$month', '$year', 'Inspection Order')") or die(mysqli_error());
    
    
    $conn->query("INSERT INTO `inspection_report` VALUES('', '$io_no', '$application_no', '$owner_name', '$owner_address', '$building_name', '$building_address', '$bldg_height', '$lot_size', '$number_of_floors', '$date_applied', '$month', '$year', 'Inspection Report', '$ir_checklist', '$recommendation', '$deficiency', '$type_of_notice')") or die(mysqli_error());
   

    $conn->query("UPDATE `application` SET `assessment_status` = 'Inspected' WHERE `application_no` = '$application_number'") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Inspection Order and Report!');</script>";
    echo "<script>document.location='../Transaction-Inspection.php'</script>";
}
?>