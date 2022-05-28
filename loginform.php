<?php
session_start();
require("./Koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class="parent" style="position: relative;">
    <div class="containers" style="width: 300px; left: 50%; position: absolute; top: 50%; transform: translate(-50%, 150%);">
        <table border="1" class="table table-dark table-striped">
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php
            $stmt = koneksi()->prepare("SELECT * FROM admin_login");
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['Admin_Name'] . "</td>";
                echo "<td>" . $row['Admin_Password'] . "</td>";
                echo "</tr>";
            }
            header("refresh: 5; url=login.php");
            ?>
        </table>
    </div>
    </div>
</body>
</html>