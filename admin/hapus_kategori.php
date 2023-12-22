<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] != "admin" ) {
        header("Location: ../index.php");
        exit;
    }

    require '../functions.php';

    $id = $_GET["id_kategori"];

    if( hapus_kategori($id) > 0 ) {
        echo "
            <script>
                alert('Data kategori berhasil dihapus!');
                document.location.href = 'daftar_kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data kategori gagal dihapus!');
                document.location.href = 'daftar_kategori.php';
            </script>
        ";
    }

?>