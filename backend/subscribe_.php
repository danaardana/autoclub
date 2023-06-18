<?php
include('..\connection.php');
session_start();
$email = $_POST['subs-email'];
$name = $_POST['subs-name'];

$find1 = "SELECT cus_name FROM custumer WHERE cus_name = '$user' ";
$status1 = mysqli_query($conn, $find1);
$find2 = "SELECT nw_email FROM newslatter WHERE nw_email = '$email' ";
$status2 = mysqli_query($conn, $find2);
$date = date('Y-m-d');

if (mysqli_num_rows($status2) < 1 ){
	if (mysqli_num_rows($status1) == 1 ){
		$cusData = mysqli_fetch_assoc($status1);
		$cusId = $cusData['cus_id'];
		$newslatter = "INSERT INTO newslatter (nw_cus,nw_name, nw_email, nw_start) VALUES ('$cusId','$name', '$email', '$date')";
		
	} else if (mysqli_num_rows($status1) < 1 ){
		$newslatter = "INSERT INTO newslatter (nw_cus,nw_name, nw_email, nw_start) VALUES (null,'$name', '$email', '$date')";

	}	

	if (mysqli_query($conn, $newslatter)){
		$_SESSION['status'] = "Subscribed success";
		include('..\mail\verification.php');			
	} else {		
		$_SESSION['status'] = "Subscribed failed";
	}
	header("Location: ..\index.php");
}
 else {
	$_SESSION['status'] = "Already registered";
	header("Location: ..\index.php");
}

?>