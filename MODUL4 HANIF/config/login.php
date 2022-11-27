<?php
if (!isset($_SESSION)){
    session_start();
}

require 'connector.php';

$username = $_POST['email'];
$password = $_POST['password'];

$dt_username = "SELECT * FROM user_hanif WHERE email = '$username' AND password = '$password'";
$executeQuery = mysqli_query($connect, $dt_username);

if (mysqli_num_rows($executeQuery) == 1){
    $result = mysqli_fetch_assoc($executeQuery);

    if ($result['email'] == $username && $result['password'] == $password){
        echo "Logged in!";
        $_SESSION['email'] = $result['email'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['id'] = $result['id'];
        header("location: ../pages/logon-hanif.php?login=berhasil");
        exit();
        
    } else {
        echo "Gagal Login Nih! ☹️";
        header("location: ../pages/login-hanif.php?login=gagal");
        exit();
    }
}

$_SESSION['message-error'] = 'Gagal Login';
header('location: ../pages/login-hanif.php');
exit();
?>