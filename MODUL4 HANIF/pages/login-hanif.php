<?php

$value = "Cookies WAD";
$message = false;
if (isset($_POST['rememberMe'])) {
    setcookie("MyCookie", $value, time() + 3600);
    $message = 'Cookie Berhasil Disimpan';
}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modul 4 Hanif - Login</title>
        <link rel="stylesheet" type="text/css" href="../assets/style/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        <div class="container" style="display:flex; justify-content: center; align-items: center; gap: 250px; height: 700px;">
            <div class="img-container">
                <img src="../assets/images/car1.jpg" alt="" width="100%">
            </div>

            <div class="forms">
                <div class="add-titleContainer">
                    <h3>Login</h3>
                </div>

                <div class="add-subtitle">
                    <h5 style="font-weight: 300; font-size: 14px">Yuk Masuk!</h5>
                </div>

                <form action="../config/login.php" method="POST">
                    <div class="mb-3" style="margin-top: 50px; width: 500px;">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="***@email.com">
                    </div>
                    <div class="mb-3" style="width: 500px;">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" name="password" placeholder="********">
                    </div>
                    <div class="mb-3">
                        <div id="rememberMe">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="rememberMe" value="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="mt-5 btn btn-primary col" name="login" value="Login" style="width:150px; margin-bottom: -40px;">
                </form>

                <div class="text-login" style="margin: 60px 20px 20px 0px;">
                    <p class="text-login">Kamu Belum Punya Akun? ☹️ <a href="register-hanif.php">Yuk Daftar!</a></p>
                </div>

            </div>
        
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>