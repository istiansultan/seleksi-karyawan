<!-- end Topbar -->

<?php
include "../../template/header.php";
include "../../config/koneksi.php";
$data3 = mysqli_query($koneksi, " select * from
                                  master_calon_depart
                                  inner JOIN master_calon on  master_calon.id_calon = master_calon_depart.id_calon
                                  inner JOIN master_depart on  master_depart.id_depart = master_calon_depart.id_depart
                                  where master_calon.id_calon='$_GET[nilai]'");
$peserta = mysqli_fetch_array($data3);
?>
<?php include "../../template/menu.php"; ?>

<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

      <h5 class="mb-4">Rekap Nilai Calon Wakil Direktur</h5>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-2">
              <h6 class="header-title mb-4">Team Members</h6>
              <?php
              $data = mysqli_query($koneksi, "select * from master_calon_depart
                                    LEFT JOIN master_calon ON master_calon.id_calon=master_calon_depart.id_calon
                                    LEFT JOIN master_penilaian ON master_calon_depart.id_calon=master_penilaian.id_calon
                                    LEFT JOIN master_depart	ON master_depart.id_depart=master_calon_depart.id_depart
                                    where master_calon_depart.penguji='$_SESSION[username]'");
              while ($a = mysqli_fetch_array($data)) {

              ?>
                <div class="media border-top pt-3">
                  <img src="foto/<?php echo $a["foto"] ?>" class="avatar rounded mr-3" alt="shreyu">
                  <div class="media-body">
                    <h6 class="mt-1 mb-0 font-size-15"><?php echo $a["nama_calon"] ?></h6>
                    <h6 class="text-muted font-weight-normal mt-1 mb-3"><?php echo $a["nama_depart"] ?></h6>
                  </div>
                  <div class="dropdown align-self-center float-right">
                    <h4><?php echo $a["jumlah"] ?></h4>
                  </div>
                </div>
              <?php } ?>
            </div>
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


  <?php include "../../template/footer.php"; ?>