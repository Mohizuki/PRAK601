<?php require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
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
    <title>Tambah Peminjaman</title>
    <style>
        .container{
            margin-top: 20px;
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <table class="table table-dark table-striped">
                <tr>
                    <td>
                        Tanggal Peminjaman
                    </td>
                    <td>
                        <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Kembali
                    </td>
                    <td>
                        <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>           
                <tr>
                    <td></td>
                    <td>
                        <?php 
                        if (isset($_GET['id_peminjaman'])) {
                            echo "<button type=\"submit\" name=\"update\">Update</button>";
                        }
                        else {
                            echo "<button type=\"submit\" name=\"submit\"  class=\"btn btn-success\" style=\"float:right\">Tambah</button>";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) { 
        tambahdatapeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
        updatepeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    ?>
</body>
</html>