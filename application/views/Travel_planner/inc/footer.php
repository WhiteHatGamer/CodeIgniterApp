<!-- jQuery -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>

<!-- Owl Carousel 2.3.4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- SweetAlert2 -->
<script src="<?=base_url('assets/plugins/sweetalert2/sweetalert2.min.js')?>"></script>

<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist/js/adminlte.min.js')?>"></script>

<!-- Ekko Lightbox -->
<script src="<?=base_url('assets/plugins/ekko-lightbox/ekko-lightbox.min.js')?>"></script>

<!-- Filterizr-->
<script src="<?=base_url('assets/plugins/filterizr/jquery.filterizr.min.js')?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
    
<div style="background-image: url(
                                'https://static.vecteezy.com/system/resources/previews/016/005/875/original/arrow-road-yellow-sign-warning-striped-arrow-safety-type-construction-border-isolated-on-white-background-illustration-vector.jpg'
                                ); background-position: center; background-size: 111%;">
  <footer>
      <strong style="-webkit-text-stroke: 0.5px #fad320; color: #020202; font-size: larger;">
          TravelPlanner&copy; 2023
      </strong>
      <?php

        function calculate_file_path(){
          $views = 'C:\xampp\htdocs\CodeIgniterApp\application\views\\';
          $add_string = '/index.php';
          $url = $_SERVER['PHP_SELF'];
          $url = str_replace('User_profile','Dashboard/Profile',$url);
          $url = str_replace('hotel','Dashboard/ListStays',$url);
          $url = str_replace('/CodeIgniterApp/index.php/',$views,$url).$add_string;
          echo $url;
        }
      ?>
      
      <script>
          $(document).ready(function(){
              $(".sheet0").addClass("table table-bordered card col-sm-12 table-striped dataTable dtr-inline");
          });

      </script>
  </footer>
</div>
