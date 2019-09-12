<?php if (isset($_SEASSION['status'])): ?>

</div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= BASE_URL.'vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?= BASE_URL.'vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= BASE_URL.'vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?= BASE_URL.'vendor/chart.js/Chart.min.js' ?>"></script>
  <script src="<?= BASE_URL.'vendor/datatables/jquery.dataTables.js' ?>"></script>
  <script src="<?= BASE_URL.'vendor/datatables/dataTables.bootstrap4.js' ?>"></script>
  <script src="https://cdn.tiny.cloud/1/ac1m6b1gkx9140dql0hayq2qak92pzskqnl87qzihlx7985s/tinymce/5/tinymce.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= BASE_URL.'js/sb-admin.js' ?>"></script>


  <!-- Demo scripts for this page-->
  <script src="<?= BASE_URL.'js/demo/datatables-demo.js' ?>"></script>
  <script src="<?= BASE_URL.'js/demo/chart-area-demo.js' ?>"></script>

</body>

</html>
