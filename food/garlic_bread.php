<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }

    require '../functions.php';

    $id_menu = $_GET["id_menu"];
    $menu = query("SELECT * FROM data_menu WHERE id_menu = $id_menu")[0];

?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $menu["nama_menu"]; ?></title>
    <link rel="stylesheet" href="menu_makanan.css">
    
</head>
<body>
    <!-- header section starts  -->

    <header class="header">
        <a href="index.php" class="logo">
            <img src="../logo/resepin.png"
        /></a>

        <nav class="navbar">
            <a href="../beranda.php">Beranda</a>
            <a href="../list.php">List</a>
            <a href="../news.php">News</a>
            <a href="../developer.php">Developer</a>
            <a href="../user/dashboardUser.php"
                ><ion-icon
                    class="iconProfile"
                    name="person-circle-outline"
                ></ion-icon
            ></a>
        </nav>
    </header>

    <!-- header section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>Resep</span> </h1>

        <div class="row">

            <div class="image">
                <img src="../image/<?= $menu["gambar_menu"]; ?>" width="100%">
            </div>

            <div class="content">
                <form action="../checkout.php?id_menu=<?= $menu["id_menu"]; ?>" method="POST">
                    <h3> <input type="hidden" name="nama_menu" value="<?= $menu["nama_menu"]; ?>"> <?= $menu["nama_menu"]; ?> </h3>
                    <b>Deskripsi:</b>
                    <p>Garlic bread adalah sejenis roti yang telah diolesi dengan mentega atau minyak zaitun yang mengandung bawang putih cincang atau bubuk bawang putih</p>

                    <b>Bahan-bahan:</b>
                    <b>roti (plain bun)</b>
                    <ul>
                        <li>260 gram terigu protein</li>
                        <li>4 gram ragi instant </li>
                        <li>30 gram gula pasir </li>
                        <li>2 gram garam</li>
                        <li>180 susu cair</li>
                        <li>1 butir telur</li>
                        <li>30 gram butter</li>
                    </ul>
                    <b>cream chese</b>
                    <ul>
                        <li>200 gram cream cheese</li>
                        <li>20 gram gula halus</li>
                        <li>50 gram hipping cream cair</li>
                    </ul>
                    <b>garlic butter sauce</b>
                    <ul>
                        <li>120 gram unsalted butter </li>
                        <li>30 gram bawang putih, cincang halus</li>
                        <li>30 gram susu kental manis</li>
                        <li>15 gram madu</li>
                        <li>2 gram parsley kering</li>
                        <li>1 butir telur</li>
                    </ul>
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Campur terigu, ragi instant, gula pasir, aduk rata.</li>
                        <li>Masukkan campuran susu, telur (liat konsistensi adonan, kalau dirasa cukup stop supaya adonan tidak terlalu lembek)</li>
                        <li>Uleni hingga menyatu.</li>
                        <li>Masukkan butter dan garam, uleni hingga kalis elastis.</li>
                        <li>Bagi adonan menjadi 8 bagian kemudian bulatkan masing-masing adonan.</li>
                        <li>Tata di paper cup atau di loyang yang dialas kertas roti dan dioles margarin tipis</li>
                        <li>Istirahatkan adonan selama 40-50 menit sampai mengembang 2x lipat.</li>
                        <li>Oven sampai matang suhu 180°C selama 20 menitan, sesuaikan dengan oven masing-masing.</li>
                        <li>Dinginkan di rak pendingin.</li>
                        <li>Campur semua bahan cream cheese, aduk rata pakai spatula, masukkan plastik segitiga.</li>
                        <li>Belah Roti menjadi 6 bagian, isi tiap belahan roti dengan cream cheese, sisihkan.</li>
                        <li>Garlic butter sauce: Lelehkan butter sampai mencair, matikan api, masukkan bahan lain dan telur, aduk rata.</li>
                        <li>Garlic butter sauce: Lelehkan butter sampai mencair, matikan api, masukkan bahan lain dan telur, aduk rata.</li>
                        <li>Panggang kembali suhu 160°C selama 15-20 menit sampai permukaan roti kering. Sajikan hangat.</li>
                        <li>Panggang kembali suhu 160°C selama 15-20 menit sampai permukaan roti kering. Sajikan hangat.</li>
                    </ol>
                 

                    <div class="tombol">
                        <button class="btn"> Beli Sekarang <span><img src="../icon/arahkanan.png" width="30px"></span> </button>
                    </div>
                </form>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- site footer -->

    <footer class="site-footer">
        <div class="footerGrid">
            <div class="footerAbout">
                <h6>About</h6>
                <img src="../logo/resepin.png" alt="">
                <p>
                    ResepIn adalah platform tentang informasi resep dan
                    pemesanan makanan paling mudah dan efisien.
                </p>
            </div>
            <div class="footerCategory">
                <h6>Categories</h6>
                <p>Recipe</p>
                <p>Order</p>
                <p>Food</p>
                <p>Desktop</p>
                <p>Information</p>
            </div>
            <div class="footerLink">
                <h6>Quick Link</h6>
                <a href="../about_us.php"><p>About Us</p></a>
                <a href="../contact_us.php"><p>Contact Us</p></a>
                <a href="../chef.php"><p>Chef</p></a>
                <a href="../blog.php"><p>Blog</p></a>
                <a href="../faq.php"><p>FAQs</p></a>
                <a href="../review.php"><p>Review</p></a>
                <a href="../shipping_and_processing.php"><p>Shipping and Processing</p></a>
                <a href="../privacy_and_policy.php"><p>Privacy and Policy</p></a>
                <a href="../terms_of_use.php"><p>Terms of Use</p></a>
                <a href="../disclaimer.php"><p>Disclaimer</p></a>
            </div>
        </div>
        <hr />
        <div class="copyrightLogo">
            <p class="copyright-text">
                Copyright &copy; 2023 All Rights Reserved by
                <a href="#">Kelompok 4</a>
            </p>
            <div class="iconLogoFooter">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
    </footer>

    <script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
        nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- footer section ends -->
</body>
</html>