<?php 
include 'includes\common.php';

$email = $_POST['email'];
$password = $_POST['password'];


$user_auth_query = "SELECT * FROM users WHERE email = '$email' 
AND password = '$password' ";

$mysqli_result = mysqli_query($conn, $user_auth_query) 
or die(mysqli_error($conn));

// if entry not found, go back to login page

if(mysqli_num_rows($mysqli_result) == 0){
	header('location: index.php');
	exit();	 
}
else{
	
	// if entry found , fill your data into session variable

	$row = mysqli_fetch_array($mysqli_result);

   	$_SESSION['id'] = $row['user_id'];
   	$_SESSION['email'] = $row['email'];
    
 	header('location: dashboard.php');
	exit();
} 


?>