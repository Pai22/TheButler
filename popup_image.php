<?php
session_start();
if (isset($_SESSION['id']) && ($_SESSION['role'] !== 'a')) {
    header("location:index.php");
    die();
}
include_once 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Image</title>
    <style>
        /* ปรับขนาดรูปภาพให้พอดีกับหน้าต่าง pop-up */
        img {
            max-width: 90%;
            max-height: 90%;
            display: block;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
    $room = $_GET['room'];
    $sql = "SELECT t1.file_name,t1.uploadde_on,t1.user_id,t2.id,t2.number_room FROM images_bill as t1
            INNER JOIN user as t2 ON (t1.user_id=t2.id) ";
    $query = $db->query($sql);

    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            if ($row['number_room'] == $room && $row['file_name'] != "") {
                $imageURL = 'uploads/' . $row['file_name'];
    ?>
                <img src="<?php echo $imageURL ?>" alt="">
    <?php
            }
        }
    }

    ?>
    
   
    

</body>

</html>