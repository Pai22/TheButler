<?php 
    session_start();
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    

    $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8","root","");
    $sql = "UPDATE user SET login=login,name='$name',gender='$gender',email='$email' WHERE id=$user_id";
    $query=$conn->exec($sql);
// ทำการเพิ่มข้อมูลลงในฐานข้อมูล
$conn = null;
// ปิดการเชื่อมต่อฐานข้อมูล
header("location:room.php");
die();
?>

