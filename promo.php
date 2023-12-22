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
    <title>Promo</title>
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
        .heading span{
            text-transform: uppercase;
            color:#16a085;
        }

        .about{
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .about h1 {
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .about h1 span {
            font-size: 50px;
        }

        .about .row{
            display: flex;
            align-items: center;
            background:rgba(69,103,131,1);
            flex-wrap: wrap;
            margin-left: 10%;
            margin-right: 10%;
            margin-bottom: 10px;

        }

        .about .row .image{
            flex:1 1 200px;
        }

        .about .row .image img{
            width: 80%;
            height: 80%;
            margin-left: 40px ;
        }

        .about .row .content{
            flex:1 1 450px;
            margin-right: 10px;
        }

        .about .row .content a{
            text-decoration: none;
        }

        .about .row .content h3{
            font-size: 25px;
            color:#fff;
        }

        .about .row .content h4{
            font-size: 25px;
            margin-left: 5x;
            color:yellow;
            line-height: 1.8;
        }
        .about .row .content p{
            font-size: 16px;
            margin-left: 5x;
            color:#ccc;
            line-height: 1.8;
        }
        .about .row .image2{
            flex:200px 1 1;
        }
        .about .row .image2 img{
            padding: 0 0 0 0;
            width: 30%;
            height: 30%;
            margin-left: 70% ;
            margin-bottom: 70%;
            margin-top: 0;
            margin-right: 5%;
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

    <!-- section starts  -->

    <section class="about" id="about">
        <h1 class="heading"> <span> <img src="image/promo.png" alt=""> PROMO <img src="image/promo.png" alt=""></span> </h1>

        <div class="row">

            <div class="image">
                <a href="food/ayam_bakar.php?id_menu=6">
                    <img src="image/ayam_bakar.jpeg" alt="">
                </a>
            </div>

            <div class="content">
                <a href="food/ayam_bakar.php?id_menu=6"><h3>Promo Ayam Bakar ResepIn dengan potongan diskon spesial</h3></a> <br>
                <p>*IDR 15.000</p>
                <h4>*Diskon 20% -> 12.000</h4>
                <p>*Ongoing-15 hari lagi</p>
            </div>
            <div class="image2">
                <img src="icon/diskon.png" alt="">
            </div>

        </div>

    </section>

    <!-- section ends -->


    <!-- section 2 start  -->

    <section class="about" id="about">

        <div class="row">

            <div class="image">
                <a href="food/dim_sum.php?id_menu=11">
                    <img src="image/dim_sum.jpeg" alt="">
                </a>
            </div>

            <div class="content">
                <a href="food/dim_sum.php?id_menu=11"><h3>Promo Dimsum ResepIn dengan potongan diskon spesial</h3></a> <br>
                <p>*IDR 15.000</p>
                <h4>*Diskon 20% -> 12.000</h4>
                <p>*Ongoing-20 hari lagi</p>
            </div>
            <div class="image2">
                <img src="icon/diskon.png" alt="">
            </div>
        </div>

    </section>

    <!-- section 2 ends -->

    <!-- section 3 start  -->

    <section class="about" id="about">

        <div class="row">

            <div class="image">
                <a href="food/rendang.phpid_menu=4">    
                    <img src="image/rendang.jpeg" alt="">
                </a>
            </div>

            <div class="content">
                <a href="food/rendang.phpid_menu=4"><h3>Promo Rendang ResepIn dengan potongan diskon spesial</h3></a> <br>
                <p>*IDR 18.000</p>
                <h4>*Diskon 20% -> 14.400</h4>
                <p>*Ongoing-5 hari lagi</p>
            </div>
            <div class="image2">
                <img src="icon/diskon.png" alt="">
            </div>

        </div>

    </section>

    <!-- section 3 ends -->

    <!-- section 4 start  -->

    <section class="about" id="about">

        <div class="row">

            <div class="image">
                <a href="food/pudding.php?id_menu=29">
                    <img src="image/pudding.jpeg" alt="">
                </a>
            </div>

            <div class="content">
                <a href="food/pudding.php?id_menu=29"><h3>Promo Pudding ResepIn dengan potongan diskon spesial</h3></a> <br>
                <p>*IDR 22.000</p>
                <h4>*Diskon 20% -> 17.600</h4>
                <p>*Ongoing-7 hari lagi</p>
            </div>
            <div class="image2">
                <img src="icon/diskon.png" alt="">
            </div>

        </div>

    </section>

    <!-- section 4 ends -->

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