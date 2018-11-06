<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($host, $user, $password, $dbname) or die(mysqli_error());

if(isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = $conn->query("SELECT * FROM `user` WHERE `name` = '$username' && `password` = '$password'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $valid = $query->num_rows;
    
    if($valid ==1){
        echo "<script>alert('You have successfully logged in')</script>";
        echo '<meta http-equiv="refresh" content="2;url=index.php">';
    } else {
        echo "<script>alert('You entered incorrect username or password!')</script>";
        echo '<meta http-equiv="refresh" content="2;url=login.php">';
    }
}
?>
