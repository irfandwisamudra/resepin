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
    <link rel="stylesheet" href="resep_makanan.css">
    
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
                    <p>Martabak telur memiliki rasa gurih dan tekstur yang renyah di bagian luar serta isian yang lezat di dalamnya. </p>

                    <b>Bahan-bahan:</b>
                    <b>kulit</b>
                    <ul>
                        <li>125 gram tepung terigu protein tinggi</li>
                        <li>2 sdm minyak goreng</li>
                        <li>1/2 sdt garam</li>
                        <li>60 ml air</li>
                        <li>500 ml minyak goreng, untuk merendam adonan</li>
                        <li>minyak goreng secukupnya</li>
                    </ul>
                    <b>isian ayam</b>
                    <ul>
                        <li>150 gram daging cincang</li>
                        <li>2 buah bawang bombay cincang halus</li>
                        <li>2 siung bawang putih cincang halus</li>
                        <li>1 sdt garam</li>
                        <li>1/2 sdt lada halus</li>
                        <li>1/2 sdt gula pasir</li>
                        <li>2 sdm minyak</li>
                        <li>3 butir telur kocok</li>
                        <li>5 batang daun bawang cincang halus </li>
                        <li>1/2 sdt garam</li>
                    </ul>

                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Dalam wadah, aduk rata tepung, garam, minyak goreng.</li>
                        <li>Tuang air sedikit demi sedikit sampai adonan kalis saja. </li>
                        <li>Uleni kembali hingga adonan kalis elastis selama 10-15 menit.</li>
                        <li>Bagi adonan menjadi 2 bagian. Bulatkan dan istirahatkan selama 5 menit.</li>
                        <li>Siapkan mangkuk, tuang minyak goreng (500 ml). Masukkan adonan tadi ke dalamnya hingga terendam.</li>
                        <li>Rendam selama 30 menit.</li>
                        <li>Panaskan minyak. Tumis bawang bombay dan bawang putih hingga harum.</li>
                        <li>Masukkan daging ayam, aduk hingga berubah warna.</li>
                        <li>Bubuhi garam, gula, lada halus, dan tuangi sedikit air agar tidak terlalu kering.</li>
                        <li>Masak hingga matang. Sisihkan hingga dingin.</li>
                        <li>Panaskan banyak minyak.</li>
                        <li>Ambil 1 bulatan adonan kulit. Pindahkan ke atas meja kerja</li>
                        <li>Pipihkan adonan dengan menggunakan jari tangan hingga adonan melebar dan tipis.</li>
                        <li>Ambil 1 bagian isian. Tuang ke atas kulit martabak. Lipat bentuk amplop.</li>
                        <li>Goreng martabak ke dalam minyak panas, hingga matang dan kecokelatan kedua sisinya. Angkat, tiriskan</li>
                        <li>Potong martabak sesuai selera.</li>
                        <li>Martabak siap disajikan dengan kuah cuka martabak.</li>
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