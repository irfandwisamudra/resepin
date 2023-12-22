<?php 

session_start();

require '../functions.php';

$id_user = $_SESSION['id_user'];
// $username = $_SESSION["login"];
// $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
$user = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
$rows_user = mysqli_fetch_assoc($user);

$tes_id = $rows_user['id_user'];
$tes_email = $rows_user['email'];
$tes_pass = $rows_user['password'];
$tes_pp = $rows_user['pp'];

$username   = $_POST['namaUser'];
$nama_user  = $_POST['name'];
$gender  = $_POST['kelamin'];
$date         = $_POST['birthdate'];

  // $query = "UPDATE user SET nama_user='$nama_user', date='$date', email='$tes_email', username='$username', password='$tes_pass', `gender`='$gender',`pp` = '$tes_pp' WHERE id_user='$tes_id'";

  // mysqli_query($conn, $query);

  $set = "UPDATE user SET nama_user='$nama_user', date='$date', email='$tes_email', username='$username', password='$tes_pass', gender='$gender' WHERE id_user='$tes_id'";

  mysqli_query($conn, $set);

  // if ($conn->query($set) === TRUE) {
  //   echo "Data berhasil diperbarui";
  // } else {
  //   echo "Terjadi kesalahan saat memperbarui data: " . $conn->error;
  // }

  // $query = "UPDATE user SET nama_user='$nama_user', date='$date', email='$tes_email', username='$username', password='$tes_pass', `gender`='$gender',`pp` = '$gambar' WHERE id_user='$tes_id'";


header('location: dashboarduser.php');


?>

