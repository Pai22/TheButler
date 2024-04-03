<?php
session_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 's')) {
  $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
  $sql = "DELETE FROM showservices WHERE id = $_GET[id]";
  $conn->exec($sql); //ถ้าลบตารางจะใช้ "exec"  ถ้า select ตารางจะใช้ "query"
  $conn = null; //สั่งปิดการเชื่อมต่อ
  header("location:service.php");
  die();
} else {
  header("location:service.php");
  die();
}
