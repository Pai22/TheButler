<?php
session_start();
$id = $_POST['id'];
$user = $_POST['user'];
$user_id = $_SESSION['user_id'];
$price = $_POST['price'];
$number_room = $_POST['number_room'];


$conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");

$sql = "INSERT INTO room_admin VALUES ('$id','$number_room','$price','$user_id')";
$conn->exec($sql);
$conn = null;
header("location:bill.php");
die();