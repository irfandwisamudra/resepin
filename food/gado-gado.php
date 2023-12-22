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
                    <p>Gado-gado adalah hidangan salad sayuran segar yang dihiasi dengan berbagai bahan seperti tahu, tempe, kentang rebus, mentimun, taoge dan telur rebus.</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>2 buah kentang</li>
                        <li>1 buah wortel</li>
                        <li>8 lembar daun selada</li>
                        <li>1 buah timun</li>
                        <li>100 gram kacang panjang</li>
                        <li>1 buah kol</li>
                        <li>1 buah lontong</li>
                        <li>1 papan tempe</li>
                        <li>2 buah tahu</li>
                    </ul>
                    <b>Bahan saus kacang</b>
                    <ul>
                        <li>700 ml santan</li>
                        <li>4 lembar daun jeruk</li>
                        <li>50 gram gula merah, iris halus</li>
                        <li>2 sdm kecap manis</li>
                        <li>1 sdt gula pasir</li>
                        <li>1 sdt asam jawa</li>
                        <li>2 sdm kecap manis</li>
                        <li>1 sdt gula pasir</li>
                        <li>2 sdt garam</li>
                        <li>2 sdm minyak untuk menumis</li>
                        <li>bawang merah goreng secukupnya</li>
                        <li>kerupuk udang secukupnya</li>
                        <li>telur rebus secukupnya</li>
                    </ul>
                    <b>Bahan bumbu halus</b>
                    <ul>
                        <li>8 buah cabe merah keriting rebus sebentar</li>
                        <li>4 siung bawang putih</li>
                        <li>3 cm kencur</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Kupas sayuran seperti kentang dan wortel. Cuci bersih semua sayuran.</li>
                        <li>Potong-potong kentang dan wortel dengan bentuk dadu sedang. Iris kasar kol.</li>
                        <li>Potong-potong kacang panjang.</li>
                        <li>Panaskan air secukupnya dalam panci hingga mendidih.</li>
                        <li>Ambil sedikit air mendidih lalu seduh toge. Tiriskan lalu sisihkan.</li>
                        <li>Rebus kentang, wortel, kol, dan kacang panjang dalam air mendidih hingga matang.</li>
                        <li>Angkat dan tiriskan, lalu sisihkan.</li>
                        <li>Potong-potong timun, lalu sisihkan.</li>
                        <li>Iris kasar selada atau biarkan utuh, sesuai selera. Sisihkan.</li>
                        <li>Haluskan 1 siung bawang putih dan garam. Tambahkan sedikit air.</li>
                        <li>Rendam tempe dan tahu ke dalamnya.</li>
                        <li>Goreng dalam minyak panas. Angkat dan tiriskan, lalu potong-potong dengan bentuk dadu sedang. </li>
                        <li>Potong-potong lontong dengan bentuk dadu sedang. Sisihkan.</li>
                        <li>panaskan minyak, masukkan kacang tanah, goreng sampai matang.</li>
                        <li>Giling kacang menggunakan blender hingga halus. Sisihkan.</li>
                        <li>Larutkan asam jawa dengan 3 sdm air panas. Saring dan ambil airnya. Sisihkan.</li>
                        <li>Panaskan minyak, tumis bumbu halus dan daun jeruk hingga harum.</li>
                        <li>Masukkan gilingan kacang tanah, aduk rata.</li>
                        <li>Masukkan santan, gula merah, kecap manis, dan garam. Aduk hingga rata dan masak hingga mendidih</li>
                        <li>Masukkan air asam jawa, aduk rata.</li>
                        <li>Masak hingga saus mengental dan koreksi rasanya.</li>
                        <li>Angkat dan sisihkan.</li>
                        <li>Tata di piring potongan lontong, kentang, tahu, tempe, dan semua sayuran.</li>
                        <li>Beri telur rebus yang dibelah menjadi 2 bagian.</li>
                        <li>Tuang saus kacang sesuai selera.</li>
                        <li>Taburi dengan bawang merah goreng dan sajikan bersama kerupuk udang.</li>
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