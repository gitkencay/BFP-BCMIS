<?php
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['submit'])){
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
    $initial_requirements = $_POST['initial_requirements'];
    $status = $_POST['status'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");

    // para sa multiple checkbox sa initial requirements
    $new = "";
    if (empty($_POST["initial_requirements"])) {
        $new = 'None';

    }
    else {
        foreach($initial_requirements as $value)  
        {  
            $new .= $value . ",";  
        }
    }

    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
    $conn->query("INSERT INTO `fsec_application` VALUES('', '$application_name', '$business_name', '$establishment_address', '$building_type', '$barangay', '$date_applied', '$username', '$password', '$owner_name', '$number_of_floors', '$lot_size', '$new', '$status', '$month', '$year')") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new FSEC application!');</script>";
    echo "<script>document.location='../DataEntry-AppReg.php'</script>";
}
?>