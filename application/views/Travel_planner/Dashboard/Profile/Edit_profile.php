<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Profile | <?php echo @$_SESSION['name'] ;?></title>
    </head>
    <style>
        img[src=""] {
            display: none;
            }
    </style>
    <body>
      <div style="min-height: 89%; background-image: url(
        
      );">
        <div class="card card-primary col-md-6 p-0" style=" margin: auto; width: 50%; ">
          <div class="card-header">
            <h3 class="card-title"><b>E</b>dit <b>P</b>rofile</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <img style="height:150px; width: 150px; border-radius: 50%; border: 10px solid #4F5F5F;" src="<?php if($image){ echo ("data:image/jpeg;base64, ".base64_encode($image));}?>"/>
                <button class='btn btn-xs btn-danger' name='dltImg' value="1"><i class="fas fa-trash"></i></button>
                <div class="input-group">
                  <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile" accept=".jpeg">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label>Select</label>
                  <select class="form-control" name="prefix">
                      <option value="">--Select--</option>
                      <option value="Mr." <?php if($prefix && $prefix=="Mr.") echo "selected"; ?>>Mr.</option>
                      <option value="Ms." <?php if($prefix && $prefix=="Ms.") echo "selected"; ?>>Ms.</option>
                      <option value="Mrs." <?php if($prefix && $prefix=="Mrs.") echo "selected"; ?>>Mrs.</option>
                      <option value="Dr." <?php if($prefix && $prefix=="Dr.") echo "selected"; ?>>Dr.</option>
                      <option value="Adv." <?php if($prefix && $prefix=="Adv.") echo "selected"; ?>>Adv.</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="name">Name: </label>
                  <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="number">Number: </label>
                  <input name="number" class="form-control" type="tel" value="<?php echo $number; ?>">
              </div>
              <label for="gender">Gender</label>
              <div class="form-group">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="gender" value="m" id='genderM' <?php if(isset($gender) && $gender=="m"){echo "checked";}; ?>>
                    <label for="genderM" class="custom-control-label">Male</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id='genderF' class="custom-control-input" type="radio" name="gender" value="f" <?php if(isset($gender) && $gender=="f"){echo "checked";}; ?>>
                    <label for="genderF" class="custom-control-label">Female</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id='genderO' class="custom-control-input" type="radio" name="gender" value="o" <?php if(isset($gender) && $gender=="o"){echo "checked";}; ?>>
                    <label for="genderO" class="custom-control-label">Other</label>
                </div>

              </div>
              <div class="form-group">

                <label for="dob">Date of Birth</label>
                <!-- Date Client Validation Min-100yrs max-tdy  -->
                <input class="form-control" name="dob" type="date" value="<?php echo $dob; ?>" min="<?php echo date("Y-m-d", time()-(86400*36500)) ?>" max="<?php echo date("Y-m-d",time()-378432000) ?>">
              </div>
              <!-- /.card-body -->
              
              <div class="float-right">
                <button type="submit" value="profile_edit" class="btn btn-primary">Save</button>
                <button name='editSubmit' value="1" class="btn btn-success">Submit</button>
              </div>
            </form>
            <a href='./'><button class="btn btn-danger">cancel</button></a>
          </div>
        </div>
        <a class='float-right' href='vscode://file/C:\xampp\htdocs\CodeIgniterApp\application\views\Travel_planner\Dashboard\Profile\Edit_profile.php'><button class='btn btn-sm btn-dark'>Open In</button><button class="btn btn-sm btn-outline-primary">Code</button></a>
      </div>
    </body>
</html>
