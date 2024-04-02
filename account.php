<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:index.php");
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
    <link href="accountnew.css" rel="stylesheet">
    <title>Account</title>
</head>

<body>
    <?php include "nav.php" ?>
    <div class="container">

        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <br>
                <div class="card">
                    <div class="card-header text-white fs-5" style="background-color:#C6824B"><i class="bi bi-person-circle text-black" style="font-size:25px"></i> My Account</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="row">
                                <label for="fileInput" class="circle-container">
                                    <img src="#" alt="Your Image" id="image">
                                    <div class="icon-overlay" onclick="openFileInput()"><i class="bi bi-upload"> upload image</i></div>
                                    <input type="file" id="fileInput" accept="image/*" onchange="displayImage()">
                                </label>
                                <script>
                                    function displayImage() {
                                        input = document.getElementById("fileInput");
                                        image = document.getElementById("image");
                                        file = input.files[0];
                                        if (file) {
                                            reader = new FileReader();
                                            reader.onload = function(e) {
                                                image.src = e.target.result;
                                            };
                                            reader.readAsDataURL(file);
                                        }
                                    }
                                </script>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">Username :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="login" required class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">Password :</label>
                                <div class="col-lg-9">
                                    <input type="password" name="pwd" id="pwd1" required class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">Re-password :</label>
                                <div class="col-lg-9">
                                    <input type="password" name="pwd2" id="pwd2" onblur="OnBlurPwd()" required class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">Name - Sername :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="name" required class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">Gender :</label>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="m" class="form-check-input" required>
                                        <label class="form-check-label">Male <i class="bi bi-gender-male"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="f" class="form-check-input" required>
                                        <label class="form-check-label">Female <i class="bi bi-gender-female"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="o" class="form-check-input" required>
                                        <label class="form-check-label">Other</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">Email :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="email" required class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-dark btn-sm ">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
    </div>
    <br><br>
    <?php include "nav2.php" ?>
</body>

</html>