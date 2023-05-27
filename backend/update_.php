<?php 
include('../connection.php');
session_start();

if ($_SESSION['updateSet']=="phone") { 
    $phone = $_POST['update-phone'];
    $userId = $_SESSION['userId'];
    $query = "UPDATE custumer SET cus_phone= '$phone' WHERE cus_id = $userId";
    if (mysqli_query($conn, $query)){
        $_SESSION['updateSet'] = "Success";
        header("Location: ..\profile.php");        
    } else {        
        $_SESSION['updateSet'] = "Failed";
        header("Location: ..\profile.php");     
    }

} else if ($_SESSION['updateSet']=="address"){ 
    $address = $_POST['update-address'];
    $userId = $_SESSION['userId'];
    $query = "UPDATE custumer SET cus_address = '$address' WHERE cus_id = $userId";
    if (mysqli_query($conn, $query)){
        $_SESSION['updateSet'] = "Success";
        header("Location: ..\profile.php");        
    } else {        
        $_SESSION['updateSet'] = "Failed";
        header("Location: ..\profile.php");     
    }

} else if ($_SESSION['updateSet']=="profile"){ 
    $userId = $_SESSION['userId'];
    $query = "UPDATE custumer SET ";
    if (isset($_POST['update-phone']) && $_POST['update-phone'] != ''){
        $phone = $_POST['update-phone'];        
        $query .= " cus_phone = '$phone' ";
    }
    if (isset($_POST['update-address']) && $_POST['update-address'] != ''){
        $address = $_POST['update-address'];  
        if(strpos($query,"cus_")>0){
            $query .= ", cus_address = '$address' ";   
        }  else {
            $query .= " cus_address = '$address' ";   
        } 
    }
    if (isset($_POST['update-email']) && $_POST['update-email'] != ''){
        $email = $_POST['update-email'];     
        if(strpos($query,"cus_")>0){
            $query .= ", cus_email = '$email' ";   
        }  else {
            $query .= " cus_email = '$email' ";   
        }
    }
    if (isset($_POST['update-zip']) && $_POST['update-zip'] != ''){
        $zip = $_POST['update-zip'];   
        if(strpos($query,"cus_")>0){
            $query .= ", cus_post_code = '$zip' ";     
        }  else {
            $query .= " cus_post_code = '$zip' ";     
        }
    }

    $query .= " WHERE cus_id = $userId";
    if (mysqli_query($conn, $query)){
        $_SESSION['updateSet'] = "Success";
        header("Location: ..\profile.php");        
    } else {        
        $_SESSION['updateSet'] = "Failed";
        header("Location: ..\profile.php");     
    }
} 

?>