<?php
include('../../connection.php');
session_start();

$email = $_POST['login-username'];
$password = $_POST['login-password'];
$query = "SELECT * FROM employees WHERE emp_username = '$email' AND emp_pass = '$password'";
$emp = mysqli_query($conn, $query);
if (mysqli_num_rows($emp) > 0){
	$user = mysqli_fetch_array($emp);
	$_SESSION['admin-name'] = $user['emp_name'];
	$_SESSION['admin-email'] = $user['emp_email'];
	$_SESSION['admin-userId'] = $user['emp_id'];
	$_SESSION['status_login'] = 'true';
	header("Location: ../index.php");
} else {
	header("Location: ..\login.php");
}
?>