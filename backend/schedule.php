<?php 
include('../connection.php');
session_start();

if (isset($_POST['book-btn']) && $_POST['book-time']!='-'){
    $name = $_POST['book-name'];
    $email = $_POST['book-email'];
    $phone = $_POST['book-phone'];
    $time = $_POST['book-time'];
    $car = $_POST['book-car'];
    $statud = "On-Time";

    if (isset($_SESSION['userId'])){
        $cus = $_SESSION['userId'];
        $query = "INSERT INTO schedule (sch_time, sch_car, sch_cus, sch_status) VALUES ('$time','$car','$cus','$status')";
    } else {
        $search = "SELECT * FROM custumer WHERE cus_email = '$email'";
        $run = mysqli_query($conn, $search);
        if (mysqli_num_rows($run)>0){
            $custumer = mysqli_fetch_array($run);

        } else {
            $query = "INSERT INTO newslatter (nw_name, nw_email, nw_date) VALUES ('$name','$password','$email','$phone')";
        }
    }
} 

#header("Location: ..\profile.php");     


?>