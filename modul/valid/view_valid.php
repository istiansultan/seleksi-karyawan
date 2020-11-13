<!-- end Topbar -->

<?php
include "../template/header.php";
$data3 = mysqli_query($koneksi, " select * from
                                  master_user
                                  where username='$_SESSION[username]'");
$peserta = mysqli_fetch_array($data3);


$nilai = mysqli_query($koneksi, "select * from master_valid where penguji='$_SESSION[username]'");
$jn = mysqli_num_rows($nilai);
$jnn = mysqli_fetch_array($nilai);


?>
<?php include "../template/menu.php"; ?>

<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

      <h5 class="mb-4">Rekap Nilai Calon Wakil Direktur</h5>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-2">
              <h6 class="header-title mb-4">Penguji : <?php echo $peserta['nama']; ?></h6>
              <?php
              $data = mysqli_query($koneksi, "select * from master_calon_depart
                                    where penguji='$_SESSION[username]' order by id_calon");
              while ($a = mysqli_fetch_array($data)) {

                $calon = mysqli_query($koneksi, "select * from master_calon where id_calon='$a[id_calon]'");
                $m = mysqli_fetch_array($calon);

                $depart = mysqli_query($koneksi, "select * from master_depart where id_depart='$a[id_depart]'");
                $d = mysqli_fetch_array($depart);

                $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='$_SESSION[username]'");
                $n = mysqli_fetch_array($nilai);

              ?>
                <div class="media border-top pt-3">
                  <img src="foto/<?php echo $m["foto"] ?>" class="avatar rounded mr-3" alt="shreyu">
                  <div class="media-body">
                    <h6 class="mt-1 mb-0 font-size-15"><?php echo $m["nama_calon"] ?></h6>
                    <h6 class="text-muted font-weight-normal mt-1 mb-3"><?php echo $d["nama_depart"] ?></h6>
                  </div>
                  <div class="dropdown align-self-center float-right">
                    <h4><?php echo $n["jumlah"] ?></h4>
                  </div>
                </div>
              <?php } ?>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="row align-items-center float-right">
                  <div class="col-xl-12 col-lg-9">
                    <div class="mt-6 mt-lg-0">
                      <h5 class="mt-0 mb-1 font-weight-bold">Validasi Penilaian Calon Wakil Direktur</h5>
                      <p class="text-muted mb-2">Pastikan Sudah Melakukan penilaian </p>
                      <?php
                      if ($jn < 6) {
                        echo "<a type='button' name='valid' class='btn btn-danger mt-2 mr-1 disabled' id='btn-new-event'><i class='uil-plus-circle'></i>Validasi penilaian</a>";
                      } else {
                        echo "<a type='button' name='valid' href='aksi-valid?valid=$jnn[penguji]' onclick=\"javascript: return confirm ('Anda Yakin APPROVE ?')\" class='btn btn-danger mt-2 mr-1' id='btn-new-event'><i class='uil-plus-circle'></i>Validasi penilaian</a>";
                      }
                      ?>

                    </div>
                  </div>
                </div>

              </div> <!-- end card body-->
            </div> <!-- end card -->
          </div>
        </div>

      </div>


    </div>


    <!-- Footer Start -->

    <!-- end Footer -->
  </div>
  <!-- ============================================================== -->
  <!-- End Page content -->
  <!-- ============================================================== -->


  <?php include "../template/footer.php"; ?>