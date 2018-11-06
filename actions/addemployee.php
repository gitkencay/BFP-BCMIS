<?php
// ang 'add_new_employ', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['add_new_employ'])){
    $officer_type = $_POST['officer_type'];
    $rank = $_POST['rank'];
    $officer = $_POST['officer'];
    $password = $_POST['password'];
    $firestation = $_POST['firestation'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");

    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
    $conn->query("INSERT INTO `employee` VALUES('', '$officer_type', '$rank', '$officer', '$password', '$firestation', '$date_applied')") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Employee record!');</script>";
    echo "<script>document.location='../DataEntry-EmpProf.php'</script>";
}
?>