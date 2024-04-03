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
    <title>bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: black;">
        <?php include "nav.php" ?>
        <div class="container" style="margin-top: 50px;">
            <div class="card bg-dark">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs text-w">
                        <li class="nave-item"><a href="#" class="nav-link">ค่าน้ำ</a></li>
                        <li class="nave-item"><a href="#" class="nav-link">ค่าไฟ</a></li>
                        <li class="nave-item"><a href="#" class="nav-link">ค่าห้อง</a></li>
                        <li class="nave-item"><a href="#" class="nav-link">รวม</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <span>
            <div class="mt-5 mb-3 d-flex justify-content-between " style="float:left ;">
                <h6 style="color: white;"><i class="bi bi-building-fill"></i> Total Rooms</h6>
            </div>
                <table class="table">
                    <tbody>
                        <tr class = "table-danger"><td> Room : </td>
                            <td>
                                <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-receipt text-danger" style = "font-size:20px"></i></button>
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Receipt</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        <div class="modal-body">
                                            <img src="bill.jpg" class="img-fluid" id="image">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                <button type="button" class = 'btn btn-danger btn-sm mt-1'>confirm</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </span>
</body>
</html>