<?php 
    session_start();

    if( !isset($_SESSION["login"]) || $_SESSION["login"] != "admin" ) {
        header("Location: ../index.php");
        exit;
    }

    require '../functions.php';

    $id = $_GET["id_menu"];

    if( hapus_menu($id) > 0 ) {
        echo "
            <script>
                alert('Data menu berhasil dihapus!');
                document.location.href = 'daftar_menu.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data menu gagal dihapus!');
                document.location.href = 'daftar_menu.php';
            </script>
        ";
    }

?>