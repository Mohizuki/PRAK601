<?php require('./Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>

<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location:error.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <style>
        body {
            text-align: center;
        }
        form {
            margin-top: 10px;
            width: 25%;
            display: inline-block;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table class="table table-dark table-striped">
            <tr>
                <td>
                    Judul :
                </td>
                <td>
                    <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Penulis :
                </td>
                <td>
                    <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Penerbit :
                </td>
                <td>
                    <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Terbit :
                </td>
                <td>
                    <input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php 
                    if (isset($_GET['id_buku'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    }
                    else {
                        echo "<button type=\"submit\" name=\"submit\" class=\"btn btn-success\" style=\"float:right\">Tambah</button>";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        tambahdatabuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updatebuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>
</body>
</html>