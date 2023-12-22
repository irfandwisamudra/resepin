<?php 
session_start();

if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
  header("Location: index.php");
  exit;
}

require '../functions.php';

$id_user = $_SESSION['id_user'];
// $username = $_SESSION["login"];
// $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
$user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
$rows_user = mysqli_fetch_assoc($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>User Profile</title>
  <link rel="stylesheet" href="headerFooter_user.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <style>
    .formpp {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin: 0;
    }
    .formpp .inpt {
      margin:40px 0 0 0 ;
      width: 70px;
    }
    .btn-warning{
      margin: 40px 0 0 0;
      position: relative;
      padding: 11px 16px;
      font-size: 15px;
      line-height: 1.5;
      border-radius: 3px;
      color: #fff;
      background-color: #ffc100;
      border: 0;
      transition: 0.2s;
      overflow: hidden; 
    }

    .btn-warning input[type = "file"]{
      cursor: pointer;
      position: absolute;
      left: 0%;
      top: 0%;
      transform: scale(3);
      opacity: 0;
    }

    .btn-warning:hover{
      background-color: #d9a400;
    }

    body {
      padding: 0px;
      margin: 0;
      background-color: rgb(213, 217, 226);
      position: relative;
      padding-top: 100px;
    }



    /* MAIN SECTION  */

    .main {
      position: relative;
      margin: 40px 0 50px 150px;
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
      display: grid; 
      grid-template-columns: 1fr 1fr 1fr; 
      grid-template-rows: 0.3fr 1.7fr 1fr; 
      gap: 0px 0px; 
      grid-template-areas: 
        "headerMain headerMain headerMain"
        "ubahMain ubahMain ubahFoto"
        "ubahMain ubahMain ubahFoto"; 
    }


    .headerMain {
      grid-area: headerMain; 
      background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
    }
    .headerMain h6 {
      color: #fff;
      margin : 20px 0 10px 50px;
      font-family: verdana;
      font-size: 20px;
    }
    .headerMain p {
      color: #fff;
      margin : 10px 0 10px 50px;
    }
    .ubahMain { 
      grid-area: ubahMain; 
      display: flex;
      align-items: center;
      justify-content: center;  
    }
    .ubahMainContainer {
      background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
      width: 800px;
      height: 600px;
      border-radius: 10px;
      display: flex;
      flex-direction:column;
      box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      -webkit-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      -moz-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      /* align-items: left; */
      /* justify-content: center;  */
      /* padding-left: 10%; */
    }
    .ubahMainContainer h3 {
      text-align: center;
      margin-top: 50px;
      font-family: verdana;
      color: #fff;
    }
    .form {
      display: flex;
      flex-direction: column;
    }
    .form {
      width: 750px;
      margin: 50px 0 50px 30px ;
      padding: 20px;
      /* border: 1px solid #ccc; */
      /* border-radius: 10px; */
    }
    .form div {
      display: flex;
      align-items: center;
      justify-content: left;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="date"]{
      display: block;
      width: 400px;
      margin: 20px 0 20px 150px;
      padding: 10px ;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 16px;
    }
    input[type="text"] {
      margin-left: 175px;
    }
    input[type="radio"] {
      width: 20px;
      height: 50px;
    }
    input[type="file"] {
      margin-left: 115px;
      

    }
    .radio {
      margin-left: 145px;

    }
    .radio span {
      color: #fff;
      font-family: verdana;
      margin:0 20px 0 10px;
    }
    .form label {
      color: #fff;
      font-family: Verdana;
    }
    .button {
      width: 130px;
      height: 40px;
      border-radius: 10px;
      margin: 30px 10px 0 550px;
      border: none;
    }


    .ubahFoto { 
      grid-area: ubahFoto; 
      display: flex;
      align-items: center;
      justify-content: center;  
    }
    .ubahFotoContainer {
      background-image: linear-gradient( 56.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
      width: 350px;
      height: 600px;
      border-radius: 10px;
      box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      -webkit-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      -moz-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .pp {
      width: 150px;
      height: 150px;
      background: #fff;
      border-radius: 50%;
      border: 2px solid darkgray;
    }




  </style>
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
    <div class="headerMain">
      <h6>Profile Saya</h6>
      <p>Kelola Informasi pribadi anda untuk mengontrol akun</p>
    </div>
    <div class="ubahMain">
      <div class="ubahMainContainer">
        <h3>Ubah Profile anda.</h3>
        <form class="form" action="updateProfile.php" method="POST" enctype="multipart/form-data" >
          <div>
            <label for="name"> <?php $rows_user['id_user']; ?> </label>
            <label for="name">Nama</label>
            <input style="margin-left: 210px;" type="text" id="name" name="name" value="<?= $rows_user["nama_user"]; ?>" required>
          </div>
      
          <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="namaUser" value="<?= $rows_user["username"]; ?>" required>
          </div>
      
          <div>
            <label for="gender">Jenis Kelamin</label>
            <div class="radio">
              <input type="radio" name="kelamin" value="laki-laki" <?php if($rows_user['gender'] == 'laki-laki') echo 'checked' ?> > <span>Laki-Laki</span>
              <input type="radio" name="kelamin" value="perempuan" <?php if($rows_user['gender'] == 'perempuan') echo 'checked' ?>> <span>Perempuan</span>
              <input type="radio" name="kelamin" value="lainnya" <?php if($rows_user['gender'] == 'lainnya') echo 'checked' ?>> <span>Lainnya?</span>
            </div>
          </div>
      
          <div>
            <label for="birthdate">Tanggal Lahir</label>
            <input type="date" id="birthdate" name="birthdate" value="<?= $rows_user["date"]; ?>" required>
          </div>
      

          <button class="button" value="update"><span>SAVE</span></button>
      
        </form>

      </div>
    </div>
    <div class="ubahFoto">
      <div class="ubahFotoContainer">
        <div class="pp" style="  background-image: url(data:image/jpeg;base64,<?php echo base64_encode($rows_user['pp']) ?>); background-size: cover;"> </div>
        <div class="upload">
          <form class="formpp" action="updatePP.php" method="POST" enctype="multipart/form-data">
            
            <input type="file" name="gambar" class="inpt"">

            <button value="update" class = "btn-warning"> UPLOAD</button>
          </form>
        </div>
      </div>
    </div>
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

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>