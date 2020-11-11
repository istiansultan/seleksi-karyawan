<?php
include "koneksi.php";


$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$tapel = mysqli_real_escape_string($koneksi, $_POST['tapel']);

$login  = mysqli_query($koneksi, "select * FROM master_user WHERE username='$username' AND password='$password'");
$ketemu = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);
// Apabila nopendaftaran dan password ditemukan
$izinkan = 'oke';
// Apabila nopendaftaran dan password ditemukan
if ($ketemu > 0) {
  session_start();

  if ($data['level'] == 'admin') {
    $_SESSION['login']       = TRUE;
    $_SESSION['username']    = $_POST['username'];
    $_SESSION['password']    = $_POST['password'];
    $_SESSION['tapel']       = $_POST['tapel'];
    $_SESSION['nama']        = $data['nama'];
    $_SESSION['level']        = $data['level'];

    header("location:../admin");
  } else {
    $_SESSION['login']       = TRUE;
    $_SESSION['username']    = $_POST['username'];
    $_SESSION['password']    = $_POST['password'];
    $_SESSION['tapel']       = $_POST['tapel'];
    $_SESSION['nama']        = $data['nama'];
    $_SESSION['level']        = $data['level'];

    header("location:../penguji");
  }
} else {
  header("location:../index.php?pesan=gagal");
}
