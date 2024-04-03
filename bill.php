<?php session_start();

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
            <div class="card">
            <div class="card-body">
                <h4 class="card-text">ห้อง $row[1]</h4>
                <br>
<<<<<<< HEAD
                <h5 class="card-text">ค่าน้ำ : <input type= text name= username required class=form-control></h5>
                <h5 class="card-text">ค่าไฟ: <input type= text name= username required class=form-control></h5>
                <h5 class="card-text">ค่าห้อง: <input type= text name= username required class=form-control></h5>
                <h5 class="card-text">รวมทั้งหมด: <input type= text name= username required class=form-control disabled></h5>
            </div>
            <button type="button" class = 'btn btn-success mt-1'>confirm</button>
=======
                <?php
            $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
            $sql="select username from user";
            $result = $conn->query($sql);
            $i=0;
            while ($row = $result->fetch()) {
                $i+=1;
                if ($_SESSION['role'] == 'a') {
                    echo "<tr><td>Room : $row[0]";
                    echo "</td></tr>";}}?>

                <h5 class="card-text">น้ำใช้ไป :</h5><input type= text id="num1" required class=form-control style="height:30px;width:150px" placeholder="ตอบเป็นหน่วย"><br>
                <h5 class="card-text">ไฟใช้ไป:</h5><input type= text id="num2" required class=form-control style="height:30px;width:150px" placeholder="ตอบเป็นหน่วย"><br>
                <h5 class="card-text">ค่าห้อง:</h5><input type= text id="num3" value="4000" class=form-control disabled style="height:30px;width:100px"><br>
                <button onclick="calculate()">คำนวณ</button><br>
                
            
            <form action="bill_save.php" method="post">
                <p id="result"><h5 class="card-text">รวมทั้งหมด:</h5><input type= text id="price" name="price" required class=form-control style="height:30px;width:100px" oninput="calculate(this)"></p>
                <button type="submit" class = 'btn btn-success mt-1'>บันทึก</button>
            </form>
        </div>
>>>>>>> 7e5855d6553a43e582b79ed8839826a16c092616
            </div>
        </div>
        
</body>

</html>