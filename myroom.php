<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>The Butler</title>
</head>

<body style="background-color:#000000;">
    <?php include "nav.php" ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #C6824B;">My Room</div>
                    <div class="card-body">
                        <form action="myroomsave.php" method="post">
                            <div class="row">
                                <label class="col-lg-3 col-form-label">No.room: 101</label>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">ค่าเช่า :</label>
                                <input type=text name=username value="" required class=form-control disabled style="height:30px;width:100px">
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-4 col-form-label">QR code:</label>
                                <div class="col-lg-8">
                                    <img src="qr.jpg" width="200" height="400">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="file" class="col-lg-4 col-form-label">แนบหลักฐานการโอนเงิน:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="file " type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div>
                                    <label class="col-lg-4">service: </label>
                                    <span class=" dropdown ">
                                        <select name="services" class="form-select">
                                            <?php
                                            $conn = new PDO("mysql:hostname=localhost;dbname=butler;charset=utf8", "root", "");
                                            $sql = "SELECT * FROM services";
                                            foreach ($conn->query($sql) as $row) {
                                                echo "<option value = " . $row['id'] . "> " . $row['name'] . "</option>";
                                                
                                            }
                                            $conn = null;

                                            ?>
                                        </select>
                                    </span>
                                </div>
                                <div class="col-lg-5 mt-2">
                                    <?php ?>
                                    <input type="date" name="date" class="form-control" style="height:25px;width:200px;">
                                    <div class="mt-2">
                                        <input type="time" name="time" class="form-control" style="height:25px;width:200px;">(เวลาทำการ 8.00-16.00)
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary btn-sm "><i class="bi bi-arrow-down-square-fill"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
    </div>
</body>

</html>