<?php 
session_start();

if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
  header("Location: index.php");
  exit;
}

require 'update.php';

$id_user = $_SESSION['id_user'];
// $username = $_SESSION["login"];
// $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
$user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
$rows_user = mysqli_fetch_assoc($user);



if( isset($_POST["update"]) ) {
    
  if( ubahPw($_POST) > 0 ) { 
      echo "<script>
              alert('password berhasil diubah!');
              document.location = 'dashboardUserAccount.php';
          </script>"; 
  } 
  else { 
      echo mysqli_error($conn); 
  } 
} 


if( isset($_POST["delete"]) ) {
    
  if( hapusAcc($id_user) > 0 ) { 
      echo "<script>
              alert('Akun berhasil di hapus!');
              document.location = '../logout.php';
          </script>"; 
  } 
  else { 
      echo mysqli_error($conn); 
  } 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>User Account</title>
  <link rel="stylesheet" href="headerFooter_user.css">
  <style>
            body {
          padding: 0px;
          margin: 0;
          background-color: rgb(213, 217, 226);
          position: relative;
          padding-top: 150px;
        }
        /* MAIN SECTION  */

        .main {
          position: relative;
          margin: 20px 0 50px 150px;
          padding: 0 0 50px 0;
          width: 85%;
          /* height: 850px; */
          background-color:  rgb(235, 238, 245) ;
          border-radius: 10px;
          border: #fff 1px solid;
          /* border: 2px solid #13836c; */
          overflow: hidden;
          box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
          -webkit-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
          -moz-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
          display: grid; 
          grid-template-columns: 1fr; 
          grid-template-rows: 0.3fr 1.7fr; 
          gap: 0px 0px; 
          grid-template-areas: 
            "headerMain"
            "cardGrid"; 

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
          font-family: verdana;
          margin : 10px 0 10px 50px;
        }

        .ubahMainContainer {
          margin: 5% 0 1% 5%;
          background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
          width: 800px;
          height: 450px;
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
          margin: 10px 0 50px 30px ;
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
        .cardAcc {
          display: flex;
        }

        .cardAcc img {
          width: 350px;
          height: 450px;
          margin: 5% 5% 0 7%;
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
      <h6>Manage Account</h6>
      <p>Atur keamanan akun anda disini !</p>
      </div>
        <div class="cardAcc">
          <div class="ubahMainContainer">
            <h3>ubah akun anda</h3>
              <form class="form" action="" method="POST" enctype="multipart/form-data" >
                <div>
                  <label for="email"> <?php $rows_user['id_user']; ?> </label>
                  <label for="email">Email</label>
                  <input style="margin-left: 210px;" type="text" id="name" name="name" value="<?= $rows_user["email"]; ?>" disabled>
                </div>
                <div>
                  <label for="password">Password</label>
                  <input type="text" id="password" name="password" value="<?= $rows_user["password"]; ?>" required>
                </div>
                <button class="button" name="update" value="update"><span>SAVE</span></button>
                <button class="button" name="delete" value="reset"><span>DELETE</span></button>
              </form>
          </div>
          <img src="./icon/key.png" alt="">
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