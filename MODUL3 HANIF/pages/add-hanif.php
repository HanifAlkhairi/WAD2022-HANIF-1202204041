<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Item - Hanif</title>
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
              <a class="nav-link" href="home-hanif.php" style="color:White">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listCar-hanif.php" style="color:White">My Car</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="add-mainContainer">
        <div class="add-titleContainer">
            <h3>Tambah Mobil</h3>
        </div>

        <div class="add-subtitle">
            <h5 style="font-weight: 300; font-size: 14px">Tambah Mobil Baru Anda ke List Show Room</h5>
        </div>

        <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3" style="margin-top: 50px">
              <label for="car-name" class="form-label">Nama Mobil</label>
              <input type="text" class="form-control" name="car-name" placeholder="Hyundai Ioniq 5">
            </div>
            <div class="mb-3">
              <label for="car-owner" class="form-label">Nama Pemilik</label>
              <input type="text" class="form-control" name="car-owner" placeholder="Hanif - 1202204041">
            </div>
            <div class="mb-3">
              <label for="car-brand" class="form-label">Merk</label>
              <input type="text" class="form-control" name="car-brand" placeholder="Hyundai">
            </div>
            <div class="mb-3">
              <label for="own-date" class="form-label">Tanggal Beli</label>
              <input type="date" class="form-control" name="own-date" value="2022-11-20">
            </div>
            <div class="mb-3">
              <label for="car-desc" class="form-label">Deskripsi</label>
              <textarea class="form-control mb-3" aria-label="With textarea" name="car-desc" rows="4"></textarea>
            </div>
            <div class="mb-3">
              <label for="car-image" class="form-label">Foto</label>
              <input type="file" class="form-control col me-5" name="car-image" accept=".jpg,.png,.jpeg">
            </div>
            <div class="mb-3">
              <label for="paidOff" class="form-label">Status Pembayaran</label>
              <div id="paidOff">
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="paidOff" id="Lunas" value="Lunas">
                  <label class="form-check-label" for="lunas">Lunas</label>
                </div>

                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="paidOff" id="belumLunas" value="Belum Lunas">
                  <label class="form-check-label" for="belumLunas">Belum Lunas</label>
                </div>
              </div>
            </div>
            
            <input type="submit" class="mt-5 btn btn-primary col" value="Selesai" style="width:150px; margin-bottom: 100px;">

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>