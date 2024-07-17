<!-- <div class="callout callout-danger">
  <h5><i class="icon fas fa-ban"></i> User Not Added!!</h5>
  User Already Exist goto Login Page. <a href="<?=adminTravelPlannerUrl()?>">Login Page</a>
</div> -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')?>">
  <!-- jQuery -->
      <script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
      <!-- Bootstrap 4 -->
      <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
      <!-- SweetAlert2 -->
      <script src="<?=base_url('assets/plugins/sweetalert2/sweetalert2.min.js')?>"></script>
    <script>
    $(function() {
    var Toast = Swal.mixin({
      toast: false,
      position: '',
      showConfirmButton: true,
      timer: 0
    });

    Toast.fire({
        icon: 'warning',
        title: 'User Not Added!!\nUser Already Exist goto Login Page. <a href="<?=adminTravelPlannerUrl()?>">Login Page</a>'
      })
    });
</script>