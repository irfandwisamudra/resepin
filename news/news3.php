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
        <title>News 3</title>
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
                    >5 Negara yang Punya Makanan Terenak Versi Traveler, Ada
                    Indonesia?</span
                >
            </h1>
            <div class="terms-content">
                <p>
                    Selain spot wisata seru, beberapa negara di dunia juga punya
                    kuliner menarik. Seperti 5 negara ini yang menjadi tempat
                    terbaik untuk berburu kuliner. Momen liburan pastinya ingin
                    dipakai untuk menghabiskan waktu sebaik mungkin. Namun semua
                    tidak lengkap tanpa mencicipi beberapa makanan khas daerah
                    yang dikunjungi. Oleh karena itu, selain datang ke
                    tempat-tempat wisata yang seru, pastinya kamu juga ingin
                    mencicipi langsung makanan khas daerah yang dituju. Para
                    wisatawan bisa mendapatkan pengalaman berbeda sekaligus
                    mencicipi hidangan autentik. Jika ingin berlibur ke negara
                    dengan wisata yang menyenangkan sekaligus memiliki kuliner
                    enak, 5 negara ini bisa menjadi tujuan. Merangkum
                    traveller.com.au, berikut 5 negara dengan kuliner terbaik di
                    dunia!
                </p>
                <br />
                <p>1. Jepang</p>
                <img src="sushi.jpeg" alt="" />
                <p>
                    Tak bisa dipungkiri Jepang menjadi salah satu destinasi
                    wisata kuliner terbaik. Makanan khas Jepang sendiri banyak
                    diminati oleh masyarakat dunia. Jika pergi ke Jepang, kamu
                    akan mendapatkan pengalaman kuliner luar biasa. Semua
                    makanan yang dijual terkenal dengan keunikan dan rasanya
                    yang enak. Mulai dari makanan murah yang hadir di minimarket
                    seperti tamago sando (sandwich telur) sampai nigiri termahal
                    di restoran sushi berbintang. Kulineran malam juga bisa
                    dinikmati di kedai bertema izakaya. Duduk-duduk santai
                    sambil menikmati tempura, katsu, dan yakitori yang lezat.
                    Hidangan sushi asli Jepang juga bikin banyak orang
                    terkesima.
                </p>
                <br />
                <p>2. Vietnam</p>
                <img src="saigon.jpeg" alt="" />
                <p>
                    Berbicara terkait negara dengan kuliner terbaik di Asia
                    Tenggara, Vietnam menjadi pilihan tepat. Hidangan khas
                    Vietnam yang paling populer adalah pho yaitu sajian mie
                    beras kenyal yang dilengkapi dengan kuah kaldu sapi khas
                    Vietnam. Biasanya dilengkapi dengan sayuran segar dan irisan
                    daging. Bahkan pho kini telah menjadi salah satu makanan
                    Vietnam yang sangat digemari oleh orang Australia. Setiap
                    daerah di Vietnam memiliki hidangan pho dengan ciri khasnya
                    tersendiri. Selain makanan berkuah itu, Vietnam juga punya
                    hidangan sandwich dengan isian sayuran dan potongan daging
                    babi yang disebut banh mi. Sementara adapun sejumlah sup mi
                    yang berbeda hingga masakan tumisan yang lezat. Kabar
                    baiknya, makanan-makanan di Vietnam selain enak juga mudah
                    didapat dan tentunya punya harga terjangkau.
                </p>
                <br />
                <p>3. Thailand</p>
                <img src="tomyam.jpeg" alt="" />
                <p>
                    Popularitas makanan Thailand tak kalah hebat. Thailand
                    menawarkan makanan dengan keseimbangan rasa manis, pedas,
                    asin, dan asam yang rupanya disukai oleh banyak orang. Kari,
                    tom yum, maupun tumis-tumisan ala Thailand memang populer,
                    tetapi masih banyak lagi makanan Thailand yang bisa
                    ditelusuri. Mulai dari salad hingga daging panggang yang
                    punya rasa enak dan dijual dengan harga terjangkau. Bagi
                    kamu yang juga ingin mencoba berbagai macam makanan unik,
                    Thailand menjadi destinasi yang tepat. Di beberapa pusat
                    kuliner Thailand, wisatawan bisa dengan mudah menemukan
                    makanan unik seperti serangga goreng, serangga bakar, hingga
                    dancing shrimp yaitu olahan seafood mentah yang akhir-akhir
                    sedang viral.
                </p>
                <br />
                <p>4. Italia</p>
                <img src="pasta.jpeg" alt="" />
                <p>
                    Beralih ke Eropa, Italia pastinya tidak boleh dilewatkan
                    dari negara dengan kuliner terbaik di dunia. Jika berkunjung
                    ke Italia, kamu bisa mencoba hidangan pizza, pasta, hingga
                    risotto yang autentik karena bahan-bahannya datang langsung
                    dari pasar-pasar di sana. Di Italia kamu juga bisa menemukan
                    berbagai macam toko makanan seperti pasar dengan semua
                    produk segar, toko keju, toko kue kering, hingga kedai kopi.
                    Pengalaman kulineran di Italia akan semakin seru karena
                    setiap kota, wilayah, bahkan desa-desa kecil menawarkan hal
                    ini dengan caranya sendiri dan tradisi yang unik.
                </p>
                <br />
                <p>5. Spanyol</p>
                <img src="churros.jpeg" alt="" />
                <p>
                    Negara di Eropa Barat ini juga menawarkan kuliner terbaik.
                    Masakan Spanyol sebenarnya bergam dan tradisional. Restoran
                    Spanyol juga terkenal dengan kenikmatannya sampai-sampai
                    menurut daftar 50 restoran terbaik di dunia, ada tiga
                    restoran di Spanyol yang masuk urutan 10 teratas di dunia.
                    Spanyol juga dikenal sebagai produsen makanan termahal di
                    dunia, seperti Jamon Iberico yaitu paha babi termahal yang
                    konon punya rasa sangat lezat. Hidangan ini menjadi mahal
                    karena keterbatasan persediaan dan kualitasnya yang premium.
                    Selain itu ada juga cava Spanish, yaitu salah satu sparkling
                    wine terpopuler hingga chorizo, sosis babi mentah yang sudah
                    dibumbui dengan paprika dan sudah melalui proses diasap.
                    Spanyol juga punya hidangan populer seperti churros yaitu
                    donat asal spanyol yang renyah hingga tortilla khas Spanyol
                    berupa omelet khas Spanyol yang terdiri dari irisan kentang
                    tipis dan telur.
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
