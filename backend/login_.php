<?php
include('..\connection.php');
session_start();

$email = $_POST['login-email'];
$password = $_POST['login-password'];
$query = "SELECT * FROM custumer WHERE cus_email = '$email' AND cus_password = '$password'";
$cus = mysqli_query($conn, $query);
if (mysqli_num_rows($cus) > 0){
	$custumers = mysqli_fetch_array($cus);
	$date = date('Y-m-d');
	$_SESSION['name'] = $custumers['cus_name'];
	$_SESSION['email'] = $custumers['cus_email'];
	$_SESSION['userId'] = $custumers['cus_id'];
	$userId = $custumers['cus_id'];
	$query2 = "UPDATE custumer SET cus_lastlog = '$date' WHERE cus_id = $userId";
	$flg = mysqli_query($conn, $query2);
	$_SESSION['status_login'] = 'true';
	if (isset($_SESSION['history'])){
		$url = $_SESSION['history'];
		header("Location: $url");
	} else {
		header("Location: ..\profile.php");
	}
} else {
	$_SESSION['status_login'] = 'false';
	header("Location: ..\login.php");
}
?>