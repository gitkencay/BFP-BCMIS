<?php
if(isset($_POST['Save'])){
    $ops_no = $_POST['ops_no'];
    $application_no = $_POST['application_no'];
    $applicant_name = $_POST['applicant_name'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $business_name = $_POST['business_name'];
    $type_of_certificate = $_POST['type_of_certificate'];
    $construction_tax = $_POST['construction_tax'];
    $reality_tax = $_POST['reality_tax'];
    $premium_tax = $_POST[premium_tax];
    $sales_tax = $_POST['sales_tax'];
    $proceeds_tax = $_POST['proceeds_tax'];
    $inspection_fee = $_POST['inspection_fee'];
    $storage_clearance = $_POST['storage_clearance'];
    $conveyance_clearance = $_POST['conveyance_clearance'];
    $installation_clearance = $_POST['installation_clearance'];
    $other_clearance = $_POST['other_clearance'];
    $total_amount = $_POST['total_amount'];
    date_default_timezone_set('Asia/Manila');
    $month = date("M");
    $year = date("Y");

    $conn->query("INSERT INTO `application` VALUES('', 'FSEC', '$application_name', '$business_name', '$establishment_address', '$building_type', '$barangay_name', '$date_applied', '$username', '$password', '$owner_name', '$number_of_floors', '$lot_size', '$status', '$new', '$month', '$year')") or die(mysqli_error());
    $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new FSEC Assessment!');</script>";
        echo "<script>document.location='../DTransaction-Assessment.php'</script>";
}
    ?>