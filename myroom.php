<?php
session_start();
if (isset($_SESSION['id']) && ($_SESSION['role'] !== 'm')) {
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
                        <div class="row">
                            <label class="col-lg-3 col-form-label" name = "room">No.room: <?php echo $_SESSION['room']; ?> </label>
                        </div>
                        <div class="row mt-3">
                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
                            $room =  $_SESSION['room'];
                            $sql = "select user_number_room,price from room_admin where user_number_room = $room";
                            $result = $conn->query($sql);
                                while ($row = $result->fetch()) {
                            ?>
                                    <label class="col-lg-3 col-form-label">ค่าเช่า :</label>
                                    <input type=text name=username value="<?php echo $row[1] ?>" required class=form-control disabled style="height:30px;width:100px">
                                <?php
                                }
                             ?>

                        </div>

                        <div class="row mt-3">
                            <label class="col-lg-4 col-form-label">QR code:</label>
                            <div class="col-lg-8">
                                <img src="qr.jpg" width="200" height="400">
                            </div>
                        </div>
                        <div class="row">
                            <?php if (!empty($_SESSION['statusMsg'])) { ?>
                                <div class="alert alert-success mt-3" role="alert">
                                    <?php
                                    echo $_SESSION['statusMsg'];
                                    unset($_SESSION['statusMsg']);
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <form action="image_bill.php" method="POST" enctype="multipart/form-data">
                            <div class="text-center justify-content-center align-items-center p-4 border-2 border-dashed rounded-3">
                                <h6 class="my-2">Select image file to upload</h6>
                                <input type="file" name="file" class="form-control streched-link" accept="image/gif, image/jpeg, image/png">
                                <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG, PNG & GIF files are allowed to upload</p>
                            </div>
                            <div class="d-sm-flex justify-content-center mt-2">
                                <input type="submit" name="submit" value="Upload" class="btn btn-sm btn-success mb-3">
                            </div>
                        </form>

                        <form action="myroomsave.php" method="post">
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
                                    <button type="submit" class="btn btn-primary btn-sm " name="submit" value="Upload"><i class="bi bi-arrow-down-square-fill"></i> Submit</button>
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