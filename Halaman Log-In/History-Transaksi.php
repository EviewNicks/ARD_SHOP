<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Style/History-Transaksi.css" type="text/css">
  <title>History Transaksi</title>
</head>

<body>

  <?php
  include('../Connection.php');
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header("Location: Masuk_daftar.php");
    exit();
  }

  $id = $_SESSION['user_id'];

  $query = "SELECT username, address FROM pengguna WHERE user_id = ?";
  $stmt = mysqli_prepare($connection, $query);
  mysqli_stmt_bind_param($stmt, 'i', $id);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $pengguna = mysqli_fetch_assoc($result);
  ?>

  <!-- Navbar -->
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

  <!-- Content Utama -->
  <div class="TransaksiPage">
    <div class="EditProfile">
      <div class="Frame139"></div>
      <div class="ProfilePage">
        <div class="PageHeadline">
          <div class="UserProfile">
            <div class="Group2">
              <div class="Ellipse1"></div>
              <div class="Username">
                <!-- pengguna username PHP -->
                <?php echo htmlspecialchars($pengguna['username']); ?>
              </div>
            </div>
          </div>
          <div class="TransactionPage">
            <div class="Text">Transaction Page</div>
          </div>
        </div>


        <?php
          // Mengambil data transaksi dari tabel view_history_transaksi

        $query_transaksi = "SELECT product_name, price, order_quantity,
          (price * order_quantity) AS total_price FROM view_history_transaksi WHERE user_id = ? AND payment_status = 'waiting'";
        $stmt_transaksi = mysqli_prepare($connection, $query_transaksi);
        mysqli_stmt_bind_param($stmt_transaksi, 'i', $id);
        mysqli_stmt_execute($stmt_transaksi);
        $result_transaksi = mysqli_stmt_get_result($stmt_transaksi);

        
        // Cek apakaha ada transaksi yang sedang menunggu pembayaran 
        if(mysqli_num_rows($result_transaksi) > 0) {
          echo '
          <div class="PageBody">
          <div class="Body-Box">
            <div class="DaftarProduct">
              <div class="Label">
                <div class="NamaProduk">Nama Produk</div>
              </div>
              <div class="IdProduct">
          ';

          while($row = mysqli_fetch_assoc($result_transaksi)) {
              echo '
              <div class="ProductValue">
              <div class="LabelNameProduct">
                <div class="LabelSmall">'. $row['product_name'].'</div>
              </div>
              <div class="PriceProduct">
                <div class="LinePriceProduct"></div>
                <div class="TextPrice">Rp. '. number_format($row['total_price'], 0, ',', '.') .' .000</div>
              </div>
            </div>';
          }

          echo '
          </div>
          </div>
          ';


          echo '
          <div class="Category">
              <div class="Label-Category">Alamat</div>
              <div class="Id">
                <div class="ValueLabel">
                  <div class="LabelSmallText">Di Kirim ke :</div>
                  <div class="ValueUser">
                    <div class="TextBox">
                      <div class="BodyMedium">
                        <!-- alamat pengguna -->
                      <p>'. htmlspecialchars($pengguna['address']) .'</p></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="Category">
              <div class="Label-Category">Metode Pembayaran </div>
              <div class="Id">
                <div class="ValueLabel">
                  <div class="LabelSmallText">Rekening :</div>
                  <div class="ValueUser">
                    <div class="TextBox">
                      <div class="BodyMedium">Fitur Belum Tersedia</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <form action="Process-PHP/Succes_Order.php" method="post">
          <button type="submit" class="Button" name="succes_order">Confirm</button>
          </form>
        </div>
      </div>
    </div>
  </div>
          
          ';

        } else {
          echo "<p>Tidak ada transaksi yang sedang menunggu pembayaran.</p>";
        }


          mysqli_close($connection);
        ?>   

</body>

</html>