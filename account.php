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

                              <label class = col-lg-3 col-form-label>Gender :</label>
                              <div class=col-lg-9>
                                    <div class=form-check>
                                        <input type=radio name=gender value=$row[3] class=form-check-input required>
                                        <label class=form-check-label>Male</label>
                                    </div>
                                    <div class=form-check>
                                        <input type=radio name=gender value=$row[3] class=form-check-input required>
                                        <label class=form-check-label>Female</label>
                                    </div>
                                    <div class=form-check>
                                        <input type=radio name=gender value=$row[3] class=form-check-input required>
                                        <label class=form-check-label>Other</label>
                                    </div>
                                </div><br>

                              <label class = col-lg-3 col-form-label>Email :</label>
                              <div class=col-lg-9>
                                <input type=text name=email required class=form-control>
                              </div><br>";
                          
                        }
                    
                    $conn=null;

                    ?>

                    
                </table>
                <!-- Modal การแก้ไขข้อมูล -->
                <div class="card">
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
                                    <label class = col-lg-3 col-form-label>Username :</label>
                                        <input type="text" class="form-control" id="login" name="login" disabled>
                                    </div>    
                                    
                              <div class=col-lg-9>
                               <input type=text name=login required class=form-control>
                              </div><br>
                                    <div class="mb-2">
                                        <label for="name" class="col-form-label">ชื่อ-นามสกุล:</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div> 
                                    <div class="mb-2">
                                        <label for="gender" class="col-form-label">เพศ:</label>
                                        <select name="gender" id="gender" class="form-select" required>
                                            <option value="m">ชาย</option>
                                            <option value="f">หญิง</option>
                                            <option value="o">อื่นๆ</option>
                                        </select>
                                    </div> 
                                    <div class="mb-2">
                                        <label for="email" class="col-form-label">Email :</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div> 
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