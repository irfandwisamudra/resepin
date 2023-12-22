<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] != "admin" ) {
        header("Location: ../index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin ResepIn</title>
        <link rel="stylesheet" href="headerFooter_admin.css">

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
                filter: drop-shadow(4px 7px 13px #000);
            }

            .home .content {
                flex: 1 1 40%;
                padding: 50px;
            }

            .home .content h3 {
                font-size: 45px;
                color: #444;
                line-height: 1.5;
                text-shadow: 4px 2px 0 rgba(0, 0, 0, 0.2);
            }

            .home .content p {
                font-size: 17px;
                color: #777;
                line-height: 1.8;
                padding: 10px 0;
            }

            .services .box-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
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
            }

            .services .box-container .box img {
                color: rgb(69, 103, 131);
                font-size: 50px;
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
            }

            .management{
                width: 100%;
                padding: 70px 0 100px;
                background-color: #e1e1e1;
            }

            .management h1{
                text-align: center;
                padding-bottom: 20px;
                text-shadow: 4px 2px 0 rgba(0, 0, 0, 0.2);
                color: #444;
                font-size: 50px;
                letter-spacing: 4px;
            }

            .management h1 span{
                color: rgb(69, 103, 131);
                font-family: mv boli;
                text-decoration: underline;
            }

            .management .card{
                width: 90%;
                margin: 10px auto;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-gap: 20px;
            }

            .management .card .card-image{
                display: flex;
                align-items: center;
                justify-content: center;
                background: black;
                border-radius: 15px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            }

            .management .card .card-image img{
                width: 100%;
                transition: .3s;
                border-radius: 15px;
            }

            .management .card .card-image:hover img{
                opacity: 0.4;
            }

            .management .card .card-image h3{
                position: absolute;
                font-size: 35px;
                margin-bottom: 45px;
                color: rgb(16 120 204);
                text-shadow: 3px 1px black;
                z-index: 5;
                transition: 0.3s;
            }

            .management .card .card-image:hover h3{
                margin-bottom: 130px;
                color: #e1e1e1;
            }

            .management .card .card-image p{
                position: absolute;
                font-size: 15px;
                width: 400px;
                margin-top: 30px;
                text-align: center;
                color: #e1e1e1;
                opacity: 0;
                z-index: 5;
                transition: 0.3s;
            }

            .management .card .card-image:hover p{
                opacity: 1;
            }

            .management .card .card-image .card_btn{
                position: absolute;
                margin-top: 180px;
                text-decoration: none;
                opacity: 0;
                transform: translateY(45px);
                z-index: 5;
                transition: 0.3s;
                border-radius: 5px;
                font-size: 15px;
                font-weight: bold;
                padding: 10px 25px;
                border: 2px solid rgb(69, 103, 131);
                box-shadow: 3px 3px 0 rgba(69, 103, 133, 0.5);
                color: rgb(69, 103, 131);
                cursor: pointer;
                background: #e1e1e1;
            }

            .management .card .card-image .card_btn:hover{
                background-color: rgb(69, 103, 131);
                color: #e1e1e1;
            }

            .management .card .card-image:hover .card_btn{
                opacity: 1;
                transform: translateY(0);
            }

            .mySlides {
                display: none;
                margin: 1 0px 0 10px 0;
            }
            .slideImage {
                vertical-align: middle;
                opacity: 40%;
            }
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
            /* END CONTENT */
        </style>
    </head>

    <body>
        <!-- header section starts  -->

        <header class="header">
            <a href="beranda.php" class="logo">
                <img src="../logo/resepin.png"
            /></a>

            <nav class="navbar">
                <a href="beranda.php">Beranda</a>
                <a href="daftar_kategori.php">Daftar Kategori</a>
                <a href="daftar_menu.php">Daftar Menu</a>
                <a href="pesanan.php">Pesanan</a>
                <a href="../logout.php">Logout</a>
            </nav>
        </header>

        <!-- header section ends -->

        <!-- home section starts  -->

        <section class="home" id="home">
            <div class="mySlides fade">
                <img
                    class="slideImage"
                    src="../image/image1.jpg"
                    style="width: 100%"
                />
            </div>
            <div class="mySlides fade">
                <img
                    class="slideImage"
                    src="../image/image2.jpg"
                    style="width: 100%"
                />
            </div>
            <div class="mySlides fade">
                <img
                    class="slideImage"
                    src="../image/image3.jpg"
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
                <img src="../image/order_image.png" alt="" />
            </div>
            <div class="textinSlide">
                <img src="../logo/resepin.png" />
                <br />
                <br />
                <b>Resep Informatika </b>
                <p>
                    Platform tentang informasi resep dan pemesanan makanan paling mudah dan efisien.
                </p>
            </div>
            <div class="content">
                <h3>
                    Selamat Datang
                    <br />

                    <span style="text-transform: uppercase; font-family: mv boli; text-decoration: underline; color: rgb(69, 103, 131)">
                        <?= $_SESSION["login"]; ?>
                    </span>

                    <br />Di Website ResepIn
                </h3>
            </div>

            <div class="management">
                <h1><span>MANAJEMEN</span> SISTEM</h1>

                <div class="card">
                    <div class="card-image">
                        <img src="../image/gallary_1.jpg" alt="">

                        <h3>Daftar Kategori</h3>
                        <p>Halaman Daftar Kategori akan menampilkan semua kategori yang ada dalam website ResepIn.</p>
                        <a href="daftar_kategori.php" class="card_btn">Lihat</a>
                    </div>

                    <div class="card-image">
                        <img src="../image/gallary_2.jpg" alt="">

                        <h3>Daftar Menu</h3>
                        <p>Halaman Daftar Menu akan menampilkan semua menu yang ada dalam website ResepIn.</p>
                        <a href="daftar_menu.php" class="card_btn">Lihat</a>
                    </div>

                    <div class="card-image">
                        <img src="../image/gallary_3.jpg" alt="">

                        <h3>Daftar Pesanan</h3>
                        <p>Halaman Pesanan akan menampilkan daftar pesanan yang telah diterima oleh website ResepIn.</p>
                        <a href="pesanan.php" class="card_btn">Lihat</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- home section ends -->

        <!-- site footer -->

        <footer class="site-footer">
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="../logo/resepin.png" alt="">
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
                    <a href="#"><p>About Us</p></a>
                    <a href="#"><p>Contact Us</p></a>
                    <a href="#"><p>Chef</p></a>
                    <a href="#"><p>Blog</p></a>
                    <a href="#"><p>FAQs</p></a>
                    <a href="#"><p>Review</p></a>
                    <a href="#"><p>Shipping and Processing</p></a>
                    <a href="#"><p>Privacy and Policy</p></a>
                    <a href="#"><p>Terms of Use</p></a>
                    <a href="#"><p>Disclaimer</p></a>
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
        
        <script>
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
