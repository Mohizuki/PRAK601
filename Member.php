<?php
require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Section</title>
    <style>
        .container{
            width: 75%;
        }
    </style>
</head>
<body>
    <div class="container">
        <table border="1" class="table table-dark table-striped">
            <tr>
                <th>Nomor member</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal mendaftar</th>
                <th>Tanggal terakhir bayar</th>
                <th>Aksi</th>
            </tr>
            <?= tampildata("member") ?>
        </table>
    <br>
    <a href="FormMember.php" class="btn btn-success" style="float: right;">Tambah Data</a>
    </div>
</body>
</html>