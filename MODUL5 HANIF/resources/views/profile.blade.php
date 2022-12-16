<?php

session_start();

include '../config/connector.php';
$n = $_SESSION['email'];


$user = mysqli_query($connect, "SELECT * FROM user_hanif WHERE email ='$n' ");
$user_data = mysqli_fetch_assoc($user);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modul 4 Hanif - Profile</title>
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
                <a class="nav-link active" aria-current="page" href="home-hanif.php" style="color:white">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="listCar-hanif.php" style="color:#E0E0E0">My Car</a>
                </li>
            </ul>

            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="font-size:13px; font-weight:600;">
                    <?php echo $_SESSION['name'] ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="../pages/profile-hanif.php" style="font-size:13px; font-weight:600;">Profile</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php" style="font-size:13px; font-weight:600;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="forms" style="margin: 90px 200px 90px 200px">
                <div class="add-titleContainer">
                    <h3>Profile</h3>
                </div>

                <form action="../config/update.php" method="POST">
                    <div class="mb-3" style="margin-top: 50px; width: 100%;">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $n ?>" disabled>
                    </div>

                    <div class="mb-3" style="width: 100%;">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="<?= $user_data['nama'] ?>" required>
                    </div>

                    <div class="mb-3" style="width: 100%;">
                        <label for="phone" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" name="phone" value="<?= $user_data['no_hp'] ?>" required>
                    </div>

                    <div class="mb-3" style="width: 100%;">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" name="password" value="<?= $user_data['password'] ?>" required>
                    </div>

                    
                    <input class="mt-5 btn btn-primary col" type="submit" value="Selesai" style="width:150px;">

                </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>