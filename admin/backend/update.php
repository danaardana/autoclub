<?php
include('../../connection.php');
session_start();
$car_id = $_GET['id'];
$car_maker = $_POST['car-maker'];
$car_model = $_POST['car-model'];
$car_year = $_POST['car-year'];
$car_status = $_POST['car-status'];
$car_transmission = $_POST['car-transmission'];
$car_drivetrain  = $_POST['car-drivetrain'];
$car_passangers = $_POST['car-passanggers'];
$car_kilomatres = $_POST['car-km'];
$car_bodytype = $_POST['car-bodytype'];
$car_engine = $_POST['car-engine'];
$car_exteriorcolor = $_POST['car-exteriorcolor'];
$car_interiorcolor = $_POST['car-interiorcolor'];
$car_fuel = $_POST['car-fuel'];
$car_description  = $_POST['car-description'];
$car_minus = $_POST['car-minus'];
$car_price = $_POST['car-price'];
// $car_thumbnail = $_POST['']
$car_pricetext = $_POST['car-pricetext'];
$car_date = $date = date('Y-m-d');

$query = "UPDATE cars SET car_maker='$car_maker', car_model='$car_model', car_year='$car_year', car_status='$car_status',
car_status_shop='$car_status_shop', car_transmission='$car_transmission', car_drivetrain='$car_drivetrain', car_passangers='$car_passangers',
car_kilomatres='$car_kilomatres', car_bodytype='$car_bodytype', car_engine='$car_engine', car_exteriorcolor= '$car_exteriorcolor',
car_interiorcolor= '$car_interiorcolor', car_fuel= '$car_fuel', car_description='$car_description', car_minus= '$car_minus',
car_price='$car_price', car_pricetext= '$car_pricetext', car_date= '$car_date' WHERE car_id='$car_id'";

if (mysqli_query($conn, $query)){

	header("Location: ../car.php");
}

?>