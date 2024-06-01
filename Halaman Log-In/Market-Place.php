<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Place</title>
    <link rel="stylesheet" href="../Style/Market-Place.css" type="text/css">
</head>

<body>

    <?php
    include '../connection.php';
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: Masuk_daftar.php");
        exit();
    }

    $id = $_SESSION['user_id'];

    $query = "SELECT * FROM Marketplace ORDER BY category_name, product_id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Kesalahan saat menjalankan query: " . mysqli_error($connection);
        exit();
    }

    $kategoriSaatIni = ""; // Inisialisasi variabel $kategoriSaatIni
    $jumlahProduk = 0;

    ?>

    <!-- Navigasi -->
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


    <!-- Body -->
    <div class="EditProfilePage8">
        <div class="ContainerHead">
            <div class="HeaderText">Shop</div>
            <div class="container-Button">
                <form action="Profile-Page.php">
                    <button class="Button">Profile</button>
                </form>
                <form action="History-Transaksi.php">
                    <button class="Button">Bayar</button>
                </form>
            </div>
        </div>

        <?php
        while ($row = mysqli_fetch_array($result)) {

            // Ekstrak informasi produk
            $kategori = $row["category_name"];
            $productID = $row["product_id"];
            $productName = $row["product_name"];
            $description = $row["description"];
            $price = $row["price"];
            $stock = $row["stock"];

            // Periksa apakah kategori telah berubah
            if ($kategori != $kategoriSaatIni) {
                // Jika kategori telah berubah, cetak tag penutup untuk kategori sebelumnya dan perbarui variabel
                if ($kategoriSaatIni != "") {
                    echo '
                        </div>
                    </div>
                </div>
                    ';
                }
                $kategoriSaatIni = $kategori;
                $jumlahProduk = 1;

                echo '
                <div class="BoxContainer">
                    <div class="Container">
                        <div class="TextTitle">
                            <div class="Title">' . htmlspecialchars($kategori) . '</div>
                        </div>
                        <div class="ContainerBox">';
            } else {
                $jumlahProduk++;
            }

            //Cek detail Produk di dalam tabel Kategori saat ini
            echo '
            <div class="Product">
                <div class="Heading">' . htmlspecialchars($productName) . '</div>
                <div class="Section-Product">
                    <div class="BodyProduct">
                        <div class="Container">
                            <div class="ImageProduct"></div>
                            <div class="Description"><p>' . htmlspecialchars($description) . '</p></div>
                        </div>
                        <div class="ProductIdentity">
                            <div class="PriceProduct">price : ' . htmlspecialchars($price) . '</div>
                            <div class="StockProduct">stock : ' . htmlspecialchars($stock)  . '</div>
                        </div>
                    </div>
                     <form action="Process-PHP/Market-Place-Order.php" method="post">
                     <input type="hidden" name="product_id" value='. htmlspecialchars($productID) . '>"
                    <button type="submit" class="ButtomPesan" name="Pesan"> Pesan </button>
                    </form>
                </div>
            </div>';
        }

        // Cetak tag penutup untuk kategori terakhir
        if ($kategoriSaatIni != "") {
            echo '
                </div>
            </div>
        </div>';
        }

        mysqli_close($connection);

        ?>
</body>

</html>
