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
        <title>News 1</title>
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
                    >6 Tren Makanan yang Akan Viral di 2023, Ide Jualan Laris
                    Manis</span
                >
            </h1>
            <div class="terms-content">
                <p>
                    1. Katsu sando, roti lapis ala Jepang dengan isian katsu
                    wagyu, telur, sampai sayur, diprediksi akan populer di 2023
                    mengalahkan fruit sando
                </p>
                <img src="gb1.jpg" alt="" />
                <p>
                    2. Karena efek Korean wave, dakgangjeong, ayam pedas manis
                    dari Negeri Ginseng, disebut menjadi kudapan yang akan
                    kembali viral di 2023
                </p>
                <img src="gb2.jpg" alt="" />
                <p>
                    3. Churros yang disajikan dengan topping taburan gula halus
                    dan saus cokelat bisa jadi ide jualan yang laris manis dan
                    penuh cuan, deh
                </p>
                <img src="gb03.jpg" alt="" />
                <p>
                    4. Sebagai pencinta pedas, cireng dengan isi ayam pedas
                    menjadi jajanan Indonesia yang tak pernah sepi peminat
                    sejauh ini. Ide jualan, gak, sih?
                </p>
                <img src="gb4.jpg" alt="" />
                <p>
                    5. Meski cukup lama populer di Indonesia, tetapi makanan
                    dengan siraman saus telur asin ataupun salted egg masih
                    banyak diburu di tahun ini
                </p>
                <img src="gb5.jpg" alt="" />
                <p>
                    6. Dengan banyak varian kuah dan topping, ramen pastinya
                    tidak pernah sepi peminat di 2023. Jenis mi ini bahkan dicap
                    paling favorit selama 2022
                </p>
                <img src="gb6.jpg" alt="" />
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
