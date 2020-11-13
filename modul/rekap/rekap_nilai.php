<!-- end Topbar -->

<?php include "../template/header.php"; ?>
<?php include "../template/menu.php"; ?>


<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
      <div class="row page-title align-items-center">
        <div class="col-sm-4 col-xl-6">
          <h4 class="mb-1 mt-0">Horizontal</h4>
        </div>

      </div>
      <!-- products -->
      <div class="row">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-primary btn-sm float-right">
                <i class='uil uil-export ml-1'></i> Export Excel
              </a>
              <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian Penguji 1</h5>
              <div class="table-responsive mt-4">
                <table class="table table-hover table-nowrap mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Penguji 1</th>
                      <th scope="col">Ket</th>
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

                      $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='uji1'");
                      $n = mysqli_num_rows($nilai);
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="mr-3 avatar rounded-circle" /></td>
                        <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                        <?php
                        if ($n > 0) {
                          $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji1'");
                          while ($uji1 = mysqli_fetch_array($nilai)) {
                            echo "<td>$uji1[jumlah]</td>";
                          }
                        } else {
                          echo "<td> <span class='badge badge-soft-danger py-1'>Belum Terisi</span></td>";
                        }
                        ?>

                        <td><a href='edit-nilai?nilai=<?php echo "$a[id_calon]"; ?>&penguji=uji1' class='btn btn-warning btn-sm mt-2 float-right'>Edit</a></td>

                        <!--<td><span class="badge badge-soft-danger py-1">Pending</span></td>-->
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-primary btn-sm float-right">
                <i class='uil uil-export ml-1'></i> Export Excel
              </a>
              <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian Penguji 2</h5>
              <div class="table-responsive mt-4">
                <table class="table table-hover table-nowrap mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Penguji 2</th>
                      <th scope="col">Ket</th>
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

                      $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='uji2'");
                      $n = mysqli_num_rows($nilai);
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="mr-3 avatar rounded-circle" /></td>
                        <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                        <?php
                        if ($n > 0) {
                          $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji2'");
                          while ($uji2 = mysqli_fetch_array($nilai)) {
                            echo "<td>$uji2[jumlah]</td>";
                          }
                        } else {
                          echo "<td> <span class='badge badge-soft-danger py-1'>Belum Terisi</span></td>";
                        }
                        ?>

                        <td><a href='edit-nilai?nilai=<?php echo "$a[id_calon]"; ?>&penguji=uji2' class='btn btn-warning btn-sm mt-2 float-right'>Edit</a></td>

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

      <div class="row">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-primary btn-sm float-right">
                <i class='uil uil-export ml-1'></i> Export Excel
              </a>
              <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian Penguji 3</h5>
              <div class="table-responsive mt-4">
                <table class="table table-hover table-nowrap mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Penguji 3</th>
                      <th scope="col">Ket</th>
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

                      $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='uji3'");
                      $n = mysqli_num_rows($nilai);
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="mr-3 avatar rounded-circle" /></td>
                        <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                        <?php
                        if ($n > 0) {
                          $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji3'");
                          while ($uji3 = mysqli_fetch_array($nilai)) {
                            echo "<td>$uji3[jumlah]</td>";
                          }
                        } else {
                          echo "<td> <span class='badge badge-soft-danger py-1'>Belum Terisi</span></td>";
                        }
                        ?>

                        <td><a href='edit-nilai?nilai=<?php echo "$a[id_calon]"; ?>&penguji=uji3' class='btn btn-warning btn-sm mt-2 float-right'>Edit</a></td>

                        <!--<td><span class="badge badge-soft-danger py-1">Pending</span></td>-->
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-primary btn-sm float-right">
                <i class='uil uil-export ml-1'></i> Export Excel
              </a>
              <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian Penguji 4</h5>
              <div class="table-responsive mt-4">
                <table class="table table-hover table-nowrap mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Penguji 4</th>
                      <th scope="col">Ket</th>
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

                      $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='uji4'");
                      $n = mysqli_num_rows($nilai);
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="mr-3 avatar rounded-circle" /></td>
                        <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                        <?php
                        if ($n > 0) {
                          $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji4'");
                          while ($uji4 = mysqli_fetch_array($nilai)) {
                            echo "<td>$uji4[jumlah]</td>";
                          }
                        } else {
                          echo "<td> <span class='badge badge-soft-danger py-1'>Belum Terisi</span></td>";
                        }
                        ?>

                        <td><a href='edit-nilai?nilai=<?php echo "$a[id_calon]"; ?>&penguji=uji4' class='btn btn-warning btn-sm mt-2 float-right'>Edit</a></td>

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

      <div class="row">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-primary btn-sm float-right">
                <i class='uil uil-export ml-1'></i> Export Excel
              </a>
              <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian Penguji 5</h5>
              <div class="table-responsive mt-4">
                <table class="table table-hover table-nowrap mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Penguji 5</th>
                      <th scope="col">Ket</th>
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

                      $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='uji5'");
                      $n = mysqli_num_rows($nilai);
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="mr-3 avatar rounded-circle" /></td>
                        <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                        <?php
                        if ($n > 0) {
                          $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji5'");
                          while ($uji5 = mysqli_fetch_array($nilai)) {
                            echo "<td>$uji5[jumlah]</td>";
                          }
                        } else {
                          echo "<td> <span class='badge badge-soft-danger py-1'>Belum Terisi</span></td>";
                        }
                        ?>

                        <td><a href='edit-nilai?nilai=<?php echo "$a[id_calon]"; ?>&penguji=uji5' class='btn btn-warning btn-sm mt-2 float-right'>Edit</a></td>

                        <!--<td><span class="badge badge-soft-danger py-1">Pending</span></td>-->
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-primary btn-sm float-right">
                <i class='uil uil-export ml-1'></i> Export Excel
              </a>
              <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian Penguji 6</h5>
              <div class="table-responsive mt-4">
                <table class="table table-hover table-nowrap mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Penguji 6</th>
                      <th scope="col">Ket</th>
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

                      $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='uji6'");
                      $n = mysqli_num_rows($nilai);
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="mr-3 avatar rounded-circle" /></td>
                        <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                        <?php
                        if ($n > 0) {
                          $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji6'");
                          while ($uji6 = mysqli_fetch_array($nilai)) {
                            echo "<td>$uji6[jumlah]</td>";
                          }
                        } else {
                          echo "<td> <span class='badge badge-soft-danger py-1'>Belum Terisi</span></td>";
                        }
                        ?>

                        <td><a href='edit-nilai?nilai=<?php echo "$a[id_calon]"; ?>&penguji=uji6' class='btn btn-warning btn-sm mt-2 float-right'>Edit</a></td>

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

      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-primary btn-sm float-right">
                <i class='uil uil-export ml-1'></i> Export Excel
              </a>
              <h5 class="card-title mt-0 mb-0 header-title">Rekap Penilaian Penguji 7</h5>
              <div class="table-responsive mt-4">
                <table class="table table-hover table-nowrap mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Penguji 7</th>
                      <th scope="col">Ket</th>
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

                      $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$a[id_calon]' and penguji='uji7'");
                      $n = mysqli_num_rows($nilai);
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="foto/<?php echo "$m[foto]"; ?>" alt="" class="mr-3 avatar rounded-circle" /></td>
                        <td><?php echo $m['nama_calon']; ?><br><?php echo $d['nama_depart']; ?></td>
                        <?php
                        if ($n > 0) {
                          $nilai = mysqli_query($koneksi, "select * from master_penilaian where id_calon='$m[id_calon]' and penguji='uji7'");
                          while ($uji7 = mysqli_fetch_array($nilai)) {
                            echo "<td>$uji7[jumlah]</td>";
                          }
                        } else {
                          echo "<td> <span class='badge badge-soft-danger py-1'>Belum Terisi</span></td>";
                        }
                        ?>

                        <td><a href='edit-nilai?nilai=<?php echo "$a[id_calon]"; ?>&penguji=uji7' class='btn btn-warning btn-sm mt-2 float-right'>Edit</a></td>

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