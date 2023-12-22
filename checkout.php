<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }
    if( !isset($_GET['id_menu']) ) {
        header("Location: beranda.php");
        exit;
    }

    require 'functions.php';

    $id_menu = $_GET['id_menu'];
    $menu = query("SELECT * FROM data_menu WHERE id_menu = $id_menu")[0];

    $id_user = $_SESSION["id_user"];
    $user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
    $rows_user = mysqli_fetch_assoc($user);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
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

            .container {
                padding: 70px 7%;
            }

            .row {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .row form {
                padding: 20px;
                width: 800px;
                background: #fff;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            }

            .row form .row {
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
            }

            .row form .row .col {
                flex: 1 1 250px;
            }

            .row form .row .col .title {
                font-size: 20px;
                color: #333;
                padding-bottom: 5px;
                text-transform: uppercase;
            }

            .row form .row .col .inputBox {
                margin: 15px 0px;
            }

            .row form .row .col .inputBox span {
                margin-bottom: 10px;
                display: block;
                font-size: 15px;
            }

            .row form .row .col .inputBox input {
                width: 90%;
                border: 1px solid #ccc;
                padding: 10px 15px;
                font-size: 15px;
                text-transform: none;
            }

            .row form .row .col .inputBox input:focus {
                border: 1px solid #000;
            }

            .row form .row .col .flex {
                display: flex;
                gap: 15px;
            }

            .row form .row .col .flex .inputBox {
                margin-top: 5px;
                margin-right: 20px;
            }

            .row form .row .col .inputBox img {
                height: 40px;
                margin-top: 5px;
                filter: drop-shadow(0 0 1px #000);
            }

            .row form .row .col .flex .inputBox span {
                margin-top: 10px;
                margin-bottom: 10px;
                display: block;
                font-size: 15px;
            }

            .row form .row .col .flex .inputBox input {
                width: 100px;
                border: 1px solid #ccc;
                padding: 10px 25px;
                font-size: 15px;
                text-transform: none;
                /* background-color: rgba(0, 0, 0, .1); */
                border-radius: 5px;
            }

            .row form .row .col .flex .inputBox input:focus {
                border: 1px solid #000;
            }

            .row form .submit-btn {
                width: 100%;
                padding: 12px;
                font-size: 17px;
                background: #27ae60;
                color: #fff;
                margin-top: 5px;
                cursor: pointer;
            }

            .row form .submit-btn:hover {
                background: #2ecc71;
            }

            .row form .row .col .selectBox {
                margin: 15px 0px;
            }
            .row form .row .col .selectBox span {
                display: block;
                margin-bottom: 10px;
                font-size: 15px;
            }
            .row form .row .col .selectBox select {
                border: 1px solid #ccc;
                padding: 10px 0px 10px 15px;
                font-size: 15px;
                border-radius: 5px;
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

        <div class="container">
            <h1 class="heading"> <span>Checkout</span> </h1>
            
            <div class="row">
                <form
                    action="checkout_simpan.php"
                    method="post"
                    enctype="multipart/form-data"
                >
                    <div class="row">
                        <div class="col">
                            <input
                                type="hidden"
                                name="id_user"
                                value="<?= $id_user; ?>"
                            />
                            <input
                                type="hidden"
                                name="id_menu"
                                value="<?= $id_menu; ?>"
                            />

                            <h3 class="title">ALAMAT PENGIRIMAN</h3>

                            <div class="inputBox">
                                <span>Nama Lengkap :</span>
                                <input type="text" name="nama_user" value="<?= $rows_user["nama_user"]; ?>"
                                required>
                            </div>
                            <div class="inputBox">
                                <span>Email :</span>
                                <input type="email" name="email" value="<?= $rows_user["email"]; ?>"
                                required>
                            </div>
                            <div class="inputBox">
                                <span>Alamat :</span>
                                <input
                                    type="text"
                                    name="alamat"
                                    placeholder="Contoh: Perumahan Mutiara Blok A1 No. 6"
                                    required
                                />
                            </div>

                            <div class="flex">
                                <div class="inputBox">
                                    <span>Jumlah :</span>
                                    <input
                                        type="number"
                                        name="jumlah_pesanan"
                                        min="1"
                                        required
                                    />
                                </div>
                                <div class="selectBox">
                                    <span>Kab/Kota :</span>
                                    <select name="kab_kota">
                                        <option selected disabled>
                                            Pilih Kab/Kota...
                                        </option>
                                        <option value="Bangkalan">Bangkalan</option>
                                        <option value="Banyuwangi">
                                            Banyuwangi
                                        </option>
                                        <option value="Batu">Batu</option>
                                        <option value="Blitar">Blitar</option>
                                        <option value="Bojonegoro">
                                            Bojonegoro
                                        </option>
                                        <option value="Bondowoso">Bondowoso</option>
                                        <option value="Gresik">Gresik</option>
                                        <option value="Jember">Jember</option>
                                        <option value="Jombang">Jombang</option>
                                        <option value="Kediri">Kediri</option>
                                        <option value="Lamongan">Lamongan</option>
                                        <option value="Lumajang">Lumajang</option>
                                        <option value="Madiun">Madiun</option>
                                        <option value="Magetan">Magetan</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Mojokerto">Mojokerto</option>
                                        <option value="Nganjuk">Nganjuk</option>
                                        <option value="Ngawi">Ngawi</option>
                                        <option value="Pacitan">Pacitan</option>
                                        <option value="Pamekasan">Pamekasan</option>
                                        <option value="Pasuruan">Pasuruan</option>
                                        <option value="Ponorogo">Ponorogo</option>
                                        <option value="Probolinggo">
                                            Probolinggo
                                        </option>
                                        <option value="Sampang">Sampang</option>
                                        <option value="Sidoarjo">Sidoarjo</option>
                                        <option value="Situbondo">Situbondo</option>
                                        <option value="Sumenep">Sumenep</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Trenggalek">
                                            Trenggalek
                                        </option>
                                        <option value="Tuban">Tuban</option>
                                        <option value="Tulungagung">
                                            Tulungagung
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <h3 class="title">PEMBAYARAN</h3>

                            <div class="inputBox">
                                <span>Pesanan :</span>
                                <input
                                    type="text"
                                    name="nama_pesanan"
                                    value='<?= $menu["nama_menu"]; ?>'
                                    readonly
                                    style="color: black; cursor: pointer"
                                />
                            </div>

                            <div class="inputBox">
                                <span>Metode Pembayaran :</span>
                                <img src="image/card_img.gif" />
                                <div class="selectBox">
                                    <select name="bank">
                                        <option selected disabled>
                                            Pilih Bank...
                                        </option>
                                        <option value="MANDIRI">
                                            MANDIRI &emsp;&emsp;
                                        </option>
                                        <option value="BRI">BRI</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BCA">BCA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="inputBox">
                                <span>Jasa Pengirim :</span>
                                <img src="image/kurir_img.jpg" />
                                <div class="selectBox">
                                    <select name="kurir">
                                        <option selected disabled>
                                            Pilih Kurir...
                                        </option>
                                        <option value="JNT Express">
                                            JNT Express
                                        </option>
                                        <option value="Si Cepat">Si Cepat</option>
                                        <option value="JNE">JNE</option>
                                        <option value="Ninja Express">
                                            Ninja Express
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input
                        type="submit"
                        value="Checkout"
                        class="submit-btn"
                        name="checkout"
                    />
                </form>
            </div>
        </div>

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
