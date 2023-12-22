<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shipping & Proccessing</title>
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
            section {
                /* min-height: 100vh; */
                width: 100%;
                padding: 60px 0;
            }
            .title {
                text-align: center;
                padding-bottom: 40px;
                text-shadow: 4px 4px 0 rgba(0, 0, 0, 0.2);
                text-transform: uppercase;
                color: rgb(69, 103, 131);
                font-size: 40px;
                letter-spacing: 4px;
            }

            .title span {
                text-transform: uppercase;
                color: #03254c;
            }

            .contents {
                width: 100%;
                height: 800px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .content {
                width: 80%;
            }
            .topik h2{
                color: #03254c;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 2rem;
                margin: 1rem 0;
            }
            .pembahasan p{
                color: #03254c;
                margin-bottom: 0.5rem;
                font-size: 1.4rem;
                color: #03254c;
                text-align: justify;
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
            <?php
                if( isset($_SESSION["login"]) && $_SESSION["login"] != "admin" ) {
                    echo "
                        <a href='beranda.php'>Beranda</a>
                        <a href='list.php'>List</a>
                        <a href='news.php'>News</a>
                        <a href='developer.php'>Developer</a>
                        <a href='user/dashboardUser.php'
                            ><ion-icon
                                class='iconProfile'
                                name='person-circle-outline'
                            ></ion-icon
                        ></a>
                    ";

                } else {
                    echo "
                        <style>
                            .header {
                                padding: 8px 10% 0 10%;
                                width: 80%;
                            }
                        </style>
                        
                        <a href='login.php'>Login</a>
                        <a href='sign_up.php'>Sign Up</a>
                    ";
                    
                }

            ?>
            </nav>
        </header>

        <!-- header section ends -->

        <!-- site content -->

        <section>
            <h1 class="title">Shipping <span>&</span> Processing</h1>
            <div class="contents">
                <div class="content">
                    <div class="topik">
                        <h2>Alamat pengiriman</h2>
                    </div>
                    <div class="pembahasan">
                        <p>Alamat lengkap tempat barang akan dikirimkan, meliputi nama penerima, alamat jalan, kota, kode pos, dan negara.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="topik">
                        <h2>Metode Pengiriman</h2>
                    </div>
                    <div class="pembahasan">
                        <p>Metode pengiriman yang akan digunakan, seperti pengiriman reguler, pengiriman kilat, pengiriman overnight, atau metode lainnya. Juga mencakup pilihan seperti pengiriman melalui kurir tertentu atau pengiriman melalui pos.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="topik">
                        <h2>Biaya Pengiriman</h2>
                    </div>
                    <div class="pembahasan">
                        <p>Metode pengiriman yang dipilih oleh pelanggan dapat mempengaruhi biaya pengiriman. Pengiriman barang yang lebih berat atau berukuran besar mungkin memerlukan biaya pengiriman yang lebih tinggi karena memerlukan sumber daya yang lebih besar dalam proses pengiriman. Pengiriman dalam jarak dekat biasanya akan memiliki biaya pengiriman yang lebih rendah.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="topik">
                        <h2>Waktu Pengiriman</h2>
                    </div>
                    <div class="pembahasan">
                        <p>Metode pengiriman yang dipilih oleh pelanggan dapat mempengaruhi waktu pengiriman. Jarak antara lokasi pengirim dan penerima dapat memengaruhi waktu pengiriman. Beberapa kurir atau jasa pengiriman mungkin memiliki jaringan yang lebih luas atau proses pengiriman yang lebih efisien, yang dapat mempercepat waktu pengiriman. Pelanggan mungkin perlu menunggu sampai barang tersedia sebelum pengiriman dapat dilakukan.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="topik">
                        <h2>Nomor Pelacakan</h2>
                    </div>
                    <div class="pembahasan">
                        <p>Nomor pelacakan akan diberikan kepada pelanggan agar dapat melacak status pengiriman barang secara online.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="topik">
                        <h2>Pemrosesan Pesanan</h2>
                    </div>
                    <div class="pembahasan">
                        <p>Memeriksa pesanan yang diterima untuk memastikan kelengkapan informasi, ketersediaan barang, dan kesesuaian harga atau promo. Verifikasi pembayaran yang dilakukan oleh pelanggan, pengemasan barang, pemberian label, dan persiapan pengiriman.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="topik">
                        <h2>Kebijakan Pengembalian</h2>
                    </div>
                    <div class="pembahasan">
                        <p>Menentukan periode waktu pengembalian barang, menjelaskan kondisi barang yang diperlukan agar pengembalian dapat diterima, menjelaskan penanggungan biaya pengembalian, mengikuti prosedur pengembalian, memilih jenis pengembalian (bisa melalui barang atau uang).</p>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- content section ends -->

        <!-- site footer -->

        <footer class="site-footer">
            <!-- <img src="footerBG.jpg" alt=""> -->
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="logo/resepIn.png" alt="">
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
