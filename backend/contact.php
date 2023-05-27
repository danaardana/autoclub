<?php
include('../connection.php');
session_start();

$topic = $_POST['contact-topic'];
$name =  $_POST['contact-name'];
$email =  $_POST['contact-email'];
$ttl =  $_POST['contact-ttl'];
$msg =  $_POST['contact-msg'];

$queryA = "INSERT INTO emails (mail_topic, mail_name, mail_email, mail_ttl, mail_msg) VALUES ('$topic', '$name', '$email', '$ttl', '$msg')";
if (mysqli_query($conn, $queryA)){
	header("Location: ../feedback.php");
}

?>