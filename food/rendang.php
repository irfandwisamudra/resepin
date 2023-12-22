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
                    <p>Rendang adalah masakan tradisional Indonesia yang terkenal dan populer di seluruh dunia.</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>1 kg daging sapi, potong menjadi potongan kecil </li>
                        <li>400 ml santan kental</li>
                        <li>200 ml santan encer</li>
                        <li>4 lembar daun jeruk</li>
                        <li>2 lembar daun salam</li>
                        <li>2 batang serai, memarkan bagian putihnya</li>
                        <li>2 cm lengkuas, memarkan</li>
                        <li>2 cm jahe, memarkan</li>
                        <li>4-5 sendok makan minyak goreng</li>
                    </ul>
                    <b>bumbu halus</b>
                    <ul>
                        <li>10-15 cabai merah kering, direndam dalam air panas</li>
                        <li>8 siung bawang merah</li>
                        <li>8 siung bawang merah</li>
                        <li>4 butir kemiri, sangrai sebentar</li>
                        <li>2 sendok teh ketumbar bubuk</li>
                        <li>2 sendok teh ketumbar bubuk</li>
                        <li>1 sendok teh merica bubuk</li>
                        <li>1 sendok teh bubuk kunyit</li>
                        <li>1 sendok teh garam</li>
                        <li>2 sendok makan gula merah, serut halus</li>
                    </ul>

                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Panaskan minyak dalam wajan atau panci yang besar di atas api sedang. Tumis bumbu halus hingga harum dan matang, sekitar 5-7 menit.</li>
                        <li>Tambahkan daun jeruk, daun salam, serai, lengkuas, dan jahe ke dalam tumisan bumbu halus. </li>
                        <li>Aduk rata dan masak selama beberapa menit untuk mengeluarkan aroma rempah-rempah.</li>
                        <li>Masukkan potongan daging sapi ke dalam wajan dan aduk rata dengan bumbu. </li>
                        <li> Pastikan semua potongan daging terbalut bumbu dengan baik.</li>
                        <li>Tuangkan santan encer ke dalam wajan, aduk rata, dan biarkan mendidih. Setelah itu, tambahkan santan kental dan aduk kembali.</li>
                        <li>Setelah daging empuk dan bumbu meresap, aduk rendang secara teratur untuk menghindari gosong atau lengket di dasar panci.</li>
                        <li>Biarkan rendang terus dimasak dengan api kecil hingga bumbu mengental, berwarna cokelat gelap, dan daging terendam dalam bumbu kental.</li>
                        <li>Jika rendang sudah siap, angkat dari api dan biarkan sedikit dingin sebelum disajikan.</li>
                        <li>. Rendang akan semakin enak jika disimpan semalaman dan disajikan keesokan harinya untuk memberi waktu bumbu meresap dengan lebih baik.</li>
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