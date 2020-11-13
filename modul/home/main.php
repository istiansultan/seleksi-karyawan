<!-- end Topbar -->

<?php include "../template/header.php"; ?>
<?php include "../template/menu.php"; ?>


<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Horizontal</h4>
                </div>

            </div>
            <!-- products -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="" class="btn btn-primary btn-sm float-right">
                                <i class='uil uil-export ml-1'></i> Export
                            </a>
                            <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian</h5>
                            <?php
                            $n1 = mysqli_query($koneksi, "select * from master_valid where penguji='uji1'");
                            $n2 = mysqli_query($koneksi, "select * from master_valid where penguji='uji2'");
                            $n3 = mysqli_query($koneksi, "select * from master_valid where penguji='uji3'");
                            $n4 = mysqli_query($koneksi, "select * from master_valid where penguji='uji4'");
                            $n5 = mysqli_query($koneksi, "select * from master_valid where penguji='uji5'");
                            $n6 = mysqli_query($koneksi, "select * from master_valid where penguji='uji6'");
                            $n7 = mysqli_query($koneksi, "select * from master_valid where penguji='uji7'");
                            $count1 = mysqli_num_rows($n1);
                            $count2 = mysqli_num_rows($n2);
                            $count3 = mysqli_num_rows($n3);
                            $count4 = mysqli_num_rows($n4);
                            $count5 = mysqli_num_rows($n5);
                            $count6 = mysqli_num_rows($n6);
                            $count7 = mysqli_num_rows($n7);
                            ?>
                            <div class="table-responsive mt-4">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama Calon</th>
                                            <?php
                                            $penguji = mysqli_query($koneksi, "select * from master_user where level='penguji'");
                                            while ($a = mysqli_fetch_array($penguji)) {
                                                $no++;
                                            ?>
                                                <th scope="col">Penguji <?php echo $no; ?></th>
                                            <?php } ?>
                                            <th scope="col">TOTAL Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        $data = mysqli_query($koneksi, "select * from master_calon_depart limit 6");
                                        while ($a = mysqli_fetch_array($data)) {
                                            $calon = mysqli_query($koneksi, "select * from master_calon where id_calon='$a[id_calon]'");
                                            $m = mysqli_fetch_array($calon);

                                            $depart = mysqli_query($koneksi, "select * from master_depart where id_depart='$a[id_depart]'");
                                            $d = mysqli_fetch_array($depart);

                                            $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='$_SESSION[username]'");
                                            $n = mysqli_fetch_array($nilai);
                                            $no++;
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="avatar-xl rounded-circle" /></td>
                                                <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                                                <?php
                                                if ($count1 > 0) {
                                                    $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji1'");
                                                    while ($uji1 = mysqli_fetch_array($nilai)) {
                                                        echo "<td>$uji1[jumlah]</td>";
                                                    }
                                                } else {
                                                    echo "<td> <span class='badge badge-soft-danger py-1'>Belum Validasi</span></td>";
                                                }
                                                ?>
                                                <?php
                                                if ($count2 > 0) {
                                                    $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji2'");
                                                    while ($uji2 = mysqli_fetch_array($nilai)) {
                                                        echo "<td>$uji2[jumlah]</td>";
                                                    }
                                                } else {
                                                    echo "<td> <span class='badge badge-soft-danger py-1'>Belum Validasi</span></td>";
                                                }
                                                ?>
                                                <?php
                                                if ($count3 > 0) {
                                                    $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji3'");
                                                    while ($uji3 = mysqli_fetch_array($nilai)) {
                                                        echo "<td>$uji3[jumlah]</td>";
                                                    }
                                                } else {
                                                    echo "<td> <span class='badge badge-soft-danger py-1'>Belum Validasi</span></td>";
                                                }
                                                ?>
                                                <?php
                                                if ($count4 > 0) {
                                                    $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji4'");
                                                    while ($uji4 = mysqli_fetch_array($nilai)) {
                                                        echo "<td>$uji4[jumlah]</td>";
                                                    }
                                                } else {
                                                    echo "<td> <span class='badge badge-soft-danger py-1'>Belum Validasi</span></td>";
                                                }
                                                ?>
                                                <?php
                                                if ($count5 > 0) {
                                                    $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji5'");
                                                    while ($uji5 = mysqli_fetch_array($nilai)) {
                                                        echo "<td>$uji5[jumlah]</td>";
                                                    }
                                                } else {
                                                    echo "<td> <span class='badge badge-soft-danger py-1'>Belum Validasi</span></td>";
                                                }
                                                ?>
                                                <?php
                                                if ($count6 > 0) {
                                                    $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji6'");
                                                    while ($uji6 = mysqli_fetch_array($nilai)) {
                                                        echo "<td>$uji6[jumlah]</td>";
                                                    }
                                                } else {
                                                    echo "<td> <span class='badge badge-soft-danger py-1'>Belum Validasi</span></td>";
                                                }
                                                ?>
                                                <?php
                                                if ($count7 > 0) {
                                                    $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji7'");
                                                    while ($uji7 = mysqli_fetch_array($nilai)) {
                                                        echo "<td>$uji7[jumlah]</td>";
                                                    }
                                                } else {
                                                    echo "<td> <span class='badge badge-soft-danger py-1'>Belum Validasi</span></td>";
                                                }
                                                ?>
                                                <?php 
                                                $total = mysqli_query($koneksi, "SELECT SUM(jumlah) AS total1 FROM master_penilaian WHERE id_calon='$a[id_calon]'");
                                                while ($akhir = mysqli_fetch_array($total)){
                                                    echo "<td>$akhir[total1]</td>";
                                                }
                                                ?>
                                                <!--<td><span class="badge badge-soft-danger py-1">Pending</span></td>-->
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->



        </div>
    </div>


    <!-- Footer Start -->

    <!-- end Footer -->
</div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<?php include "../template/footer.php"; ?>