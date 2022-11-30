<?php
include 'connector.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $car_id = $_POST['id'];
    $car_name = $_POST['car-name'];
    $car_owner = $_POST['car-owner'];
    $car_brand = $_POST['car-brand'];
    $own_date = $_POST['own-date'];
    $car_desc = $_POST['car-desc'];
    $paidoff = $_POST['paidOff'];

    $ext	= array('png','jpg','jpeg');
    $car_image = $_FILES['car-image']['name'];

    if (!empty($car_image)) {
        $x = explode('.', $car_image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['car-image']['tmp_name'];
        move_uploaded_file($file_tmp, '../assets/'.$car_image);
        
        $s = mysqli_query($connect, "UPDATE showroom_hanif_table SET nama_mobil = '$car_name', pemilik_mobil = '$car_owner', merk_mobil = '$car_brand', deskripsi = '$car_desc', status_pembayaran = '$paidoff', foto_mobil = '$car_image' WHERE id_mobil = '$car_id'");
    }

    else {
        $s = mysqli_query($connect, "UPDATE showroom_hanif_table SET nama_mobil = '$car_name', pemilik_mobil = '$car_owner', merk_mobil = '$car_brand', deskripsi = '$car_desc', status_pembayaran = '$paidoff' WHERE id_mobil = '$car_id'");    
    }
    

    if ($s) {
        header("Location:../pages/listCar-hanif.php?add=berhasil");
    }
    else {
        header("Location:../pages/ListCar-hanif.php?add=gagal");
    }    
}
?>