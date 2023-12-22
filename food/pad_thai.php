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
                    <p>Pad Thai adalah sebuah hidangan mi goreng yang terkenal dari Thailand. </p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>200 gram mi beras</li>
                        <li>200 gram udang, dikupas dan dibuang kepala dan ekornya</li>
                        <li>2 telur, dikocok lepas</li>
                        <li>100 gram tauge</li>
                        <li>100 gram tahu, potong kotak kecil</li>
                        <li>3 sendok makan pasta tamarind</li>
                        <li>2 sendok makan kecap ikan</li>
                        <li>2 sendok makan gula merah, serut</li>
                        <li>2 sendok makan minyak sayur</li>
                        <li>1/2 sendok teh garam</li>
                        <li>1/4 sendok teh cabai bubuk (opsional, sesuai selera)</li>
                        <li>4 siung bawang putih, cincang halus</li>
                        <li>2 batang daun bawang, potong-potong</li>
                        <li>Daun ketumbar segar, untuk hiasan</li>
                        <li>Kacang tanah cincang, untuk taburan</li>
                        <li>Seiris jeruk nipis, untuk penyajian</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Rendam mi beras dalam air hangat selama sekitar 15-20 menit  atau ikuti petunjuk pada kemasan</li>
                        <li>Setelah itu, tiriskan mi.</li>
                        <li>Panaskan 1 sendok makan minyak sayur dalam wajan besar atau wok dengan api sedang.</li>
                        <li>Tumis bawang putih hingga harum.</li>
                        <li>Tambahkan udang ke dalam wajan dan masak hingga berubah warna menjadi merah muda dan matang</li>
                        <li>Angkat udang dan sisihkan.</li>
                        <li>Dalam wajan yang sama, tambahkan tahu dan goreng hingga kecokelatan. Angkat tahu dan sisihkan.</li>
                        <li>Di wajan yang masih sama, pindahkan mi beras yang telah direndam ke dalam wajan dan aduk rata hingga mi mulai melunak.</li>
                        <li>Dorong mi ke sisi wajan dan pecahkan telur di sisi kosong. </li>
                        <li>Aduk telur dengan spatula hingga setengah matang, lalu campurkan dengan mi.</li>
                        <li>Aduk telur dengan spatula hingga setengah matang, lalu campurkan dengan mi.</li>
                        <li>Aduk rata hingga semua bahan tercampur merata.</li>
                        <li>Masukkan tauge, udang, tahu, dan daun bawang ke dalam wajan. </li>
                        <li>Lanjutkan mengaduk hingga semua bahan matang dan tercampur rata.</li>
                        <li>Cicipi dan sesuaikan rasa jika diperlukan. Tambahkan gula merah atau kecap ikan lebih jika ingin lebih manis atau gurih.</li>
                        <li>Angkat Pad Thai dari wajan dan sajikan di piring saji. </li>
                        <li>aburi dengan kacang tanah cincang dan hias dengan daun ketumbar segar.</li>
                        <li>Sajikan Pad Thai dengan seiris jeruk nipis di sisi piring untuk disiramkan saat menyantap.</li>
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