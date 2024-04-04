<?php
session_start();
$number_room = $_POST['number_room'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$image = $_POST['image'];
$user_id = $_SESSION['user_id'];
$id = $_POST['id'];


$conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
$sql = "UPDATE user SET password='$password'name='$name',email='$email' WHERE number_room = $username";
$query=$conn->exec($sql);
// ทำการเพิ่มข้อมูลลงในฐานข้อมูล
$conn = null;
// ปิดการเชื่อมต่อฐานข้อมูล
header("location:account.php");
die();
?>
