<?php
include('../../connection.php');
session_start();
$name = $_POST['form-name'];
$phone = $_POST['form-phone'];
$email = $_POST['form-email'];
$sch_emp = $_POST['form-emp'];
$sch_car = $_POST['form-car'];
$sch_time = $_POST['form-time'];
$sch_status = "On-Time";

$query = "SELECT * FROM custumer WHERE cus_email = '$email'";
$cus = mysqli_query($conn, $query);
if (mysqli_num_rows($cus) > 0){
	$custumers = mysqli_fetch_array($cus); 
    $sch_cus = $custumers['cus_id'];
    $queryA = "INSERT INTO schedule (sch_cus, sch_emp, sch_car, sch_time) VALUES ('$sch_cus', '$sch_emp', '$sch_car', '$sch_time')";
} else {
    $query1 = "INSERT INTO custumer (cus_name, cus_password, cus_email, cus_phone) VALUES ('$name','$phone','$email','$phone')";
    if (mysqli_query($conn, $query1)){
        $cus_id = mysqli_insert_id($conn);
    }
    $query = "SELECT * FROM newslatter WHERE nw_email = '$email'";
    $cus = mysqli_query($conn, $query);
    if (mysqli_num_rows($cus) < 1){
        $date = date('Y-m-d');
        $query2 = "INSERT INTO newslatter (nw_name, nw_email, nw_start) VALUES  ('$name', '$email','$date')";
        if (mysqli_query($conn, $query2)){
            $cus_nw = mysqli_insert_id($conn);
        }
    } else {        
        $query = "UPDATE newslatter SET nw_cus = '$cus_id' WHERE nw_email = '$email'";
        if (mysqli_query($conn, $query)){
            $query = "SELECT * FROM newslatter WHERE nw_email = '$email'";
            $cus = mysqli_query($conn, $query);
            $custumer = mysqli_fetch_array($cus); 
            $cus_nw = $custumer['nw_id']; 
        }
    }
    $queryA = "INSERT INTO schedule (sch_cus, sch_cus_nw, sch_emp, sch_car, sch_time) VALUES ('cus_id','$cus_nw', '$sch_emp', '$sch_car', '$sch_time')";
}

if (mysqli_query($conn, $queryA)){ 
    header("Location: ../schedule.php");
}
?>