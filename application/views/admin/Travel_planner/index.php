<?php

  $CookieName = $_SERVER['REMOTE_ADDR'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= assetUrl()?>favicon.ico" type="image/x-icon"/>
    <title>Home | Travel Planner</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
  </head>
  <body>
    <!-- https://wallpapers.com/images/featured/travel-ibk7fgrvtvhs7qzg.jpg -->
    <!-- https://img.freepik.com/premium-vector/time-travel-background-cartoon-design-top-view-wallpaper-with-composition-passport_198565-2071.jpg?w=2000 -->
    <div class="login-page" style='background-image: url("https://wallpapers.com/images/featured/travel-ibk7fgrvtvhs7qzg.jpg"); background-size: cover;'>
      <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="<?= base_url()."index.php/admin/"?>Travel_planner" class="h1">
              <img src="<?=base_url("assets/dist/img/Travel_planner_128.png")?>" alt="Travel Planner Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <b>T</b>ravel<b>P</b>lanner
            </a>
          </div>
          <!-- card-header -->
          <div class="card-body">
          <p class="login-box-msg">LogIn to Travel Planner:</p>
            <form action="<?= $_SERVER['PHP_SELF']."/login/validate"; ?>" method="post">
              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <div class="col-4">
                  <button type="submit" class="btn bg-gradient-primary btn-block" name="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- card-body -->

          <!-- Test Login Button -->
          <form action="<?= $_SERVER['PHP_SELF']."/login/validate"; ?>" method="post">
            <button class="btn float-right btn-outline-warning btn-xs" type="login" name="login">Test Log-in</button>
          </form>

          <!-- Register Hype Link -->
          <p class="mb-1">
          &nbsp;&nbsp;If you Don't have Account<a href="<?=adminTravelPlannerUrl()?>Register/" class="text-center"> Register</a>
          </p>
          <div class="card-footer text-center">

          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.login Box -->
      
    </div>
    <!-- /.login Page -->
    <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
  </body>
</html>
