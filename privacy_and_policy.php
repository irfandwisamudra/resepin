<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Privacy and Policy</title>
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
            <h1 class="heading"><span>Privacy And Policy</span></h1>
            <hr />
            <div class="box-container">
                <a href="#" class="logo">
                    <img src="logo/resepin.png" width="350px"
                /></a>
                <p> 
                    Kebijakan Privasi
                    <br>
                    Kami di RESEPIN sangat menghargai privasi pengunjung dan pengguna kami. Dokumen ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi yang Anda berikan saat mengakses atau menggunakan website kami.
                    <br>
                    <br>
                    Informasi yang Kami Kumpulkan <br>
                    Ketika Anda menggunakan RESEPIN, kami mungkin mengumpulkan informasi pribadi tertentu seperti nama, alamat email, dan informasi kontak lainnya yang Anda berikan secara sukarela saat mendaftar, mengirimkan resep, atau berpartisipasi dalam fitur komunitas kami.
                    <br>
                    <br>
                    Penggunaan Informasi <br>
                    Informasi pribadi yang kami kumpulkan digunakan untuk menyediakan layanan dan fitur RESEPIN, termasuk pengiriman konten yang relevan, interaksi dengan komunitas, dan pemberitahuan mengenai pembaruan atau promosi yang mungkin menarik bagi Anda. Kami tidak akan mengungkapkan informasi pribadi Anda kepada pihak ketiga tanpa izin Anda, kecuali jika diwajibkan oleh hukum.
                    <br>
                    <br>
                    Kuki dan Teknologi Pelacakan <br>
                    RESEPIN menggunakan teknologi kuki (cookies) dan alat pelacakan lainnya untuk mengumpulkan informasi non-pribadi seperti alamat IP, jenis browser, dan pola penggunaan. Tujuan penggunaan teknologi ini adalah untuk meningkatkan pengalaman pengguna, menganalisis tren, dan mengoptimalkan fungsi website kami. Anda dapat mengatur preferensi peramban Anda untuk menolak kuki, tetapi ini mungkin mempengaruhi aksesibilitas dan fungsionalitas beberapa fitur RESEPIN.
                    <br>
                    <br>
                    Keamanan Data <br>
                    Kami mengambil langkah-langkah keamanan yang wajar untuk melindungi informasi pribadi yang Anda berikan, termasuk enkripsi data saat ditransmisikan. Meskipun demikian, tidak ada metode transmisi atau penyimpanan data yang 100% aman. Oleh karena itu, kami tidak dapat menjamin keamanan mutlak data pribadi Anda, dan penggunaan RESEPIN adalah resiko Anda sendiri.
                    <br>
                    <br>
                    Tautan Eksternal <br>
                    RESEPIN mungkin menyertakan tautan ke situs web eksternal. Kami tidak bertanggung jawab atas kebijakan privasi atau konten situs web tersebut. Harap diingat bahwa saat Anda meninggalkan RESEPIN dan mengakses situs web eksternal, kebijakan privasi kami tidak lagi berlaku.
                    <br>
                    <br>
                    Perubahan Kebijakan Privasi <br>
                    Kami dapat mengubah kebijakan privasi ini dari waktu ke waktu untuk mencerminkan perubahan pada praktik informasi kami. Perubahan tersebut akan diberitahukan melalui pembaruan pada website kami. Dengan tetap mengakses dan menggunakan RESEPIN setelah perubahan tersebut, Anda menyetujui kebijakan privasi yang diperbarui.
                    <br>
                    <br>
                    Kontak
                    <br>
                    Jika Anda memiliki pertanyaan, komentar, atau kekhawatiran mengenai kebijakan privasi kami, silakan hubungi kami melalui halaman "Hubungi Kami" di website RESEPIN.
                    <br>
                    <br>
                    Terima kasih telah mempercayakan privasi Anda kepada kami di RESEPIN. Kami berkomitmen untuk melindungi dan menghormati informasi pribadi Anda dengan sepenuhnya.
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
