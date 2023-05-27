<?php
include('../../connection.php');
session_start();
$target_dir = "../../images/photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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

$query = "INSERT INTO cars (car_maker, car_model, car_year, car_status, car_transmission, car_drivetrain, 
car_passangers, car_kilomatres, car_bodytype, car_engine, car_exteriorcolor, car_interiorcolor, car_fuel, car_description, 
car_minus, car_price, car_pricetext, car_date) OUTPUT Inserted.ID VALUES ( '$car_maker', '$car_model', '$car_year', 
'$car_status', '$car_transmission', '$car_drivetrain', '$car_passangers', '$car_kilomatres', '$car_bodytype', 
'$car_engine', '$car_exteriorcolor', '$car_interiorcolor', '$car_fuel', '$car_description', '$car_minus',
'$car_price', '$car_pricetext', '$car_date')";

$pic_car = mysqli_query($conn, $query);

// Check if image file is a actual image or fake image
if(getimagesize($_FILES["fileToUpload"]["tmp_name"])) {
  $uploadOk = 1;
} else {
  header("Location: ../car.php");
  $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
  $_SESSION['errorImg'] = "Sorry, file already exists.";
  header("Location: ../car.php");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $_SESSION['errorImg'] = "Sorry, your file is too large.";
  header("Location: ../car.php");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  $_SESSION['errorImg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  header("Location: ../car.php");
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  $_SESSION['image'] = "Sorry, your file was not uploaded.";
  header("Location: ../car.php");
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $_SESSION['errorImg'] = "Upload success";
  } else {
    $_SESSION['errorImg'] = "Sorry, there was an error uploading your file.";
  }
  header("Location: ../car.php");
}

$query = "INSERT INTO pictures (pic_car, pic_path) VALUES ('$pic_car', '$target_file')";
if (mysqli_query($conn, $query)){

	header("Location: ../car.php");
}

?>