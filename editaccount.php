<?php 
    session_start();
    $image = $_POST['image'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8","root","");
    $sql = "SELECT username,name,gender, FROM  user LIMIT id=1";
    $result = $conn->query($sql);
    $sql = "UPDATE user SET image=image,username='$username',name='$name',gender='$gender',email='$email' WHERE id=$username=number_room";
    $query=$conn->exec($sql);
    if($query){
        $_SESSION['editaccount']=1;
    }else{
        $_SESSION['editaccount']=0;
    }
    $conn = null;
    header("location:account.php");
    die();
?>