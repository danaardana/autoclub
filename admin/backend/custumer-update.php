<?php
include('../../connection.php');
session_start();
$cus_id = $_GET['id'];
$name = $_POST['form-name'];
$phone = $_POST['form-phone'];
$email = $_POST['form-email'];
$address = $_POST['form-address'];
$post_code = $_POST['form-post-code'];

$query = "UPDATE custumer SET cus_name= '$name', cus_email='$email', cus_phone='$phone',cus_address='$address', cus_post_code='$post_code' WHERE cus_id = '$cus_id'";

if (mysqli_query($conn, $query)){
	header("Location: ../custumer.php");
}

?>