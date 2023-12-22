<?php 
session_start();

if( !isset($_SESSION["login"]) || $_SESSION["login"] == "admin" ) {
  header("Location: index.php");
  exit;
}

require '../functions.php';

$id_user = $_SESSION['id_user'];
$pesanan = query("SELECT * FROM data_pesanan WHERE id_user = $id_user");


function hapusData($id) {
  global $conn;

  // Lakukan penghapusan data di MySQL menggunakan ID yang diterima
  $sql = "DELETE FROM data_pesanan WHERE id_pesanan = '$id'";

  if ($conn->query($sql) === TRUE) {
    // Penghapusan berhasil
    echo "Pesanan dengan ID $id telah dihapus.";
  } else {
    // Terjadi kesalahan saat melakukan penghapusan
    echo "Terjadi kesalahan: " . $conn->error;
  }

  // Tutup koneksi
  $conn->close();
}

// Handler untuk menerima permintaan AJAX
if (isset($_POST['id'])) {
  $id = $_POST['id'];
  hapusData($id);
  exit; // Keluar dari skrip setelah menyelesaikan penghapusan
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>User Order</title>
  <link rel="stylesheet" href="headerFooter_user.css">
  <script>
    function hapusData(id) {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          console.log(xhr.responseText);
          // Tindakan lain setelah penghapusan berhasil
        }
      };
      xhr.send('id=' + id);
    }
  </script>
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


.cardGrid {
  width: 100%;
  height: 100%;
  padding: 50px 20px 0 50px;
  /* background-color: #16a085; */
  grid-area: cardGrid;
  display: grid;
  grid-template-columns: repeat(1,1fr);
  grid-row-gap: 40px;

}
.cardGrid a {
  text-decoration: none;
  font-family: verdana;
}
.cardBox {
  width: 92%;
  height: 300px;
  border-radius: 10px;
  border: rgba(44,62,78,1) 2px solid ;
  /* background-color: #13836c; */
  overflow: hidden;
  box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
  -webkit-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
  -moz-box-shadow: 10px 5px 14px -4px rgba(0,0,0,0.5);
  font-family: verdana;
  
}
.atas {
  width: 100%;
  height: 60px;

  /* background-color: #16a085; */
}
.atas div {
  justify-content: right;
  display: flex;
  align-items: center;
  /* width: 100%; */
  height: 40px;
  margin: 20px 70px 0 0;  
}
.atas div a {
  color:rgba(44,62,78,1);
  font-weight: 900;
  margin-left: 50px;
  padding-left: 40px;
  border-left: rgba(44,62,78,1) solid 2px;
}
.isi {
  display: flex;
  width: 92%;
  height: 130px;
  /* background-color: #16a085; */
  justify-content: space-between;
  align-items: center;
  padding: 10px 70px 5px 70px;
}

.gambar{
  /* width: 100%; */
  display: flex;
  align-items: center;
}
.tulisan {
  margin-left: 40px;
  color: rgba(44,62,78,1);
}
.gambar span {
  font-size: 30px;
}
.iconProduct {
  width: 100px;
  height: 100px;
  background-color: red;
}
.total {
  width: 300px;
  height: 100px;
  display: flex;
  padding-right: 40px;
  align-items: center;
  justify-content: right;
  border-left: 4px solid rgba(44,62,78,1);
  color: rgba(44,62,78,1);
  font-size: 30px;
  /* background-color: blue; */
}
.tulisanBawah {
  background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );
  width:95%;
  padding: 0 50px ;
  height: 60px;
  display: flex;
  align-items: center;
  color: #fff;
  justify-content: space-between;
}

.pesananDiterima {
  width: 200px;
  height: 30px;
  display: flex;
  align-items: center;
  color: rgba(44,62,78,1);
  border-radius: 5px;
  justify-content: center ;
  background-color: #fff;
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
      <h6>Order List</h6>
      <p>Kelola daftar pembelian anda disini</p>
    </div>
    <div class="cardGrid">
      <?php foreach($pesanan as $rows_pesanan) : ?>



        <div class="cardBox">
        <?php 
          $id_menu = $rows_pesanan["id_menu"];

          $iniMenu = mysqli_query($conn, "SELECT * FROM data_menu WHERE id_menu = $id_menu");
          $rows_menu = mysqli_fetch_assoc($iniMenu);
          ?>
          <div class="atas">
            <div>
              <span>Pesanan anda sedang Di proses</span>
              <a href="">DIKIRIM</a>
            </div>
            <hr width="90%" color="rgba(44,62,78,1)">
          </div>
          <div class="isi">
            <div class="gambar">
              <div class="iconProduct"> <img style="width: 100px; height :100px" src="../image/<?= $rows_menu["gambar_menu"]; ?>" alt=""></div>
              <div class="tulisan">              
                <span><?= $rows_menu["nama_menu"]; ?></span>
                <p><?= $rows_pesanan['jumlah_pesanan']; ?> x  <?= $rows_menu['harga_menu']; ?></p></div>
            </div>
            <?php $hasil = $rows_pesanan['jumlah_pesanan'] * $rows_menu['harga_menu'];?>
            <div class="total">Rp. <?= $hasil; ?> ,-</div>
          </div>
          <div class="hasil">
            <hr width="90%" color="rgba(44,62,78,1)" >
            <div class="tulisanBawah">
              <p>Silahkan Konfirmasi setelah membayar dan mengecek pesanan</p>
              <button type="submit" onclick="hapusData(<?= $rows_pesanan['id_pesanan']; ?> )" class="pesananDiterima"> Pesanan Diterima</button>
            </div>
          </div>
        </div>

        <?php endforeach; ?>

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