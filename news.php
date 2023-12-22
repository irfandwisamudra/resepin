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
        <title>News</title>
        <link rel="stylesheet" href="headerFooter_user.css">

        <style>
            * {
                padding: 0;
                margin: 0;
                font-family: verdana;
            }
            html {
                font-size: 62.5%;
                scroll-behavior: smooth;
            }

            /* CONTENT */

            .heading span {
                text-transform: uppercase;
                color: rgb(69, 103, 131);
            }

            .about {
                width: 90%;
                padding: 60px 5%;
            }
            .about h1 {
                width: 100%;
                height: 100px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .about h1 span {
                font-size: 50px;
            }

            .about .row {
                display: flex;
                align-items: center;
                background: #444;
                flex-wrap: wrap;
            }

            .about .row .image {
                flex: 1 1 450px;
            }

            .about .row .image img {
                width: 100%;
            }
            .about .row .content {
                flex: 1 1 450px;
                padding: 20px;
            }

            .about .row .content h3 {
                font-size: 30px;
                color: #fff;
            }

            .about .row .content p {
                font-size: 16px;
                color: #ccc;
                padding: 10px 0;
                line-height: 1.8;
            }

            .btn {
                width: fit-content;
                display: flex;
                align-items: center;
                margin-top: 10px;
                padding-left: 10px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                color: rgb(69, 103, 131);
                cursor: pointer;
                font-size: 17px;
                font-weight: bold;
                background: #fff;
            }
            .btn span {
                margin-top: 8px;
                border-radius: 5px;
                margin-left: 5px;
            }
            .btn:hover {
                background-color: #444;
                transform: scale(1.1);
            }

            /* END CONTENT */
        </style>
    </head>

    <body>
        <!-- header section starts  -->

        <header class="header">
            <a href="index.php" class="logo">
                <img src="logo/resepin.png"
            /></a>

            <nav class="navbar">
                <a href="beranda.php">Beranda</a>
                <a href="list.php">List</a>
                <a href="news.php">News</a>
                <a href="developer.php">Developer</a>
                <a href="user/dashboardUser.php"
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
            <h1 class="heading"><span>NEWS</span></h1>

            <div class="row">
                <div class="image">
                    <img src="news/news1.jpg" alt="" />
                </div>

                <div class="content">
                    <h3>
                        6 Tren Makanan yang Akan Viral di 2023, Ide Jualan Laris Manis
                    </h3>
                    <p>
                        Dilansir Food Network, tren makanan di 2023 sebenarnya tidak akan jauh berbeda dengan 2022, lho. Bahkan, makanan Korea Selatan bercita rasa pedas akan tetap mendominasi tren makanan di 2023, seperti dakgangjeong atau ayam pedas manis.
                    </p>
                    <p>
                        Nah, tren makanan ini tentunya akan menjadi ide jualan yang menggiurkan di tahun ini bagi pelaku usaha. Bisa jadi inspirasi jualan yang cuan, berikut sepuluh tren makanan yang diprediksi viral di 2023.
                    </p>
                    <a href="news/news1.php" class="btn"
                        >Learn More
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- section ends -->

        <!-- section 2 start  -->

        <section class="about" id="about">
            <div class="row">
                <div class="image">
                    <img src="news/news2.webp" alt="" />
                </div>

                <div class="content">
                    <h3>
                        Indonesia Masuk Daftar Pemilik Makanan Terlezat di Dunia 2022 Versi TasteAtlas
                    </h3>
                    <p>
                        TasteAtlas,sebuah panduan perjalanan seputar kuliner berbasis di Kroasia, telah menyusun peringkat makanan terlezat di dunia tahun 2022.
                    </p>
                    <p>
                        TasteAtlas membuat sebuah daftar ekstensif yang menunjukkan hidangan terbaik di seluruh dunia.
                    </p>
                    <a href="news/news2.php" class="btn"
                        >Learn More
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- section 2 ends -->

        <!-- section 3 start  -->

        <section class="about" id="about">
            <div class="row">
                <div class="image">
                    <img src="news/news3.jpeg" alt="" />
                </div>

                <div class="content">
                    <h3>
                        5 Negara yang Punya Makanan Terenak Versi Traveler,Ada Indonesia
                    </h3>
                    <p>
                        Selain spot wisata seru, beberapa negara di dunia juga punya kuliner menarik. Seperti 5 negara ini yang menjadi tempat terbaik untuk berburu kuliner.
                    </p>
                    <p>
                        Momen liburan pastinya ingin dipakai untuk menghabiskan waktu sebaik mungkin. Namun semua tidak lengkap tanpa mencicipi beberapa makanan khas daerah yang dikunjungi.
                    </p>
                    <a href="news/news3.php" class="btn"
                        >Learn More
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- section 3 ends -->

        <!-- section 4 start  -->

        <section class="about" id="about">
            <div class="row">
                <div class="image">
                    <img src="news/news4.jpeg" alt="" />
                </div>

                <div class="content">
                    <h3>
                        Terlalu Lama di Indonesia, Bule Ini Punya Kebiasaan Makan Gaya Lokal
                    </h3>
                    <p>
                        Terlalu lama tinggal di Indonesia, bule ini mengalami perubahan cara makan.
                    </p>
                    <p>
                        Ketika kembali ke negaranya, ia mengaku tak bisa melepaskan kebiasaan unik.
                    </p>
                    <a href="news/news4.php" class="btn"
                        >Learn More
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- section 4 ends -->

        <!-- section 5 start  -->

        <section class="about" id="about">
            <div class="row">
                <div class="image">
                    <img src="news/news5.jpg" alt="" />
                </div>

                <div class="content">
                    <h3>
                        6 Nama Makanan Khas Indonesia Diterjemahkan ke Bahasa Inggris Ini Kocak
                    </h3>
                    <p>
                        Bahasa Inggris merupakan bahasa internasional yang kini bisa dikatakan sebagai bahasa wajib wisatawan ketika berkunjung ke suatu negara. 
                    </p>
                    <p>
                        Meski sudah menjadi bahasa internasional, ada beberapa nama benda atau makanan yang terdengar aneh ketika diterjemahkan ke bahasa Inggris.
                    </p>
                    <a href="news/news5.php" class="btn"
                        >Learn More
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- section 5 ends -->

        <!-- site footer -->

        <footer class="site-footer">
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="logo/resepin.png" alt="">
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
                    <a href="about_us.php"><p>About Us</p></a>
                    <a href="contact_us.php"><p>Contact Us</p></a>
                    <a href="chef.php"><p>Chef</p></a>
                    <a href="blog.php"><p>Blog</p></a>
                    <a href="faq.php"><p>FAQs</p></a>
                    <a href="review.php"><p>Review</p></a>
                    <a href="shipping_and_processing.php"><p>Shipping and Processing</p></a>
                    <a href="privacy_and_policy.php"><p>Privacy and Policy</p></a>
                    <a href="terms_of_use.php"><p>Terms of Use</p></a>
                    <a href="disclaimer.php"><p>Disclaimer</p></a>
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
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <!-- footer section ends -->
    </body>
</html>
