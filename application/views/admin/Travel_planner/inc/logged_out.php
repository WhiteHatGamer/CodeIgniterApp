<?php
  if(!isset($_SESSION['remail'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Travel Planner | Logged Out</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition">
  <div class="wrapper">
  <div style="min-height: 90%;">
      <div class="error-page">
        <h1 class="headline text-danger"><b>You Are Logged Out</b></h1>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! You are not Logged In</h3>

          <p>
            Log In To use our Services.
            <a href="<?= adminTravelPlannerUrl()?>">return to dashboard</a>
          </p>
        </div>
      </div>
    </div>
  </div>
    <!-- /.content -->
    <footer class="footer text-center">
    <strong>Copyright &copy; 2018-2023 <a href="<?=adminTravelPlannerUrl()?>">Travel Planner</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/dist/js/demo.js')?>"></script>
</body>
</html>

<?php
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Travel Planner | LockScreen</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
  <style>
    img[src=""] {
      display: none;
      }
  </style>
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?= adminTravelPlannerUrl()?>"><b>T</b>ravel <b>P</b>lanner</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?=@$name?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?php if(!empty($image)){ echo ("data:image/jpeg;base64, ".base64_encode($image));}else{ echo (base_url("assets/dist/img/Travel_planner_128.png"));}?>" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="<?=adminTravelPlannerUrl()."Login/validate"?>" method="post">
      <input name="email" id="email" autocomplete="username" type="email" class="form-control form-control-border" value="<?=@$email?>" readonly>
      <div class="input-group">
        <input name="password" autocomplete="current-password" type="password" class="form-control" placeholder="password">

        <div class="input-group-append">
          <button type="submit" class="btn">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="<?=adminTravelPlannerUrl()."User_profile/clear_session"?>">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2018-2013 <b><a href="<?= adminTravelPlannerUrl()?>" class="text-black">Travel Planner</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>
<?php }?>