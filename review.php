<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Review</title>
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

            .review {
                margin-top: 70px;
                padding-bottom: 50px;
            }

            .review .box-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
                gap: 20px;
                width: 90%;
                padding: 0 5%;
            }

            .review .box-container .box {
                border: 2px solid rgb(69, 103, 131);
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                border-radius: 5px;
                padding: 25px;
                background: #fff;
                text-align: center;
                position: relative;
                overflow: hidden;
                z-index: 0;
            }

            .review .box-container .box .img {
                height: 100px;
                width: 100px;
                border-radius: 50%;
                object-fit: cover;
                border: 5px solid #fff;
            }

            .review .box-container .box h3 {
                color: #fff;
                font-size: 22px;
                padding: 5px 0;
            }

            .review .box-container .box .stars {
                color: #fff;
            }

            .review .box-container .box .text {
                color: #777;
                line-height: 1.8;
                font-size: 16px;
                padding-top: 40px;
            }

            .review .box-container .box::before {
                content: "";
                position: absolute;
                top: -40px;
                left: 50%;
                transform: translateX(-50%);
                background: rgb(69, 103, 131);
                border-bottom-left-radius: 50%;
                border-bottom-right-radius: 50%;
                height: 250px;
                width: 120%;
                z-index: -1;
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

        <!-- review section starts  -->

        <section class="review" id="review">
            <h1 class="heading"><span>REVIEW</span></h1>

            <div class="box-container">
                <div class="box">
                    <img src="foto/orang1.jpg" alt="" class="img" />
                    <h3>Agus</h3>
                    <div class="stars">
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                    </div>
                    <p class="text">
                    "Saya sangat terkesan dengan website RESEPIN! Desainnya yang intuitif membuat saya mudah untuk menemukan resep makanan favorit saya. Langkah-langkah yang jelas dan gambar-gambar yang menggugah selera membuat proses memasak menjadi menyenangkan. Saya juga senang bisa bergabung dengan komunitas RESEPIN dan berbagi resep pribadi saya dengan orang lain. Terima kasih RESEPIN, kalian telah menjadi sumber inspirasi utama saya dalam memasak!"
                    </p>
                </div>

                <div class="box">
                    <img src="foto/orang2.jpg" alt="" class="img" />
                    <h3>Saskia</h3>
                    <div class="stars">
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star_half.png" alt="" width="20px" />
                    </div>
                    <p class="text">
                    "RESEPIN adalah platform yang sangat berguna bagi saya. Saya suka mencoba masakan dari berbagai negara, dan dengan RESEPIN, saya dapat dengan mudah menemukan resep autentik dari seluruh dunia. Fitur komunitasnya juga luar biasa, karena saya bisa mendapatkan saran dan tips dari para pengguna lain. Terima kasih, RESEPIN, sudah membantu saya memperluas repertoar masakan saya!"
                    </p>
                </div>

                <div class="box">
                    <img src="foto/orang3.jpg" alt="" class="img" />
                    <h3>Andika</h3>
                    <div class="stars">
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star.png" alt="" width="20px" />
                        <img src="icon/star_empty.png" alt="" width="20px" />
                    </div>
                    <p class="text">
                    "Saya merasa bahwa navigasi di website RESEPIN sedikit rumit. Saya mengalami kesulitan dalam mencari kategori resep tertentu dan kadang-kadang butuh waktu lama untuk menemukan resep yang saya inginkan. Saya berharap ada fitur pencarian yang lebih kuat atau tata letak yang lebih intuitif untuk meningkatkan pengalaman pengguna. Selain itu, saya sangat menikmati konten yang disajikan oleh RESEPIN dan berharap masalah navigasi ini dapat diperbaiki."
                    </p>
                </div>
            </div>
        </section>

        <!-- review section ends -->

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
