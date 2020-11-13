<?php
session_start();
include "../../config/koneksi.php";


if (isset($_POST['simpan'])) {

  $penguji   = $_SESSION['username'];
  $user   = $_POST['id_calon'];
  $nilai1 = $_POST['n1'];
  $nilai2 = $_POST['n2'];
  $nilai3 = $_POST['n3'];
  $jumlah = ($nilai1 + $nilai2 + $nilai3) / 3;

  $data = mysqli_query($koneksi, "SELECT * FROM master_penilaian where id_calon='$user' and penguji='$penguji'");
  $r = mysqli_fetch_array($data);
  $nilai = mysqli_num_rows($data);

  $id = $r['id_penilaian'];

  if ($nilai > 0) {
    $input = mysqli_query($koneksi, "REPLACE INTO master_penilaian
                                      VALUES ('$id',
                                      '$user',
                                      '$nilai1',
                                      '$nilai2',
                                      '$nilai3',
                                      '$jumlah',
                                      '$penguji',
                                      NOW())");
  } else {
    $input = mysqli_query($koneksi, "REPLACE INTO master_penilaian
                              VALUES (NULL,
                              '$user',
                              '$nilai1',
                              '$nilai2',
                              '$nilai3',
                              '$jumlah',
                              '$penguji',
                              NOW())");
  }


  if (!$input) {
    die("Query gagal dijalankan: " . mysqli_error($koneksi) .
      " - " . mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil ditambah.');window.location='penguji';</script>";
  }
} elseif (isset($_POST['edit'])) {

  $penguji   = $_POST['penguji'];
  $user   = $_POST['id_calon'];
  $nilai1 = $_POST['n1'];
  $nilai2 = $_POST['n2'];
  $nilai3 = $_POST['n3'];
  $jumlah = ($nilai1 + $nilai2 + $nilai3) / 3;

  $data = mysqli_query($koneksi, "SELECT * FROM master_penilaian where id_calon='$user' and penguji='$penguji'");
  $r = mysqli_fetch_array($data);
  $nilai = mysqli_num_rows($data);

  $id = $r['id_penilaian'];

  if ($nilai > 0) {
    $input = mysqli_query($koneksi, "REPLACE INTO master_penilaian
                                      VALUES ('$id',
                                      '$user',
                                      '$nilai1',
                                      '$nilai2',
                                      '$nilai3',
                                      '$jumlah',
                                      '$penguji',
                                      NOW())");
  } else {
    $input = mysqli_query($koneksi, "REPLACE INTO master_penilaian
                              VALUES (NULL,
                              '$user',
                              '$nilai1',
                              '$nilai2',
                              '$nilai3',
                              '$jumlah',
                              '$penguji',
                              NOW())");
  }


  if (!$input) {
    die("Query gagal dijalankan: " . mysqli_error($koneksi) .
      " - " . mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil ditambah.');window.location='rekap-nilai';</script>";
  }
}
