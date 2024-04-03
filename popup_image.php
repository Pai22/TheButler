<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Image</title>
    <style>
        /* ปรับขนาดรูปภาพให้พอดีกับหน้าต่าง pop-up */
        img {
            max-width: 60%;
            max-height: 60%;
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php
    // ตัวอย่างรูปภาพที่จะแสดงใน pop-up
    $imagePath = "qr.jpg";
    ?>
    <!-- แสดงรูปภาพ -->
    <img src="<?php echo $imagePath; ?>" alt="รูปภาพ">
</body>
</html>