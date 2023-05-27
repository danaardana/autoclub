<?php
include('../../connection.php');
session_start();
$url = $_SESSION['Ahistory'];
session_unset();
session_destroy();
header("Location: ../login.php");

?>