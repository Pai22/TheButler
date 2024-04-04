<?php
session_start();
include_once 'dbConfig.php';
if (isset($_SESSION['role']) && ($_SESSION['role'] == 'a')) {
  $id = $_GET['id'];
  $sql = "DELETE FROM images_bill WHERE user_id = $id";
  $query = $db->prepare($sql); //ถ้าลบตารางจะใช้ "exec"  ถ้า select ตารางจะใช้ "query"
  $query->execute(); // ประมวลผลคำสั่ง SQL

  $db = null; //สั่งปิดการเชื่อมต่อ
  header("location:room.php");
  die();
} else {
  header("location:room.php");
  die();
}
?>