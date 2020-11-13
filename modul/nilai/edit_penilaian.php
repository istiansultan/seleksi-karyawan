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

<style>
  .radio-container {
    margin: 0 auto;
    max-width: 400px;
    width: 100%;
  }

  .radio-label {
    background: white;
    border: 1px solid #eee;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-weight: 600;
    margin: 0 auto 10px;
    padding: 20px 20px 20px 65px;
    position: relative;
    transition: .3s ease all;
    width: 100%;
  }

  .radio-label:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  }

  .radio-label:before {
    background: #eee;
    border-radius: 50%;
    content: '';
    height: 30px;
    left: 20px;
    position: absolute;
    top: calc(50% - 15px);
    transition: .3s ease background-color;
    width: 30px;
  }

  .radio-label span {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  .radio-btn {
    position: absolute;
    visibility: hidden;
  }

  .radio-btn:checked+.radio-label {
    background: #ECF5FF;
    border-color: #4A90E2;
  }

  .radio-btn:checked+.radio-label:before {
    background-color: #4A90E2;
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIyNiIgaGVpZ2h0PSIyMCIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIyLjAyOTY4IC00MC4wOTAzIDI2IDIwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48IS0tR2VuZXJhdGVkIGJ5IElKU1ZHIChodHRwczovL2dpdGh1Yi5jb20vaWNvbmphci9JSlNWRyktLT48cGF0aCBkPSJNMjcuOTc0MywtMzYuMTI3MmMwLDAuNDQ2NDI4IC0wLjE1NjI1LDAuODI1ODkzIC0wLjQ2ODc1LDEuMTM4MzlsLTEyLjEyMDUsMTIuMTIwNWwtMi4yNzY3OSwyLjI3Njc5Yy0wLjMxMjUsMC4zMTI1IC0wLjY5MTk2NCwwLjQ2ODc1IC0xLjEzODM5LDAuNDY4NzVjLTAuNDQ2NDI4LDAgLTAuODI1ODkzLC0wLjE1NjI1IC0xLjEzODM5LC0wLjQ2ODc1bC0yLjI3Njc5LC0yLjI3Njc5bC02LjA2MDI3LC02LjA2MDI3Yy0wLjMxMjUsLTAuMzEyNSAtMC40Njg3NSwtMC42OTE5NjUgLTAuNDY4NzUsLTEuMTM4MzljMCwtMC40NDY0MjkgMC4xNTYyNSwtMC44MjU4OTMgMC40Njg3NSwtMS4xMzgzOWwyLjI3Njc5LC0yLjI3Njc5YzAuMzEyNSwtMC4zMTI1IDAuNjkxOTY1LC0wLjQ2ODc1IDEuMTM4MzksLTAuNDY4NzVjMC40NDY0MjksMCAwLjgyNTg5MywwLjE1NjI1IDEuMTM4MzksMC40Njg3NWw0LjkyMTg4LDQuOTM4NjJsMTAuOTgyMSwtMTAuOTk4OWMwLjMxMjUsLTAuMzEyNSAwLjY5MTk2NCwtMC40Njg3NSAxLjEzODM5LC0wLjQ2ODc1YzAuNDQ2NDI4LDAgMC44MjU4OTMsMC4xNTYyNSAxLjEzODM5LDAuNDY4NzVsMi4yNzY3OCwyLjI3Njc5YzAuMzEyNSwwLjMxMjUgMC40Njg3NSwwLjY5MTk2NCAwLjQ2ODc1LDEuMTM4MzlaIiB0cmFuc2Zvcm09InNjYWxlKDEuMDAxOTgpIiBmaWxsPSIjZmZmIj48L3BhdGg+PC9zdmc+');
    background-repeat: no-repeat;
    background-position: center;
    background-size: 15px;
  }

  .radio-btn.positive:checked+.radio-label {
    background: #EAFFF6;
    border-color: #32B67A;
  }

  .radio-btn.positive:checked+.radio-label:before {
    background-color: #32B67A;
  }

  .radio-btn.neutral:checked+.radio-label:before {
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAtMTUgMzAgOC41NzE0MyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PCEtLUdlbmVyYXRlZCBieSBJSlNWRyAoaHR0cHM6Ly9naXRodWIuY29tL2ljb25qYXIvSUpTVkcpLS0+PHBhdGggZD0iTTMwLC0xMi4zMjE0djMuMjE0MjljMCwwLjczNjYwNyAtMC4yNjIyNzcsMS4zNjcxOSAtMC43ODY4MywxLjg5MTc0Yy0wLjUyNDU1NCwwLjUyNDU1NCAtMS4xNTUxMywwLjc4NjgzMSAtMS44OTE3NCwwLjc4NjgzMWgtMjQuNjQyOWMtMC43MzY2MDcsMCAtMS4zNjcxOSwtMC4yNjIyNzcgLTEuODkxNzQsLTAuNzg2ODMxYy0wLjUyNDU1MywtMC41MjQ1NTMgLTAuNzg2ODMsLTEuMTU1MTMgLTAuNzg2ODMsLTEuODkxNzR2LTMuMjE0MjljMCwtMC43MzY2MDcgMC4yNjIyNzcsLTEuMzY3MTkgMC43ODY4MywtMS44OTE3NGMwLjUyNDU1NCwtMC41MjQ1NTMgMS4xNTUxMywtMC43ODY4MyAxLjg5MTc0LC0wLjc4NjgzaDI0LjY0MjljMC43MzY2MDcsMCAxLjM2NzE5LDAuMjYyMjc3IDEuODkxNzQsMC43ODY4M2MwLjUyNDU1MywwLjUyNDU1NCAwLjc4NjgzLDEuMTU1MTMgMC43ODY4MywxLjg5MTc0WiIgZmlsbD0iI2ZmZiI+PC9wYXRoPjwvc3ZnPg==');
  }

  .radio-btn.negative:checked+.radio-label {
    background: #FFF2F2;
    border-color: #E75153;
  }

  .radio-btn.negative:checked+.radio-label:before {
    background-color: #E75153;
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIxLjg1MTg1IC0zOS42OTcgMjAgMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjwhLS1HZW5lcmF0ZWQgYnkgSUpTVkcgKGh0dHBzOi8vZ2l0aHViLmNvbS9pY29uamFyL0lKU1ZHKS0tPjxwYXRoIGQ9Ik0yMS43Mjk5LC0yMy40NzFjMCwwLjQ0NjQyOCAtMC4xNTYyNSwwLjgyNTg5MyAtMC40Njg3NSwxLjEzODM5bC0yLjI3Njc5LDIuMjc2NzljLTAuMzEyNSwwLjMxMjUgLTAuNjkxOTY0LDAuNDY4NzUgLTEuMTM4MzksMC40Njg3NWMtMC40NDY0MjgsMCAtMC44MjU4OTMsLTAuMTU2MjUgLTEuMTM4MzksLTAuNDY4NzVsLTQuOTIxODcsLTQuOTIxODhsLTQuOTIxODgsNC45MjE4OGMtMC4zMTI1LDAuMzEyNSAtMC42OTE5NjQsMC40Njg3NSAtMS4xMzgzOSwwLjQ2ODc1Yy0wLjQ0NjQyOCwwIC0wLjgyNTg5MiwtMC4xNTYyNSAtMS4xMzgzOSwtMC40Njg3NWwtMi4yNzY3OSwtMi4yNzY3OWMtMC4zMTI1LC0wLjMxMjUgLTAuNDY4NzUsLTAuNjkxOTY1IC0wLjQ2ODc1LC0xLjEzODM5YzAsLTAuNDQ2NDI5IDAuMTU2MjUsLTAuODI1ODkzIDAuNDY4NzUsLTEuMTM4MzlsNC45MjE4OCwtNC45MjE4OGwtNC45MjE4OCwtNC45MjE4OGMtMC4zMTI1LC0wLjMxMjUgLTAuNDY4NzUsLTAuNjkxOTY0IC0wLjQ2ODc1LC0xLjEzODM5YzAsLTAuNDQ2NDI4IDAuMTU2MjUsLTAuODI1ODkzIDAuNDY4NzUsLTEuMTM4MzlsMi4yNzY3OSwtMi4yNzY3OGMwLjMxMjUsLTAuMzEyNSAwLjY5MTk2NCwtMC40Njg3NSAxLjEzODM5LC0wLjQ2ODc1YzAuNDQ2NDI5LDAgMC44MjU4OTMsMC4xNTYyNSAxLjEzODM5LDAuNDY4NzVsNC45MjE4OCw0LjkyMTg4bDQuOTIxODcsLTQuOTIxODhjMC4zMTI1LC0wLjMxMjUgMC42OTE5NjUsLTAuNDY4NzUgMS4xMzgzOSwtMC40Njg3NWMwLjQ0NjQyOSwwIDAuODI1ODkzLDAuMTU2MjUgMS4xMzgzOSwwLjQ2ODc1bDIuMjc2NzksMi4yNzY3OGMwLjMxMjUsMC4zMTI1IDAuNDY4NzUsMC42OTE5NjUgMC40Njg3NSwxLjEzODM5YzAsMC40NDY0MjkgLTAuMTU2MjUsMC44MjU4OTMgLTAuNDY4NzUsMS4xMzgzOWwtNC45MjE4OCw0LjkyMTg4bDQuOTIxODgsNC45MjE4OGMwLjMxMjUsMC4zMTI1IDAuNDY4NzUsMC42OTE5NjQgMC40Njg3NSwxLjEzODM5WiIgdHJhbnNmb3JtPSJzY2FsZSgxLjAwNTYxKSIgZmlsbD0iI2ZmZiI+PC9wYXRoPjwvc3ZnPg==');
  }
</style>


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