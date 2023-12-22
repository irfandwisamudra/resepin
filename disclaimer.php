<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Disclaimer</title>
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

            #menu-btn {
                font-size: 25px;
                border-radius: 5px;
                background: #eee;
                color: rgb(69, 103, 131);
                padding: 10px 15px;
                cursor: pointer;
                display: none;
            }

            .developer {
                margin-top: 70px;
                margin-bottom: 50px;
            }

            .developer hr {
                margin-bottom: 40px;
                height: 5px;
                background-color: rgb(69, 103, 131);
            }

            .developer .box-container {
                margin: auto;
                width: 1000px;
                background-color: rgba(0, 0, 0, 0.2);
                padding: 20px 50px;
                border-radius: 25px;
                box-shadow: 5px 5px 0 rgba(0, 0, 0, 1);
            }

            .developer .box-container .box {
                border: 2px solid rgb(69, 103, 131);
                text-align: center;
                padding: 30px 20px;
                margin: 50px;
                width: 400px;
            }

            .developer .box-container p {
                font-size: 15px;
                line-height: 1.8;
                color: #444;
                padding: 20px 0;
                text-align: justify;
            }

            .developer .box-container .box .user {
                height: 150px;
                width: 150px;
                border-radius: 50%;
                object-fit: cover;
            }

            .developer .box-container .box h3 {
                padding: 10px 0;
                font-size: 20px;
                color: rgb(69, 103, 131);
            }

            .developer .box-container .box .stars i {
                font-size: 15px;
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

        <section class="developer" id="developer">
            <h1 class="heading"><span>Disclaimer</span></h1>
            <hr />
            <div class="box-container">
                <a href="#" class="logo">
                    <img src="logo/resepin.png" width="350px"
                /></a>
                <p> 
                Penyangkalan Tanggung Jawab
                <br>
                <br>
                Informasi yang terdapat di website RESEPIN disediakan hanya untuk tujuan informasi umum. Meskipun kami berusaha keras untuk menjaga keakuratan dan kebaruan informasi, kami tidak memberikan jaminan atau representasi apa pun, baik tersurat maupun tersirat, tentang kelengkapan, keandalan, ketersediaan, atau kecocokan dengan tujuan tertentu terkait dengan website ini atau informasi, produk, layanan, atau grafik yang terdapat di dalamnya.
                <br>
                Segala tindakan yang Anda ambil berdasarkan informasi yang ditemukan di website RESEPIN sepenuhnya adalah tanggung jawab Anda sendiri. Kami tidak akan bertanggung jawab atas kerugian atau kerusakan apa pun, termasuk namun tidak terbatas pada kerugian langsung, tidak langsung, insidental, atau konsekuensial yang timbul dari atau dalam kaitannya dengan penggunaan website ini.
                <br>
                RESEPIN dapat mengandung tautan ke situs web eksternal yang bukan di bawah kendali kami. Kami tidak bertanggung jawab atas konten, kebijakan privasi, atau praktik situs web eksternal tersebut. Penyediaan tautan tersebut tidak mencerminkan persetujuan atau dukungan dari pihak kami terhadap situs web tersebut. Anda bertanggung jawab untuk melakukan penilaian independen terhadap keamanan dan keandalan situs web eksternal tersebut sebelum melakukan tindakan apa pun.
                <br>
                Kami berupaya menjaga keberlanjutan dan ketersediaan website RESEPIN. Namun, kami tidak bertanggung jawab jika website ini sementara tidak dapat diakses karena gangguan teknis atau perbaikan yang sedang dilakukan.
                <br>
                Setiap penggunaan website RESEPIN sepenuhnya menjadi risiko Anda sendiri. Anda harus menyadari bahwa penggunaan informasi atau materi apa pun yang ada di dalamnya sepenuhnya berada di bawah tanggung jawab dan risiko Anda sendiri, dan kami tidak bertanggung jawab atas penggunaan tersebut.
                <br>
                Kami berhak untuk mengubah atau memperbarui disclaimer ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Dengan tetap menggunakan website RESEPIN, Anda dianggap menerima dan setuju untuk terikat dengan disclaimer ini.
                <br>
                Jika Anda memiliki pertanyaan atau kekhawatiran mengenai disclaimer ini, silakan hubungi kami melalui halaman "Hubungi Kami" di website RESEPIN.
                <br>
                Terima kasih atas pengertian dan dukungan Anda.
                </p>






            </div>
        </section>

        <!-- section ends -->

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
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
        ></script>

        <!-- footer section ends -->
    </body>
</html>
