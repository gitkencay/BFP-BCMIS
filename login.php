<?php
session_start();
?>
<html>
	<head>
	<title>BCBFP-MIS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets2/css/main2.css">
	<link rel="stylesheet" href= "assets2/vendor/bootstrap/css/style2.css">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">
	</head>

<!-- <style>
			#loading{
				background-color: #1caf9a;
				height: 100%;
				width: 100%;
				position: fixed;
				z-index: 1;
				margin-top: 0px;
				top: 0px;
			}
			#loading-center{
				width: 100%;
				height: 100%;
				position: relative;
			}
			#loading-center-absolute {
				position: absolute;
				left: 50%;
				top: 50%;
				height: 100px;
				width: 100px;
				margin-top: -50px;
				margin-left: -50px;	
			}
			.object{
				width: 25px;
				height: 25px;
				background-color: rgba(255,255,255,0);
				margin-right: auto;
				margin-left: auto;
				border: 4px solid rgba(255,255,255,1);
				left: 37px;
				top: 37px;
				position: absolute;
			}

			#first_object{
				-webkit-animation: first_object 1s infinite;
				animation: first_object 1s infinite;
				-webkit-animation-delay: 0.5s; 
				animation-delay: 0.5s; 
			}
			#second_object{
				-webkit-animation: second_object 1s infinite;
				animation: second_object 1s infinite;
			}	
			#third_object{
				-webkit-animation: third_object 1s infinite;
				animation: third_object 1s infinite;
				-webkit-animation-delay: 0.5s; 
				animation-delay: 0.5s; 
			}	
			#forth_object{
				-webkit-animation: forth_object 1s infinite;
				animation: forth_object 1s infinite;
			}	






			@-webkit-keyframes first_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
				50% {
					-ms-transform: translate(150%,150%) scale(2,2); 
					-webkit-transform: translate(150%,150%) scale(2,2); 
					transform: translate(150%,150%) scale(2,2);
				}

				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}	 
			}		
			@keyframes first_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
				50% {
					-ms-transform: translate(150%,150%) scale(2,2); 
					-webkit-transform: translate(150%,150%) scale(2,2); 
					transform: translate(150%,150%) scale(2,2);
				}

				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
			}




			@-webkit-keyframes second_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
				50% {
					-ms-transform: translate(-150%,150%) scale(2,2); 
					-webkit-transform: translate(-150%,150%) scale(2,2);
					transform: translate(-150%,150%) scale(2,2);
				}
				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
			}		
			@keyframes second_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
				50% {
					-ms-transform: translate(-150%,150%) scale(2,2); 
					-webkit-transform: translate(-150%,150%) scale(2,2);
					transform: translate(-150%,150%) scale(2,2);
				}
				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
			}




			@-webkit-keyframes third_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}	
				50% {
					-ms-transform: translate(-150%,-150%) scale(2,2); 
					-webkit-transform: translate(-150%,-150%) scale(2,2);
					transform: translate(-150%,-150%) scale(2,2);
				}
				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}	
			}		
			@keyframes third_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}	
				50% {
					-ms-transform: translate(-150%,-150%) scale(2,2); 
					-webkit-transform: translate(-150%,-150%) scale(2,2);
					transform: translate(-150%,-150%) scale(2,2);
				}
				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
			}
			@-webkit-keyframes forth_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
				50% {
					-ms-transform: translate(150%,-150%) scale(2,2); 
					-webkit-transform: translate(150%,-150%) scale(2,2);
					transform: translate(150%,-150%) scale(2,2);
				}
				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}	
			}		
			@keyframes forth_object {
				0% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
				50% {
					-ms-transform: translate(150%,-150%) scale(2,2); 
					-webkit-transform: translate(150%,-150%) scale(2,2);
					transform: translate(150%,-150%) scale(2,2);
				}
				100% {
					-ms-transform: translate(1,1) scale(1,1); 
					-webkit-transform: translate(1,1) scale(1,1); 
					transform: translate(1,1) scale(1,1); 
				}
			}
		</style>

	</head>
	<body>
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="first_object"></div>
					<div class="object" id="second_object"></div>
					<div class="object" id="third_object"></div>
					<div class="object" id="forth_object"></div>
				</div>
			</div>
		</div>
	</body>
</html> -->


<?php
require ('config.php');
if(ISSET($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	date_default_timezone_set('Asia/Manila');
	$date=date("F j, Y, g:i a");

	$user = mysqli_real_escape_string($conn,$username);
	$pass1 = mysqli_real_escape_string($conn,$password);

	$pass = sha1($pass1);
	$salt = "aTya03gHJdTyqLkWQfg15yU";
	$pass = $salt.$pass;

	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user` WHERE BINARY `username` = '$user' && BINARY `password` = '$pass' && `status` = 'Active'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$valid = $query->num_rows;
	$position = $fetch['position'];
	$user_id = $fetch['user_id'];


	if($valid > 0){
		if ($position == 'NTP Nurse Coordinator') {
			$_SESSION['user_id'] = $fetch['user_id'];
			$conn->query ("UPDATE `user` SET `login` = '$date' WHERE `user_id` = '$user_id'") or die(mysqli_error());
			echo "<script>window.location = 'index.html'</script>";
		}	
		else{
			echo "<script>alert('Invalid account. Please check your username and password.')</script>";
			echo "<script>window.location = 'loginpage.php'</script>";
		}
	}
	
	$conn->close();
}	
?>
<!--  header("location:dashboard_medtech.php");
echo "<script type='text/javascript'>document.location='dashboard_medtech.php'</script>";-->
