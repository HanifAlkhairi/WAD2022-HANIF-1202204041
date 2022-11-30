<?php
include 'connector.php';
    
$id_mobil = $_GET['id'];
$s = mysqli_query($connect,"DELETE FROM showroom_hanif_table WHERE id_mobil=$id_mobil");
if ($s) {
    header("Location:../pages/listCar-hanif.php?delete=berhasil");
}else {
    header("Location:../pages/listCar-hanif.php?delete=gagal");
}

?>