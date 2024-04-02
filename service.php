<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The butler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: black;
            color: #FFFFFF;
        }   
        .custom-btn {
        background-color:#C6824B; 
        color: #fff; 
        }
        .custom-btn:active {
        background-color: #7E3B15; /*เมื่อกด*/
        }
    </style>
</head>
<body>
<div class="container">
    <h1 style="text-align: center;">The Butler</h1>
    <?php include "nav.php" ?>
    <div class="row mt-5">
        <div class="col-lg-3 col-md-2 col-sm-1"></div>
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card text-light bg-black border-4 rounded-4" style="border-color: #C6824B;">
                <div class="card-body">
                    <form action="newpost_save.php" method="post">
                        <div class="row mb-3"> </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 col-form-label">Maid :</label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <input type="radio" name="gender" value="m" class="form-check-input" required>
                                    <label class="form-check-label">วันจันทร์ ที่ 15 เมษายน 2567 เวลา 09.00 - 11.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="o" class="form-check-input" required>
                                    <label class="form-check-label">วันอังคาร ที่ 16 เมษายน 2567 เวลา 09.00 - 11.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันพุธ ที่ 17 เมษายน 2567 เวลา 09.00 - 11.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันพฤหัสบดี ที่ 18 เมษายน2567 เวลา 09.00 - 11.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันศุกร์ ที่ 19 เมษายน 2567 เวลา 09.00 - 11.00 น.</label>
                                </div>
                            </div>
                        </div>
                    </form>
                              
                    <form action="newpost_save.php" method="post">
                        <div class="row mb-3"> 
                            <label class="col-lg-3 col-form-label">Technician :</label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันจันทร์ ที่ 15 เมษายน 2567 เวลา 13.00 - 15.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันอังคาร ที่ 16 เมษายน 2567 เวลา 13.00 - 15.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันพุธ ที่ 17 เมษายน 2567 เวลา 13.00 - 15.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันพฤหัสบดี ที่ 18 เมษายน 2567 เวลา 13.00 - 15.00 น.</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                                    <label class="form-check-label">วันศุกร์ ที่ 19 เมษายน 2567 เวลา 13.00 - 15.00 น.</label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-2">
                              <button type="submit" class="btn btn-sm custom-btn" onclick="return myFunction();"><i class="bi bi-cloud-download-fill"></i> Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        let r = confirm("กรุณากดยืนยัน");
        if (r == true) {
            alert("You pressed OK");
            return true; 
        } else {
            alert("You pressed Cancel");
            return false; 
        }
    }
</script>


</body>
</html>
