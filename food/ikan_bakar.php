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
                    <p>Ikan bakar adalah hidangan yang terbuat dari ikan yang dipersiapkan dan dipanggang di atas api, panggangan, atau arang hingga matang.</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>1 kg ikan gurame</li>
                        <li>1 butir jeruk nipis, ambil air perasannya</li>
                        <li>Garam, untuk melumuri ikan secukupnya</li>
                        <li>3 sdm kecap manis</li>
                        <li>5 sdm madu</li>
                        <li>2 sdm margarin</li>
                        <li>2 sdm minyak</li>
                    </ul>
                    <b>bumbu halus</b>
                    <ul>
                        <li>5 siung bawang putih </li>
                        <li>3 cm jahe </li>
                        <li>4 cm lengkuas</li>
                        <li>3 cm kunyit</li>
                        <li>2 sdt ketumbar</li>
                        <li>1 sdt garam</li>
                        <li>1/2 sdt merica</li>
                    </ul>

                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Bersihkan gurame dan buang insang, kotoran, serta siripnya.</li>
                        <li>Cuci bersih gurame lalu lumuri dengan air perasan jeruk nipis dan garam secukupnya.</li>
                        <li>Biarkan 10 menit lalu cuci bersih kembali. Sisihkan.</li>
                        <li>Panaskan minyak. Tumis bumbu halus hingga harum. Matikan api lalu biarkan dingin.</li>
                        <li>Dalam wadah, campur tumisan bumbu halus dengan kecap manis dan madu, lalu aduk rata.</li>
                        <li>Ambil ikan lalu lumuri dengan racikan bumbu hingga rata. Simpan dalam kulkas selama 30 menit.</li>
                        <li>Ambil ikan lalu lumuri dengan racikan bumbu hingga rata. Simpan dalam kulkas selama 30 menit.</li>
                        <li>Sesekali oles dengan margarin. Angkat.</li>
                        <li>Ikan bakar siap disajikan.</li>
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