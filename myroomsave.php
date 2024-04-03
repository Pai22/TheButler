<?php
session_start();
$id = $_POST['id'];
$name = $_POST['name'];
$user_id = $_SESSION['user_id'];

$conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");

$sql = "INSERT INTO services (content, post_date, user_id,post_id) VALUES ('$comment',NOW(),'$user_id','$post_id')";
$conn->exec($sql);
$conn = null;
header("location:post.php?id=$post_id");
die();
