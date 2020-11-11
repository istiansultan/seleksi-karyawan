<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "root";
  $nama_db = "seleksi"; //nama database

  //$host = "localhost"; 
  //$user = "smamtasc_login";
  //$pass = "Smamita18";
  //$nama_db = "smamtasc_ppdb"; //nama database

  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysqli_connect_error());
  }
