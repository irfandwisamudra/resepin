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
                    <p>Pizza adalah makanan yang terdiri dari adonan tipis berbentuk bundar yang dilapisi dengan saus tomat, keju, dan berbagai macam topping </p>

                    <b>Bahan-bahan:</b>
                    <ul>
                        <li>2 1/2 cup tepung terigu serbaguna</li>
                        <li>1 1/2 sendok teh ragi instan </li>
                        <li>1 sendok teh gula</li>
                        <li>3/4 sendokt teh garam</li>
                        <li>1 sendok makan minyak zaitun</li>
                        <li>3/4 cup air hangat</li>
                        <li>Keju mozzarella, diparut atau dipotong tipis</li>
                        <li>Pepperoni</li>
                        <li>Jamur</li>
                        <li>Paprika</li>
                        <li>Bawang bombay</li>
                        <li>Sosis</li>
                        <li>Zaitun</li>
                        <li>Basil segar atau oregano kering (untuk taburan)</li>
                    </ul>
                    <b>bahan saus tomat</b>
                    <ul>
                        <li>1 1/2 cup saus tomat</li>
                        <li>1 sendok teh gula</li>
                        <li>1/2 sendok teh garam</li>
                        <li>1/2 sendok teh lada hitam</li>
                        <li>1/2 sendok teh oregano kering</li>
                        <li>1/2 sendok teh basil kering</li>
                    </ul>
                    
                    <b>Cara Memasak:</b>
                    <ol>
                        <li>Dalam mangkuk besar, campurkan tepung terigu, ragi instan, gula, dan garam. Aduk rata.</li>
                        <li>Tambahkan minyak zaitun dan air hangat sedikit demi sedikit sambil mengaduk hingga adonan terbentuk.</li>
                        <li>Pindahkan adonan ke permukaan yang ditaburi tepung dan uleni selama sekitar 5-7 menit hingga adonan elastis dan tidak lengket. </li>
                        <li>Jika adonan terlalu lembek, tambahkan sedikit tepung terigu. Jika terlalu kering, tambahkan sedikit air.</li>
                        <li>Letakkan adonan dalam mangkuk yang telah diolesi minyak zaitun, tutup dengan kain bersih.</li>
                        <li>Biarkan mengembang selama sekitar 1-2 jam hingga adonan menggandakan ukurannya.</li>
                        <li>Dalam mangkuk kecil, campurkan saus tomat, gula, garam, lada hitam, oregano, dan basil. Aduk rata.</li>
                        <li>Panaskan oven pada suhu 220°C.</li>
                        <li>Ambil adonan pizza yang telah mengembang dan letakkan di permukaan yang ditaburi tepung.</li>
                        <li>Giling atau pipihkan adonan sesuai dengan ketebalan yang diinginkan.</li>
                        <li>Letakkan adonan di atas loyang pizza yang telah diolesi minyak atau dialasi dengan kertas roti.</li>
                        <li>Oleskan saus tomat ke permukaan adonan, menjaga jarak dari pinggiran untuk membuat kerak yang renyah.</li>
                        <li>Taburi dengan keju mozzarella yang telah diparut atau dipotong tipis</li>
                        <li>Tambahkan topping sesuai selera, seperti pepperoni, jamur, paprika, bawang bombay, sosis, dan zaitun.</li>
                        <li>Panggang pizza dalam oven yang telah dipanaskan selama sekitar 12-15 menit atau hingga keraknya kecokelatan dan keju meleleh.</li>
                        <li>Setelah matang, taburi dengan basil segar atau oregano kering untuk memberikan aroma dan rasa yang</li>
                        <li>Pizza siap dihidangkan!</li>
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