<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chef</title>
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
                height: 200px;
                width: 200px;
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
            <h1 class="heading"><span>CHEF</span></h1>

            <div class="box-container">
                <div class="box">
                    <img src="foto/juna.webp" alt="" class="img" />
                    <h3>CHEF juna</h3>
                    <p class="text">
                    Junior John Rorimpandey, yang lebih dikenal sebagai Juna Rorimpandey atau Chef Juna adalah seorang jurutama masak profesional asal Indonesia yang berdarah Manado. Namanya dikenal luas karena menjadi juri di ajang memasak MasterChef Indonesia
                    </p>
                </div>

                <div class="box">
                    <img src="foto/arnold.webp" alt="" class="img" />
                    <h3>CHEF Arnold</h3>

                    <p class="text">
                    Arnold Poernomo atau yang lebih dikenal sebagai Chef Arnold adalah seorang jurutama masak dan koki selebritas asal Indonesia. Dia dikenal luas setelah menjadi juri pada ajang memasak MasterChef Indonesia. Dia pertama ditunjuk menjadi juri pada tahun 2013 menggantikan Juna Rorimpandey.
                    </p>
                </div>

                <div class="box">
                    <img src="foto/farah.webp" alt="" class="img" />
                    <h3>CHEF Farah</h3>
                    <p class="text">
                    Farah Farhanah atau yang lebih dikenal dengan Farah Quinn adalah seorang koki dan pembawa acara Indonesia keturunan Palembang, Sumatera Selatan. 
                    </p>
                </div>

                <div class="box">
                    <img src="foto/renata.webp" alt="" class="img" />
                    <h3>Andika</h3>
                    <p class="text">
                    Puti Renatta Ratnasari Moeloek, yang lebih dikenal sebagai Renatta Moeloek atau Chef Renatta adalah seorang jurutama masak dan restaurateur berkebangsaan Indonesia. Ia menyelesaikan pendidikan memasak di Le Cordon Bleu Culinary Art di Paris, Prancis 
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
