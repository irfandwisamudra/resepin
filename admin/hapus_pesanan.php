<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] != "admin" ) {
        header("Location: ../index.php");
        exit;
    }

    require '../functions.php';

    $id = $_GET["id_pesanan"];

    if( hapus_pesanan($id) > 0 ) {
        echo "
            <script>
                alert('Data pesanan berhasil dihapus!');
                document.location.href = 'pesanan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data pesanan gagal dihapus!');
                document.location.href = 'pesanan.php';
            </script>
        ";
    }

?>