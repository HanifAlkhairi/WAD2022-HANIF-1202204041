<?php

include 'connector.php';

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nohp = $_POST["phone"];
    $pwd = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($pwd !== $confirmPassword) {
        echo "Password Konfirmasi Tidak Sesuai!";
        return false;
    }

    $s = "INSERT INTO user_hanif VALUES(0, '$nama','$email','$pwd','$nohp')";

    $s_cek = "SELECT email FROM user_hanif WHERE email = '$email'";
    $cek = $connect->query($s_cek);;

    if (mysqli_query($connect, $s)){
        session_start();
        $_SESSION['message'] = 'Berhasil Terdaftar';
        header("location: ../pages/login-hanif.php");
    } else{
        header("location: ../pages/register-hanif.php");
    }

    if ($cek -> num_rows > 0){
        session_start();

        while ($row = $cek -> fetch_assoc()) {

            $email = $_POST['email'];
            $email_cek = $row['email'];
            $nama = $row['nama'];
            $uid = $row['id'];
        }

        if ($email == $email_cek){
            $_SESSION['register'] = 'gagal';
            header("location: ../pages/register-hanif.php");
        }
    }
?>