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
                    <b>Deskripsi:</b>
                    <p>Susi adalah makanan Jepang yang terdiri dari nasi yang digulung dengan sepotong ikan mentah atau makanan laut lainnya, seperti ikan tuna, salmon, kepiting, udang, atau sayuran. </p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>2 cangkir nasi sushi (nasi yang khusus untuk sushi)</li>
                        <li>4 lembar nori (lembaran rumput laut untuk sushi)</li>
                        <li>200 gram ikan mentah (misalnya tuna atau salmon), iris tipis</li>
                        <li>Wasabi (pasta pedas)</li>
                        <li>Jahe, iris tipis</li>
                        <li>Soy sauce (saus kedelai)</li>
                        <li>Mat sushi (sushi mat) atau alas plastik yang rapat</li>
                        <li>pisau tajam</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Masak nasi sushi sesuai petunjuk di kemasan. Setelah matang, biarkan nasi dingin hingga suhu ruangan.</li>
                        <li>Letakkan selembar nori di atas mat sushi atau alas plastik yang rapat. </li>
                        <li>Ambil sekitar setengah cangkir nasi dan ratakan secara merata di atas nori, kecuali di satu sisi nori yang paling dekat dengan Anda (sekitar 1-2 cm kosong).</li>
                        <li>Ambil sejumlah ikan mentah iris tipis dan letakkan di bagian tengah nasi. </li>
                        <li>Anda juga dapat menambahkan sayuran atau isian lain sesuai selera.</li>
                        <li>Mulailah menggulung sushi dengan hati-hati menggunakan mat sushi atau alas plastik sebagai panduan.</li>
                        <li>n. Gulung nori dari sisi yang berisi nasi dan isian ke arah sisi yang kosong, pastikan untuk menjaga gulungan tetap kencang dan rapat. </li>
                        <li>Setelah sushi digulung, biarkan sedikit beristirahat selama beberapa menit untuk memudahkan pemotongan.</li>
                        <li>Gunakan pisau tajam yang dibasahi dengan air untuk memotong gulungan sushi menjadi irisan sekitar 2-3 cm tebal.</li>
                        <li>Bersihkan pisau setiap kali sebelum memotong untuk mendapatkan irisan yang bersih dan rapi.</li>
                        <li>Sajikan sushi roll dengan wasabi, irisan jahe, dan soy sauce sebagai pelengkap.</li>
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