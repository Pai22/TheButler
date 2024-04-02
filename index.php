<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("#");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Butler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        function myFunction() {
            let r = confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
    </script>
</head>

<body style="background-color:#000000;">
    <?php include "nav.php" ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-2 col-md-1 col-sm-1"></div>
            <div class="col-lg-8 col-md-10 col-sm-10">
                <div class="container centered-box">
                    <p><i class="bi bi-newspaper"></i> News</p>
                    <div class="mt-3 d-flex justify-content-between">

                        <table class="table table-borderless  mt-4">
                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                            if (isset($_GET['catid'])) {
                                $catid = $_GET['catid'];
                                $sql = "SELECT t3.name,t1.title,t1.id,t2.login,t1.post_date,t1.user_id FROM post as t1
                                INNER JOIN user as t2 ON (t1.user_id = t2.id)
                                INNER JOIN category as t3 ON (t1.cat_id=t3.id) WHERE (t1.cat_id = $catid) ORDER BY t1.post_date DESC";
                            } else {
                                $sql = "SELECT t3.name,t1.title,t1.id,t2.login,t1.post_date,t1.user_id FROM post as t1
                                INNER JOIN user as t2 ON (t1.user_id = t2.id)
                                INNER JOIN category as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                            }
                            $result = $conn->query($sql);
                            while ($row = $result->fetch()) {
                                echo "<tr><td>[ $row[0] ] <a href=post.php?id=$row[2]
                                style = text-decoration:none>$row[1]</a><br>$row[3] - $row[4]</td>";
                                if (isset($_SESSION['id']) && ($_SESSION['role'] == 'a' || $_SESSION['user_id'] == $row['5'])) {
                                    echo "<td>";
                                    echo "<a href=delete.php?id=$row[2] class = 'btn btn-danger btn-sm mt-2 float-end me-3'
                                    onclick = 'return myFunction()'>
                                    <i class='bi bi-trash'></i></a>";
                                    if ($_SESSION['user_id'] == $row['5']) {
                                        echo "<a href=editpost.php?id=$row[2]
                                        class = 'btn btn-warning btn-sm mt-2 float-end me-2'>
                                            <i class='bi bi-pencil-fill'></i></a>";
                                    }
                                    echo "</td>";
                                } else {
                                    echo "<td></td>";
                                }
                                echo "</tr>";
                            }
                            $conn = null;
                            ?>
                        </table>
                    </div>
                </div>

                <div class="col-lg-2 col-md-1 col-sm-1"></div>
            </div>
        </div>
    </div>

    <?php include "nav2.php" ?>


</body>

</html>