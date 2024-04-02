<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="accountnew.css" rel="stylesheet">
    <title>Account</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center">The Butler</h1>
        <?php include "nav2.php" ?>
        <br>
            <div class="container-lg">
                <div class="card align-middle" style="width: 30rem; align: center">
                    <div class="card-header text-white fs-5" style ="background-color:#C6824B"><i class="bi bi-person-fill text-black" style="font-size:25px"></i> Room 111</div>
                    <div class="card-body"> 
                        <table class="table">
                            <tbody>
                                <tr class = "table-danger"><td> เดือนมีนาคม</td>
                                                           <td>
                                                               <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-receipt text-danger" style = "font-size:20px"></i></button>
                                                                <!-- Modal -->
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
                                                                    </div>
                                                                <button class = 'btn btn-danger btn-sm mt-1'>confirm</button>
                                                           </td>
                                </tr>
                                <tr class = "table-warning"><td> เดือนกุมภาพันธ์</td>
                                                            <td>
                                                               <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-receipt text-warning" style = "font-size:20px"></i></button>
                                                                <!-- Modal -->
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
                                                                    </div>
                                                                <button class = 'btn btn-warning btn-sm mt-1'>confirm</button>
                                                           </td>
                                <tr class = "table-success"><td> เดือนมกราคม</td> 
                                                            <td>
                                                            <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-receipt text-success" style = "font-size:20px"></i></button>
                                                                <!-- Modal -->
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
                                                                    </div>
                                                            </td>
        
                                              
                            </tbody>
                    </div>
                </div>
            </div>

    </div>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerE1) {
            return new bootstrap.tooltip(tooltipTriggerE1)
        });
    </script>
</body>
</html>