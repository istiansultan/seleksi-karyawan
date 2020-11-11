<!-- end Topbar -->

<?php include "../template/header.php"; ?>
<?php include "../template/menu.php"; ?>


<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <h5 class="mb-4">Daftar Calon Wakil Direktur</h5>
            <div class="row">
                <?php
                $data = mysqli_query($koneksi, "select * from master_calon_depart");
                while ($a = mysqli_fetch_array($data)) {
                    $calon = mysqli_query($koneksi, "select * from master_calon where id_calon='$a[id_calon]'");
                    $m = mysqli_fetch_array($calon);

                    $depart = mysqli_query($koneksi, "select * from master_depart where id_depart='$a[id_depart]'");
                    $d = mysqli_fetch_array($depart);
                ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="text-center mt-3">
                                    <img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="avatar-xl rounded-circle" />
                                    <h5 class="mt-2 mb-0"><?php echo "$m[nama_calon]"; ?></h5>
                                    <h6 class="text-muted font-weight-normal mt-2 mb-4">Calon <?php echo "$d[nama_depart]"; ?></h6>
                                    <?php
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM master_penilaian where id_calon='$a[id_calon]' and penguji='$_SESSION[username]'");
                                    $r = mysqli_fetch_array($hasil);
                                    $nilai = mysqli_num_rows($hasil);

                                    
                                    if ($nilai > 0) {
                                        echo "<h2 class='mb-0'>NILAI : $r[jumlah]</h2>";
                                    } else {
                                       echo "<a href='penilaian?nilai=$a[id_calon]' type='button' class='btn btn-primary btn-sm mr-1'>Penilaian</a>";
                                    }
                                    ?>
                                    
                                    <div class="mt-4 pt-3 border-top text-left">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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