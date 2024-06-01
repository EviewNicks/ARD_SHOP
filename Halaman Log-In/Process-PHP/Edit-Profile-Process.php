<?php
include '../../Connection.php';

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$save_button = $_POST['Save-Profile'];

if (isset($save_button)) {

    if ($password === $confirm) {
    $simpan_data = "Update pengguna set username = '$username', email = '$email', address = '$address',
    phone_number = '$phone_number', password = '$password' where user_id = '$user_id' " ;
    
         if(mysqli_query($connection, $simpan_data)) {
            echo " <script>alert('Edit Profile Berhasil!'); window.location.href='../Profile-Page.php' ; </script>";
         } else {
            echo "<script>alert('Edit Profile gagal!'); window.location.href='../Edit-Profile.php'; </script>";
         }

    } else {
        echo "<script>alert('Konfirmasi password tidak sesuai!'); window.location.href ='../Edit-Profile.php';</script>";
    }

} else {
        echo "Error : ". mysqli_errno($connection);
}

mysqli_close($connection);


?>