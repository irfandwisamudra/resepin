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
                    <p>Dimsum merupakan makanan khas dan ikonik dari masakan Tiongkok  umumnya disajikan dalam keranjang bambu atau piring kecil</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>250 gram daging ayam</li>
                        <li>50 gram udang kupas</li>
                        <li>2 batang daun bawang bagian putihnya</li>
                        <li>5 sdm tepung tapioka</li>
                        <li>1 butir putih telur</li>
                        <li>1 sdt saus tiram</li>
                        <li>1 sdt kecap ikan</li>
                        <li>1 sdt minyak wijen</li>
                        <li>1 sdm kecap asin</li>
                        <li>2 sdt gula</li>
                        <li>3 siung bawang putih</li>
                        <li>1/2 sdt merica bubuk</li>
                        <li>3 buah kotak kecil es batu</li>
                        <li>15 lembar kulit pangsit</li>
                        <li>50 gram wortel parut untuk topping</li>
                    </ul>
                    <b> bahan-bahan sambal:</b>
                    <ul>
                        <li>1 siung bawang putih cincang halus</li>
                        <li>1 sdm minyak goreng</li>
                        <li>100 ml air</li>
                        <li>6 sdm saus sambal</li>
                        <li>1/2 sdt garam</li>
                        <li>1 sdt gula pasir</li>
                        <li>1/2 sdt cuka</li>
                    </ul>
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Rajang halus daun bawang, sisihkan.</li>
                        <li>Siapkan chopper. masukkan setengah bagian ayam, tepung, bawang putih, esa batu dan bumbu lainnya </li>
                        <li>giling sampai halus</li>
                        <li>masukkan sisa ayam, udang kupas dan daun bawang. giling sebentar pastikan teksturnya agak kasar </li>
                        <li>jika sudah selesai, pindahkan ke dalam mangkok</li>
                        <li>Ambil kulit pangsit, isi dengan 1 sdm adonan</li>
                        <li>bentuk adonan, rapikan pinggirnya</li>
                        <li>Beri topping wortel parut. Lakukan sampai bahan habis</li>
                        <li>panaskan kukusan, tata dimsum ke dalam kukusan. kukus selama 10 menit</li>
                        <li>percikkan air agar kulit dimsum menjadi moist dan lembut</li>
                        <li>setelah dipercikan dengan air, kukus kembali selaa 10 menit</li>
                        <li>panaskan minyak, tumis bawang putih cincang sampai harum</li>
                        <li>masukkan air, saus sambal, cuka, garam, dana gula. aduk rata</li>
                        <li>masak sampai mendidih dan kental</li>
                        <li>Dimsum siap dihidangkan</li>
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