<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Travel Planner</title>
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
    <div class="register-page" style="background-image: url('https://img.freepik.com/free-vector/realistic-travel-background-with-elements_52683-77784.jpg?w=2000'); background-repeat: no-repeat;">
      <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="<?= adminTravelPlannerUrl()?>" class="h1">
              <img src="<?=base_url("assets/dist/img/Travel_planner_128.png")?>" alt="Travel Planner Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <b>T</b>ravel<b>P</b>lanner
            </a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p class="login-box-msg">Registration Form</p>
              Enter Details:
            <form action="action" method="post">
            <div class="input-group mb-3">
              <input name="name" type="text" class="form-control" placeholder="Full name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name='email' placeholder='Email*' autocomplete="username" type="email" class="form-control" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="password" id="password" type="password" autocomplete="new-password" class="form-control" placeholder="Password*" required onchange=validatePassword()>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input id="confirm_password" name="confirm_password" autocomplete="new-password" type="password" class="form-control" placeholder="Confirm password*" required onkeyup=validatePassword()>
              <div class="input-group-append">
                <div class="input-group-text">
                  <button type="button" name="hidden" onclick="
                                                              if(this.name=='hidden'){
                                                                confirm_password.type='text';
                                                                this.name='shown';
                                                                this.className='btn btn-xs fa fa-eye';
                                                              }
                                                              else{
                                                                confirm_password.type='password';
                                                                this.name='hidden';
                                                                this.className='btn btn-xs fa fa-eye-slash';
                                                              }"
                                                              class="btn btn-xs fa fa-eye-slash"></button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8"></div>
              <div class="col-4">
                <button type="submit" class="btn btn-outline-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            </form>
            <p class="mb-1">
            &nbsp;&nbsp;Already have an Account? <a href="<?=adminTravelPlannerUrl()?>" class="text-center">Login</a>
            </p>

          </div>
          <!-- /.card-body -->
          
          <div class="card-footer text-center">

          </div>

        </div>
        <!-- /.card -->

      </div>
      <!-- /.register-box -->

    </div>
    <!-- /.register-page -->
    <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\Travel_planner\Register\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
  </body>
  <script>
      var password = document.getElementById("password");
      var confirm_password = document.getElementById("confirm_password");

      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
  </script>
</html>