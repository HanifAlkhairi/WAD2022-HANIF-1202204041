<?php

include '../config/connector.php';

$user = mysqli_query($connect, "SELECT * FROM usr_hanif");
$user_data = mysqli_fetch_assoc($user);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modul 4 Hanif - Home</title>
        <link rel="stylesheet" type="text/css" href="../assets/style/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>

    <!---Navbar--->

    <nav class="navbar fixed-top">
        <div class="container"> 
            <ul class="nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color:white">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="listCar-hanif.php" style="color:#E0E0E0">My Car</a>
                </li>
            </ul>

            <div class="nav-item">
                <a class="btn btn-light text-primary px-4 my-3" href="add-hanif.php" style="font-size:13px; font-weight:600;">Tambahkan Mobil</a>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="font-size:13px; font-weight:600;">
                    <?= $user_data['nama'] ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="../pages/profile-hanif.php" style="font-size:13px; font-weight:600;">Profile</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php" style="font-size:13px; font-weight:600;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-container">
        <div class="title-container">
            <div class="title">
                <h1>Selamat Datang Di
                    Showroom Hanif
                </h1>
            </div>
            
            <div class="subtitle">
                <h5> Disini kamu akan temukan seluruh mobil milik Hanif!</h5>
            </div>

            <a class="btn-hero" href="listCar-hanif.php">
                <button type="button" class="btn btn-primary">My Car</button>
            </a>

            <div class="logoead">
                <img src="../assets/images/logo-ead.png" alt="" width="100" height="30">
                <p>Hanif_1202204041</p>
            </div>
        </div>

        <div class="img-container">
            <img src="../assets/images/car1.jpg" alt="" width="110%">
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html> 