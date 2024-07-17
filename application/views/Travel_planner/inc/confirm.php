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
      showConfirmButton: false,
      timer: 0
    });

    Toast.fire({
        icon: 'warning',
        title: 'Confirm!\nDelete data From Database?',
        html: "<br><form action='#' method='post'><button type='submit' name='confirmDlt' class='btn btn-danger' value='<?=$value?? 1?>'>Delete</button>    <button type='submit' name='cancel' class='btn btn-primary'>Cancel</button></form>"
    }).then((result) => {
        if (result.isConfirmed) {
            // 
        }
    });
});
        
</script>