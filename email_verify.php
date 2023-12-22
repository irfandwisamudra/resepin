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
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $verify = $_POST["code"];
        $captcha = $_POST["nilaiCaptcha"];
        // Kirim email
        if ($captcha === "smwm" and $verify === "123456") {
            echo "<script> alert('Succes') </script>";
            header('location: change_password.php');

        } else {
            echo "<script> alert('Gagal') </script>";
        }  
        
    } 
        
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ResepIn</title>

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
            
            .mainContainer {
                width: 95%;
                /* height: 900px; */
                /* background-color: #16a085; */
                margin: 50px 20px;
                display: flex;
                align-items: center;
            }

            .mainContainer img {
                width: 35%;
                height: 35%;
                margin-left: 50px;
                margin-top: 50px;
                margin-bottom: 50px;
                
            }

            .form {
                background-color: #fff;
                height: 30%;
                width: 40%;
                margin-left: 100px;
                border: 3px solid rgba(44,62,78,1);
                display: flex;
                /* align-items: center; */
                /* justify-content: center; */
                flex-direction: column;
                border-radius: 10px;

                
            }

            .form form input {
                width: 95%;
                height: 40px;
                border: 2px solid rgba(44,62,78,1);
                margin-top: 30px;
                margin-bottom: 20px;
                border-radius: 5px;
                overflow: hidden;
                font-family: verdana;
                font-size: 15px;
            }
            .form form {
                margin: 30px 50px;
            }
            .form form button {
                width: 300px;
                height: 40px;
            }
            .form form label {
                font-size: 20px;
                color: rgba(44,62,78,1);
            }
            .formHeader {
                background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgb(69, 103, 131) 82.8% );
                width: 100%;
                height: 60px;
                display: flex;
                align-items: center;
                
            }
            .formHeader p {
                font-size: 15px;
                margin: 0 20px;
                color: #fff;
            }
            .form form img {
                width: 20%;
                height: 5%;
            }

            .form form button{
                background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgb(69, 103, 131) 82.8% );
                width: 95%;
                /* margin-left: 48%; */
                border-radius: 10px;
                border: #16a085;
                font-size: 20px;
                color: #fff;
            }
            /* END CONTENT */


    </style>
    </head>

    <body>
        <!-- header section starts  -->

        <header class="header">
            <a href="index.php" class="logo"> <img src="logo/resepin.png" /></a>

            <nav class="navbar">
                <a href="login.php">Login</a>
                <a href="news.php">Sign Up</a>
            </nav>
        </header>

        <!-- header section ends -->

        <!-- main section starts -->
        <div class="mainContainer">
            <img src="./icon/forgot_icon.png" alt="" >
            <div class="form" >
                <div class="formHeader">
                    <p>Masukkan code verification yang sudah terkirim ke email anda</p>
                </div>
                <form method="POST"  action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <label > <p>Code Verification</p> 
                        <input type="text" name="code" required/><br>
                    </label>
                    <img src="./image/captcha.png" alt="captcha" />
                    <label > <p>Input captcha</p>
                        <input type="text" name="nilaiCaptcha" required>
                    </label>
                    <button type="submit" value="Cek Captcha" >Kirim</button>
                </form>
            </div>

        </div>






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
    </body>
</html>