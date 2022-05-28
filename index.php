<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #dedede;
            padding: 0 60px;
        }
        .container{
            width: 80%;
	        margin: auto;
	        text-align: center;
	        padding-top: 50px;
        }
        .card{
            flex-basis: 30%;
            margin-right: 10px;
	        border-radius: 10px;
	        margin-bottom: 30px;
	        position: relative;
	        overflow: hidden;
        }
        .card a{
            color: black;
	        text-decoration: none;
	        font-size: 13px;
	        font-family: "playfair-display";
        }
        .card img{
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<section>
    <div class="header">
        <h1>Welcome to Admin Panel - <?php echo $_SESSION['AdminLoginId']?></h1>
        <form action="" method="POST">
        <button class="login100-form-btn" name="Signout">LOG OUT</button>
        </form>
    </div>

</section>

<section class="container">
    <div class="row">    
        <div class="card">
            <a href="Member.php">
            <img src="https://png.pngtree.com/png-vector/20190214/ourmid/pngtree-people-icon-business-corporate-team-working-together-social-network-png-image_448334.jpg" class="rounded" alt="..." width="200px" height="200px">
            <h1 style="position: center;">Data Member</h1>
            </a>
        </div>
        <div class="card">
            <a href="Buku.php">
            <img src="https://png.pngtree.com/template/20190316/ourmid/pngtree-books-logo-image_79143.jpg" class="rounded" alt="..." width="200px" height="200px">
            <h1 style="position: center;">Data Buku</h1>
            </a>
        </div>
        <div class="card">
            <a href="Peminjaman.php">
            <img src="https://thumbs.dreamstime.com/b/hand-giving-open-book-filled-outline-icon-hand-giving-open-book-filled-outline-icon-line-vector-sign-linear-colorful-pictogram-121375538.jpg" class="rounded" alt="..." width="200px" height="180px">
            <h1 style="position: center;">Data Peminjaman</h1>
            </a>
        </div>
    </div>
</section>


<?php
    if(isset($_POST['Signout'])){
        session_destroy();
        header('location: Login.php');
    }

?>
</body>
</html>