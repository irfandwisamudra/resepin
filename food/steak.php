<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }

    require '../functions.php';

    $id_menu = $_GET["id_menu"];
    $menu = query("SELECT * FROM data_menu WHERE id_menu = $id_menu")[0];

?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $menu["nama_menu"]; ?></title>
    <link rel="stylesheet" href="menu_makanan.css">
    
</head>
<body>
    <!-- header section starts  -->

    <header class="header">
        <a href="index.php" class="logo">
            <img src="../logo/resepin.png"
        /></a>

        <nav class="navbar">
            <a href="../beranda.php">Beranda</a>
            <a href="../list.php">List</a>
            <a href="../news.php">News</a>
            <a href="../developer.php">Developer</a>
            <a href="../user/dashboardUser.php"
                ><ion-icon
                    class="iconProfile"
                    name="person-circle-outline"
                ></ion-icon
            ></a>
        </nav>
    </header>

    <!-- header section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>Resep</span> </h1>

        <div class="row">

            <div class="image">
                <img src="../image/<?= $menu["gambar_menu"]; ?>" width="100%">
            </div>

            <div class="content">
                <form action="../checkout.php?id_menu=<?= $menu["id_menu"]; ?>" method="POST">
                    <h3> <input type="hidden" name="nama_menu" value="<?= $menu["nama_menu"]; ?>"> <?= $menu["nama_menu"]; ?> </h3>
                    <b>Deskripsi:</b>
                    <p> Steak biasanya terbuat dari potongan daging sapi yang dipotong tebal dan kemudian dipanggang, digoreng, atau dipanggang dengan api tinggi.</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>2 potong steak sapi (misalnya tenderloin atau sirloin)</li>
                        <li>1/4 buah nanas, parut atau giling halus</li>
                        <li>1 sdm margarin</li>
                        <li>kentang goreng secukpnya</li>
                        <li>wortel rebus, lalu potong memanjang</li>
                        <li>brokoli, seduh air panas lalu potong per kuntum</li>
                    </ul>
                    <b>bahan perendam</b>
                    <ul>
                        <li>1 siung bawang putih, haluskan</li>
                        <li>1/2 sdt lada hitam</li>
                        <li>1 sdm kecap asin</li>
                        <li>1 sdm kecap manis</li>
                        <li>1 sdm kecap inggris</li>
                        <li>1 sdm minyak zaitun</li>
                        <li>1/2 sdt garam</li>
                    </ul>
                    <b>bahan saus lada hitam</b>
                     <ul>
                        <li>1/2 bawang bombay, cincang halus</li>
                        <li>2 siung bawang putih, cincang halus</li>
                        <li>1 sdm saus tiram</li>
                        <li>1 sdm Kecap manis </li>
                        <li>1 sdt Lada hitam, tumbuk besar </li>
                        <li>1 asdt gula pasir</li>
                        <li>1/2 sdt garam</li>
                        <li>200 ml air</li>
                        <li>1 sdm tepung maizena</li>
                        <li>1 sdm margarin</li>
                        <li>2 sdm sisa bumbu rendaman daging</li>
                    </ul>

                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Siapkan plastik transparan, masukkan daging dan parutan nanas ke dalamnya.</li>
                        <li>Kunci atau simpulkan ujung plastik kemudian kocok-kocok plastik hingga seluruh bagian daging terlumuri dengan nanas</li>
                        <li>Tutup rapat plastik lalu dimpan di kulkas selama kurang lebih 1 jam.</li>
                        <li>Keluarkan daging dari dalam plastik, cuci bersih menggunakan air mengalir hingga tak ada bekas nanas. Sisihkan.</li>
                        <li>Dalam satu wadah, campurkan semua bahan perendam daging kemudian aduk rata.</li>
                        <li>Masukkan daging ke dan lumuri seluruh bagian daging dengan bumbu perendam.</li>
                        <li>Gunakan garpu atau ujung pisau untuk menusuk-menusuk permukaan daging supaya bumbunya meresap.</li>
                        <li>Tutup rapat wadah dan masukkan ke dalam kulkas (bagian chiller) selama minimal 4 jam.</li>
                        <li>Keluarkan daging dan tiriskan dari bumbu perendam. Sisihkan bumbu perendam untuk nanti membuat saus.</li>
                        <li>Panaskan wajan datar di atas kompor hingga benar-benar panas. Masukkan margarin.</li>
                        <li>Letakkan potongan daging dan masak dengan api kecil hingga satu sisinya terpanggang dan berubah warna menjadi kecoklatan. </li>
                        <li>Balik daging dan masak sisi yang lainnya juga hingga matang. Angkat dan tiriskan.</li>
                        <li>Panaskan wajan datar dan masukkan margarin.</li>
                        <li>Tumis bawang bombay hingga layu kemudian masukkan bawang putih dan tumis kembali hingga harum.</li>
                        <li> Masukkan saus tiram dan kecap manis, aduk rata dan masak hingga tercium aroma harum dan sausnya matang.</li>
                        <li>Tambahkan air, kaldu bubuk, gula, dan lada hitam. Aduk rata dan masak hingga saus meletup-letup.</li>
                        <li>Masukkan bumbu sisa rendaman daging dan larutan maizena. Masak hingga saus meletup-letup dan mengental. Tes dan koreksi rasanya.</li>
                        <li>Angkat dan siap disajikan.</li>
                        <li>Tata daging dan bahan pelengkap.</li>
                        <li>Siram daging dengan saus dan juga sajikan saus dalam wadah tersendiri.</li>
                        <li>Siap disajikan.</li>
                    </ol>

                    <div class="tombol">
                        <button class="btn"> Beli Sekarang <span><img src="../icon/arahkanan.png" width="30px"></span> </button>
                    </div>
                </form>
            </div>

        </div>

    </section>

    <!-- about section ends -->

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
                <a href="../about_us.php"><p>About Us</p></a>
                <a href="../contact_us.php"><p>Contact Us</p></a>
                <a href="../chef.php"><p>Chef</p></a>
                <a href="../blog.php"><p>Blog</p></a>
                <a href="../faq.php"><p>FAQs</p></a>
                <a href="../review.php"><p>Review</p></a>
                <a href="../shipping_and_processing.php"><p>Shipping and Processing</p></a>
                <a href="../privacy_and_policy.php"><p>Privacy and Policy</p></a>
                <a href="../terms_of_use.php"><p>Terms of Use</p></a>
                <a href="../disclaimer.php"><p>Disclaimer</p></a>
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