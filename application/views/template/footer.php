</body>
<footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com" target="_blank">
                  &copy; creative Tim
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license" target="_blank">
                  all right reserved
                 </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            <a href="https://wa.me/6287886511096?text=Murray%20are%20you%20there" target="_blank">DevByMurs
          </div>  
        </div>
      </footer>
    </div>
  </div>
   <!--   Core JS Files   -->
   <!-- chartis js -->
  <script src="<?php echo base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> -->
  <!-- DataTables -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  <!-- Datepicker -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url()?>assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <script>
  $( function() {
    $( "#tanggal" ).datepicker({
      dateFormat: "yy-mm-dd",
      changeMonth:  true,
      changeYear:   true
    });
  });
  </script>
</html>
