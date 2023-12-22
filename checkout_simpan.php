<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }
    if( !isset($_POST['id_menu']) ) {
        header("Location: beranda.php");
        exit;
    }

    require 'functions.php';
    
    if( isset($_POST["checkout"]) ) {
    
        if( pesanan($_POST) > 0 ) { 
            echo "<script>
                    alert('Pesanan anda sudah diproses!');
                </script>"; 
        } 
        else { 
            echo mysqli_error($conn); 
        }
    }

?>

<html>
    <head>
        <title>Simpan</title>
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

            .content {
                padding: 70px 7% 100px;
            }
            .content h1 {
                text-align: center;
                text-transform: capitalize;
                line-height: 2;
                padding-bottom: 50px;
            }
            .content .image {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* END CONTENT */
        </style>
    </head>

    <body>
        <!-- header section starts  -->

        <header class="header">
            <a href="beranda.php" class="logo"> <img src="logo/resepin.png" /></a>

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

        <div class="content">
            <h1>
                Terima Kasih
                <?= $_POST['nama_user']; ?>, <br />
                pesanan anda sedang di proses.
            </h1>

            <div class="image">
                <img src="image/terimakasih.png" width="400px" />
            </div>
        </div>

        <!-- content section ends -->

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
