<div class="topnav shadow-sm">
  <div class="container-fluid">
    <nav class="navbar navbar-light navbar-expand-lg topbar-nav">
      <div class="collapse navbar-collapse" id="topnav-menu-content">
        <ul class="metismenu" id="menu-bar">
          <li class="menu-title">Navigation</li>


          <?php
          if ($_SESSION['level'] == 'admin') {
            echo " <li>
              <a href='admin'>
              <i data-feather='home'></i>
              <span class='badge badge-success float-right'>1</span>
              <span> Awal </span>
            </a>
          </li>";
          } else {
            echo " <li>
              <a href='penguji'>
              <i data-feather='home'></i>
              <span class='badge badge-success float-right'>1</span>
              <span> Awal </span>
            </a>
          </li>";
          }


          ?>

          <li>
            <a href="valid-nilai">
              <i data-feather="file-text"></i>
              <span> Validasi Nilai </span>
            </a>
          </li>

          <li>
            <a href="grafik-nilai">
              <i data-feather="bar-chart-2"></i>
              <span> Grafik Penilaian </span>
            </a>
          </li>

        </ul>
      </div>
    </nav>
  </div>
</div>