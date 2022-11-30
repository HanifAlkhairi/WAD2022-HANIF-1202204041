<?php
include 'connector.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_email = $_POST['email'];
    $user_name = $_POST['nama'];
    $user_phone = $_POST['phone'];
    $user_pass = $_POST['password'];
    
    $s = mysqli_query($connect, "UPDATE user_hanif SET nama_mobil = '$car_name', pemilik_mobil = '$car_owner', merk_mobil = '$car_brand', deskripsi = '$car_desc', status_pembayaran = '$paidoff', foto_mobil = '$car_image' WHERE id_mobil = '$car_id'");

    if ($s) {
        header("Location:../pages/logon-hanif.php?update=berhasil");
    }
    else {
        header("Location:../pages/logon-hanif.php?update=gagal");
    }    
}
?>