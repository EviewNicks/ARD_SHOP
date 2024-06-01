<?php
include('../../Connection.php');

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: Masuk_daftar.php");
    exit();
}

if (isset($_POST['succes_order'])) {
    $user_id = $_SESSION['user_id'];

    // Update payment_status menjadi 'success'
    $update_query = "UPDATE transaksi SET payment_status = 'success' WHERE user_id = ? AND payment_status = 'waiting'";
    $stmt_update = mysqli_prepare($connection, $update_query);
    mysqli_stmt_bind_param($stmt_update, 'i', $user_id);
    
    if (mysqli_stmt_execute($stmt_update)) {
        echo "<script>alert('Pesanan berhasil dikonfirmasi!'); window.location.href='../Profile-Page.php'; </script>";
        // Redirect kembali ke halaman transaksi_order.php
        exit();
    } else {
        echo "<script>alert('Gagal mengkonfirmasi pesanan!'); window.location.href='../History-Transaksi.php';</script>";
        // Redirect kembali ke halaman transaksi_order.php
        exit();
    }
} else {
    // Jika akses langsung ke file success_order.php tanpa melalui form konfirmasi, redirect kembali ke halaman transaksi_order.php
    header("Location: ../History-Transaksi.php");
    exit();
}

mysqli_close($connection);
?>
