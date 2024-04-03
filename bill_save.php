<?php
session_start();
$id = $_POST['id'];
$user = $_POST['user'];
$user_id = $_SESSION['user_id'];
$sum = $_POST['sum'];


$conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");

$sql = "INSERT INTO room_admin VALUES ('$id','$price','$user_id')";
$conn->exec($sql);
$conn = null;
header("location:bill.php");
die();