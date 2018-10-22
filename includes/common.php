<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "origin";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// start the session

if(!isset($_SESSION)) { 
session_start(); 
} 

?>