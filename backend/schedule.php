<?php 
include('../connection.php');
session_start();
     
$id = $_GET['id'];
if (isset($_POST['book-btn']) && $_POST['book-time']!='-'){
    $name = $_POST['book-name'];
    $email = $_POST['book-email'];
    $phone = $_POST['book-phone'];
    $time = $_POST['book-time'];
    $car = $_POST['book-car'];
    $statud = "On-Time";
    $date = date('Y-m-d');

    if (isset($_SESSION['userId'])){
        $cus = $_SESSION['userId'];
        $query = "INSERT INTO schedule (sch_time, sch_car, sch_cus, sch_status) VALUES ('$time','$car','$cus','$status')";
    } else {
        $search = "SELECT * FROM custumer WHERE cus_email = '$email'";
        $run = mysqli_query($conn, $search);
        if (mysqli_num_rows($run) > 0){
            $custumer = mysqli_fetch_array($run);
            $cus = $custumer['cus_id'];
            $query = "INSERT INTO schedule (sch_time, sch_car, sch_cus, sch_status) VALUES ('$time','$car','$cus','$status')";
        } else {
            $query2 = "INSERT INTO newslatter (nw_name, nw_email, nw_start) VALUES ('$name','$email', '$date')";
            $run2 = mysqli_query($conn, $query2);
            $search = "SELECT * FROM newslatter WHERE nw_email = '$email'";
            $run = mysqli_query($conn, $search);
            $newslatter = mysqli_fetch_array($run);
            $nw = $newslatter['nw_id'];
            $query = "INSERT INTO schedule (sch_time, sch_car, sch_cus_nw, sch_status) VALUES ('$time','$car','$nw','$status')";
        }

    }
    if (mysqli_query($conn, $query)){
        header("Location: ..\detail.php?id=".$id);  
    }
} 
?>