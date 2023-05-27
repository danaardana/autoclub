<?php

include('connection.php');
session_start();

$id = $_GET['code'];
$query = "SELECT * FROM custumer WHERE cus_id = '$id'";
$cus = mysqli_query($conn, $query);
if (mysqli_fetch_array($cus) > 0){
    $custumers = mysqli_fetch_array($cus);
    if ($custumers['cus_subscribe'] == '1'){
        $statusSub = '0';
    } else {
        $statusSub = '1';
    }
    $query2 = "UPDATE custumer SET cus_subscribe = '$statusSub' WHERE cus_id = $userId";
    if (mysqli_query($conn, $query2)){
        include('..\mail\unsubscribe.php');
    } 

} else {
    $query = "SELECT * FROM newslatter WHERE nw_id = '$id'";
    $cus = mysqli_query($conn, $query);
    $custumers = mysqli_fetch_array($cus);
    if (mysqli_query($conn, $query)){
        $date = date('Y-m-d');
        $query2 = "UPDATE newslatter SET nw_status = '0', nw_stop = '$date' WHERE cus_id = $userId";
        if (mysqli_query($conn, $query2)){
            header("Location: ..\done.php");
        }
    } 
}

?>