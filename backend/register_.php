<?php
include('..\connection.php');
session_start();

$name = $_POST['user-name'];
$password = $_POST['user-password'];
$email = $_POST['user-email'];
$phone = $_POST['user-phone'];

$search = "SELECT cus_email FROM custumer WHERE cus_email = '$email'";
$status1 = mysqli_query($conn, $search);
if (mysqli_num_rows($status1) > 0 ){
    $_SESSION['status_regist'] = "Email already registered";?>
	<script type="text/javascript">
	window.location.href = 'http://localhost/register.php';
	</script>
	<?php
} else {
	$query = "INSERT INTO custumer (cus_name, cus_password, cus_email, cus_phone) VALUES ('$name','$password','$email','$phone')";
	if (mysqli_query($conn, $query) == FALSE){
	    $_SESSION['status_regist'] = "There was an error, please try again later";?>
		<script type="text/javascript">
		window.location.href = 'http://localhost/register.php';
		</script>
		<?php  
	} else {
		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		$_SESSION['status_login'] = 'true';
		$query2 = "SELECT cus_id, cus_email FROM custumer WHERE cus_email = '$email'";
		$cus = mysqli_query($conn, $query2);
		$custumers = mysqli_fetch_array($cus);
		$_SESSION['userId'] = $custumers['cus_id'];    
		include('..\mail\verification.php');
	}	
}

?>