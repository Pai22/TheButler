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
    <title>Service</title>
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

<body style="background-color: black;">
    <div class="container">
        <?php include "nav.php" ?>

        <span>
            <div class="mt-5 mb-3 d-flex justify-content-between " style="float:left ;">
                <h6 style="color: white;"><i class="bi bi-gear"></i> Service</h6>
            </div>
            <div class="mt-5 mb-3 mr-5 d-flex justify-content-between" style="float:right ;">
            </div>
        </span>

        <table class="table table-striped mt-4">

            <?php
            $conn = new PDO("mysql:host=localhost;dbname=butler;charset=utf8", "root", "");
            $sql = "SELECT t1.user_id,t2.datetime,t2.service,t3.number_room FROM services as t1
            INNER JOIN myroom as t2 ON (t1.user_id = t2.user_id)
            INNER JOIN user as t3 ON (t1.user_id=t3.id) ORDER BY t2.datetime DESC";
            $result = $conn->query($sql);
            while ($row = $result->fetch()) {
                echo "<tr><td>
                                    <div class='card ' style=width: 10rem;>
                                        <div class='card-body'>
                                            <p class='card-text'>$row[3] style = text-decoration:none>$row[0]<br>$row[2] - $row[1]</p>";
                if (isset($_SESSION['id']) && ($_SESSION['role'] == 's')) {
                    echo "<a href=delete.php?id=$row[2] class = 'btn btn-danger btn-sm mt-2 float-end me-3'
                                            onclick = 'return myFunction()'><i class='bi bi-trash'></i> Delete</a>
                                            
                                         </div>
                                    </div>
                                
                                    </td>";
                    echo "</tr>";
                }
            }
            $conn = null;
            ?>
        </table>
    </div>
</body>

</html>