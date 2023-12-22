<?php
    session_start();

    if (isset($_POST['button'])) {
        $_SESSION["login"] = "admin";
        header("Location: " . $_POST['href']);
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Pribadi Irfan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <h2 class="logo">Blog <span>Pribadi</span></h2>
        
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#project">Project</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <div class="home" id="home">
        <div class="home-content">
            <div class="content">
                <h4>Welcome to My Blog Pribadi</h4>
                <h1>Irfan Dwi <span>Samudra</span></h1>
                <h3>Saya adalah mahasiswa Teknik Informatika</h3>
                <h3>Universitas Trunojoyo Madura</h3>
                <a href="#about">More About Me</a>
            </div>
            <div class="image">
                <img src="img/home-image.webp" alt="home image">
            </div>
        </div>
    </div>

    <div class="about" id="about">
        <article class="about-me">
            <div class="foto">
                <div class="bg-foto1">
                    <div class="bg-foto2">
                        <img src="img/irfan.jpg" alt="foto irfan">
                    </div>
                </div>
            </div>
            <div class="description">
                <h2>About <span>Me</span></h2>
                <h5>NAMA : IRFAN DWI SAMUDRA</h5>
                <h5>NIM : 220411100083</h5>
                <h5>KELAS : DPW IF 2C</h5>
                <h5>JUDUL PROJECT WEB : FOOD RECIPES AND ORDER</h5>
                <p>Saya adalah mahasiswa Teknik Informatika Universitas Trunojoyo Madura. Saya lahir di kota kebanggaan saya yaitu Tuban. Saya memiliki hobi ngoding dan nonton anime. Saya menyukai hal-hal baru yang belum pernah saya temui sebelumnya, terlebih dalam bidang informatika. Dan saya juga memiliki motivasi tinggi untuk belajar lebih dalam di dunia IT. Pendidikan saya sekarang adalah kuliah di Universitas Trunojoyo Madura.</p>
                <a href="#contact" class="button">Contact Me</a>
            </div>
        </article>
    </div>

    <div class="project" id="project">
        <div class="title">
            <h2>My <span>Project</span></h2>
        </div>
        <div class="box">
            <div class="card">
                <div class="card-content">
                    <h5>Project 1</h5>
                    <h4>Beranda Admin</h4>
                    <div class="text-card">
                        <p>Halaman Beranda Admin merupakan halaman utama yang diperuntukkan bagi admin website ResepIn. Interface ini memberikan admin akses ke semua fitur administratif, termasuk manajemen kategori, menu, dan pesanan. Pada halaman ini, admin dapat melihat laporan dan statistik terkait kategori, menu, serta pesanan yang masuk.</p>
                        <form method="post">
                            <input type="hidden" name="href" value="../../admin/beranda.php">
                            <button type="submit" name="button" class="button">Look Here</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5>Project 2</h5>
                    <h4>Daftar Kategori</h4>
                    <div class="text-card">
                        <p>Halaman Daftar Kategori akan menampilkan semua kategori yang ada dalam website ResepIn. Interface ini memungkinkan admin untuk melihat, mengedit, dan menghapus kategori yang telah ada. Admin juga dapat menambahkan kategori baru melalui halaman ini.</p>
                        <form method="post">
                            <input type="hidden" name="href" value="../../admin/daftar_kategori.php">
                            <button type="submit" name="button" class="button">Look Here</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5>Project 3</h5>
                    <h4>Tambah Daftar Kategori</h4>
                    <div class="text-card">
                        <p>Halaman Tambah Daftar Kategori dirancang untuk memungkinkan admin menambahkan kategori baru ke dalam sistem. Interface ini akan memiliki formulir yang memungkinkan admin memasukkan informasi tentang kategori, seperti nama kategori, deskripsi, dan gambar yang relevan.</p>
                        <form method="post">
                            <input type="hidden" name="href" value="../../admin/tambah_kategori.php">
                            <button type="submit" name="button" class="button">Look Here</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5>Project 4</h5>
                    <h4>Ubah Daftar Kategori</h4>
                    <div class="text-card">
                        <p>Halaman Ubah Kategori akan memungkinkan admin untuk mengedit informasi yang terkait dengan suatu kategori. Admin dapat memperbarui nama kategori, deskripsi, atau gambar yang terkait dengan kategori tersebut melalui halaman ini.</p>
                        <form method="post">
                            <input type="hidden" name="href" value="../../admin/ubah_kategori.php?id_kategori=1">
                            <button type="submit" name="button" class="button">Look Here</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h5>Project 5</h5>
                    <h4>Pesanan</h4>
                    <div class="text-card">
                        <p>Halaman Pesanan akan menampilkan daftar pesanan yang telah diterima oleh website ResepIn. Interface ini akan memberikan informasi terkait pesanan, seperti nama pengguna, email pengguna, alamat pengiriman, pembayaran, kurir, jumlah pesanan, daftar makanan yang dipesan, dan konfirmasi pesanan yang telat selesai. Admin dapat menggunakan halaman ini untuk melihat, mengubah status, dan mengelola pesanan yang masuk.</p>
                        <form method="post">
                            <input type="hidden" name="href" value="../../admin/pesanan.php">
                            <button type="submit" name="button" class="button">Look Here</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
		<p>My <span>Contact</span></p>
		<hr>
		<div class="social">
			<a href="https://www.facebook.com/profile.php?id=100083700391839"><div class="facebook"></div></a>
			<a href="https://instagram.com/irfandw.s/"><div class="instagram"></div></a>
			<a href="https://twitter.com/IrfanDwiSamudra/"><div class="twitter"></div></a>
		</div>
	</div>

	<div class="footer">
		<p>&copy; Copyright by <span>Irfan Dwi Samudra</span></p>
	</div>

    <script>
        feather.replace()
    </script>

    <script src="script.js"></script>
</body>
</html>