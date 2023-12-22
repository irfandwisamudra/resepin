<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
        header("Location: index.php");
        exit;
    }
    require '../functions.php';

    // $username = $_SESSION["login"];
    $id_user = $_SESSION["id_user"];
    $user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
    $rows_user = mysqli_fetch_assoc($user);

    $order = "SELECT COUNT(*) as total FROM data_pesanan WHERE id_user = '$id_user'";
    $result = $conn->query($order);
    if ($result) {
      // Ambil hasil query
      $row = $result->fetch_assoc();
      $totalData = $row['total'];
    } else {
      echo "Terjadi kesalahan: " . $conn->error;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>User</title>
  <link rel="stylesheet" href="headerFooter_user.css">
  <style>
    * {
      padding: 0;
      margin: 0;
    }
    body {
      padding: 0;
      margin: 0;
      background-color: rgb(213, 217, 226);
      position: relative;
      padding-top: 150px;
    }

    /* MAIN SECTION  */

    .main {
      position: relative;
      margin: 10px 50px 50px 150px;
      width: 85%;
      height: 850px;
      background-color:  rgb(235, 238, 245) ;
      border-radius: 10px;
      border: #fff 1px solid;
      /* border: 2px solid #13836c; */
      overflow: hidden;
      box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      -webkit-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      -moz-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
    }

    .background {
      position: relative;
      /* background-color: #1bb697; */
      height: 250px;
    }

    .info {
      position: relative;
      height: 100%;
    }

    .pp {
      position: absolute;
      top: 20%;
      left: 5%;
      height: 150px;
      width: 150px;

      border-radius: 50%;
      border: #fff 3px solid;
    }

    .nama {
      position:absolute;
      top: 32%;
      left: 20%;
    
    }
    .nama span {
      font-family: 'Pacifico', cursive;
      font-size: 40px;
      color: darkgray;
    
    }


    .deskripsiInfo{
      position: relative;
      margin-top: 1%;
      width:90%;
      /* background-color: #16a085; */
      margin-left: 5%;
      border-radius: 10px;
      display: flex;
    }

    .deskripsiInfo p {
      font-family: verdana;
      font-size: 20px;
      color: darkgray;
      margin-left: 40px;
      margin-top: .5%;
    }


    .deskripsi {
      margin-top: 9%;
      font-family: verdana;
      font-size: 20px;
      margin-left: 7%;
      color: darkgray;
    }
    .deskripsi2 {
      margin-top: 4%;
      font-family: verdana;
      font-size: 20px;
      margin-left: 7%;
      color: darkgray;
    }

    .info hr {
      margin-left: 7%;
      margin-top: 1%;
      
    }

    .achv{
      display: flex;
      width: 90%;
      height: 150px;
      margin-left: 5%;
      /* background-color: #13836c; */
    }

    .achv ion-icon  {
      width: 60px;
      height: 60px;
      color: darkgray;
    }
    .achv span{
      margin-top: 5px;
      color: darkgray;
      font-family: verdana;
      font-size: 15px;
    }
    .achv p {
      color: rgba(69,103,131,1);
      font-family: verdana ;
    }
    .achvLogo {
      /* background-color: #fff; */
      display: flex;
      flex-direction: column;
      width: 100px;
      height: 150px;
      margin: 10px 0 0 40px;
      align-items: center;
      justify-content: center;
    }
    .achv ion-icon:hover {
      color: rgba(69,103,131,1);
    }

    .iconDompet {
      position: absolute;
      width: 40%;
      right: 5%;
      bottom: 10%;
      opacity: 70%;
    }

        /* Fading animation */

    .mySlides {display: none; }
    .slideImage{
    /* size: 100%; */
    width: 100%;
    height: 250px;
    vertical-align: middle;
    opacity: 50%;
    }

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }
    .active {
    background-color: #5f5252;
    }
    .fade {
    animation-name: fade;
    animation-duration: 4.5s;
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }
    .dotCont {
      /* position: absolute; */
      /* display: none; */
      /* left: 50%; */
        width: 100%;
    }
    .dot {
      /* display: none; */
      opacity: 0;
    height: 10px;
    width: 10px;
    margin: 0 1px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }


  </style>
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
      <!-- header section starts  -->

    <header class="header">

        <a href="../beranda.php" class="logo"> <img src="../logo/resepIn.png" height="50px"></a>

        <nav class="navbar">
            <a href="../beranda.php">Beranda</a>
            <a href="../list.php">List</a>
            <a href="../news.php">News</a>

            <a href="../developer.php">Developer</a>
            <ion-icon class="iconProfile" name="person-circle-outline"></ion-icon>
        </nav>
        <!-- <div class="iconProfile">
        </div> -->
    </header>
    
    <!-- header section ends -->

  <header class="banner" id="mainHeader" role="banner">

    <nav role="navigation">
        <div class="top-header">
            <div class="navBurger">
                <div class="burger"></div>
            </div>
            
        </div>

