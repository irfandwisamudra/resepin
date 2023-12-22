<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "resepin");
    
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function registrasi($data) {
        global $conn;
    
        $nama_user = $data["nama_user"];
        $date = $data["date"];
        $email = $data["email"];
        $username = strtolower(stripslashes($data["username"]));
        $password = $data["password"];
        $password2 = $data["password2"];
        $gender = 'lainnya';
    
        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        $sql = "INSERT INTO nama_tabel (gambar) VALUES (?)";

    
        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('Username sudah terdaftar!')
                  </script>";
            return false;
        }
    
        // cek konfirmasi password
        if( $password !== $password2 ) {
            echo "<script>
                    alert('Konfirmasi password tidak sesuai!');
                  </script>";
            return false;
        }
    
        // tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$nama_user', '$date', '$email', '$username', '$password', '$gender', '')");
    
        return mysqli_affected_rows($conn);
    }

    function tambah_kategori($data) {
        global $conn;

        $nama_kategori = $data['nama_kategori'];
        $deskripsi_kategori = $data['deskripsi_kategori'];
    
        // upload gambar
        $gambar_kategori = upload_kategori();
        if( !$gambar_kategori ) {
            return false;
        }
    
        $query = "INSERT INTO data_kategori VALUES('', '$nama_kategori', '$deskripsi_kategori', '$gambar_kategori')";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function upload_kategori() {
        $nama_file = $_FILES['gambar_kategori']['name'];
        $source = $_FILES['gambar_kategori']['tmp_name'];
	    $error = $_FILES['gambar_kategori']['error'];
        $ukuran_file = $_FILES['gambar_kategori']['size'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4 ) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu!');
                  </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensi_gambar_valid = ['jpg', 'jpeg', 'png'];
        $ekstensi_gambar = explode('.', $nama_file);
        $ekstensi_gambar = strtolower(end($ekstensi_gambar));
        if( !in_array($ekstensi_gambar, $ekstensi_gambar_valid) ) {
            echo "<script>
                    alert('Yang anda upload bukan gambar!');
                  </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if( $ukuran_file > 1000000 ) {
            echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                  </script>";
            return false;
        }
    
        // lolos pengecekan, gambar siap diupload
        move_uploaded_file($source, '../image/' . $nama_file);
    
        return $nama_file;
    }

    function hapus_kategori($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM data_kategori WHERE id_kategori = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah_kategori($data) {
        global $conn;

        $id_kategori = $data['id_kategori'];
        $nama_kategori = $data['nama_kategori'];
        $deskripsi_kategori = $data['deskripsi_kategori'];
        $gambar_kategori_lama = $data['gambar_kategori_lama'];

        // cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar_kategori']['error'] === 4 ) {
            $gambar_kategori = $gambar_kategori_lama;
        } else {
            $gambar_kategori = upload_kategori();
        }

        $query = "UPDATE data_kategori SET nama_kategori = '$nama_kategori', deskripsi_kategori = '$deskripsi_kategori', gambar_kategori = '$gambar_kategori' WHERE id_kategori = $id_kategori";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);	
    }

    function tambah_menu($data) {
        global $conn;

        $id_kategori = $data['id_kategori'];
        $nama_menu = $data['nama_menu'];
        $harga_menu = $data['harga_menu'];
    
        // upload gambar
        $gambar_menu = upload_menu();
        if( !$gambar_menu ) {
            return false;
        }
    
        $query = "INSERT INTO data_menu VALUES('', '$id_kategori', '$nama_menu', '$harga_menu', '$gambar_menu')";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function upload_menu() {
        $nama_file = $_FILES['gambar_menu']['name'];
        $source = $_FILES['gambar_menu']['tmp_name'];
	    $error = $_FILES['gambar_menu']['error'];
        $ukuran_file = $_FILES['gambar_menu']['size'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4 ) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu!');
                  </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensi_gambar_valid = ['jpg', 'jpeg', 'png'];
        $ekstensi_gambar = explode('.', $nama_file);
        $ekstensi_gambar = strtolower(end($ekstensi_gambar));
        if( !in_array($ekstensi_gambar, $ekstensi_gambar_valid) ) {
            echo "<script>
                    alert('Yang anda upload bukan gambar!');
                  </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if( $ukuran_file > 1000000 ) {
            echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                  </script>";
            return false;
        }
    
        // lolos pengecekan, gambar siap diupload
        move_uploaded_file($source, '../image/' . $nama_file);
    
        return $nama_file;
    }

    function hapus_menu($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM data_menu WHERE id_menu = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah_menu($data) {
        global $conn;

        $id_menu = $data['id_menu'];
        $id_kategori = $data['id_kategori'];
        $nama_menu = $data['nama_menu'];
        $harga_menu = $data['harga_menu'];
        $gambar_menu_lama = $data['gambar_menu_lama'];

        // cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar_menu']['error'] === 4 ) {
            $gambar_menu = $gambar_menu_lama;
        } else {
            $gambar_menu = upload_menu();
        }

        $query = "UPDATE data_menu SET id_kategori = '$id_kategori', nama_menu = '$nama_menu', harga_menu = '$harga_menu', gambar_menu = '$gambar_menu' WHERE id_menu = $id_menu";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);	
    }

    function pesanan($data) {
        global $conn;

        $id_user = $data['id_user'];
        $id_menu = $data['id_menu'];
        $nama_user = $data['nama_user'];
        $email = $data['email'];
        $alamat = $data['alamat'];
        $jumlah_pesanan = $data['jumlah_pesanan'];
        $kab_kota = $data['kab_kota'];
        $bank = $data['bank'];
        $kurir = $data['kurir'];

        $query = "INSERT INTO data_pesanan VALUES('', '$id_user', '$id_menu', '$nama_user', '$email', '$alamat', '$jumlah_pesanan', '$kab_kota', '$bank', '$kurir')";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function hapus_pesanan($id_pesanan) {
        global $conn;

        mysqli_query($conn, "DELETE FROM data_pesanan WHERE id_pesanan = $id_pesanan");
        return mysqli_affected_rows($conn);
    }

?>