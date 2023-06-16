<?php
include('../../connection.php');
session_start();
$name = $_POST['form-name'];
$phone = $_POST['form-phone'];
$email = $_POST['form-email'];
$address = $_POST['form-address'];
$post_code = $_POST['form-post-code'];

$query = "SELECT * FROM custumer WHERE cus_email = '$email'";
$cus = mysqli_query($conn, $query);
if (mysqli_num_rows($cus) < 0){
    $query = "INSERT INTO custumer (cus_name, cus_password, cus_email, cus_phone, cus_address, cus_post_code) 
    VALUES ('$name','$phone','$email','$phone', '$address', '$post_code')";
}
if (mysqli_query($conn, $query)){ 
header("Location: ../custumer.php");
}
?>