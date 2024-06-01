<?php
include '../Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/Style.css">
    <title>Market Place</title>
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
    
    <table class="styled-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kategori</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM Marketplace ORDER BY category_name, product_id";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "Kesalahan saat menjalankan query: " . mysqli_error($connection);
            exit();
        }

        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            // Ekstrak informasi produk
            $kategori = $row["category_name"];
            $productID = $row["product_id"];
            $productName = $row["product_name"];
            $description = $row["description"];
            $price = $row["price"];
            $stock = $row["stock"];

            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . htmlspecialchars($kategori) . "</td>";
            echo "<td>" . htmlspecialchars($productName) . "</td>";
            echo "<td>" . htmlspecialchars($description) . "</td>";
            echo "<td>" . htmlspecialchars($price) . "</td>";
            echo "<td>" . htmlspecialchars($stock) . "</td>";
            echo "</tr>";
            $i++;
        }
        ?>
        </tbody>
    </table>

    <?php mysqli_close($connection); ?>
</body>
</html>
