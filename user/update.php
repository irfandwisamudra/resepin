<?php 

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

$id_user = $_SESSION['id_user'];
$user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
$rows_user = mysqli_fetch_assoc($user);



function ubahPw($data) {
  global $conn;
  global $rows_user;

  $tes_id = $rows_user['id_user'];


  $password = $data["password"];



  $set = "UPDATE user SET password='$password' WHERE id_user='$tes_id'";
  mysqli_query($conn, $set);

  return mysqli_affected_rows($conn);
}


function hapusAcc($id_user) {
  global $conn;
  // global $rows_user;
  // $tes_id = $rows_user['id_user'];

  mysqli_query($conn, "DELETE FROM user WHERE id_user = $id_user");
  return mysqli_affected_rows($conn);
}
?>