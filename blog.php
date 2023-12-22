<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="headerFooter_user.css" />

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

            .container {
                max-width: 1000px;
                margin: 70px auto 100px;
                background-color: #fff;
                padding: 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .heading {
                text-align: center;
                padding-bottom: 20px;
                text-shadow: 4px 4px 0 rgba(0, 0, 0, 0.2);
                text-transform: uppercase;
                color: #444;
                font-size: 50px;
                letter-spacing: 4px;
            }

            .heading span {
                text-transform: uppercase;
                color: rgb(69, 103, 131);
            }

            .blog {
                line-height: 1.6;
                padding: 0 5%;
                text-align: justify;
            }

            .blog ol {
                list-style-type: decimal;
                margin-left: 20px;
            }

            .blog li {
                margin-bottom: 30px;
            }

            .blog li::marker {
                font-size: 24px;
                font-weight: bold;
            }

            .blog h2 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            .blog p {
                font-size: 16px;
                color: #666;
                margin-bottom: 10px;
            }

            .blog ul {
                list-style-type: disc;
                margin-left: 20px;
            }

            .blog li > ul {
                margin-top: 10px;
            }

            .blog li > ul li {
                margin-bottom: 10px;
                font-size: 16px;
            }

            .blog li > ul li::marker {
                font-size: 16px;
                font-weight: bold;
            }

            /* END CONTENT */
        </style>
    </head>

    <body>
        <!-- header section starts  -->

        <header class="header">
            <a href="beranda.php" class="logo">
                <img src="logo/resepin.png"
            /></a>

            <nav class="navbar">
            <?php
                if( isset($_SESSION["login"]) && $_SESSION["login"] != "admin" ) {
                    echo "
                        <a href='beranda.php'>Beranda</a>
                        <a href='list.php'>List</a>
                        <a href='news.php'>News</a>
                        <a href='developer.php'>Developer</a>
                        <a href='user/dashboardUser.php'
                            ><ion-icon
                                class='iconProfile'
                                name='person-circle-outline'
                            ></ion-icon
                        ></a>
                    ";

                } else {
                    echo "
                        <style>
                            .header {
                                padding: 8px 10% 0 10%;
                                width: 80%;
                            }
                        </style>
                        
                        <a href='login.php'>Login</a>
                        <a href='sign_up.php'>Sign Up</a>
                    ";
                    
                }

            ?>
            </nav>
        </header>

        <!-- header section ends -->

        <!-- section starts -->

        <div class="container">
            <h1 class="heading"><span>BLOG</span></h1>

            <div class="blog">
                <ol>
                    <li>
                        <h2>Deskripsi Sistem</h2>
                        <p>
                            Sistem ini merupakan sebuah website yang menyediakan
                            layanan pencarian dan pemesanan makanan sesuai dengan
                            keinginan pengguna. Sistem ini memungkinkan pengguna
                            untuk mencari makanan yang ingin mereka pesan dengan
                            mudah dan efisien. Selain itu, sistem ini juga
                            menyediakan resep makanan yang mudah diikuti, sehingga
                            pengguna dapat mencoba membuat makanan tersebut sendiri.
                            Website ini juga menyediakan layanan pemesanan makanan
                            yang dapat dilakukan oleh pengguna. Pengguna dapat
                            memesan makanan untuk mengecek hasil resep asli dari
                            makanan dan buatan sendiri, atau hanya membeli makanan
                            untuk dinikmati. Proses pemesanan makanan dapat
                            dilakukan dengan mudah melalui website ini, sehingga
                            pengguna tidak perlu mengunjungi tempat makan
                            ataurestoran secara langsung.Dalam sistem ini, pengguna
                            dapat menemukan berbagai jenis makanan dan resep yang
                            tersedia. Website ini juga dapat memberikan rekomendasi
                            makanan dan resep yang cocok dengan preferensi pengguna.
                        </p>
                    </li>

                    <li>
                        <h2>Macam - Macam Fitur</h2>

                        <ul>
                            <li>
                                Login user
                                <p>
                                    Pengguna diwajibkan untuk membuat akun untuk
                                    menggunakan layanan ini. Login useraccount ini
                                    wajib diisi karena akan digunakan sebagai
                                    pemesanan dan juga bisa punya fitur favorit di
                                    dashboard profil
                                </p>
                            </li>
                            <li>
                                Register User Account
                                <p>
                                    Selain login, situs web ini juga menawarkan opsi
                                    untuk mendaftar akun baru untuk pertama kali.
                                    Terdapat fitur forgot password untuk membantu
                                    pengguna yang lupa kata sandi.
                                </p>
                            </li>
                            <li>
                                Admin Login
                                <p>
                                    Terdapat admin login yang memungkinkan admin
                                    untuk mengatur dashboard data pesanan yang masuk
                                    dan mungkin penambahan menu
                                </p>
                            </li>
                            <li>
                                Navbar
                                <p>
                                    Situs web ini memiliki navigasi bar yang
                                    memudahkan pengguna untuk menuju ke halaman yang
                                    diinginkan, seperti home, account, about,
                                    search, dan social media.
                                </p>
                            </li>
                            <li>
                                Pencarian
                                <p>
                                    Situs web ini juga dilengkapi dengan fitur
                                    pencarian untuk memudahkan pengguna mencari
                                    makanan tertentu berdasarkan kata kunci atau
                                    jenis makanan.
                                </p>
                            </li>
                            <li>
                                List All
                                <p>
                                    Terdapat fitur List All yang memudahkan pengguna
                                    untuk melihat semua jenis makanan yang tersedia
                                    di dalam web
                                </p>
                            </li>
                            <li>
                                List Recomended
                                <p>
                                    Di homepage terdapat list recommend produk
                                    secara random yang bisa dipilih
                                </p>
                            </li>
                            <li>
                                View Menu
                                <p>
                                    Saat sudah memilih makanan, akan menuju web menu
                                    lanjutan yang memuat gambar makanan, deskripsi,
                                    dan dua fitur tombol untuk “order” dan “recipe"
                                </p>
                            </li>
                            <li>
                                Menu Recipe
                                <p>
                                    Untuk menu recipe menampilkan rangkaian resep
                                    dan bahan yang dibutuhkan untuk membuat makanan
                                    yang dipilih oleh pengguna.
                                </p>
                            </li>
                            <li>
                                Menu Order
                                <p>
                                    Terdapat menu lanjutan seperti berapa banyak,
                                    dikirim ke alamat dll.
                                </p>
                            </li>
                            <li>
                                User
                                <p>
                                    Pengguna yang menggunakan sistem ini untuk
                                    mencari dan memesan makanan.
                                </p>
                            </li>
                            <li>
                                Admin
                                <p>
                                    Administrator yang bertanggung jawab atas
                                    pengelolaan data pesanan dan penambahan menu
                                </p>
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>

        <!-- section ends -->

        <!-- site footer -->

        <footer class="site-footer">
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="logo/resepin.png" alt="" />
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
                    <a href="shipping_and_processing.php"
                        ><p>Shipping and Processing</p></a
                    >
                    <a href="privacy_and_policy.php"
                        ><p>Privacy and Policy</p></a
                    >
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
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
        ></script>

        <!-- footer section ends -->
    </body>
</html>
