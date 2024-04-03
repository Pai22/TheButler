<?php
session_start();
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
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card" style="height:550px;width:500px">
                    <div class="card-body">
                        <h4 class="card-text">ห้อง สมมติว่า101</h4>
                        <br>
                        <h5 class="card-text">น้ำใช้ไป :</h5><input type=text id="num1" required class=form-control style="height:30px;width:150px" placeholder="ตอบเป็นหน่วย"><br>
                        <h5 class="card-text">ไฟใช้ไป:</h5><input type=text id="num2" required class=form-control style="height:30px;width:150px" placeholder="ตอบเป็นหน่วย"><br>
                        <h5 class="card-text">ค่าห้อง:</h5><input type=text id="num3" value="4000" class=form-control disabled style="height:30px;width:100px"><br>
                        <button onclick="calculate()">คำนวณ</button><br>
                        <p id="result">
                        <h5 class="card-text">รวมทั้งหมด:</h5><input type=text name="sum" id="sum" required class=form-control disabled style="height:30px;width:100px" oninput="calculate(this)"></p>
                    </div>
                    <button type="button" class='btn btn-success mt-1'>confirm</button>
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
            var sum = (parseFloat(num1) * 18) + (parseFloat(num2) * 8) + (parseFloat(num3));

            // แสดงผลลัพธ์
            document.getElementById("sum").value = sum;
        }
    </script>

</body>

</html>