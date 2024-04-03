
<?php
session_start();
$date = $_POST['date'];
$time = $_POST['time'];
$name = $_POST['services'];
$user_id = $_SESSION['user_id'];

$conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");

$sql = "INSERT INTO showservices (date_service, time_service, service_id, user_id) VALUES ('$date', ' $time', '$name', '$user_id')";
$conn->exec($sql);
$conn = null;
header("location:index.php");
die();
?>