<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Terms of Use</title>
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
                color: rgb(69, 103, 131);
            }

            .container {
                padding: 60px 5% 100px;
            }
            .container h1 {
                width: 100%;
                height: 100px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .container h1 span {
                font-size: 50px;
            }

            .terms-content {
                margin-top: 20px;
                margin-left: 40px;
                font-size: 15px;
            }

            .terms-content ol {
                list-style-type: decimal;
                margin-left: 20px;
            }

            .terms-content li {
                margin-bottom: 30px;
            }

            .terms-content li::marker {
                font-size: 24px;
                font-weight: bold;
            }

            .terms-content h2 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            .terms-content p {
                font-size: 16px;
                color: #666;
                margin-bottom: 10px;
            }

            .terms-content ul {
                list-style-type: disc;
                margin-left: 20px;
            }

            .terms-content li > ul {
                margin-top: 10px;
            }

            .terms-content li > ul li {
                margin-bottom: 10px;
                font-size: 16px;
            }

            .terms-content li > ul li::marker {
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

        <!-- section starts  -->

        <section class="container">
            <h1 class="heading"><span>TERMS OF USE</span></h1>

            <div class="terms-content">
                <ol>
                    <li>
                        <h2>Penerimaan Ketentuan</h2>

                        <ul>
                            <li>
                                <p>
                                    Dengan mengakses dan menggunakan situs web masakan ini, Anda secara tegas setuju untuk terikat oleh Ketentuan Penggunaan ini.
                                </p>
                            </li>
                            <li>
                                <p>
                                Jika Anda tidak setuju dengan Ketentuan Penggunaan ini, mohon untuk tidak menggunakan situs web ini.
                                </p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Konten dan Informasi</h2>
                        <p>
                            Situs web ini menyediakan informasi,resep, foto, serta pemesanan masakan dan hidangan.
                        </p>

                        <ul>
                            <li>
                                <p>
                                    Konten yang disediakan hanya untuk tujuan informasi umum. Penggunaan konten ini sepenuhnya menjadi tanggung jawab pengguna.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Kami tidak memberikan jaminan atau representasi sehubungan dengan keakuratan, kelengkapan, atau keandalan konten yang disediakan di situs web ini.
                                </p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Kewajiban Pengguna</h2>
                        <p>
                            Dalam menggunakan situs web ini, Anda setuju untuk:
                        </p>

                        <ul>
                            <li>
                                <p>
                                    Tidak melanggar hukum yang berlaku atau mengirimkan konten yang melanggar undang-undang.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Tidak menggunakan situs web ini untuk tujuan yang melanggar privasi, merusak, atau menyebabkan gangguan pada pihak lain.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Tidak menggunakan situs web ini untuk tujuan komersial tanpa izin tertulis sebelumnya dari kami.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Tidak mengirimkan konten yang mengandung virus, kode berbahaya, atau materi yang merugikan.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Tidak melakukan tindakan yang dapat mengganggu, merusak, atau membebani infrastruktur teknis situs web ini.
                                </p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Kekayaan Intelektual</h2>

                        <ul>
                            <li>
                                <p>
                                    Hak kekayaan intelektual (termasuk tetapi tidak terbatas pada hak cipta, merek dagang, dan hak paten) yang terkait dengan konten dan materi di situs web ini tetap menjadi milik kami atau pemilik aslinya.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Anda dilarang secara tegas menggunakan, menggandakan, mendistribusikan, atau melakukan tindakan lain yang melanggar hak kekayaan intelektual tanpa izin tertulis dari pemilik yang berwenang.
                                </p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Penolakan Tanggung Jawab</h2>

                        <ul>
                            <li>
                                <p>
                                    Anda menggunakan situs web ini dengan risiko Anda sendiri. Situs web ini disediakan "apa adanya" dan "sebagaimana adanya" tanpa jaminan apapun, baik secara tersurat maupun tersirat.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Kami tidak bertanggung jawab atas kerugian, cedera, atau kerusakan yang timbul secara langsung maupun tidak langsung akibat penggunaan situs web ini.
                                </p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Tautan ke Situs Pihak Ketiga</h2>

                        <ul>
                            <li>
                                <p>
                                    Situs web ini dapat berisi tautan ke situs web pihak ketiga. Kami tidak mengendalikan atau bertanggung jawab atas konten atau kebijakan privasi situs web pihak ketiga tersebut.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Penggunaan situs web pihak ketiga sepenuhnya menjadi risiko pengguna.
                                </p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h2>Perubahan Ketentuan</h2>

                        <ul>
                            <li>
                                <p>
                                    Kami berhak untuk mengubah Ketentuan Penggunaan ini setiap saat tanpa pemberitahuan sebelumnya.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Perubahan akan efektif segera setelah diterbitkan di situs web ini.
                                </p>
                            </li>
                            <li>
                                <p>
                                Dianjurkan bagi pengguna untuk secara teratur memeriksa halaman ini untuk mengetahui perubahan dalam Ketentuan Penggunaan.
                                </p>
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>
        </section>

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
