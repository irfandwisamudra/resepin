<?php
    session_start();

    if( isset($_SESSION["login"]) ) {
        if( $_SESSION["login"] == "admin" ) {
            header("Location: admin/beranda.php");
            exit;
        } else {
            header("Location: beranda.php");
            exit;
        }

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ResepIn</title>
        <link rel="stylesheet" href="headerFooter.css" />

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

            .home {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap: 15px;
                /* padding-top: 100px; */
            }
            .home .image {
                flex: 1 1 40%;
            }
            .home .image img {
                width: 80%;
                margin: 50px 0 50px 20%;
            }
            .home .content {
                flex: 1 1 40%;
                padding: 50px;
            }
            .home .content h3 {
                font-size: 45px;
                color: #444;
                line-height: 1.5;
                text-shadow: 4px 4px 0 rgba(0, 0, 0, 0.2);
            }
            .home .content p {
                font-size: 17px;
                color: #777;
                line-height: 1.8;
                padding: 10px 0px;
            }

            .tombol {
                display: flex;
                gap: 10px;
            }
            .tombol .btn {
                text-decoration: none;
                display: flex;
                align-items: center;
                margin-top: 10px;
                padding: 5px;
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
            .tombol .btn span {
                border-radius: 5px;
                margin-left: 5px;
            }
            .tombol .btn:hover {
                background-color: rgb(69, 103, 131);
                color: white;
            }

            /* END CONTENT */
        </style>
    </head>

    <body>
        <!-- header section starts  -->

        <header class="header">
            <a href="index.php" class="logo"> <img src="logo/resepin.png" /></a>

            <nav class="navbar">
                <a href="login.php">Login</a>
                <a href="sign_up.php">Sign Up</a>
            </nav>
        </header>

        <!-- header section ends -->

        <!-- home section starts  -->

        <section class="home" id="home">
            <div class="image">
                <img src="icon/index_icon.png" />
            </div>

            <div class="content">
                <h3>Kelezatan Tiada Tara,<br />ResepIn Solusinya!</h3>
                <p>
                    ResepIn adalah platform tentang informasi resep dan
                    pemesanan makanan paling mudah dan efisien. Silahkan login
                    atau sign up terlebih dahulu :)
                </p>
                <div class="tombol">
                    <a href="login.php" class="btn">
                        Login
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                    <a href="sign_up.php" class="btn">
                        Sign Up
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- home section ends -->

        <!-- site footer -->

        <footer class="site-footer">
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="logo/resepIn.png" alt="" />
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
