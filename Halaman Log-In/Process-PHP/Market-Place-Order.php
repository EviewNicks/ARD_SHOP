<?php
session_start();
include '../../Connection.php';

if(!isset($_SESSION['user_id'])) {
    header("Location: Masuk_Daftar.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'] ;
$order_quantity = 1;
$payment_status = 'waiting';

function Unique_transaction_id($connection) {
    $nilai_awal = "2402";
    do {
        $transaction_id = $nilai_awal .  rand(1000, 9999);
        $query = "SELECT * FROM transaksi WHERE transaction_id = $transaction_id";
        $result = mysqli_query($connection, $query);
    } while (mysqli_num_rows($result) > 0);
    return $transaction_id;
}

mysqli_begin_transaction($connection);

try {
     // Update Stock produk
    $update_stock = "UPDATE products SET stock = stock - $order_quantity
    WHERE product_id = $product_id AND stock >= $order_quantity";

    if (!mysqli_query($connection, $update_stock)) {
        throw new Exception("Error updating stock: ". mysqli_error($connection));
    }

    if (mysqli_affected_rows($connection) == 0) {
        throw new Exception("Stock is not sufficient.");
    }


    //memeriksa apakah ada product dengan status : 'waiting';
    $check_product = "SELECT * FROM transaksi WHERE user_id = $user_id 
        and product_id = $product_id and payment_status = '$payment_status' ";
    $check = mysqli_query($connection, $check_product);

    if(mysqli_num_rows($check) > 0 ) {
        // jika ada maka tambahkan bagian order saja 
        $update_quantity_product = "UPDATE transaksi SET order_quantity = 
            order_quantity + $order_quantity WHERE user_id = $user_id AND
            product_id = $product_id AND payment_status = '$payment_status' ";

            if(!mysqli_query($connection, $update_quantity_product)) {
                throw new Exception("Error updating order quantity: " . mysqli_error($connection));
            }

    } else{

    // jika tidak di temukan maka tambahkan data yang baru
        $transaction_id = Unique_transaction_id($connection);
        $tambah_transaksi = "insert into transaksi values 
        ($transaction_id, $user_id, $product_id, $order_quantity,
        now(), '$payment_status') ";
        if (!mysqli_query($connection, $tambah_transaksi)) {
            throw new Exception("Error saat memasukkan data Transaksi baru: ". mysqli_error($connection));
        }
    }

    mysqli_commit($connection);
    echo "<script>alert('Pemesanan berhasil dilakukan!'); window.location.href='../Market-Place.php';</script>";
} catch (Exception $e) {

    mysqli_rollback($connection);
     echo "<script>alert('Kesalahan saat melakukan pemesanan: " . $e ->getMessage() . "'); 
    window.location.href='../Market-Place.php';</script>";
}

mysqli_close($connection);

?>