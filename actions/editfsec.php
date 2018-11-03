<?php
require '../require/databaseconnection.php';
if(isset($_POST['editfsec'])){
    $application_no = $_POST['application_no'];
    $application_name = $_POST['application_name'];
    $business_name = $_POST['business_name'];
    $establishment_address = $_POST['establishment_address'];
    $building_type = $_POST['building_type'];
    $barangay = $_POST['barangay'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $owner_name = $_POST['owner_name'];
    $number_of_floors = $_POST['number_of_floors'];
    $lot_size = $_POST['lot_size'];
    $status = $_POST['status'];

    $conn->query("UPDATE `fsec_application` SET `application_name` = '$application_name', `business_name` = '$business_name', `establishment_address` = '$establishment_address', `building_type` = '$building_type', `barangay` = '$barangay', `username` = '$username', `password` = '$password', `owner_name` = '$owner_name', `number_of_floors` = '$number_of_floors', `lot_size` = '$lot_size', `status` = '$status' WHERE `application_no` = '$application_no'") or die(mysqli_error());


    echo "<script type='text/javascript'>alert('Successfully edited FSEC application!');</script>";
    echo "<script>document.location='../DataEntry-AppReg.php'</script>";
}
?>