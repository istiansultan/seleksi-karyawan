<?php
session_start();
include "../../config/koneksi.php";


if (isset($_GET['valid'])) {

  $penguji= $_GET['valid'];

  $data = mysqli_query($koneksi, "select SUM(jumlah) AS jumtol FROM master_penilaian where penguji='$penguji'");
  $r = mysqli_fetch_array($data);

  $total = $r['jumtol'];


    $input = mysqli_query($koneksi, "insert into master_valid
                                      VALUES (NULL,
                                      '$total',
                                      '$penguji',
                                      NOW())");

  if (!$input) {
    die("Query gagal dijalankan: " . mysqli_error($koneksi) .
      " - " . mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil ditambah.');window.location='penguji';</script>";
  }
} 