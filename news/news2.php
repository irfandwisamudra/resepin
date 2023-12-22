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
        <title>News 2</title>
        <link rel="stylesheet" href="news.css" />
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

        <!-- section starts  -->

        <section class="about" id="about">
            <h1 class="heading">
                <span
                    >Indonesia Masuk Daftar Pemilik Makanan Terlezat di Dunia
                    2022 Versi TasteAtlas</span
                >
            </h1>
            <div class="terms-content">
                <p>
                    Melansir situs webnya, Jumat (30/12/2022), peringkat teratas
                    dalam daftar adalah masakan Italia, Yunani, dan Spanyol
                    dengan makanan lezat yang dilindungi secara nasional,
                    seperti parmigiano reggiano, zaitun kalamata, dan jamón
                    ibérico.
                </p>
                <p>
                    Masakan Kanada, Latvia, Maroko, dan Norwegia "secara
                    kontroversial," menurut Hypebeast, berada di urutan terbawah
                    dari daftar 95 entri, meski menawarkan poutine, tajine ayam,
                    dan salmon Norwegia. Menariknya, masakan Amerika berada di
                    peringkat delapan dalam daftar, mengalahkan masakan Prancis
                    dan Cina, meski memiliki pandangan kuliner yang luas.
                </p>
                <p>
                    Sementara itu, Indonesia mantap memimpin kawasan Asia
                    Tenggara dengan bertengger di peringkat ke-16, mencatat skor
                    4,37 yang membuatnya seri dengan Jerman di posisi ke-15.
                    TasteAtlas merekomendasikan tidak kurang dari 224 makanan
                    Indonesia dan 412 lokasi kuliner yang tersebar di berbagai
                    wilayah. Makanan yang direkomendasikan antara lain satai,
                    sambal, soto, acar, tempe, bakso, dan ayam goreng.
                    Sementara, produk makanannya termasuk durian, kecap manis,
                    lengkuas, bawang goreng, serundeng, geplak, dan kopi gayo
                    Aceh.
                </p>
                <p>
                    Berikut adalah 20 besar dalam Daftar Makanan Terlezat di
                    Dunia 2022 versi TasteAtlas, dengan hanya ada dua wakil Asia
                    Tenggara dalam peringkat tersebut:
                </p>
                <p>
                    1. Italia (4,72) <br />
                    Rekomendasi makanannya antara lain parmigiano reggiano,
                    prosciutto toscano, nduja, risotto ai funghi porcini, dan
                    pesto genovese. <br />
                    2. Yunani (4,69) <br />
                    Sajian dalam skor terbaiknya, termasuk kalamata, fystiki
                    aeginas, rodakina naoussas, saganaki, dan dakos. <br />
                    3. Spanyol (4,59) <br />
                    Makanan jagoannya, seperti jamón 100% ibérico de bellota,
                    jamón ibérico de bellota, manchego curado, espetos, dan
                    gambas à la plancha. <br />
                    4. Jepang (4,59) <br />
                    Rekomendasi kulinernya antara lain ikura, kobe beef, ramen
                    noodles, karaage, dan bento. <br />
                    5. India (4,54) <br />
                    Sajian primadonanya termasuk garam masala, ghee, malai,
                    butter garlic naan, dan keema. <br />
                    6. Meksiko (4,53) <br />
                    Chinantla vanilla, oaxaca cheese, cajeta, carnitas, dan
                    chilaquiles masuk dalam rekomendasi makanannya. 7. Turki
                    (4,52) <br />
                    Kuliner jagoannya termasuk kaymak, afyon sucuġu, aydın
                    i̇nciri, cağ kebabı, dan bal kaymak. <br />
                    8. Amerika Serikat (4,51) <br />
                    Honeycrisp apples, wild alaska salmon, florida oranges,
                    texas brisket sandwich, dan central texas-style barbecue
                    jadi rekomendasi kulinernya. <br />
                    9. Prancis (4,51) <br />
                    Mont d'or, rochebaron, aïoli, steak au poivre, dan crème
                    brûlée termasuk kuliner yang jadi jagoan di Prancis. <br />
                    10. Peru (4,51) <br />
                    Rekomendasi kulinernya antara lain cocona, aji amarillo,
                    algarrobina, leche de tigre, dan ceviche mixto. <br />
                    11. China (4,49) <br />
                    Lychee, soy sauce, rice vermicelli, guotie, dan cha siu bao
                    merupakan kuliner primadona di China. <br />
                    12. Brasil (4,49) <br />
                    Canastra, açaí berries, queijo de coalho, picanha, dan pão
                    de queijo masuk dalam rekomendasi makanannya. <br />
                    13. Portugal (4,47) <br />
                    Kuliner jagoannya termasuk queijo serra da estrela, queijo
                    de azeitão, presunto, pastel de belém, dan amêijoas à bulhão
                    pato. <br />
                    14. Polandia (4,44) <br />
                    Bundz, kiełbasa myśliwska staropolska, polędwica, sernik,
                    dan kapusta zasmażana ada di antara kuliner rekomendasinya.
                    <br />
                    15. Jerman (4,37) <br />
                    Düsseldorfer mostert, beelitzer spargel, spätzle,
                    regensburger wurst, dan käsespätzle adalah sedikit dari
                    ratusan kuliner yang direkomendasikan. <br />
                    16. Indonesia (4,37) <br />
                    Rekomendasi sajiannya antara lain lengkuas, bawang goreng,
                    kecap manis, nasi padang, dan ayam goreng. <br />
                    17. Kroasia (4,33) <br />
                    Istarsko ekstra djevičansko maslinovo ulje, baranjski kulen,
                    slavonski kulen, viška pogača, dan zapečeni štrukli adalah
                    sedikit rekomendasinya. <br />
                    18. Argentina (4,33) <br />
                    Rekomendasinya termasuk Argentine beef, provoleta, centolla
                    fueguina, provoleta, dan parrilla. <br />
                    19. Korea (4,31) <br />
                    Gochujang, doenjang, kimchijeon, baechu-kimchi, dan
                    tteokbokki termasuk dalam rekomendasi makanannya. <br />
                    20. Vietnam (4,31) <br />
                    Rekomendasi kulinernya antara lain phú quốc fish sauce,
                    dragon fruit from phan thiết, bánh phở, nước chấm, dan bánh
                    mì heo quay. <br />
                </p>
            </div>
        </section>

        <!-- section ends -->

        <!-- site footer -->

        <footer class="site-footer">
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="../logo/resepin.png" alt="" />
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
                    <a href="../shipping_and_processing.php"
                        ><p>Shipping and Processing</p></a
                    >
                    <a href="../privacy_and_policy.php"
                        ><p>Privacy and Policy</p></a
                    >
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