<!-- This part is the navigation generated by Wordpress.  -->
        <ul id="menu-vertical-menu" class="nav">
            <li><a href="dashboardUser.php">Dashboard</a></li>
            <li><a href="dashboardUserProfile.php">Profile</a></li>
            <li><a href="dashboardUserFav.php">Favourite</a></li>
            <li><a href="dashboardUserOrder.php">Order</a></li>
            <li><a href="dashboardUserAccount.php">Account</a></li>
            <li><a href="../logout.php">Logout</a></li>
		</ul>
    </nav>
  </header>

  <section class="main">
    <img class="iconDompet" src="./icon/dashboard2.png" alt="">
    <div class="background">
      <div class="mySlides fade">
          <img class="slideImage" src="./icon/image1.jpg" style="width:100%">
        </div>
      <div class="mySlides fade">
          <img class="slideImage" src="./icon/image2.jpg" style="width:100%">
        </div>
      <div class="mySlides fade">
          <img class="slideImage" src="./icon/image3.jpg" style="width:100%">
        </div>
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
    </div>
    <div class="info">
      <div class="deskripsi">
        <span>Info.</span>
      </div>
      <hr width="400px" align="left">
      <div class="deskripsiInfo">
        <p>Username : <?= $rows_user["username"]; ?></p>
        <p>Gender : <?= $rows_user["gender"]; ?></p>
        <p>Tanggal lahir : <?= $rows_user["date"]; ?> </p>
      </div>
      <div class="deskripsi2">
        <span>Achievement.</span>
      </div>
      <hr width="550px" align="left">
      <div class="achv">
        <div class="achvLogo"> <ion-icon name="caret-up-circle-outline"></ion-icon> <span>LEVEL</span> <p>NEWBIE</p></div>
        <div class="achvLogo"> <ion-icon name="heart-outline"></ion-icon> <span>FAV</span> <p>0</p></div>
        <div class="achvLogo"> <ion-icon name="cash-outline"></ion-icon> <span>PEMBELIAN</span> <p><?php echo $totalData; ?></p></div>
        <div class="achvLogo"> <a href="../logout.php"><ion-icon name="log-out-outline"></ion-icon> </a> <span>Log Out</span></div>
      </div>
    </div>
    <div class="pp" style="  background-image: url(data:image/jpeg;base64,<?php echo base64_encode($rows_user['pp']) ?>); background-size: cover;" ></div>
    <div class="nama"><span style=" color:rgba(69,103,131,1);"><?= $rows_user["nama_user"]; ?></span></div>
  </section>

      <!-- footer section starts  -->

  <!-- Site footer -->
  <footer class="site-footer">
            <!-- <img src="footerBG.jpg" alt=""> -->
            <div class="footerGrid">
                <div class="footerAbout">
                    <h6>About</h6>
                    <img src="../logo/resepIn.png" alt="">
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

    <!-- footer section ends -->

  <script>
    
    let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change time 
        }

  </script>
</body>
</html>