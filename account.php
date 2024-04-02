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
        function Edit_Function(id,username,password,name,gender,email,image){
            //alert(id+login+gender+email+role+name);            
            document.getElementById('image').value=image;
            document.getElementById('username').value=username;
            document.getElementById('password').value=password;
            document.getElementById('name').value=name.replace(/###/g,' ');
            document.getElementById('gender').value=gender;
            document.getElementById('email').value=email;
           
        }
    </script>
</head>
<body style="background-color:#000000;">
<?php include "nav.php" ?>
    <div class="container">
        
        <div class = "row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
            <?php

                    if(isset($_SESSION['editaccount'])){
						if($_SESSION['editaccount']==0){
							echo "<div class='alert alert-danger'>
							การแก้ไขข้อมูลผู้ใช้งานมีปัญหา</div>";
						}else{
							echo "<div class='alert alert-success'>
							แก้ไขข้อมูลผู้ใช้งานเรียบร้อยแล้ว</div>";
						}
						unset($_SESSION['editaccount']);
					}

				?>
                <div class="card">
                    <div class="card-header text-white fs-5" style="background-color:#C6824B"><i class="bi bi-person-circle text-black" style="font-size:25px"></i> My Account</div>
                    <div class="card-body">
                    <?php 
                    $conn=new PDO("mysql:host=localhost;dbname=butler;charset=utf8","root","");
                    $sql="select id,username,name,gender,email,image from user";
                    $result=$conn->query($sql);
                    
                    while($row = $result->fetch()){                        
                            echo 
                            "<label class = col-lg-3 col-form-label>Username :</label>
                            <div class=col-lg-9>
                            <input type= text name= username value= $row[1]  required class=form-control disabled>
                            </div><br>
                            
                            <label class = col-lg-3 col-form-label>Password :</label>
                              <div class=col-lg-9>
                                <input type=password name=pwd required class=form-control>
                              </div><br>

                              <label class = col-lg-3 col-form-label>Re-password :</label>
                              <div class=col-lg-9>
                                <input type=password name=pwd required class=form-control>
                              </div><br>

                              <label class = col-lg-3 col-form-label>Name - Sername :</label>
                              <div class=col-lg-9>
                                <input type=text name=name value= $row[2] required class=form-control>
                              </div><br>

                            <label class = col-lg-3 col-form-label>Email :</label>
                              <div class=col-lg-9>
                                <input type=text name=email value= $row[4] required class=form-control>
                            </div><br>";
                    }
                    $conn=null;
                    ?>
                </div>
                <!-- Modal การแก้ไขข้อมูล -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
</body>

</html>