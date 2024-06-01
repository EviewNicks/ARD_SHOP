<?php
include '../Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/Style.css">
    <title>History Transaksi</title>
</head>
<body>
    <nav class="navbar">
        <div class="brand">ARD_SHOP</div>
        <div class="nav">
            <div>Home</div>
            <div>Shop</div>
            <div>Contact</div>
            <div>About Us</div>
        </div>
        <div class="actions">
            <img src="../image/Bar Menu.png" alt="Bar-Menu" width="32" height="32" style="position: relative;">
            <img src="../image/Search.png" alt="Search" width="32" height="32" style="position: relative;">
            <div class="divider"></div>
            <div class="shopping">
                <img src="../image/shop.png" alt="shop" width="32" height="32" style="position: relative;">
                <div>Shopping</div>
            </div>
        </div>
    </nav>
    
    <table class="styled-table margin">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama User</th>
                <th>Product Dipesan</th>
                <th>Order</th>
                <th>Total Harga</th>
                <th>Status Pemesanan</th>
                <th>Waktu Pemesanan</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $transaksi_succes = "SELECT * FROM view_history_transaksi WHERE payment_status = 'success' ORDER BY transaction_id";
        $result = mysqli_query($connection, $transaksi_succes);

        if (!$result) {
            echo "Kesalahan saat menjalankan query: " . mysqli_error($connection);
            exit();
        }

        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            $username = $row["username"];
            $productName = $row["product_name"];
            $order = $row["order_quantity"];
            $total = $row["total_price"];
            $status = $row["payment_status"];
            $tanggal = $row["order_date"];

            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . htmlspecialchars($username) . "</td>";
            echo "<td>" . htmlspecialchars($productName) . "</td>";
            echo "<td>" . htmlspecialchars($order) . "</td>";
            echo "<td>" . htmlspecialchars($total) . "</td>";
            echo "<td>" . htmlspecialchars($status) . "</td>";
            echo "<td>" . htmlspecialchars($tanggal) . "</td>";
            echo "</tr>";
            $i++;
        }
        ?>
        </tbody>
    </table>

    <?php mysqli_close($connection); ?>
</body>
</html>
