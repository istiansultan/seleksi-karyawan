<!-- end Topbar -->

<?php
include "../template/header.php";
$data3 = mysqli_query($koneksi, " select * from
                                  master_calon_depart
                                  inner JOIN master_calon on  master_calon.id_calon = master_calon_depart.id_calon
                                  inner JOIN master_depart on  master_depart.id_depart = master_calon_depart.id_depart
                                  where master_calon.id_calon='$_GET[nilai]'");
$peserta = mysqli_fetch_array($data3);

$data4 = mysqli_query($koneksi, " select * from
                                  master_penilaian
                                  where id_calon='$_GET[nilai]' and penguji='$_SESSION[username]'");
$pes = mysqli_fetch_array($data4);
?>
<?php include "../template/menu.php"; ?>




<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

      <h5 class="mb-4">Penilaian Calon Wakil Direktur</h5>
      <div class="row">

        <div class="col-md-6 col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="media">
                <img src="foto/<?php echo $peserta['foto']; ?>" class="mr-3 avatar-lg rounded" alt="shreyu">
                <div class="media-body">
                  <h5 class="mt-2 mb-0"><?php echo $peserta['nama_calon']; ?></h5>
                  <h6 class="text-muted font-weight-normal mt-1 mb-4"><?php echo $peserta['nama_depart']; ?></h6>
                </div>
              </div>
              <div class="mt-1 pt-2 border-top text-left">
                <p class="text-muted mb-2"></p>
              </div>
              <form role="form" id="quickForm" class="needs-validation" novalidate action="aksi-penilaian" method="POST">
                <input hidden class="input-xlarge focused" name="id_calon" value="<?php echo $peserta['id_calon']; ?>" type="text"></td>
                <h5 class="font-size-15 mb-1">Kompetensi 1</h5>
                <p class="sub-header">
                  Al Islam dan Kemuhammadiyahan
                </p>

                <div class="row mt-4 mb-3">
                
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio1" name="n1" value="50" class="custom-control-input" <?php if($pes['n1']=='50') echo 'checked'?> required>
                      <label class="custom-control-label" for="customRadio1">50</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio2" name="n1" value="55" <?php if($pes['n1']=='55') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">55</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio3" name="n1" value="60" <?php if($pes['n1']=='60') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">60</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio4" name="n1" value="65" <?php if($pes['n1']=='65') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4">65</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio5" name="n1" value="70" <?php if($pes['n1']=='70') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio5">70</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio6" name="n1" value="75" <?php if($pes['n1']=='75') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio6">75</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio7" name="n1" value="80" <?php if($pes['n1']=='80') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio7">80</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio8" name="n1" value="85" <?php if($pes['n1']=='85') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio8">85</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio9" name="n1" value="90" <?php if($pes['n1']=='90') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio9">90</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio10" name="n1" value="95" <?php if($pes['n1']=='95') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio10">95</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio11" name="n1" value="100" <?php if($pes['n1']=='100') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio11">100</label>
                    </div>
                  </div>

                </div>

                <h5 class="font-size-15 mb-1">Kompetensi 2</h5>
                <p class="sub-header">
                  Kepemimpinan
                </p>


                <div class="row mt-4 mb-3">
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio12" name="n2" value="50" <?php if($pes['n2']=='50') echo 'checked'?> class="custom-control-input" required>
                      <label class="custom-control-label" for="customRadio12">50</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio13" name="n2" value="55" <?php if($pes['n2']=='55') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio13">55</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio14" name="n2" value="60" <?php if($pes['n2']=='60') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio14">60</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio15" name="n2" value="65" <?php if($pes['n2']=='65') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio15">65</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio16" name="n2" value="70" <?php if($pes['n2']=='70') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio16">70</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio17" name="n2" value="75" <?php if($pes['n2']=='75') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio17">75</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio18" name="n2" value="80" <?php if($pes['n2']=='80') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio18">80</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio19" name="n2" value="85" <?php if($pes['n2']=='85') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio19">85</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio20" name="n2" value="90" <?php if($pes['n2']=='90') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio20">90</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio21" name="n2" value="95" <?php if($pes['n2']=='95') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio21">95</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio22" name="n2" value="100" <?php if($pes['n2']=='100') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio22">100</label>
                    </div>
                  </div>
                </div>

                <h5 class="font-size-15 mb-1">Kompetensi 3</h5>
                <p class="sub-header">
                  Manajemen
                </p>

                <div class="row mt-4 mb-3">
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio23" name="n3" value="50" <?php if($pes['n3']=='50') echo 'checked'?> class="custom-control-input" required>
                      <label class="custom-control-label" for="customRadio23">50</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio24" name="n3" value="55" <?php if($pes['n3']=='55') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio24">55</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio25" name="n3" value="60" <?php if($pes['n3']=='60') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio25">60</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio26" name="n3" value="65" <?php if($pes['n3']=='65') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio26">65</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio27" name="n3" value="70" <?php if($pes['n3']=='70') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio27">70</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio28" name="n3" value="75" <?php if($pes['n3']=='75') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio28">75</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio29" name="n3" value="80" <?php if($pes['n3']=='80') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio29">80</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio30" name="n3" value="85" <?php if($pes['n3']=='85') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio30">85</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio31" name="n3" value="90" <?php if($pes['n3']=='90') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio31">90</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio32" name="n3" value="95" <?php if($pes['n3']=='95') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio32">95</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="custom-control custom-radio mb-2">
                      <input type="radio" id="customRadio33" name="n3" value="100" <?php if($pes['n3']=='100') echo 'checked'?> class="custom-control-input">
                      <label class="custom-control-label" for="customRadio33">100</label>
                    </div>
                  </div>
                </div>

                <div class="row mt-5 text-center">
                  <div class="col">
                  </div>
                  <div class="col">
                    <button type="submit" name="simpan" class="btn btn-primary btn-block mr-1">SIMPAN</button>
                  </div>
                </div>
              </form>
            </div>
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


<?php include "../template/footer.php"; ?>