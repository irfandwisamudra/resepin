<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }

    require 'functions.php';
    
    $username = $_SESSION["login"];
    $id_user = $_SESSION["id_user"];
    $user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
    $rows_user = mysqli_fetch_assoc($user);

    $kategori = query("SELECT * FROM data_kategori");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ResepIn</title>

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

            .home {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap: 15px;
                /* width: 100%; */
                /* margin: 30px 0 0 50px; */
                /* height: 800px; */
            }

            .home .image {
                flex: 1 1 40%;
            }

            .home .image img {
                width: 80%;
                margin: 100px 0 100px 20%;
                filter: drop-shadow(4px 7px 13px #000);
            }

            .home .content {
                flex: 1 1 40%;
                padding: 50px;
                text-align: center;
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
                padding: 10px 0;
                filter: drop-shadow(4px 7px 13px #000);
            }

            .home .content .btn:nth-child(4) {
                margin-left: 10px;
            }

            .btn {
                width: 170px;
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
                text-decoration: none;
            }
            .btn span {
                margin-top: 8px;
                border-radius: 5px;
                margin-left: 5px;
            }
            .btn:hover {
                background-color: rgb(69, 103, 131);
                color: #fff;
            }

            .services {
                width: 90%;
                padding: 60px 5%;
                background-color: #e1e1e1;
            }

            .services .heading {
                text-align: center;
                padding-bottom: 20px;
                text-shadow: 4px 4px 0 rgba(0, 0, 0, 0.2);
                text-transform: uppercase;
                color: #444;
                font-size: 50px;
                letter-spacing: 4px;
            }

            .services .heading span {
                text-transform: uppercase;
                color: rgb(69, 103, 131);
            }

            .services .box-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                gap: 20px;
            }

            .services .box-container .box {
                background: #fff;
                border-radius: 5px;
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                border: 2px solid rgb(69, 103, 131);
                padding: 25px;
                box-sizing: border-box;
                width: 400px;
                margin: 20px 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .services .box-container .box img {
                color: rgb(69, 103, 131);
                padding-bottom: 5px;
            }

            .services .box-container .box h3 {
                color: #444;
                font-size: 25px;
                padding: 10px 0;
            }

            .services .box-container .box p {
                color: #777;
                font-size: 14px;
                line-height: 2;
                text-align: center;
            }

            .slideUp {
                animation-name: slideUp;
                animation-duration: 2s;
                visibility: visible;
            }

            @keyframes slideUp {
                0% {
                    opacity: 0;
                    transform: translateX(-100%);
                }
                100% {
                    opacity: 1;
                    transform: translateX(0%);
                }
            }
            
            /* fading animation */

            .mySlides {
                display: none;
                margin: 1 0px 0 10px 0;
            }
            .slideImage {
                vertical-align: middle;
                opacity: 40%;
            }

            /* slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }
            .dotCont {
                width: 100%;
            }
            .dot {
                opacity: 0;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }
            .active {
                background-color: #5f5252;
            }
            .fade {
                animation-name: fade;
                animation-duration: 4.5s;
            }

            @keyframes fade {
                from {
                    opacity: 0.4;
                }
                to {
                    opacity: 1;
                }
            }

            .textinSlide {
                position: absolute;
                z-index: 2;
                top: 7%;
                left: 100px;
                color: rgb(53, 51, 48);
            }
            .textinSlide img {
                width: 25%;
                height: 10%;
            }
            .textinSlide p {
                margin-top: 2%;
                font-size: 25px;
                font-weight: 700;
                color: #5f5454;
            }
            .textinSlide b {
                font-size: 80px;
                font-weight: 700;
                color: #5f5454;
                line-height: 1.5;
                text-shadow: 4px 4px 0 rgba(0, 0, 0, 0.2);
            }

            .promo-section {
                text-align: center;
                padding: 50px 5% 130px;
                font-style: italic;
                font-weight: bold;
                background-color: #e1e1e1;

            }

            .promo-button {
                background-color: #456783;
                color: #fff;
                padding: 20px 40px;
                border: 1px dashed #fff;
                border-radius: 30px;
                font-size: 20px;
                transition: background-color 0.3s ease;
                text-decoration: none;
            }

            .promo-button:hover {
                background-color: #485460;
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

        <!-- home section starts  -->

        <section class="home" id="home">
            <div class="mySlides fade">
                <img
                    class="slideImage"
                    src="./image/image1.jpg"
                    style="width: 100%"
                />
            </div>
            <div class="mySlides fade">
                <img
                    class="slideImage"
                    src="./image/image2.jpg"
                    style="width: 100%"
                />
            </div>
            <div class="mySlides fade">
                <img
                    class="slideImage"
                    src="./image/image3.jpg"
                    style="width: 100%"
                />
            </div>
            <div class="dotCont" style="text-align: center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <br />
            <div class="image">
                <img src="image/main_img.png" alt="" />
            </div>
            <div class="textinSlide">
                <img src="./logo/resepin.png" />
                <br />
                <br />
                <b>Resep Informatika </b>
                <p>
                    Platform tentang informasi resep dan pemesanan makanan
                    paling mudah dan efisien.
                </p>
            </div>
            <div class="content">
                <h3>
                    Selamat Datang
                    <br />

                    <span style="text-transform: uppercase; color: rgb(69, 103, 131)">
                        <?= $rows_user["nama_user"]; ?>
                    </span>

                    <br />Di Website ResepIn
                </h3>
            </div>
        </section>

        <!-- home section ends -->

        <!-- Menu section starts  -->

        <section class="services" id="services">
            <h1 class="heading">Kategori <span>Makanan</span></h1>

            <div class="box-container">
                <?php foreach($kategori as $rows_kategori) : ?>
                <?php $nama_file = str_replace(' ', '_', strtolower($rows_kategori["nama_kategori"])); ?>
                <?php $nama_file_php = $nama_file . ".php"; ?>

                <div class="boxes">
                    <div class="box">
                        <img src="image/<?= $rows_kategori["gambar_kategori"] ?>"
                        title="<?= $rows_kategori["nama_kategori"]; ?>" width="100px">
                        <h3><?= $rows_kategori["nama_kategori"]; ?></h3>
                        <p><?= $rows_kategori["deskripsi_kategori"]; ?></p>
                        <a
                            href="food/<?= $nama_file_php; ?>?id_kategori=<?= $rows_kategori['id_kategori']; ?>"
                            class="btn"
                        >
                            Selengkapnya
                            <span
                                ><img src="icon/arahkanan.png" width="30px"
                            /></span>
                        </a>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </section>

        <div class="promo-section">
            <a href="promo.php" class="promo-button">Lihat Promo</a>
        </div>

        <!-- Menu section ends -->

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
            window.onscroll = function () {
                myFunction();
            };

            function myFunction() {
                if (document.documentElement.scrollTop > 350) {
                    let boxes = document.getElementsByClassName("boxes");
                    for (let i = 0; i < boxes.length; i++) {
                        boxes[i].className = "slideUp";
                    }
                }
            }

            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(
                        " active",
                        ""
                    );
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 10000); // Change time
            }
        </script>

    </body>
</html>
