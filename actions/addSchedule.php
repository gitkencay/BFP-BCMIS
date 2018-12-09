<?php
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['save_schedule'])){
    $io_no = $_POST['io_no'];
    $inspectors = $_POST['inspectors'];
    $inspection_date = $_POST['inspection_date'];
    $inspection_time = $_POST['inspection_time'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $app_date = date('g:i a',strtotime($inspection_time));
    $month = date("M");
    $year = date("Y");


    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
    $conn->query("INSERT INTO `inspection_schedule` VALUES('', '$io_no', '$inspectors', '$inspection_date', '$app_date', '$date_applied', '$month', '$year')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Schedule!');</script>";
    echo "<script>document.location='../inspection-orderCopy.php'</script>";
}
?>