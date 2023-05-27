<?php
include('connection.php');
session_start();
$url = $_SESSION['history'];
session_unset();
session_destroy();
header("Location: $url");

?>