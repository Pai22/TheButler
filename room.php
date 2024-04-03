<?php session_start();
if (isset($_GET['name'])) {
    $catname = $_GET['name'];
} else {
    $catname = '--ทั้งหมด--';
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
function showPopup() {
  // เปิดหน้าต่าง pop-up ด้วยความกว้าง 500px และความสูง 500px
  window.open('popup_image.php', 'popup', 'width=500,height=500');
}
</script>
</head>

<body style="background-color: black;">
    <?php include "nav.php" ?>
<div class="container">
        
        <span>
            <div class="mt-5 mb-3 d-flex justify-content-between " style="float:left ;">
                <h6 style="color: white;"><i class="bi bi-building-fill"></i> Total Rooms</h6>
            </div>
            <div class="mt-5 mb-3 mr-5 d-flex justify-content-between" style="float:right ;">
                <div>
                    <label style="color: white;"><i class="bi bi-calendar-month-fill"></i> เดือน : </label>
                    <span class="dropdown ">
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $catname; ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby='Button2'>
                            <li><a class="dropdown-item" href="index.php">ทั้งหมด</a></li>
                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                            $sql = "SELECT *FROM category";
                            foreach ($conn->query($sql) as $row) {
                                echo "<li><a class = dropdown-item href=index.php?catid=$row[id]&name=$row[name]>$row[name]</a></li>";
                            }
                            $conn = null;
                            ?>
                        </ul>
                    </span>
                </div>
            </div>
            <div class="mt-5 mb-3 mx-3 d-flex justify-content-between " style="float:right ;">
                <a href="newpost.php" class="btn btn-success btn-sm "><i class="bi bi-house-add-fill"></i></i> เพิ่มห้อง</a>
            </div>

        </span>

        <table class="table table-striped mt-4">
            <?php
            $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
            $sql="select id,username,name,gender,email,image from user";
            $result = $conn->query($sql);
            while ($row = $result->fetch()) {
                if ($_SESSION['role'] == 'a' || $_SESSION['user_id'] == $row['1']){
                    echo "<tr><td><a href=bill.php? style = text-decoration:none>Room : $row[1]</a>";
                    echo "<td>";
                    if (isset($_SESSION['id']) && ($_SESSION['role'] == 'a' || $_SESSION['user_id'] == $row['5'])) {
                        echo "<td>";
                        echo "<button onclick=showPopup()>
                        <i class='bi bi-receipt'></i></a>"
                        ;
                    
            }}
        }
            $conn = null;
            ?>
            
        </table>
    </div>
</body>

</html>