<?php session_start();
if (isset($_SESSION['id']) && ($_SESSION['role'] !== 'a')) {
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        function showPopup(room) {
            // เปิดหน้าต่าง pop-up ด้วยความกว้าง 500px และความสูง 500px
            window.open(`popup_image.php?room=${room}`, 'popup', 'width=500,height=500');
        }

        function myFunction() {
            let r = confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
    </script>
</head>

<body style="background-color: black;">
    <?php include "nav.php" ?>
    <div class="container" style="margin-top: 50px;">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title color: black;"><i class="bi bi-building-fill"></i> Total Rooms</h6>
                <table class="table">
                    <?php
                    $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
                    $sql = "select id,username,name,gender,email,number_room,role from user";
                    $result = $conn->query($sql);
                    $i = 0;
                    $room = "";
                    while ($row = $result->fetch()) {
                        $i += 1;
                        if (isset($_SESSION['id']) && ($_SESSION['role'] == 'a')) {
                            if ($row[6] == 'm') {
                                $room = $row["number_room"];
                                echo "<tr><td><a href='bill.php?room=" . $row["number_room"] . "'style = text-decoration:none>Room " . $row["number_room"] . "</a><br>";
                                echo "<td>";

                                if (isset($_SESSION['id']) && ($_SESSION['role'] == 'a')) {
                                    echo "<td>";
                                    echo "<button onclick=showPopup(" . $room . ")>
                        <i class='bi bi-receipt'></i></a></td>";
                                    echo "<td>";
                                    echo "<a href=confirm_bill.php?id=$row[0] class = 'btn btn-outline-secondary  '
                                            onclick = 'return myFunction()'> Confirm</a>";
                                }
                            }
                        }
                    }
                    $conn = null;

                    ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>