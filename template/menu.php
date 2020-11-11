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
            <a href="valid-nilai.html">
              <i data-feather="file-text"></i>
              <span> Validasi Nilai </span>
            </a>
          </li>

          <li>
            <a href="javascript: void(0);" aria-expanded="false">
              <i data-feather="file"></i>
              <span> Rekap Penilaian </span>
              <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
              <li>
                <a href="forms-basic.html">Basic Elements</a>
              </li>
              <li>
                <a href="forms-advanced.html">Advanced</a>
              </li>
              <li>
                <a href="forms-validation.html">Validation</a>
              </li>
              <li>
                <a href="forms-wizard.html">Wizard</a>
              </li>
              <li>
                <a href="forms-editor.html">Editor</a>
              </li>
              <li>
                <a href="forms-file-uploads.html">File Uploads</a>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </div>
</div>