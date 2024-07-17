<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <div class="center-page" style="background-image: url(
        https://media.wallpaperchill.com/lock-screen-wallpapers/lock-screen-background-hd-wallpaper-s105.jpg
    ); background-position: center;">
        <div class="card" style="background-color: rgba(242, 242, 242, 0.7);">
            <div class="card-header">
                <h3 class="card-title"><b>C</b>hange <b>P</b>assword</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <input hidden autocomplete="username" class="form-control" style="background-color: rgba(242, 242, 242, 0.7);" type="text" placeholder='User Name' value="<?=$_SESSION['email']?>" disabled>
                    <input style="background-color: rgba(242, 242, 242, 0.7);" autocomplete="current-password" class="form-control" type="password" placeholder='Old Password' name="OldPassword" required><br>
                    <input style="background-color: rgba(242, 242, 242, 0.7);" autocomplete="new-password" class='form-control' type="password" placeholder="New Password" name="NewPassword" id="NewPassword" required onchange=validatePassword()>
                    <div class="input-group mb-3">
                        <input style="background-color: rgba(242, 242, 242, 0.7);" autocomplete="new-password" class='form-control' type="password" placeholder="Confirm Password" name="ConfirmPassword" id="ConfirmPassword" required onkeyup=validatePassword()>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <button type="button" name="hidden" onclick="
                                                                        if(this.name=='hidden'){
                                                                            ConfirmPassword.type='text';
                                                                            this.name='shown';
                                                                            this.className='btn btn-xs fa fa-eye';
                                                                        }
                                                                        else{
                                                                            ConfirmPassword.type='password';
                                                                            this.name='hidden';
                                                                            this.className='btn btn-xs fa fa-eye-slash';
                                                                        }"
                                                                        class="btn btn-xs fa fa-eye-slash"></button>
                            </div>
                            <br>
                        </div>
                    </div>
                    <button class="btn bg-gradient-danger btn-xs float-right" name="change" type="submit">Change Password</button>
                </form>
            </div>
        </div>
    </div>
    <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\Profile\Password.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
</body>

<script>
      var password = document.getElementById("NewPassword");
      var confirm_password = document.getElementById("ConfirmPassword");

      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
  </script>

</html>