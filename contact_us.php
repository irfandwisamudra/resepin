<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
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

            .contact {
                padding: 4rem 7% 10rem;
            }
            .contact p {
                text-align: center;
                max-width: 80rem;
                margin: auto;
                font-size: 1.5rem;
                font-weight: 100;
                line-height: 1.6;
                color: #03254c;
            }
            .contact h2 {
                text-align: center;
                font-size: 3.5rem;
                margin-bottom: 1.5rem;
                color: rgb(69, 103, 131);
            }
            .contact h2 span {
                color: #03254c;
            }
            .contact .row {
                display: flex;
                margin-top: 2rem;
                background-color: rgb(69, 103, 131);
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            }
            .contact .row .map {
                flex: 1 1 40rem;
                width: 40%;
                object-fit: cover;
            }
            .contact .row form {
                flex: 1 1 45rem;
                padding: 3rem 3rem;
                text-align: center;
            }
            .contact .row form .input-group {
                display: flex;
                align-items: center;
                margin-top: 2rem;
                background-color: #03254c;
                border: 2px solid #fff;
            }
            .contact .row form .input-group input {
                width: 100%;
                padding: 1.5rem;
                font-size: 1.5rem;
                color: rgb(69, 103, 131);
                border: none;

            }
            .contact .row form .btn {
                margin-top: 3rem;
                display: inline-block;
                padding: 1.5rem 2.5rem;
                font-size: 1.5rem;
                background-color: #fff;
                color: #03254c;
                font-weight: bold;
                cursor: pointer;
                border: none;
            }
            .contact .row form .btn:hover {
                color: #fff;
                background-color: #03254c;
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

        <!-- contact section start -->
        <section id="contact" class="contact">
            <h2><span>Contact</span> Us</h2>

            <p>
                Apakah Anda mencari rekomendasi makanan terbaik di kota Anda?
                Di Resepin, Anda dapat menemukan ulasan yang jujur dan
                terperinci tentang makanan yang sedang populer dan banyak disukai.
            </p>

            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013653.2303955029!2d112.73959737089712!3d-7.05819243705701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9d3445c8704d1%3A0x5a2751be1dfcce84!2sPulau%20Madura!5e0!3m2!1sid!2sid!4v1683972573489!5m2!1sid!2sid"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" name="" id="" placeholder="Nama" required/>
                    </div>
                    <div class="input-group">
                        <input type="email" name="" id="" placeholder="E-mail" required/>
                    </div>
                    <div class="input-group">
                        <input type="number" name="" id="" placeholder="Phone" required/>
                    </div>
                    <div class="input-group">
                        <input
                            type="text"
                            name=""
                            id=""
                            placeholder="Message"
                            required
                        />
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
            </div>
        </section>
        <!-- contact section end -->

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
    </body>
</html>
