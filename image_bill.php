<?php

session_start();
include_once 'dbConfig.php';

// File upload path
$targetDir = "uploads/";
$user_id = $_SESSION['user_id'];

if (isset($_POST['submit'])) {
  if (!empty($_FILES["file"]["name"])) {
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
      if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
        $insert = $db->query("INSERT INTO images_bill(file_name, uploadde_on, user_id) VALUES ('" . $fileName . "', NOW(),'$user_id') ");
        if ($insert) {
          $_SESSION['statusMsg'] = "The file <b>" . $fileName . "</b> has been uploaded successfully.";
          header("location:myroom.php");
        } else {
          $_SESSION['statusMsg'] = "File upload failed, please try again.";
          header("location:myroom.php");
        }
      } else {
        $_SESSION['statusMsg'] = "Sorry, there was an error uploading your file.";
        header("location:myroom.php");
      }
    } else {
      $_SESSION['statusMsg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";
      header("location:myroom.php");
    }
  } else {
    $_SESSION['statusMsg'] = "Please select a file to upload.";
    header("location:myroom.php");
  }
}
header("location:myroom.php");
die();
