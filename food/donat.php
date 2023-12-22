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
                    <p>Donat memiliki popularitas yang tinggi di banyak negara di seluruh dunia. Biasanya disajikan sebagai makanan penutup atau camilan</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>300 gram tepung terigu protein</li>
                        <li>150 gram kentang, kukus dan haluskan.</li>
                        <li>1 butir telur</li>
                        <li>30 gram margarin</li>
                        <li>35 gram gula pasir</li>
                        <li>15 gram susu bubuk </li>
                        <li>6 gram ragi instan </li>
                        <li>1 sdt garam</li>
                        <li>75 ml air es</li>
                        <li>minyak secukupnya</li>
                        <li>150 gram coklat DCC, lelehkan</li>
                        <li>mises coklat dan waran warni secukupnya</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Campur tepung terigu, ragi instan, gula pasir, dan susu bubuk. Aduk rata.</li>
                        <li>Tambahkan kentang. Aduk rata.</li>
                        <li>Masukkan telur dan air es sedikit-sedikit sambil diuleni sampai kalis.</li>
                        <li>Masukkan telur dan air es sedikit-sedikit sambil diuleni sampai kalis.</li>
                        <li>Diamkan adonan 15 menit.</li>
                        <li>Kempiskan adonan. Bagi adonan menjadi masing-masing 30 gram dan bulatkan.</li>
                        <li>Diamkan 10 menit.</li>
                        <li>Ambil satu bulatan, pipihkan adonan. Lubangi tengahnya</li>
                        <li>Taruh berjejer (beri jarak untuk mengembang) di atas loyang yang sudah ditabur tepung sebelumnya</li>
                        <li>Diamkan 45 menit sampai mengembang maksimal.</li>
                        <li>Panaskan banyak minyak dengan api sedang. Goreng donat sampai matang.</li>
                        <li>Tiriskan dan dinginkan.</li>
                        <li>Beri topping sesuai selera.</li>
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