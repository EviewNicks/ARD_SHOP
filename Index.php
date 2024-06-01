<?php
include 'Connection.php';

$query = "SELECT * FROM dashboard ";
$connect_pengguna = mysqli_query($connection, $query);
$dashboard = mysqli_fetch_assoc($connect_pengguna);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Index.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="brand">ARD_SHOP</div>
            <div class="nav">
                <div>Home</div>
                <div>Shop</div>
                <div>Contact</div>
                <div>About Us</div>
            </div>
            <div class="actions">
                <img src="image/Bar Menu.png" alt="Bar-Menu" width="32" height="32" style="position: relative;">
                <img src="image/Search.png" alt="Search" width="32" height="32" style="position: relative;">
                <div class="divider"></div>
                <div class="shopping">
                    <img src="image/shop.png" alt="shop" width="32" height="32" style="position: relative;">
                    <div>Shopping</div>
                </div>
            </div>
        </nav>
    </header>

    <!--<div class="LandingPage" style="width: 1200px; height: 2996px; background-image: url(image/Background-Landing-page.png); background-size: cover; flex-direction: column; justify-content: center; align-items: center; display: inline-flex"> -->


    <div class="LandingPage">
        <div class="Frame160">
            <div class="Section">

                <!-- High Section -->
                <div class="HighSection">
                    <!-- Hero Section -->
                    <div class="HeroSection">
                        <div class="HeroSectionBody">
                            <div class="HeroSectionBox">
                                <div class="SectionBoxHeader">
                                    <div class="Logo-Text">ARD_SHOP</div>
                                    <div class="Subheadline">
                                        <div class="HeadlineMedium">Gaul, Trendy, Murah?</div>
                                        <div class="HeadlineSmall">Temukan Fashion Favoritmu di Sini!</div>
                                    </div>
                                </div>
                                <div class="CallToAction">
                                    <div class="HeadlineSmalls">Call To Action Text Prepare</div>
                                    <div class="SocialMedia">
                                        <img class="Logo" src="image/Twitter.png" alt="Twitter">
                                        <img class="Logo" src="image/Instagram.png" alt="Instagram">
                                        <img class="Logo" src="image/facebook.png" alt="Facebook">
                                    </div>
                                </div>
                            </div>
                            <div class="HeroAccesories">
                                <img class="Decorasi" src="image/Accesories.png" alt="Image">
                                <div class="Line"></div>
                                <img class="Decorasi" src="image/Accesories.png" alt="Image">
                            </div>
                            <img class="Image" src="image/Online-Shop.png" alt="Image">
                        </div>
                        <div class="ScrollDown">
                            <form action="Halaman Log-In/LogIn-Page.php" method="get">
                                <button type="submit" class="ButtonJoin">
                                    <div class="TitleMedium">ARD_SHOP</div>
                                    <div class="TitleSmall">Join us and start shopping!</div>
                                </button>
                            </form>
                            <img class="LargeLogo" src="image/send-Arrows.png" alt="Image">
                        </div>
                    </div>


                    <!-- Feature Section -->
                    <div class="FeaturesSection">
                        <div class="HeadlineFeatures">
                            <div class="HeadlineMedium">Mengapa harus Pilih Kami?</div>
                        </div>
                        <div class="Feature">
                            <div class="BoxFeature">
                                <img class="ImageFeature" src="image/Gratis-Ongkir.jpg" alt="Gratis-Ongkir">
                                <div class="TextFeature">
                                    <div class="TitleLarge">Gratis Ongkir</div>
                                    <div class="BodyLarge">
                                        Nikmati pengiriman gratis untuk setiap pesanan di atas jumlah tertentu. Belanja
                                        lebih banyak tanpa khawatir biaya pengiriman. Kami memastikan barang sampai
                                        dengan aman dan tepat waktu ke tujuan Anda.
                                    </div>
                                </div>
                            </div>
                            <div class="BoxFeature">
                                <div class="TextFeature">
                                    <div class="TitleLarge">Dukungan Pelanggan 24/7</div>
                                    <div class="BodyLarge">
                                        Nikmati pengalaman belanja yang nyaman dan tenang dengan layanan Dukungan Pelanggan 24/7 kami.
                                         Tidak peduli kapan Anda membutuhkan bantuan, tim kami selalu siap untuk membantu Anda.
                                          Hubungi kami sekarang dan rasakan perbedaannya!
                                    </div>
                                </div>
                                <img class="ImageFeature" src="image/Dukungan-Pelanggan.jpg" alt="Dukungan-Pelanggan">
                            </div>
                            <div class="BoxFeature">
                                <img class="ImageFeature" src="image/Garansi-Kembali.jpg" alt="Garansi-kembali">
                                <div class="TextFeature">
                                    <div class="TitleLarge">Garansi Uang Kembali</div>
                                    <div class="BodyLarge">
                                        Kami menawarkan kebijakan pengembalian uang tanpa ribet jika produk yang Anda
                                        terima tidak sesuai dengan deskripsi atau mengalami kerusakan. Belanja dengan
                                        rasa percaya diri dan tanpa risiko di ARD_SHOP.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Bottom Section -->
                <div class="BottomSection">
                    <!-- DashBoard Section -->
                    <div class="DashboardSection">
                        <div class="HeadlineLarge">DashBoard</div>
                        <div class="BoxDashboard">
                            <div class="ItemDashboard">
                                <form action="DashBoard/Data_pengguna.php" method="get">
                                    <button type="submit" class="BodyDashboard">
                                        <img class="LogoDashboard User" src="image/Dashboard-User.png" alt="Dashboard-User">
                                        <div class="TitleMedium">Data Pengguna</div>
                                    </button>
                                </form>
                                <div class="SectionDashboard">
                                    <img class="Decorasi" src="image/Dashboard-User-Hover.png" alt="Dashboard-User">
                                    <div class="TextSectionDashboard">
                                        <div class="TitleSmall">Jumlah Pengguna</div>
                                        <div class="HeadlineMedium"><?php echo htmlspecialchars($dashboard['jumlah_pengguna']); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ItemDashboard">
                                <form action="DashBoard/Market_Place.php" method="get">
                                    <button type="submit" class="BodyDashboard">
                                        <img class="LogoDashboard Produk" src="image/dashboard-Shop.png" alt="Dashboard-Sh">
                                        <div class="TitleMedium">Data Produk</div>
                                    </button>
                                </form>
                                <div class="SectionDashboard">
                                    <img class="Decorasi" src="image/Dashboard-Shop-Hover.png" alt="Dashboard-User">
                                    <div class="TextSectionDashboard">
                                        <div class="TitleSmall">Jumlah Produk</div>
                                        <div class="HeadlineMedium"><?php echo htmlspecialchars($dashboard['jumlah_produk']); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ItemDashboard">
                                <form action="DashBoard/History_Transaksi_User.php" method="get">
                                    <button type="submit" class="BodyDashboard">
                                        <img class="LogoDashboard Card" src="image/Dashboard-Card.png" alt="Dashboard-Card">
                                        <div class="TitleMedium">Data Transaksi</div>
                                    </button>
                                </form>
                                <div class="SectionDashboard">
                                    <img class="Decorasi" src="image/Dashboard-Card-Hover.png" alt="Dashboard-User">
                                    <div class="TextSectionDashboard">
                                        <div class="TitleSmall">Jumlah Transaksi</div>
                                        <div class="HeadlineMedium"><?php echo htmlspecialchars($dashboard['jumlah_transaksi']); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- StakeHolders Section -->
                    <div class="StakeholdersSection">
                        <div class="HeaderStakeholders">
                            <div class="HeadlineMedium">CEO ARD_SHOP</div>
                        </div>
                        <div class="BodyStakeholders">
                            <div class="ContainerStakeholders">
                            <img class="ImageStakeholders" src="image/WhatsApp Image 2024-05-27 at 07.53.55_f42364d3.jpg" alt="StakeHolder-Azizah">
                                <div class="LabelName">
                                    <div class="HeadlineSmalls">Andi Azizah Lathifah</div>
                                </div>
                            </div>
                            <div class="ContainerStakeholders">
                                <div class="LabelName">
                                    <div class="HeadlineSmalls">Ardiansyah</div>
                                </div>
                                <img class="ImageStakeholders" src="image/Ardi-Image.jpg" alt="StakeHolder-Ardi">
                            </div>
                            <div class="ContainerStakeholders">
                            <img class="ImageStakeholders" src="image/WhatsApp Image 2024-05-27 at 08.51.46_f9e14a94.jpg" alt="StakeHolder-Ardi">
                                
                                <div class="LabelName">
                                    <div class="HeadlineSmalls">Annajwa Al-Habsyi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                </div>
            </div>



            <!-- Footer -->
            <div class="FooterSection">
                <div class="FooterLinks">
                    <div class="Home">Home</div>
                    <div class="KategoriKami">Kategori Kami</div>
                    <div class="TentangKami">Tentang Kami</div>
                    <div class="SyaratKetentuan">Syarat & Ketentuan</div>
                    <div class="KebijakanPrivasi">Kebijakan Privasi</div>
                </div>
                <div class="FooterBody">
                    <div class="FooterSocialmedia">
                        <div class="LogoMedium">
                            <img class="Rectangle22" src="image/facebook.png" alt="SocialMedia">
                        </div>
                        <div class="LogoMedium">
                            <img class="Rectangle22" src="image/Instagram.png" alt="SocialMedia">
                        </div>
                        <div class="LogoMedium">
                            <img class="Rectangle22" src="image/Twitter.png" alt="SocialMedia">
                        </div>
                    </div>
                    <div class="FooterContact">
                        <div class="LabelLarge">Email : Support@ardshop.com</div>
                        <div class="LabelLarge">Telepon : +62 812 3456 7890</div>
                        <div class="LabelLarge">Alamat: Jl. Contoh No. 123, Jakarta</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</body>

</html>