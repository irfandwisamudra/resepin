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
                    <p>Sosis gulung adalah hidangan yang terdiri dari sosis yang dililitkan dengan adonan atau bahan lain, kemudian dipanggang atau digoreng hingga matang. </p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>4 buah sosis</li>
                        <li>Lembaran adonan roti siap pakai atau adonan roti yang sudah dibuat sendiri</li>
                        <li>Telur (untuk mengoles adonan roti)</li>
                        <li>Biji wijen (opsional, untuk taburan)</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Jika menggunakan adonan roti siap pakai, ikuti petunjuk di kemasan untuk mempersiapkannya.</li>
                        <li>Jika membuat adonan roti sendiri, siapkan bahan dan ikuti resep adonan roti yang Anda pilih.</li>
                        <li>Jika menggunakan adonan roti siap pakai, buka lembaran adonan roti dan potong menjadi segmen yang sesuai dengan panjang sosis.</li>
                        <li>Jika menggunakan adonan roti sendiri, gilas adonan hingga tipis dan potong menjadi segmen yang sesuai dengan panjang sosis.</li>
                        <li>Gulungkan adonan roti pada setiap sosis hingga tertutup rapat. Pastikan ujung adonan roti ditekan dengan baik agar tidak terlepas saat dipanggang.</li>
                        <li>Siapkan loyang yang sudah diolesi dengan sedikit minyak atau dialasi dengan kertas roti. Letakkan sosis gulung di atas loyang dengan jarak yang cukup antara satu sama lain.</li>
                        <li>Kocok telur dalam mangkuk kecil. Gunakan kuas atau sendok untuk mengoles permukaan sosis gulung dengan telur. </li>
                        <li>Hal ini akan memberikan warna keemasan yang cantik saat dipanggang. Jika diinginkan, taburi biji wijen di atas sosis gulung.</li>
                        <li>Panaskan oven sesuai dengan petunjuk suhu pada adonan roti atau pada suhu sekitar 180-200 derajat Celsius. </li>
                        <li>Panggang sosis gulung selama sekitar 15-20 menit, atau hingga adonan roti berwarna keemasan dan matang.</li>
                        <li>Setelah matang, angkat sosis gulung dari oven dan biarkan sedikit dingin sebelum disajikan.</li>
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