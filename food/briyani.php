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
                    <p>Nasi briyani merupakan makanan yang berasal dari India dan merupakan hidangan yang populer di seluruh dunia.</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                    <li>500 gram beras basmati</li>
                        <li>4 buah paha ayam</li>
                        <li>1 buah jeruk nipis, ambil airnya</li>
                        <li>500 ml susu cair</li>
                        <li> 1 liter air dibagi menjadi 2 (500ml)</li>
                        <li>1 buah bawang bombay, iris</li>
                        <li>5 siung bawang putih, cincang halus</li>
                        <li>1 buah tomat, potong dadu</li>
                        <li>3 cm jahe, geprek</li>
                        <li>2 batang serai, geprek</li>
                        <li>2 sdm bubuk kari</li>
                        <li>2 sdm cabe bubuk</li>
                        <li>3 sdm youghurt</li>
                        <li>4 buah cabe hijau besar</li>
                        <li>1 sdm garam</li>
                        <li>1/2 sdt kaldu ayam</li>
                        <li>1/2 sdt kaldu jamur</li>
                        <li>3 sdm minyak samin</li>
                        <li>2 buah kayu manis</li>
                        <li>10 buah cengkeh</li>
                        <li>10 kapulaga</li>
                        <li>5 buah bunga lawang</li>
                        <li>acar timun dan wortel secukupnya</li>
                        <li>cabe rawit secukupnya</li>
                        <li>kare ayam secukupnya</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                    <li>cuci bersih beras basmati, lalu rendam selama 30 menit</li>
                        <li>cuci bersih ayam, lumuri dengan perasan air jeruk nipis. diamkan selama 20 menit</li>
                        <li>lalu cuci bersih kembali ayam dengan air mengalir</li>
                        <li>panaskan minyak samin, bawang bombay dan bawang putih. masak hingga harum</li>
                        <li>tambahkan potongan tomat, jahe, serai, bubuk kari, cabe bubuk, kunyit dan rempah rempah</li>
                        <li>masak hingga harum dan tercampur rata</li>
                        <li>tuang susu cair, youghurt dan 500 ml air. aduk rata, lalu msukkan ayam. masak hingga air menyusut</li>
                        <li>matikan api, masukkan beras basmati, garam, kaldu ayam dan kaldu jamur.</li>
                        <li>pindahkan ke  rice cooker beserta ayamnya, lalu tambahkan air 500 ml  dan cabe hijau yang sudah dibelah. masak hingga matang</li>
                        <li>setelah nasi matang, langsung aduk nasi sampai kebawah agar tidak gosong</li>
                        <li>nasi briyani siap disajikan, bisa ditambahkan dengan acar, kare maupun kerupuk.</li>
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