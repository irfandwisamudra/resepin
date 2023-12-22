<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }

    require '../functions.php';

    $id_kategori = $_GET["id_kategori"];
    $menu = mysqli_query($conn, "SELECT * FROM data_menu WHERE id_kategori = $id_kategori");
    $rows_menu = mysqli_fetch_assoc($menu);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Makanan Pembuka</title>
        <link rel="stylesheet" href="kategori_makanan.css" />
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

        <!-- products section starts  -->

        <section class="products" id="products">
            <h1 class="heading">Makanan <span>Pembuka</span></h1>

            <div class="box-container">
                <?php foreach($menu as $rows_menu) : ?>
                <?php $nama_file = str_replace(' ', '_', strtolower($rows_menu["nama_menu"])); ?>
                <?php $nama_file_php = $nama_file . ".php"; ?>

                <div class="boxes">
                    <div class="box">
                        <div class="tombol">
                            <a
                                href="<?= $nama_file_php; ?>?id_menu=<?= $rows_menu['id_menu']; ?>"
                                class="btn"
                            >
                                Lihat Resep
                                <span
                                    ><img src="../icon/arahkanan.png" width="30px"
                                /></span>
                            </a>
                        </div>
                        <div class="image">
                            <img src="../image/<?= $rows_menu["gambar_menu"]; ?>"
                            alt="">
                        </div>
                        <div class="content">
                            <h3><?= $rows_menu["nama_menu"]; ?></h3>
                            <div class="price">
                                Rp.<?= $rows_menu["harga_menu"]; ?>,-/Pcs
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </section>

        <!-- products section 2 ends -->

        <!-- site footer -->

        <footer class="site-footer">
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="../logo/resepin.png" alt="" />
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
