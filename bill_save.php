<?php
session_start();
$id = $_POST['id'];
$number_room = $_POST['number_room'];
$price = $_POST['price'];
$user_id = $_SESSION['user_id'];

$conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
$sql = "INSERT INTO room_admin VALUES ('$id','$number_room','$price','$user_id')";
$query=$conn->exec($sql);
// ทำการเพิ่มข้อมูลลงในฐานข้อมูล
$conn = null;
// ปิดการเชื่อมต่อฐานข้อมูล
header("location:room.php");
die();
?>
