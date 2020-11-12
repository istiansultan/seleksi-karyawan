<?php
session_start();
include "../../config/koneksi.php";


if (isset($_POST['simpan'])) {

  $penguji   = $_SESSION['username'];
  $user   = $_POST['id_calon'];
  $nilai1 = $_POST['n1'];
  $nilai2 = $_POST['n2'];
  $nilai3 = $_POST['n3'];
  $jumlah = $nilai1 + $nilai2 + $nilai3;

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
  $id = $_POST['id_guru'];
  $user = $_POST['id_user'];
  $nip = $_POST['nip'];
  $nik = $_POST['nik'];
  $nuptk = $_POST['nuptk'];
  $nbm = $_POST['nbm'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tmp_lahir = $_POST['tmp_lahir'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $kelamin = $_POST['kelamin'];
  $telp = $_POST['telp'];
  $nama_ibu = $_POST['nama_ibu'];
  $tgl_masuk = $_POST['tgl_masuk'];
  $tgl_angkat = $_POST['tgl_angkat'];
  $status = $_POST['id_status'];
  $ijazah = $_POST['id_ijazah'];
  $jabatan = $_POST['id_jabatan'];
  $foto = $_FILES['foto']['name'];
  $aktif = $_POST['aktif'];

  $arr = explode('-', $tgl_lahir);
  $tglbaru1 = $arr[0] . '-' . $arr[1] . '-' . $arr[2];
  $arr = explode('-', $tgl_masuk);
  $tglbaru2 = $arr[0] . '-' . $arr[1] . '-' . $arr[2];
  $arr = explode('-', $tgl_angkat);
  $tglbaru3 = $arr[0] . '-' . $arr[1] . '-' . $arr[2];
  //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database

  //cek dulu jika ada gambar produk jalankan coding ini
  if ($foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $fotobaru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, '../../foto/' . $fotobaru); //memindah file gambar ke folder gambar
      // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
      $input = mysqli_query($koneksi, "UPDATE master_guru SET 
                                      nip = '$nip',
                                      id_user = '$user',
                                      nik = '$nik',
                                      nuptk = '$nuptk',
                                      nbm = '$nbm',
                                      nama = '$nama',
                                      alamat = '$alamat',
                                      tmp_lahir = '$tmp_lahir',
                                      tgl_lahir = '$tglbaru1',
                                      kelamin = '$kelamin',
                                      telp = '$telp',
                                      nama_ibu = '$nama_ibu',
                                      tgl_masuk = '$tglbaru2',
                                      tgl_angkat = '$tglbaru3',
                                      id_status = '$status',
                                      id_ijazah = '$ijazah',
                                      id_jabatan = '$jabatan',
                                      foto = '$fotobaru',
                                      aktif = '$aktif' WHERE id_guru = '$id'");
      if (!$input) {
        die("Query gagal dijalankan: " . mysqli_error($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        if ($_SESSION['grub'] == '1') {
          echo "<script>alert('Data berhasil diedit.');window.location='template.php?module=pegawai';</script>";
        } else {
          echo "<script>alert('Data berhasil diedit.');window.location='jurnal';</script>";
        }
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='pegawai';</script>";
    }
  } else {
    $input = mysqli_query($koneksi, "UPDATE master_guru SET 
                                      nip = '$nip',
                                      id_user = '$user',
                                      nik = '$nik',
                                      nuptk = '$nuptk',
                                      nbm = '$nbm',
                                      nama = '$nama',
                                      alamat = '$alamat',
                                      tmp_lahir = '$tmp_lahir',
                                      tgl_lahir = '$tglbaru1',
                                      kelamin = '$kelamin',
                                      telp = '$telp',
                                      nama_ibu = '$nama_ibu',
                                      tgl_masuk = '$tglbaru2',
                                      tgl_angkat = '$tglbaru3',
                                      id_status = '$status',
                                      id_ijazah = '$ijazah',
                                      id_jabatan = '$jabatan',
                                      aktif = '$aktif' WHERE id_guru = '$id'");
    if (!$input) {
      die("Query gagal dijalankan: " . mysqli_error($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      if ($_SESSION['grub'] == '1') {
        echo "<script>alert('Data berhasil diedit.');window.location='template.php?module=pegawai';</script>";
      } else {
        echo "<script>alert('Data berhasil diedit.');window.location='jurnal';</script>";
      }
    }
  }
} elseif (isset($_GET['hapus'])) {
  $no = $_GET['hapus'];
  mysqli_query($koneksi, "DELETE FROM master_jurnal WHERE id_jurnal=$no");
  mysqli_query($koneksi, "DELETE FROM master_absen WHERE id_jurnal=$no");
  $_SESSION['hapus'] = 'Data berhasil di hapus';
  if ($_SESSION['grub'] == '1') {
    echo "<script>alert('Data berhasil diedit.');window.location='template.php?module=pegawai';</script>";
  } else {
    echo "<script>alert('Data berhasil diedit.');window.location='jurnal';</script>";
  }
}
