<?php

include 'connector.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $passwd = $_POST['password'];

    $s  = mysqli_query($connect, "UPDATE user_hanif SET password = '$passwd' WHERE email = '$email'");

    if($s){
        header("Location:../pages/listCar-hanif.php?edit=sukses");
    } else {
        header("Location:../pages/listCar-hanif.php?edit=gagal");
    }
}

?>