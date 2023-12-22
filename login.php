<?php 
    session_start();

    if( isset($_SESSION["login"]) ) {
        if( $_SESSION["login"] == "admin" ) {
            header("Location: admin/beranda.php");
            exit;
        } else {
            header("Location: beranda.php");
            exit;
        }

    }

    require 'functions.php';

    if( isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // cek username
        if( mysqli_num_rows($result) === 1 ) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            $login_user = $row['username'];
            $id_user = $row['id_user'];
            if( $password == $row["password"] ) {
                // set session
                $_SESSION["login"] = $login_user;
                $_SESSION['id_user'] = $id_user;
                header("Location: beranda.php");
                exit;
            }
        } else if( $username == "admin" && $password == "admin" ) {
            // set session
            $_SESSION["login"] = "admin";

            header("Location: admin/beranda.php");
            exit;
        }

        echo "<script>
            alert('Username atau Password Anda salah!');
        </script>";

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="headerFooter.css">

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
            .book{
                margin-top: 70px;
            }
            .book .row {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap: 20px;
            }
            .book .row .image{
                flex:1 1 40%;
            }
            .book .row .image img {
                width: 80%;
                margin: 0 0 50px 20%;
                /* margin: 50px; */
            }

            .book .row form {
                flex:1 1 40%;
                background: #fff;
                border: 2px solid rgb(69, 103, 131);
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                text-align: center;
                padding: 20px;
                border-radius: 5px;
                margin: 0 8% 50px 5%;
                /* width: 40%; */
            }

            .book .row form h3 {
                color: #444;
                padding-bottom: 10px;
                font-size: 30px;
            }

            .book .row form .box {
                width: 90%;
                margin: 7px 0;
                border-radius: 5px;
                border: 2px solid rgb(69, 103, 131);
                font-size: 16px;
                color: #444;
                text-transform: none;
                padding: 10px;
            }

            .book .row form .btn {
                padding: 10px 40px;
            }

            .btn {
                display: inline-block;
                margin-top: 10px;
                padding: 5px;
                padding-left: 10px;
                border: 2px solid rgb(69, 103, 131);
                border-radius: 5px;
                box-shadow: 5px 5px 0 rgba(22, 160, 133, 0.2);
                color: rgb(69, 103, 131);
                cursor: pointer;
                font-size: 17px;
                background: #fff;
            }

            .btn span {
                padding: 7px 10px;
                border-radius: 5px;
                background: rgb(69, 103, 131);
                color: #fff;
                margin-left: 5px;
            }

            .btn:hover {
                background: rgb(69, 103, 131);
                color: #fff;
            }

            .btn:hover span {
                color: rgb(69, 103, 131);
                background: #fff;
                margin-left: 10px;
            }
            .tombol {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 30px;
                font-size: 15px;
            }
            .tombol a {
                color: #13836c;
                text-decoration: none;
            }

            /* END CONTENT */
        </style>
    </head>

    <body>
        <!-- header section starts  -->

        <header class="header">
            <a href="index.php" class="logo">
                <img src="logo/resepin.png"
            /></a>

            <nav class="navbar">
                <a href="login.php">Login</a>
                <a href="sign_up.php">Sign Up</a>
            </nav>
        </header>

        <!-- header section ends -->

        <!-- section starts -->

        <section class="book" id="book">
            <h1 class="heading"><span>Login</span></h1>
            <div class="row">
                <div class="image">
                    <img src="icon/login_icon.png" alt="" />
                </div>
                <form action="" method="post" id="myForm">
                    <h3>Login</h3>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan Username"
                        class="box"
                        required
                    />
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan Password"
                        class="box"
                        required
                    />
                    <div class="tombol">
                        <a href="forgot_password.php"> Lupa Password? </a>
                        <input
                            type="submit"
                            value="Masuk"
                            class="btn"
                            onclick="checkForm()"
                            name="login"
                        />
                        <a href="sign_up.php"> Ingin Daftar? </a>
                    </div>
                </form>
            </div>
        </section>

        <!-- section ends -->

        <!-- site footer -->

        <footer class="site-footer">
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

        <script>
            function checkForm() {
                var username = document.getElementById("username");
                var password = document.getElementById("password");
                if (username.value != "" && password.value != "") {
                    var tanya = confirm("Apakah data anda sudah benar?");
                    if (tanya != true) {
                        document.getElementById("myForm").action = "logout.php";
                    }
                }
            }
        </script>
    </body>
</html>
