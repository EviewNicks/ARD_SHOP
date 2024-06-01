<?php
include '../../Connection.php';

$email = $_POST['Email'];
$password = $_POST['Password'];
$Login_button = $_POST['LogIn-Buton'];

if (isset($Login_button)) {
  $sql = "SELECT username, user_id FROM pengguna WHERE email = '$email' 
  AND password = '$password'";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Login berhasil
    $row = mysqli_fetch_assoc($result); // Dapatkan baris pertama sebagai array asosiatif 
    $user_id = $row['user_id'];// Ekstrak nama pengguna dari baris

    // Kirim username ke profile.php
    session_start(); // Mulai session untuk menyimpan username
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user_id;
    header("Location: ../Profile-Page.php");
    exit(); // Hentikan eksekusi lebih lanjut
  } else {
    echo "<script>alert('Email atau password salah. Silakan coba lagi.'); window.location.href='Masuk_Daftar.php';</script>";
  }
}

?>
