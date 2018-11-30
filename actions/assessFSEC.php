<?php
if(isset($_POST['submit'])){
    $application_no = $_POST['application_no'];
    $applicant_name = $_POST['applicant_name'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $business_name = $_POST['business_name'];
    $type_of_certificate = $_POST['type_of_certificate'];
    $construction_tax = $_POST['construction_tax'];
    $reality_tax = $_POST['reality_tax'];
    $premium_tax = $_POST['premium_tax'];
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

    $conn->query("INSERT INTO `assessment` VALUES('', '$application_no', '$applicant_name', '$location', '$status', '$business_name', '$type_of_certificate', 
    '$construction_tax', '$reality_tax', '$premium_tax', '$sales_tax', '$proceeds_tax', '$inspection_fee', '$storage_clearance', 
    '$conveyance_clearance', '$installation_clearance', '$other_clearance', '$total_amount', '$month', '$year')") or die(mysqli_error());
    $conn->close();
    
    $conn2->query("UPDATE `assessment` SET `applicant_name` = '$application_name', `business_name` = '$business_name', `establishment_address` = '$establishment_address', `building_type` = '$building_type', `barangay_name` = '$barangay_name', `username` = '$username', `password` = '$password', `owner_name` = '$owner_name', `number_of_floors` = '$number_of_floors', `lot_size` = '$lot_size', `status` = '$status', `initial_requirements` = '$new' WHERE `application_no` = '$application_no'") or die(mysqli_error());
    $conn2->close();
        echo "<script type='text/javascript'>alert('Successfully added new FSEC Assessment!');</script>";
        echo "<script>document.location='../Transaction-Assessment.php'</script>";
}
    ?>