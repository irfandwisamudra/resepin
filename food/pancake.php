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
                    <p>Pancake seringkali dihidangkan sebagai sarapan atau makanan penutup, dan dapat disajikan dengan berbagai macam topping dan sirup.</p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>1 1/2 cup tepung terigu</li>
                        <li>2 sendok makan gula</li>
                        <li>1 sendok makan baking powder</li>
                        <li>1/4 sendok teh garam</li>
                        <li>1 1/4 cup susu</li>
                        <li>1 telur</li>
                        <li>2 sendok makan mentega, dilelehkan</li>
                        <li>Minyak atau mentega untuk mengoles wajan</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Dalam mangkuk besar, campurkan tepung terigu, gula, baking powder, dan garam. Aduk rata.</li>
                        <li>Di mangkuk terpisah, kocok susu, telur, dan mentega leleh hingga tercampur rata</li>
                        <li>Tuangkan campuran susu ke dalam mangkuk dengan campuran tepung</li>
                        <li>Aduk perlahan hingga semua bahan tercampur menjadi adonan yang lembut. </li>
                        <li>Pastikan tidak ada gumpalan tepung yang tersisa, tetapi jangan terlalu banyak mengaduk agar pancake tidak menjadi keras.</li>
                        <li>Panaskan wajan datar atau penggorengan dengan api sedang.</li>
                        <li>Olesi permukaan wajan dengan sedikit minyak atau mentega.</li>
                        <li>Tuangkan adonan pancake sebanyak 1/4 cup atau sesuai ukuran yang diinginkan ke wajan yang telah dipanaskan.</li>
                        <li>Biarkan adonan mengembang dan membentuk lempengan bundar.</li>
                        <li>Biarkan pancake menggoreng hingga bagian bawahnya kecokelatan dan muncul gelembung-gelembung kecil di permukaannya.</li>
                        <li>Kemudian balik pancake dengan spatula dan goreng sisi lain hingga kecokelatan.</li>
                        <li>Angkat pancake dari wajan dan letakkan di piring. Ulangi proses yang sama dengan sisa adonan pancake.</li>
                        <li>Sajikan pancake dengan topping sesuai selera, seperti mentega, sirup maple, gula bubuk, atau buah-buahan segar.</li>
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