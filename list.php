<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }

    require 'functions.php';

    $menu = query("SELECT * FROM data_menu");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>List</title>
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

            .list {
                /* margin-top: 70px; */
                width: 90%;
                padding: 60px 5%;
            }

            .list .box-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
            }

            .list .box-container .box {
                text-align: center;
                background: #fff;
                border-radius: 5px;
                border: 2px solid rgb(69, 103, 131);
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                padding: 20px;
            }

            .list .box-container .box .img {
                height: 200px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .list .box-container .box h3 {
                color: #444;
                font-size: 25px;
            }

            .list .box-container .box p {
                color: rgb(69, 103, 131);
                font-size: 15px;
            }

            .list .box-container .box .share {
                margin-top: 20px;
                border: 2px dashed rgb(69, 103, 131);
                width: fit-content;
                margin: auto;
            }

            .list .box-container .box .share a {
                display: inline-block;
                height: 50px;
                width: 50px;
                line-height: 45px;
                font-size: 2px;
                color: rgb(69, 103, 131);
                border-radius: 5px;
                margin: 3px;
            }

            .list .box-container .box .share a:hover {
                background: #444;
                color: #fff;
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                border-radius: 50%;
            }

            .btn {
                margin: auto;
                padding: 10px;
                width: 155px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 10px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                color: rgb(69, 103, 131);
                cursor: pointer;
                font-size: 17px;
                font-weight: bold;
                background: #fff;
            }

            .btn:hover {
                background-color: #444;
                transform: scale(110%);
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

        <!-- list section starts  -->

        <section class="list" id="list">
            <h1 class="heading"><span>list</span> makanan</h1>

            <div class="box-container">
                <?php foreach($menu as $rows_menu) : ?>
                <?php $nama_file = str_replace(' ', '_', strtolower($rows_menu["nama_menu"])); ?>
                <?php $nama_file_php = $nama_file . ".php"; ?>

                <div class="box">
                    <img src="image/<?= $rows_menu["gambar_menu"]; ?>" alt=""
                    class="img">
                    <h3><?= $rows_menu["nama_menu"]; ?></h3>
                    <p>Rp.<?= $rows_menu["harga_menu"]; ?>,-/Pcs</p>

                    <?php 
                    $id_kategori = $rows_menu["id_kategori"];
                    $kategori = mysqli_query($conn, "SELECT * FROM data_kategori WHERE id_kategori = $id_kategori");
                    $rows_kategori = mysqli_fetch_assoc($kategori);
                    ?>

                    <p>
                        Kategori:
                        <?= $rows_kategori['nama_kategori']; ?>
                    </p>

                    <a
                        href="food/<?= $nama_file_php; ?>?id_menu=<?= $rows_menu['id_menu']; ?>"
                        class="btn"
                    >
                        Lihat Resep
                        <span
                            ><img src="icon/arahkanan.png" width="30px"
                        /></span>
                    </a>
                </div>

                <?php endforeach; ?>
            </div>
        </section>

        <!-- list section ends -->

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
