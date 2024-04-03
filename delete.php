<?php 
    session_start();
    if(isset($_SESSION['role']) && ($_SESSION['role'] == 'a' )){
        $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8","root","");
        $sql = "DELETE FROM community_admin WHERE id = $_GET[id]";
        $conn->exec($sql);//ถ้าลบตารางจะใช้ "exec"  ถ้า select ตารางจะใช้ "query"
        $conn = null;//สั่งปิดการเชื่อมต่อ
        header("location:index.php");      
        die();
    }
    else {header("location:index.php");
        die();
    }
    
    
?>