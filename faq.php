<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>FAQs</title>
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
                width: 100%;
                padding: 4rem 0 10rem;
            }

            .title {
                text-align: center;
                font-size: 3.5rem;
                margin-bottom: 1.5rem;
                color: rgb(69, 103, 131);
            }

            .title span {
                color: #03254c;
            }

            .faqs {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .faq {
                max-width: 800px;
                margin-top: 2rem;
                padding-bottom: 1rem;
                border-bottom: 2px solid rgb(69, 103, 131);
                cursor: pointer;
            }

            .question {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .question h3 {
                color: rgb(69, 103, 131);
                font-size: 1.8rem;
            }

            .answer {
                max-height: 0;
                overflow: hidden;
                transition: max-height 1.4s ease;
            }

            .answer p {
                padding-top: 1rem;
                line-height: 1.6;
                font-size: 1.4rem;
                color: #03254c;
                text-align: justify;
            }

            .faq.active .answer {
                max-height: 300px;
                animation: fade 1s ease-in-out;
            }

            .faq.active svg {
                transform: rotate(180deg);
            }

            svg {
                transition: transform 0.5s ease-in;
            }

            @keyframes fade {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0px);
                }
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
            <h1 class="title"><span>Frequently Asked</span> Questions</h1>

            <div class="faqs">
                <div class="faq">
                    <div class="question">
                        <h3>Apakah ada batasan wilayah pengiriman?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Saat ini, kami hanya melakukan pengiriman di sekitar kawasan perkotaan utama. Jika Anda berada di luar kawasan tersebut, mungkin kami tidak dapat mengirimkan pesanan Anda. Namun, kami terus memperluas jangkauan pengiriman kami, jadi pastikan untuk memeriksa kembali di masa mendatang.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Apakah ada diskon atau promo khusus?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Saat ini, Resepin sedang mengadakan promo Buy One Get One Free untuk produk tertentu. Anda dapat mengunjungi daftar produk yang termasuk dalam promo ini.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Apakah makanan yang dijual halal?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Ya, semua makanan yang kami jual adalah halal. Kami menjalankan proses pengolahan dan persiapan makanan sesuai dengan standar dan prinsip makanan halal. Kami juga bekerja sama dengan lembaga sertifikasi halal terkemuka untuk memastikan bahwa semua bahan baku yang kami gunakan dan produk akhir yang dihasilkan memenuhi persyaratan halal. Jadi, Anda dapat dengan percaya diri menikmati makanan kami tanpa khawatir.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Apakah tersedia layanan pengiriman?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Ya, kami menyediakan layanan pengiriman untuk memudahkan pelanggan kami. Kami bekerja sama dengan mitra pengiriman terpercaya untuk mengirimkan pesanan langsung ke pintu Anda. Anda dapat memilih opsi pengiriman saat melakukan pemesanan dan kami akan mengatur pengiriman sesuai dengan preferensi Anda. Biaya pengiriman dan estimasi waktu pengiriman dapat bervariasi tergantung lokasi dan metode pengiriman yang dipilih. Pastikan untuk memeriksa detail pengiriman saat melakukan pemesanan atau menghubungi layanan pelanggan kami untuk informasi lebih lanjut.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Bagaimana cara melacak pesanan saya?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Setelah Anda menyelesaikan pemesanan, Anda akan menerima email konfirmasi yang berisi nomor pelacakan atau tautan untuk melacak pesanan Anda. Periksa kotak masuk email Anda dan cari email konfirmasi dari kami.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Apakah makanan dijual dalam porsi individu atau dalam paket?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Kami memiliki menu porsi individu yang memungkinkan Anda untuk memilih makanan dalam jumlah yang sesuai dengan selera Anda. Anda dapat memesan satu hidangan untuk dinikmati secara perorangan atau untuk memenuhi kebutuhan pribadi Anda.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Bagaimana kebijakan pengembalian atau penggantian makanan yang tidak sesuai?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Kami menerapkan kebijakan pengembalian atau penggantian makanan yang tidak sesuai dengan pesanan Anda. Pertama anda dapat menghubungi layanan Pelanggan, lalu dokumentasikan masalah, kemudian Tim layanan pelanggan kami akan mengevaluasi masalah yang Anda laporkan untuk menentukan solusi terbaik. Opsi yang dapat kami tawarkan termasuk penggantian makanan yang tidak sesuai atau pengembalian dana sesuai kebijakan kami. Kami akan memberikan informasi lebih lanjut mengenai prosedur dan batasan yang berlaku dalam kasus-kasus tertentu. Kami berkomitmen untuk menangani masalah dengan cepat dan memuaskan bagi pelanggan. Kepuasan Anda adalah prioritas kami, dan kami akan bekerja keras untuk memastikan bahwa Anda puas dengan berbelanja makanan di ResepIn.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Bagaimana metode pembayaran yang diterima?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Kami menerima berbagai metode pembayaran yang berbeda untuk memudahkan pelanggan dalam bertransaksi di ResepIn. Beberapa metode pembayaran yang dapat Anda gunakan adalah pembayaran dengan Kartu Kredit/Debit, melalui Layanan Pembayaran Elektronik, Transfer Bank, dan Pembayaran Tunai.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Berapa harga makanan yang ditawarkan?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Harga makanan yang ditawarkan di ResepIn dapat bervariasi tergantung pada jenis makanan, ukuran porsi, dan kebijakan harga yang berlaku. Di setiap halaman produk makanan, anda akan menemukan harga yang tercantum untuk masing-masing item.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h3>Berapa lama waktu pengiriman makanan?</h3>
                        <svg width="15" height="10" viewBox="0 0 42 45">
                            <path
                                d="M3 3L21 21L39 3"
                                stroke="white"
                                stroke-width="7"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>
                    <div class="answer">
                        <p>Waktu pengiriman makanan dapat bervariasi tergantung pada beberapa faktor, termasuk lokasi pengiriman, waktu pesanan, dan kebijakan pengiriman yang kami terapkan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- content section ends -->
        
        <!-- site footer -->

        <footer class="site-footer">
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="logo/resepin.png" alt="">
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

        <script>
            const faqs = document.querySelectorAll(".faq");

            faqs.forEach((faq) => {
                faq.addEventListener("click", () => {
                    faq.classList.toggle("active");
                });
            });
        </script>
    </body>
</html>
