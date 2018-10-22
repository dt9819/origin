<?php

include 'includes\common.php';

$member_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$user_registration_query = "insert into users(name,email,password) 
values ('$member_name','$email','$password')";

$user_registration_submit = 
mysqli_query($conn, $user_registration_query) or die(mysqli_error($conn));

$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($conn);


header('location: dashboard.php');
exit();

?>




