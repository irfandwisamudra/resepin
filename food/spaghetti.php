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
                    <p>Spaghetti adalah salah satu jenis pasta yang paling populer di dunia. Pasta ini memiliki bentuk panjang seperti tali dan biasanya digunakan dalam berbagai hidangan pasta khas Italia.</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>250 gram spaghetti</li>
                        <li>2 sendok makan minyak zaitun</li>
                        <li>3 siung bawang putih, cincang halus</li>
                        <li>1 buah bawang bombay, cincang halus</li>
                        <li>400 gram tomat, cincang kasar atau saus tomat siap pakai</li>
                        <li>1 sendok teh gula</li>
                        <li>Garam secukupnya</li>
                        <li>Merica hitam secukupnya</li>
                        <li>Daun basil segar, untuk hiasan (opsional)</li>
                        <li>Keju parmesan parut, untuk taburan (opsional)</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Rebus air dalam panci yang cukup besar dan tambahkan sedikit garam.</li>
                        <li>Masak spaghetti hingga al dente sesuai petunjuk pada kemasan.</li>
                        <li>Setelah matang, tiriskan spaghetti dalam saringan dan sisihkan.</li>
                        <li>Panaskan minyak zaitun dalam wajan besar. Tumis bawang putih dan bawang bombay hingga harum dan lembut.</li>
                        <li>Tambahkan tomat cincang atau saus tomat siap pakai ke dalam wajan. </li>
                        <li>Jika menggunakan tomat segar, masak hingga tomat lunak dan bumbui dengan gula, garam, dan merica hitam sesuai selera.</li>
                        <li>Jika menggunakan saus tomat siap pakai, tambahkan gula secukupnya dan bumbui dengan garam dan merica hitam.</li>
                        <li>Masak saus tomat dengan api sedang hingga matang dan bumbu meresap, sekitar 10-15 menit. Aduk sesekali agar tidak gosong.</li>
                        <li>Setelah saus matang, tambahkan spaghetti yang sudah direbus ke dalam wajan. Aduk rata hingga semua spaghetti terbalut dengan saus.</li>
                        <li>Angkat spaghetti dari wajan dan sajikan di piring saji. Hias dengan daun basil segar jika diinginkan.</li>
                        <li>Taburi spaghetti dengan keju parmesan parut sebelum disajikan.s</li>
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