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
        <title>News 4</title>
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
                    >Terlalu Lama di Indonesia, Bule Ini Punya Kebiasaan Makan
                    Gaya Lokal</span
                >
            </h1>
            <div class="terms-content">
                <div class="bule">
                    <img src="bule.jpeg" alt="" />
                </div>
                <p>
                    Terlalu lama tinggal di Indonesia, bule ini mengalami
                    perubahan cara makan. Ketika kembali ke negaranya, ia
                    mengaku tak bisa melepaskan kebiasaan unik ini. Tak hanya
                    jenis makanannya yang bermacam-macam, cara orang Indonesia
                    menikmati makanan juga sangat variatif. Beberapa makanan
                    dinikmati dengan cara yang berbeda atau dipadukan dengan
                    makanan yang tidak seharusnya. Seorang TikToker bule asal
                    Amerika Serikat ini mengakui banyak perubahan pada cara
                    makannya semenjak tinggal di Indonesia. Ia lebih handal
                    menikmati makanan Indonesia dengan cara yang sangat
                    tradisional. Bahkan ketika kembali ke negaranya ia juga
                    mengaku tak bisa meninggalkan kebiasaan makan itu. Sesekali
                    dirinya membuat sebuah parodi yang menunjukkan kelekatan
                    cara makan ala Indonesia pada dirinya.
                    <br />
                    <br />
                </p>
                <p>
                    1. Makan nasi Padang pakai tangan<br />
                    Begitu menyukai nasi Padang, Bang Joe juga handal menikmati
                    nasi Padang dengan tangannya. Setiap lauk pauk disatukan
                    dengan nasi dan langsugn disuap dengan jari-jemarinya ke
                    dalam mulut. Bang Joe menceritakan respon dari orang bule
                    lain yang akan melihatnya makan nasi Padang dengan cara
                    seperti ini. Dalam videonya, teman Bang Joe terlihat
                    terkejut dan merasa cara makannya menjijikan. Temannya yang
                    melihat Bang Joe makan dengan lahap justru tak tertarik
                    dengan makanan yang ditawarkan. Ia hanya memilih makan es
                    krim dan menghindari untuk melihat cara Bang Joe makan nasi
                    Padang.<br />
                </p>
                <p>
                    2. Makan mie instan campur nasi<br />
                    Menemukan cara unik orang Indonesia menikmati mie instan,
                    Bang Joe bahkan mengatakan menu ini seharusnya menjadi
                    makanan nasional Indonesia. Ia tak mengatakan sederet
                    makanan tradisional seperti gado-gado atau soto menjadi
                    makanan nasional Indonesia. Bang Joe menyebutkan bahwa
                    Indomie lebih layak untuk dikategorikan sebagai makanan
                    nasional Indonesia. Tetapi bukan hanya indomie yang
                    dikonsumsi dengan cara yang biasa. Bang Joe merasa tertarik
                    ketika datang ke Indonesia dan mengenal cara makan indomie
                    yang dicampurkan nasi putih. Hidangan ini disebut Bang Joe
                    layak dikatakan sebagai makanan khas orang Indonesia.<br />
                </p>
                <p>
                    2. Makan mie instan campur nasi<br />
                    Menemukan cara unik orang Indonesia menikmati mie instan,
                    Bang Joe bahkan mengatakan menu ini seharusnya menjadi
                    makanan nasional Indonesia. Ia tak mengatakan sederet
                    makanan tradisional seperti gado-gado atau soto menjadi
                    makanan nasional Indonesia. Bang Joe menyebutkan bahwa
                    Indomie lebih layak untuk dikategorikan sebagai makanan
                    nasional Indonesia. Tetapi bukan hanya indomie yang
                    dikonsumsi dengan cara yang biasa. Bang Joe merasa tertarik
                    ketika datang ke Indonesia dan mengenal cara makan indomie
                    yang dicampurkan nasi putih. Hidangan ini disebut Bang Joe
                    layak dikatakan sebagai makanan khas orang Indonesia.<br />
                </p>
                <p>
                    3. Terbiasa makan dengan kecap <br />
                    Pulang ke negaranya, Bang Joe seringkali keliru antara
                    'ketchup' (saus tomat) dan kecap. Ia memperagakan momen
                    ketika bertemu temannya yang meminta saus tomat sebagai
                    pelengkap makanan. Dalam video singkatnya, teman Bang Joe
                    kesal karena tak dapat saus tomat dari restoran tempat
                    memesan makanan. Kemudian ia mengatakan bahwa memiliki
                    'ketchup' dan akan segera diambil dari dapurnya. Setelah
                    kembali ternyata dirinya justru membawa kecap manis asal
                    Indonesia. Hal ini membuat temannya yang merupakan seorang
                    bule berhasil kebingungan dengan benda yang diberikan.
                    <br />
                </p>
                <p>
                    4. Minum es cekek <br />
                    Hobi mengonsumsi makanan dan minuman kaki lima ala Indonesia
                    membuat Bang Joe menyukai es teh manis. Bukan es teh yang
                    disajikan di gelas, dirinya senang mengonsumsi es teh manis
                    yang dikemas dengan plastik. Bang Joe memeragakan hal yang
                    akan terjadi saat teman bulenya melihat minuman yang
                    dipegangnya. Menikmati minuman pada kantong plastik yang
                    aneh bagi orang Amerika Serikat membuat teman Bang Joe
                    tertawa terbahak-bahak. Bahkan ketika ditanya apa yang lucu?
                    Temannya tak bisa menjawab dan terus tertawa. Hingga
                    akhirnya Bang Joe yang merasa kesal es teh manisnya
                    ditertawai melemparkan minumannya pada temannya tersebut.
                    <br />
                </p>
                <p>
                    5. Makan nasi Padang pakai soda <br />
                    Bang Joe mengakui bahwa nasi Padang adalah salah satu
                    makanan favoritnya di Indonesia. Rasa bumbu yang berempah
                    dengan beragam lauk pauk seolah menjadi comfort food bagi
                    lidahnya. Tetapi ia juga tak bisa melepaskan kebiasaannya
                    minum minuman soda kemasan. Selama di Indonesia ada salah
                    satu minuman soda dengan merek Tebs yang disukainya dan tak
                    pernah ditemui di Amerika Serikat. Perpaduan antara nasi
                    Padang dan Tebs menjadi kombinasi yang paling disukainya.
                    Melalui videonya ia juga mengatakan bahwa keduanya memiliki
                    rasa unik jika dipadukan. <br />
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
