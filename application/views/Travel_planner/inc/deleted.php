<!-- <div class="alert alert-danger alert-dismissible float-right col-md-3">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Deleted!</h5>
    The Data is Deleted From Database.
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
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    Toast.fire({
        icon: 'error',
        title: 'Deleted!\nThe Data is Deleted From Database.',
        html: `<?php if(!empty($savedHtml)){echo $savedHtml;}?>`,
      })
    });
</script>