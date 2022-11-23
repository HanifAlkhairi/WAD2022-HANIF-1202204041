<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $car_name = $_POST['car-name'];
    $car_owner = $_POST['car-owner'];
    $car_brand = $_POST['car-brand'];
    $own_date = $_POST['own-date'];
    $car_desc = $_POST['car-desc'];
    $paidoff = $_POST['paidOff'];

    $ext	= array('png','jpg','jpeg');
    $car_image = $_FILES['car-image']['name'];
    $x = explode('.', $car_image);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['car-image']['tmp_name'];
    move_uploaded_file($file_tmp, '../assets/'.$car_image);
    
    $s = mysqli_query($connect, "INSERT INTO showroom_hanif_table1 VALUES(0,'$car_name','$car_owner','$car_brand','$own_date','$car_desc','$car_image','$paidoff')");

    if ($s) {
        header("Location:../pages/listCar-hanif.php?add=berhasil");
    }
    else {
        header("Location:../pages/ListCar-hanif.php?add=gagal");
    }    
}
?>