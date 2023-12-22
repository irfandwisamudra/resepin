<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] != "admin" ) {
        header("Location: ../index.php");
        exit;
    }

    require '../functions.php';

    $kategori = query("SELECT * FROM data_kategori");

    // cek apakah tombol tambah sudah ditekan atau belum
    if( isset($_POST["tambah"]) ) {
        
        // cek apakah data berhasil di tambahkan atau tidak
        if( tambah_menu($_POST) > 0 ) {
            echo "
                <script>
                    alert('Menu baru berhasil ditambahkan!');
                    document.location.href = 'daftar_menu.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Menu baru gagal ditambahkan!');
                    document.location.href = 'daftar_menu.php';
                </script>
            ";
        }

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah menu</title>
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

            .content {
                margin: 60px 0 100px;
                min-height: 75vh;
            }

            .content .row {
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 30px;
            }

            .content .row form {
                background-image: linear-gradient( 76.3deg, rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
                border: 2px solid rgb(69, 103, 131);
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
                text-align: center;
                padding: 20px;
                border-radius: 5px;
                margin: 0 10%;
                width: 60%;
            }

            .content .row form h3 {
                color: white;
                padding-bottom: 10px;
                font-size: 30px;
            }

            .content .row form table {
                width: 100%;
            }

            .content .row form .text-box {
                color: white;
                font-size: 17px;
                text-align: left;
                padding-left: 15px;
            }

            .content .row form .box, .content .row form .file-box {
                width: 90%;
                margin: 7px 0;
                border-radius: 5px;
                border: 2px solid white;
                font-size: 16px;
                text-transform: none;
                padding: 10px;
            }

            .content .row form .file-box {
                color: white;
            }

            .content .row form .btn {
                padding: 10px 40px;
                display: inline-block;
                margin-top: 10px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                color: rgb(69, 103, 131);
                cursor: pointer;
                font-size: 17px;
                font-weight: bold;
                background: #fff;
            }

            .content .row form .btn:hover {
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

        <!-- content section starts   -->

        <section class="content">
            <h1 class="heading">TAMBAH <span>MENU</span></h1>
            <div class="row">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>Silahkan Tambah Menu</h3>
                    <table>
                        <tr>
                            <td class="text-box">
                                <label for="nama_menu">Nama Menu:</label>
                            </td>
                            <td>
                                <input
                                    type="text"
                                    name="nama_menu"
                                    id="nama_menu"
                                    class="box"
                                    required
                                />
                            </td>
                        </tr>
                        <tr>
                            <td class="text-box">
                                <label for="harga_menu">Harga Menu:</label>
                            </td>
                            <td>
                                <input
                                    type="number"
                                    name="harga_menu"
                                    id="harga_menu"
                                    class="box"
                                    required
                                />
                            </td>
                        </tr>
                        <tr>
                            <td class="text-box">
                                <label for="gambar_menu">Gambar Menu:</label>
                            </td>
                            <td>
                                <input
                                    type="file"
                                    name="gambar_menu"
                                    id="gambar_menu"
                                    class="file-box"
                                    required
                                />
                            </td>
                        </tr>
                        <tr>
                            <td class="text-box">
                                <label for="id_kategori">Jenis Kategori:</label>
                            </td>
                            <td>
                                <select
                                    id="id_kategori"
                                    name="id_kategori"
                                    class="box"
                                >
                                    <option disabled selected>Pilih...</option>
                                    <?php foreach($kategori as $rows_kategori) : ?>
                        
                                    <option value="<?= $rows_kategori["id_kategori"]; ?>"><?= $rows_kategori["nama_kategori"]; ?></option>
                                    
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" name="tambah" class="btn">
                                    Tambah
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>

        <!-- content section ends -->

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
