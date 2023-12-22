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
                    <p>Salad adalah hidangan yang terdiri dari berbagai macam bahan segar seperti sayuran, buah-buahan, biji-bijian, daging, ikan, keju, atau bahan lainnya yang dicampur dan disajikan dalam keadaan dingin. </p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>Daun selada segar secukupnya</li>
                        <li>Tomat ceri, potong menjadi dua</li>
                        <li>Tomat ceri, potong menjadi dua</li>
                        <li>Tomat ceri, potong menjadi dua</li>
                        <li>Bawang merah, iris tipis</li>
                        <li>Alpukat, potong dadu</li>
                        <li>Keju feta, hancurkan atau potong kecil-kecil (opsional)</li>
                        <li>Biji labu panggang (opsional)</li>
                    </ul>
                    <b>dressing</b>
                    <ul>
                        <li>3 sendok makan minyak zaitun</li>
                        <li>3 sendok makan minyak zaitun</li>
                        <li>3 sendok makan minyak zaitun</li>
                        <li>Garam dan merica secukupnya</li>
                    </ul>

                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Cuci bersih daun selada dan tiriskan. Potong-potong sesuai selera.</li>
                        <li>Siapkan mangkuk besar dan tambahkan daun selada, tomat ceri, mentimun, paprika merah, bawang merah, alpukat, dan keju feta (jika menggunakan).</li>
                        <li>Jika Anda ingin menambahkan biji labu panggang, taburkan di atas salad.</li>
                        <li>Dalam mangkuk kecil, campurkan minyak zaitun, cuka apel atau jus lemon, madu atau gula, garam, dan merica. Aduk hingga tercampur rata.</li>
                        <li>Tuangkan dressing ke atas salad dan aduk perlahan hingga semua bahan terlapisi dengan baik oleh dressing.</li>
                        <li>Sajikan segera sebagai hidangan utama atau hidangan pendamping.</li>
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