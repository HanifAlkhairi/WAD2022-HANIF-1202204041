<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Item - Hanif</title>
    <link rel="stylesheet" type="text/css" href="../assets/style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>

    <!---Navbar--->

    <nav class="navbar fixed-top" style="background:#3563E9">
        <div class="container">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="home-hanif.php" style="color:#White">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listCar-hanif.php" style="color:White">My Car</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="add-mainContainer">
        <div class="add-titleContainer">
            <h3>Detail Mobil</h3>
        </div>

        <div class="add-subtitle">
            <h5 style="font-weight: 300; font-size: 14px">Detail Mobil <?php echo $d['nama_mobil'] ?></h5>
        </div>
    </div>

  </body>
</html>