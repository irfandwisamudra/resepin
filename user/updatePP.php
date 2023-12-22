<?php 

session_start();

require '../functions.php';

$id_user = $_SESSION['id_user'];
$user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
$rows_user = mysqli_fetch_assoc($user);



if (isset($_FILES['gambar'])) {
  $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
  // global $username, $nama_user, $gender, $date, $tes_id, $tes_email, $tes_pass,$tes_pp;
  global $rows_user;

  $tes_id = $rows_user['id_user'];
$tes_email = $rows_user['email'];
$tes_pass = $rows_user['password'];
$tes_pp = $rows_user['pp'];
$tes_username = $rows_user['username'];
$tes_date = $rows_user['date'];
$tes_gender = $rows_user['gender'];
$tes_nama = $rows_user['nama_user'];



  $set = "UPDATE user SET nama_user='$tes_nama', date='$tes_date', email='$tes_email', username='$tes_username', password='$tes_pass', `gender`='$tes_gender',`pp` = '$gambar' WHERE id_user='$tes_id'";

  mysqli_query($conn, $set);
}


header('location: dashboarduser.php');
?>
