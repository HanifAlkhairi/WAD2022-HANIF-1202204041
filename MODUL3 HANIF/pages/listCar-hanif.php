<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Car - Hanif</title>
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
              <a class="nav-link" href="home-hanif.php" style="color:#E0E0E0">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:White">My Car</a>
            </li>
          </ul>

          <div class="nav-item">
            <a class="btn btn-light text-primary px-4 my-3" href="add-hanif.php" style="font-size:10px; font-weight:600;">Tambahkan Mobil</a>
          </div>
        </div>
    </nav>

    <div class="add-mainContainer">
        <div class="add-titleContainer">
            <h3>My Showroom</h3>
        </div>

        <div class="add-subtitle">
            <h5 style="font-weight: 300; font-size: 14px; margin-bottom: 60px;">List Show Room Hanif - 1202204041</h5>
        </div>

        <div class="phpset" style="display: flex;">

          <?php
            include '../config/connector.php';
            $data = mysqli_query($connect,"SELECT * FROM showroom_hanif_table1");
            if ($data->num_rows==0) {
              header('location:add-hanif.php');
            }

            while($d = mysqli_fetch_array($data)){?>
              <div class="col" id="car" style="display: flex; justify-content: center; align-items: center;">
                  <div class="card" style="width: 18rem;">
                      <img src="../Assets/<?php echo $d['foto_mobil'];?>" class="card-img-top" alt="<?php echo $d['foto_mobil'];?>" style="height:240px;">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $d['nama_mobil'];?></h5>
                        <p class="card-text"><?php echo $d['deskripsi'];?></p>
                        <a href="detail-hanif.php?id=<?php echo $d['id_mobil'];?>" class="btn btn-primary">Detail</a>
                        <a href="../config/delete.php?id=<?php echo $d['id_mobil']; ?>" class="btn btn-primary" style="margin-left: 10px; background: red;">Hapus</a>
                      </div>
                  </div>
              </div>
          <?php } ?>
        
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>