<?php
include '../Connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/Style.css">
    <title>Data Pengguna</title>
</head>

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

<body>
    <table class="styled-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Password</th>
                <th>Alamat User</th>
                <th>Phone Number</th>
                <th>Tanggal Daftar</th>
                <th>Daftar Transaksi</th>
            </tr>
        </thead>

    <?php
    $pengguna_date = "select * from pengguna order by user_id";
    $connect_pengguna = mysqli_query($connection, $pengguna_date);

    echo "<tbody>";
    $i = 1;
    while ($a = mysqli_fetch_array($connect_pengguna)) {
        echo '
    <tr>
        <td>' . $i . '</td>
        <td>' . htmlspecialchars($a['username']) . '</td>
        <td>' . htmlspecialchars($a['email']) . '</td>
        <td>' . htmlspecialchars($a['password']) . '</td>
        <td>' . htmlspecialchars($a['address']) . '</td>
        <td>' . htmlspecialchars($a['phone_number']) . '</td>
        <td>' . htmlspecialchars($a['registration_date']) . '</td>
        <td>
        <form action="Transaksi_user.php" method="get">
            <input type="hidden" name="user_id" value="' . htmlspecialchars($a['user_id']) . '">
            <button type="submit" class="Button">Daftar Transaksi</button>
        </form>
        </td>
    </tr>
    ';
    $i++;
    }
    echo "</tbody>";
    echo "</table>";

    mysqli_close($connection);

    ?>
</body>

</html>