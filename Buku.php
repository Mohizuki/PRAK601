<?php
require('./Model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            width: 45%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Section</title>
</head>
<body>
    <div class="container">
        <table border="1" class="table table-dark table-striped">
            <tr>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?= tampildata("buku") ?>
        </table>
    <br>
    <a href="FormBuku.php" class="btn btn-success" style="float: right;">Tambah Data</a>
    </div>
</body>
</html>