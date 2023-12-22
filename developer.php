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
        <title>Developer</title>
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
            }

            .developer .box-container {
                display: flex;
                position: relative;
                flex-wrap: wrap;
                justify-content: center;
            }

            .developer .box-container .box {
                border: 2px solid rgb(69, 103, 131);
                text-align: center;
                padding: 30px 20px;
                margin: 50px;
                width: 400px;
                border-radius: 5px;
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
            }

            .developer .box-container .box:hover {
                background-color: rgb(69, 103, 131);
                border: 3px solid black;
            }

            .developer .box-container .box p {
                height: 150px;
                font-size: 15px;
                line-height: 1.8;
                color: #444;
                padding: 20px 0;
                background-color: #fff;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .developer .box-container .box .user {
                height: 150px;
                width: 150px;
                border-radius: 50%;
                object-fit: cover;
                border: 3px solid white;
                margin-bottom: 20px;
            }

            .developer .box-container .box h3 {
                padding: 10px 0;
                font-size: 20px;
                color: black;
                background-color: #fff;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            .developer .box-container .box a {
                width: 120px;
                margin: auto;
                margin-top: 10px;
                text-decoration: none;
            }

            .btn{
                width: 170px;
                display: flex;
                align-items: center;
                margin-top: 10px;
                padding-left: 10px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 5px 5px 0 rgba(22, 160, 133, .2);
                color:rgb(69, 103, 131);
                cursor: pointer;
                font-size: 17px;
                font-weight: bold;
                background: #fff;
            }

            .btn span{
                margin-top: 8px;
                border-radius: 5px;
                margin-left: 5px;
            }

            .btn:hover{
                background-color: #444;
                transform: scale(1.1);
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

        <section class="developer" id="developer">
            <h1 class="heading"><span>developer</span></h1>

            <div class="box-container">
                <div id="animasi1">
                    <div class="box">
                        <img src="foto/irfan.jpg" class="user" alt="" />
                        <p>
                            <strong>Project :</strong> <br />Beranda Admin, Daftar Kategori,
                            <br />Tambah Daftar Kategori, Ubah Daftar Kategori, <br />Pesanan.
                        </p>
                        <h3>Irfan Dwi Samudra</h3>
                        <a
                            href="website/web_irfan/index.php"
                            class="btn"
                        >
                            Website
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>

                <div id="animasi2">
                    <div class="box">
                        <img src="foto/noval.jpg" class="user" alt="" />
                        <p>
                            <strong>Project :</strong> <br />Dashboard User,
                            Account User, <br />Favorite User, Order User, <br />
                            Profile User.
                        </p>
                        <h3>Ahmad Noval Muhyiddin</h3>
                        <a href="website/web_noval/index.html" class="btn">
                            Website
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>

                <div id="animasi3">
                    <div class="box">
                        <img src="foto/rizka.jpg" class="user" alt="" />
                        <p>
                            <strong>Project :</strong> <br />Landing Page, Beranda User,
                            <br />Contact Us, FAQs, <br />Shipping and Processing.
                        </p>
                        <h3>Nurul Rizka</h3>
                        <a href="website/web_rizka/index.html" class="btn">
                            Website
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>

                <div id="animasi4">
                    <div class="box">
                        <img src="foto/niki.jpeg" class="user" alt="" />
                        <p>
                            <strong>Project :</strong> <br />Login, Sign Up,
                            <br />Forgot Password, Email Verification, <br />New Password.
                        </p>
                        <h3>Niki Raihan Laili</h3>
                        <a href="website/web_niki/index.html" class="btn">
                            Website
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>

                <div id="animasi5">
                    <div class="box">
                        <img src="foto/vania.jpeg" class="user" alt="" />
                        <p>
                            <strong>Project :</strong> <br />List, Resep,
                            <br />Checkout, Checkout Simpan, <br />Blog.
                        </p>
                        <h3>Vania Wrenda Adelavisa</h3>
                        <a href="website/web_vania/index.html" class="btn">
                            Website
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>

                <div id="animasi6">
                    <div class="box">
                        <img src="foto/melly.jpeg" class="user" alt="" />
                        <p>
                            <strong>Project :</strong> <br />News, Info News,
                            <br />Developer, Promo, <br />Terms of Use.
                        </p>
                        <h3>Melly Chandra Wardani</h3>
                        <a href="website/web_melly/index.html" class="btn">
                            Website
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>

                <div id="animasi7">
                    <div class="box">
                        <img src="foto/dama.jpg" class="user" alt="" />
                        <p>
                            <strong>Project :</strong> <br />About Us, Chef,
                            <br />Review, Privacy and Policy, <br />Disclaimer.
                        </p>
                        <h3>Santika Damayanti</h3>
                        <a href="website/web_dama/index.html" class="btn">
                            Website
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- developer section ends -->

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

        <script>
            function checkCookies() {
                document.getElementById("animasi1").className = "slideLeft";
                document.getElementById("animasi2").className = "slideRight";
            }

            window.onscroll = function () {
                myFunction();
            };
            function myFunction() {
                if (document.documentElement.scrollTop > 350) {
                    document.getElementById("animasi3").className = "slideLeft";
                    document.getElementById("animasi4").className =
                        "slideRight";
                }
                if (document.documentElement.scrollTop > 700) {
                    document.getElementById("animasi5").className = "slideLeft";
                    document.getElementById("animasi6").className =
                        "slideRight";
                }
                if (document.documentElement.scrollTop > 1050) {
                    document.getElementById("animasi7").className = "slideLeft";
                }
            }
        </script>
    </body>
</html>
