<?php
session_start();
if (isset($_SESSION['login'])) {
  if ($_SESSION['level'] == 'admin') {
    header("Location:admin");
  } else {
    header("Location:penguji");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>PCM Sepanjang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/logo_muh.ico">

  <!-- App css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

  <div class="account-pages my-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="card">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-md-6 p-5">
                  <div class="mx-auto mb-5">
                    <a href="index.html">
                      <img src="assets/images/logo_muh.png" alt="" height="90" />
                      <h3 class="d-inline align-middle ml-1 text-logo">PCM Sepanjang</h3>
                    </a>
                  </div>


                  <h6 class="h5 mb-0 mt-4">Assalamualikum Wr.Wb</h6>
                  <p class="text-muted mt-1 mb-4">Sistem Informasi Penilaian Pegawai</p>
                  <?php
                  if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong> GAGAL!</strong> USERNAME dan PASSWORD SALAH!
                        <button type='button' class='close' data-dismiss='alert'
                        aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    } else if ($_GET['pesan'] == "logout") {
                      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                      Anda Telah Berhasil Logout
                        <button type='button' class='close' data-dismiss='alert'
                        aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }
                  }
                  ?>


                  <form action="config/cek_login.php" method="POST" class="authentication-form">
                    <div class="form-group">
                      <label class="form-control-label">username</label>
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="icon-dual" data-feather="user"></i>
                          </span>
                        </div>
                        <input type="text" name="username" class="form-control" id="email" placeholder="username">
                      </div>
                    </div>

                    <div class="form-group mt-4">
                      <label class="form-control-label">Password</label>
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="icon-dual" data-feather="lock"></i>
                          </span>
                        </div>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password">
                      </div>
                    </div>

                    <div class="form-group mb-0 text-center">
                      <button class="btn btn-primary btn-block" type="submit"> Masuk
                      </button>
                    </div>
                  </form>
                </div>
                <div class="col-lg-6 d-none d-md-inline-block">
                  <div class="auth-page-sidebar">
                    <div class="overlay"></div>
                    <div class="auth-user-testimonial">
                      <p class="font-size-24 font-weight-bold text-white mb-1">I simply love it!</p>
                      <p class="lead">"It's a elegent templete. I love it very much!"</p>
                      <p>- Admin User</p>
                    </div>
                  </div>
                </div>
              </div>

            </div> <!-- end card-body -->
          </div>
          <!-- end card -->

          <div class="row mt-3">
            <div class="col-12 text-center">
              <p class="text-muted">IT PCM SEPANJANG </p>
            </div> <!-- end col -->
          </div>
          <!-- end row -->

        </div> <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end page -->

  <!-- Vendor js -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- App js -->
  <script src="assets/js/app.min.js"></script>

</body>

</html>