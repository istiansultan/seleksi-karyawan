</div>

<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        2020 &copy; Oleh <a href="https://pcmspj.com" target="_blank">PCM Sepanjang</a>
      </div>
    </div>
  </div>
</footer>



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- optional plugins -->
<script src="assets/libs/moment/moment.min.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- page js -->
<script src="assets/js/pages/dashboard.init.js"></script>
<!-- Plugin js-->
<script src="assets/libs/parsleyjs/parsley.min.js"></script>
<script src="assets/js/pages/form-validation.init.js"></script>
<!-- App js -->
<script src="assets/js/app.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $('#simpan').click(function() {
      $("#quickform").valid();
    });
    $('#quickForm').validate({
      rules: {
        n1: {
          required: true,
        },
        n2: {
          required: true,
        },
        n3: {
          required: true,
        },
      },
      messages: {
        n1: {
          required: "Harap Mengisi Nilai Kompetensi 1"
        },
        n2: {
          required: "Harap Mengisi Nilai Kompetensi 2"
        },
        n3: {
          required: "Harap Mengisi Nilai Kompetensi 3"
        },
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.custom-control').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>

<!-- Code injected by live-server -->
<script type="text/javascript">
  // <![CDATA[  <-- For SVG support
  if ('WebSocket' in window) {
    (function() {
      function refreshCSS() {
        var sheets = [].slice.call(document.getElementsByTagName("link"));
        var head = document.getElementsByTagName("head")[0];
        for (var i = 0; i < sheets.length; ++i) {
          var elem = sheets[i];
          var parent = elem.parentElement || head;
          parent.removeChild(elem);
          var rel = elem.rel;
          if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
          }
          parent.appendChild(elem);
        }
      }
      var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
      var address = protocol + window.location.host + window.location.pathname + '/ws';
      var socket = new WebSocket(address);
      socket.onmessage = function(msg) {
        if (msg.data == 'reload') window.location.reload();
        else if (msg.data == 'refreshcss') refreshCSS();
      };
      if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
        console.log('Live reload enabled.');
        sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
      }
    })();
  } else {
    console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
  }
  // ]]>
</script>
</body>

</html>