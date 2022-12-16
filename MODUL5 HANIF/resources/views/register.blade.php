<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modul 5 Hanif - Register</title>
        <link rel="stylesheet" type="text/css" href="../resources/css/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') {$_SESSION['register'] = ''; ?>
        <div class="alert alert-warning m-0 p-2 alert-dismissable" role="alert">Email Anda Sudah Pernah Terdaftar!
            <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <body>
        <div class="container" style="display:flex; justify-content: center; align-items: center; gap: 250px; height: 700px;">
            <div class="img-container">
                <img src="{{ asset('assets/car1.jpg')}}" alt="" width="100%">
            </div>

            <div class="forms">
                <div class="add-titleContainer" style="padding-top: 50px">
                    <h3>Register</h3>
                </div>

                <div class="add-subtitle">
                    <h5 style="font-weight: 300; font-size: 14px">Yuk buat akun baru!</h5>
                </div>

                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" style="margin-top: 20px; width: 500px;">
                        <label for="email" class="form-label">Email</label> <a style="color: red;">*</a>
                        <input type="email" class="form-control" name="email" placeholder="***@email.com">
                    </div>
                    <div class="mb-3" style="width: 500px;">
                        <label for="nama" class="form-label">Nama</label> 
                        <input type="text" class="form-control" name="nama" placeholder="Siapa nama kamu?">
                    </div>
                    <div class="mb-3" style="width: 500px;">
                        <label for="phone" class="form-label">Nomor Handphone</label> <a style="color: red;">*</a>
                        <input type="text" class="form-control" name="phone" placeholder="08XXXXXXXXXX" required>
                    </div>
                    <div class="mb-3" style="width: 500px;">
                        <label for="password" class="form-label">Kata Sandi</label> <a style="color: red;">*</a>
                        <input type="password" class="form-control" name="password" placeholder="********" onkeyup='check();' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationServer03" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control <?php if (isset($_GET['failed'])) {
                            if ($_GET['failed']=="passwordIncorrect") {
                                echo "is-invalid";
                            }}?>" name="confirmPassword" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        Password Tidak Sesuai!
                        </div>
                    </div>

                    <input type="submit" class="mt-5 btn btn-primary col" value="Daftar" name="register" style="width:150px; margin-bottom: -40px;">
                </form>

                <div class="text-login" style="margin: 60px 20px 20px 0px;">
                    <p class="text-login">Kamu Sudah Punya Akun? <a href="login">Login</a></p>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>