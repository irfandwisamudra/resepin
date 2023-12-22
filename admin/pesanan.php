<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] != "admin" ) {
        header("Location: ../index.php");
        exit;
    }

    require '../functions.php';

    $pesanan = query("SELECT * FROM data_pesanan");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pesanan</title>
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

            .pesanan {
                width: 90%;
                padding: 60px 5% 100px;
            }

            .container {
                display: flex;
                margin-top: 10px;
                height: 60vh;
                justify-content: center;
            }
            .container .content {
                width: 100%;
            }

            table {
                background-image: linear-gradient( 76.3deg, rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
                border: 2px solid white;
                color: white;
                border-spacing: 0px;
                width: 100%;
                font-size: 12px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            }

            th {
                border: 2px solid white;
                padding: 5px;
            }

            td {
                padding: 5px;
                background-color: #2a2a2a;
                border: 2px solid white;
            }

            .hapus {
                margin: auto;
                padding: 5px;
                width: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
                color: rgb(69, 103, 131);
                cursor: pointer;
                font-size: 10px;
                font-weight: bold;
                background: #fff;
                text-decoration: none;
            }

            .hapus:hover {
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

        <!-- pesanan section starts  -->

        <section class="pesanan" id="pesanan">
            <h1 class="heading">DAFTAR <span>PESANAN</span></h1>

            <div class="container">
                <div class="content"> 
                    <table>
                        <tr>
                            <th>NO.</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>TUJUAN</th>
                            <th>ALAMAT</th>
                            <th>PEMBAYARAN</th>
                            <th>KURIR</th>
                            <th>JUMLAH</th>
                            <th>PESANAN</th>
                            <th>AKSI</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach( $pesanan as $row_pesanan ) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row_pesanan["nama_user"]; ?></td>
                            <td><?= $row_pesanan["email"]; ?></td>
                            <td><?= $row_pesanan["kab_kota"]; ?></td>
                            <td><?= $row_pesanan["alamat"]; ?></td>
                            <td><?= $row_pesanan["bank"]; ?></td>
                            <td><?= $row_pesanan["kurir"]; ?></td>
                            <td><?= $row_pesanan["jumlah_pesanan"]; ?></td>
                            <?php 
                                $id_menu = $row_pesanan["id_menu"];
                                $menu = mysqli_query($conn, "SELECT * FROM data_menu WHERE id_menu = $id_menu");
                                $rows_menu = mysqli_fetch_assoc($menu);
                            ?>
                            <td><?= $rows_menu["nama_menu"]; ?></td>
                            <td><a href="hapus_pesanan.php?id_pesanan=<?= $row_pesanan["id_pesanan"]; ?>" onclick="return confirm('Yakin pesanan akan dihapus?');" class="hapus">Selesai</a></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </section>

        <!-- pesanan section ends -->

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
