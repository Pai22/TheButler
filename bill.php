<?php
session_start();
if (!isset($_SESSION['id']) && ($_SESSION['role'] == 'a')) {
    header("location:login.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: black;">
    <?php include "nav.php" ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="room.php" style="color: white;">Back Room</a></li>
            </ol>
        </nav>
        <div class="row justify-content-center mb-3">
            <div class="col-md-5">
                <div class="card" style="height:590px;width:450px">
                    <div class="card-body">
                        <?php
                        $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
                        if (isset($_GET['room'])) {
                            // ดึงค่าหมายเลขห้องจาก URL
                            $number_room = $_GET['room'];
                            // สร้างคำสั่ง SQL เพื่อดึงข้อมูลของห้องที่เลือก
                            $sql = "SELECT * FROM user WHERE number_room = $number_room";
                            $result = $conn->query($sql);
                            // แสดงข้อมูลของห้องที่เลือก
                            while ($row = $result->fetch()) {
                                echo "<h4>Room " . $number_room . "</h4>";
                                // แสดงข้อมูลอื่น ๆ ของห้องที่คุณต้องการ
                            }
                        
                        ?>
                        <h5 class="card-text">น้ำใช้ไป :</h5><input type=text id="num1" required class=form-control style="height:30px;width:150px" placeholder="ตอบเป็นหน่วย"><br>
                        <h5 class="card-text">ไฟใช้ไป:</h5><input type=text id="num2" required class=form-control style="height:30px;width:150px" placeholder="ตอบเป็นหน่วย"><br>
                        <h5 class="card-text">ค่าห้อง:</h5><input type=text id="num3" value="4000" class=form-control disabled style="height:30px;width:100px"><br>
                        <button onclick="calculate()">คำนวณ</button><br>

                            <form action="bill_save.php" method="post">
                                <p id="number_room">
                                <h5 class="card-text">ห้องหมายเลข :</h5><input type=text id="number_room" value="<?php echo $number_room ?>" name="number_room" required class=form-control style="height:30px;width:100px"></p>

                        <?php 
                        } 
                        ?>
                            <p id="result">
                            <h5 class="card-text">รวมทั้งหมด:</h5><input type=text id="price" name="price" required class=form-control style="height:30px;width:100px" oninput="calculate(this)"></p>
                            <button type="submit" class='btn btn-success mt-1'>บันทึก</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function calculate(input) {
            // รับค่าจากช่อง input
            var num1 = document.getElementById("num1").value;
            var num2 = document.getElementById("num2").value;
            var num3 = document.getElementById("num3").value;

            // ทำการคำนวณ
            var price = (parseFloat(num1) * 18) + (parseFloat(num2) * 8) + (parseFloat(num3));

            // แสดงผลลัพธ์
            document.getElementById("price").value = price;
        }
    </script>
</body>

</html>