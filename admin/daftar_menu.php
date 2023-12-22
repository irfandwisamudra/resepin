<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] != "admin" ) {
        header("Location: ../index.php");
        exit;
    }

    require '../functions.php';

    $menu = query("SELECT * FROM data_menu");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Menu</title>
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

            .heading {
                text-align: center;
                padding-bottom: 20px;
                text-shadow: 4px 2px 0 rgba(0, 0, 0, 0.2);
                color: #444;
                font-size: 50px;
                letter-spacing: 4px;
            }

            .heading span {
                color: rgb(69, 103, 131);
                font-family: mv boli;
                text-decoration: underline;
            }

            .btn_tambah {
                margin-bottom: 30px;
                padding: 10px;
                width: 300px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 10px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
                color: rgb(69, 103, 131);
                cursor: pointer;
                font-size: 17px;
                font-weight: bold;
                background: #fff;
                text-decoration: none;
            }

            .btn_tambah:hover {
                background: rgb(69, 103, 131);
                color: #fff;
            }

            .list {
                width: 90%;
                padding: 60px 5% 100px;
            }

            .list .box-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
            }

            .list .box-container .box {
                text-align: center;
                background-image: linear-gradient( 76.3deg, rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
                border-radius: 5px;
                border: 2px solid rgb(69, 103, 131);
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
                padding: 20px;
            }

            .list .box-container .box .image {
                width: 200px;
                height: 200px;
                border: 2px solid white;
                border-radius: 5px;
                margin: 10px auto;
                overflow: hidden;
            }

            .list .box-container .box .image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
                transition: 0.3s;
            }

            .list .box-container .box:hover .image img {
                transform: scale(1.1);
            }

            .list .box-container .box h3 {
                color: white;
                font-size: 25px;
                margin-bottom: 10px;
            }

            .list .box-container .box h4 {
                color: white;
                font-size: 17px;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .list .box-container .box p {
                color: white;
                font-size: 15px;
                margin-bottom: 15px;
            }

            .list .box-container .box .btn {
                margin: auto;
                padding: 10px;
                width: 150px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 10px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                color: rgb(69, 103, 131);
                cursor: pointer;
                font-size: 17px;
                font-weight: bold;
                background: #fff;
                text-decoration: none;
            }

            .list .box-container .box .btn:hover {
                background: rgb(69, 103, 131);
                color: #fff;
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

        <!-- list section starts  -->

        <section class="list" id="list">
            <h1 class="heading">DAFTAR <span>MENU</span></h1>

            <a href="tambah_menu.php" class="btn_tambah">
                TAMBAH DAFTAR MENU
            </a>

            <div class="box-container">
                <?php foreach($menu as $rows_menu) : ?>

                <div class="box">
                    <div class="image">
                        <img src="../image/<?= $rows_menu["gambar_menu"]; ?>" alt="">
                    </div>
                    
                    <h3><?= $rows_menu["nama_menu"]; ?></h3>
                    <h4>Rp.<?= $rows_menu["harga_menu"]; ?>,-/Pcs</h4>

                    <?php 
                    $id_kategori = $rows_menu["id_kategori"];
                    $kategori = mysqli_query($conn, "SELECT * FROM data_kategori WHERE id_kategori = $id_kategori");
                    $rows_kategori = mysqli_fetch_assoc($kategori);
                    ?>

                    <p>
                        Kategori:
                        <?= $rows_kategori['nama_kategori']; ?>
                    </p>

                    <a href="ubah_menu.php?id_menu=<?= $rows_menu["id_menu"]; ?>" class="btn"> Ubah </a>
                    <a href="hapus_menu.php?id_menu=<?= $rows_menu["id_menu"]; ?>" class="btn"> Hapus </a>
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
    </body>
</html>
