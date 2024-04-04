<?php
session_start();
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
    $query = $db->query("SELECT * FROM images_bill ORDER BY uploadde_on DESC");
    $query1 = $db->query("SELECT * FROM user ");
    $row1 = $query1->fetch_assoc();
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            $imageURL = 'uploads/' . $row['file_name'];
    ?>
            <img src="<?php echo $imageURL ?>" alt="" >

    <?php

                }
            }
         else { ?>
        <p>No image found...</p>
    <?php } ?>
</body>
</html>