<?php
include '../../Connection.php';


function Unique_id ($connection) {
    $nilai_awal = "2302";
    do {
        $user_id = $nilai_awal . rand(1000, 9999);
        $query = " SELECT * FROM pengguna WHERE user_id = $user_id";
        $result = mysqli_query($connection, $query);
    } while (mysqli_num_rows($result) > 0 );
    return $user_id;
}

$Id_user = Unique_id($connection);
$username = $_POST['Username'];
$email = $_POST['Email'];
$address = $_POST['Address'];
$Phone_number = $_POST['PhoneNumber'];
$Password = $_POST['Password'];
$Confirm = $_POST['Confirm'];

    // cek apakah email yang di masukkan udah ada dalam database
    $query = "SELECT * FROM pengguna WHERE email = '$email'";
    $check_email = mysqli_query($connection, $query);


    if(mysqli_num_rows($check_email) > 0) {
        echo "<script>alert('Email sudah Terdaftar!'); window.location.href='../SignUp.php'</script>";
        
    } else {
        if ($Password === $Confirm) {
            $insert = "INSERT INTO pengguna (user_id, username, email, password, address, phone_number, registration_date)
                     VALUES ($Id_user, '$username', '$email','$Password','$address','$Phone_number', NOW())";
                
                if(mysqli_query($connection, $insert)) {
                    echo " <script>alert('pendaftaran Berhasil!'); window.location.href='../LogIn-Page.php'; </script>";
                } else {
                    echo "<script>alert('Pendaftaran gagal!'); window.location.href='../SignUp.php'; </script>";
                }
        } else {
            echo "<script>alert('Konfirmasi password tidak sesuai!'); window.location.href ='../SignUp.php';</script>";
        }
        
    }

    mysqli_close($connection);
?>