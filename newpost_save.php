
<?php 
session_start();
    $title = $_POST['topic'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];

    $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8","root","");

    $sql = "INSERT INTO community_admin (title, content, post_date, user_id) VALUES ('$title', ' $content',NOW(),'$user_id')";
    $conn->exec($sql);
    $conn = null;
    header("location:index.php");
    die();
?>