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
<body>
    <div class ="bg-dark">
    <div class="container">
        <h1 style="text-align: center">The Butler</h1>
        <?php include "nav2.php" ?>
        <div class = "row mt-5">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #C6824B;">My Room</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="row">
                                <label class="col-lg-3 col-form-label">No.room:</label>
                                <div class="col-lg-3 mt-2">
                                    <input type="text" name="#" required class="form-control" style="height:30px;width:150px;"> 
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <button type="submit" class="btn btn-primary btn-sm ">ค้นหา</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">ค่าเช่า:</label>
                                <div class="col-lg-9 mt-2">
                                    <input type="text" name="#" required class="form-control" style="height:30px;width:100px;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-4 col-form-label">QR code:</label>
                                <div class="col-lg-8">
                                   <img src="QR-Code.jpg" width="200" height="400">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="file" class="col-lg-4 col-form-label">แนบหลักฐานการโอนเงิน:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="file " type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-4 col-form-label">service:</label>
                                <div class="col-lg-3 mt-2">
                                    <select class="form-select form-select-sm" aria-label="Small select example" style="height:25px;width:100px;">
                                        <option selected>-*.*-</option>
                                        <option value="1">Maid</option>
                                        <option value="2">Technician</option>
                                    </select>
                                </div>
                                <div class="col-lg-5 mt-2">
                                    <input type="date" name="#"  class="form-control" style="height:25px;width:200px;">
                                    <div class="mt-2">
                                    <input type="time" name="#" class="form-control" style="height:25px;width:200px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary btn-sm "><i class="bi bi-arrow-down-square-fill"></i>   Submit</button>
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