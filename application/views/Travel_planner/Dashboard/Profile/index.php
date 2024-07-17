<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile | <?php echo @$_SESSION['name'] ;?></title>
    </head>
    <style>
        img[src=""] {
            display: none;
            }
    </style>
    <body>
        <div style="background-color: #f2f2f2;" class="center-page">
            <div class="card card-primary card-outline col-md-3">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="<?php if($image){ echo ("data:image/jpeg;base64, ".base64_encode($image));}?>"/>
                </div>
                <h3 class="profile-username text-center"><?=$prefix.' '.$name?></h3>

                <p class="text-muted text-center"><?=$email?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Number</b> <a class="float-right"><?=$number?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Gender</b> <a class="float-right"><?=$gender?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Date of Birth</b> <a class="float-right"><?=($dob ? date('D d M Y',strtotime($dob)) : NULL )?></a>
                  </li>
                </ul>

                <a href="<?=adminTravelPlannerUrl()?>User_profile/Edit_profile" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
                    <a href="<?=adminTravelPlannerUrl()?>User_profile/Password"><button type="button" class="btn btn-small btn-danger float-right">Change Password</button></a>
                </div>
            </div>
        </div>
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\admin\Travel_planner\Dashboard\Profile\index.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
    </body>
</html>
