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
        <?php
        include '../config/connector.php';
        #$id_mobil = $_GET['id_mobil'];
        $data = mysqli_query($connect,"SELECT * FROM showroom_hanif_table1");
        while ($d = mysqli_fetch_array($data)){?>
        <div class="add-titleContainer">
            <h3>Detail Mobil</h3>
        </div>

        <div class="add-subtitle">
            <h5 style="font-weight: 300; font-size: 14px">Detail Mobil <?php echo $d['nama_mobil'] ?></h5>
        </div>

        <div class="col" id="car">
            <img class="rounded shadow" src="../assets/<?php echo $d['foto_mobil']?>" alt="<?php echo $d['foto_mobil']?>">
        </div>

        <form action="../config/edit.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3" style="margin-top: 50px">
              <label for="car-name" class="form-label">Nama Mobil</label>
              <input type="text" class="form-control" name="car-name" placeholder="Hyundai Ioniq 5" value="<?php echo $d['nama_mobil']?>">
            </div>
            <div class="mb-3">
              <label for="car-owner" class="form-label">Nama Pemilik</label>
              <input type="text" class="form-control" name="car-owner" placeholder="Hanif - 1202204041" value="<?php echo $d['pemilik_mobil']?>">
            </div>
            <div class="mb-3">
              <label for="car-brand" class="form-label">Merk</label>
              <input type="text" class="form-control" name="car-brand" placeholder="Hyundai" value="<?php echo $d['merk_mobil']?>">
            </div>
            <div class="mb-3">
              <label for="own-date" class="form-label">Tanggal Beli</label>
              <input type="date" class="form-control" name="own-date" value="<?php echo $d['tanggal_beli']?>">
            </div>
            <div class="mb-3">
              <label for="car-desc" class="form-label">Deskripsi</label>
              <textarea class="form-control mb-3" aria-label="With textarea" name="car-desc" rows="4"><?php echo $d['deskripsi']?></textarea>
            </div>
            <div class="mb-3">
              <label for="paidOff" class="form-label">Status Pembayaran</label>
              <div id="paidOff">
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="paidOff" id="Lunas" value="Lunas" <?php if($d['status_pembayaran']=='Lunas') echo 'checked'?>>
                  <label class="form-check-label" for="lunas">Lunas</label>
                </div>

                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="paidOff" id="belumLunas" value="Belum Lunas" <?php if($d['status_pembayaran']=='Belum Lunas') echo 'checked'?>>
                  <label class="form-check-label" for="belumLunas">Belum Lunas</label>
                </div>
              </div>
            </div>

            <input type="submit" class="mt-5 btn btn-primary col" href="../config/edit.php?id=<?php echo $d['id_mobil']; ?>" value="Simpan" style="width:150px; margin-bottom: -20px;"> <br>
            <a class="mt-5 btn btn-primary col" href="../pages/detail-hanif.php?id=<?php echo $d['id_mobil']; ?>" style="width:150px; margin-bottom: 50px;">Kembali</a>
        </div>

        </form>

        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>