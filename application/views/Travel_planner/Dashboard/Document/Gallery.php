<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery | <?=@$_SESSION['name']?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/ekko-lightbox/ekko-lightbox.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
  </head>
  <body class="hold-transition sidebar-mini">
  
  <div style="min-height: 89%; background-image: url(
          'https://png.pngtree.com/thumb_back/fh260/background/20230713/pngtree-3d-rendering-of-empty-frames-on-wall-in-gallery-interior-image_3867467.jpg'
      ); background-size: cover;">

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="card row mb-2">
            <div class="col-sm-6">
              <h1>Gallery</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h4 class="card-title">Images</h4>
                </div>
                <div class="card-body">
                  <div>
                    <div class="container-fluid p-0 row">
                      <?php
                        foreach ($result as $key=>$row) {
                          
                          ?>
                          <div class="item col-sm-1 d-flex justify-content-center align-items-center text-center">
                            <form method="post">
                              <a href="/CodeIgniterApp/Travel_planner/document/enlarge?id=<?=$row['id']?>" data-toggle="lightbox" data-title="Document" data-width="500" data-height="500">
                                <img class="img-fluid mb-2 img-rounded shadow mx-auto d-block" src="<?= base64_decode($row['filePath']);?>"/>
                              </a>
                              <button class='btn btn-danger position-absolute' style="bottom: 0; right: 0;" name='btn<?=$row['id']?>' value="<?=$row['id']?>" ><i class="fas fa-trash"></i></button>
                            </form>
                          </div>
                      <?php }
                    ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

  </div>
  <!-- ./wrapper -->

  <!-- Page specific script -->
  <script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true,
          height: 'auto'
        });
      });

      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })

  </script>
