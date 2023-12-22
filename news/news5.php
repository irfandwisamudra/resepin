<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>News 5</title>
        <link rel="stylesheet" href="news.css" />
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

        <!-- section starts  -->

        <section class="about" id="about">
            <h1 class="heading">
                <span
                    >6 Nama Makanan Khas Indonesia Diterjemahkan ke Bahasa
                    Inggris Ini Kocak</span
                >
            </h1>
            <div class="terms-content">
                <p>
                    Bahasa Inggris merupakan bahasa internasional yang kini bisa
                    dikatakan sebagai bahasa wajib wisatawan ketika berkunjung
                    ke suatu negara. Meski sudah menjadi bahasa internasional,
                    ada beberapa nama benda atau makanan yang terdengar aneh
                    ketika diterjemahkan ke bahasa Inggris. Diterjemahkan ke
                    bahasa Inggris, nama makanan tradisional Indonesia jadi
                    terdengar aneh. Selain itu, citra dari makanan tradisional
                    tersebut seakan hilang karena namanya diubah agar lebih
                    terdengar keren. Nama makanan tradisional Indonesia yang
                    diterjemahkan ke bahasa Inggris ini biasanya tercantum di
                    daftar menu sebuah restoran. Selain makanan berat, ada juga
                    nama jajanan pasar seperti kelepon dan lemper diterjemahkan
                    ke bahasa Inggris. Diunggah di media sosial, nama makanan
                    tradisional Indonesia diterjemahkan ke bahasa Inggris ini
                    bikin geleng kepala. Bahkan ada beberapa nama makanan yang
                    namanya terkesan dipaksakan.
                </p>
                <br />
                <p>
                    1. Mungkin gara-gara bentuknya seperti takoyaki, nama
                    kelepon berubah jadi green takoyaki.
                </p>
                <img src="klepon.jpg" alt="" /> <br />
                <br />
                <p>
                    2. Nama ayam geprek berubah jadi aneh banget ketika
                    diterjemahkan ke bahasa Inggris.
                </p>
                <img src="geprek.jpg" alt="" /> <br />
                <br />
                <p>
                    3. Tahu dalam bahasa Inggris emang know sih, tapi jadi aneh
                    ketika diaplikasikan ke nama makanan.
                </p>
                <img src="tahu.jpg" alt="" /> <br />
                <br />
                <p>
                    4. Bahasa Inggrisnya ribet banget, emang yang paling bener
                    ya nyebut rawon aja.
                </p>
                <img src="rawon.jpg" alt="" /> <br />
                <br />
                <p>
                    5. Selain namanya berubah jadi panjang banget, harga makanan
                    khas indonesia yang diinggriskan juga jadi mahal berkali
                    lipat.
                </p>
                <img src="sayur.jpg" alt="" /> <br />
                <br />
                <p>
                    6. Sensasi santap nasi padang rasanya berbeda kalau namanya
                    diubah jadi shining rice.
                </p>
                <img src="padang.jpg" alt="" /> <br />
            </div>
        </section>

        <!-- section ends -->

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
                    <a href="../shipping_and_processing.php"
                        ><p>Shipping and Processing</p></a
                    >
                    <a href="../privacy_and_policy.php"
                        ><p>Privacy and Policy</p></a
                    >
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
