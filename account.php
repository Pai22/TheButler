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

    <title>Account</title>
    <script>
        function Edit_Function(id,username,name,gender,email){
        //alert(id+login+gender+email+role+name);
        document.getElementById('user_id').value=id;
        document.getElementById('username').value=username;
        document.getElementById('name').value=name;
        document.getElementById('gender').value=gender;
        document.getElementById('email').value=email;
        }
    </script>
</head>

<body style="background-color:#000000;">
    <?php include "nav.php" ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card mb-3">
                    <div class="card-header text-white fs-5" style="background-color:#C6824B"><i class="bi bi-person-circle text-black" style="font-size:25px"></i> My Account</div>
                    <div class="card-body">
                        <?php
                        $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
                        $room =  $_SESSION['room'];
                        $sql = "select id,username,name,gender,email,number_room,role from user where number_room = $room";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch()) {
                            if (isset($_SESSION['id']) && ($_SESSION['role'] == 'm')) {
                                if ($row[6] == 'm') {
                                    echo "<h4>Room " . $row["number_room"] . "</h4>
                            
                            <label class = col-lg-3 col-form-label>Username :</label>
                            <div class=col-lg-9>
                            <input type= text name=username value= $row[1]  required class=form-control disabled>
                            </div><br>

                            <label class = col-lg-3 col-form-label>Name:</label>
                            <div class=col-lg-9>
                            <input type= text name=name value = $row[2] required class=form-control disabled>
                            </div><br>


                            <label class = col-lg-3 col-form-label>Gender :</label>
                            <div class=col-lg-9>
                                <input type=text name=gender value= $row[3] required class=form-control disabled>
                            </div><br>

                            <label class = col-lg-3 col-form-label>Email :</label>
                              <div class=col-lg-9>
                                <input type=text name=email value= $row[4] required class=form-control disabled>
                            </div><br>

                            <button type='button' onclick=Edit_Function($row[0],'$row[1]','$row[2]','$row[3]','$row[4]')
                            class='btn btn-warning btn-sm' data-bs-toggle='modal' 
                            data-bs-target='#UserModal'><i class='bi bi-pencil-fill'>แก้ไขข้อมูลส่วนตัว</i></button>";
                                }
                            }
                        }
                        $conn = null;
                        ?>
                    </div>
                    <!-- Modal การแก้ไขข้อมูล -->
                    <form action="account_save.php" method="post">
                        <input type="hidden" name="user_id" id="user_id">
                        <div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไขข้อมูลผู้ใช้</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-2">
                                            <label for="login" class="col-form-label">Username:</label>
                                            <input type="text" class="form-control" id="username" name="login" disabled>
                                        </div>
                                        <div class="mb-2">
                                            <label for="name" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="mb-2">
                                            <label for="gender" class="col-form-label">Gender:</label>
                                            <select name="gender" id="gender" class="form-select" required>
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                                <option value="o">Others</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>